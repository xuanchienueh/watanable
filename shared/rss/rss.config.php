<?php
$_url = array();
$_url[1] = "https://www.yakitori-watanabe.jp/fcblog/feed/";
// $_url[1] = "http://test.foodconnection.jp/blog2/feed/";
// $_url[1] = "http://www.kyoazuki-tsururin.jp/fcblog/feed/";



/*******************************************************************************************
 *
 * ----------------------------------- RSS Configuration -----------------------------------
 *
 * ------------------- DON'T EDIT BELOW IF YOU DON'T UNDERSTAND ABOUT IT -------------------
 *
 ******************************************************************************************/



$timeout = 5;
$connectTimeout = 5;
$maxRedirects = 10;
$versionSSL = NULL; // NULL for not set or INT with range from 0 to 6. See CURLOPT_SSLVERSION at https://www.php.net/manual/en/function.curl-setopt.php