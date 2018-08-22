<?php include "process.php"; ?>
<!doctype html>
<html>
<head>
	<title>Becca Muir - Contact</title>
	<meta name="description" content="Becca Muir: Designer & Illustrator. Information about how to contact me.">
    <meta name="keywords" content="contact, information, form">
    <meta name="author" content="Becca Muir">
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="../_images/background/favicon.png"> 
    <link href="../_css/form.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!--[if lt IE 9]>
	<script src="../_scripts/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
<!--container starts-->
<div id="container">
<!--header starts-->
  <header>
  <div class="page">
    	<div class="logo"><a href="../index.html" title="Becca Muir - Designer &amp; Illustrator" target="_self" id="bm-logo">Becca Muir - Designer &amp; Illustrator</a> </div><!--end of logo-->
    	<div class="diamond">
    	</div><!--end of diamond-->
      <nav>
      	<ul>
          <li><a href="../design/design.html">Design </a></li>
          <li><a href="../illustration/illustration.html">Illustration</a></li>
          <li><a href="http://beccahmuir.tumblr.com/" target="new">Blog</a></li>
          <li><a href="../about/about.html">About</a></li>
          <li><a class="currentPage" href="contact.php">Contact</a></li>
        </ul>
      </nav><!--end of nav-->
  </div><!--end of page-->
  </header><!--end of header-->
<!--content starts--> 
  <section class="project_content">
  	<article class="projectBox">
    	<div class="contactInfo">
        	<p>If you like my work and want to get in touch, please feel free to write to me.</p>
        </div><!--end of contactInfo -->
        <?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg , '</p></div>'; } ?>
		<form id="myform" name="theform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
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
        <div class="contactInfo">
        	<p><em>beccahmuir@yahoo.com</em><br><br>
You can also find me on the networks linked at the bottom of the page</p>
        </div><!--end of contactInfo -->
    </article><!--end of projectBox -->
	
  </section><!--end of project_content-->
<!--footer starts-->    
  <footer>
  	<div class="page">
    	<div class="copyright">
       	  <p>Site created by Becca Muir. <br>
       	  &copy; 2013 Becca Muir. All rights reserved.</p>
        </div><!--end of copy-->
      <div class="waxseal">
        </div><!--end of seal-->
        <div class="icons">
        	<a class="twitter" href="https://twitter.com/beccahmuir" target="new"></a>
            <a class="flickr" href="http://www.flickr.com/photos/beccamuir2012/" target="new"></a>
            <a class="tumblr" href="http://beccahmuir.tumblr.com/" target="new"></a>
            <a class="linkedin" href="http://www.linkedin.com/profile/view?id=243995410&trk=nav_responsive_tab_profile" target="new"></a>
        </div><!--end of icons-->
    </div><!--end of page -->
  </footer><!--end of footer-->
</div><!--end of container-->
<script>
	$(document).ready(function() {
        $("#myform").validate();
    }); //document ready
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54317366-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>