<?php
	require "assets/includes/connect.php";  //Connect - includes session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<!--Imports the metadata and information that will go in the <head> of every page-->
		<?php include('Header.html'); ?>
	</head>
	<body>
		<!--Imports site-wide main styling-->
		<link href='main-style.css' rel='stylesheet' type='text/css'>
	
		<!--Imports navigation bar-->
		<?php include 'navbar.php'; ?>
        
        <div clas="container main">
            <div class="main-inner">
                <div class="box" style="width:80%;margin-left:auto;margin-right:auto">
                    <h1 id="opensprites-heading">Privacy Policy</h1>
                    <div class="box-content">
                        <h3>What information does the OpenSprites website collect from it&#39s visitors?</h3>
                        <h4>User generated information (information you give us)</h4>
                        <p>
                        When you sign up for an account on OpenSprites, you will be required to enter the username of your account on Scratch, a new password and a legitimate email address. It is advised that you should keep your OpenSprites and Scratch passwords different. OpenSprites will not willingly or knowingly collect your password for other websites.
                        </p>
                        <h4>Information sent from your computer to our servers (your browser automatically sends us limited information)</h4>
                        <p>When you connect to any website on the internet, your computer will connect to another computer. During this process, we learn of your IP address, a number unique to your network. Your browser will also send us your user-agent (operating system and browser information). This is automatic as standard, and every web-browser sends this information unless you have otherwise specified. When signing up for an OpenSprites account, we will log your IP address into our secure database. This enables us to keep the site safe, and block malicious intrusions. At this moment in time, we do not have systems in place to read your operating system and browser information. However, our hosting provider, x10hosting, may collect and use this data, as well as logging your IP address and geo-location.</p>
                        <h4>User generated content (media that you upload to our site)</h4>
                        <p>When you upload media to our website, we will keep related information about the media [NOTE: EXPAND THIS]</p>
                        <h3>What information does OpenSprites place on its visitor&#39s computer systems?</h3>
                        <h4>Cookies (short pieces of text which are stored on a user&#39s computer by their browser)</h4>
                        <p>To store information about account authentication, we use &#39cookies&#39. Cookies are short pieces of text which are stored on your computer by your browser. Cookies make sure we can store your logged-in state between page navigations.</p>
                        <b>
                        <p> 
                        Privacy policy revision one. Originally written by cheeseeater on 08/02/2015. Most recent edits by cheeseeater on 09/02/2015 This policy is subject to change without prior notice.
                        </p>
                        </b>
                        
                    </div>
                </div>
            </div>
        </div>
        
		<!-- footer -->
	<?php echo file_get_contents('footer.html'); ?>
	</body>
</html>
