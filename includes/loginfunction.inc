<?php
/*
 *   Copyright (c) 2010 Zakura
 *
 *   Authou: Bency & Davidou
 *
 *   File name: loginfunction.inc
 *   Description: Functions for login
 *
 *   Vim configurations:
 *   :set tabstop=4;
 *   :set ft=php;
 */
require_once 'includes/setting.inc';
require_once 'includes/function.inc';
require_once 'includes/mysql.inc';
function db_connect() {
		global $db_host,$db_user,$db_password,$db_database ;
		$db = new mysql($db_host, $db_user, $db_password, $db_database) ;
		return $db ;
}
function session_defaults() {
		$_SESSION['logged'] = false ;
		$_SESSION['uid'] = 0 ;
		$_SESSION['username'] = '' ;
		$_SESSION['cookie'] = 0 ;
		$_SESSION['remember'] = false ;
		$_SESSION['privs'] = 0 ;
		setcookie('vidlogin', $cookie, time() - 31104000, '/') ;
}
function logout(){
	session_defaults();
}



?>
