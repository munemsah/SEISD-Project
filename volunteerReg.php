<?php include("includes/header.php")  ?>
<?php include("includes/nav.php")  ?>


<body>
  <section class="image">

    <form class="reg-box border-warning" action="abcd.php" method="post">
      <h3 class="text-capitalize text-center text-white p-lg-4">Register as a Volunteer</h3>
      <div class="w-75 m-auto">
  <div class="form-group ">
    <input type="name" class="form-control" name="name" placeholder="Fullname">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="Age" placeholder="Age">
  </div>
   <div class="form-group ">
    <input type="name" class="form-control" name="Location" placeholder="Location">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="Blood" placeholder="Blood Group">
  </div>
  <div class="form-group ">
    <input type="name" class="form-control" name="Contact" placeholder="Contact no.">
  </div>
  <div class="form-group">
    <input type="email" name="emailaddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
</div>
  <div class="form-group">
    <input type="password" class="form-control" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    
  </div>

<div>

   <input type="submit" name="submit" class="btn btn-success" value="Create My Account">
</div>
<p class="text-warning pt-4">
      Already a member: <a class="text-white" href="proLogin.php">SIGN IN</a>
    </p>
</form>

</div>
</form>
</section>
</body>




<?php include("includes/footer.php")  ?>