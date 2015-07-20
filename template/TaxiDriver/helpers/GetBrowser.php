<?php
class Zend_View_Helper_GetBrowser extends Zend_View_Helper_Abstract
{

    public function getBrowser(){
        $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
     

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
            '/windows nt 6.2/i'     =>  'Windows 8',
            '/windows nt 6.1/i'     =>  'Windows 7',
            '/windows nt 6.0/i'     =>  'Windows Vista',
            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'     =>  'Windows XP',
            '/windows xp/i'         =>  'Windows XP',
            '/windows nt 5.0/i'     =>  'Windows 2000',
            '/windows me/i'         =>  'Windows ME',
            '/win98/i'              =>  'Windows 98',
            '/win95/i'              =>  'Windows 95',
            '/win16/i'              =>  'Windows 3.11',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/mac_powerpc/i'        =>  'Mac OS 9',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile',
            '/Kindle/i'             =>  'Kindle',
            '/Silk/i'               =>  'Kindle Fire'
                        );

    foreach ($os_array as $regex => $value) { 
       
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }   
        if($os_platform=='iPad' || $os_platform=='iPod' || $os_platform=='iPhone' || $os_platform=='Android' || $os_platform=='Mobile' || $os_platform=='BlackBerry' || $os_platform=='Kindle' || $os_platform=='Kindle Fire'  ):
            $resul = true;
        else:
            $resul = false;
        endif;

    return $resul;

    }


   
}