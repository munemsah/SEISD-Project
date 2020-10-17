<?php include("includes/header.php")  ?>
<?php include("includes/nav.php")  ?>
<?php include("DBconnection/connection.php") ?>
<title>BloodRequest </title>


<?php


if(isset($_POST['submit'])) 
{
    $name = $_POST['name'];
  $gender = $_POST['Gender'];
  $blood = $_POST['Blood'];
  $contact = $_POST['Contact'];
  $email = $_POST['emailaddress'];
  $facebook = $_POST['Facebook'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $location = $_POST['Location'];
  $Division = $_POST['Division'];
  $District = $_POST['District'];
  $message = $_POST['message'];
	
    if($name == "" ||  $gender == "" || $blood == "" || $contact == ""  || $email == "" || $date == "" 
    || $time == "" || $Division == "" || $District == "" || $message == "" ) 
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else
    {
        $insert="INSERT INTO bloodrequest(FullName,Gender,Blood_Group, Contact, Email,Facebook,Date,Time, Location,Division,District, Message) 
        VALUES('$name','$gender','$blood','$contact','$email','$facebook', '$date','$time','$location','$Division','$District','$message')";
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
    <input type="name" class="form-control" name="name" placeholder="Full Name">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <select name="Gender"  class="form-control">
        <option selected>Gender...</option>
        <option>Male</option>
        <option>Female</option>
      </select>
  </div>
  <div class="form-group col-md-6">
  <select name="Blood"  class="form-control">
        <option selected>Blood Group...</option>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>AB+</option>
        <option>AB-</option>
        <option>O+</option>
        <option>O-</option>

      </select>
  </div>
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

  <div class="form-row">
    <div class="form-group col-md-6">
       <input type="name" class="form-control" name="date" placeholder="Date(DD-MM-YY)">
    </div>
    <div class="form-group col-md-6">    
    <input type="name" class="form-control" name="time" placeholder="Time(HH.MM AM/PM)">
    </div>
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="Location" placeholder="Location(Hospital)">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <select name="Division"  class="form-control">
        <option selected>Division...</option>
        <option>Chittagong</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <select name="District"  class="form-control">
        <option selected>District...</option>
        <option>Chittagong</option>
        <option>Cox's Bazar</option>
        <option>Rangamati</option>
        <option>Bandarban</option>
        <option>Khagracchari</option>
        <option>Feni</option>
        <option>Comilla</option>
        <option>Chadpur</option>
        <option>Lakshimipur</option>
        <option>Noakhali</option>
        <option>Brahmanbaria</option>
      </select>
    </div>
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