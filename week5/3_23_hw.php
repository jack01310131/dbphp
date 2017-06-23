<?php
	$endtime=date_create('2017-12-31 0:0:0');
	$nowtime=date_create(date('Y-m-j'));
	$mon=date('m');
	
	echo "<img src=\"".$mon.".png\"><br>";
	$now=date('Y-m-j H:i:s');
	$end=date('2017-12-31 0:0:0');
	echo date('Y年m月j日l H時i分s秒'),"<br>";
	
	$diff=date_diff($nowtime,$endtime);
	echo "距離世界末日還剩：",$diff->format("%R%a days"),"<br>";

	$diffmon= 12-date('m');
	$diffyear= 2017-date('Y');

	if (date('m')==1 || date('m')==3 || date('m')==5 || date('m')==7 || date('m')==8 || date('m')==10 || date('m')==12){
		$diffday= 31-date('j');
	}elseif ( date('m')==2 && date('Y')%4!=0){
		$diffday= 28-date('j');
	}elseif ( date('m')==2 && date('Y')%4==0){
		$diffday= 29-date('j');
	}else{
		$diffday= 30-date('j');
	}
	
	echo "距離世界末日還剩：",$diffyear,"年",$diffmon,"月",$diffday,"日<br>";

	$diffsecond=floor((strtotime($end)-strtotime($now)));
	echo "距離世界末日還剩：",(int)($diffsecond/86400),"天";
	echo (int)(($diffsecond%86400)/3600),"時";
	echo (int)((($diffsecond%86400)%3600)/60),"分";
	echo (int)(((($diffsecond%86400)%3600)%60)),"秒";

?>