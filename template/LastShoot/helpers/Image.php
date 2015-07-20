<?php

/**
 * @package Zend_View_Helper_Image
*/
class Zend_View_Helper_Image extends Zend_View_Helper_Abstract {

    public $view;
    protected $site;

    /**
     * Load the site params in a protected object
     * @uses Zend_View_Interface
     */
    public function setView(\Zend_View_Interface $view){
        $this->site = \Zend_Registry::get('site');
        $this->view = $view;
    }

    /**
     * Generates an URL for an specified path prepending the baseURL
     * @param $path string
     * @return string
     */
    public function image($path = ''){
        return $this->site['assetsPath'] . '/img/'. $path;
    }

}