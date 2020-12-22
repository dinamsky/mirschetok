<?php
return array (
  'plugins' => 
  array (
    'shop' => 
    array (
      'categoryimage' => 
      array (
        'name' => 'Картинки для категорий',
        'description' => 'Позволяет добавлять изображения для категорий',
        'version' => '1.4',
        'vendor' => 809114,
        'img' => 'wa-apps/shop/plugins/categoryimage/img/categoryimage.png',
        'shop_settings' => true,
        'handlers' => 
        array (
          'category_save' => 'categorySave',
          'category_delete' => 'categoryDelete',
          'backend_products' => 'categoryTitle',
          'backend_category_dialog' => 'categoryDialog',
        ),
        'id' => 'categoryimage',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'addtogroup' => 
      array (
        'name' => 'Автоназначение категории контакта для вновь зарегистрированных пользователей',
        'description' => 'Переносит всех вновь зарегистрированных покупателей в выбранную категорию',
        'version' => '1.0',
        'img' => 'wa-apps/shop/plugins/addtogroup/img/addtogroup.png',
        'vendor' => '942951',
        'handlers' => 
        array (
          'signup' => 'signup',
        ),
        'id' => 'addtogroup',
        'app_id' => 'shop',
      ),
      'asn' => 
      array (
        'name' => 'Генератор имен артикулов',
        'img' => 'wa-apps/shop/plugins/asn/img/asn.png',
        'version' => '1.1.0',
        'vendor' => '670917',
        'handlers' => 
        array (
          'product_save' => 'hookProductSave',
        ),
        'id' => 'asn',
        'app_id' => 'shop',
      ),
      'bnpcomments' => 
      array (
        'name' => 'Комментарии к заказу',
        'icon' => 'img/icon.png',
        'version' => '1.0.0',
        'vendor' => '986052',
        'shop_settings' => true,
        'frontend' => false,
        'handlers' => 
        array (
          'backend_order' => 'backendOrder',
        ),
        'id' => 'bnpcomments',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'brand' => 
      array (
        'name' => 'Бренды PRO',
        'description' => 'Плагин для создания и гибкого управления брендами',
        'version' => '2.13',
        'img' => 'wa-apps/shop/plugins/brand/img/icon.png',
        'vendor' => '934303',
        'frontend' => true,
        'custom_settings' => true,
        'handlers' => 
        array (
          'backend_menu' => 'handleBackendMenu',
          'frontend_nav' => 'handleFrontendNav',
          'products_collection' => 'handleProductsCollection',
          'sitemap' => 'handleSitemap',
          'rights.config' => 'handleRightsConfig',
          'routing' => 'routing',
        ),
        'id' => 'brand',
        'app_id' => 'shop',
      ),
      'cartsreport' => 
      array (
        'name' => 'Товары в корзине',
        'description' => 'Плагин добавляет новые отчёты.',
        'img' => 'wa-apps/shop/plugins/cartsreport/img/cartsreport.png',
        'version' => '1.0.0',
        'vendor' => '972539',
        'handlers' => 
        array (
          'order_action.create' => 'orderActionCreate',
          'frontend_checkout' => 'frontendCheckout',
          'backend_reports' => 'backendReports',
          'frontend_cart' => 'frontendCart',
          'cart_delete' => 'cartDelete',
          'cart_add' => 'cartAdd',
        ),
        'id' => 'cartsreport',
        'app_id' => 'shop',
      ),
      'catalogreviews' => 
      array (
        'name' => 'Каталог отзывов',
        'description' => '',
        'version' => '2.10',
        'img' => 'wa-apps/shop/plugins/catalogreviews/img/icon16.png',
        'vendor' => '934303',
        'shop_settings' => true,
        'frontend' => true,
        'handlers' => 
        array (
          'routing' => 'getRoutingRules',
          'backend_menu' => 'handleBackendMenu',
          'frontend_nav' => 'handleFrontendNav',
          'frontend_category' => 'handleFrontendCategory',
        ),
        'id' => 'catalogreviews',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'copychpu' => 
      array (
        'name' => 'Генерация ЧПУ в карточке товара',
        'description' => 'Ручная генерация ЧПУ в карточке товара',
        'img' => 'wa-apps/shop/plugins/copychpu/img/copychpu.png',
        'version' => '0.0.2',
        'vendor' => '1024551',
        'handlers' => 
        array (
          'backend_product' => 'backendProductEdit',
        ),
        'id' => 'copychpu',
        'app_id' => 'shop',
      ),
      'coupon' => 
      array (
        'name' => 'Генератор скидочных купонов',
        'description' => '',
        'img' => 'wa-apps/shop/plugins/coupon/img/coupon.png',
        'version' => '1.0.2',
        'vendor' => '972539',
        'shop_settings' => true,
        'handlers' => 
        array (
          'backend_orders' => 'backendOrders',
        ),
        'id' => 'coupon',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'cwebp' => 
      array (
        'name' => 'Изображения WEBP',
        'img' => 'wa-apps/shop/plugins/cwebp/img/cwebp.png',
        'version' => '3.9',
        'vendor' => '1027956',
        'handlers' => 
        array (
          'routing' => 'frontendHook',
          'product_images_delete' => 'deleteImage',
          '*' => 
          array (
            0 => 
            array (
              'event_app_id' => '*',
              'event' => 'routing',
              'class' => 'shopCwebpPlugin',
              'method' => 'frontendHook',
            ),
          ),
        ),
        'id' => 'cwebp',
        'app_id' => 'shop',
      ),
      'delpayfilter' => 
      array (
        'name' => 'Фильтр доставки и оплаты',
        'description' => 'Фильтрация методов доставки и оплаты по любым критериям',
        'img' => 'wa-apps/shop/plugins/delpayfilter/img/delpayfilter.png',
        'vendor' => '969712',
        'version' => '1.11.3',
        'shop_settings' => true,
        'handlers' => 
        array (
          'checkout_before_shipping' => 'checkoutBeforeShipping',
          'checkout_after_shipping' => 'checkoutAfterShipping',
          'checkout_render_shipping' => 'checkoutRenderShipping',
          'checkout_render_payment' => 'checkoutRenderPayment',
          'frontend_order_cart_vars' => 'frontendOrderCartVars',
          'order_calculate_discount' => 'orderCalculateDiscount',
        ),
        'id' => 'delpayfilter',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'dopinfo' => 
      array (
        'name' => 'DopInfo',
        'description' => 'Плагин выводит в бекэнд заказа дополнительную информацию',
        'img' => 'wa-apps/shop/plugins/dopinfo/img/dopinfo.png',
        'vendor' => '986052',
        'version' => '3.2',
        'shop_settings' => true,
        'handlers' => 
        array (
          'backend_order' => 'getInfo',
        ),
        'id' => 'dopinfo',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'editprice' => 
      array (
        'name' => 'Быстрое редактирование цен',
        'description' => 'Позволяет редактировать цены товаров прямо из списка',
        'version' => '2.2',
        'vendor' => 809114,
        'img' => 'wa-apps/shop/plugins/editprice/img/editprice.png',
        'handlers' => 
        array (
          'backend_products' => 'backendProducts',
        ),
        'id' => 'editprice',
        'app_id' => 'shop',
      ),
      'emailform' => 
      array (
        'name' => 'Скидка за подписку',
        'img' => 'wa-apps/shop/plugins/emailform/img/emailform.png',
        'description' => 'Сборщик email адресов, предложи купон за подписку',
        'version' => '1.042',
        'vendor' => 973724,
        'custom_settings' => true,
        'frontend' => true,
        'handlers' => 
        array (
          'frontend_footer' => 'frontendFooter',
          'routing' => 'routing',
        ),
        'id' => 'emailform',
        'app_id' => 'shop',
      ),
      'f7root' => 
      array (
        'name' => 'Товары без категории, без картинок, скрытые, по характеристикам и другие фильтры',
        'description' => 'быстрый поиск товаров без категории,без картинок, скрытых, с определенной характеристикой, а также другие фильтры товаров',
        'vendor' => 917874,
        'version' => '3.3',
        'img' => 'wa-apps/shop/plugins/f7root/img/f7logo16.png',
        'handlers' => 
        array (
          'products_collection' => 'f7rootproductsCollection',
          'backend_products' => 'f7backendProducts',
        ),
        'id' => 'f7root',
        'app_id' => 'shop',
      ),
      'facebookpro' => 
      array (
        'name' => 'Facebookpro',
        'description' => 'Экспорт товаров в каталог продуктов Facebook и Instagram',
        'img' => 'wa-apps/shop/plugins/facebookpro/img/facebookpro.png',
        'icon' => 
        array (
          16 => 'img/facebookpro.png',
          200 => 'img/facebook.png',
        ),
        'logo' => 'img/facebook.png',
        'vendor' => '1064599',
        'version' => '0.0.8',
        'importexport' => 'profiles',
        'export_profile' => true,
        'frontend' => true,
        'handlers' => 
        array (
          'backend_products' => 'backendProductsEvent',
          'routing' => 'routing',
        ),
        'id' => 'facebookpro',
        'app_id' => 'shop',
      ),
      'fastdeleteimages' => 
      array (
        'name' => 'Быстрое удаление изображений',
        'description' => '',
        'version' => '1.0.0',
        'vendor' => '955450',
        'img' => 'wa-apps/shop/plugins/fastdeleteimages/img/logo.png',
        'handlers' => 
        array (
          'backend_product_edit' => 'backend_product_edit',
        ),
        'id' => 'fastdeleteimages',
        'app_id' => 'shop',
      ),
      'flexdiscount' => 
      array (
        'name' => 'Гибкие скидки',
        'description' => 'Все типы скидок. Конструктор скидок',
        'img' => 'wa-apps/shop/plugins/flexdiscount/img/flexdiscount.png',
        'vendor' => '969712',
        'version' => '4.85',
        'frontend' => true,
        'handlers' => 
        array (
          'backend_menu' => 'backendMenu',
          'backend_settings_discounts' => 'backendSettingsDiscounts',
          'backend_product_sku_settings' => 'backendProductSkuSettings',
          'backend_product_edit' => 'backendProductEdit',
          'backend_order' => 'backendOrder',
          'backend_orders' => 'backendOrders',
          'backend_order_edit' => 'backendOrderEdit',
          'checkout_before_shipping' => 'checkoutBeforeShipping',
          'checkout_before_confirm' => 'checkoutBeforeConfirm',
          'checkout_render_payment' => 'checkoutRenderPayment',
          'checkout_render_shipping' => 'checkoutRenderShipping',
          'frontend_cart' => 'frontendCart',
          'frontend_checkout' => 'frontendCheckout',
          'frontend_head' => 'frontendHead',
          'frontend_footer' => 'frontendFooter',
          'frontend_product' => 'frontendProduct',
          'frontend_products' => 'frontendProducts',
          'frontend_my_nav' => 'frontendMyNav',
          'frontend_order_cart_vars' => 'frontendOrderCartVars',
          'order_calculate_discount' => 'orderCalculateDiscount',
          'order_action.create' => 'orderActionCreate',
          'order_action.pay' => 'orderActionApplyAffiliate',
          'order_action.complete' => 'orderActionApplyAffiliate',
          'order_action.restore' => 'orderActionApplyAffiliate',
          'order_action.delete' => 'orderActionCancelAffiliate',
          'order_action.refund' => 'orderActionCancelAffiliate',
          'order_action.edit' => 'orderActionEdit',
          'product_presave' => 'productPreSave',
          'routing' => 'routing',
          'rights.config' => 'rightsConfig',
          'promo_rule_types' => 'promoRuleTypes',
          'backend_marketing_sidebar' => 'backendMarketingSidebar',
          'promo_rule_editor' => 'promoRuleEditor',
          'backend_marketing_promo' => 'backendMarketingPromo',
          'promo_rule_validate' => 'promoRuleValidate',
          'promo_workflow_run' => 'promoWorkflowRun',
        ),
        'id' => 'flexdiscount',
        'app_id' => 'shop',
      ),
      'giftcard' => 
      array (
        'name' => 'Подарочный сертификат',
        'version' => '1.0',
        'vendor' => 995002,
        'description' => 'Автоматизированная продажа подарочных сертификатов',
        'img' => 'wa-apps/shop/plugins/giftcard/img/giftcard.png',
        'frontend' => true,
        'shop_settings' => true,
        'handlers' => 
        array (
          'order_action.pay' => 'order_paid',
          'order_action.complete' => 'order_complete',
          'order_action.edit' => 'order_edit',
          'order_action.delete' => 'order_delete',
          'order_action.refund' => 'order_refund',
          'backend_order' => 'backend_order',
          'frontend_my_order' => 'frontend_my_order',
          'routing' => 'routing',
        ),
        'id' => 'giftcard',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'incarts' => 
      array (
        'name' => 'Этот товар уже в корзине',
        'img' => 'wa-apps/shop/plugins/incarts/img/incarts.png',
        'description' => 'Визуально выделяет товар, который лежит в корзине.',
        'version' => '1.31',
        'vendor' => 973724,
        'custom_settings' => true,
        'handlers' => 
        array (
          'frontend_head' => 'frontendHead',
        ),
        'id' => 'incarts',
        'app_id' => 'shop',
      ),
      'lastmodified' => 
      array (
        'name' => 'Last-Modified',
        'description' => 'Плагин для ускорения индексации интернет-магазина',
        'img' => 'wa-apps/shop/plugins/lastmodified/img/lm.png',
        'vendor' => '934303',
        'frontend' => false,
        'shop_settings' => true,
        'version' => '1.5',
        'handlers' => 
        array (
          'frontend_head' => 'handleFrontendHead',
        ),
        'id' => 'lastmodified',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'linkcanonical' => 
      array (
        'name' => 'Link Canonical',
        'description' => 'Автоматическая генерация URL для тега link rel="canonical"',
        'img' => 'wa-apps/shop/plugins/linkcanonical/img/linkcanonical.png',
        'version' => '1.14',
        'vendor' => '934303',
        'shop_settings' => true,
        'handlers' => 
        array (
          'frontend_head' => 'frontendHead',
          'backend_category_dialog' => 'backendCategoryDialog',
          'backend_product_edit' => 'backendProductEdit',
          'product_save' => 'productSave',
          'category_save' => 'categorySave',
          'shop_seofilter_frontend' => 'handleSeofilterFrontend',
        ),
        'id' => 'linkcanonical',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'massupdating' => 
      array (
        'name' => 'Массовое редактирование',
        'img' => 'wa-apps/shop/plugins/massupdating/img/massupdating.png',
        'version' => '4.1.3.12',
        'vendor' => 1015472,
        'handlers' => 
        array (
          'backend_products' => 'backendProducts',
        ),
        'id' => 'massupdating',
        'app_id' => 'shop',
      ),
      'metrika' => 
      array (
        'name' => 'Яндекс.Метрика',
        'description' => 'Вся статистика о вашем магазине',
        'version' => '1.7',
        'shop_settings' => true,
        'vendor' => 898299,
        'frontend' => false,
        'img' => 'wa-apps/shop/plugins/metrika/img/metrika.png',
        'icons' => 
        array (
          16 => 'img/metrika.png',
        ),
        'handlers' => 
        array (
          'backend_reports' => 'backendmenu',
        ),
        'id' => 'metrika',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'mini' => 
      array (
        'name' => 'Автоанонс!',
        'description' => 'Автоматический вывод анонсов',
        'version' => '1.0.1',
        'vendor' => 1002899,
        'handlers' => 
        array (
          'frontend_header' => 'frontendHeader',
        ),
        'img' => 'wa-apps/shop/plugins/mini/img/mini-announce.png',
        'id' => 'mini',
        'app_id' => 'shop',
      ),
      'productfeatures' => 
      array (
        'name' => 'Характеристики товаров',
        'description' => 'Позволяет редактировать характеристики товаров из списка',
        'img' => 'wa-apps/shop/plugins/productfeatures/img/logo.png',
        'vendor' => 809114,
        'version' => '1.6',
        'shop_settings' => true,
        'handlers' => 
        array (
          'backend_products' => 'backendProducts',
        ),
        'id' => 'productfeatures',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'quickorder' => 
      array (
        'name' => 'Купить в один клик',
        'description' => 'Быстрый заказ товара и корзины в целом',
        'img' => 'wa-apps/shop/plugins/quickorder/img/quickorder.png',
        'vendor' => '969712',
        'version' => '2.7',
        'shop_settings' => true,
        'frontend' => true,
        'handlers' => 
        array (
          'frontend_product' => 'frontendProduct',
          'frontend_head' => 'frontendHead',
          'frontend_cart' => 'frontendCart',
          'frontend_order_cart_vars' => 'frontendOrderCartVars',
          'backend_reports' => 'backendReports',
          'backend_order' => 'backendOrder',
          'routing' => 'routing',
        ),
        'id' => 'quickorder',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'region' => 
      array (
        'name' => 'Регионы на поддоменах',
        'description' => 'Позволяет разнести разные города на поддомены',
        'img' => 'wa-apps/shop/plugins/region/img/logo.png',
        'version' => '1.2.4',
        'vendor' => 1008046,
        'shop_settings' => true,
        'handlers' => 
        array (
          'frontend_footer' => 'frontendFooter',
          'frontend_head' => 'frontendHead',
        ),
        'id' => 'region',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'regions' => 
      array (
        'name' => 'SEO-регионы',
        'description' => 'Плагин для масштабирования вашего бизнеса',
        'img' => 'wa-apps/shop/plugins/regions/img/regions.png',
        'vendor' => '934303',
        'frontend' => true,
        'shop_settings' => true,
        'version' => '4.15',
        'handlers' => 
        array (
          'seo_fetch_templates' => 'seoFetchTemplatesHandler',
          'seo_fetch_template_helper' => 'seoFetchTemplateHelperHandler',
          'seofilter_fetch_templates' => 'seoFetchTemplatesHandler',
          'seofilter_fetch_template_helper' => 'seoFetchTemplateHelperHandler',
          'frontend_head' => 'frontendHeadHandler',
          'cart_add' => 'cartAddHandler',
          'backend_menu' => 'backendMenuHandler',
          'backend_products' => 'backendProductsHandler',
          'backend_product' => 'backendProductsHandler',
          'rights.config' => 'rightsConfigHandler',
          'sitemap' => 'sitemapHandler',
          'routing' => 'routing',
          'app_sitemap_structure' => 'handleAppSitemapStructure',
        ),
        'id' => 'regions',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'sdekint' => 
      array (
        'name' => 'Интеграция СДЭК',
        'img' => 'wa-apps/shop/plugins/sdekint/img/icon16.png',
        'version' => '4.4.2',
        'vendor' => '670917',
        'shop_settings' => true,
        'handlers' => 
        array (
          'backend_menu' => 'handlerBackendMenu',
          'backend_order' => 'handlerBackendOrder',
          'backend_orders' => 'handlerBackendOrders',
          'frontend_my_order' => 'handlerFrontendMyOrder',
          'reset' => 'handlerReset',
          'syrnik_shipping.*' => 'handlerSyrnikShipping',
          'routing' => 'routing',
        ),
        'frontend' => true,
        'id' => 'sdekint',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'seo' => 
      array (
        'name' => 'SEO-оптимизация',
        'description' => 'Быстрая и гибкая оптимизация вашего магазина',
        'img' => 'wa-apps/shop/plugins/seo/img/seo3.png',
        'vendor' => '934303',
        'shop_settings' => true,
        'importexport' => true,
        'version' => '3.7',
        'handlers' => 
        array (
          '*' => 
          array (
            0 => 
            array (
              'event_app_id' => 'site',
              'event' => 'route_save.before',
              'class' => 'shopSeoPlugin',
              'method' => 'handleRouteSaveBefore',
            ),
            1 => 
            array (
              'event_app_id' => 'site',
              'event' => 'route_save.after',
              'class' => 'shopSeoPlugin',
              'method' => 'handleRouteSaveAfter',
            ),
          ),
          'backend_category_dialog' => 'backendCategoryDialog',
          'category_save' => 'categorySave',
          'backend_product_edit' => 'backendProductEdit',
          'product_save' => 'productSave',
          'frontend_nav' => 'frontendNav',
          'frontend_search' => 'frontendSearch',
          'frontend_homepage' => 'frontendHomepage',
          'frontend_category' => 'frontendCategory',
          'frontend_product' => 'frontendProduct',
          'frontend_head' => 'frontendHead',
          'routing' => 'routing',
        ),
        'id' => 'seo',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'seofilter' => 
      array (
        'name' => 'SEO-фильтр',
        'description' => 'Оптимизация результатов фильтра',
        'img' => 'wa-apps/shop/plugins/seofilter/img/seofilter.png',
        'vendor' => '934303',
        'frontend' => true,
        'shop_settings' => true,
        'version' => '4.28',
        'handlers' => 
        array (
          'seo_assign_case' => 'handleSeoAssignCase',
          'frontend_category' => 'handleFrontendCategory',
          'frontend_head' => 'handleFrontendHead',
          'sitemap' => 'handleSitemap',
          'backend_menu' => 'handleBackendMenu',
          'routing' => 'routing',
          'rights.config' => 'handleRightsConfig',
          'app_sitemap_index_sitemap' => 'handleAppSitemapIndexSitemap',
          'app_sitemap_structure' => 'handleAppSitemapStructure',
          'product_save' => 'handleProductSave',
          'product_sku_delete' => 'handleProductSkuDelete',
          'product_delete' => 'handleProductDelete',
          'product_mass_update' => 'handleProductMassUpdate',
          'category_delete' => 'handleCategoryDelete',
          'category_save' => 'handleCategorySave',
        ),
        'id' => 'seofilter',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'seoredirect' => 
      array (
        'name' => 'SEO-редиректы',
        'description' => 'Продвинутый менеджер редиректов',
        'img' => 'wa-apps/shop/plugins/seoredirect/img/seoredirect.png',
        'version' => '1.14',
        'vendor' => '934303',
        'shop_settings' => true,
        'handlers' => 
        array (
          'routing' => 'routing',
          'frontend_head' => 'frontendHead',
          'frontend_error' => 'frontendError',
          'frontend_product' => 'frontendProduct',
          'frontend_category' => 'frontendCategory',
          'backend_category_dialog' => 'backendCategoryDialog',
          'category_delete' => 'categoryDelete',
          'category_save' => 'categorySave',
          'backend_product_edit' => 'backendProductEdit',
          'product_delete' => 'productDelete',
          'product_save' => 'productSave',
          'set_delete' => 'setDelete',
          'set_save' => 'setSave',
          'page_edit' => 'pageEdit',
          'backend_page_edit' => 'backendPageEdit',
          'page_save' => 'pageSave',
          'page_delete' => 'pageEdit',
          'shop_seofilter_filter_save' => 'shopSeofilterFilterSave',
          'shop_seofilter_frontend' => 'shopSeofilterFrontend',
          'frontend_catalogreviews' => 'handleFrontendCatalogreviews',
        ),
        'id' => 'seoredirect',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'singleskuname' => 
      array (
        'name' => 'Название у одного артикула',
        'description' => 'Принудительно показывает поле названия артикула для товаров с одним артикулом',
        'img' => 'wa-apps/shop/plugins/singleskuname/img/singleskuname.png',
        'version' => '1.0.0',
        'vendor' => '1027947',
        'handlers' => 
        array (
          'backend_product' => 'backendProductEdit',
        ),
        'id' => 'singleskuname',
        'app_id' => 'shop',
      ),
      'smartfilters' => 
      array (
        'name' => 'Smart Filters',
        'description' => 'Отличное дополнение фильтров в категории',
        'vendor' => '972539',
        'version' => '2.5.4',
        'img' => 'wa-apps/shop/plugins/smartfilters/img/smartfilters.gif',
        'handlers' => 
        array (
          'frontend_category' => 'frontendCategory',
          'frontend_head' => 'frontendHead',
          'frontend_products' => 'frontendProducts',
          'backend_category_dialog' => 'backendCategoryDialog',
          'category_save' => 'categorySave',
          'products_collection.prepared' => 'productsCollectionPrepared',
        ),
        'shop_settings' => true,
        'id' => 'smartfilters',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'tagnav' => 
      array (
        'name' => 'Перелинковка тегов',
        'description' => 'Перелинковка тегов на странице результатов.',
        'img' => 'wa-apps/shop/plugins/tagnav/img/tagnav.png',
        'version' => '1.0.2',
        'vendor' => '972539',
        'handlers' => 
        array (
          'frontend_search' => 'frontendSearch',
        ),
        'id' => 'tagnav',
        'app_id' => 'shop',
      ),
      'todaybay' => 
      array (
        'name' => 'Сегодня купили',
        'description' => 'Вывод товаров, которые были приобретены сегодня',
        'img' => 'wa-apps/shop/plugins/todaybay/img/todaybay.png',
        'vendor' => '986052',
        'version' => '1.3',
        'shop_settings' => true,
        'handlers' => 
        array (
          'frontend_nav' => 'useHook',
        ),
        'id' => 'todaybay',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'unclaimed' => 
      array (
        'name' => 'Невостребованные товары',
        'description' => 'В разделе «Товары» выводит список невостребованных товаров',
        'img' => 'wa-apps/shop/plugins/unclaimed/img/unclaimed.png',
        'version' => '1.0.1',
        'vendor' => '972539',
        'handlers' => 
        array (
          'backend_products' => 'backendProducts',
          'products_collection' => 'productsCollection',
        ),
        'id' => 'unclaimed',
        'app_id' => 'shop',
      ),
      'vkgoods' => 
      array (
        'name' => 'ВКонтакте: Товары',
        'description' => 'Экспорт и актуализация товаров в сервис ВК "Товары"',
        'img' => 'wa-apps/shop/plugins/vkgoods/img/vkgoods.png',
        'version' => '4.3.0',
        'vendor' => '834834',
        'importexport' => true,
        'handlers' => 
        array (
          'backend_product' => 'handlerBackendProduct',
          'backend_products' => 'handlerBackendProducts',
          'backend_category_dialog' => 'handlerBackendCategoryDialog',
          'products_collection' => 'handlerProductsCollection',
          'category_save' => 'handlerCategorySave',
          'category_delete' => 'handlerCategoryDelete',
        ),
        'id' => 'vkgoods',
        'app_id' => 'shop',
      ),
      'vkontakte' => 
      array (
        'name' => 'Вконтакте',
        'description' => 'Позволяет отправлять информацию о продукте на стену вашей группы Вконтакте.',
        'icon' => 'img/vkontakte16.png',
        'img' => 'wa-apps/shop/plugins/vkontakte/img/vkontakte16.png',
        'version' => '1.1.2',
        'vendor' => '964801',
        'handlers' => 
        array (
          'backend_product' => 'backendProduct',
        ),
        'id' => 'vkontakte',
        'app_id' => 'shop',
      ),
      'vkshop' => 
      array (
        'name' => 'Магазин Вконтакте',
        'description' => 'Позволяет экспортировать товары в VK маркет.',
        'icon' => 'img/vkshop16.png',
        'img' => 'wa-apps/shop/plugins/vkshop/img/vkshop16.png',
        'version' => '4.3.3',
        'vendor' => '964801',
        'importexport' => 1,
        'import_profile' => false,
        'shop_settings' => true,
        'handlers' => 
        array (
          'backend_product' => 'backendProduct',
          'backend_products' => 'backendProducts',
          'product_delete' => 'productDelete',
          'product_save' => 'productSave',
          'backend_category_dialog' => 'backendCategoryDialog',
          'category_save' => 'categorySave',
          'category_delete' => 'categoryDelete',
        ),
        'id' => 'vkshop',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'watermark' => 
      array (
        'name' => 'Водяной знак',
        'description' => 'Накладывает водяной знак в виде изображения или текста на загружаемые фотографии',
        'img' => 'wa-apps/shop/plugins/watermark/img/watermark.png',
        'vendor' => 'webasyst',
        'version' => '2.0.0',
        'rights' => false,
        'handlers' => 
        array (
          'image_upload' => 'imageUpload',
          'image_thumb' => 'imageThumb',
        ),
        'id' => 'watermark',
        'app_id' => 'shop',
      ),
      'wtsp' => 
      array (
        'name' => 'Пишем клиентам в WhatsApp, Viber и другие мессенджеры',
        'img' => 'wa-apps/shop/plugins/wtsp/img/wtsp.png',
        'description' => 'Начать чат в без сохранения контакта в телефоне',
        'version' => '1.5.1',
        'vendor' => '1027522',
        'custom_settings' => true,
        'handlers' => 
        array (
          'backend_order' => 'backendOrder',
          'backend_orders' => 'backendOrdersFiles',
        ),
        'id' => 'wtsp',
        'app_id' => 'shop',
      ),
      'yaimgsearch' => 
      array (
        'name' => 'Яндекс.Картинки',
        'description' => 'Поиск и загрузка изображений для товара в Яндексе',
        'vendor' => 975294,
        'version' => '1.16',
        'img' => 'wa-apps/shop/plugins/yaimgsearch/img/yaimgsearch.png',
        'shop_settings' => false,
        'frontend' => false,
        'icons' => 
        array (
          16 => 'img/yaimgsearch.png',
        ),
        'handlers' => 
        array (
          'backend_menu' => 'backendMenu',
          'backend_product_edit' => 'backendProductEdit',
          'backend_product' => 'backendProduct',
        ),
        'id' => 'yaimgsearch',
        'app_id' => 'shop',
      ),
      'generateproducturlcsv' => 
      array (
        'name' => 'ЧПУ ссылка при добавлении/обновлении товара через CSV',
        'description' => 'Автоматическая генерация ЧПУ ссылки на товар при его импорте через CSV файл.',
        'vendor' => 958640,
        'version' => '1.1.0',
        'handlers' => 
        array (
          'product_save' => 'productSave',
        ),
        'id' => 'generateproducturlcsv',
        'app_id' => 'shop',
      ),
    ),
    'site' => 
    array (
      'advancedparams' => 
      array (
        'name' => 'Управление Доп. параметрами',
        'description' => 'Формирует поля из дополнительных параметров',
        'vendor' => '990614',
        'author' => 'Genasyst',
        'version' => '1.0.6',
        'img' => 'wa-apps/site/plugins/advancedparams/img/advancedparams.png',
        'custom_settings' => true,
        'handlers' => 
        array (
          'backend_page_edit' => 'backendPageEdit',
          'page_edit' => 'PageEdit',
          'page_save' => 'pageSave',
          'page_delete' => 'pageDelete',
        ),
        'id' => 'advancedparams',
        'app_id' => 'site',
      ),
    ),
  ),
  'handlers' => 
  array (
    'contacts' => 
    array (
      'contacts_collection' => 
      array (
        0 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'contactsContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'shopContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        2 => 
        array (
          'app_id' => 'team',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'teamContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'delete' => 
      array (
        0 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'contactsContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'shopContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        2 => 
        array (
          'app_id' => 'team',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'teamContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        3 => 
        array (
          'app_id' => 'blog',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'blogContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        4 => 
        array (
          'app_id' => 'webasyst',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'webasystContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'profile.tab' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'shopContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'team',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'teamContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'explore' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/explore/',
          'file' => 'contacts.explore.handler.php',
          'class' => 'shopContactsExploreHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'merge' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/merge/',
          'file' => 'contacts.merge.handler.php',
          'class' => 'shopContactsMergeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'regex' => '/merge/',
          'file' => 'contacts.merge.handler.php',
          'class' => 'blogContactsMergeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'links' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/links/',
          'file' => 'contacts.links.handler.php',
          'class' => 'shopContactsLinksHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'regex' => '/links/',
          'file' => 'contacts.links.handler.php',
          'class' => 'blogContactsLinksHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'shop' => 
    array (
      'backend_customers_list' => 
      array (
        0 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/backend_customers_list/',
          'file' => 'shop.backend_customers_list.handler.php',
          'class' => 'contactsShopBackend_customers_listHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'category_save' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'categoryimage',
          'regex' => '/category_save/',
          'class' => 'shopCategoryimagePlugin',
          'method' => 
          array (
            0 => 'categorySave',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'linkcanonical',
          'regex' => '/category_save/',
          'class' => 'shopLinkcanonicalPlugin',
          'method' => 
          array (
            0 => 'categorySave',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/category_save/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'categorySave',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/category_save/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleCategorySave',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/category_save/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'categorySave',
          ),
        ),
        5 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'smartfilters',
          'regex' => '/category_save/',
          'class' => 'shopSmartfiltersPlugin',
          'method' => 
          array (
            0 => 'categorySave',
          ),
        ),
        6 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkgoods',
          'regex' => '/category_save/',
          'class' => 'shopVkgoodsPlugin',
          'method' => 
          array (
            0 => 'handlerCategorySave',
          ),
        ),
        7 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkshop',
          'regex' => '/category_save/',
          'class' => 'shopVkshopPlugin',
          'method' => 
          array (
            0 => 'categorySave',
          ),
        ),
      ),
      'category_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'categoryimage',
          'regex' => '/category_delete/',
          'class' => 'shopCategoryimagePlugin',
          'method' => 
          array (
            0 => 'categoryDelete',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/category_delete/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleCategoryDelete',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/category_delete/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'categoryDelete',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkgoods',
          'regex' => '/category_delete/',
          'class' => 'shopVkgoodsPlugin',
          'method' => 
          array (
            0 => 'handlerCategoryDelete',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkshop',
          'regex' => '/category_delete/',
          'class' => 'shopVkshopPlugin',
          'method' => 
          array (
            0 => 'categoryDelete',
          ),
        ),
      ),
      'backend_products' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'categoryimage',
          'regex' => '/backend_products/',
          'class' => 'shopCategoryimagePlugin',
          'method' => 
          array (
            0 => 'categoryTitle',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'editprice',
          'regex' => '/backend_products/',
          'class' => 'shopEditpricePlugin',
          'method' => 
          array (
            0 => 'backendProducts',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'f7root',
          'regex' => '/backend_products/',
          'class' => 'shopF7rootPlugin',
          'method' => 
          array (
            0 => 'f7backendProducts',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'facebookpro',
          'regex' => '/backend_products/',
          'class' => 'shopFacebookproPlugin',
          'method' => 
          array (
            0 => 'backendProductsEvent',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'massupdating',
          'regex' => '/backend_products/',
          'class' => 'shopMassupdatingPlugin',
          'method' => 
          array (
            0 => 'backendProducts',
          ),
        ),
        5 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'productfeatures',
          'regex' => '/backend_products/',
          'class' => 'shopProductfeaturesPlugin',
          'method' => 
          array (
            0 => 'backendProducts',
          ),
        ),
        6 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/backend_products/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'backendProductsHandler',
          ),
        ),
        7 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'unclaimed',
          'regex' => '/backend_products/',
          'class' => 'shopUnclaimedPlugin',
          'method' => 
          array (
            0 => 'backendProducts',
          ),
        ),
        8 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkgoods',
          'regex' => '/backend_products/',
          'class' => 'shopVkgoodsPlugin',
          'method' => 
          array (
            0 => 'handlerBackendProducts',
          ),
        ),
        9 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkshop',
          'regex' => '/backend_products/',
          'class' => 'shopVkshopPlugin',
          'method' => 
          array (
            0 => 'backendProducts',
          ),
        ),
      ),
      'backend_category_dialog' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'categoryimage',
          'regex' => '/backend_category_dialog/',
          'class' => 'shopCategoryimagePlugin',
          'method' => 
          array (
            0 => 'categoryDialog',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'linkcanonical',
          'regex' => '/backend_category_dialog/',
          'class' => 'shopLinkcanonicalPlugin',
          'method' => 
          array (
            0 => 'backendCategoryDialog',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/backend_category_dialog/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'backendCategoryDialog',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/backend_category_dialog/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'backendCategoryDialog',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'smartfilters',
          'regex' => '/backend_category_dialog/',
          'class' => 'shopSmartfiltersPlugin',
          'method' => 
          array (
            0 => 'backendCategoryDialog',
          ),
        ),
        5 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkgoods',
          'regex' => '/backend_category_dialog/',
          'class' => 'shopVkgoodsPlugin',
          'method' => 
          array (
            0 => 'handlerBackendCategoryDialog',
          ),
        ),
        6 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkshop',
          'regex' => '/backend_category_dialog/',
          'class' => 'shopVkshopPlugin',
          'method' => 
          array (
            0 => 'backendCategoryDialog',
          ),
        ),
      ),
      'signup' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'addtogroup',
          'regex' => '/signup/',
          'class' => 'shopAddtogroupPlugin',
          'method' => 
          array (
            0 => 'signup',
          ),
        ),
      ),
      'product_save' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'asn',
          'regex' => '/product_save/',
          'class' => 'shopAsnPlugin',
          'method' => 
          array (
            0 => 'hookProductSave',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'linkcanonical',
          'regex' => '/product_save/',
          'class' => 'shopLinkcanonicalPlugin',
          'method' => 
          array (
            0 => 'productSave',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/product_save/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'productSave',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/product_save/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleProductSave',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/product_save/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'productSave',
          ),
        ),
        5 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkshop',
          'regex' => '/product_save/',
          'class' => 'shopVkshopPlugin',
          'method' => 
          array (
            0 => 'productSave',
          ),
        ),
        6 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'generateproducturlcsv',
          'regex' => '/product_save/',
          'class' => 'shopGenerateproducturlcsvPlugin',
          'method' => 
          array (
            0 => 'productSave',
          ),
        ),
      ),
      'backend_order' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'bnpcomments',
          'regex' => '/backend_order/',
          'class' => 'shopBnpcommentsPlugin',
          'method' => 
          array (
            0 => 'backendOrder',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'dopinfo',
          'regex' => '/backend_order/',
          'class' => 'shopDopinfoPlugin',
          'method' => 
          array (
            0 => 'getInfo',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/backend_order/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'backendOrder',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'giftcard',
          'regex' => '/backend_order/',
          'class' => 'shopGiftcardPlugin',
          'method' => 
          array (
            0 => 'backend_order',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'quickorder',
          'regex' => '/backend_order/',
          'class' => 'shopQuickorderPlugin',
          'method' => 
          array (
            0 => 'backendOrder',
          ),
        ),
        5 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'sdekint',
          'regex' => '/backend_order/',
          'class' => 'shopSdekintPlugin',
          'method' => 
          array (
            0 => 'handlerBackendOrder',
          ),
        ),
        6 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'wtsp',
          'regex' => '/backend_order/',
          'class' => 'shopWtspPlugin',
          'method' => 
          array (
            0 => 'backendOrder',
          ),
        ),
      ),
      'backend_menu' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brand',
          'regex' => '/backend_menu/',
          'class' => 'shopBrandPlugin',
          'method' => 
          array (
            0 => 'handleBackendMenu',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'catalogreviews',
          'regex' => '/backend_menu/',
          'class' => 'shopCatalogreviewsPlugin',
          'method' => 
          array (
            0 => 'handleBackendMenu',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/backend_menu/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'backendMenu',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/backend_menu/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'backendMenuHandler',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'sdekint',
          'regex' => '/backend_menu/',
          'class' => 'shopSdekintPlugin',
          'method' => 
          array (
            0 => 'handlerBackendMenu',
          ),
        ),
        5 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/backend_menu/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleBackendMenu',
          ),
        ),
        6 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yaimgsearch',
          'regex' => '/backend_menu/',
          'class' => 'shopYaimgsearchPlugin',
          'method' => 
          array (
            0 => 'backendMenu',
          ),
        ),
      ),
      'frontend_nav' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brand',
          'regex' => '/frontend_nav/',
          'class' => 'shopBrandPlugin',
          'method' => 
          array (
            0 => 'handleFrontendNav',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'catalogreviews',
          'regex' => '/frontend_nav/',
          'class' => 'shopCatalogreviewsPlugin',
          'method' => 
          array (
            0 => 'handleFrontendNav',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/frontend_nav/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'frontendNav',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'todaybay',
          'regex' => '/frontend_nav/',
          'class' => 'shopTodaybayPlugin',
          'method' => 
          array (
            0 => 'useHook',
          ),
        ),
      ),
      'products_collection' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brand',
          'regex' => '/products_collection/',
          'class' => 'shopBrandPlugin',
          'method' => 
          array (
            0 => 'handleProductsCollection',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'f7root',
          'regex' => '/products_collection/',
          'class' => 'shopF7rootPlugin',
          'method' => 
          array (
            0 => 'f7rootproductsCollection',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'unclaimed',
          'regex' => '/products_collection/',
          'class' => 'shopUnclaimedPlugin',
          'method' => 
          array (
            0 => 'productsCollection',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkgoods',
          'regex' => '/products_collection/',
          'class' => 'shopVkgoodsPlugin',
          'method' => 
          array (
            0 => 'handlerProductsCollection',
          ),
        ),
      ),
      'sitemap' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brand',
          'regex' => '/sitemap/',
          'class' => 'shopBrandPlugin',
          'method' => 
          array (
            0 => 'handleSitemap',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/sitemap/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'sitemapHandler',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/sitemap/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleSitemap',
          ),
        ),
      ),
      'rights.config' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brand',
          'regex' => '/rights\\.config/',
          'class' => 'shopBrandPlugin',
          'method' => 
          array (
            0 => 'handleRightsConfig',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/rights\\.config/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'rightsConfig',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/rights\\.config/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'rightsConfigHandler',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/rights\\.config/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleRightsConfig',
          ),
        ),
      ),
      'routing' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brand',
          'regex' => '/routing/',
          'class' => 'shopBrandPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'catalogreviews',
          'regex' => '/routing/',
          'class' => 'shopCatalogreviewsPlugin',
          'method' => 
          array (
            0 => 'getRoutingRules',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cwebp',
          'regex' => '/routing/',
          'class' => 'shopCwebpPlugin',
          'method' => 
          array (
            0 => 'frontendHook',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'emailform',
          'regex' => '/routing/',
          'class' => 'shopEmailformPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'facebookpro',
          'regex' => '/routing/',
          'class' => 'shopFacebookproPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        5 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/routing/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        6 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'giftcard',
          'regex' => '/routing/',
          'class' => 'shopGiftcardPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        7 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'quickorder',
          'regex' => '/routing/',
          'class' => 'shopQuickorderPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        8 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/routing/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        9 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'sdekint',
          'regex' => '/routing/',
          'class' => 'shopSdekintPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        10 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/routing/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        11 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/routing/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        12 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/routing/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
      ),
      'order_action.create' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cartsreport',
          'regex' => '/order_action\\.create/',
          'class' => 'shopCartsreportPlugin',
          'method' => 
          array (
            0 => 'orderActionCreate',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/order_action\\.create/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'orderActionCreate',
          ),
        ),
      ),
      'frontend_checkout' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cartsreport',
          'regex' => '/frontend_checkout/',
          'class' => 'shopCartsreportPlugin',
          'method' => 
          array (
            0 => 'frontendCheckout',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/frontend_checkout/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'frontendCheckout',
          ),
        ),
      ),
      'backend_reports' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cartsreport',
          'regex' => '/backend_reports/',
          'class' => 'shopCartsreportPlugin',
          'method' => 
          array (
            0 => 'backendReports',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'metrika',
          'regex' => '/backend_reports/',
          'class' => 'shopMetrikaPlugin',
          'method' => 
          array (
            0 => 'backendmenu',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'quickorder',
          'regex' => '/backend_reports/',
          'class' => 'shopQuickorderPlugin',
          'method' => 
          array (
            0 => 'backendReports',
          ),
        ),
      ),
      'frontend_cart' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cartsreport',
          'regex' => '/frontend_cart/',
          'class' => 'shopCartsreportPlugin',
          'method' => 
          array (
            0 => 'frontendCart',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/frontend_cart/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'frontendCart',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'quickorder',
          'regex' => '/frontend_cart/',
          'class' => 'shopQuickorderPlugin',
          'method' => 
          array (
            0 => 'frontendCart',
          ),
        ),
      ),
      'cart_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cartsreport',
          'regex' => '/cart_delete/',
          'class' => 'shopCartsreportPlugin',
          'method' => 
          array (
            0 => 'cartDelete',
          ),
        ),
      ),
      'cart_add' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cartsreport',
          'regex' => '/cart_add/',
          'class' => 'shopCartsreportPlugin',
          'method' => 
          array (
            0 => 'cartAdd',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/cart_add/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'cartAddHandler',
          ),
        ),
      ),
      'frontend_category' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'catalogreviews',
          'regex' => '/frontend_category/',
          'class' => 'shopCatalogreviewsPlugin',
          'method' => 
          array (
            0 => 'handleFrontendCategory',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/frontend_category/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'frontendCategory',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/frontend_category/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleFrontendCategory',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/frontend_category/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'frontendCategory',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'smartfilters',
          'regex' => '/frontend_category/',
          'class' => 'shopSmartfiltersPlugin',
          'method' => 
          array (
            0 => 'frontendCategory',
          ),
        ),
      ),
      'backend_product' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'copychpu',
          'regex' => '/backend_product/',
          'class' => 'shopCopychpuPlugin',
          'method' => 
          array (
            0 => 'backendProductEdit',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/backend_product/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'backendProductsHandler',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'singleskuname',
          'regex' => '/backend_product/',
          'class' => 'shopSingleskunamePlugin',
          'method' => 
          array (
            0 => 'backendProductEdit',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkgoods',
          'regex' => '/backend_product/',
          'class' => 'shopVkgoodsPlugin',
          'method' => 
          array (
            0 => 'handlerBackendProduct',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkontakte',
          'regex' => '/backend_product/',
          'class' => 'shopVkontaktePlugin',
          'method' => 
          array (
            0 => 'backendProduct',
          ),
        ),
        5 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkshop',
          'regex' => '/backend_product/',
          'class' => 'shopVkshopPlugin',
          'method' => 
          array (
            0 => 'backendProduct',
          ),
        ),
        6 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yaimgsearch',
          'regex' => '/backend_product/',
          'class' => 'shopYaimgsearchPlugin',
          'method' => 
          array (
            0 => 'backendProduct',
          ),
        ),
      ),
      'backend_orders' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'coupon',
          'regex' => '/backend_orders/',
          'class' => 'shopCouponPlugin',
          'method' => 
          array (
            0 => 'backendOrders',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/backend_orders/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'backendOrders',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'sdekint',
          'regex' => '/backend_orders/',
          'class' => 'shopSdekintPlugin',
          'method' => 
          array (
            0 => 'handlerBackendOrders',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'wtsp',
          'regex' => '/backend_orders/',
          'class' => 'shopWtspPlugin',
          'method' => 
          array (
            0 => 'backendOrdersFiles',
          ),
        ),
      ),
      'product_images_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cwebp',
          'regex' => '/product_images_delete/',
          'class' => 'shopCwebpPlugin',
          'method' => 
          array (
            0 => 'deleteImage',
          ),
        ),
      ),
      'checkout_before_shipping' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'delpayfilter',
          'regex' => '/checkout_before_shipping/',
          'class' => 'shopDelpayfilterPlugin',
          'method' => 
          array (
            0 => 'checkoutBeforeShipping',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/checkout_before_shipping/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'checkoutBeforeShipping',
          ),
        ),
      ),
      'checkout_after_shipping' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'delpayfilter',
          'regex' => '/checkout_after_shipping/',
          'class' => 'shopDelpayfilterPlugin',
          'method' => 
          array (
            0 => 'checkoutAfterShipping',
          ),
        ),
      ),
      'checkout_render_shipping' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'delpayfilter',
          'regex' => '/checkout_render_shipping/',
          'class' => 'shopDelpayfilterPlugin',
          'method' => 
          array (
            0 => 'checkoutRenderShipping',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/checkout_render_shipping/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'checkoutRenderShipping',
          ),
        ),
      ),
      'checkout_render_payment' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'delpayfilter',
          'regex' => '/checkout_render_payment/',
          'class' => 'shopDelpayfilterPlugin',
          'method' => 
          array (
            0 => 'checkoutRenderPayment',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/checkout_render_payment/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'checkoutRenderPayment',
          ),
        ),
      ),
      'frontend_order_cart_vars' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'delpayfilter',
          'regex' => '/frontend_order_cart_vars/',
          'class' => 'shopDelpayfilterPlugin',
          'method' => 
          array (
            0 => 'frontendOrderCartVars',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/frontend_order_cart_vars/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'frontendOrderCartVars',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'quickorder',
          'regex' => '/frontend_order_cart_vars/',
          'class' => 'shopQuickorderPlugin',
          'method' => 
          array (
            0 => 'frontendOrderCartVars',
          ),
        ),
      ),
      'order_calculate_discount' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'delpayfilter',
          'regex' => '/order_calculate_discount/',
          'class' => 'shopDelpayfilterPlugin',
          'method' => 
          array (
            0 => 'orderCalculateDiscount',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/order_calculate_discount/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'orderCalculateDiscount',
          ),
        ),
      ),
      'frontend_footer' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'emailform',
          'regex' => '/frontend_footer/',
          'class' => 'shopEmailformPlugin',
          'method' => 
          array (
            0 => 'frontendFooter',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/frontend_footer/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'frontendFooter',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'region',
          'regex' => '/frontend_footer/',
          'class' => 'shopRegionPlugin',
          'method' => 
          array (
            0 => 'frontendFooter',
          ),
        ),
      ),
      'backend_product_edit' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'fastdeleteimages',
          'regex' => '/backend_product_edit/',
          'class' => 'shopFastdeleteimagesPlugin',
          'method' => 
          array (
            0 => 'backend_product_edit',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/backend_product_edit/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'backendProductEdit',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'linkcanonical',
          'regex' => '/backend_product_edit/',
          'class' => 'shopLinkcanonicalPlugin',
          'method' => 
          array (
            0 => 'backendProductEdit',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/backend_product_edit/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'backendProductEdit',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/backend_product_edit/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'backendProductEdit',
          ),
        ),
        5 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yaimgsearch',
          'regex' => '/backend_product_edit/',
          'class' => 'shopYaimgsearchPlugin',
          'method' => 
          array (
            0 => 'backendProductEdit',
          ),
        ),
      ),
      'backend_settings_discounts' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/backend_settings_discounts/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'backendSettingsDiscounts',
          ),
        ),
      ),
      'backend_product_sku_settings' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/backend_product_sku_settings/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'backendProductSkuSettings',
          ),
        ),
      ),
      'backend_order_edit' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/backend_order_edit/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'backendOrderEdit',
          ),
        ),
      ),
      'checkout_before_confirm' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/checkout_before_confirm/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'checkoutBeforeConfirm',
          ),
        ),
      ),
      'frontend_head' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/frontend_head/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'incarts',
          'regex' => '/frontend_head/',
          'class' => 'shopIncartsPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'lastmodified',
          'regex' => '/frontend_head/',
          'class' => 'shopLastmodifiedPlugin',
          'method' => 
          array (
            0 => 'handleFrontendHead',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'linkcanonical',
          'regex' => '/frontend_head/',
          'class' => 'shopLinkcanonicalPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'quickorder',
          'regex' => '/frontend_head/',
          'class' => 'shopQuickorderPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
        5 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'region',
          'regex' => '/frontend_head/',
          'class' => 'shopRegionPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
        6 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/frontend_head/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'frontendHeadHandler',
          ),
        ),
        7 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/frontend_head/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
        8 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/frontend_head/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleFrontendHead',
          ),
        ),
        9 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/frontend_head/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
        10 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'smartfilters',
          'regex' => '/frontend_head/',
          'class' => 'shopSmartfiltersPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
      ),
      'frontend_product' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/frontend_product/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'frontendProduct',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'quickorder',
          'regex' => '/frontend_product/',
          'class' => 'shopQuickorderPlugin',
          'method' => 
          array (
            0 => 'frontendProduct',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/frontend_product/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'frontendProduct',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/frontend_product/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'frontendProduct',
          ),
        ),
      ),
      'frontend_products' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/frontend_products/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'frontendProducts',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'smartfilters',
          'regex' => '/frontend_products/',
          'class' => 'shopSmartfiltersPlugin',
          'method' => 
          array (
            0 => 'frontendProducts',
          ),
        ),
      ),
      'frontend_my_nav' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/frontend_my_nav/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'frontendMyNav',
          ),
        ),
      ),
      'order_action.pay' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/order_action\\.pay/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'orderActionApplyAffiliate',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'giftcard',
          'regex' => '/order_action\\.pay/',
          'class' => 'shopGiftcardPlugin',
          'method' => 
          array (
            0 => 'order_paid',
          ),
        ),
      ),
      'order_action.complete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/order_action\\.complete/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'orderActionApplyAffiliate',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'giftcard',
          'regex' => '/order_action\\.complete/',
          'class' => 'shopGiftcardPlugin',
          'method' => 
          array (
            0 => 'order_complete',
          ),
        ),
      ),
      'order_action.restore' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/order_action\\.restore/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'orderActionApplyAffiliate',
          ),
        ),
      ),
      'order_action.delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/order_action\\.delete/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'orderActionCancelAffiliate',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'giftcard',
          'regex' => '/order_action\\.delete/',
          'class' => 'shopGiftcardPlugin',
          'method' => 
          array (
            0 => 'order_delete',
          ),
        ),
      ),
      'order_action.refund' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/order_action\\.refund/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'orderActionCancelAffiliate',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'giftcard',
          'regex' => '/order_action\\.refund/',
          'class' => 'shopGiftcardPlugin',
          'method' => 
          array (
            0 => 'order_refund',
          ),
        ),
      ),
      'order_action.edit' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/order_action\\.edit/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'orderActionEdit',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'giftcard',
          'regex' => '/order_action\\.edit/',
          'class' => 'shopGiftcardPlugin',
          'method' => 
          array (
            0 => 'order_edit',
          ),
        ),
      ),
      'product_presave' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/product_presave/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'productPreSave',
          ),
        ),
      ),
      'promo_rule_types' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/promo_rule_types/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'promoRuleTypes',
          ),
        ),
      ),
      'backend_marketing_sidebar' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/backend_marketing_sidebar/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'backendMarketingSidebar',
          ),
        ),
      ),
      'promo_rule_editor' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/promo_rule_editor/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'promoRuleEditor',
          ),
        ),
      ),
      'backend_marketing_promo' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/backend_marketing_promo/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'backendMarketingPromo',
          ),
        ),
      ),
      'promo_rule_validate' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/promo_rule_validate/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'promoRuleValidate',
          ),
        ),
      ),
      'promo_workflow_run' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'flexdiscount',
          'regex' => '/promo_workflow_run/',
          'class' => 'shopFlexdiscountPlugin',
          'method' => 
          array (
            0 => 'promoWorkflowRun',
          ),
        ),
      ),
      'frontend_my_order' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'giftcard',
          'regex' => '/frontend_my_order/',
          'class' => 'shopGiftcardPlugin',
          'method' => 
          array (
            0 => 'frontend_my_order',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'sdekint',
          'regex' => '/frontend_my_order/',
          'class' => 'shopSdekintPlugin',
          'method' => 
          array (
            0 => 'handlerFrontendMyOrder',
          ),
        ),
      ),
      'shop_seofilter_frontend' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'linkcanonical',
          'regex' => '/shop_seofilter_frontend/',
          'class' => 'shopLinkcanonicalPlugin',
          'method' => 
          array (
            0 => 'handleSeofilterFrontend',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/shop_seofilter_frontend/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'shopSeofilterFrontend',
          ),
        ),
      ),
      'frontend_header' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'mini',
          'regex' => '/frontend_header/',
          'class' => 'shopMiniPlugin',
          'method' => 
          array (
            0 => 'frontendHeader',
          ),
        ),
      ),
      'seo_fetch_templates' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/seo_fetch_templates/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'seoFetchTemplatesHandler',
          ),
        ),
      ),
      'seo_fetch_template_helper' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/seo_fetch_template_helper/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'seoFetchTemplateHelperHandler',
          ),
        ),
      ),
      'seofilter_fetch_templates' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/seofilter_fetch_templates/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'seoFetchTemplatesHandler',
          ),
        ),
      ),
      'seofilter_fetch_template_helper' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/seofilter_fetch_template_helper/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'seoFetchTemplateHelperHandler',
          ),
        ),
      ),
      'app_sitemap_structure' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'regions',
          'regex' => '/app_sitemap_structure/',
          'class' => 'shopRegionsPlugin',
          'method' => 
          array (
            0 => 'handleAppSitemapStructure',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/app_sitemap_structure/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleAppSitemapStructure',
          ),
        ),
      ),
      'reset' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'sdekint',
          'regex' => '/reset/',
          'class' => 'shopSdekintPlugin',
          'method' => 
          array (
            0 => 'handlerReset',
          ),
        ),
      ),
      '*' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'sdekint',
          'regex' => '/syrnik_shipping\\..*/',
          'class' => 'shopSdekintPlugin',
          'method' => 
          array (
            0 => 'handlerSyrnikShipping',
          ),
        ),
      ),
      'frontend_search' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/frontend_search/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'frontendSearch',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'tagnav',
          'regex' => '/frontend_search/',
          'class' => 'shopTagnavPlugin',
          'method' => 
          array (
            0 => 'frontendSearch',
          ),
        ),
      ),
      'frontend_homepage' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/frontend_homepage/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'frontendHomepage',
          ),
        ),
      ),
      'seo_assign_case' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/seo_assign_case/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleSeoAssignCase',
          ),
        ),
      ),
      'app_sitemap_index_sitemap' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/app_sitemap_index_sitemap/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleAppSitemapIndexSitemap',
          ),
        ),
      ),
      'product_sku_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/product_sku_delete/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleProductSkuDelete',
          ),
        ),
      ),
      'product_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/product_delete/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleProductDelete',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/product_delete/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'productDelete',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'vkshop',
          'regex' => '/product_delete/',
          'class' => 'shopVkshopPlugin',
          'method' => 
          array (
            0 => 'productDelete',
          ),
        ),
      ),
      'product_mass_update' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seofilter',
          'regex' => '/product_mass_update/',
          'class' => 'shopSeofilterPlugin',
          'method' => 
          array (
            0 => 'handleProductMassUpdate',
          ),
        ),
      ),
      'frontend_error' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/frontend_error/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'frontendError',
          ),
        ),
      ),
      'set_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/set_delete/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'setDelete',
          ),
        ),
      ),
      'set_save' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/set_save/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'setSave',
          ),
        ),
      ),
      'page_edit' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/page_edit/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'pageEdit',
          ),
        ),
      ),
      'backend_page_edit' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/backend_page_edit/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'backendPageEdit',
          ),
        ),
      ),
      'page_save' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/page_save/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'pageSave',
          ),
        ),
      ),
      'page_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/page_delete/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'pageEdit',
          ),
        ),
      ),
      'shop_seofilter_filter_save' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/shop_seofilter_filter_save/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'shopSeofilterFilterSave',
          ),
        ),
      ),
      'frontend_catalogreviews' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seoredirect',
          'regex' => '/frontend_catalogreviews/',
          'class' => 'shopSeoredirectPlugin',
          'method' => 
          array (
            0 => 'handleFrontendCatalogreviews',
          ),
        ),
      ),
      'products_collection.prepared' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'smartfilters',
          'regex' => '/products_collection\\.prepared/',
          'class' => 'shopSmartfiltersPlugin',
          'method' => 
          array (
            0 => 'productsCollectionPrepared',
          ),
        ),
      ),
      'image_upload' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'watermark',
          'regex' => '/image_upload/',
          'class' => 'shopWatermarkPlugin',
          'method' => 
          array (
            0 => 'imageUpload',
          ),
        ),
      ),
      'image_thumb' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'watermark',
          'regex' => '/image_thumb/',
          'class' => 'shopWatermarkPlugin',
          'method' => 
          array (
            0 => 'imageThumb',
          ),
        ),
      ),
    ),
    'mailer' => 
    array (
      'recipients.form' => 
      array (
        0 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/recipients\\.form/',
          'file' => 'mailer.recipients.form.handler.php',
          'class' => 'contactsMailerRecipientsFormHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'webasyst' => 
    array (
      'waid_auth' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/waid_auth/',
          'file' => 'webasyst.waid_auth.handler.php',
          'class' => 'installerWebasystWaid_authHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_header' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/backend_header/',
          'file' => 'webasyst.backend_header.handler.php',
          'class' => 'installerWebasystBackend_headerHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_push' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/backend_push/',
          'file' => 'webasyst.backend_push.handler.php',
          'class' => 'shopWebasystBackend_pushHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_personal_profile' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/backend_personal_profile/',
          'file' => 'webasyst.backend_personal_profile.handler.php',
          'class' => 'teamWebasystBackend_personal_profileHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_dispatch_miss' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/backend_dispatch_miss/',
          'file' => 'webasyst.backend_dispatch_miss.handler.php',
          'class' => 'teamWebasystBackend_dispatch_missHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'site' => 
    array (
      'update.route' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/update\\.route/',
          'file' => 'site.update.route.handler.php',
          'class' => 'shopSiteUpdateRouteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.after/',
          'file' => 'site.route_save.after.handler.php',
          'class' => 'shopSiteRoute_saveAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/route_save\\.after/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'handleRouteSaveAfter',
          ),
        ),
      ),
      'route_delete.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_delete\\.after/',
          'file' => 'site.route_delete.after.handler.php',
          'class' => 'shopSiteRoute_deleteAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.before' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.before/',
          'file' => 'site.route_save.before.handler.php',
          'class' => 'shopSiteRoute_saveBeforeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'seo',
          'regex' => '/route_save\\.before/',
          'class' => 'shopSeoPlugin',
          'method' => 
          array (
            0 => 'handleRouteSaveBefore',
          ),
        ),
      ),
      'backend_page_edit' => 
      array (
        0 => 
        array (
          'app_id' => 'site',
          'plugin_id' => 'advancedparams',
          'regex' => '/backend_page_edit/',
          'class' => 'siteAdvancedparamsPlugin',
          'method' => 
          array (
            0 => 'backendPageEdit',
          ),
        ),
      ),
      'page_edit' => 
      array (
        0 => 
        array (
          'app_id' => 'site',
          'plugin_id' => 'advancedparams',
          'regex' => '/page_edit/',
          'class' => 'siteAdvancedparamsPlugin',
          'method' => 
          array (
            0 => 'PageEdit',
          ),
        ),
      ),
      'page_save' => 
      array (
        0 => 
        array (
          'app_id' => 'site',
          'plugin_id' => 'advancedparams',
          'regex' => '/page_save/',
          'class' => 'siteAdvancedparamsPlugin',
          'method' => 
          array (
            0 => 'pageSave',
          ),
        ),
      ),
      'page_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'site',
          'plugin_id' => 'advancedparams',
          'regex' => '/page_delete/',
          'class' => 'siteAdvancedparamsPlugin',
          'method' => 
          array (
            0 => 'pageDelete',
          ),
        ),
      ),
    ),
    '*' => 
    array (
      'routing' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cwebp',
          'regex' => '/routing/',
          'class' => 'shopCwebpPlugin',
          'method' => 
          array (
            0 => 'frontendHook',
          ),
        ),
      ),
    ),
  ),
);
