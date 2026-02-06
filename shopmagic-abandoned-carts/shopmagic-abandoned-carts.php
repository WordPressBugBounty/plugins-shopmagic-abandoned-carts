<?php
/**
 * Plugin Name: ShopMagic Abandoned Carts
 * Plugin URI: https://shopmagic.app/sk/shopmagic-abandoned-carts-plugin
 * Description: Allows saving customer details on a partial WooCommerce purchase and send abandoned cart emails.
 * Version: 2.2.34
 * Author: WP Desk
 * Author URI: https://shopmagic.app/sk/shopmagic-abandoned-carts-author/
 * Text Domain: shopmagic-abandoned-carts
 * Domain Path: /lang/
 * Requires at least: 5.0
 * Tested up to: 6.9
 * WC requires at least: 10.1
 * WC tested up to: 10.5
 * Requires PHP: 7.4
 * Requires Plugins: woocommerce,shopmagic-for-woocommerce
 *
 * Copyright 2023 WP Desk Ltd.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/* THESE TWO VARIABLES CAN BE CHANGED AUTOMATICALLY */
$plugin_version = '2.2.34';

$plugin_name        = 'ShopMagic Abandoned Carts';
$plugin_class_name  = '\WPDesk\ShopMagicCart\Plugin';
$product_id         = '';
$plugin_text_domain = 'shopmagic-abandoned-carts';
$plugin_file        = __FILE__;
$plugin_dir         = __DIR__;

$requirements = [
	'php'     => '7.4',
	'wp'      => '6.2',
	'plugins' => [
		[
			'name'      => 'woocommerce/woocommerce.php',
			'nice_name' => 'WooCommerce',
		],
		[
			'name'      => 'shopmagic-for-woocommerce/shopMagic.php',
			'nice_name' => 'ShopMagic',
			'version'   => '4.2.19',
		],
	],
];

require __DIR__ . '/vendor_prefixed/wp-plugin-flow-common/src/plugin-init-php52-free.php';
