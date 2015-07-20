<?php
class Zend_View_Helper_SoftwareDownloadInit extends Zend_View_Helper_Abstract
{
    public function softwareDownloadInit($baseUrl)
    {
        $output = '';
        if (strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "chrome")) { 
            $output = '<div>
                <div class="pasoTitle">'.Zend_Registry::get('tr')->translate('Google Chrome Download').
                ': <span class="pasoTexto">'.
                Zend_Registry::get('tr')->translate(
                    'Click on "software_installer.exe" at the bottom of the page.'
                ).'</span></div>
                <div><img src="'.$baseUrl.'/img/downloadChrome.png" alt="Chrome"/></div>
                </div>';
        } elseif (strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "firefox")) {
            $output = '<div>
                <div class="pasoTitle">'.Zend_Registry::get('tr')->translate('Mozilla Firefox Download').
                ': <span class="pasoTexto">'.
                Zend_Registry::get('tr')->translate('Click "Save" button.').'</span></div>
                <div><img src="'.$baseUrl.'/img/downloadFirefox.png" alt="Firefox"/></div>
                </div>';
        } else {
            $output = '<div>
                <div class="pasoTitle">'.Zend_Registry::get('tr')->translate('Internet Explorer Download').
                ': <span class="pasoTexto">'.Zend_Registry::get('tr')->translate(
                    'Click "Yes" at the bottom of the page.'
                ).'</span></div>
                <div><img src="'.$baseUrl.'/img/downloadIE.png" alt="step text"/></div>
                </div>';
        }
        return $output;
    }
}