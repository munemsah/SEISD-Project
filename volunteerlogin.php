<?php include("includes/header.php")  ?>
<?php include("includes/nav.php")  ?>
<?php include("DBconnection/connection.php") ?>

<?php


if(!$conn){
	die("connection failed: " .mysqli_connect_error());
}


if(isset($_POST['submit'])) {
	
	$email=$_POST['emailaddress'];
    $pass=	$_POST['psw'];
	

	if($email == "" || $pass == "") {
	echo "Either email or password field is empty.";}
		else {
           
		$result = mysqli_query($conn, "SELECT * FROM  volunteerreg WHERE email='$email' AND password=md5('$pass')")
					or die("Could not execute the select query.");

					
		$row = mysqli_fetch_assoc($result);
		if(is_array($row) && !empty($row)) {
			header('Location: deshboard.php');	
		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='volunteerlogin.php'>Go back</a>";
		}
        }
    
}





?>


<body>
	<section class="image">

		 <form class="reg-box border-warning" action="" method="post">

     
			<h3 class="text-capitalize text-center text-white p-md-4">Login as Volunteer</h3>
			<div class="w-50 m-auto">
  
  <div class="form-group">
    <input type="email" name="emailaddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
</div>
  <div class="form-group">
      <input type="password" class="form-control" id="psw" name="psw" placeholder="Enter Password" title="You Enter a Wrong Password" required>
</div>




<div>

   <input type="submit" name="submit" class="btn btn-success" value="Login">
</div>


    <p class="text-warning pt-4">
      Don't have a Account: <a class="box text-white" href="volunteerReg.php">SIGN UP</a>
    </p>

</form>
</div>

</form>
</section>
</body>