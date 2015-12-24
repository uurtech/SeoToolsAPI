<?php

/*

biçim etiketleri
site içi bağlantı sayısı
site dışına bağlantı sayısı

*/

class HTML{

  public $metaTags = array();
  public $source = "";
  function __construct($url){
      MetaTags($url);
  }
  functionFunctionChecker(){
    //<!DOCTYPE html> html5
    //<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    return searchForAny($this->source,"<!DOCTYPE html>");
  }

  functionCharsetChecker(){
    return searchForAny($this->source,"charset");
  }

  functionTitleChecker(){
    //70 chars max
    preg_match("/\<title\>(.*)\<\/title\>/i",$this->source,$title); // ignore case
    return strlen($title[1]);
  }

  functionDescriptionChecker(){
    //160 chars max
    if(strlen($metaTags['description']) < 160){
      return true;
    }
    return false;
  }

  functionKeywordChecker(){
    if(strlen($metaTags['keywords']) < 2){
      return true;
    }
    return false;
  }

  function countHeadings(){
    $count = 0;
    $headingTags = array(
      "<h1>","<h2>","<h3>","<h4>","<h5>","<h6>"
    );
    foreach($headingTags as $tag){
      if(is_numeric(countForTags($tag))){
        $count += countForTags($tag);
      }
    }
    return $count;
  }

  function countImageTags(){
    $count = explode("<img",$this->source);
    return $count;
  }

  //search for spesific tags
  function countForTags($this->source, $tag){
    $doc = new DOMDocument();
    $xml = $str->asXML();  // $str is your html string
    $doc->loadXML($xml);
    $bar_count = $doc->getElementsByTagName($tag)->length;
    return $bar_count;
  }

  //search for any word function
  function searchForAny($search)(
  if(strpos($this->source,$search) !== FALSE){
    return true;
  }
  return false;
  )

  //get meta tags
  function MetaTags($url){
    $this->metaTags=get_meta_tags($url);
  }

}

 ?>
