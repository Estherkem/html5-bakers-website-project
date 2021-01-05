<form action="cake_send.php"  enctype="multipart/form-data"  method="POST">
						<div class="col-md-8 animate-box">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<select name="var1">
										<option>appreciation</option>
										<option>anniversary</option>
										<option>baby</option>
										<option>congratulatory</option>
										<option>corporate</option>
										<option>graduation</option>
										<option>wedding</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="file" name="var2" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="var3" class="form-control" id="" cols="30" rows="7" placeholder="cake_description"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
								</div>
							</div>
						</div>
					</div>

					</form>




<?php
if(isset($_POST['submit'])){
$var1=$_POST['var1'];
$filetmp=$_FILES["var2"]["tmp_name"];
$filename=basename($_FILES["var2"]["name"]);
$var2="uploads/".$filename;
move_uploaded_file($filetmp,$var2);
$var3=$_POST['var3'];
$var4='33';//$_POST['var4'];
$var5=date("d");
$var6=date("m");
$var7=date("Y");

$con=mysqli_connect('localhost','root','','wandy_bakery');
if(!$con){
	echo "Not connected to the database";
}
$sql="INSERT INTO cakes(`cake_type`, `cake_picture`, `cake_description`, `who_posted`, `day`, `month`, `year`) VALUES ('$var1','$var2','$var3','$var4','$var5','$var6','$var7')";
$result=mysqli_query($con,$sql);
if($result){
	echo "Hurray!!!!";
}
	else{
		echo "nooo!!!";
	}


}




?>