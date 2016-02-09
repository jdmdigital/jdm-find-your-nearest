<?php

/*
* Plugin Name: JDM Find Your Nearest
* Plugin URI: http://labs.jdmdigital.co/code/jdm-find-your-nearest/
* Description: "Find Your Nearest" creates a custom post type which can be associated with a latitude and longitude calculated from your local postal code, which can then be sorted by distance from a postal code entered into a search field.
* Version: 1.0.1
* Text Domain: jdm-find-your-nearest
* Domain Path: /languages
* Author: JDM Digital
* Author URI: http://jdmdigital.co
* License: GPLv2 or later
* GitHub Plugin URI: https://github.com/jdmdigital/jdm-find-your-nearest
* GitHub Branch: master
*/



$options= get_option('aphs_FYN_options');

$options['version'] = '1.0.1';

update_option('aphs_FYN_options', $options);



require_once 'gateway.php';



add_action('plugins_loaded', array(WPFindYourNearest::registerEntities(), 'registerTranslations'));

add_action('init', array(WPFindYourNearest::registerEntities(), 'registerPostTypes'));

add_action('init', array(WPFindYourNearest::registerEntities(), 'registerRegionalCategories'));

add_filter('post_type_link', array(WPFindYourNearest::registerEntities(), 'regionalCategoryLinkFilter'), 1, 3);

add_action('init', array(WPFindYourNearest::registerEntities(), 'registerServiceCategories'));

add_filter('post_type_link', array(WPFindYourNearest::registerEntities(), 'serviceCategoryLinkFilter'), 1, 3);



add_action('admin_menu', array(WPFindYourNearest::customOptionsPanels(), 'addMenuEntry'));

add_action('admin_init', array(WPFindYourNearest::customOptionsPanels(), 'addOptionsFields'));



add_action( 'add_meta_boxes', array(WPFindYourNearest::metaBoxes(), 'addFYNMetaBox'));

add_action( 'add_meta_boxes', array(WPFindYourNearest::metaBoxes(), 'addFYNPremiumPromoMetaBox'));

add_action( 'save_post', array(WPFindYourNearest::metaBoxes(), 'processMetaData'));



add_action( 'wp_dashboard_setup', array(WPFindYourNearest::metaBoxes(), 'addFYNDashboardWidget'));



add_action( 'admin_enqueue_scripts', array(WPFindYourNearest::manageScripts(), 'enqueuePostCodeFinder'));

add_action( 'wp_enqueue_scripts', array(WPFindYourNearest::manageScripts(), 'enqueuePostCodeSearcher'));



add_filter ( 'the_content', array(WPFindYourNearest::searchPage(), 'replaceWithSearchResults'));



foreach (glob(dirname(__FILE__) . '/lib/widgets/*.php') as $widgetfilename) {

    include_once $widgetfilename;

}

if(!function_exists('getall_service_icons')) {
	function getall_service_icons() {
		$postID = get_the_ID();
		$term_list = wp_get_post_terms( $postID, 'service_category', array("fields" => "all") );
		$html = '<ul class="list-inline list-services">'."\n";
		foreach($term_list as $term_single) {
			if(($term_single->term_id) != 118) {
				// Services "should" have a term ID greater than 30.
				$html .= '	<li id="'.$term_single->term_id.'" class="service-list-icon"><a href="../../'.$term_single->slug.'" class="btn btn-link" data-toggle="tooltip" title="'.$term_single->name.'"><i class="icon-'.$term_single->slug.'"></i></a></li>'."\n";
			}
		}
		$html .= '</ul>'. "\n";
		return $html;
	}
}

//to be refactored before release!!
add_action('wp_ajax_return_search_results', array(WPFindYourNearest::ajaxFunctions(), 'returnSearchResults'));
add_action('wp_ajax_nopriv_return_search_results', array(WPFindYourNearest::ajaxFunctions(), 'returnSearchResults'));


add_action('wp_ajax_return_post_data', array(WPFindYourNearest::ajaxFunctions(), 'returnPostData'));
add_action('wp_ajax_nopriv_return_post_data', array(WPFindYourNearest::ajaxFunctions(), 'returnPostData'));

