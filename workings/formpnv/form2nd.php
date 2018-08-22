<?php include "../../contact/process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Form</title>
	<link href="file:///Macintosh HD/Applications/MAMP/htdocs/_css/form.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
</head>

<body>
<?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg , '</p></div>'; } ?>
<form id="myform" name="theform" action="<?php echo $_SERVER['../../contact/PHP_SELF'] ?>" method="POST">
	<span id="formerror" class="error"></span>
  <fieldset>
    <legend>
    	<ul>	
        	<li>
        	  <label for="firstname" class="text">First Name</label>
        	  <input type="text" required name="firstname" id="firstname" tabindex="10" value="<?php if (isset($firstname)) { echo $firstname; }?>">
              <?php if (isset($err_firstname)) {echo $err_firstname; }  ?>
        	</li>
        	<li>
        	  <label for="lastname" class="text">Last Name</label>
        	  <input type="text" required name="lastname" id="lastname" tabindex="20" value="<?php if (isset($lastname)) { echo $lastname; }?>">
              <?php if (isset($err_lastname)) {echo $err_lastname; }  ?>
        	</li>
            <li>
              <label for="company" class="text">Company</label>
              <input type="text" name="company" id="company" tabindex="30" value="<?php if (isset($company)) { echo $company; }?>">
            </li>
            <li>
              <label for="subject" class="text">Subject</label>
              <input type="text" name="subject" id="subject" tabindex="40" value="<?php if (isset($subject)) { echo $subject; }?>">
            </li>
            <li>
              <label for="email" class="text">Email</label>
              <input type="email" required name="email" id="email" tabindex="50" value="<?php if (isset($email)) { echo $email; }?>">
              <?php if (isset($err_email)) {echo $err_email; }  ?>
            </li>
        </ul>
    </legend>
  </fieldset>
  <fieldset>
  	<legend>
    	<ul>
        	<li class="commentsbox">
        	  <label for="comments"></label>
        	  <textarea name="comments" id="comments" tabindex="60"><?php if (isset($comments)) { echo $comments; }?></textarea>
        	</li>
            <li class="button">
              <input name="action" type="submit" id="submit" tabindex="70" value="Submit">
            </li>
        </ul>
    </legend>
  </fieldset>
</form>
<script>
	$(document).ready(function() {
        $("#myform").validate();
    }); //document ready
</script>
</body>
</html>