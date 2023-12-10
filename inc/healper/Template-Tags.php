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
if ( !function_exists( 'get_currency' ) ) {
    function get_currency() {
        $currency_symbols = [
            'USD' => '$', // US Dollar
            'EUR' => '€', // Euro
            'GBP' => '£', // British Pound
            'INR' => '₹', // Indian Rupee
            'AUD' => '$', // Australian Dollar
            'CAD' => '$', // Canadian Dollar
            'SGD' => '$', // Singapore Dollar
            'CHF' => 'Fr.', // Swiss Franc
            'MYR' => 'RM', // Malaysian Ringgit
            'JPY' => '¥', // Japanese Yen
            'CNY' => '¥', // Chinese Yuan Renminbi
            'NZD' => '$', // New Zealand Dollar
            'THB' => '฿', // Thai Baht
            'HUF' => 'Ft', // Hungarian Forint
            'RUB' => '₽', // Russian Ruble
            'MXN' => '$', // Mexican Peso
            'ZAR' => 'R', // South African Rand
            'TRY' => '₺', // Turkish Lira
            'BRL' => 'R$', // Brazilian Real
            'IDR' => 'Rp', // Indonesian Rupiah
            'KRW' => '₩', // South Korean Won
            'PHP' => '₱', // Philippine Peso
            'PLN' => 'zł', // Polish Zloty
            'BDT' => '৳', // Bangladeshi Taka
        ];

        if ( is_array( $currency_symbols ) && count( $currency_symbols ) > 0 ) {
            foreach ( $currency_symbols as $key => $value ) {
                $select_currency_symbol = get_post_meta( get_the_ID(), '_select_currency', true );
                ?>
                    <option value="<?php echo esc_attr( $key ); ?>" <?php selected( $select_currency_symbol, $key );?>>
                        <?php esc_html_e( $key, 'wordpress-theme-task' );?>
                    </option>
                <?php
}
        }
    }
}

// get currency symbol
function get_currency_symbol( $currency_code ) {
    switch ( $currency_code ) {
    case 'USD':
        return '$'; // US Dollar
        break;
    case 'EUR':
        return '€'; // Euro
        break;
    case 'GBP':
        return '£'; // British Pound
        break;
    case 'INR':
        return '₹'; // Indian Rupee
        break;
    case 'AUD':
        return '$'; // Australian Dollar
        break;
    case 'CAD':
        return '$'; // Canadian Dollar
        break;
    case 'SGD':
        return '$'; // Singapore Dollar
        break;
    case 'CHF':
        return 'Fr.'; // Swiss Franc
        break;
    case 'MYR':
        return 'RM'; // Malaysian Ringgit
        break;
    case 'JPY':
        return '¥'; // Japanese Yen
        break;
    case 'CNY':
        return '¥'; // Chinese Yuan Renminbi
        break;
    case 'NZD':
        return '$'; // New Zealand Dollar
        break;
    case 'THB':
        return '฿'; // Thai Baht
        break;
    case 'HUF':
        return 'Ft'; // Hungarian Forint
        break;
    case 'RUB':
        return '₽'; // Russian Ruble
        break;
    case 'MXN':
        return '$'; // Mexican Peso
        break;
    case 'ZAR':
        return 'R'; // South African Rand
        break;
    case 'TRY':
        return '₺'; // Turkish Lira
        break;
    case 'BRL':
        return 'R$'; // Brazilian Real
        break;
    case 'IDR':
        return 'Rp'; // Indonesian Rupiah
        break;
    case 'KRW':
        return '₩'; // South Korean Won
        break;
    case 'PHP':
        return '₱'; // Philippine Peso
        break;
    case 'PLN':
        return 'zł'; // Polish Zloty
        break;
    case 'BDT':
        return '৳'; // Bangladeshi Taka
        break;
    default:
        return ''; // Return empty string for unknown currency codes
        break;
    }
}
