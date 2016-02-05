<?php



class CustomOptionsPanels{



	private $countryCodes;



	function __construct($countryCodesClass)

	{

		$this->countryCodesClass = $countryCodesClass;

	}



    function addMenuEntry()

    {

        $parent_slug = 'edit.php?post_type=find_your_nearest';

        $page_title = 'FYN Settings';

        $menu_title = 'Settings';

        $capability = 'manage_options';

        $menu_slug = '_settings';

        $function = array($this, 'setupOptionsPage');

        add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function );

    }



    function addOptionsFields()

    {

        $option_group = 'aphs_FYN_options';

        $option_name = 'aphs_FYN_options';

        $sanitize_callback = array($this, 'validateOptions');

        register_setting( $option_group, $option_name, $sanitize_callback );



        $id = 'aphs_FYN_Google_Maps_API_Key';

        $title = __('Google Maps API Key', 'jdm-find-your-nearest');

        $callback = array($this, 'googleMapsApiKeyText');

        $page = '_settings';

        add_settings_section( $id, $title, $callback, $page );



        $id = 'aphs_FYN_Google_Maps_API_Key';

        $title = __('Google API Console Key', 'jdm-find-your-nearest');

        $callback = array($this, 'googleMapsApiKeyFormField');

        $page = '_settings';

        $section = 'aphs_FYN_Google_Maps_API_Key';

        $args = '';

        add_settings_field( $id, $title, $callback, $page, $section, $args );



        $id = 'aphs_FYN_Distance_Units';

        $title = __('Distance Units', 'jdm-find-your-nearest');

        $callback = array($this, 'distanceUnitsText');

        $page = '_settings';

        add_settings_section( $id, $title, $callback, $page );



        $id = 'aphs_FYN_Distance_Units';

        $title = __('Distance Units', 'jdm-find-your-nearest');

        $callback = array($this, 'distanceUnitsFormField');

        $page = '_settings';

        $section = 'aphs_FYN_Distance_Units';

        $args = '';

        add_settings_field( $id, $title, $callback, $page, $section, $args );



        $id = 'aphs_FYN_Display_Results';

        $title = __('Display Results', 'jdm-find-your-nearest');

        $callback = array($this, 'displayResultsText');

        $page = '_settings';

        add_settings_section( $id, $title, $callback, $page );



        $id = 'aphs_FYN_Display_Results';

        $title = __('Display Results', 'jdm-find-your-nearest');

        $callback = array($this, 'displayResultsFormField');

        $page = '_settings';

        $section = 'aphs_FYN_Display_Results';

        $args = '';

        add_settings_field( $id, $title, $callback, $page, $section, $args );



        $id = 'aphs_FYN_Item_Name';

        $title = __('Item Name', 'jdm-find-your-nearest');

        $callback = array($this, 'itemNameText');

        $page = '_settings';

        add_settings_section( $id, $title, $callback, $page );



        $id = 'aphs_FYN_Item_Name';

        $title = __('Item Name', 'jdm-find-your-nearest');

        $callback = array($this, 'itemNameFormField');

        $page = '_settings';

        $section = 'aphs_FYN_Item_Name';

        $args = '';

        add_settings_field( $id, $title, $callback, $page, $section, $args );



        $id = 'aphs_FYN_searchresults_page';

        $title = __('Search Results Page', 'jdm-find-your-nearest');

        $callback = array($this, 'searchresultsPageText');

        $page = '_settings';

        add_settings_section( $id, $title, $callback, $page );



        $id = 'aphs_FYN_searchresults_page';

        $title = __('Search Results Page', 'jdm-find-your-nearest');

        $callback = array($this, 'searchresultsPageFormField');

        $page = '_settings';

        $section = 'aphs_FYN_searchresults_page';

        $args = '';

        add_settings_field( $id, $title, $callback, $page, $section, $args );



        $id = 'aphs_FYN_country';

        $title = __('Country', 'jdm-find-your-nearest');

        $callback = array($this, 'countryText');

        $page = '_settings';

        add_settings_section( $id, $title, $callback, $page );



        $id = 'aphs_FYN_country';

        $title = __('Country', 'jdm-find-your-nearest');

        $callback = array($this, 'countryFormField');

        $page = '_settings';

        $section = 'aphs_FYN_country';

        $args = '';

        add_settings_field( $id, $title, $callback, $page, $section, $args );

    }



    function googleMapsApiKeyText()

    {

        $url = 'https://developers.google.com/maps/documentation/javascript/get-api-key';

        $googleMapsAPIKeyText = sprintf( wp_kses( __( 'The Google API Console Key is optional but recommended. Using an API key enables you to monitor your application\'s Maps API usage, and ensures that Google can contact you about your application if necessary. If your application\'s Maps API usage by exceeds the Usage Limits, you must load the Maps API using an API key in order to purchase additional quota. If you do not have a Google API Console Key you can get one <a href="%s">here</a> .', 'jdm-find-your-nearest' ), array(  'a' => array( 'href' => array() ) ) ), esc_url( $url ) );

        echo '<p>' . $googleMapsAPIKeyText . '</p>';

    }



    function googleMapsApiKeyFormField()

    {

        $options = get_option('aphs_FYN_options');

        $Google_Maps_API_Key = $options['Google_Maps_API_Key'];

        echo "<input id = 'Google_Maps_API_Key' name = 'aphs_FYN_options[Google_Maps_API_Key]' type = 'text' value = '{$options['Google_Maps_API_Key']}' />";

    }



    function distanceUnitsText()

    {

        echo '<p>' . __('Choose the units you want to display distance in. If unset, no distance will be shown.', 'jdm-find-your-nearest') . '</p>';

    }



    function distanceUnitsFormField()

    {

        $options = get_option('aphs_FYN_options');

        $Distance_Units = $options['Distance_Units'];



        echo '<select name = \'aphs_FYN_options[Distance_Units]\' >' . PHP_EOL;

        echo '<option value = \'\'>' . esc_attr( __( 'Select Units' ) ) . '</option>' . PHP_EOL;

        echo '<option value = \'miles\'';

        if ($Distance_Units == 'miles' ) {

            echo ' selected = \'selected\' ';

        }

        echo '>' . __('Miles', 'jdm-find-your-nearest') . '</option>' . PHP_EOL;

        echo '<option value = \'kilometres\'';

        if ($Distance_Units == 'kilometres' ) {

            echo' selected = "selected" ';

        }

        echo '>' . __('Kilometres', 'jdm-find-your-nearest') . '</option>' . PHP_EOL;

        echo '</select>' . PHP_EOL;

    }



    function displayResultsText()

    {

        echo '<p>' .  __('Choose how many results you want returned from your search (max)', 'jdm-find-your-nearest') . '</p>';

    }



    function displayResultsFormField()

    {

        $options = get_option('aphs_FYN_options');

        $Display_Results = $options['Display_Results'];

        $displayResults = array(

            0 => __( 'Unlimited', 'jdm-find-your-nearest'),

            1 => __( 'One', 'jdm-find-your-nearest'),

            2 => __( 'Two', 'jdm-find-your-nearest'),

            3 => __( 'Three', 'jdm-find-your-nearest'),

            5 => __( 'Five', 'jdm-find-your-nearest'),

            10 => __( 'Ten', 'jdm-find-your-nearest'),

            15 => __( 'Fifteen', 'jdm-find-your-nearest'),

            25 => __( 'Twentyfive', 'jdm-find-your-nearest'),

        );

        echo '<select name = \'aphs_FYN_options[Display_Results]\' >' . PHP_EOL;

	        foreach ($displayResults as $key=>$value) {

	        echo '<option value = \'' . $key . '\'';

	        if ($Display_Results == $key ) {

	            echo' selected = \'selected\' ';

	        }

	        echo '>' . $value . ' (' . $key . ')</option>' . PHP_EOL;

        }

        echo "</select>";

    }



    function itemNameText()

    {

        echo '<p>' .  __('Whatever you use here will be the names of the entities that people can search for', 'jdm-find-your-nearest') . '</p>';

    }



    function itemNameFormField()

    {

        //get option 'Google_Maps_API_Key' from database

        $options = get_option('aphs_FYN_options');

        $Item_Name = $options['Item_Name'];

        //echo the field

        echo "<input id = 'Item_Name' name = 'aphs_FYN_options[Item_Name]' type = 'text' value = '{$options['Item_Name']}' />";

    }



    function searchresultsPageText()

    {

        echo '<p>' .  __('Select the page you wish to use as your results page... all content on that page will be replaced with the search results', 'jdm-find-your-nearest') . '</p>';

    }



    function searchresultsPageFormField()

    {

        $options = get_option('aphs_FYN_options');

        $searchresults_page_id = $options['searchresults_page_id'];

        //echo the field

        echo "<select name = 'aphs_FYN_options[searchresults_page_id]' >

        <option value = ''>" . esc_attr__('Select Page', 'jdm-find-your-nearest') . "</option> ";

        $pages = get_pages();

        foreach ( $pages as $pagg ) {

            $option = '<option value = "' . $pagg->ID . '"';

            if ($searchresults_page_id == $pagg->ID ) {

                $option .= ' selected = "selected" ';

            }

            $option .= '>';

            $option .= $pagg->post_title;

            $option .= '</option>';

            echo $option;

        }

        echo "</select>";

    }



    function countryText()

    {

        echo '<p>' .  __('Select the country you will be using this plugin in', 'jdm-find-your-nearest') . '</p>';

    }



    function countryFormField()

    {

        //get option 'Google_Maps_API_Key' from database

        $options = get_option('aphs_FYN_options');

        $countrycode_option = $options['countrycode'];

        //echo the field

        echo "<select name = 'aphs_FYN_options[countrycode]' >

        <option value = ''>" . esc_attr__('Select Country', 'jdm-find-your-nearest') . "</option> ";

        foreach ( $this->countryCodesClass->countryCodes as $countrycode =>$country ) {

            $option = '<option value = "' . $countrycode . '"';

            if ($countrycode_option == $countrycode ) {

                $option .= ' selected = "selected" ';

            }

            $option .= '>';

            $option .= $country;

            $option .= '</option>';

            echo $option;

        }

        echo "</select>";

    }



    //validate screensize (numeric only) later to validate that theme is available

    function validateOptions($input)

    {

        $valid = array();

        $valid['Google_Maps_API_Key'] = $input['Google_Maps_API_Key'];

        $valid['searchresults_page_id'] = $input['searchresults_page_id'];

        $valid['countrycode'] = $input['countrycode'];

        $valid['Item_Name'] = $input['Item_Name'];

        $valid['Distance_Units'] = $input['Distance_Units'];

        $valid['Display_Results'] = $input['Display_Results'];

        return $valid;

    }



    function setupOptionsPage()

    {

    ?>

    <div class = "wrap">

    <?php screen_icon(); ?><h2>"Find Your Nearest" Options</h2>

    <form action = "options.php" method = "post">

    <?php settings_fields('aphs_FYN_options'); ?>

    <?php do_settings_sections('_settings'); ?>

    <input name = "Submit" type = "submit" value = "<?php esc_attr_e('Save Changes', 'jdm-find-your-nearest'); ?>" />

    </form>

    </div>

    <?php

    }

}

