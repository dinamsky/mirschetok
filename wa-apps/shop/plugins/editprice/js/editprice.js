$(document).ready(function () {

    $("#editprice-bulk-dialog").on('change', 'input[name="type"]', function () {
        if ($('#editprice-bulk-dialog input[name="type"]:checked').val() == 1) {
            $('#editprice-clear-compare').show().find('input').removeAttr('disabled');
            $('#editprice-restore-from-compare').show().find('input').removeAttr('disabled');
            $('#editprice-set-compare').hide().find('input').attr('disabled', 'disabled');
            $('#editprice-source-price').show().find('select').removeAttr('disabled');
        } else {
            $('#editprice-set-compare').show().find('input').removeAttr('disabled');
            $('#editprice-clear-compare').hide().find('input').attr('disabled', 'disabled');
            $('#editprice-restore-from-compare').hide().find('input').attr('disabled', 'disabled');
            $('#editprice-source-price').hide().find('select').attr('disabled', 'disabled');
        }
    });

    $('#editprice-clear-compare input').on('change', function () {
        if ($(this).is(':checked')) {
            $('#editprice-restore-from-compare').show().find('input').removeAttr('disabled');
        } else {
            $('#editprice-restore-from-compare').hide().find('input').attr('disabled', 'disabled');
        }
    });

    $('#editprice-restore-from-compare input').on('change', function () {
        if ($(this).is(':checked')) {
            $('#editprice-bulk-dialog input[name="change"]').val('').attr('disabled', 'disabled');
        } else {
            $('#editprice-bulk-dialog input[name="change"]').removeAttr('disabled');
        }
    });

    $("#editprice-bulk-dialog").on('change', 'select.currency', function () {
       if ($(this).val() == '%') {
           $('#editprice-round').show().find('input').removeAttr('disabled');
       } else {
           $('#editprice-round').hide().find('input').attr('disabled', 'disabled');
       }
    });

    $("#editprice-bulk").click(function () {
        var products = $.product_list.getSelectedProducts(true);
        if (!products.count) {
            alert($_('Please select at least one product'));
            return false;
        }
        $("#editprice-bulk-dialog").waDialog({
            title: $_('Bulk editing of prices') + ' <span class="gray">(' + products.count + ')</span>',
            buttons: '<input type="submit" value="' + $_('Apply') + '" class="button green" /> ' + $_('or') + ' <a href="#" class="cancel">' + $_('cancel') + '</a>',
            onLoad: function () {
                $("#editprice-bulk-dialog h1 span.gray").html('(' + products.count + ')');
                $('#editprice-bulk-saving').hide();
            },
            onSubmit: function (d) {
                $('#editprice-bulk-saving').show();
                $.post('?plugin=editprice&module=change', $(this).serializeArray().concat(products.serialized), function (response) {
                    if (response.status == 'fail') {
                        alert($_('An unexpected error occurred while saving data'));
                    }
                }, 'json').fail(function () {
                    alert($_('An unexpected error occurred while saving data'));
                }).always(function () {
                    d.trigger('close');
                    $.products.dispatch();
                });
                return false;
            }
        });
        return false;
    });

    function setEditable(id, tr, active_index) {
        $.post('?plugin=editprice&module=skus', {id: id}, function (response) {
            if (response.status == 'ok') {
                if (response.data.currencies) {
                    var currencies = $('<select></select>');
                    for (var i = 0; i < response.data.currencies.length; i++) {
                        currencies.append('<option value="' + response.data.currencies[i] + '">' + response.data.currencies[i] +  '</option>');
                    }
                } else {
                    var currencies = false;
                }

                var edit_status = response.data.edit_status;
                var edit_stock = response.data.edit_stock;

                if (edit_status) {
                    if (!$("#product-list tr.header th.editprice-status").length) {
                        $("#product-list tr.header").append('<th class="short align-right editprice-status">' + $_('Published') + '</td>');
                        $("#product-list tr.product").each(function () {
                           if (!$(this).find('td.editprice-status').length) {
                               $(this).append('<td class="editprice-status short nowrap align-right"></td>');
                           }
                        });
                    }
                }
                tr.each(function () {
                    if (edit_status) {
                        if (!$(this).find('td.editprice-status').length) {
                            $(this).append('<td class="editprice-status short nowrap align-right"></td>');
                        }
                        $(this).find("td.editprice-status").append('<input type="checkbox" ' + ($(this).hasClass('gray') ? '' : 'checked') + '>');
                    }
                    $(this).addClass('edit');
                    var id = $(this).data('product-id');
                    var skus = response.data.skus[id];

                    var td = $(this).find('.s-product-price');
                    td.data('html', td.html()).empty();

                    if (edit_stock) {
                        var count_td = $(this).find('.s-product-stock');
                        count_td.data('html', count_td.html()).empty();
                    }

                    for (var i = 0; i < skus.length; i++) {
                        var sku = skus[i];
                        if (response.data.edit_sku) {
                            if (skus.length > 1) {
                                td.append('<input type="radio" value="' + sku.id + '" name="default_sku_' + id + '"' + (sku.default ? ' checked' : '') + '><span class="sku-name" style="font-size:80%">' + sku.name + '</span> ');
                            }
                            td.append($('<input data-sku_id="'+ sku.id + '" name="sku" placeholder="' + $_('SKU code') + '" class="editprice" style="width:80px !important;" type="text">').val(sku.sku));
                            td.append(' ');
                        } else {
                            td.append((skus.length > 1 ? ('<span class="sku-name" style="font-size:80%">' + sku.name + ' ') : '') +
                                (sku.sku && sku.sku.length ? '<span class="gray">' + sku.sku + '</span> ' : '' ) +
                                (skus.length > 1 ? '</span>' : ''));
                        }
                        if (response.data.edit_available) {
                            td.append('<input data-sku_id="'+ sku.id + '" name="available" title="' + $_('Available for purchase') + '" class="editprice" type="checkbox"' + (parseInt(sku.available) ? ' checked': '') + ' value="1">');
                        }

                        td.append($('<input data-sku_id="'+ sku.id + '" name="price" class="editprice" style="width:60px !important;text-align:right" type="text">').val(sku.price));
                        if (sku.compare_price != undefined) {
                            td.append(' ');
                            td.append($('<input data-sku_id="'+ sku.id + '" name="compare_price" class="editprice strike" title="' + $_('Compare price') + '" style="width:60px !important;text-align:right" type="text">').val(sku.compare_price));
                        }
                        if (sku.purchase_price != undefined) {
                            td.append(' ');
                            td.append($('<input data-sku_id="'+ sku.id + '" name="purchase_price" class="editprice gray" title="' + $_('Purchase price') + '" style="width:60px !important;text-align:right" type="text">').val(sku.purchase_price));
                        }

                        td.append(' ');
                        if (currencies) {
                            td.append(currencies.clone().val(sku.currency));
                        } else {
                            td.append(sku.currency);
                        }
                        td.append('<br>');
                        if (edit_stock) {
                            if (!response.data.stocks || response.data.stocks.length <= 1) {
                                count_td.append($('<input data-sku_id="' + sku.id + '" name="count" class="editprice" placeholder="∞" style="' + (sku.available && sku.available != '0' ? '' : 'color:#999;') + 'width:60px !important;text-align:right" type="text">').val(sku.count));
                                count_td.append('<br>');
                            } else {
                                var count_index = $(this).children().index(count_td);
                                var th = $('#product-list tr.header th:eq(' + count_index + ')');
                                if (!th.find('div.editprice-stocks').length) {
                                    var div = $('<div class="editprice-stocks"></div>');
                                    for (var j = 0; j < response.data.stocks.length; j++) {
                                        div.append($('<div style="display: inline-block; width: auto; width: 36px; text-align: left"></div>').text(response.data.stocks[j].name).attr('title', response.data.stocks[j].name));
                                        if (j < response.data.stocks.length - 1) {
                                            div.append(' ');
                                        }
                                    }
                                    th.append(div);
                                }
                                var wrapper = $('<div></div>');
                                var div = $('<div></div>');
                                if (!sku.stock) {
                                    wrapper.append($('<input data-sku_id="' + sku.id + '" name="count" class="editprice" placeholder="∞" style="' + (sku.available && sku.available != '0' ? '' : 'color:#999;') + 'width:49px !important;text-align:right" type="text">').val(sku.count));
                                    var a = $('<a href="#" title="' + $_('Multiple stocks') + '" class="small gray inline-link js-action"><i class="icon16 ss cube-bw" style="opacity: 0.4; margin-top: 3px"></i></a>');
                                    a.on('click', function () {
                                        var p = $(this).parent();
                                        p.children().not('div').remove();
                                        p.children('div').show().find('input:disabled').removeAttr('disabled');
                                        return false;
                                    });
                                    wrapper.append(' ');
                                    wrapper.append(a);
                                    div.hide();
                                }
                                for (var j = 0; j < response.data.stocks.length; j++) {
                                    var s = response.data.stocks[j];
                                    var c;
                                    if (sku.stock) {
                                        c = sku.stock[s.id] || '';
                                    } else {
                                        c = '';
                                    }
                                    div.append($('<input ' + (sku.stock ? '' : 'disabled') + ' data-sku_id="' + sku.id + '" name="count_' + s.id + '" class="editprice" placeholder="∞" style="' + (sku.available && sku.available != '0' ? '' : 'color:#999;') + 'width:32px !important;text-align:right" type="text">').val(c).attr("title", s.name));
                                    if (j < response.data.stocks.length - 1) {
                                        div.append(' ');
                                    }
                                }
                                wrapper.append(div);
                                count_td.append(wrapper);
                            }
                        }
                    }
                    if (($('#product-list').width() > $('#product-list').parent().width()) && $('#product-list span.sku-name').length) {
                        var diff = $('#product-list').width() - $('#product-list').parent().width();
                        var w = $('#product-list span.sku-name:first').parent().width() - diff - 120;
                        if (w <= 100) {
                            w = 100;
                        }
                        $('#product-list .sku-name').each(function () {
                            if ($(this).width() > w) {
                                $(this).hover(function () {
                                    if (!$('#editprice-tooltip').length) {
                                        $('body').append('<span id="editprice-tooltip" style="position: absolute; padding: 2px; background: #fff; border: 1px solid #ccc;display:none"></span>');
                                    }
                                    $('#editprice-tooltip').html($(this).html()).css({
                                        left: $(this).offset().left,
                                        top: $(this).offset().top + 16
                                    }).fadeIn('slow');
                                }, function () {
                                    $('#editprice-tooltip').remove();
                                });
                            }
                        });
                        $('#product-list .sku-name').css({display: 'inline-block', 'max-width': w + 'px', overflow: 'hidden'});
                    }
                });
                if (active_index) {
                    $(tr[0]).find('td:eq(' + active_index+ ')').find('input.editprice:first').focus();
                } else {
                    $(tr[0]).find('input.editprice:first').focus();
                }
                if ($("#editprice-action div").is(':hidden')) {
                    $("#editprice-action div").show();
                    $(document).on('keydown.editprice', function(e) {
                        // ctrl + s
                        if (e.ctrlKey && (e.which == 83)) {
                            e.preventDefault();
                            savePrices();
                            return false;
                        }
                    });
                }
            }
        }, "json");
    }

    function savePrices() {
        var data = {};
        var elements = $.product_list.container.find('.product.edit');
        elements.each(function () {
            var product_id = $(this).data('product-id');
            data[product_id] = {};
            if ($(this).find('select').length) {
                data[product_id]['currency'] = $(this).find('select').val();
            }
            if ($(this).find('input:radio').length) {
                data[product_id]['sku_id'] = $(this).find('input:radio:checked').val();
            }
            if ($(this).find('.editprice-status input').length) {
                data[product_id]['status'] = $(this).find('.editprice-status input').is(':checked') ? 1 : 0;
            }
            $(this).find('input.editprice').each(function () {
                if (!data[product_id][$(this).data('sku_id')]) {
                    data[product_id][$(this).data('sku_id')] = {};
                }
                if ($(this).is(':checkbox')) {
                    data[product_id][$(this).data('sku_id')][$(this).attr('name')] = $(this).is(':checked') ? 1 : 0;
                } else {
                    data[product_id][$(this).data('sku_id')][$(this).attr('name')] = $(this).val();
                }
            })
        });
        var edit_status = $('#product-list .editprice-status').length ? 1 : 0;
        $.post("?plugin=editprice&module=save", {data: data}, function (response) {
            if (response.status == 'ok') {
                elements.each(function () {
                    var product_id = $(this).data('product-id');
                    if (response.data[product_id] !== undefined) {
                        $(this).find('.s-product-price').html(response.data[product_id]['price']).removeData('html');
                        var count_td = $(this).find('.s-product-stock');
                        if (count_td.find('input').length) {
                            if (response.data[product_id]['count'] === null) {
                                var count_html = '<span class="gray">∞</span>';
                            } else {
                                var count_html = response.data[product_id]['count'] || '0';
                            }
                            count_td.html('<span>' + count_html + '</span>').removeData('html');
                        }
                        $(this).removeClass('edit');
                        if (edit_status) {
                            if (response.data[product_id]['status']) {
                                $(this).removeClass('gray');
                            } else {
                                $(this).addClass('gray');
                            }
                        }
                    }
                });
                if (!$.product_list.container.find('.product.edit').length) {
                    $("#editprice-action div").hide();
                    $(document).off('keydown.editprice');
                }
                if (edit_status) {
                    $('#product-list .editprice-status').remove();
                }

                $('#product-list tr.header div.editprice-stocks').remove();
            } else {
                alert(response.errors);
            }
        }, "json");
    }

    $('#product-list').bind('append_product_list', function(e, products) {
        if ($("#editprice-action div").is(':visible')) {
            $("#editprice-plugin").click();
        }
        $('#product-list').find('.s-product-price,.s-product-stock').data('plugin', 'editprice');
    });

    $("#editprice-plugin").click(function () {
        var elements = $.product_list.container.find('.product.selected').not('.edit');
        if (!elements.length) {
            elements = $.product_list.container.find('.product').not('.edit');
        }
        var ids = [];
        elements.each(function () {
            ids.push($(this).data('product-id'));
        });
        if (ids.length) {
            setEditable(ids, elements);
        }
        return false;
    });
    $("#product-list").on('change', 'select', function () {
        $(this).closest('td').find('select').val($(this).val());
    });
    $("#product-list").on('click', '.s-product-price,.s-product-stock', function (e) {
        var tr = $(this).parent();
        if (tr.hasClass('edit')) {
            return;
        }
        setEditable(tr.data('product-id'), tr, tr.children().index($(this)));
    });

    $("#editprice-cancel").click(function () {
        if (confirm($_('Are you sure you want to cancel all changes?'))) {
            $.product_list.container.find('.product.edit').each(function () {
                var td = $(this).find('.s-product-price');
                td.html(td.data('html')).removeData('html');
                td = $(this).find('.s-product-stock');
                if (td.find('input').length) {
                    td.html(td.data('html')).removeData('html');
                }
                $(this).removeClass('edit');
            });
            $('#product-list .editprice-status').remove();
            $("#editprice-action div").hide();
            $('#product-list tr.header div.editprice-stocks').remove();
            $(document).off('keydown.editprice');
        }
        return false;
    });
    $("#editprice-multiply").click(function () {
        var dm = 0;
        var m = 1.0;
        if ($('#editprice-plugin').data('percent')) {
            m = 1.0 + parseFloat($('#editprice-p').val()) / 100.0;
        } else {
            if ($('#editprice-m').val().substr(0, 1) == '/') {
                dm = parseFloat($('#editprice-m').val().substr(1));
            } else {
                m = parseFloat($('#editprice-m').val());
            }
        }
        $.product_list.container.find('.product.edit input.editprice[name=price]').each(function () {
            if ($(this).val()) {
                var int_round = $('#editprice-plugin').attr('data-int-round') + '';
                if (int_round.length) {
                    var v = Math.ceil(Math.round(100000 * (dm ? 1.0/dm : m) * parseFloat($(this).val())) / 100000) + '';
                    while (int_round.length > v.length) {
                        int_round = int_round.substr(1);
                    }
                    var d = v.substr(v.length - int_round.length);
                    if (d > int_round) {
                        if (v.length > d.length) {
                            v = (parseInt(v.substr(0, v.length - d.length)) + 1) + int_round;
                        } else {
                            v = '1' + int_round;
                        }
                    } else {
                        v = v.substr(0, v.length - d.length) + int_round;
                    }
                    $(this).val(v);
                } else {
                    var round = $('#editprice-plugin').data('round') + '';
                    if (round.length) {
                        round = parseInt(round);
                        var q = Math.pow(10, round);
                        $(this).val(Math.round(q * (dm ? 1.0/dm : m) * parseFloat($(this).val())) / q);
                    } else {
                        $(this).val(Math.round(100000 * (dm ? 1.0/dm : m) * parseFloat($(this).val())) / 100000);
                    }
                }
            }
        });
        return false;
    });
    $("#editprice-save").click(savePrices);
    $("#editprice-currency").change(function () {
        var v = $(this).val();
        if (v && v.length) {
            $('#product-list select').val(v);
        }
    });
});