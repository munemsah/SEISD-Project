<?php include("DBconnection/connection.php") ?>

<?php include("includes/ajaxhead.php")  ?>
<?php include("includes/nav.php")  ?>



<h3 class="text-center text-light bg-info p-2">Find your Precious Blood</h3>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3">
			<h5>Filter Donor</h5>
			<hr>
			<h6 class="text-info">Select Blood Group</h6>
			<ul class="list-group">
			<?php
			$sql="SELECT DISTINCT Blood_Group FROM donortable ORDER BY Blood_Group";
			$result=$conn->query($sql);
			while($row=$result->fetch_assoc()){ 
			?>
			<li class="list-group-item">
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input blood_check" value="<? $row['Blood_Group']; ?>" id="Blood_Group"><?= $row['Blood_Group']; ?>
					</label>
				</div>
			</li>
		<?php } ?>	
		</ul>
<br>
		<h6 class="text-info">Select District</h6>
			<ul class="list-group">
			<?php
			$sql="SELECT DISTINCT District FROM donortable ORDER BY District";
			$result=$conn->query($sql);
			while($row=$result->fetch_assoc()){ 
			?>
			<li class="list-group-item">
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input blood_check" value="<? $row['District']; ?>" id="District"><?= $row['District']; ?>
					</label>
				</div>
			</li>
		<?php } ?>	
		</ul>


		</div>
		<div class="col-lg-9">
			<h5 class="text-center" id="textChange">All Blood Donor</h5>
			<hr>
			<div class="row" id="result">
				<?php
				$sql="SELECT * FROM donortable";
				$result=$conn->query($sql);
				while($row=$result->fetch_assoc()){
				?>
				<div class="col-md-3 mb-2">
					<div class="card-deck">
						<div class="card border-secondary">
							<img src= "data:image/jpeg;base64,'.base64_encode($row['Photo']).'" height="200" width="200" class="card-img-top" > 
							
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
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/footer.php")  ?>
