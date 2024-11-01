<?php
/*
Plugin Name: WooCommerce Phone Number Required
Plugin URI: www.pixeltoweb.com/
Description: Set Validation for Phone Number in Checkout Billing Address
Version: 1.0.0
Author: Pixeltoweb (pixeltoweb@gmail.com)
Author URI: http://www.pixeltoweb.com/
License: GPLv2 or later
Text Domain: pixeltoweb
*/
add_action('woocommerce_checkout_fields', 'woocomerce_checkout_field_validate');
function woocomerce_checkout_field_validate($fields) {
    $fields['billing']['billing_phone'] = array(
        'label'     => __('Phone', 'woocommerce'),
        'placeholder'   => _x('Phone', 'placeholder', 'woocommerce'),
        'required'  => true,
        'class'     => array('form-row-wide'),
        'clear'     => true
     );
     return $fields;
}