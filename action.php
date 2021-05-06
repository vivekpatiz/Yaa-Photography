<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['number'];
		$msg=$_POST['message'];
        $email_from = 'Malalaikavingan@kavidhai.com';
		$to='michealvivek12@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Email :".$email."\n"."Comment:"."\n".$msg;
		$headers="From: ".$email_from;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Successfully Sent! Thanks "." ".$name.", we will contact you soon !!</h1>";
			
		}
		else{
			echo "Something went wrong!";
		}
	}
?>


