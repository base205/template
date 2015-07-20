<?php

/**
 * @package Zend_View_Helper_Meta
*/
class Zend_View_Helper_Meta extends Zend_View_Helper_Abstract {

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
     * Ports to headMeta() function
     * @uses headMeta()
     * @return mixed
     */
    public function meta(){
        $this->view->headMeta()->setName('charset', 'utf-8');
        return $this->view->headMeta();
    }

}