<?php include("DBconnection/connection.php");



 
 if (isset($_POST['action'])) {
 	$sql = "SELECT * FROM donortable where Blood_Group !=''";

 	if (isset($_POST['Blood_Group'])) {
 		$Blood_Group = implode("','", $_POST['Blood_Group']);
 		$sql .="AND Blood_Group IN('".$Blood_Group."')";
 	}
 	if (isset($_POST['District'])) {
 		$District = implode("','", $_POST['District']);
 		$sql .="AND District IN('".$District."')";
 	}

 	$result = $conn->query($sql);
 	$output='';

 	if($result->num_rows>0){ 
 		while($row=$result->fetch_assoc()){
 			$output .='<div class="col-md-3 mb-2">
					<div class="card-deck">
						<div class="card border-secondary">
							
						'. '<img src= "data:image/jpeg;base64,'.base64_encode($row['Photo']).'" height="200" width="200" class="card-img-top" > 
						'.'		
							<div class="card-body">
								<h5 class="card-title text-danger">Blood Group: '.$row['Blood_Group'].'</h5>
								<p>
									Full Name : '.$row['FullName'].' <br>
									Age : '.$row['Age'].' <br>
									Gender : '.$row['Gender'].' <br>
									Contact : '.$row['Contact'].' <br>
									Email ID : '.$row['Email'].' <br>
									Facebook ID : '.$row['Facebook'].' <br>
									Address : '.$row['Address'].' <br>
									Division : '.$row['Division'].' <br>
									District : '.$row['District'].' <br>
								</p>
								<a href="#" class="btn btn-danger btn-block"> Contact </a>
							</div>
						</div>
					</div>
				</div>';

 		}
 	}
 	else {

 		$output= "<h3>No Blood Available </h3>";
 	}
 	echo $output;
 }


 ?>


