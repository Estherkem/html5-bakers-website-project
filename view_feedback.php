<?php




$con=mysqli_connect('localhost','root','','wandy_bakery');
if(!$con){
	echo "Not connected to the database";
}
$sql="SELECT * FROM `feedback`";
$result=mysqli_query($con,$sql);
if($result){
	echo "noikoo!!!";
	while ($rows = mysqli_fetch_assoc($result)) {
               echo $rows['name'];
               echo "<br>";
               echo $rows['email'];
                   echo "<br>";
               echo $rows['message'];
               echo "<hr>";

	}
}
	else{
		echo "nooo!!!";
	}







?>