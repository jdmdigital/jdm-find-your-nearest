<?php
class ManageScripts{

    private $pluginUrl;

    private $countryCodes;

    public function __construct($pluginUrl, $countryCodesClass)
    {
        $this->pluginUrl = $pluginUrl;
        $this->countryCodesClass = $countryCodesClass;
    }

    public function enqueuePostCodeFinder($hook) {
        if ('post-new.php' != $hook && 'post.php' != $hook ) {
            return;
        }
        if ((isset($_GET['post_type']) && $_GET['post_type'] == 'find_your_nearest') || (isset($_GET['post']) && get_post_type($_GET['post']) == 'find_your_nearest')) {
            $options= get_option('aphs_FYN_options');
            $Google_Maps_API_Key=$options['Google_Maps_API_Key'];
            $key="";
            if($Google_Maps_API_Key){
                $key="&key=$Google_Maps_API_Key";
            }
            wp_register_script('googlemapapi', "http://maps.google.com/maps/api/js?sensor=false$key", FALSE);
            wp_register_script('googleapi', "http://www.google.com/uds/api?file=uds.js&v=1.0", FALSE);
            wp_register_script('postcodefinder', $this->pluginUrl . 'js/postcodefinder.js', array('jquery'), "", FALSE);
            wp_enqueue_script('googleapi');
            wp_enqueue_script('googlemapapi');
            wp_enqueue_script('postcodefinder');
            $countrycode_option = '';
            if (isset($this->countryCodesClass->countryCodes[$options['countrycode']])) {
                $countrycode_option = $this->countryCodesClass->countryCodes[$options['countrycode']];
            }
            wp_localize_script('postcodefinder', 'countrycode', $countrycode_option);
        }
    }

    public function enqueuePostCodeSearcher($hook) {
        //enqueue the following script postcodefinder_search.js when we are on the page option selected for search results
        $options= get_option('aphs_FYN_options');
        $searchresults_page_id=$options['searchresults_page_id'];
        if (is_page($searchresults_page_id) ){
            $Google_Maps_API_Key=$options['Google_Maps_API_Key'];
            $key="";
            if($Google_Maps_API_Key){
                $key="&key=$Google_Maps_API_Key";
            }
            wp_register_script( 'googlemapapi', "http://maps.google.com/maps/api/js?sensor=false$key", FALSE );
            wp_enqueue_script( 'googlemapapi' );
            wp_register_script( 'googleapi', "http://www.google.com/uds/api?file=uds.js&v=1.0", FALSE );
            wp_enqueue_script( 'googleapi' );
            wp_enqueue_script( 'jquery-ui-core' );
            wp_enqueue_script( 'jquery-ui-dialog' );
            wp_register_script( 'jquery_gmap', $this->pluginUrl . "js/jquery.gmap.min.js", array('jquery'), "", FALSE );
            wp_enqueue_script( 'jquery_gmap' );
            wp_register_script( 'postcodefinder_search', $this->pluginUrl . "js/postcodefinder_search.js", array('jquery'), "", FALSE );
            wp_enqueue_script( 'postcodefinder_search' );
            $protocol = isset ( $_SERVER["HTTPS"])? 'https://':'http://';
            $countrycode_option = '';
            if (isset($this->countryCodesClass->countryCodes[$options['countrycode']])) {
                $countrycode_option = $this->countryCodesClass->countryCodes[$options['countrycode']];
            }
            $params=array(
                'ajaxurl'=>admin_url( 'admin-ajax.php', $protocol),
                'countrycode'=>$countrycode_option
            );
            wp_localize_script ('postcodefinder_search','FYN_search',$params);
            wp_enqueue_style( 'wp-jquery-ui-dialog' );
        }
    }
}