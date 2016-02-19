===  JDM Find Your Nearest ===
Contributors: jdm-labs
Tags: location, distance, find, finder, postcode, zipcode, locator, nearest
Requires at least: 3.0.0
Tested up to: 4.4.2
Stable tag: 2.1

Forked from SocialEvolution's "Find Your Nearest", this custom JDM plugin creates a custom post type associated with a lat/long, which can then be sorted by distance from a postal code entered into a search field.

== Description ==

This plug-in creates a custom post type associated with a lat/long calculated from an entered location's address. You can create as many entries as you want, associate them with latitude and longitude using the Google Map API and allow your visitors to search for their nearest item by entering their own postal code.

This plug-in has been tested with US zipcodes among others, optimized for Bootstrap v3.x, with numerous improvements over the original plugin by SocialEvolution.


== Installation ==

1. Make sure you have the GitHub Updater plugin [installed and setup](http://labs.jdmdigital.co/plugins/github-updates/)
1. Install the plugin using the GitHub plugin installer and this repo: https://github.com/jdmdigital/jdm-find-your-nearest/
1. Activate the plugin
1. Create a page that you will use to display your search results... Note: This page will not contain anything until a search is performed using the search form provided by the "FYN - Search Form" widget. It can contain other text that will be overwritten when landed on as a result of a Find Your Nearest search.
1. Visit the settings page under the Menu item "Find Your Nearest" and set the necessary options. The "Search Results Page" and "Country" settings are required for the plugin to work.
1. You can now create new "Find Your Nearest" items. Enter the postal code in the required field and click the "Update Latitude and Longitude" button to call the Google Maps API and place the latitude and longitude in the appropriate fields before saving the entry.
1. The plugin includes a widget to enable searching. "FYN - Search Form" simply adds a search form to your sidebar.



== Screenshots ==

1. The settings page

2. The add new item page



== Changelog ==

= 2.0.0 =
* Fix issue #4
* Update version number to v2.0.0 (production)
* Create release (also v2).

= 1.2.0 =
* New functions added and more customization to ajaxfuncitons
* Updated version number.


= 1.1.0 =
* Included extra functions from test theme into plugin core.
* Updated version number.
* Created release.


= 1.0.1 =
* Swopped the_excerpt for a more advanced use of get_the_content.


= 1.0.0 =
* Forked by jdm-labs and customized

= 0.3.1 =
* Fix bug that caused conflict with some other plugins


= 0.3.0 =
* Full code refactor
* Full internationalisation
* Remove information regarding premium version of plugin



= 0.2.5 =
* urgent bug fix to identify location correctly



= 0.2.4 =
* Fix bug that resulted in occasional false lat/long values being returned



= 0.2.3 =
* Updated Google API to V3

= 0.2.2 =
* Add information regarding premium version of plugin


= 0.2.1 =
* Fix bug that caused search to break if widget placed in header

* Fix bug that prevented results displaying different places with same postal code

= 0.2.0 =
* Included new option to limit search results

* Added Google map to search results displayed in modal dialog box

* Regional Categories navigation widget removed pending bugfix

= 0.1 =
* Launch



== Upgrade Notice ==

= 2.0.0 =
* Ready for prime-time.





