<?php
/**
 * Custom function Template
 */

// A Custom function for get an option
if ( !function_exists( 'get_codestar_field_options' ) ) {
    /**
     * Retrieves the value of a specific option from the framework options.
     *
     * This function retrieves the value of the specified option from the framework options.
     * If the option is not found, the default value is returned instead.
     *
     * @param string $option The name of the option to retrieve.
     * @param mixed $default The default value to return if the option is not found.
     * @return mixed The value of the specified option, or the default value if the option is not found.
     */
    function get_codestar_field_options( $option = '', $default = null ) {
        $options = get_option( '_wordpress-theme-task' );
        return ( null !== $options[$option] ) ? $options[$option] : $default;
    }
}