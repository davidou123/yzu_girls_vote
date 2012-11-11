<?PHP
/*
FOR($i=1;$i<24;$i++){
   $data="count".$i.".txt";
    //產生新值
    if(file_exists($data)){                     //如果$data存在
        //讀取舊值並加1成為新值
        $fp=fopen($data,"r");                   //fopen開啟檔案
        $old_count=fread($fp,filesize($data));  //fread讀取檔案
        $new_count=$old_count/2;
        fclose($fp);                            //關閉檔案

	while($new_count==1||$new_count==0)
	{
	       $fp=fopen($data,"r");                   //fopen開啟檔案
        $old_count=fread($fp,filesize($data));  //fread讀取檔案
        $new_count=$old_count/2;
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

}*/

?>



