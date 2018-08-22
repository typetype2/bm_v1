<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>

<link href="../../_css/form.css" rel="stylesheet" type="text/css">
</head>

<body>
<form action="#" method="POST" name="theform" id="theform" class="group">
  <fieldset>
    <legend>
    <span id="formerror" class="error"></span>
    	<ul>	
        	<li>
        	  <label for="firstname" class="text">First Name</label>
        	  <input type="text" name="firstname"  required placeholder="Please enter a first name" id="firstname" tabindex="10">
        	</li>
        	<li>
        	  <label for="lastname" class="text">Last Name</label>
        	  <input type="text" name="lastname"  required placeholder="Please enter a last name" id="lastname" tabindex="20">
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
              <input type="email" name="email" required placeholder="Please enter an email address" pattern="{3,}" id="email" tabindex="50">
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
<script src="emailform.js"></script>
</body>
</html>