<?php include("includes/header.php")  ?>
<?php include("includes/nav.php")  ?>
<?php include("DBconnection/connection.php") ?>
<title>BloodRequest </title>


<?php


if(isset($_POST['submit'])) 
{
    $name = $_POST['name'];
  $blood = $_POST['Blood'];
  $location = $_POST['Location'];
  $contact = $_POST['Contact'];
  $email = $_POST['emailaddress'];
  $facebook = $_POST['Facebook'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $message = $_POST['message'];
	
    if($name == "" ||  $location == "" || $blood == "" || $contact == ""  || $date == "" || $time == "" || $message == "" ) 
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else
    {
        $insert="INSERT INTO requesttable(Fullname,Blood_Group, Location, Contact, Email,Facebook,Date,Time, Message) 
        VALUES('$name','$blood','$location','$contact','$email','$facebook', '$date','$time','$message')";
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
      <h3 class="text-capitalize text-center text-white p-lg-4">Request For Blood</h3>
      <div class="w-75 m-auto">
  <div class="form-group ">
    <input type="name" class="form-control" name="name" placeholder="Fullname">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="Blood" placeholder="Blood Group">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="Location" placeholder="Location">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="Contact" placeholder="Contact no.">
  </div>
  <div class="form-group">
    <input type="email" name="emailaddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
</div>
<div class="form-group ">
    <input type="name" class="form-control" name="Facebook" placeholder="Facebook Account">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="date" placeholder="Date">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="time" placeholder="Time">
  </div>
  <div class="form-group ">
  <textarea name="message" class="form-control" placeholder="Your Message" rows="5"></textarea>
  </div>
 

<div>

   <input type="submit" name="submit" class="btn btn-success" value="Submit Request">
</div>
</form>

</div>
</form>
</section>
</body>




<?php include("includes/footer.php")  ?>