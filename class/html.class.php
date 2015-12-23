<?php

/*

html versiyonu
karakter kodlaması
meta başlık uzunluğu
meta description
meta keywords
heading etiketleri

toplam resim sayısı
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
  function htmlFunctionChecker($this->source){
    //<!DOCTYPE html> html5
    //<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    return searchForAny($this->source,"<!DOCTYPE html>");
  }

  function htmlCharsetChecker($this->source){
    return searchForAny($this->source,"charset");
  }

  function htmlTitleChecker($this->source){
    //70 chars max
    preg_match("/\<title\>(.*)\<\/title\>/i",$this->source,$title); // ignore case
    return strlen($title[1]);
  }


  function htmlDescriptionChecker($this->source){
    //160 chars max
    if(strlen($metaTags['description']) < 160){
      return true;
    }
    return false;
  }

  function htmlKeywordChecker($this->source){
    if(strlen($metaTags['keywords']) < 2){
      return true;
    }
    return false;
  }
  //search for any word function
  function searchForAny($this->source,$search)(
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
