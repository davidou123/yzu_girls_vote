<?php
/*
*   Copyright (c) 2010 Zakura
*
*   Authou: Bency & Davidou
*
*   File name: index.php
*   Description: The main fram of website to include
*	vary modules.
*
*   Vim configurations:
*   :set tabstop=4;
*   :set ft=php;
*/
include 'includes/function.inc';
include 'includes/content.inc';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Zakura !<?php echo $header?></title>
</head>
<body>
<a id=logo></a>
<div id=header>
	<ul id="tab-menu" class="no-format">
	<li <?if($_GET['id']==1) echo 'class="crt"';?>><span><a href="<?php echo $sitepath?>newindex.php?id=1">校花選拔</a></span></li>
	<li <?if($_GET['id']==2) echo 'class="crt"';?>><span><a href="<?php echo $sitepath?>newindex.php?id=2">排行榜</a></span></li>
	<li <?if($_GET['id']==3) echo 'class="crt"';?>><span><a href="<?php echo $sitepath?>newindex.php?id=3">校花選拔</a></span></li>
	<li <?if($_GET['id']==4) echo 'class="crt"';?>><span><a href="<?php echo $sitepath?>newindex.php?id=4">校花選拔</a></span></li>
	<li <?if($_GET['id']==5) echo 'class="crt"';?>><span><a href="<?php echo $sitepath?>newindex.php?id=5">校花選拔</a></span></li>
	</ul>
</div>
<div id=content-area>
<div id=main-col>
<?php include 'module/content.mod';?>
</div></div>
</body>
</html>
