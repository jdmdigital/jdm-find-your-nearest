<?php
foreach (glob(dirname(__FILE__) . '/lib/classes/*.php') as $classfilename) {
    include_once $classfilename;
}

$WPFindYourNearest = new WPFindYourNearest();

class WPFindYourNearest {

    private static $cache = array();

    private static $pluginBasename;

    private static $pluginUrl;

    public function __construct()
    {
        self::$pluginBasename = dirname( plugin_basename( __FILE__ ) );
        self::$pluginUrl = plugin_dir_url(__FILE__);
    }

    public static function registerEntities()
    {
        if (!isset(self::$cache['registerEntities'])) {
            self::$cache['registerEntities'] = new RegisterEntities(self::$pluginBasename , self::metaBoxes());
        }
        return self::$cache['registerEntities'];
    }

    public static function customOptionsPanels()
    {
        if (!isset(self::$cache['customOptionsPanels'])) {
            self::$cache['customOptionsPanels'] = new CustomOptionsPanels(self::countryCodes());
        }
        return self::$cache['customOptionsPanels'];
    }

    public static function countryCodes()
    {
        if (!isset(self::$cache['countryCodes'])) {
            self::$cache['countryCodes'] = new CountryCodes();
        }
        return self::$cache['countryCodes'];
    }

    public static function metaBoxes()
    {
        if (!isset(self::$cache['metaBoxes'])) {
            self::$cache['metaBoxes'] = new MetaBoxes();
        }
        return self::$cache['metaBoxes'];
    }

    public static function manageScripts()
    {
        if (!isset(self::$cache['manageScripts'])) {
            self::$cache['manageScripts'] = new ManageScripts(self::$pluginUrl, self::countryCodes());
        }
        return self::$cache['manageScripts'];
    }

    public static function searchPage()
    {
        if (!isset(self::$cache['searchPage'])) {
            self::$cache['searchPage'] = new SearchPage(self::$pluginUrl);
        }
        return self::$cache['searchPage'];
    }

    public static function ajaxFunctions()
    {
        if (!isset(self::$cache['ajaxFunctions'])) {
            self::$cache['ajaxFunctions'] = new AjaxFunctions();
        }
        return self::$cache['ajaxFunctions'];
    }
}