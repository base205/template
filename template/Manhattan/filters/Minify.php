<?php

/**
 * @package Portal_View_Filter_Minify
 */
class Portal_View_Filter_Minify implements Zend_Filter_Interface {
	
    public function filter($string){
		return preg_replace('/\s+/', ' ', $string);
    }

}