<?php
$i=1;
echo '<form action="4_27.php" method="post" enctype="multipart/form-data">';
while ($i<=2) {
	echo "<input type='file' name=\"upload".$i."\"><br/>";
	$i++;
}
echo '<input type="submit" value="上傳">
	</form>';
?>