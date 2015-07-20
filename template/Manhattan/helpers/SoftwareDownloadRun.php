<?php
class Zend_View_Helper_SoftwareDownloadRun extends Zend_View_Helper_Abstract
{
    public function softwareDownloadRun($baseUrl)
    {
        $output = '';
        if (strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "chrome")) { 
            $output = '<div>
                <div class="pasoTexto">'.Zend_Registry::get('tr')->translate('Click "Run".').'</div>
                <div><img src="'.$baseUrl.'/img/runChrome.jpg" alt="Chrome"/></div>
                </div>';
        } elseif (strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "firefox")) {
            $output = '<div>
                <div class="pasoTexto">'.
                Zend_Registry::get('tr')->translate('When the download is complete double click on it.').
                '</div>
                <div><img src="'.$baseUrl.'/img/runFirefox.jpg" alt="Firefox"/></div>
                </div>';
        } else {
            $output = '<div>
                <div class="pasoTexto">'.
                Zend_Registry::get('tr')->translate('Preparing your installation.').'</div>
                <div><img src="'.$baseUrl.'/img/runIE.jpg" alt="step text"/></div>
                </div>';
        }
        return $output;
    }
}