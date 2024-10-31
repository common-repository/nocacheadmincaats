<?php
/*
Plugin Name: NOCacheAdminca
Plugin URI: https://mihalica.ru/obnovlenie-wordpress-redaktirovaniya-zapisey-rabotaet-s-oshibkami/
Description: Плагин НЕКЭширования админки WordPress - перед глазами ТОЛЬКО ОБНОВЛЁННАЯ СТРАНИЦА: The plugin disables caching in the admin panel is well helps to lose that work in the admin panel and writing articles for the website
Version: 4.8
Author: ATs.M и Владимир @Grom1k
Author URI: https://mihalica.ru/
License: Условия, при которых плагин может распространятся: https://mihalica.ru/
*/
// and
// include_once "menu-cnop/menu.php";
// and below files
/* NOCachesAdminca */
$WPAdminNoCache = new WPAdminNoCache();
$WPAdminNoCache->init();

class WPAdminNoCache {    
    public function init() {
        add_filter('nocache_headers', array($this, 'addHeader'));
    }
    public function addHeader($headers) {
        $headers['Pragma'] = 'no-cache';
        return $headers;
    }
}