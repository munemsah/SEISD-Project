<?php
    $con = new mysqli("localhost","root","","blueblood");   /* Connection code(Connect with database) */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/scripts.js"></script>
    <meta charset="UTF-8">
    <title>Display Data</title>
    <style>
        body{
            margin: 5% auto 0;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>

    <center><h1>Data Display & Delete</h1></center>
    <table class="table table-bordered table-striped" align="center" border="1">
        <tr>
            <th>fullname</th>
            <th>Blood_Group</th>
            <th>Contact</th>
            <th>District</th>
            <th>Action</th>
        </tr>
          
        <?php
	/* Fetch data from databse(select query) */
            $res = $con->query("select * from donortable") or die(mysqli_error($con));
            while($row = mysqli_fetch_array($res))
            {
        ?>
        <tr>
            <td><?php echo $row["FullName"]; ?></td>
            <td><?php echo $row["Blood_Group"]; ?></td>
            <td><?php echo $row["Contact"]; ?></td>
            <td><?php echo $row["District"]; ?></td>
            <td> <a href="?delete=<?php echo $row["id"]; ?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
    
    <?php
	/* Delete code.Wehen click on delete link this will perform.!*/
        if(isset($_REQUEST["delete"]))
        {
			$query3="DELETE from donortable where id='".$_REQUEST["delete"]."'";
            mysqli_query($con,$query3) or die(mysqli_error($con));
            echo "<script>alert('Data deleted successfully..!');window.location='5-delete.php';</script>";   
        }
    ?>
</body>
</html>