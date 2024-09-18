<?php

function imagesPath($path){
    return "subpages/expirements/" . $path;
}

?>

<!DOCTYPE html>
<html lang="en">
<head><?php include("../views/partials/head.php")?> </head>
<body data-scroll-lock="disabled" id="body">

<!--Header Content -->
<div id="lyt1-header" class="top-container">
    <div class="top-wrapper">
        <!--Navigation -->
        <?php include("partials/header.php")?>
        <!--Drop Down Menu -->
        <?php include("components/dropNav.php")?>
       

    </div>
</div>

<!--Main Content -->
<main class="main-container" id="lyt1-main">
    <div class="main-wrapper">
     <!--Hero Content -->
     <?php include("sections/hero.php")?>
     <!--Topics Content -->
     <?php include("sections/companyTopics.php")?>
     <!--News Content -->
     <?php include("sections/companyNews.php")?>
    <!--Expert Content -->
     <?php include("sections/companyExperts.php")?>
         <!--Featured Video -->
     <?php include("sections/featuredVideo.php")?>
      
    </div>
</main>

<!--Footer-->
<?php include("partials/footer.php")?> 
<!--Dialog-->
<?php include("components/dialog.php")?>
<!--Script-->
<?php include("partials/script.php")?> 
</body>
</html>