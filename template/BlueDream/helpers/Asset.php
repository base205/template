<?php

/**
 * @package Zend_View_Helper_Asset
*/
class Zend_View_Helper_Asset extends Zend_View_Helper_Abstract {

    public $view;
    protected $site;

    /**
     * Load the site params in a protected object
     * @uses Zend_View_Interface
     */
    public function setView(\Zend_View_Interface $view){
        $this->site = \Zend_Registry::get('site');
    }

    /**
     * Generate an asset HTML snippet for CSS & JS files.
     * Other files can be contain paths as long as the files are
     * placed in the $site assets folders
     * For external assets refer to Script() and Stylesheet() functions
     * @param $filename string
     * @param $params array Extra params can be set to the HTML snippet, e.g.: "rel"
     * @return string
     */
    public function asset($filename, $params = array()){
        $file = explode('.', $filename);

        switch($file[(count($file) - 1)]){
            case 'css':
                return '<link href="' . $this->site['assetsPath'] . '/css/' . $filename . '" rel="stylesheet" />';
            break;
            case 'js':
                return '<script src="' . $this->site['assetsPath'] . '/js/' . $filename . '"></script>';
            break;
            default:
                foreach($params as $key => $val)
                    if( ! in_array($key, array('href','src')))
                        $params[$key] = $key . '="' . $val . '"';

                return '<link href="' . $this->site['assetsPath'] . '/' . $filename . '"' . (count($params) != 0 ? ' ' . implode(' ', $params) : '') . ' />';
            break;
        }
    }

}