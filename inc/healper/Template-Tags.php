<?php
/**
 * Custom functionality template
 */

// A Custom function for get an option
if ( !function_exists( 'get_codestar_options' ) ) {
    /**
     * Retrieves the value of a specified option from the "_jalal-theme-options" options array.
     *
     * @param string $option The name of the option to retrieve.
     * @param mixed $default The default value to return if the option is not set.
     * @return mixed The value of the specified option, or the default value if the option is not set.
     */
    function get_codestar_options( $option = '', $default = null ) {
        $options = get_option( '_jalal-theme-options' );
        return ( isset( $options[$option] ) ) ? $options[$option] : $default;
    }
}