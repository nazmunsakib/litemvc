<?php 
/**
 * App Core Class
 */

 class Core{
    protected $currentController    = 'Page';
    protected $currentMethod        = 'index';
    protected $prams                = [];

    public function __construct(){
      $this->getUrl();
    }

    public function getUrl(){
      echo  $_GET['url'];
    }
 }