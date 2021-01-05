<?php

$con=mysqli_connect('localhost','root','','wandy_bakery');
if(!$con){
	echo "Not connected to the database";
}
$select=mysqli_query($con,"SELECT * FROM `orders`");
$number=mysqli_num_rows($select);
if($number>0){
   while($row=mysqli_fetch_assoc($select)){
       echo $row['first_name'];
        echo "<br>";
        echo  $row['last_name'];
        echo "<br>";
        echo  $row['email'];
        echo "<br>";
        echo  $row['contact'];
        echo "<br>";
        echo $row['residence'];
        echo "<br>";
        echo $row['size'];
        echo "<br>";
        echo $row['cake_flavour'];
        echo "<br>";
        echo $row['cream'];
        echo "<br>";
        echo $row['additions1'];
        echo "<br>";
        echo $row['additions2'];
        echo "<br>";
        echo $row['description'];
        echo "<br>";
        echo $row['day'];
        echo "<br>";
        echo $row['month'];
        echo "<br>";
       echo $row['year'];
        echo "<br>";
      
   } 
}
else{
    echo "no reults!";
}
?>