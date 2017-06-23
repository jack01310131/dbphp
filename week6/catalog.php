<?php
session_start();

if ( isset($_POST["Item"]) ) {
$Item=$_POST["Item"];
$_SESSION["ID"]=$Item;
$_SESSION["quantity"]=$_POST["Quantity"];
	switch ($Item) {
		case 'S001':
			$_SESSION["name"]="10吋變形平板";
			$_SESSION["price"]=12000;
		break;
		case 'S002':
			$_SESSION["name"]="15.6吋筆記型電腦";
			$_SESSION["price"]=27000;
		break;
		case 'S003':
			$_SESSION["name"]="iPhone手機";
			$_SESSION["price"]=21000;
		break;
	}
	header("Location: savecart.php");
}


echo '<form action="" method="post">
	選擇商品: 
	<select name="Item">
 		<option value="S001">10吋變形平板 - $12000</option>
  		<option value="S002">15.6吋筆記型電腦 - $27000</option>
  		<option value="S003">iPhone手機 - $21000</option> 
	</select>
	<input type="text" size="5" name="Quantity" value="1"/>
	<input type="submit" value="訂購"/>
	</form>';


?>