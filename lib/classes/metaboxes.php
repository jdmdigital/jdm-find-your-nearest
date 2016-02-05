<?php

class MetaBoxes{
    public function addFYNPremiumPromoMetaBox()
    {
        //add_meta_box('aphs_FYN_premium_promo_meta_box', __('WP Find Your Nearest Premium', 'jdm-find-your-nearest'), array($this, 'displayFYNPremiumPromoMetaBox'), 'find_your_nearest', 'side');
    }

    public function addFYNMetaBox()
    {
        add_meta_box('aphs_FYN_meta_box', __('Postal Code Data', 'jdm-find-your-nearest'), array($this, 'displayFYNMetaBox'), 'find_your_nearest', 'side', 'high');
    }

    public function displayFYNPremiumPromoMetaBox($post)
    {
        //echo '<p>' .  __('The Find Your Nearest Premium plugin is not currently available, but a new enhanced version is under development', 'jdm-find-your-nearest') . '</p>';
    }

    public function displayFYNMetaBox($post)
    {
        $aphs_FYN_postcode = get_post_meta ($post->ID, '_aphs_FYN_postcode', TRUE );
        $aphs_FYN_latitude = get_post_meta ($post->ID, '_aphs_FYN_latitude', TRUE );
        $aphs_FYN_longitude = get_post_meta ($post->ID, '_aphs_FYN_longitude', TRUE );
    ?>
    <table>
        <tr>
            <td><?php _e('Postal Code', 'jdm-find-your-nearest'); ?>: </td><td><input name="aphs_FYN_postcode" type="text" class="formfield" id="fyn_postalcode" value="<?php echo $aphs_FYN_postcode;?>" size="16" /></td>
        </tr>
        <tr>
            <td colspan='2'><button id="update_latlong"><?php _e('Update Latitude and Longitude', 'jdm-find-your-nearest'); ?></button><br /></td>
        </tr>
        <tr>
            <td><?php _e('Latitude', 'jdm-find-your-nearest'); ?>:</td><td><input name="aphs_FYN_latitude" type="text" class="formfield" id="aphs_FYN_latitude" value="<?php echo $aphs_FYN_latitude;?>" size="16" /></td>
        </tr>
        <tr>
            <td><?php _e('Longitude', 'jdm-find-your-nearest'); ?>:</td><td><input name="aphs_FYN_longitude" type="text" class="formfield" id="aphs_FYN_longitude" value="<?php echo $aphs_FYN_longitude;?>" size="16" /</td>
        </tr>
    </table>
    <?php
    }

    public function processMetaData($post_id)
    {
        if(isset($_POST['aphs_FYN_postcode']) AND isset($_POST['aphs_FYN_latitude']) AND isset($_POST['aphs_FYN_longitude'])){
            update_post_meta( $post_id, '_aphs_FYN_postcode', $_POST['aphs_FYN_postcode']);
            update_post_meta( $post_id, '_aphs_FYN_latitude', $_POST['aphs_FYN_latitude']);
            update_post_meta( $post_id, '_aphs_FYN_longitude', $_POST['aphs_FYN_longitude']);
        }
    }

    public function addFYNDashboardWidget() {
        //create a custom dashboard widget
        //wp_add_dashboard_widget( 'dashboard_custom_feed', 'WP Find Your Nearest Premium', array($this, 'displayFYNDashboardWidget'));
    }

    public function displayFYNDashboardWidget()
    {
        //echo '<p>' .  __('The Find Your Nearest Premium plugin is not currently available, but a new enhanced version is under development', 'jdm-find-your-nearest') . '</p>';
    }
}
