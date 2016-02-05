<?php
class SearchPage{

    private $pluginUrl;

    public function __construct($pluginUrl)
    {
        $this->pluginUrl = $pluginUrl;
    }

    public function replaceWithSearchResults($content){
        $options= get_option('aphs_FYN_options');
        $searchresults_page_id=$options['searchresults_page_id'];
        if(is_page($searchresults_page_id)){
            if(isset($_POST['fyn_postalcode'])){
                return '
                <div id="FYN-viewmap-dialog" title="Map">
                <div id="FYN_map" style="width:100%; height:100%;"></div>
                </div>
                <div id="search_results" class="row">
                <img src="' . $this->pluginUrl . '/images/loading.gif'.'"/>
                <input type="hidden" id="fyn_postalcode" name="fyn_postalcode" value="'.$_POST['fyn_postalcode'].'" />
                </div>';
            }
            else{
                return $content;
            }
        }
        else{
            return $content;
        }
    }
}