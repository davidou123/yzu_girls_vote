<?php 

//挑選候選人
$a=rand(1,23);
while($a==9)   //排除9號
{$a=rand(1,23);
}
$b=rand(1,23);
while($b==$a||$b==9)
{$b=rand(1,23);
}


echo $a."  ";
echo $b;
/*
$pic[1]="<img border='0' src='01-".rand(1,10).".jpg' >";
$pic[2]="<img border='0' src='02-".rand(1,10).".jpg'>";
$pic[3]="<img border='0' src='03-".rand(1,13).".jpg'>";
$pic[4]="<img border='0' src='04-".rand(1,13).".jpg'>";
$pic[5]="<img border='0' src='05-".rand(1,13).".jpg'>";
$pic[6]="<img border='0' src='06-".rand(1,7).".jpg'>";
$pic[7]="<img border='0' src='07-".rand(1,13).".jpg'>";
$pic[8]="<img border='0' src='08-".rand(1,9).".jpg'>";
$pic[10]="<img border='0' src='10-".rand(1,13).".jpg'>";
$pic[11]="<img border='0' src='11-".rand(1,12).".jpg'>";
$pic[12]="<img border='0' src='12-".rand(1,13).".jpg'>";
$pic[13]="<img border='0' src='13-".rand(1,10).".jpg'>";
$pic[14]="<img border='0' src='14-".rand(1,11).".jpg'>";
$pic[15]="<img border='0' src='15-".rand(1,13).".jpg'>";
$pic[16]="<img border='0' src='16-".rand(1,9).".jpg'>";
$pic[17]="<img border='0' src='17-".rand(1,11).".jpg'>";
$pic[18]="<img border='0' src='18-".rand(1,13).".jpg'>";
$pic[19]="<img border='0' src='19-".rand(1,7).".jpg'>";
$pic[20]="<img border='0' src='20-".rand(1,12).".jpg'>";
$pic[21]="<img border='0' src='21-".rand(1,4).".jpg'>";
$pic[22]="<img border='0' src='22-".rand(1,13).".jpg'>";
$pic[23]="<img border='0' src='23-".rand(1,13).".jpg'>";
*/

$pic[1]="<a href='http://www.facebook.com/album.php?aid=23824&id=146430472070796'><img border='0' src='01-".rand(1,10).".jpg'></a>";
$pic[2]="<a href='http://a.b'><img border='0' src='02-".rand(1,10).".jpg'></a>";
$pic[3]="<img border='0' src='03-".rand(1,13).".jpg'>";
$pic[4]="<img border='0' src='04-".rand(1,13).".jpg'>";
$pic[5]="<img border='0' src='05-".rand(1,13).".jpg'>";
$pic[6]="<img border='0' src='06-".rand(1,7).".jpg'>";
$pic[7]="<img border='0' src='07-".rand(1,13).".jpg'>";
$pic[8]="<img border='0' src='08-".rand(1,9).".jpg'>";
$pic[10]="<img border='0' src='10-".rand(1,13).".jpg'>";
$pic[11]="<img border='0' src='11-".rand(1,12).".jpg'>";
$pic[12]="<img border='0' src='12-".rand(1,13).".jpg'>";
$pic[13]="<img border='0' src='13-".rand(1,10).".jpg'>";
$pic[14]="<img border='0' src='14-".rand(1,11).".jpg'>";
$pic[15]="<img border='0' src='15-".rand(1,13).".jpg'>";
$pic[16]="<img border='0' src='16-".rand(1,9).".jpg'>";
$pic[17]="<img border='0' src='17-".rand(1,11).".jpg'>";
$pic[18]="<img border='0' src='18-".rand(1,13).".jpg'>";
$pic[19]="<img border='0' src='19-".rand(1,7).".jpg'>";
$pic[20]="<img border='0' src='20-".rand(1,12).".jpg'>";
$pic[21]="<img border='0' src='21-".rand(1,4).".jpg'>";
$pic[22]="<img border='0' src='22-".rand(1,13).".jpg'>";
$pic[23]="<img border='0' src='23-".rand(1,13).".jpg'>";



//要傳a b 誰贏
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>校花票選網頁</title>
</head>

<body>
<?php
echo "<center>";
echo $pic[$a];
echo "　　";
echo $pic[$b];
?>
<form method="POST" action="facebook.php">

	<input type='hidden' name='pic'>
	<input type='hidden' name='right' value='1'>
	<input type='hidden' name='left' value='2'>
<input type='submit' value='右邊' onclick="this.form.pic.value='a'" />
<input type='submit' value='平手' onclick="this.form.pic.value='center'" />
<input type='submit' value='右邊' onclick="this.form.pic.value='b'" />

</form>

</body>

</html>
