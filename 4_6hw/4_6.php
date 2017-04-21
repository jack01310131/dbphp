<?php
$link= @mysqli_connect(
		'localhost',//主機名(ip)
		'root',//使用者
		'',//密碼
		'');//使用的資料庫名


mysqli_query($link,'SET NAMES utf8');
$result=mysqli_query($link," SELECT * FROM table ");
while ($row=mysqli_fetch_assoc($result)) {
		echo $row['name'],"  ",$row['gender'],"  ",$row['Bday'],"  ",$row['ID'],"  ",$row['eat'],"<br> ";
	}
}
?>