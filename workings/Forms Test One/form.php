<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="../../_css/form.css" rel="stylesheet" type="text/css"><style type="text/css">
</style>
<script language="JavaScript">
function formValidator(theForm) 
{
	if (theForm.firstname.value.length < 1)
	{
		alert("Please enter your first name.");
		theForm.firstname.focus();
		return (false);
	}
	if (theForm.firstname.value == "")
	{	
		alert("Please enter your first name.");
		theForm.firstname.focus();
		return (false);
	}
		if (theForm.lastname.value.length < 1)
	{
		alert("Please enter your last name.");
		theForm.lastname.focus();
		return (false);
	}
	if (theForm.lastname.value == "")
	{	
		alert("Please enter your last name.");
		theForm.lastname.focus();
		return (false);
	}
	if (theForm.email.value == "")
	{
		alert("Please enter an email address.");
		theForm.email.focus();
		return (false);
	}
	if (theForm.email.value.length < 5)
	{
		alert("Please enter a valid email address.");
		theForm.email.focus();
		return (false);
	}
	return (true);
}
</script>
<?php 
if ($validForm) {
		$to = 'beccahmuir@yahoo.com';
		$subject = 'BM Website Email';

		$message="Subject:   $subject\r\n";
		$message .= "Form Name: {$_POST['formName']}\r\n\r\n";
		$message .= "First Name: {$_POST['firstname']}\r\n"; 
		$message .= "Last Name: {$_POST['lastname']}\r\n";
		$message .= "Company: {$_POST['company']}\r\n"; 
		$message .= "Subject: {$_POST['subject']}\r\n"; 
		$message .= "Email Address: {$_POST['email']}\r\n";
		if ($_POST['comments']) {
			$message .= "Comments: {$_POST['comments']}\r\n";	
		}
  		
		$headers = "From: {$_POST['email']}\r\n";
		
		mail($to,$subject,$message,$headers);
		
		header("Location: thankyou.php");
  		
		exit;
		}		
?>
</head>

<body>
<form action="contactUsAction.php" method="post" name="frmRequest" id="frmRequest" onSubmit="return formValidator(this)">
  <fieldset>
    <legend>
    	<ul>	
        	<li>
        	  <label for="firstname" class="text">First Name</label>
        	  <input type="text" name="firstname" id="firstname" tabindex="10">
        	</li>
        	<li>
        	  <label for="lastname" class="text">Last Name</label>
        	  <input type="text" name="lastname" id="lastname" tabindex="20">
        	</li>
            <li>
              <label for="company" class="text">Company</label>
              <input type="text" name="company" id="company" tabindex="30">
            </li>
            <li>
              <label for="subject" class="text">Subject</label>
              <input type="text" name="subject" id="subject" tabindex="40">
            </li>
            <li>
              <label for="email" class="text">Email</label>
              <input type="email" name="email" id="email" tabindex="50">
            </li>
        </ul>
    </legend>
  </fieldset>
  <fieldset>
  	<legend>
    	<ul>
        	<li class="commentsbox">
        	  <label for="comments"></label>
        	  <textarea name="comments" id="comments" tabindex="60"></textarea>
        	</li>
            <li class="button">
              <input name="submit" type="submit" id="submit" tabindex="70" value="Submit">
            </li>
        </ul>
    </legend>
  </fieldset>
</form>
</body>
</html>
