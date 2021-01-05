<?php
if(isset($_POST['submit'])){
$var2=$_POST['var2'];
$var3=$_POST['var3'];
$var4=$_POST['var4'];
$var5=date("d");
$var6=date("m");
$var7=date("Y");
$var8=date("d");

$con=mysqli_connect('localhost','root','','wandy_bakery');
if(!$con){
	echo "Not connected to the database";
}
$sql="INSERT INTO `feedback`(`name`, `email`, `message`, `day`, `month`, `year`, `date`) VALUES ($var2','$var3','$var4','$var5','$var6','$var7','$var8',)";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>0){
	echo "Hurray!!!!";
}
	else{
		echo "nooo!!!";
	}


}




?>