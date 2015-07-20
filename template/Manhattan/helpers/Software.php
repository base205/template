<?php

/**
 * @package Zend_View_HelperSoftware
*/
class Zend_View_Helper_Software extends Zend_View_Helper_Abstract {

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

    public function software($function, $software){
        if(in_array($function, array('capture', 'icon', 'permalink')))
            return $this->$function($software);

        return isset($software->$function) ? $software->$function : false;
    }

    private function icon($software){
        return $this->view->image('icon/' . $software->codSoftware . '.png');
    }

    private function permalink($software){
        return 'http://' . $software->uri . '.' . $this->view->baseUrl();
    }

    private function capture($software){
        return $this->view->image('capture/' . $software->codSoftware . '.jpg');        
    }

}