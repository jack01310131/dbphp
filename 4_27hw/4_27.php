<?php
$i=1;

if(isset($_FILES["upload".$i])){
	while ($i<=2) {
		echo $_FILES["upload".$i]["name"]."<br>";				//檔案名字
		echo $_FILES["upload".$i]["tmp_name"]."<br>";			//檔案大小
		echo $_FILES["upload".$i]["size"]."<br>";				//檔案類型
		echo $_FILES["upload".$i]["type"]."<br>";
		$a=pathinfo($_FILES["upload".$i]["name"]);
		$t=time();
		
		if (copy($_FILES["upload".$i]["tmp_name"],$i.$t.".".$a["extension"])) {
			echo "檔案上傳成功";
		}else{
			echo "檔案上傳失敗";
		}
		$i++;
	}
}

?>