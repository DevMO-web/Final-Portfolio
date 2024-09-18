<?php

function imagesPath($path){
    return "subpages/expirements/" . $path;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--Head Tag Content -->
<?php include("../views/partials/head.php")?> 
</head>
<body  class="main-body" id="home-main" data-menu="non-active">
<!--Navigation -->
<?php include("partials/header.php")?>
<main class="home-main-container">
    <div class="home-main-wrapper">
        <section class="home-our-services-container">
        <div class="home-our-services-wrapper">
            <div class="home-our-services_heading-container">
                <div class="home-our-services_heading-wrapper">
                    <h2>
                        <span class="home-our-services--span-1">OUR</span>
                        <span class="home-our-services--span-2">SERVICES</span>
                    </h2>
                </div>
            </div>
            <div class="home-our-services_services-container">
                <div class="home-our-services_services-wrapper">
                    <div class="home-services__interior-design-container">
                        <div class="home-our-services__interior-design-wrapper">
                            <div class="home-our-services___interior-text-container">
                                <div class="home-our-services___interior-text-wrapper">
                                    <h3>Interior Design <span></span></h3>
                                    <p>We implement interior design for buildings of all sizes. 
                                        With a competent interior design, even a small apartment 
                                        can be significantly expanded, modernised and visually enlarged,
                                        giving it more usable space.
                                    </p>
                                </div>
                            </div>
                            <div class="home-our-services___interior-image-container">
                            <div class="home-our-services____box-container">
                                    <div class="home-our-services____box-one-wrapper">
                                        
                                    </div>
                                    <div class="home-our-services____box-two-wrapper">
                                        <div class="home-our-services____box-two-number">
                                            <span>01</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-our-services___interior-image-wrapper">
                                    <img src=<?=imagesPath("expirement.two/images/css-2/home/home-services-one.jpeg")?> alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-services__interior-design-container">
                        <div class="home-our-services__interior-design-wrapper">
                            <div class="home-our-services___interior-text-container"  id="home-our-services-order">
                                <div class="home-our-services___interior-text-wrapper">
                                    <h3>Turnkey Renovation<span></span></h3>
                                    <p>A well established system of managing all stages of
                                        work mates it possible to meet deadlines and complete 
                                        interior design without you. We visit the site, monitor the 
                                        similarity between the design project and the actual situation,
                                        and control the correspondence to the color scheme.
                                    </p>
                                </div>
                            </div>
                            <div class="home-our-services___interior-image-container">
                            <div class="home-our-services____box-container">
                                    <div class="home-our-services____box-one-wrapper" id="home-our-sevices-box">
                                        
                                    </div>
                                    <div class="home-our-services____box-two-wrapper">
                                        <div class="home-our-services____box-two-number" id="home-our-services-num">
                                            <span>02</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-our-services___interior-image-wrapper"  id="home-our-services-img">
                                    <img src=<?=imagesPath("expirement.two/images/css-2/home/home-services-two.jpeg")?> alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-services__interior-design-container">
                        <div class="home-our-services__interior-design-wrapper">
                            <div class="home-our-services___interior-text-container">
                                <div class="home-our-services___interior-text-wrapper">
                                    <h3>Selection of Materials<span></span></h3>
                                    <p>Choosing materials and interior items together with a specialist
                                        is a comprehensive and cost-effective service for the client.
                                        It helps you to purchase stylistically justified and functional 
                                        objects that will not stand out from the overall picture of your home.
                                    </p>
                                    <div class="home-services__calc-btn-container">
                        <div class="home-services__calc-btn-wrapper">
                        <a href="/">CALCULATE THE ESTIMATE</a>
                        </div>
                    </div>
                                </div>
                            
                            </div>
                            <div class="home-our-services___interior-image-container">
                            <div class="home-our-services____box-container">
                                    <div class="home-our-services____box-one-wrapper">
                                        
                                    </div>
                                    <div class="home-our-services____box-two-wrapper">
                                        <div class="home-our-services____box-two-number">
                                            <span>03</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-our-services___interior-image-wrapper">
                                    <img src=<?=imagesPath("expirement.two/images/css-2/home/home-services-three.jpeg")?> alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        </section>
        <section class="home-about-container">
            <div class="home-about-wrapper">
            <div class="home-about_heading-container">
                <div class="home-about_heading-wrapper">
                    <h2>
                        <span class="home-about--span-1">ABOUT</span>
                        <span class="home-about--span-2">COMPANY</span>
                    </h2>
                </div>
            </div>
            
            <div class="home-about_content-container">
                <div class="home-about_content-wrapper">
                <div class="box-test">
                    <span>DEV.UN</span>
                </div>
                    <div class="home-about__design-container">
                        <div class="home-about__design-wrapper">
                            <div class="home-about__design-image-container">
                                <div class="home-about__image-wrapper">
                                    <img src=<?=imagesPath("expirement.two/images/css-2/home/home-about-one.jpeg")?> alt="">
                                </div>
                            </div>
                            <div class="home-about__design-text-container">
                                <div class="home-about__design-text-wrapper">
                                    <span>45+</span>
                                    <h3>Design Projects</h3>
                                    <p>Prove that owners of large commercial facilities, owners
                                        of houses and apartments are willing to work with us. We 
                                        are happy to provide you with samples of real projects.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="home-about__design-wrapper">
                            <div class="home-about__design-image-container">
                                <div class="home-about__image-wrapper">
                                    <img src=<?=imagesPath("expirement.two/images/css-2/home/home-about-team.webp")?> alt="">
                                </div>
                            </div>
                            <div class="home-about__design-text-container">
                                <div class="home-about__design-text-wrapper">
                                    <span>20+</span>
                                    <h3>Employees</h3>
                                    <p>are always ready to answer your questions and save you time spent on repairs 
                                        and searching for interior design references.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="home-about__design-wrapper">
                            <div class="home-about__design-image-container">
                                <div class="home-about__image-wrapper">
                                    <img src=<?=imagesPath("expirement.two/images/css-2/home/home-about-contractors.jpeg")?> alt="">
                                </div>
                            </div>
                            <div class="home-about__design-text-container">
                                <div class="home-about__design-text-wrapper">
                                    <span>100+</span>
                                    <h3>Contractors</h3>
                                    <p>gurantee on-time completion of assigned tasks, personal support and thorought control 
                                        of interior design at all stages
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            </div>
        </section>
        <section class="home-portfolio-container">
            <div class="home-portfolio-wrapper">
                <div class="home-portfolio_heading-container">
                    <div class="home-portfolio_heading-wrapper">
                        <h2>
                            <span class="home-portfolio--span-1">OUR</span>
                            <span class="home-portfolio--span-2">PORTFOLIO</span>
                        </h2>
                    </div>
                </div>
                <div class="home-portfolio-main_image-gallery-container">
                    <div class="home-portfolio-main_image-gallery-wrapper">
                        <div class="home-portfolio-main__grid-block-container portfolio-main--text-block">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___text-container">
                                    <div class="home-portfolio-main___text-wrapper">
                                        <div class="home-portfolio-main____heading-container">
                                            <div class="home-portfolio-main____heading-wrapper">
                                                <h3>SAUNA DESIGN</h3>
                                            </div>
                                        </div>
                                        <div class="home-portfolio-main____content-container">
                                            <div class="home-portfolio-main____content-wrapper">
                                                <div class="home-portfolio-main_____p-container">
                                                    <div class="home-portfolio-main_____p-wrapper">
                                                    <p>Throughout this entire construction process, we paid special attention to every detail to create the perfect
                                                    envornment. From the selection of the highest quality materials to the precise
                                                    installation of each element. We intended the sauna to be not only functional, but also visually appealing.
                                                    </p>
                                                    </div>
                                                </div>
                                               
                                                <div class="home-portfolio-main_____facts-container">
                                                    <div class="home-portfolio-main_____facts-wrapper">
                                                        <h4>Location</h4>
                                                        <span>KYIV</span>
                                                        <h4>Terms of Execution</h4>
                                                        <span>30 DAYS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                       
                                    </div>
                                </div>
                                <div class="home-portfolio-main___number-container">
                                            <div class="home-portfolio-main___number-wrapper">
                                                <span>01</span>
                                            </div>
                                        </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-main--image-block-one">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-box-container">
                                    
                                    <div class="home-portfolio-main____block-one-solid">
                                    </div>
                                </div>
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-sauna-five.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-sauna--image-block-two">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-sauna-four.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-main--image-block-three">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-sauna-three.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-main--image-block-four">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-sauna-one.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-main--image-block-five">
                            <div class="home-portfolio-main__grid-block-wrapper">
                            <div class="home-portfolio-main___grid-box-container-two">
                                    <div class="home-portfolio-main____block-five-solid">
                                    </div>
                                    
                                </div>
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-sauna-two.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-portfolio-main_image-gallery-container">
                    <div class="home-portfolio-main_image-gallery-wrapper">
                        <div class="home-portfolio-main__grid-block-container portfolio-secondary--text-block">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___text-container">
                                    <div class="home-portfolio-main___text-wrapper">
                                        <div class="home-portfolio-main____heading-container">
                                            <div class="home-portfolio-main____heading-wrapper">
                                                <h3>APARTMENT DESIGN</h3>
                                            </div>
                                        </div>
                                        <div class="home-portfolio-main____content-container">
                                            <div class="home-portfolio-main____content-wrapper">
                                                <div class="home-portfolio-main_____p-container">
                                                    <div class="home-portfolio-main_____p-wrapper">
                                                    <p>
                                                        This apartment design represents modern minimalism,
                                                        using neutral shades and clean lines to create a space
                                                        full of light and harmony. Furniture of simple shapes 
                                                        and functional elements emphasize simplicity and functionality while providing 
                                                        comfort. The customer was satisfied. 
                                                    </p>
                                                    </div>
                                                </div>
                                               
                                                <div class="home-portfolio-main_____facts-container">
                                                    <div class="home-portfolio-main_____facts-wrapper">
                                                        <h4>Location</h4>
                                                        <span>MYKOLAIV</span>
                                                        <h4>Terms of Execution</h4>
                                                        <span>60 DAYS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                       
                                    </div>
                                </div>
                                <div class="home-portfolio-main___number-container">
                                            <div class="home-portfolio-main___number-wrapper">
                                                <span>02</span>
                                            </div>
                                        </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-secondary--image-block-one">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-box-container-v2">
                                    
                                    <div class="home-portfolio-main____block-one-solid-v2">
                                    </div>
                                </div>
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-app-two.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-sauna--image-block-two">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-app-one.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-main--image-block-three">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-app-three.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-main--image-block-four">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-app-four.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-secondary--image-block-five">
                            <div class="home-portfolio-main__grid-block-wrapper">
                            <div class="home-portfolio-main___grid-box-container-two-v2">
                                    <div class="home-portfolio-main____block-five-solid-v2">
                                    </div>
                                    
                                </div>
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-app-five.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-portfolio-main_image-gallery-container">
                    <div class="home-portfolio-main_image-gallery-wrapper">
                        <div class="home-portfolio-main__grid-block-container portfolio-main--text-block">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___text-container">
                                    <div class="home-portfolio-main___text-wrapper">
                                        <div class="home-portfolio-main____heading-container">
                                            <div class="home-portfolio-main____heading-wrapper">
                                                <h3>KITCHEN DESIGN</h3>
                                            </div>
                                        </div>
                                        <div class="home-portfolio-main____content-container">
                                            <div class="home-portfolio-main____content-wrapper">
                                                <div class="home-portfolio-main_____p-container">
                                                    <div class="home-portfolio-main_____p-wrapper">
                                                    <p>The kitchen design combines modern aesthetics with functionality,
                                                        offering a comfortable space for cooking and gatherings. The minimalist 
                                                        approach to the color palette and materials creates a modern design. The 
                                                        integration of innovative technologies emphasizes modernity.
                                                    </p>
                                                    </div>
                                                </div>
                                               
                                                <div class="home-portfolio-main_____facts-container">
                                                    <div class="home-portfolio-main_____facts-wrapper">
                                                        <h4>Location</h4>
                                                        <span>ODESA</span>
                                                        <h4>Terms of Execution</h4>
                                                        <span>45 DAYS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                                       
                                    </div>
                                </div>
                                <div class="home-portfolio-main___number-container">
                                            <div class="home-portfolio-main___number-wrapper">
                                                <span>03</span>
                                            </div>
                                        </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-main--image-block-one">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-box-container">
                                    
                                    <div class="home-portfolio-main____block-one-solid">
                                    </div>
                                </div>
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-kitchen-four.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-sauna--image-block-two">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-kitchen-one.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-main--image-block-three">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-kitchen-two.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-main--image-block-four">
                            <div class="home-portfolio-main__grid-block-wrapper">
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-kitchen-three.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="home-portfolio-main__grid-block-container portfolio-main--image-block-five">
                            <div class="home-portfolio-main__grid-block-wrapper">
                            <div class="home-portfolio-main___grid-box-container-two">
                                    <div class="home-portfolio-main____block-five-solid">
                                    </div>
                                    
                                </div>
                                <div class="home-portfolio-main___grid-img-container">
                                    <img src="<?=imagesPath("expirement.two/images/css-2/home/home-portfolio-kitchen-five.jpeg")?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            </div>
        </section>
        

</main>

<!--Footer-->
<?php include("partials/footer.php")?> 
</main>
<?php include("partials/script.php")?> 
</body>
</html>