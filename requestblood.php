<?php include("includes/header.php")  ?>
<?php include("includes/nav.php")  ?>
<?php include("DBconnection/connection.php") ?>
<title>Volunteer Registration</title>


<?php


if(isset($_POST['submit'])) 
{
    $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $contact= $_POST['contact'];
  $Date = $_POST['Date'];
  $Address = $_POST['Address'];
  $Blood = $_POST['Blood'];
  $Details = $_POST['Details'];
	
    if($Name == "" || $Email == "" || $contact == "" || $Date == "" || $Address == "" || $Blood == "" || $Details== "" || $email == "") 
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else
    {
        $insert="INSERT INTO volunteerreg(Fullname,Age,Gender,Blood_Group, Location, Contact, Email,Facebook, Password) 
        VALUES('$Name', '$Email','$contact','$blood','$Date','$Address','$Blood','$Details')";
    }

        if (mysqli_query($conn, $insert)) 
        {
             echo " <div class='alert alert-primary alert-dismissible fade show' role='alert'>
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                 <span aria-hidden='true'>&times;</span>
                 <span class='sr-only'>Close</span>
             </button>
             <strong>Successfully Added</strong> You should check all fields.
         </div>";
        } 
        else 
        {
             echo "Error: " . $insert . "<br>" . mysqli_error($mysqli);
        }
       

}


?>


<body>
<section class="image">
    
 
 <form class="reg-box border-warning" action="" method="post">
      <div class="w-75 m-auto">
  <div class="form-group">
    <div class="form-group col-md-6">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="Name" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Email">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contact">Phone Number</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Phone Number">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Date & Time</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Date & Time">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Adderss</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Adderss">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Blood group</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Blood group">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">details </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Details about patient" rows="3"></textarea>
  </div>


 <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</section>
</body>
<?php include("includes/footer.php")  ?>