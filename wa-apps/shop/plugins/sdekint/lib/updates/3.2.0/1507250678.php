<?php
$plugin_path = wa('shop')->getConfig()->getPluginPath('sdekint');
waFiles::delete( $plugin_path . '/lib/classes/shopSdekintPluginDeleteRequest.class.php');