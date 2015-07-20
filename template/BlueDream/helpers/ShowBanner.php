<?php

class Zend_View_Helper_ShowBanner extends Zend_View_Helper_Abstract {

    public function showBanner($banner = false, $className = '', $position = ''){
    	if($banner){
	        $output = array('<div class="adBanner' . ( ! empty($className) ? ' ' . $className : '') . '" data-banner="'. $position . '">');

	        if( ! empty($banner->script))
	            $output[] = $banner->script;
	        elseif( ! empty($banner->image) && ! empty($banner->act))
	            $output[] = '<a href="' . $banner->action . '"><img src="' . $this->view->image('banner/' . $banner->image) . '" /></a>';

	        $output[] = '</div><!-- END .adBanner' . ( ! empty($className) ? '.' . $className : '') . ' -->';

	        return implode('', $output);
	    }
    }

}