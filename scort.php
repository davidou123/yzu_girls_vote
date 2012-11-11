<?php

for($i=1;$i<24;$i++){
	$datab="count".$i.".txt";
	$fp=fopen($datab,"r");                   //fopen開啟檔案
    $Score[$i]=fread($fp,filesize($datab));  //fread讀取檔案
    fclose($fp);   
	//echo $i."號的分數為".$Score[$i]."<br>";
	}

	

	
	?>
	<html>

<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>新增網頁1</title>
</head>

<body>



<table border="1" width="100%" id="table1">
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23824&id=146430472070796">
		<strong>1號候選人-小仙女</strong></a></span></span></td>
		<td width="334"><?php echo $Score[1]; ?></td>
		<td><input type="text" name="T2" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23773&id=146430472070796">
		<strong>2號候選人-孟竺</strong></a></span></span></td>
		<td width="334"><?php echo $Score[2]; ?></td>
		<td><input type="text" name="T3" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23839&id=146430472070796">
		<strong>3號候選人-秀秀</strong></a></span></span></td>
		<td width="334"><?php echo $Score[3]; ?></td>
		<td><input type="text" name="T4" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23768&id=146430472070796">
		<strong>4號候選人-小琬</strong></a></span></span></td>
		<td width="334"><?php echo $Score[4]; ?></td>
		<td><input type="text" name="T5" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23840&id=146430472070796">
		<strong>5號候選人-VIKI</strong></a></span></span></td>
		<td width="334"><?php echo $Score[5]; ?></td>
		<td><input type="text" name="T6" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23862&id=146430472070796">
		<strong>6號候選人-琇</strong></a></span></span></td>
		<td width="334"><?php echo $Score[6]; ?></td>
		<td><input type="text" name="T7" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23953&id=146430472070796">
		<strong>7號候選人-小草</strong></a></span></span></td>
		<td width="334"><?php echo $Score[7]; ?></td>
		<td><input type="text" name="T8" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23777&id=146430472070796">
		<strong>8號候選人-小喵</strong></a></span></span></td>
		<td width="334"><?php echo $Score[8]; ?></td>
		<td><input type="text" name="T9" size="20"></td>
	</tr>
		<tr>
		<td width="139">
		

		<strong>bency</strong></span></span></td>
		<td width="334"><?php echo $Score[9]; ?></td>
		<td><input type="text" name="T6" size="20"></td>
	</tr>
	
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23974&id=146430472070796">
		<strong>10號候選人-柯B</strong></a></span></span></td>
		<td width="334"><?php echo $Score[10]; ?></td>
		<td><input type="text" name="T10" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23772&id=146430472070796">
		<strong>11號候選人-豬豬</strong></a></span></span></td>
		<td width="334"><?php echo $Score[11]; ?></td>
		<td><input type="text" name="T11" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23959&id=146430472070796">
		<strong>12號候選人-綺綺</strong></a></span></span></td>
		<td width="334"><?php echo $Score[12]; ?></td>
		<td><input type="text" name="T12" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23855&id=146430472070796">
		<strong>13號候選人-小葵</strong></a></span></span></td>
		<td width="334"><?php echo $Score[13]; ?></td>
		<td><input type="text" name="T13" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23852&id=146430472070796">
		<strong>14號候選人-金</strong></a></span></span></td>
		<td width="334"><?php echo $Score[14]; ?></td>
		<td><input type="text" name="T14" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23973&id=146430472070796">
		<strong>15號候選人-小天</strong></a></span></span></td>
		<td width="334"><?php echo $Score[15]; ?></td>
		<td><input type="text" name="T15" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23844&id=146430472070796">
		<strong>16號候選人-小宇</strong></a></span></span></td>
		<td width="334"><?php echo $Score[16]; ?></td>
		<td><input type="text" name="T16" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23873&id=146430472070796">
		<strong>17號候選人-Echo</strong></a></span></span></td>
		<td width="334"><?php echo $Score[17]; ?></td>
		<td><input type="text" name="T17" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23977&id=146430472070796">
		<strong>18號候選人-小燕</strong></a></span></span></td>
		<td width="334"><?php echo $Score[18]; ?></td>
		<td><input type="text" name="T18" size="20"></td>
	</tr>
	<tr>
		<td height="25" width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23857&id=146430472070796">
		<strong>19號候選人-柚子</strong></a></span></span></td>
		<td height="25" width="334"><?php echo $Score[19]; ?></td>
		<td height="25"><input type="text" name="T19" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23963&id=146430472070796">
		<strong>20號候選人-容容</strong></a></span></span></td>
		<td width="334"><?php echo $Score[20]; ?></td>
		<td><input type="text" name="T20" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23775&id=146430472070796">
		<strong>21號候選人-Donut</strong></a></span></span></td>
		<td width="334"><?php echo $Score[21]; ?></td>
		<td><input type="text" name="T21" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		
		<a style="cursor: pointer; color: rgb(59, 89, 152); text-decoration: none; " href="http://www.facebook.com/album.php?aid=23948&id=146430472070796">
		<strong>22號候選人-正心</strong></a></span></span></td>
		<td width="334"><?php echo $Score[22]; ?></td>
		<td><input type="text" name="T22" size="20"></td>
	</tr>
	<tr>
		<td width="139">
		<span class="Apple-style-span" style="border-collapse: collapse; color: rgb(59, 89, 152); font-family: 'lucida grande', tahoma, verdana, arial, sans-serif; font-size: 12px; font-weight: bold; text-align: left; ">
		23號候選人-大猩</span></span></td>
		<td width="334"><?php echo $Score[23]; ?></td>
		<td><input type="text" name="T23" size="20"></td>
	</tr>
</table>

</body>

</html>
