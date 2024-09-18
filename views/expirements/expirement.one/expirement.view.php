<?php

function imagesPath($path){
    return "subpages/expirements/" . $path;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include("../views/partials/head.php")?> 
</head>
<body>
<?php include("partials/header.php")?>
<main class="home-main-container">
    <div class="home-main-wrapper">
        <section class="home-nav_hero-container">
        <div class="home-nav_hero-wrapper">
            <div class="home-nav__hero-image-container">
                <picture>
                <source srcset=<?=(imagesPath("expirement.one/images/home/heroFolder/heroImage@0.25x.jpg"))?> media="(max-width: 400px)">
                <source srcset=<?=(imagesPath("expirement.one/images/home/heroFolder/heroImage@0.5x.jpg"))?> media="(max-width: 768px)">
                <source srcset=<?=(imagesPath("expirement.one/images/home/heroFolder/heroImage@0.75x.jpg"))?> media="(max-width: 1200px)">
                <img 
                class="home-nav___hero-image"
                src=<?=(imagesPath("expirement.one/images/home/heroFolder/heroImage.jpg"))?>
                role="presentation"
                alt="Charlotte Buildings"> 
                </picture>
            </div>
            <div class="home-nav__hero-text-container">
                <div class="home-nav__hero-text-wrapper">
                    <span>Embrace Serenity,</span>
                    <span>Embrace Home</span>
                </div>
            </div>
        </div>
        </section>
        <section class="home-section_intro-container">
            <div class="home-section_intro-wrapper">
                <div class="home-section-intro__left-container">
                    <div class="home-section-intro__left-wrapper">
                        <h1>Harmonize</h1>
                        <h2>Your Home, Embrace Serenity</h2>
                    </div>
                </div>
                <div class="home-section-intro__right-container">
                    <div class="home-section-intro__right-wrapper">
                        <p>Initiave inviting individuals to create
                            a tranquil and harmonious living environment.
                        </p>
                        <p>
                            With a focus on aligning spaces, colors, and ambiance,
                            the campaign inspires homeowners to discover true
                            serenity in their abodes.
                        </p>
                        <p>
                            From carefully chosen decorations to balanced room arrangements,
                            every step is directed towards building a calming and welcoming
                            atmosphere at home.
                        </p>
                        <p class="home-section-intro___bottom-tag">Embrace Serenity</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="home-section-marque-container">
            <div class="home-section-marque-wrapper">
                <div class="home-section-marque_logo-container">
                    <div class="home-section-marque_logo-wrapper">
                        <img src=<?=(imagesPath("expirement.one/images/home/logos/logo-one.svg"))?> alt="">
                    </div>
                </div>
                <div class="home-section-marque_logo-container">
                    <div class="home-section-marque_logo-wrapper">
                        <img src=<?=(imagesPath("expirement.one/images/home/logos/logo-two.svg"))?> alt="">
                    </div>
                </div>
                <div class="home-section-marque_logo-container">
                    <div class="home-section-marque_logo-wrapper">
                        <img src=<?=(imagesPath("expirement.one/images/home/logos/logo-three.svg"))?> alt="">
                    </div>
                </div>
                <div class="home-section-marque_logo-container">
                    <div class="home-section-marque_logo-wrapper">
                        <img src=<?=(imagesPath("expirement.one/images/home/logos/logo-four.svg"))?> alt="">
                    </div>
                </div>
                <div class="home-section-marque_logo-container">
                    <div class="home-section-marque_logo-wrapper">
                        <img src=<?=(imagesPath("expirement.one/images/home/logos/logo-five.svg"))?> alt="">
                    </div>
                </div>
                <div class="home-section-marque_logo-container">
                    <div class="home-section-marque_logo-wrapper">
                        <img src=<?=(imagesPath("expirement.one/images/home/logos/logo-six.svg"))?> alt="">
                    </div>
                </div>
                <div class="home-section-marque_logo-container">
                    <div class="home-section-marque_logo-wrapper">
                        <img src="images/home/logos/logo-seven.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="home-section-info-container">
            <div class="home-section-info-wrapper">
                <div class="home-section_main-link-container">
                    <div class="home-section_main-link-wrapper">
                        <div class="home-section__image-container">
                            <img src=<?=(imagesPath("expirement.one/images/home/info/property-appaisal.jpeg"))?> alt="">
                        </div>
                        <div class="home-section__text-container">
                            <a href="/">Property Appraisal</a>
                        </div>
                    </div>
                </div>
                <div class="home-section_main-link-container">
                    <div class="home-section_main-link-wrapper">
                        <div class="home-section__image-container">
                            <img src=<?=(imagesPath("expirement.one/images/home/info/property-rental.webp"))?> alt="">

                        </div>
                        <div class="home-section__text-container">
                            <a href="/">Property Rental</a>
                        </div>
                    </div>
                </div>
                <div class="home-section_main-link-container">
                    <div class="home-section_main-link-wrapper">
                        <div class="home-section__image-container">
                            <img src=<?=(imagesPath("expirement.one/images/home/info/legal-services.jpeg"))?> alt="">

                        </div>
                        <div class="home-section__text-container">
                            <a href="/">Legal Advisory</a>
                        </div>
                    </div>
                </div>
                <div class="home-section_main-link-container">
                    <div class="home-section_main-link-wrapper">
                        <div class="home-section__image-container">
                        <img src=<?=(imagesPath("expirement.one/images/home/info/marketing.jpeg"))?> alt="">

                        </div>
                        <div class="home-section__text-container">
                            <a href="/">Property Marketing</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-section-input-container">
            <div class="home-section-input-wrapper">
                <div class="home-section-input_background-container">
                    <img src=<?=(imagesPath("expirement.one/images/home/input/background.jpeg"))?> alt="">
                </div>
              <div class="home-section-input_main-container">
                
                <div class="home-section-input_top-wrapper">
               <div class="home-section-input__heading-container">
                <div class="home-section-input__heading-wrapper">
                    <h2>Your Neighborhood Awaits</h2>
                </div>
               </div>
                    <div class="home-section-input__tag-container">
                        <ul class="home-section-input__tag-wrapper">
                            <li>Townhouses</li>
                            <li>Apartments</li>
                            <li>Multi-Family Homes</li>
                        </ul>
                        <div class="home-section-input__search-wrapper">
                            <button>Search</button>
                        </div>
                    </div>
                <div class="home-section-input_bottom-container">
                    <div class="home-section-input_bottom-wrapper">
                    <div class="home-section-input__small-container">
                            <div class="home-section-input__small-wrapper">
                                <label for="home-location">LOCATION</label>
                                <input  id="home-location" type="text" name="location" placeholder="Charlotte">
                            </div>
                        </div>
                        <div class="home-section-input__small-container">
                            <div class="home-section-input__small-wrapper">
                            <label for="home-property">PROPTERY TYPE</label>
                                <input id="home-property" type="text" name="property" placeholder="Apartment">
                            </div>
                        </div>
                        <div class="home-section-input__small-container">
                            <div class="home-section-input__small-wrapper">
                            <label for="home-price">MAX PRICE</label>
                                <input id="home-price" type="number" name="price" placeholder="$4,000"> 
                            </div>
                        </div>
                    </div>
                       
                        
                      
                    </div>
                  
                </div>
              </div>
             
            </div>
        </section>
        <section class="home-section-results-container">
            <div class="home-section-results-wrapper">
                    <div class="home-section-results_image-gallery-container">
                        <div class="home-section-results_image-gallery-wrapper">

                            <div class="home-section-results__image-indiv-container">
                                <div class="home-section-results__image-indiv-wrapper">
                                    <div class="home-section-results___img-container">
                                        <img src=<?=(imagesPath("expirement.one/images/home/gallery/gallery-1.webp"))?> alt="">
                                        <div class="home-section-results___img-text-container">
                                            <div class="home-section-results___img-text-wrapper">
                                                <span>$234.15 Night</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="home-section-results___text-container">
                                    <hgroup class="home-section-results___text-wrapper">
                                        <h3>South Park, Charlotte</h3>
                                        <p>Stay with Devin. Hosting for 7 years</p>
                                    </hgroup>
                                </div>
                                </div>
                                
                            </div>
                            <div class="home-section-results__image-indiv-container">
                                <div class="home-section-results__image-indiv-wrapper">
                                    <div class="home-section-results___img-container">
                                        <img src=<?=(imagesPath("expirement.one/images/home/gallery/gallery-2.webp"))?> alt="">
                                        <div class="home-section-results___img-text-container">
                                            <div class="home-section-results___img-text-wrapper">
                                                <span>$234.15 Night</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="home-section-results___text-container">
                                    <hgroup class="home-section-results___text-wrapper">
                                        <h3>South Park, Charlotte</h3>
                                        <p>Stay with Devin. Hosting for 7 years</p>
                                    </hgroup>
                                </div>
                                </div>
                                
                            </div>
                            <div class="home-section-results__image-indiv-container">
                                <div class="home-section-results__image-indiv-wrapper">
                                    <div class="home-section-results___img-container">
                                        <img src=<?=(imagesPath("expirement.one/images/home/gallery/gallery-3.webp"))?> alt="">
                                        <div class="home-section-results___img-text-container">
                                            <div class="home-section-results___img-text-wrapper">
                                                <span>$234.15 Night</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="home-section-results___text-container">
                                    <hgroup class="home-section-results___text-wrapper">
                                        <h3>South Park, Charlotte</h3>
                                        <p>Stay with Devin. Hosting for 7 years</p>
                                    </hgroup>
                                </div>
                                </div>
                                
                            </div>
                            <div class="home-section-results__image-indiv-container">
                                <div class="home-section-results__image-indiv-wrapper">
                                    <div class="home-section-results___img-container">
                                        <img src=<?=(imagesPath("expirement.one/images/home/gallery/gallery-4.webp"))?> alt="">
                                        <div class="home-section-results___img-text-container">
                                            <div class="home-section-results___img-text-wrapper">
                                                <span>$234.15 Night</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="home-section-results___text-container">
                                    <hgroup class="home-section-results___text-wrapper">
                                        <h3>South Park, Charlotte</h3>
                                        <p>Stay with Devin. Hosting for 7 years</p>
                                    </hgroup>
                                </div>
                                </div>
                                
                            </div>
                            <div class="home-section-results__image-indiv-container">
                                <div class="home-section-results__image-indiv-wrapper">
                                    <div class="home-section-results___img-container">
                                        <img src=<?=(imagesPath("expirement.one/images/home/gallery/gallery-5.webp"))?> alt="">
                                        <div class="home-section-results___img-text-container">
                                            <div class="home-section-results___img-text-wrapper">
                                                <span>$234.15 Night</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="home-section-results___text-container">
                                    <hgroup class="home-section-results___text-wrapper">
                                        <h3>South Park, Charlotte</h3>
                                        <p>Stay with Devin. Hosting for 7 years</p>
                                    </hgroup>
                                </div>
                                </div>
                                
                            </div>
                            <div class="home-section-results__image-indiv-container">
                                <div class="home-section-results__image-indiv-wrapper">
                                    <div class="home-section-results___img-container">
                                        <img src=<?=(imagesPath("expirement.one/images/home/gallery/gallery-6.webp"))?> alt="">
                                        <div class="home-section-results___img-text-container">
                                            <div class="home-section-results___img-text-wrapper">
                                                <span>$234.15 Night</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="home-section-results___text-container">
                                    <hgroup class="home-section-results___text-wrapper">
                                        <h3>South Park, Charlotte</h3>
                                        <p>Stay with Devin. Hosting for 7 years</p>
                                    </hgroup>
                                </div>
                                </div>
                                
                            </div>
                            <div class="home-section-results__image-indiv-container">
                                <div class="home-section-results__image-indiv-wrapper">
                                    <div class="home-section-results___img-container">
                                        <img src=<?=(imagesPath("expirement.one/images/home/gallery/gallery-7.webp"))?> alt="">
                                        <div class="home-section-results___img-text-container">
                                            <div class="home-section-results___img-text-wrapper">
                                                <span>$234.15 Night</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="home-section-results___text-container">
                                    <hgroup class="home-section-results___text-wrapper">
                                        <h3>South Park, Charlotte</h3>
                                        <p>Stay with Devin. Hosting for 7 years</p>
                                    </hgroup>
                                </div>
                                </div>
                                
                            </div>
                            <div class="home-section-results__image-indiv-container">
                                <div class="home-section-results__image-indiv-wrapper">
                                    <div class="home-section-results___img-container">
                                        <img src=<?=(imagesPath("expirement.one/images/home/gallery/gallery-8.webp"))?> alt="">
                                        <div class="home-section-results___img-text-container">
                                            <div class="home-section-results___img-text-wrapper">
                                                <span>$234.15 Night</span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="home-section-results___text-container">
                                    <hgroup class="home-section-results___text-wrapper">
                                        <h3>South Park, Charlotte</h3>
                                        <p>Stay with Devin. Hosting for 7 years</p>
                                    </hgroup>
                                </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="home-section-results_view-more-container">
                                <div class="home-section-results_view-more-wrapper">
                                    <button>View More</button>
                                </div>
                            </div>
                </div>
              </div>
            </div>
        </section>
        <section class="home-section-community-container">
            <div class="home-section-community-wrapper">
                <div class="home-section-community_heading-container">
                    <div class="home-section-community_heading-wrapper">
                        <h2>Discover The Comforts of Community</h2>
                        <span>.</span>
                    </div>
                </div>
                <div class="home-section-community_para-container">
                    <div class="home-section-community_para-wrapper">
                        <p>Invitation to explore and experience the benefits of living within a community.
                            It highlights the idea that a strong community can provide comfort, support,
                            and a sense of belonging to its residents. 
                        </p>
                        
                    </div>
                </div>
                <div class="home-section-community_testimonials-container">
                    <div class="home-section-community_testimonials-wrapper">
                        <div class="home-section-community__indiv-container">
                            <div class="home-section-community__indiv-wrapper">
                                <div class="home-section-community___text-container">
                                    <h3>Nice Property</h3>
                                    <p>This property was very nice when I visited it last year. 
                                    Super cool dude</p>
                                </div>
                                <div class="home-section-community___profile-container">
                                    <div class="home-section-community___profile-wrapper">
                                        <div class="home-section-community____img-container">
                                            <img src=<?=(imagesPath("expirement.one/images/home/testomonials/profile-1.png"))?> alt="">
                                        </div>
                                        <div class="home-section-community____hgroup-container">
                                            <h4>Devin</h4>
                                            <p>Founder Company</p>
                                        </div>

                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="home-section-community__indiv-container">
                            <div class="home-section-community__indiv-wrapper">
                                <div class="home-section-community___text-container">
                                    <h3>Super Cool</h3>
                                    <p>I Stayed here. Yes I did, and it was so cool, 
                                        will rent again here. So cool man. 10/10</p>
                                </div>
                                <div class="home-section-community___profile-container">
                                    <div class="home-section-community___profile-wrapper">
                                        <div class="home-section-community____img-container">
                                            <img src=<?=(imagesPath("expirement.one/images/home/testomonials/profile-2.jpeg"))?> alt="">
                                        </div>
                                        <div class="home-section-community____hgroup-container">
                                            <h4>Sarah</h4>
                                            <p>Founder Company</p>
                                        </div>

                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="home-section-community__indiv-container">
                            <div class="home-section-community__indiv-wrapper">
                                <div class="home-section-community___text-container">
                                    <h3>Nice Property</h3>
                                    <p>This property was very nice when I visited it last year. 
                                    Super cool dude</p>
                                </div>
                                <div class="home-section-community___profile-container">
                                    <div class="home-section-community___profile-wrapper">
                                        <div class="home-section-community____img-container">
                                            <img src=<?=(imagesPath("expirement.one/images/home/testomonials/profile-3.jpeg"))?>  alt="">
                                        </div>
                                        <div class="home-section-community____hgroup-container">
                                            <h4>Arnold</h4>
                                            <p>Founder Company</p>
                                        </div>

                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="home-section-community__indiv-container">
                            <div class="home-section-community__indiv-wrapper">
                                <div class="home-section-community___text-container">
                                    <h3>Great Choice</h3>
                                    <p>I enjoyed it dude. A great choice for the bros 
                                        watching the Cowboys play in the Superbowl. Beds Good. Water Good. A/C Good.</p>
                                </div>
                                <div class="home-section-community___profile-container">
                                    <div class="home-section-community___profile-wrapper">
                                        <div class="home-section-community____img-container">
                                            <img src=<?=(imagesPath("expirement.one/images/home/testomonials/profile-5.jpeg"))?>  alt="">
                                        </div>
                                        <div class="home-section-community____hgroup-container">
                                            <h4>Jeff</h4>
                                            <p>Founder Company</p>
                                        </div>

                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="home-section-community__indiv-container">
                            <div class="home-section-community__indiv-wrapper">
                                <div class="home-section-community___text-container">
                                    <h3>Beautiful</h3>
                                    <p>So nice! I loved it so much. OMG It was so good. 
                                        Like really. Check it out. The service is great for everyone!</p>
                                </div>
                                <div class="home-section-community___profile-container">
                                    <div class="home-section-community___profile-wrapper">
                                        <div class="home-section-community____img-container">
                                            <img src=<?=(imagesPath("expirement.one/images/home/testomonials/profile-4.jpeg"))?>  alt="">
                                        </div>
                                        <div class="home-section-community____hgroup-container">
                                            <h4>Kenna</h4>
                                            <p>Founder Company</p>
                                        </div>

                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>

    
    <?php include("partials/script.php")?> 
</body>
</html>