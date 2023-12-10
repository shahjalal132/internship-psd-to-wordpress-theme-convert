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

// check monty or yearly pricing plan
if ( !function_exists( 'get_monthly_yearly_plan' ) ) {
    function get_monthly_yearly_plan( $price_plan ) {
        if ( 'yearly' == $price_plan ) {
            return 'y';
        } elseif ( 'monthly' == $price_plan ) {
            return 'm';
        }
    }
}

// Currency symbol dynamic
if ( !function_exists( 'get_currency_symbol' ) ) {
    function get_currency_symbol() {
        $currency_symbols = [
            'USD' => '$',
            'EUR' => '€',
            'GBP' => '£',
            'JPY' => '¥',
            'AUD' => '$',
            'CAD' => '$',
            'CHF' => 'CHF',
            'CNY' => '¥',
            'SEK' => 'kr',
            'NZD' => '$',
            'MXN' => '$',
            'SGD' => '$',
            'HKD' => '$',
            'NOK' => 'kr',
            'TRY' => '₺',
            'RUB' => '₽',
            'INR' => '₹',
            'BRL' => 'R$',
            'ZAR' => 'R',
            'AED' => 'د.إ',
            'SAR' => '﷼',
            'PLN' => 'zł',
            'KRW' => '₩',
            'DKK' => 'kr',
            'THB' => '฿',
            'MYR' => 'RM',
            'IDR' => 'Rp',
            'PHP' => '₱',
            'CZK' => 'Kč',
            'HUF' => 'Ft',
        ];

        if ( is_array( $currency_symbols ) && count( $currency_symbols ) > 0 ) {
            foreach ( $currency_symbols as $key => $value ) {
                ?>
                    <option value="<?php echo esc_attr( $key ); ?>">
                        <?php esc_html_e( $key, 'wordpress-theme-task' );?>
                    </option>
                <?php
}
        }
    }
}

