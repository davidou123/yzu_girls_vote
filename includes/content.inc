<?php
/*
*   Copyright (c) 2010 Zakura
*
*   Authou: Bency & Davidou
*
*   File name: function.inc
*   Description: Functions for whole website
*
*   Vim configurations:
*   :set tabstop=4;
*   :set ft=php;
*/
switch($_GET['id']){

	case '1':
		$mod = 'module/voted.mod';
		$header = '校花選拔';
		break;
	case '2':
		$mod = 'module/rated.mod';
		$header = '排行榜';
		break;
	case '3':
		$mod = 'module/';
	default:
		$mod = 'index.mod';
		$header = '首頁';
		break;
}
?>
