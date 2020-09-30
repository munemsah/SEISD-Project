<?php include("includes/header.php")  ?>
<?php include("includes/nav.php")  ?>
<?php include("DBconnection/connection.php") ?>
<title> Donor Registration</title>



<?php

if(isset($_POST['submit'])) 
{
    $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['Gender'];
  $blood = $_POST['Blood'];
  $contact = $_POST['Contact'];
  $email = $_POST['emailaddress'];
  $facebook = $_POST['Facebook'];
  $Address = $_POST['Address'];
  $Division = $_POST['Division'];
  $District = $_POST['District'];
  $Nationality = $_POST['Nationality'];
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));


    if($name == "" || $age == "" || $gender == "" ||  $blood == "" || $contact == "" || $facebook == "" || $email == "" 
    || $Address == "" || $Division == "" || $District == "" || $Nationality == "" || $file == "") 
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else
    {
        $insert1="INSERT INTO donortable(Fullname,Age,Gender,Blood_Group, Contact, Email,Facebook, Address,Division,District,Nationality, Photo) 
        VALUES('$name', '$age','$gender','$blood','$contact','$email','$facebook', '$Address','$Division','$District','$Nationality','$file')";
    }

        if (mysqli_query($conn, $insert1)) 
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
             echo "Error: " . $insert1 . "<br>" . mysqli_error($mysqli);
        }
}


?>

<body>
  <section class="donor">

 

  <form class="reg-box2 border-warning" action="" method="post" enctype="multipart/form-data">
      <h3 class="text-capitalize text-center text-white p-lg-4">Register as a Donor</h3>
      <div class="w-75 m-auto">
  
  <div class="form-group">
    <input type="text" class="form-control" name="name"  placeholder="Full Name">
  </div>
  <div class="form-group ">
    <input type="text" class="form-control" name="age"  placeholder="Age">
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

  <div class="form-group">
    <input type="text" class="form-control" name="Contact"  placeholder="Contact no.">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="emailaddress"  placeholder="Email Address">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="Facebook"  placeholder="Facebook ID Link">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="Address"  placeholder="Full Address">
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

  <div class="form-group">
  <select name="Nationality" class="form-control">
        <option selected>Nationality...</option>
        <option>Bangladeshi</option>
      </select>  
  </div>
    
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="image">Upload your Image</label>
  </div>
<br>
<br>
<div>
   <input type="submit" name="submit" class="btn btn-success" value="Submit">
</div>


</form>
</section>
</body>




<?php include("includes/footer.php")  ?>