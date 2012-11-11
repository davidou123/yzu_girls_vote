<?php
/*
*	Copyright (c) 2010 Zakura
*
*	Authou: Bency & Davidou
*
*	File name: function.inc
*	Description: Functions for whole website
*	
*	Vim configurations:
*	:set tabstop=4;
*	:set ft=php;
*/
include 'includes/mysql.inc';
function GetIp(){
if (getenv("HTTP_CLIENT_IP"))
	$ip = getenv("HTTP_CLIENT_IP");
else if(getenv("HTTP_X_FORWARDED_FOR"))
	$ip = getenv("HTTP_X_FORWARDED_FOR");
else if(getenv("REMOTE_ADDR"))
	$ip = getenv("REMOTE_ADDR");
else $ip = "Unknow";

return $ip;
}
function quote_smart($value){
// Stripslashes
	if (get_magic_quotes_gpc()) {
		$value = stripslashes($value) ;
	}	
return mysql_real_escape_string($value) ;
}

?>
