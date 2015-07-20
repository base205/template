<?php

/**
 * @package Zend_View_Helper_Param
*/
class Zend_View_Helper_Param extends Zend_View_Helper_Abstract {

    public $view;
    protected $site;

    /**
     * Load the site params in a protected object
     * @uses Zend_View_Interface
     */
    public function setView(\Zend_View_Interface $view){
        $this->site = $view->site;
        $this->view = $view;
    }

    /**
     * Returns params by their name, $site object has priority over view
     * @return mixed
     */
    public function param($key){
        return isset($this->site[$key]) ? $this->site[$key] : (isset($this->view->$key) ? $this->view->$key : false);
    }

}