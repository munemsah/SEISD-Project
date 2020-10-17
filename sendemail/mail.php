<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS\nav.css">
    <link rel="stylesheet" href="CSS\vulunteer.css">
    <link rel="stylesheet" href="CSS\donor.css">



  
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>
	<h3 class="text-center text-light bg-danger p-3">Find your Precious Blood</h3>

<div class="container">

<hr>
	<?php 
		if(isset($_POST['sendmail'])) {
			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;

			// $mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, 'Blueblood');
			$mail->addAddress($_POST['email']);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['subject'];
			$mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}
		}
	 ?>
	<div class="row">
    <div class="col-md-12 col-md-offset-2 ">
        <form role="form" method="post" enctype="multipart/form-data">
        	<div class="row">
                <div class="col-sm-12 form-group">
                    <label for="email">To Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" maxlength="50">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="Need Blood for a Patient" maxlength="50">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="name">Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="4">Hello Sir, I need blood. Can you help me?</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="name">File:</label>
                    <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
                </div>
            </div>
             <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" name="sendmail" class="btn btn-lg btn-danger btn-block">Send</button>
                </div>
            </div>
        </form>
	</div>
</div>
</body>
</html>


<style type="text/css">
	.row {
		margin: 0 auto;
		width: 800px;
		 background-image: url(heart.jpg);
	}

	.row label{
		display: inline-block;
		text-align: right;
		float: left;
	}

	.row input{
		display: inline-block;
		text-align: left;
		float: right;
	}
</style>