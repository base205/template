<?php

/**
 * @package Zend_View_Helper_Asset
*/
class Zend_View_Helper_Script extends Zend_View_Helper_Abstract {

    public $view;
    protected $site;

    /**
     * Load the site params in a protected object
     * @uses Zend_View_Interface
     */
    public function setView(\Zend_View_Interface $view){
        $this->site = $view->site;
    }

    /**
     * Generate an <script> tag for a file.
     * $file can contain an array, and in case params for each file want to be sent, 
     * it has to be an array of an array, Key #0 contains the filepath and 
     * Key #1 the params array
     *
     * If an array is sent in the $file param, $params is ommitted.
     *
     * Example
     * $files = array(
     *      array('FILEPATH', array('param' => 'value')), // This would add the params to the file name
     *      'FILEPATH' // In this case, no params are added
     *      )
     *
     * @param $file mixed
     * @param $params array()
     * @uses snippet()
     */
    public function script($file, $params = array()){
        $output = array();

        if( ! is_array($file))
            $output[] = $this->snippet($file, $params);
        else
            foreach($file as $object)
                if(is_array($object))
                    $output[] = $this->snippet($object[0], $object[1]);
                else
                    $output[] = $this->snippet($object);

        return implode('', $output);
    }

    /**
     * This just builds the snippet
     * @param $file string
     * @param $params array
     */
    private function snippet($file, $params = array()){
        if(is_array($params) && count($params) != 0)
            foreach($params as $key => $val)
                if( ! in_array($key, array('href', 'src')))
                    $params[$key] = $key . '="' . $val . '"';

        return '<script src="' . $this->site['assetsPath'] . '/' . $file . '"' . (count($params) != 0 ? ' ' . implode(' ', $params) : '') . '></script>';
    }

}