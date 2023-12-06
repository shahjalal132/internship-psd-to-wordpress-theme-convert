<?php

class Custom_Metabox {

    public function __construct() {
        // Setup Hooks
        $this->setup_hooks();
    }

    public function setup_hooks() {
        // Instance Hooks
        add_action( 'add_meta_boxes', [$this, 'metabox_callback_func'] );
        add_action( 'save_post', [$this, 'save_post_metabox_data'] );
    }

    /**
     * Add custom meta box function
     *
     * @return void
     */
    public function metabox_callback_func() {
        // Add Metabox Function
        add_meta_box( 'additional-metabox', __( 'Slider Settings', 'wordpress-theme-task' ), [$this, 'output_callback_function'], 'slider-post-type', 'normal', 'default' );
    }

    /**
     * custom meta box HTML (for form)
     *
     * @param object $post
     * @return void
     */
    public function output_callback_function( $post ) {
        $title    = get_post_meta( $post->ID, '_slider_title', true );
        $subtitle = get_post_meta( $post->ID, '_slider_sub_title', true );
        $btn1text = get_post_meta( $post->ID, '_btn1_text', true );
        $btn2text = get_post_meta( $post->ID, '_btn_2_text', true );
        ?>
            <p>
                <label for="slider_title"><?php esc_html_e( 'Title', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $title ); ?>" name="slider_title" id="slider_title" placeholder="Slider Title">
            </p>
            <p>
                <label for="slider_sub_title"><?php esc_html_e( 'Sub Title', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $subtitle ); ?>" name="slider_sub_title" id="slider_sub_title" placeholder="Slider Sub Title">
            </p>
            <p>
                <label for="btn_1_text"><?php esc_html_e( 'Button 1 Text', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $btn1text ); ?>" name="btn_1_text" id="btn_1_text" placeholder="Slider Button 1 Text">
            </p>
            <p>
                <label for="btn_2_text"><?php esc_html_e( 'Button 2 Text', 'wordpress-theme-task' );?></label>
                <input type="text" class="widefat" value="<?php echo esc_attr( $btn2text ); ?>" name="btn_2_text" id="btn_2_text" placeholder="Slider Button 2 Text">
            </p>
        <?php

    }

    /**
     * Update metabox form data
     *
     * @param integer $post_id
     * @return void
     */
    public function save_post_metabox_data( $post_id ) {
        // get post meta value
        $sliderTitle    = isset( $_POST['slider_title'] ) ? $_POST['slider_title'] : '';
        $sliderSubTitle = isset( $_POST['slider_sub_title'] ) ? $_POST['slider_sub_title'] : '';
        $btn1Text       = isset( $_POST['btn_1_text'] ) ? $_POST['btn_1_text'] : '';
        $btn2Text       = isset( $_POST['btn_2_text'] ) ? $_POST['btn_2_text'] : '';

        // update post meta value
        if ( array_key_exists( 'slider_title', $_POST ) ) {
            update_post_meta( $post_id, '_slider_title', $sliderTitle );
        }
        if ( array_key_exists( 'slider_sub_title', $_POST ) ) {
            update_post_meta( $post_id, '_slider_sub_title', $sliderSubTitle );
        }
        if ( array_key_exists( 'btn_1_text', $_POST ) ) {
            update_post_meta( $post_id, '_btn1_text', $btn1Text );
        }
        if ( array_key_exists( 'btn_2_text', $_POST ) ) {
            update_post_meta( $post_id, '_btn_2_text', $btn2Text );
        }
    }
}