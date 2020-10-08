<?php include("includes/header.php")  ?>
<?php include("DBconnection/connection.php") ?>
<title>admin Reg. </title>


<?php


if(isset($_POST['submit'])) 
{
    $Fullname = $_POST['Fullname'];
  $Gender = $_POST['Gender'];
  $Blood = $_POST['Blood'];
  $Contact = $_POST['Contact'];
  $Email = $_POST['Email'];
  $Division = $_POST['Division'];
  $District = $_POST['District'];
  $Location = $_POST['Location'];
  $Password = $_POST['Password'];
 
	
    if($Fullname == "" ||  $Gender == "" || $Blood == "" || $Contact == ""  || $Email == "" 
    
    || $Division == "" || $District == "" || $Location == "" || $Password="" )
    {
        echo "All fields should be filled. Either one or many fields are empty.";
    }
    else
    {
        $insert="INSERT INTO adminreg(Fullname, Gender, Blood, Contact, Email, Division, District, Location, Password) 
       VALUES('$Fullname','$Gender','$Blood','$Contact','$Email','$Division','$District','$Location','$Password')";
    }

        if (mysqli_query($conn, $insert)) 
        { 
             echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
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
<title>About us</title>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Blue Blood</h4>
      <span class="text-muted">Our website is totally non-commercial non-political, non-communal, non-regional, non-racial, secular and voluntary social organization. Our Goals and objectives are Initiating social movement to build up a healthy society through motivating voluntary blood donation, donating blood voluntarily and others services and awareness programs.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

</div>
  <section class="image">

    <form class="reg-box border-warning" action="" method="post">
      <h3 class="text-capitalize text-center text-white p-lg-4">Registration as a admin</h3>
      <div class="w-75 m-auto">
  <div class="form-group ">
    <input type="name" class="form-control" name="Fullname" placeholder="Full Name">
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
    <input type="email" name="Email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Email Address">
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
    <div>
    <div class="form-group ">
    <input type="name" class="form-control" name="Location" placeholder="Details Location">
  </div>
  <div class="form-group ">
    <input type="password" class="form-control" name="Password" placeholder="Password">
  </div>

<div>

  </div>
  </div>
   <input type="submit" name="submit" class="btn btn-success" value="submit">
</div>
</form>

</div>
</form>
</section>
</body>


<?php include("includes/footer.php")  ?>