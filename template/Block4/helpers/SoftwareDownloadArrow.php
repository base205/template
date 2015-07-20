<?php
class Zend_View_Helper_SoftwareDownloadArrow extends Zend_View_Helper_Abstract
{
    public function softwareDownloadArrow($text)
    {
        $output = '';
        if (strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "chrome")) {
            $output = '<div id="fixedArrow" class="fixedArrowChrome stepsTitle">'.$text.'</div>';
        } elseif (strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "msie") 
                || strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0')) {
            $output = '<div id="fixedArrow" class="fixedArrowIE stepsTitle">'.$text.'</div>';
        } elseif (strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "firefox")) {
            $output = '<div id="fixedArrow" class="fixedArrowFirefox stepsTitle">'.$text.'</div>';
        }
        return $output;
    }
}