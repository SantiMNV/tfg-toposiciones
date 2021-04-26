<?php

class Page {
  //Variables o atributos
  var $currentPage;
  var $topTitle;
  var $pageTitle;
  var $slug;
  var $breadCrumb;

  function __construct($currentPage, $topTitle, $pageTitle, $slug, $breadCrumb) {
    $this->currentPage = $currentPage;
    $this->topTitle = $topTitle;
    $this->pageTitle = $pageTitle;
    $this->slug = $slug;
    $this->breadCrumb = $breadCrumb;
  }

  function setCurrentPage($currentPage) {
    $this->currentPage = $currentPage;
  }

  function setTopTitle($topTitle) {
    $this->topTitle = $topTitle;
  }

  function getCurrentPage() {
    return $this->currentPage;
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
