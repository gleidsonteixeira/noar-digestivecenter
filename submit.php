<?php
if($_POS['news_name']){
	
			$to = "test@test.com";
		$from =  $_POST["news_email_address"];
		$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name: </strong>".$_POST["news_name"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["news_email_address"]."<br />";
		$subject = 'Newsletter Subscription';		
		$headers = "From: ".$_POST["news_email_address"]."\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
	    $send =	mail($to,$subject,$message,$headers);



if($send)
{
	echo "success";
}
else
{
	echo "error";
	}
}



if($_POS['fname']){
			$to = "test@test.com";
		$from =  $_POST["email_address"];
		$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Name: </strong>".$_POST["fname"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["email_address"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Subject: </strong>".$_POST["subject"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["msg"]."<br />";
		$subject = 'Contact Us';		
		$headers = "From: ".$_POST["email_address"]."\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
	    $send =	mail($to,$subject,$message,$headers);



if($send)
{
	echo "success";
}
else
{
	echo "error";
	}
}


if($_POS['app_fname']){
			$to = "test@test.com";
		$from =  $_POST["app_email_address"];
		$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>First Name: </strong>".$_POST["app_fname"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Last Name: </strong>".$_POST["app_lname"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["app_email_address"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Phone No: </strong>".$_POST["app_phone"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Appointment Date: </strong>".$_POST["datepicker"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Gender: </strong>".$_POST["gender"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["app_msg"]."<br />";
		$subject = 'Book Appointment';		
		$headers = "From: ".$_POST["app_email_address"]."\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
	    $send =	mail($to,$subject,$message,$headers);



if($send)
{
	echo "success";
}
else
{
	echo "error";
	}
}



?>