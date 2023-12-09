<?php
/**
 * Metabox For Price
 */

 class Metabox_For_Price
 {
 
     public function __construct()
     {
         // Setup Hooks
         $this->setup_hooks();
     }
 
     public function setup_hooks()
     {
         // Instance Hooks
         add_action( 'add_meta_boxes', [$this, 'metabox_callback_func'] );
         add_action( 'save_post', [$this, 'save_post_metabox_data'] );
     }
 
     /**
      * Add custom meta box function
      *
      * @return void
      */
     public function metabox_callback_func()
     {
         // Add Metabox Function
         add_meta_box( '_price_metabox', __( 'Additional fields', 'wordpress-theme-task' ), [$this, 'output_callback_function'], 'pricing', 'normal', 'default' );
     }
 
     /**
      * custom meta box HTML (for form)
      *
      * @param object $post
      * @return void
      */
     public function output_callback_function( $post )
     {
         $price_plan = get_post_meta( $post->ID, '_price_plan', true );
         $amount = get_post_meta( $post->ID, '_amount', true );
         $service1 = get_post_meta( $post->ID, '_service1', true );
         $service2 = get_post_meta( $post->ID, '_service2', true );
         $service3 = get_post_meta( $post->ID, '_service3', true );
         $service4 = get_post_meta( $post->ID, '_service4', true );
         $service5 = get_post_meta( $post->ID, '_service5', true );
         $service6 = get_post_meta( $post->ID, '_service6', true );
         ?>
             <p>
                <label for="price_plan"><?php esc_html_e( 'Price Plan', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $price_plan );?>" name="price_plan" id="price_plan" placeholder="Price Plan">
            </p>
             <p>
                <label for="amount"><?php esc_html_e( 'Amount', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $amount );?>" name="amount" id="amount" placeholder="Amount">
            </p>
             <p>
                <label for="service1"><?php esc_html_e( 'service1', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $service1 );?>" name="service1" id="service1" placeholder="service1">
            </p>
             <p>
                <label for="service2"><?php esc_html_e( 'service2', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $service2 );?>" name="service2" id="service2" placeholder="service2">
            </p>
             <p>
                <label for="service3"><?php esc_html_e( 'service3', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $service3 );?>" name="service3" id="service3" placeholder="service3">
            </p>
             <p>
                <label for="service4"><?php esc_html_e( 'service4', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $service4 );?>" name="service4" id="service4" placeholder="service4">
            </p>
             <p>
                <label for="service5"><?php esc_html_e( 'service5', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $service5 );?>" name="service5" id="service5" placeholder="service5">
            </p>
             <p>
                <label for="service6"><?php esc_html_e( 'service6', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $service6 );?>" name="service6" id="service6" placeholder="service6">
            </p>
         <?php
     }
 
     /**
      * Update metabox form data
      *
      * @param integer $post_id
      * @return void
      */
     public function save_post_metabox_data( $post_id )
     {
        // get meta value
         $price_plan = isset( $_POST['price_plan'] ) ? $_POST['price_plan'] : '';
         $amount     = isset( $_POST['amount'] ) ? $_POST['amount'] : '';
         $service1   = isset( $_POST['service1'] ) ? $_POST['service1'] : '';
         $service2   = isset( $_POST['service2'] ) ? $_POST['service2'] : '';
         $service3   = isset( $_POST['service3'] ) ? $_POST['service3'] : '';
         $service4   = isset( $_POST['service4'] ) ? $_POST['service4'] : '';
         $service5   = isset( $_POST['service5'] ) ? $_POST['service5'] : '';
         $service6   = isset( $_POST['service6'] ) ? $_POST['service6'] : '';

        //  update meta value
         if ( array_key_exists( 'price_plan', $_POST ) ) {
             update_post_meta( $post_id, '_price_plan', $price_plan );
         }
         if ( array_key_exists( 'amount', $_POST ) ) {
             update_post_meta( $post_id, '_amount', $amount );
         }
         if ( array_key_exists( 'service1', $_POST ) ) {
             update_post_meta( $post_id, '_service1', $service1 );
         }
         if ( array_key_exists( 'service2', $_POST ) ) {
             update_post_meta( $post_id, '_service2', $service2 );
         }
         if ( array_key_exists( 'service3', $_POST ) ) {
             update_post_meta( $post_id, '_service3', $service3 );
         }
         if ( array_key_exists( 'service4', $_POST ) ) {
             update_post_meta( $post_id, '_service4', $service4 );
         }
         if ( array_key_exists( 'service5', $_POST ) ) {
             update_post_meta( $post_id, '_service5', $service5 );
         }
         if ( array_key_exists( 'service6', $_POST ) ) {
             update_post_meta( $post_id, '_service6', $service6 );
         }
     }
 }