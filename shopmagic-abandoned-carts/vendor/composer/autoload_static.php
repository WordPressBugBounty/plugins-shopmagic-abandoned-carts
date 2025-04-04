<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd33863e74e5a328c036821d1541a6a9
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPDesk\\ShopMagicCart\\migrations\\' => 32,
            'WPDesk\\ShopMagicCart\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPDesk\\ShopMagicCart\\migrations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/migrations',
        ),
        'WPDesk\\ShopMagicCart\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ShopMagicCartVendor\\WPDesk\\Notice\\AjaxHandler' => __DIR__ . '/../..' . '/vendor_prefixed/wp-notice/src/WPDesk/Notice/AjaxHandler.php',
        'ShopMagicCartVendor\\WPDesk\\Notice\\Factory' => __DIR__ . '/../..' . '/vendor_prefixed/wp-notice/src/WPDesk/Notice/Factory.php',
        'ShopMagicCartVendor\\WPDesk\\Notice\\Notice' => __DIR__ . '/../..' . '/vendor_prefixed/wp-notice/src/WPDesk/Notice/Notice.php',
        'ShopMagicCartVendor\\WPDesk\\Notice\\PermanentDismissibleNotice' => __DIR__ . '/../..' . '/vendor_prefixed/wp-notice/src/WPDesk/Notice/PermanentDismissibleNotice.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\BuildDirector\\LegacyBuildDirector' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/BuildDirector/LegacyBuildDirector.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Builder\\AbstractBuilder' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Builder/AbstractBuilder.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Builder\\InfoActivationBuilder' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Builder/InfoActivationBuilder.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Builder\\InfoBuilder' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Builder/InfoBuilder.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\AbstractPlugin' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/AbstractPlugin.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\Activateable' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/Activateable.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\ActivationAware' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/ActivationAware.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\ActivationTracker' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/ActivationTracker.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\Conditional' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/Conditional.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\Deactivateable' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/Deactivateable.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\Hookable' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/Hookable.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\HookableCollection' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/HookableCollection.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\HookableParent' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/HookableParent.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\HookablePluginDependant' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/HookablePluginDependant.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\PluginAccess' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/PluginAccess.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\SlimPlugin' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/SlimPlugin.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Plugin\\TemplateLoad' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/TemplateLoad.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Storage\\Exception\\ClassAlreadyExists' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Storage/Exception/ClassAlreadyExists.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Storage\\Exception\\ClassNotExists' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Storage/Exception/ClassNotExists.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Storage\\PluginStorage' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Storage/PluginStorage.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Storage\\StaticStorage' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Storage/StaticStorage.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Storage\\StorageFactory' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Storage/StorageFactory.php',
        'ShopMagicCartVendor\\WPDesk\\PluginBuilder\\Storage\\WordpressFilterStorage' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Storage/WordpressFilterStorage.php',
        'ShopMagicCartVendor\\WPDesk\\Plugin\\Flow\\Initialization\\BuilderTrait' => __DIR__ . '/../..' . '/vendor_prefixed/wp-plugin-flow-common/src/Initialization/BuilderTrait.php',
        'ShopMagicCartVendor\\WPDesk\\Plugin\\Flow\\Initialization\\InitializationFactory' => __DIR__ . '/../..' . '/vendor_prefixed/wp-plugin-flow-common/src/Initialization/InitializationFactory.php',
        'ShopMagicCartVendor\\WPDesk\\Plugin\\Flow\\Initialization\\InitializationStrategy' => __DIR__ . '/../..' . '/vendor_prefixed/wp-plugin-flow-common/src/Initialization/InitializationStrategy.php',
        'ShopMagicCartVendor\\WPDesk\\Plugin\\Flow\\Initialization\\PluginDisablerByFileTrait' => __DIR__ . '/../..' . '/vendor_prefixed/wp-plugin-flow-common/src/Initialization/PluginDisablerByFileTrait.php',
        'ShopMagicCartVendor\\WPDesk\\Plugin\\Flow\\Initialization\\Simple\\SimpleFactory' => __DIR__ . '/../..' . '/vendor_prefixed/wp-plugin-flow-common/src/Initialization/Simple/SimpleFactory.php',
        'ShopMagicCartVendor\\WPDesk\\Plugin\\Flow\\Initialization\\Simple\\SimpleFreeStrategy' => __DIR__ . '/../..' . '/vendor_prefixed/wp-plugin-flow-common/src/Initialization/Simple/SimpleFreeStrategy.php',
        'ShopMagicCartVendor\\WPDesk\\Plugin\\Flow\\Initialization\\Simple\\SimplePaidStrategy' => __DIR__ . '/../..' . '/vendor_prefixed/wp-plugin-flow-common/src/Initialization/Simple/SimplePaidStrategy.php',
        'ShopMagicCartVendor\\WPDesk\\Plugin\\Flow\\Initialization\\Simple\\TrackerInstanceAsFilterTrait' => __DIR__ . '/../..' . '/vendor_prefixed/wp-plugin-flow-common/src/Initialization/TrackerInstanceAsFilterTrait.php',
        'ShopMagicCartVendor\\WPDesk\\Plugin\\Flow\\PluginBootstrap' => __DIR__ . '/../..' . '/vendor_prefixed/wp-plugin-flow-common/src/PluginBootstrap.php',
        'ShopMagicCartVendor\\WPDesk\\Tracker\\Assets' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/PSR/WPDesk/Tracker/Assets.php',
        'ShopMagicCartVendor\\WPDesk\\Tracker\\OptInOptOut' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/PSR/WPDesk/Tracker/OptInOptOut.php',
        'ShopMagicCartVendor\\WPDesk\\Tracker\\OptInPage' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/PSR/WPDesk/Tracker/OptInPage.php',
        'ShopMagicCartVendor\\WPDesk\\Tracker\\OptOut' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/PSR/WPDesk/Tracker/OptOut.php',
        'ShopMagicCartVendor\\WPDesk\\Tracker\\PluginActionLinks' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/PSR/WPDesk/Tracker/PluginActionLinks.php',
        'ShopMagicCartVendor\\WPDesk\\Tracker\\Shop' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/PSR/WPDesk/Tracker/Shop.php',
        'ShopMagicCartVendor\\WPDesk\\View\\PluginViewBuilder' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/PluginViewBuilder.php',
        'ShopMagicCartVendor\\WPDesk\\View\\Renderer\\LoadTemplatePlugin' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/Renderer/LoadTemplatePlugin.php',
        'ShopMagicCartVendor\\WPDesk\\View\\Renderer\\Renderer' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/Renderer/Renderer.php',
        'ShopMagicCartVendor\\WPDesk\\View\\Renderer\\SimplePhpRenderer' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/Renderer/SimplePhpRenderer.php',
        'ShopMagicCartVendor\\WPDesk\\View\\Resolver\\ChainResolver' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/Resolver/ChainResolver.php',
        'ShopMagicCartVendor\\WPDesk\\View\\Resolver\\DirResolver' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/Resolver/DirResolver.php',
        'ShopMagicCartVendor\\WPDesk\\View\\Resolver\\Exception\\CanNotResolve' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/Resolver/Exception/CanNotResolve.php',
        'ShopMagicCartVendor\\WPDesk\\View\\Resolver\\NullResolver' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/Resolver/NullResolver.php',
        'ShopMagicCartVendor\\WPDesk\\View\\Resolver\\Resolver' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/Resolver/Resolver.php',
        'ShopMagicCartVendor\\WPDesk\\View\\Resolver\\WPThemeResolver' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/Resolver/WPThemeResolver.php',
        'ShopMagicCartVendor\\WPDesk\\View\\Resolver\\WooTemplateResolver' => __DIR__ . '/../..' . '/vendor_prefixed/wp-view/src/Resolver/WooTemplateResolver.php',
        'ShopMagicCartVendor\\WPDesk_Basic_Requirement_Checker' => __DIR__ . '/../..' . '/vendor_prefixed/wp-basic-requirements/src/Basic_Requirement_Checker.php',
        'ShopMagicCartVendor\\WPDesk_Basic_Requirement_Checker_Factory' => __DIR__ . '/../..' . '/vendor_prefixed/wp-basic-requirements/src/Basic_Requirement_Checker_Factory.php',
        'ShopMagicCartVendor\\WPDesk_Basic_Requirement_Checker_With_Update_Disable' => __DIR__ . '/../..' . '/vendor_prefixed/wp-basic-requirements/src/Basic_Requirement_Checker_With_Update_Disable.php',
        'ShopMagicCartVendor\\WPDesk_Buildable' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/WithoutNamespace/Buildable.php',
        'ShopMagicCartVendor\\WPDesk_Has_Plugin_Info' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/WithoutNamespace/Has_Plugin_Info.php',
        'ShopMagicCartVendor\\WPDesk_Plugin_Info' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/WithoutNamespace/Plugin_Info.php',
        'ShopMagicCartVendor\\WPDesk_Requirement_Checker' => __DIR__ . '/../..' . '/vendor_prefixed/wp-basic-requirements/src/Requirement_Checker.php',
        'ShopMagicCartVendor\\WPDesk_Requirement_Checker_Factory' => __DIR__ . '/../..' . '/vendor_prefixed/wp-basic-requirements/src/Requirement_Checker_Factory.php',
        'ShopMagicCartVendor\\WPDesk_Tracker' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/class-wpdesk-tracker.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Gateways' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-gateways.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Identification' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-identification.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Identification_Gdpr' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-identification-gdpr.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Jetpack' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-jetpack.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_License_Emails' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-license-emails.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Orders' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-orders.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Orders_Country' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-orders-country.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Orders_Month' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-orders-month.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Plugins' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-plugins.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Products' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-products.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Products_Variations' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-products-variations.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Server' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-server.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Settings' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-settings.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Shipping_Classes' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-shipping-classes.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Shipping_Methods' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-shipping-methods.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Shipping_Methods_Zones' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-shipping-methods-zones.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Templates' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-templates.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Theme' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-theme.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_User_Agent' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-user-agent.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Users' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-users.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Data_Provider_Wordpress' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/data_provider/class-wpdesk-tracker-data-provider-wordpress.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Factory_Prefixed' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/class-wpdesk-tracker-factory-prefixed.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Interface' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/class-wpdesk-tracker-interface.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Persistence_Consent' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/persistence/class-wpdesk-tracker-persistence-consent.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Sender' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/sender/class-wpdesk-tracker-sender.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Sender_Exception_WpError' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/sender/Exception/class-wpdesk-tracker-sender-exception-wperror.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Sender_Logged' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/sender/class-wpdesk-tracker-sender-logged.php',
        'ShopMagicCartVendor\\WPDesk_Tracker_Sender_Wordpress_To_WPDesk' => __DIR__ . '/../..' . '/vendor_prefixed/wp-wpdesk-tracker/src/sender/class-wpdesk-tracker-sender-wordpress-to-wpdesk.php',
        'ShopMagicCartVendor\\WPDesk_Translable' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/WithoutNamespace/Translable.php',
        'ShopMagicCartVendor\\WPDesk_Translatable' => __DIR__ . '/../..' . '/vendor_prefixed/wp-builder/src/Plugin/WithoutNamespace/Translatable.php',
        'WPDesk\\ShopMagicCart\\Admin\\AnalyticsController' => __DIR__ . '/../..' . '/src/Admin/AnalyticsController.php',
        'WPDesk\\ShopMagicCart\\Admin\\Settings' => __DIR__ . '/../..' . '/src/Admin/Settings.php',
        'WPDesk\\ShopMagicCart\\Admin\\Statistics' => __DIR__ . '/../..' . '/src/Admin/Statistics.php',
        'WPDesk\\ShopMagicCart\\CartExtension' => __DIR__ . '/../..' . '/src/CartExtension.php',
        'WPDesk\\ShopMagicCart\\Cart\\AbandonedCart' => __DIR__ . '/../..' . '/src/Cart/AbandonedCart.php',
        'WPDesk\\ShopMagicCart\\Cart\\ActiveCart' => __DIR__ . '/../..' . '/src/Cart/ActiveCart.php',
        'WPDesk\\ShopMagicCart\\Cart\\BaseCart' => __DIR__ . '/../..' . '/src/Cart/BaseCart.php',
        'WPDesk\\ShopMagicCart\\Cart\\Cart' => __DIR__ . '/../..' . '/src/Cart/Cart.php',
        'WPDesk\\ShopMagicCart\\Cart\\CartFactory' => __DIR__ . '/../..' . '/src/Cart/CartFactory.php',
        'WPDesk\\ShopMagicCart\\Cart\\CartProductItem' => __DIR__ . '/../..' . '/src/Cart/CartProductItem.php',
        'WPDesk\\ShopMagicCart\\Cart\\CartStatistics' => __DIR__ . '/../..' . '/src/Cart/CartStatistics.php',
        'WPDesk\\ShopMagicCart\\Cart\\NullCart' => __DIR__ . '/../..' . '/src/Cart/NullCart.php',
        'WPDesk\\ShopMagicCart\\Cart\\OrderedCart' => __DIR__ . '/../..' . '/src/Cart/OrderedCart.php',
        'WPDesk\\ShopMagicCart\\Cart\\SubmittedCart' => __DIR__ . '/../..' . '/src/Cart/SubmittedCart.php',
        'WPDesk\\ShopMagicCart\\Controller\\CartsController' => __DIR__ . '/../..' . '/src/Controller/CartsController.php',
        'WPDesk\\ShopMagicCart\\DatabaseTable' => __DIR__ . '/../..' . '/src/DatabaseTable.php',
        'WPDesk\\ShopMagicCart\\Database\\CartHydrator' => __DIR__ . '/../..' . '/src/Database/CartHydrator.php',
        'WPDesk\\ShopMagicCart\\Database\\CartManager' => __DIR__ . '/../..' . '/src/Database/CartManager.php',
        'WPDesk\\ShopMagicCart\\Database\\CartRepository' => __DIR__ . '/../..' . '/src/Database/CartRepository.php',
        'WPDesk\\ShopMagicCart\\Event\\AbandonedCartEvent' => __DIR__ . '/../..' . '/src/Event/AbandonedCartEvent.php',
        'WPDesk\\ShopMagicCart\\Exception\\CannotProvideCartException' => __DIR__ . '/../..' . '/src/Exception/CannotProvideCartException.php',
        'WPDesk\\ShopMagicCart\\Filter\\CartBasedFilter' => __DIR__ . '/../..' . '/src/Filter/CartBasedFilter.php',
        'WPDesk\\ShopMagicCart\\Filter\\CartDateCreated' => __DIR__ . '/../..' . '/src/Filter/CartDateCreated.php',
        'WPDesk\\ShopMagicCart\\Filter\\CartItemCategories' => __DIR__ . '/../..' . '/src/Filter/CartItemCategories.php',
        'WPDesk\\ShopMagicCart\\Filter\\CartItemCount' => __DIR__ . '/../..' . '/src/Filter/CartItemCount.php',
        'WPDesk\\ShopMagicCart\\Filter\\CartItems' => __DIR__ . '/../..' . '/src/Filter/CartItems.php',
        'WPDesk\\ShopMagicCart\\Filter\\CartTotal' => __DIR__ . '/../..' . '/src/Filter/CartTotal.php',
        'WPDesk\\ShopMagicCart\\Frontend\\CartRestore' => __DIR__ . '/../..' . '/src/Frontend/CartRestore.php',
        'WPDesk\\ShopMagicCart\\Frontend\\ExitIntent' => __DIR__ . '/../..' . '/src/Frontend/ExitIntent.php',
        'WPDesk\\ShopMagicCart\\HookEmitter\\CartAbandoner' => __DIR__ . '/../..' . '/src/HookEmitter/CartAbandoner.php',
        'WPDesk\\ShopMagicCart\\HookEmitter\\CartExpiration' => __DIR__ . '/../..' . '/src/HookEmitter/CartExpiration.php',
        'WPDesk\\ShopMagicCart\\Interceptor\\CartInterceptor' => __DIR__ . '/../..' . '/src/Interceptor/CartInterceptor.php',
        'WPDesk\\ShopMagicCart\\Interceptor\\CartMergeOnUserRegistration' => __DIR__ . '/../..' . '/src/Interceptor/CartMergeOnUserRegistration.php',
        'WPDesk\\ShopMagicCart\\Normalizer\\CartNormalizer' => __DIR__ . '/../..' . '/src/Normalizer/CartNormalizer.php',
        'WPDesk\\ShopMagicCart\\Placeholder\\CartBasedPlaceholder' => __DIR__ . '/../..' . '/src/Placeholder/CartBasedPlaceholder.php',
        'WPDesk\\ShopMagicCart\\Placeholder\\CartItemCount' => __DIR__ . '/../..' . '/src/Placeholder/CartItemCount.php',
        'WPDesk\\ShopMagicCart\\Placeholder\\CartItems' => __DIR__ . '/../..' . '/src/Placeholder/CartItems.php',
        'WPDesk\\ShopMagicCart\\Placeholder\\CartLink' => __DIR__ . '/../..' . '/src/Placeholder/CartLink.php',
        'WPDesk\\ShopMagicCart\\Placeholder\\CartTotal' => __DIR__ . '/../..' . '/src/Placeholder/CartTotal.php',
        'WPDesk\\ShopMagicCart\\Plugin' => __DIR__ . '/../..' . '/src/Plugin.php',
        'WPDesk\\ShopMagicCart\\TestData\\CartTestProvider' => __DIR__ . '/../..' . '/src/TestData/CartTestProvider.php',
        'WPDesk\\ShopMagicCart\\migrations\\Version_10' => __DIR__ . '/../..' . '/migrations/Version_10.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd33863e74e5a328c036821d1541a6a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd33863e74e5a328c036821d1541a6a9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd33863e74e5a328c036821d1541a6a9::$classMap;

        }, null, ClassLoader::class);
    }
}
