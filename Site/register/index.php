<?php
    require $_SERVER['DOCUMENT_ROOT']."/assets/includes/connect.php";  //Connect - includes session_start();
    if($logged_in_user !== 'not logged in') {
        header('Location: /');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        include $_SERVER['DOCUMENT_ROOT'].'/Header.html'; // Imports the metadata and information that will go in the <head> of every page
    ?>
</head>
<body>
    <!--Imports site-wide main styling-->
    <link href='/main-style.css' rel='stylesheet' type='text/css'>
    
    <?php
        include $_SERVER['DOCUMENT_ROOT']."/navbar.php"; // Imports navigation bar
    ?>
    
    <!-- Main wrapper -->
    <div class="container main" style="height:700px;">
        <div class="main-inner">
            <!--<div style="position: absolute;left: 0;right: 0;height: 70px;" class="themebg"></div>-->
            <iframe scrolling="no" src="http://opensprites.gwiddle.co.uk/forums/?p=user/join&return=http://dev.opensprites.gwiddle.co.uk/&iframe=true" style="width: 100%; height: 570px;overflow: hidden;border: none;margin-top:-100px"></iframe>
        </div>
    </div>
    
    <!-- footer -->
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'].'/footer.html'); ?>
</body>
</html>
