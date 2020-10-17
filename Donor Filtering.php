<?php include("DBconnection/connection.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtering</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<h3 class="text-center text-light bg-danger p-3">Find your Precious Blood</h3>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3">
			<h5>Filter Donor</h5>
			<hr>
			<h6 class="text-danger">Select Blood Group</h6>
			<ul class="list-group">
			<?php
			$sql="SELECT DISTINCT Blood_Group FROM donortable ORDER BY Blood_Group";
			$result=$conn->query($sql);
			while($row=$result->fetch_assoc()){ 
			?>
			<li class="list-group-item">
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input blood_check" value="<?= $row['Blood_Group']; ?>" id="Blood_Group"><?= $row['Blood_Group']; ?>
					</label>
				</div>
			</li>
		<?php } ?>	
		</ul>
<br>
		<h6 class="text-danger">Select District</h6>
			<ul class="list-group">
			<?php
			$sql="SELECT DISTINCT District FROM donortable ORDER BY District";
			$result=$conn->query($sql);
			while($row=$result->fetch_assoc()){ 
			?>
			<li class="list-group-item">
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input blood_check" value="<?= $row['District']; ?>" id="District"><?= $row['District']; ?>
					</label>
				</div>
			</li>
		<?php } ?>	
		</ul>


		</div>
		<div class="col-lg-9">
			<h5 class="text-center" id="textChange">All Blood Donor</h5>
			<hr>
			<div class="text-center">
				<img src="loader.gif" id="loader" width="" style="display:none">
			</div>
			<div class="row" id="result">
				<?php
				$sql="SELECT * FROM donortable";
				$result=$conn->query($sql);
				while($row=$result->fetch_assoc()){
				?>
				<div class="col-md-3 mb-2">
					<div class="card-deck">
						<div class="card border-secondary">
						<?= '<img src= "data:image/jpeg;base64,'.base64_encode($row['Photo']).'" height="200" width="200" class="card-img-top" > 
                            '?>		 
							
							<div class="card-body">
								<h5 class="card-title text-danger">Blood Group: <?= $row['Blood_Group']; ?></h5>
								<p>
									Full Name : <?= $row['FullName']; ?> <br>
									Age : <?= $row['Age']; ?> <br>
									Gender : <?= $row['Gender']; ?> <br>
									Contact : <?= $row['Contact']; ?> <br>
									Email ID : <?= $row['Email']; ?> <br>
									Facebook ID : <?= $row['Facebook']; ?> <br>
									Address : <?= $row['Address']; ?> <br>
									Division : <?= $row['Division']; ?> <br>
									District : <?= $row['District']; ?> <br>
								</p>
								<a href="#" class="btn btn-danger btn-block"> Contact </a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>



    <!-- Start JQuery -->
<script type="text/javascript">
	$(document).ready(function(){

		$(".blood_check").click(function(){
			$("#loader").show();

			var action = 'data';
			var Blood_Group = get_filter_text('Blood_Group');
			var District = get_filter_text('District');

			$.ajax({
				url:'action.php',
				method :'POST',
				data:{action:action,Blood_Group:Blood_Group,District:District},
				success:function(response){
					$("#result").html(response);
					$("#loader").hide();
					$("#textChange").text("Filtered Blood");
				}

			});

		});

		function get_filter_text(text_id){
			var filterData = [];
			$('#'+text_id+':checked').each(function(){
				filterData.push($(this).val());
			});
			return filterData;
		}
	});

</script>

</body>
</html>