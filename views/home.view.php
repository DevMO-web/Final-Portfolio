<!DOCTYPE html>
<html lang="en">
<head>
<!--Head Tag Content -->
<?php include("partials/head.php")?> 
</head>
<body  class="main-body" id="home-main" data-menu="non-active">
<!--Navigation -->
<?php include("partials/header.php")?>
<!--Hero Contenct -->
<?php include("sections/hero.php")?>
<!--Main Contenct -->
<main class="home-main-container">
    <div class="home-main-wrapper">
    <!--About Contenct -->
    <?php include("sections/about.php")?>
       <!--Project Contenct -->
       <?php include("sections/project.php")?>
       <!--Project Expirements -->
       <?php include("sections/expirements.php")?>
 
  
 
    
    
    </div>
</main>

<!--Footer-->
<?php include("partials/footer.php")?> 
</main>
<?php include("partials/script.php")?> 
</body>
</html>