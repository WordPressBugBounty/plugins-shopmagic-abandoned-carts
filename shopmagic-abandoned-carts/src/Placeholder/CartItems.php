<?php

namespace WPDesk\ShopMagicCart\Placeholder;

use WPDesk\ShopMagic\Exception\ReferenceNoLongerAvailableException;
use WPDesk\ShopMagic\Workflow\Placeholder\Helper\PlaceholderUTMBuilder;
use WPDesk\ShopMagic\Workflow\Placeholder\TemplateRendererForPlaceholders;
use WPDesk\ShopMagicCart\Cart\CartProductItem;

final class CartItems extends CartBasedPlaceholder {

	/** @var TemplateRendererForPlaceholders */
	private $renderer;

	/** @var PlaceholderUTMBuilder */
	private $utm_builder;

	public function __construct( TemplateRendererForPlaceholders $renderer ) {
		$this->renderer    = $renderer;
		$this->utm_builder = new PlaceholderUTMBuilder();
	}

	public function get_slug(): string {
		return 'items';
	}

	public function get_description(): string {
		return __( 'Displays the products from cart.', 'shopmagic-abandoned-carts' ) .
				'<br>' .
				$this->utm_builder->get_description();
	}

	public function get_supported_parameters( $values = null ): array {
		add_filter(
			'shopmagic/core/placeholder/products_ordered/templates',
			function ( $templates ) {
				$templates['json'] = __( 'JSON Format', 'shopmagic-abandoned-carts' );
				return $templates;
			}
		);

		return array_merge( $this->utm_builder->get_utm_fields(), $this->renderer->get_template_selector_field() );
	}

	public function value( array $parameters ): string {
		$items         = $this->is_cart_provided() ? $this->get_cart()->get_items() : [];
		$products      = [];
		$product_names = [];

		if ( ( $parameters['template'] ?? '' ) === 'json' ) {
			return wp_json_encode( $this->prepare_items_for_json( $items, $parameters ) );
		}

		foreach ( $items as $item ) {
			try {
				$products[]      = $item->get_product();
				$product_names[] = $item->get_product()->get_name();
			} catch ( \TypeError $e ) { // phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedCatch
				// Product no longer exists.
			}
		}

		if ( ! empty( $products ) ) {
			return $this->renderer->render(
				$parameters['template'],
				[
					'order_items'   => $items,
					'products'      => $products,
					'product_names' => $product_names,
					'parameters'    => $parameters,
					'utm_builder'   => $this->utm_builder,
				]
			);
		}

		return '';
	}

	/**
	 * @param CartProductItem[] $items
	 *
	 * @return array<int, array<string, mixed>>
	 */
	private function prepare_items_for_json( array $items, array $parameters ): array {
		$prepared = [];

		foreach ( $items as $item ) {
			$price      = null;
			$sku        = '';
			$product_id = $item->get_product_id();

			try {
				$product = $item->get_product();
				$price   = $product->get_price();
				$sku     = $product->get_sku();
			} catch ( ReferenceNoLongerAvailableException $e ) {
				continue;
			}

			$url        = $this->utm_builder->append_utm_parameters_to_uri( $parameters, $item->get_permalink() );
			$prepared[] = [
				'product_id'        => $product_id,
				'variation_id'      => $item->get_variation_id(),
				'sku'               => $sku,
				'title'             => $item->get_name(),
				'url'               => $url,
				'price'             => $price,
				'quantity'          => $item->get_quantity(),
				'image_url'         => $item->get_image_src(),
				'line_subtotal'     => $item->get_line_subtotal(),
				'line_subtotal_tax' => $item->get_line_subtotal_tax(),
			];
		}

		return $prepared;
	}
}
