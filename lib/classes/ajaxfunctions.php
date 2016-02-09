<?php
class AjaxFunctions{
    //process ajax data and send response
    function returnSearchResults(){
        //echo var_export($_POST, true);
        $options= get_option('aphs_FYN_options');
        $Distance_Units=$options['Distance_Units'];
        $Display_Results=$options['Display_Results'];
        $lat1=$_POST['lat'];
        $lng1=$_POST['lng'];
        $args=array(
                    'post_type' => 'find_your_nearest',
                    'posts_per_page' => '-1'
                );
        // The Query
        $the_query = new WP_Query( $args );

        // build array from The Loop
        $results=array();
        while ( $the_query->have_posts() ) : $the_query->the_post();
            $lng2=get_post_meta (get_the_ID(), '_aphs_FYN_longitude', TRUE );
            $lat2=get_post_meta (get_the_ID(), '_aphs_FYN_latitude', TRUE );
            //calculate distance from
            if (is_numeric($lng2) && is_numeric($lat2)) {
                $theta = $lng1 - $lng2;
                $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                $dist = acos($dist);
                $dist = rad2deg($dist);
                if ($dist >= 1) {
                    $dist = 1;
                }
                if ($dist <= -1) {
                    $dist = -1;
                }
                $miles = $dist * 60 * 1.1515;
                $content = get_the_content('');
                $content = nl2br($content);
                $content = str_replace('><br />', '>', $content);
                $title=get_the_title();
				$link = get_permalink();
                switch ($Distance_Units) {
                    //case "miles":$results["$miles"][$title]="<div class='col-md-4 col-sm-6'><div class='card locations-card'><div class='card-body'><h3 class='card-title'><a href='$link'>$title</a></h3><span class='card-text'><em>Distance ".round($miles)." miles</em> <span class='FYN_viewmap' style='cursor: pointer' id='".get_the_ID()."'>view map</span><p>".$content."</p></span></div><div class='card-footer'><a class='btn btn-link' href='$link'>Details</a><a class='btn btn-link-success' href='tel:".the_fyn_phone()."'>Call: ".the_fyn_phone()."</a></div></div></div>";
					case "miles":$results["$miles"][$title]="<div class='col-md-4 col-sm-6'><div class='card locations-card'><div class='card-body'><h3 class='card-title'><a href='$link'>$title</a></h3><span class='card-text'><p><em>Distance ".round($miles)." miles</em><br />".$content."</p></span></div><div class='card-footer'><a class='btn btn-link' href='$link'>Details</a><!--<a class='btn btn-link-default' href='tel:".the_fyn_phone()."'>".the_fyn_phone()."</a>--><div class='card-footer service-icons'>".getall_service_icons()."</div></div></div></div>";
                    break;
                    case "kilometres":$results["$miles"][$title]="<div class='col-md-4 col-sm-6'><div class='card locations-card'><div class='card-body'><h3 class='card-title'>$title</h3><span class='card-text'><em>Distance ".round($miles * 1.609344)."km</em> <span class='FYN_viewmap' style='cursor: pointer' id='".get_the_ID()."'>view map</span><p>".$content."</p></span></div><div class='card-footer'><a class='btn btn-link' href='$link'>Details</a></div></div></div>";
                    break;
                    default:$results["$miles"][$title]="<div class='col-md-4 col-sm-6'><div class='card locations-card'><div class='card-body'><h3 class='card-title'><a href='$link'>$title</a></h3><span class='card-text'><em>Distance ".round($miles)." miles</em> <span class='FYN_viewmap' style='cursor: pointer' id='".get_the_ID()."'>view map</span><p>".$content."</p></span></div><div class='card-footer'><a class='btn btn-link' href='$link'>Details</a></div></div></div>";
                    break;
                }
            }
        endwhile;
        // Reset Post Data
        wp_reset_postdata();
        ksort($results);
        if (count($results)>0) {
            if ($Display_Results!=0 AND $Display_Results<count($results)) {
                $results = array_slice($results, 0, $Display_Results);
            }
            foreach ($results as $distance=>$content) {
                ksort($content);
                foreach ($content as $item) {
                    echo $item;
                }
            }
        } else {
            return "No results found.";
        }
        die();
    }

    //process ajax data and send response
    function returnPostData(){
        $aphs_FYN_postcode = get_post_meta ($_GET['postID'], '_aphs_FYN_postcode', TRUE );
        $aphs_FYN_latitude = get_post_meta ($_GET['postID'], '_aphs_FYN_latitude', TRUE );
        $aphs_FYN_longitude = get_post_meta ($_GET['postID'], '_aphs_FYN_longitude', TRUE );
        $title = get_the_title($_GET['postID']);
        $arr = array(
            'postcode'=>$aphs_FYN_postcode,
            'latitude'=>$aphs_FYN_latitude,
            'longitude'=>$aphs_FYN_longitude,
            'title'=>$title
        );
        echo json_encode($arr);
        die();
    }
}