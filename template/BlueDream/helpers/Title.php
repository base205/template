<?php

/**
 * @package Zend_View_Helper_Title
*/
class Zend_View_Helper_Title extends Zend_View_Helper_Abstract {

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
     * Ports to headTitle() function
     * @uses headTitle()
     * @return mixed
     */
    public function title(){
        return $this->view->headTitle();
    }

}