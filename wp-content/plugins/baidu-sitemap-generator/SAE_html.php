<?php
/**
Author:Gimhoy
URI: http://blog.gimhoy.com/archives/baidu-sitemap-generator-for-sae-kv.html
*/
 header('Content-type:text/html; charset=utf-8');
 $sitemap = file_get_contents("saekv://wordpress/sitemap.html");
 echo $sitemap;
 ?>