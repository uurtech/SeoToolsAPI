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

class Analysis{

  function htmlFunctionChecker($source){
    //<!DOCTYPE html> html5
    //<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    return searchForAny($source,"<!DOCTYPE html>");
  }

  function htmlCharsetChecker($source){
    return searchForAny($source,"charset");
  }

  //search for any word function
  function searchForAny($source,$search)(
  if(strpos($source,$search) !== FALSE){
    return true;
  }
  return false;
  )
}

?>
