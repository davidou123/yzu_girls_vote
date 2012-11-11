<?php
header("Content-type: text/html; charset=utf-8"); 
if($_POST['pic']!="")
{
//要傳a b 誰贏
 $_POST['pic'];    //win a center b
 $_POST['aa']; //a的號碼
 $_POST['bb'];  //b的號碼
 
$win=$_POST['pic'];
$a=$_POST['aa'];
$b=$_POST['bb'];
	//開啟a的分數
	$dataa="count".$a.".txt";
	$fp=fopen($dataa,"r");                   //fopen開啟檔案
    $Scorea=fread($fp,filesize($dataa));  //fread讀取檔案
     fclose($fp);                            //關閉檔案
	//開啟b的分數
	$datab="count".$b.".txt";
	$fp=fopen($datab,"r");                   //fopen開啟檔案
    $Scoreb=fread($fp,filesize($datab));  //fread讀取檔案
    fclose($fp);                            //關閉檔案
/*
echo "誰贏".$win."<BR>";
echo"a的號碼:".$a."<br>";
echo"b的號碼:".$b."<br>";*/

if($win=="aa"){
$wina=1;    //勝負值：勝為1、負為0、平手為0.5 
$winb=0;
}
else if($win=="bb"){
$wina=0;    //勝負值：勝為1、負為0、平手為0.5 
$winb=1;
}
else if($win=="center"){
$wina=0.5;    //勝負值：勝為1、負為0、平手為0.5 
$winb=0.5;
}
if($a<2099){
	$ka=32;}
else if($a<2399){
	$ka=24;}
else if($a>=2400){
	$ka=16;}
	
if($b<2099){
	$kb=32;}
else if($b<2399){
	$kb=24;}
else if($b>=2400){
	$kb=16;}


/*　實力值0-2099者，K-value為32； 
　　實力值2100-2399者，K-value為24； 
　　實力值 >=2400者，K-value為16。 */

$hopea=1/(1+pow(10,($Scoreb-$Scorea)/400));  // 期望勝率的部分   1/(1+10^(Ra-Rb/400)) 
$na=$Scorea+$ka*($wina-$hopea); //　 新實力值 = 舊實力值+ K(勝負值 – 期望勝率) 
//echo "a選手機分".$na;

$hopeb=1/(1+pow(10,($Scorea-$Scoreb)/400));  // 期望勝率的部分   1/(1+10^(Ra-Rb/400)) 
$nb=$Scoreb+$kb*($winb-$hopeb); //　 新實力值 = 舊實力值+ K(勝負值 – 期望勝率) 
//echo "b選手機分".$nb;

	$dataa="count".$a.".txt";
    $fp=fopen($dataa,"w");
    fwrite($fp,$na);
    fclose($fp);
	$datab="count".$b.".txt";
    $fp=fopen($datab,"w");
    fwrite($fp,$nb);
    fclose($fp);

	
    $data="counter.txt";
    //產生新值
    if(file_exists($data)){                     //如果$data存在
        //讀取舊值並加1成為新值
        $fp=fopen($data,"r");                   //fopen開啟檔案
        $old_count=fread($fp,filesize($data));  //fread讀取檔案
        $new_count=$old_count+1;
        fclose($fp);                            //關閉檔案
    }else{
        $new_count=1;
    }
	while($new_count==1||$new_count==0)
	{
	       $fp=fopen($data,"r");                   //fopen開啟檔案
        $old_count=fread($fp,filesize($data));  //fread讀取檔案
        $new_count=$old_count+1;
        fclose($fp);                            //關閉檔案
	}
	
    //寫入新值到count.txt中
	    $fp=fopen($data,"w");
	if (flock($fp, LOCK_EX)) { // do an exclusive lock
    ftruncate($fp, 0); // truncate file
    fwrite($fp, $new_count);
    flock($fp, LOCK_UN); // release the lock
}


}
/*
United States Chess Federation ratings
The United States Chess Federation (USCF) uses its own classification of players:[6]
2400 and above: Senior Master
2200–2399 plus 300 games above 2200: Original Life Master[7]
2200–2399: National Master
2000–2199: Expert
1800–1999: Class A
1600–1799: Class B
1400–1599: Class C
1200–1399: Class D
1000–1199: Class E
800-999: Class F
600-799: Class G
400-599: Class H
200-399: Class I
100-200: Class J

*/


//要傳a b 誰贏
?>
<html>
<head>
<meta http-equiv="refresh" content="0;URL=index.php">

<BR><BR>
<p align="center"><span style="font-size: 72pt">投票完成
<BR>
下一張吧!</span></p>
</head>

</html>