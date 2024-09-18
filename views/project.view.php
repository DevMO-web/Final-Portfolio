

<!DOCTYPE html>
<html lang="en">
<head>
<?php include("partials/head.php")?> 
</head>
<body>
    <main class="project-main-container">
        <div class="project-main-wrapper" sidebar-menu="open">
              <!--ImageShowcase Contenct -->
            <?php view("sections/project.imgShowcase.php",['project' => $projects]); ?>
             <!--ImageShowcase Contenct -->
             <?php view("sections/project.sidebar.php",['project' => $projects]); ?>
        </div>
    </main>

    
    <?php include("partials/script.php")?> 
</body>
</html>