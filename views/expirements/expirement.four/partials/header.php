
<?php 
//Temporary
$navLinkTest = [
    "About Us",
    "Events",
    "Scholarships",
    "Awards",
    "News & Resources",
    "Projects"
];
?>

<header type-id="ph2" class="ph2-header-container" type-partial="header" data-global="boundary">
    <div class="ph2-header-wrapper">
        <div class="ph2_main-nav-container">
            <div class="ph2_main-nav-wrapper" type-target="wrapper">
                <div class="ph2__name-container">
                    <div class="ph2__name-wrapper">
                        <a href="#"><img src="<?=(imagesPath("expirement.four/images/Arrell-food-institute.svg"))?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="ph2__nav-grouping-container" nav-component="container" nav-component-active="non-active">
                    <div class="ph2__nav-grouping-wrapper">
                        <nav class="ph2___nav-container">
                            <ul class="ph2___nav-wrapper">
                                <?php foreach($navLinkTest as $navLink):?>
                                    <li><a href="<?='#' /*$navLink*/ ?>"><?=$navLink?></a></li>
                                <?php endforeach;?>
                            </ul>
                            <div class="ph2___search-container">
                                <!--SVG HERE-->
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="ph2__nav-mobile-btn-container" nav-component="btn-container" >
                    <div class="ph2__nav-mobile-btn-wrapper">
                        <img src= "<?=(imagesPath("expirement.four/images/Ham.svg"))?>" alt="" nav-component-action="closed">
                    </div>
                </div>
            </div>
        </div>  
       
    </div>
</header>


