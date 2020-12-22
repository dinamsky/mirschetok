<?php
return array (
  'contacts' => 
  array (
    'id' => 'contacts',
    'name' => 'Contacts',
    'icon' => 
    array (
      48 => 'wa-apps/contacts/img/contacts.png',
      96 => 'wa-apps/contacts/img/contacts96.png',
      24 => 'wa-apps/contacts/img/contacts.png',
      16 => 'wa-apps/contacts/img/contacts.png',
    ),
    'rights' => true,
    'analytics' => true,
    'version' => '1.1.6',
    'critical' => '1.1.0',
    'vendor' => 'webasyst',
    'system' => false,
    'csrf' => true,
    'plugins' => true,
    'frontend' => true,
    'routing_params' => 
    array (
      'private' => true,
    ),
    'build' => 20,
    'img' => 'wa-apps/contacts/img/contacts.png',
  ),
  'installer' => 
  array (
    'id' => 'installer',
    'name' => 'Installer',
    'description' => 'Install new apps from the Webasyst Store',
    'icon' => 
    array (
      24 => 'wa-apps/installer/img/installer-24.png',
      48 => 'wa-apps/installer/img/installer-48.png',
      96 => 'wa-apps/installer/img/installer-96.png',
      16 => 'wa-apps/installer/img/installer-24.png',
    ),
    'mobile' => false,
    'version' => '1.14.9',
    'critical' => '1.14.9',
    'system' => true,
    'vendor' => 'webasyst',
    'csrf' => true,
    'build' => 567,
    'img' => 'wa-apps/installer/img/installer-48.png',
  ),
  'shop' => 
  array (
    'id' => 'shop',
    'name' => 'Store',
    'description' => 'Shop-Script is a robust shopping cart software that allows you to quickly establish your own online store and sell online.',
    'icon' => 
    array (
      16 => 'wa-apps/shop/img/shop16.png',
      24 => 'wa-apps/shop/img/shop24.png',
      48 => 'wa-apps/shop/img/shop48.png',
      96 => 'wa-apps/shop/img/shop96.png',
    ),
    'sash_color' => '#27bf52',
    'rights' => true,
    'frontend' => true,
    'auth' => true,
    'themes' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'my_account' => true,
    'version' => '8.14.1',
    'critical' => '8.0.0',
    'vendor' => 'webasyst',
    'csrf' => true,
    'payment_plugins' => 
    array (
      'taxes' => true,
      'rights' => 'settings',
    ),
    'shipping_plugins' => 
    array (
      'desired_date' => true,
      'draft' => true,
      'ready' => true,
      'cancel' => true,
      'taxes' => true,
      'custom_fields' => true,
      'dimensions' => false,
      'sync' => true,
      'callback' => 
      array (
      ),
      'rights' => 'settings',
    ),
    'sms_plugins' => true,
    'license' => 'commercial',
    'routing_params' => 
    array (
      'checkout_version' => 2,
      'checkout_storefront_id' => '793e156d43916e52a42e3f974d02f0a9',
    ),
    'build' => 39,
    'img' => 'wa-apps/shop/img/shop48.png',
  ),
  'site' => 
  array (
    'id' => 'site',
    'name' => 'Site',
    'icon' => 
    array (
      96 => 'wa-apps/site/img/site96.png',
      48 => 'wa-apps/site/img/site.png',
      24 => 'wa-apps/site/img/site24.png',
      16 => 'wa-apps/site/img/site16.png',
    ),
    'sash_color' => '#49a2e0',
    'frontend' => true,
    'version' => '2.5.20',
    'critical' => '2.5.0',
    'vendor' => 'webasyst',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'themes' => true,
    'pages' => true,
    'auth' => true,
    'csrf' => true,
    'my_account' => true,
    'build' => 234,
    'img' => 'wa-apps/site/img/site.png',
  ),
  'team' => 
  array (
    'id' => 'team',
    'name' => 'Team',
    'icon' => 
    array (
      24 => 'wa-apps/team/img/team24.png',
      48 => 'wa-apps/team/img/team48.png',
      96 => 'wa-apps/team/img/team96.png',
      16 => 'wa-apps/team/img/team24.png',
    ),
    'version' => '1.1.5',
    'vendor' => 'webasyst',
    'sash_color' => '#f0dc03',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'csrf' => true,
    'build' => 146,
    'img' => 'wa-apps/team/img/team48.png',
  ),
  'blog' => 
  array (
    'id' => 'blog',
    'name' => 'Blog',
    'icon' => 
    array (
      16 => 'wa-apps/blog/img/blog16.png',
      24 => 'wa-apps/blog/img/blog24.png',
      48 => 'wa-apps/blog/img/blog.png',
      96 => 'wa-apps/blog/img/blog96.png',
    ),
    'sash_color' => '#f0b100',
    'rights' => true,
    'frontend' => true,
    'auth' => true,
    'themes' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'version' => '1.4.8',
    'critical' => '1.4.2',
    'vendor' => 'webasyst',
    'csrf' => true,
    'my_account' => true,
    'routing_params' => 
    array (
      'blog_url_type' => 1,
    ),
    'build' => 47,
    'img' => 'wa-apps/blog/img/blog.png',
  ),
  'menu' => 
  array (
    'id' => 'menu',
    'name' => 'Extended menu',
    'icon' => 
    array (
      96 => 'wa-apps/menu/img/menu96x96.png',
      48 => 'wa-apps/menu/img/menu48x48.png',
      24 => 'wa-apps/menu/img/menu24x24.png',
      16 => 'wa-apps/menu/img/menu16x16.png',
    ),
    'version' => '1.1.2',
    'vendor' => '972539',
    'plugins' => true,
    'build' => 1608568360,
    'img' => 'wa-apps/menu/img/menu48x48.png',
  ),
  'webasyst' => 
  array (
    'id' => 'webasyst',
    'name' => 'Webasyst',
    'prefix' => 'webasyst',
    'version' => '1.14.9',
    'critical' => '1.14.9',
    'vendor' => 'webasyst',
    'csrf' => true,
    'header_items' => 
    array (
      'settings' => 
      array (
        'icon' => 
        array (
          24 => 'wa-content/img/wa-settings/settings-24.png',
          48 => 'wa-content/img/wa-settings/settings-48.png',
          96 => 'wa-content/img/wa-settings/settings-96.png',
          384 => 'wa-content/img/wa-settings/settings-384.png',
        ),
        'name' => 'Settings',
        'link' => 'settings',
        'rights' => 'backend',
        'img' => 'wa-content/img/wa-settings/settings-48.png',
      ),
    ),
    'build' => 567,
    'icon' => 
    array (
    ),
  ),
);
