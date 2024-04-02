<?php
function makeSlug($section){
    $section=strtolower(trim($section));
    $section=str_replace("<br/>"," ",$section);
    if(strpos($section, "&")){
        //$section="akhtar";
        $section = preg_replace("/&#?[a-z0-9]+;/i","",$section);
        //$section=str_replace("&amp;","",$section);
    }
    $slugtitle=preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $section));
    $slugtitle=str_replace("&", "-", $slugtitle);
    while(strpos($slugtitle, "--"))
        $slugtitle=str_replace("--", "-", $slugtitle);
    return $slugtitle;
}
function abc($section){
    return makeSlug($section);
}
function linkNewsUrl($Id, $title, $section){
    $title=makeSlug($title);
    if($section=="alumni"){
        $urllink="alumni/news-".intval($Id)."-".$title;
        $urllink="alumni/news-".intval($Id)."-".$title;
    }elseif($section=="alumniprofile"){
        $urllink="alumni/alumni-profile-".intval($Id).$title;
        $urllink="alumni/alumni-profile-".intval($Id).$title;
    }elseif($section=="alumnievents"){
        $urllink="alumni/events-".intval($Id).$title;
        $urllink="alumni/events-".intval($Id).$title;
    }elseif($section=="alumninews"){
        $urllink="alumni/news-".intval($Id).$title;
        $urllink="alumni/news-".intval($Id).$title;
    }elseif($section=="gallerydetails"){
        $urllink="gallerydetails-".intval($Id)."-".$title;
        $urllink="gallerydetails-".intval($Id)."-".$title;
    }
    return $urllink;
}