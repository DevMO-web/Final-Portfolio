<?php

function imagesPath($path){
    return "subpages/expirements/" . $path;
}

?>


<!DOCTYPE html>
<html lang="en">

<head><?php include("../views/partials/head.php")?> </head>
<body id="lyt1">
<!--Header Content -->
<div id="lyt1-header" class="top-container">
    <div class="top-wrapper">
        <!--Navigation -->
        <?php include("partials/header.php")?>
        <!--Hero Content -->
        <?php include("sections/hero.php")?>

    </div>
</div>
<!--Main Content -->


<main class="main-container" id="lyt1-main">
    <div class="main-wrapper">
    <!--Articles Content -->
    <?php include("sections/articles.php")?>
     <!--About Content -->
     <?php include("sections/about.php")?>
     <!--Newsletter Component -->
     <?php include("components/newsletter.php")?>
    </div>
</main>
<!--Footer-->
<?php include("partials/footer.php")?> 
<?php include("partials/script.php")?> 
</body>
</html>