<?php 
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):
	
	if (isset($_POST['firstname'])) { $firstname = $_POST['firstname']; }
	if (isset($_POST['lastname'])) { $lastname = $_POST['lastname']; }
	if (isset($_POST['email'])) { $email = $_POST['email']; }
	if (isset($_POST['company'])) { $company = $_POST['company']; }
	if (isset($_POST['subject'])) { $subject = $_POST['subject']; }
	if (isset($_POST['comments'])) { $comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING); }
		
$formerrors = false;
	
	if ($firstname === ''):
		$err_firstname = '<div class="error">Sorry, a first name is required</div>';
		$formerrors = true;
	endif; //input field empty
	
	if ($lastname === ''):
		$err_lastname = '<div class="error">Sorry, a last name is required</div>';
		$formerrors = true;
	endif; //input field empty
	
	if ($email === ''):
		$err_email = '<div class="error">Sorry, an email is required</div>';
		$formerrors = true;
	endif; //input field empty
	
	/*$formdata = array (
		'firstname' => $firstname,
		'lastname' => $lastname,
		'email' => $email,
		'company' => $company,
		'subject' => $subject,
		'comments' => $comments,
	);*/
	
	if (!($formerrors)) :
		$to = "beccahmuir@yahoo.com";
		$subject = "$subject -- Becca Muir Website Email";
		$message = "Name: $firstname $lastname ($email) 
Company: $company  
Message: $comments";
		
		$replyto = "From: $email \r\n".
				   "Reply-To: beccahmuir@yahoo.com \r\n";
		
		if (mail($to, $subject, $message)):
			$msg = "Thank you for your email, you will be hearing from me shortly.  If you need to contact me urgently please call: 07854 618 436";
		else:
			$msg = "There was a problem sending your message.  If you prefer you can email Becca directly at: beccahmuir@yahoo.com";
		endif; //mail form data
	else:
		$msg = "There were problems with form validation";		
	endif; //check for form errors
	
endif; //form submitted
?>