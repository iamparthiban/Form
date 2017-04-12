<?php
if($_POST){
	$typeofcourse = $_POST['typeofcourse'];
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];	
	$dob = $_POST['dob'];
    $gender = $_POST['gender'];	
	$fathername = $_POST['fathername'];
	$fatherno = $_POST['fatherno'];	
	$fatheremail = $_POST['fatheremail'];	
	$mothername = $_POST['mothername'];	
	$motherno = $_POST['motherno'];	
	$motheremail = $_POST['motheremail'];	

			//send email

			$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i"; 
            if (preg_match($pattern, trim(strip_tags($email)))) { 
                $cleanedFrom = trim(strip_tags($email)); 
            } else { 
                return "The email address you entered was invalid. Please try again!"; 
            } 

			$message = '<html><body><table rules="all" style="border: 1px solid #9E9E9E;width: 500px;" cellpadding="10">';
			$message .= "<tr><td colspan='2' style='text-align: center;'><strong>Applicant Details</strong></td></tr>";			
			$message .= "<tr><td style='background: #ddd;'><strong>Name</strong></td><td>" . strip_tags($name) . "</td></tr>";
			$message .= "<tr><td style='background: #ddd;'><strong>Email</strong></td><td>" . strip_tags($email) . "</td></tr>";
			$message .= "<tr><td style='background: #ddd;'><strong>Phone</strong></td><td>" . strip_tags($phone) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>DOB</strong></td><td>" . strip_tags($dob) . "</td></tr>";
			$message .= "<tr><td style='background: #ddd;'><strong>Gender</strong></td><td>" . strip_tags($gender) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Father Name</strong></td><td>" . strip_tags($fathername) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Father's No.</strong></td><td>" . strip_tags($fatherno) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Father's Mail</strong></td><td>" . strip_tags($fatheremail) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Mother Name</strong></td><td>" . strip_tags($mothername) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Mother's No.</strong></td><td>" . strip_tags($motherno) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Mother's Mail</strong></td><td>" . strip_tags($motheremail) . "</td></tr>";				
			$message .= "<tr><td style='background: #ddd;'><strong>Type Of Course</strong></td><td>" . strip_tags($typeofcourse) . "</td></tr>";	
						
			$message .= "<tr><td colspan='2' style='text-align: center;'><strong>Academic Details</strong></td></tr>";			
			$message .= "<tr><td style='background: #ddd;'><strong>Name</strong></td><td>" . strip_tags($name) . "</td></tr>";
			$message .= "<tr><td style='background: #ddd;'><strong>Email</strong></td><td>" . strip_tags($email) . "</td></tr>";
			$message .= "<tr><td style='background: #ddd;'><strong>Phone</strong></td><td>" . strip_tags($phone) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>DOB</strong></td><td>" . strip_tags($dob) . "</td></tr>";
			$message .= "<tr><td style='background: #ddd;'><strong>Gender</strong></td><td>" . strip_tags($gender) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Father Name</strong></td><td>" . strip_tags($fathername) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Father's No.</strong></td><td>" . strip_tags($fatherno) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Father's Mail</strong></td><td>" . strip_tags($fatheremail) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Mother Name</strong></td><td>" . strip_tags($mothername) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Mother's No.</strong></td><td>" . strip_tags($motherno) . "</td></tr>";	
			$message .= "<tr><td style='background: #ddd;'><strong>Mother's Mail</strong></td><td>" . strip_tags($motheremail) . "</td></tr>";				
			$message .= "<tr><td style='background: #ddd;'><strong>Type Of Course</strong></td><td>" . strip_tags($typeofcourse) . "</td></tr>";			
			$message .= "</table></body></html>";

			$to = 'asrafnaveen488@gmail.com';			
			$subject = 'New Application';			
			$headers = "From: " . $cleanedFrom . "\r\n";
			$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if (mail($to, $subject, $message, $headers)) {
              echo 'Your message has been sent.';
            } else {
              echo 'There was a problem sending the email.';
            }
}
?>