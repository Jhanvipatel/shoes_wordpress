<?php
/**
 * Your Inspiration Themes
 *
 * @package WordPress
 * @subpackage Your Inspiration Themes
 * @author Your Inspiration Themes Team <info@yithemes.com>
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

add_filter('yit_plugins', 'yit_add_plugins');
function yit_add_plugins( $plugins ) {
    return array_merge( $plugins, array(

        array(
            'name'      => 'WooCommerce',
            'slug'      => 'woocommerce',
            'required'  => false,
            'version'=> '2.2.8',
        ),

        defined( 'YITH_YWZM_PREMIUM' ) ? array() : array(
            'name'      => 'YITH WooCommerce Zoom Magnifier',
            'slug'      => 'yith-woocommerce-zoom-magnifier',
            'required'  => false,
            'version'=> '1.0.2',
        ),

        defined( 'YITH_WCWL_PREMIUM' ) ? array() : array(
            'name'      => 'YITH WooCommerce Wishlist',
            'slug'      => 'yith-woocommerce-wishlist',
            'required'  => false,
            'version'=> '1.0.2',
        ),

        array(
            'name'      => 'YITH WooCommerce Compare',
            'slug'      => 'yith-woocommerce-compare',
            'required'  => false,
            'version'=> '1.0.0',
        ),

        defined( 'YITH_WCAN_PREMIUM' ) ? array() : array(
            'name'      => 'YITH WooCommerce Ajax Navigation',
            'slug'      => 'yith-woocommerce-ajax-navigation',
            'required'  => false,
            'version'=> '1.0.0',
        ),

        array(
            'name'      => 'YITH WooCommerce Featured Video',
            'slug'      => 'yith-woocommerce-featured-video',
            'required'  => false,
            'version'=> '1.0.0',
        ),

        defined( 'YITH_YWAR_PREMIUM' ) ? array() : array(
            'name'         => 'YITH Woocommerce Advanced Reviews',
            'slug'         => 'yith-woocommerce-advanced-reviews',
            'required'     => false,
            'version'      => '1.0.0',
        ),

        defined( 'YITH_YWOT_PREMIUM' ) ? array() : array(
            'name'         => 'YITH Woocommerce Order Traking',
            'slug'         => 'yith-woocommerce-order-tracking',
            'required'     => false,
            'version'      => '1.0.0',
        ),

        defined( 'YWRR_PREMIUM' ) ? array() : array(
            'name'         => 'YITH Woocommerce Review Reminder',
            'slug'         => 'yith-woocommerce-review-reminder',
            'required'     => false,
            'version'      => '1.0.0',
        ),

        defined( 'YITH_WCAS_PREMIUM' ) ? array() : array(
            'name'      => 'YITH WooCommerce Ajax Search',
            'slug'      => 'yith-woocommerce-ajax-search',
            'required'  => false,
            'version'   => '1.1.1'
        ),

        defined( 'YITH_YWCM_PREMIUM' ) ? array() : array(
            'name'      => 'YITH WooCommerce Cart Message',
            'slug'      => 'yith-woocommerce-cart-messages',
            'required'  => false,
            'version'   => '1.0.0'
        ),

        defined( 'YITH_YWPI_PREMIUM' ) ? array() : array(
            'name'      => 'YITH WooCommerce PDF Invoice and Shipping List',
            'slug'      => 'yith-woocommerce-pdf-invoice',
            'required'  => false,
            'version'   => '1.0.0'
        ),

        defined( 'YITH_WCSTRIPE_PREMIUM' ) ? array() : array(
            'name'      => 'YITH WooCommerce Stripe',
            'slug'      => 'yith-woocommerce-stripe',
            'required'  => false,
            'version'   => '1.0.0'
        ),

        defined( 'YITH_WCAUTHNET_PREMIUM' ) ? array() : array(
            'name'      => 'YITH WooCommerce Authorize.net Payment Gateway',
            'slug'      => 'yith-woocommerce-authorizenet-payment-gateway',
            'required'  => false,
            'version'   => '1.0.0'
        ),

        array(
            'name'      => 'YITH WooCommerce Colors and Labels Variations',
            'slug'      => 'yith-woocommerce-colors-labels-variations',
            'repository'   => 'YIT Repository',
            'required'  => false,
            'version'   => '1.1.2'
        ),

        defined( 'YITH_YWRAQ_PREMIUM' ) ? array() : array(
            'name'   => 'YITH WooCommerce Request a Quote',
            'slug'   => 'yith-woocommerce-request-a-quote',
            'required'  => false,
            'version'   => '1.0.2'
        ),

        defined( 'YITH_WPV_PREMIUM' ) ? array() : array(
            'name'         => 'YITH WooCommerce Multi Vendor',
            'slug'         => 'yith-woocommerce-product-vendors',
            'required'     => false,
            'version'      => '1.0.0',
        ),

        defined( 'YLC_PREMIUM' ) ? array() : array(
            'name'         => 'YITH Live Chat',
            'slug'         => 'yith-live-chat',
            'required'     => false,
            'version'      => '1.0.0',
        ),

    ));
}