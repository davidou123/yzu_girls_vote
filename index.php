<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>校花票選網頁</title>
</head>

<body>
<center>
<table border="0" width="985" cellspacing="0" cellpadding="0" bgcolor="#3B5998" height="70">
	<tr>
		<td width="227">
		<p align="center"><b><font color="#FFFFFF" face="標楷體" size="5">元智大學 校花評選</font></b></td>
		<td width="471">
		<p align="center"><b><font size="7" color="#FFFFFF" face="標楷體">選出漂亮的吧</font></b></td>
		<td width="287"><font color="#FFFFFF">&nbsp; <font face="Broadway BT">
		<b>&nbsp;In Y.Z.U</b></font></font></td>
	</tr>
</table>
<br>
<!-- 圖檔出來慢的話 是因為現在流量有點大 等一下或重新整理吧:)<BR><BR>  -->
<?php

//挑選候選人
$a=rand(1,23);
while($a==9)   //排除9號
{$a=rand(1,23);
}
$b=rand(1,23);
while($b==$a)
{$b=rand(1,23);
}


echo "<font color='#FFFFFF'>".$a."  ";
echo $b."</font>";

$pic[1]="<a href='http://www.facebook.com/album.php?aid=23824&id=146430472070796'><img border='0' src='http://211.21.192.216/face/01-".rand(1,10).".jpg'></a>";
$pic[2]="<a href='http://www.facebook.com/album.php?aid=23773&id=146430472070796'><img border='0' src='http://211.21.192.216/face/02-".rand(1,10).".jpg'></a>";
$pic[3]="<img border='0' src='http://211.21.192.216/face/03-".rand(1,13).".jpg'>";
$pic[4]="<img border='0' src='http://211.21.192.216/face/04-".rand(1,13).".jpg'>";
$pic[5]="<img border='0' src='http://211.21.192.216/face/05-".rand(1,13).".jpg'>";
$pic[6]="<img border='0' src='http://211.21.192.216/face/06-".rand(1,7).".jpg'>";
$pic[7]="<img border='0' src='http://211.21.192.216/face/07-".rand(1,13).".jpg'>";
$pic[8]="<img border='0' src='http://211.21.192.216/face/08-".rand(1,9).".jpg'>";
$pic[9]="<img border='0' src='http://avatars.plurk.com/3500467-big14.jpg'>";

$pic[10]="<img border='0' src='http://211.21.192.216/face/10-".rand(1,13).".jpg'>";
$pic[11]="<img border='0' src='http://211.21.192.216/face/11-".rand(1,12).".jpg'>";
$pic[12]="<img border='0' src='http://211.21.192.216/face/12-".rand(1,13).".jpg'>";
$pic[13]="<img border='0' src='http://211.21.192.216/face/13-".rand(1,10).".jpg'>";
$pic[14]="<img border='0' src='http://211.21.192.216/face/14-".rand(1,11).".jpg'>";
$pic[15]="<img border='0' src='http://211.21.192.216/face/15-".rand(1,13).".jpg'>";
$pic[16]="<img border='0' src='http://211.21.192.216/face/16-".rand(1,9).".jpg'>";
$pic[17]="<img border='0' src='http://211.21.192.216/face/17-".rand(1,11).".jpg'>";
$pic[18]="<img border='0' src='http://211.21.192.216/face/18-".rand(1,13).".jpg'>";
$pic[19]="<img border='0' src='http://211.21.192.216/face/19-".rand(1,7).".jpg'>";
$pic[20]="<img border='0' src='http://211.21.192.216/face/20-".rand(1,12).".jpg'>";
$pic[21]="<img border='0' src='http://211.21.192.216/face/21-".rand(1,4).".jpg'>";
$pic[22]="<img border='0' src='http://211.21.192.216/face/22-".rand(1,13).".jpg'>";
$pic[23]="<img border='0' src='http://211.21.192.216/face/23-".rand(1,13).".jpg'>";
echo $pic[$a];
echo "　V.S.　";
echo $pic[$b];
?>


<form method="POST" action="facebook.php">

	<input type='hidden' name='pic'>
	<input type='hidden' name='aa' value='<?php echo $a;?>'>
	<input type='hidden' name='bb' value='<?php echo $b;?>'>
<input type='submit' value='左邊' onclick="this.form.pic.value='aa'" />
<input type='submit' value='平手' onclick="this.form.pic.value='center'" />
<input type='submit' value='右邊' onclick="this.form.pic.value='bb'" />

</form>
<?
	$datab="counter.txt";
	$fp=fopen($datab,"r");                   //fopen開啟檔案
    $counter=fread($fp,filesize($datab));  //fread讀取檔案
    fclose($fp);  
echo "<b><font size='5'>評分次數點擊率:".$counter."</font></b>";	
?>
目前排名 (更新時間12/24 5:10 pm)
<table border="1" width="100%" id="table2" cellspacing="0">
	<tr>
		<td width="117">
		<a style="cursor:pointer" href="http://www.facebook.com/album.php?aid=23840&id=146430472070796">
		5號候選人-VIKI</a></td>
		<td>3557</td>	

		<td width="117">
		<a style="cursor:pointer" href="http://www.facebook.com/album.php?aid=23977&id=146430472070796">
		18號候選人-小燕</a></td>
		<td>3544</td>
		
		<td>
		<a style="cursor:pointer" href="http://www.facebook.com/album.php?aid=23768&id=146430472070796">
		4號候選人-小琬</a></td>
		<td>3520</td>
				<td>
		<a style="cursor:pointer" href="http://www.facebook.com/album.php?aid=23033&id=146430472070796">
		23號候選人-大猩</a></td>
		<td>3503</td>		
		
		
		<td>
		<a style="cursor:pointer" href="http://www.facebook.com/album.php?aid=23953&id=146430472070796">
		7號候選人-小草</a></td>
		<td>3468</td>

	</tr>
</table>


<BR><BR>本系統的統計公式採用facebook電影-社群網戰 相同的正咩計算公式<BR>
<img border="0" src="http://2.bp.blogspot.com/_qHC2wKqu6pc/TOd4VSuQj_I/AAAAAAAAC_Q/eUqJh3GWaPU/s320/image33.jpg" width="200" height="150">
「每個女生基本評價是1400 , 在任一時間A女的評價是R-a , B女的評價是R-b,任兩個女生對比時 , 依當下評價會有其贏面的期望值」<BR>
Ra=1/1+10^(Rb-Ra)*400<BR>
Rb=1/1+10^(Ra-Rb)*400<BR><br>
詳細公式請看 http://en.wikipedia.org/wiki/ELO_rating_system<br><br>
<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/YzQIMUopvzk?fs=1&amp;hl=zh_TW"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/YzQIMUopvzk?fs=1&amp;hl=zh_TW" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
<BR>
<a href="http://www.plurk.com.tw/yzutalk">元智透可板噗浪</a> www.plurk.com.tw/yzutalk<BR>
製作人 <a href="mailto:davidou123@hotmail.com">老歐</a> davidou123@hotmail.com
</body>

</html>
