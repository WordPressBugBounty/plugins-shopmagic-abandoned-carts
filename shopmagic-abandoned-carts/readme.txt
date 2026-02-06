=== ShopMagic Abandoned Cart Recovery for WooCommerce ===
Tags: cart abandonment, cart recovery, abandoned carts, abandoned cart, abandoned cart email
Author URL: https://shopmagic.app/sk/shopmagic-abandoned-carts-readme-author/
Donate link: https://shopmagic.app/sk/shopmagic-abandoned-carts-donate/
Requires at least: 6.2
Tested up to: 6.9
Requires PHP: 7.4
Stable tag: 2.2.34
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows saving customer details on partial WooCommerce purchases and sending abandoned cart emails.

== Description ==

ShopMagic Abandoned Cart Recovery for WooCommerce is a free add-on for the [ShopMagic - email automation](https://wordpress.org/plugins/shopmagic-for-woocommerce/) that helps store owners track and recover abandoned carts in WooCommerce.

The plugin saves cart and customer data when a checkout is not completed and allows you to create automated follow-up emails using ShopMagic automations. It supports both logged-in customers and guests and works entirely within your WordPress installation.

This add-on is designed for store owners who want a simple and flexible way to manage abandoned carts, send recovery emails, and analyze cart recovery data without relying on external services.


== Requirements ==

This plugin is an add-on and requires the free [ShopMagic - email automation](https://wordpress.org/plugins/shopmagic-for-woocommerce/) plugin to be installed and activated.

WooCommerce must also be installed and active.


== Key Features ==

- **Abandoned cart tracking** - Track carts for registered users and optionally for guests.

- **Automated recovery emails** - Send customizable email campaigns to recover abandoned carts.

- **Pre-submit data capture** - Save customer emails instantly when entered in checkout.

- **Cart timeout settings** - Define when a cart is considered abandoned.

- **Segment carts and customers** - Filter by product, category, total, item count, or creation date.

- **Email personalization** - Use placeholders to send personalized messages.

- **Exit-intent popups** - Optional popups to collect emails before users leave.

- **Integration with other ShopMagic add-ons** - Extend recovery to bookings, subscriptions, and more.

- **Export to Google Sheets** - Send abandoned cart data to spreadsheets for analysis.

- **Automatic cleanup** - Optionally clear carts after 30 days.


== How It Works ==

1. The plugin captures user emails when they reach the WooCommerce checkout page.

2. If the purchase is not completed after a set time, an automated email is sent.

3. Emails can be fully customized using ShopMagic’s automation and HTML editor.

4. All recovered carts and actions are logged in the WooCommerce dashboard.

Note: Requires the free ShopMagic core plugin.

== Data Use & Privacy ==

ShopMagic Abandoned Cart Recovery for WooCommerce stores all data locally in your WordPress database. The plugin does not send cart or customer data to external services by default.

Collected data may include cart contents, customer email address, and basic checkout information, depending on your configuration. This data is used only to identify abandoned carts and trigger automated actions in ShopMagic.

You can control how long abandoned cart data is stored and optionally enable automatic cleanup of old carts. Data collection features such as guest tracking or pre-submit email capture can be enabled or disabled in the plugin settings.

For detailed information, please review the [Use of Data Policy by WP Desk Plugins](https://shopmagic.app/sk/shopmagic-abandoned-carts-data-policy/)

== Screenshots ==

1. Abandoned Carts settings in ShopMagic - email automation.
2. Abandoned Cart reports for WooCommerce.
3. Enable popup messages for abandoned carts - WooCommerce plugin.
4. Create abandoned cart email templates to rescue carts in WooCommerce.
5. Create abandonment cart email templates for specific languages.
6. Run email marketing automation and sms notifications to recover abandoned carts in WooCommerce.
7. Use custom filters to send emails and lower the abandonment cart rate in WooCommerce.
8. Use custom email templates for the abandoned cart of your newsletter subscribers (with the [ShopMagic Manual Actions PRO add-on](https://shopmagic.app/sk/shopmagic-abandoned-carts-manual-actions/)).
9. Free add-ons for ShopMagic - email automation.


== FAQ ==

### Do I need anything else to use this plugin?

Yes, ShopMagic Abandoned Cart Recovery requires the free [ShopMagic](https://wordpress.org/plugins/shopmagic-for-woocommerce/) plugin.

### What does abandon cart mean?

An abandoned cart is a cart that contains products or services, but the customer does not complete the checkout process.

### I’m new to WooCommerce. Can I configure it easily?

Yes, configuration takes only a few minutes. ShopMagic includes ready-to-use templates.

### Can I recover unlimited carts?

Yes, there are no limits in the free plugin.


== Installation ==

1. Install via WordPress.org or upload plugin files to your server.

2. Activate the plugin through the WordPress “Plugins” menu.

3. Go to ShopMagic → Automations and add an automation for Abandoned Carts.

4. Configure email templates for abandoned cart recovery.

5. Review reports to analyze cart recovery performance.


== Support & Documentation ==

If you need help with configuration or usage, please refer to the official [Documentation](https://shopmagic.app/sk/shopmagic-abandoned-carts-readme-docs/)

For technical questions, bug reports, or general support, you can use the WordPress.org [support forum](https://wordpress.org/support/plugin/shopmagic-for-woocommerce/)

When reporting an issue, please include your WordPress version, WooCommerce version, ShopMagic version, and steps to reproduce the problem. This helps us resolve issues faster.


== Changelog ==

= 2.2.34 - 2026-01-21 =
* Added support for WooCommerce 10.5

= 2.2.33 - 2026-01-14 =
* Fixed deprecation notices for PHP 8.5

= 2.2.32 - 2026-01-12 =
* Added 'json' template format for cart.items placeholder.

= 2.2.31 - 2026-01-07 =
* Readme update.

= 2.2.30 - 2025-12-04 =
* Added support for WordPress 6.9

= 2.2.29 - 2025-10-14 =
* Change promo links

= 2.2.28 - 2025-10-09 =
* Added Patchstack Vulnerability Disclosure Program

= 2.2.27 - 2025-05-23 =
* Change promo links

= 2.2.26 - 2025-03-27 =
* Added support for WordPress 6.8
* Added support for WooCommerce 9.8

= 2.2.25 - 2025-01-09 =
* Reduced false-positive abandoned carts, when customer actually makes a purchase.

= 2.2.24 - 2024-12-21 =
* Added support for WooCommerce 9.6

= 2.2.23 - 2024-11-21 =
* Added support for WordPress 6.7
* Added support for WooCommerce 9.5

= 2.2.22 - 2024-09-07 =
* Added support for WooCommerce 9.3

= 2.2.21 - 2024-08-07 =
* Added support for WooCommerce 9.2

= 2.2.20 - 2024-07-23 =
* When customer registration is enabled during checkout, merge recent guest customer with registered user, to avoid duplicated carts.

= 2.2.19 - 2024-07-21 =
* Added support for WordPress 6.6

= 2.2.18 - 2024-07-07 =
* Added support for WooCommerce 9.1

= 2.2.17 - 2024-06-07 =
* Added support for WooCommerce 9.0

= 2.2.16 - 2024-05-21 =
* Added support for WooCommerce 8.9

= 2.2.15 - 2024-04-15 =
* Added support for WooCommerce 8.8

= 2.2.14 - 2024-03-21 =
* Added support for WordPress 6.5

= 2.2.13 - 2024-03-07 =
* Added support for WooCommerce 8.7

= 2.2.12 - 2024-02-05 =
* Fixed cart remains abandoned even after purchase.

= 2.2.11 - 2023-12-18 =
* Added support for WooCommerce 8.4

= 2.2.10 - 2023-11-14 =
* Declared compatible with WooCommerce High-Performance Order Storage.

= 2.2.9 - 2023-11-07 =
* Added support for WordPress 6.4
* Added support for WooCommerce 8.3

= 2.2.8 - 2023-10-09 =
* Added support for WooCommerce 8.2

= 2.2.7 - 2023-09-21 =
* Added support for WooCommerce 8.1
* Changed default order of carts displayed in admin view. Now ShopMagic sorts carts by last active first (recently updated).

= 2.2.6 - 2023-09-04 =
* Readded possibility to remove carts from admin view. This function requires ShopMagic for WooCommerce 4.1.0

= 2.2.5 - 2023-08-16 =
* Added support for WordPress 6.3
* Added support for WooCommerce 8.0

= 2.2.4 - 2023-06-27 =
* Added support for ShopMagic 4.0
* Added support for WooCommerce 7.9
* Fixed error when fetching carts in admin view for products which have been deleted from the store

= 2.2.3 - 2023-06-13 =
* Improved compatibility with ShopMagic for WooCommerce 3.0.14, which failed to intercept customer carts.
* Fixed error when removing outdated carts.
* Added support for WooCommerce 7.8

= 2.2.2 - 2023-03-23 =
* Added support for WooCommerce 7.5
* Added support for WordPress 6.2
* Fixed error when trying to send test without any carts in store.

= 2.2.1 - 2022-12-27 =
* Improved cross-version compatibility between ShopMagic 3.x and 2.x.
* Fixed error when trying to send test without any carts in store.

= 2.2.0 - 2022-12-06 =
* Added support for ShopMagic 3.0
* Dropped support for ShopMagic 2.x

= 2.1.2 - 2022-07-20 =
* Fixed WooCommerce order displays error in order note during status change.
* Bumped WooCommerce compatibility version

= 2.1.1 - 2022-06-30 =
* Fixed sometimes cart status may be uninterpreted, leading to fatal error in admin area.

= 2.1.0 - 2022-06-22 =
* Added new cart status for orders which has been submitted, but not yet paid.
* Bumped WooCommerce compatibility version

= 2.0.7 - 2022-05-24 =
* Bumped WooCommerce compatibility version
* Bumped WordPress compatibility version

= 2.0.6 - 2022-04-28 =
* Bumped WooCommerce compatibility version

= 2.0.5 - 2022-04-05 =
* Fixed cart not marked as recovered after purchase from abandoned cart.

= 2.0.4 - 2022-03-10 =
* Fixed sometimes making order can trigger unhandled error.

= 2.0.3 - 2022-03-09 =
* Fixed issue with carts not removed after instant order.
* Fixed abandoned cart popup sometimes showing on order thank you page.
* Fixed database duplicate insert key error showing sometimes when cart is saved.
* Changed minimal cart abandonment timeout to 5 minutes.
* Changed access level for ShopMagic Abandoned Cart admin page. Now Store Manager role can access abandoned carts page.

= 2.0.2 - 2022-03-02 =
* Bumped WooCommerce compatibility version
* Improved logging cart intercepting for debug issues.

= 2.0.1 - 2022-02-08 =
* Fixed cart shown as abandoned despite Customer makes an order

= 2.0.0 - 2022-02-01 =
* Added exit intent popup able to save pre-checkout abandoned carts
* Added possibility to remove old carts from database
* Reorganized admin Carts table view
* Changed the way of saving abandoned carts - instant orders are no longer stored in abandoned carts
* Changed PHPDoc typing to strong typing, marked all internal classes as final
* Bumped WordPress compatibility version
* Updated readme

= 1.6.0 - 2022-01-18 =
* Added support for automation group filters from ShopMagic Advanced Filters
* Fixed cart is not saving customer before actual purchase
* Bumped WooCommerce compatibility version

= 1.5.1 - 2021-12-21 =
* Bumped WooCommerce compatibility version

= 1.5.0 - 2021-08-09 =
* Added filtering options to abandoned carts admin view

= 1.4.0 - 2021-07-21 =
* Added UTM parameters for cart.link placeholder
* Bumped WooCommerce compatibility version

= 1.3.0 - 2021-06-23 =
* Added bulk action 'remove' for carts logs

= 1.2.1 - 2021-06-16 =
* Fixed assigning normal orders as recovered. From now uninterrupted orders are not count in Abandoned Carts statistics.

= 1.2.0 - 2021-05-26 =
* Added new templates for cart.items placeholder

= 1.1.1 - 2021-05-19 =
* Bumped WooCommerce compatibility version

= 1.1.0 - 2021-02-03 =
* Added customer pause period field
* Added message when product in the cart no longer exists

= 1.0.1 - 2020-12-30 =
* Fixed cart cloning after order creation
* Fixed conflict with change-quantity-on-checkout-for-woocommerce plugin
* Fixed error when quantity is a float

= 1.0.0 - 2020-11-04 =
* Initial release!

== Upgrade Notice ==

Upgrade to the latest version to get the newest features and all interface improvements.
