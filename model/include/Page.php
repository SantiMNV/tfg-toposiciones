<?php
class Page {
  //Variables o atributos
  var $topTitle;
  var $pageTitle;
  var $slug;


  function __construct($topTitle, $pageTitle, $slug) {
    $this->topTitle = $topTitle;
    $this->pageTitle = $pageTitle;
    $this->slug = $slug;
  }


  function setTopTitle($topTitle) {
    $this->topTitle = $topTitle;
  }

  function getTopTitle() {
    return $this->topTitle;
  }

  function setPageTitle($pageTitle) {
    $this->pageTitle = $pageTitle;
  }

  function getPageTitle() {
    return $this->pageTitle;
  }

  function setSlug($slug) {
    $this->slug = $slug;
  }

  function getSlug() {
    return $this->slug;
  }

  function __toString() {
    $result = "TopTitle: " . $this->topTitle . "PageTitle: " . $this->pageTitle . "Slug: " . $this->slug;
    return $result;
  }
}
