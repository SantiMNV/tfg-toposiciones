<?php

class Page {
  //Variables o atributos
  var $topTitle;
  var $pageTitle;
  var $slug;
  var $breadCrumb;


  function __construct($topTitle, $pageTitle, $slug, $breadCrumb) {
    $this->topTitle = $topTitle;
    $this->pageTitle = $pageTitle;
    $this->slug = $slug;
    $this->breadCrumb = $breadCrumb;
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

  function setBreadCrumb($breadCrumb) {
    $this->breadCrumb = $breadCrumb;
  }

  function getBreadCrumb() {
    return $this->breadCrumb;
  }

  function __toString() {
    $result = "TopTitle: " . $this->topTitle . "PageTitle: " . $this->pageTitle . "Slug: " . $this->slug . "BreadCrumb: " . $this->breadCrumb;
    return $result;
  }
}
