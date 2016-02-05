<?php

class SearchFormWidget extends WP_Widget {

    function __construct(){
        $widget_ops = array(
            'classname' => 'WP_Find_Your_Nearest_Form',
            'description'=> __('Find Your Nearest Search Form', 'jdm-find-your-nearest')
            );
        parent::__construct( 'WP_Find_Your_Nearest_Form', __('FYN - Search Form', 'jdm-find-your-nearest'), $widget_ops);
    }

     //build the widget settings form
    function form($instance) {
        $defaults = array( 'title' => __('Find Your Nearest', 'jdm-find-your-nearest'), 'description' => __("Enter your postcode to 'find your nearest'", 'jdm-find-your-nearest')  );
        $instance = wp_parse_args( (array) $instance, $defaults );
        $title = $instance['title'];
        $description = $instance['description'];

        ?>
            <p><?php _e('Title', 'jdm-find-your-nearest'); ?>: <input class="widefat" name="<?php echo $this->get_field_name( 'title' ); ?>"  type="text" value="<?php echo esc_attr( $title ); ?>" /></p>
            <p><?php _e('Descriptive Text', 'jdm-find-your-nearest'); ?>:<br />
            <textarea class="widefat" name="<?php echo $this->get_field_name( 'description' ); ?>" ><?php echo esc_attr( $description ); ?></textarea></p>
       <?php
    }

    //save the widget settings
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['description'] = strip_tags( $new_instance['description'] );
        return $instance;
    }

    //display the widget
    function widget($args, $instance) {
        extract($args);
        echo $before_widget;
        $title = apply_filters( 'widget_title', $instance['title'] );
        $description = $instance['description'] ;
        if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
        if ( !empty( $description ) ) { echo "<p>$description</p>"; };
        $options= get_option('aphs_FYN_options');
        $searchresults_page=get_page_link( $options['searchresults_page_id'] );
        echo "<form id=\"form1\" name=\"form1\" method=\"post\" action=\"$searchresults_page\">
        <label>
        <input name=\"fyn_postalcode\" type=\"text\" class=\"formfield\" id=\"fyn_postalcode_field\" value=\"" . __('Enter Postal Code', 'jdm-find-your-nearest') . "\"  onfocus=\"this.value=''\" />
        </label>
        <input name=\"send\" type=\"submit\" class=\"button\" id=\"send\" value=\"" . __('Search', 'jdm-find-your-nearest') . "\" />
        </form>";
        echo $after_widget;
    }
}

add_action( 'widgets_init', 'register_widget_WP_Find_Your_Nearest');

function register_widget_WP_Find_Your_Nearest(){
    register_widget('SearchFormWidget');
}
