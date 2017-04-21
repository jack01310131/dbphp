<?php
$link= @mysqli_connect(
		'localhost',//主機名(ip)
		'root',//使用者
		'',//密碼
		'');//使用的資料庫名

$input1=$_POST["username"];
$input2=$_POST["gender"];
$input3=$_POST["Bday"];
$inputID=$_POST["ID"];
$inputeat=$_POST["eat"];

echo "姓名:",$input1,"</br>性別:",$input2,"</br>生日:",$input3,"</br>身分證字號:",$inputID,"</br>葷素:",$inputeat;

mysqli_query($link," INSERT INTO table(name,gender,Bday,ID,eat) VALUES ('$input1','$input2','$input3'),'$inputID','$inputeat')");
header("Location: 4_6.php");

?>