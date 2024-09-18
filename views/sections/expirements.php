<section class="home-expirement-container" id="expirements">
    <div class="home-expirement-wrapper">
        <div class="home-expirement_content-intro-container">
            <div class="home-expirement_content-intro-wrappper">
                <div class="home-expirement__title-container">
                    <hgroup class="home-expirement__title-wrapper">
                        <h2>Code expirements.</h2>
                        <p> Here, I test my abilities to construct web pages from scratch by mimicking online designs
                            without implementing web frameworks or libraries. 

                         </p>

                    </hgroup>
                </div>
                <div class="home-expirement__main-card-container">
                    <div class="home-expirement__main-card-wrapper">
                        <div class="home-expirement___main-card-img-container">
                            <img src="images/home/expirement-main.jpg" alt="">
                        </div>
                        <div class="home-expirement___main-card-tags-container">
                            <div class="home-expirment___card-tags-wrapper">
                                <span>Resident</span>
                                <a href="/expirement?id=1">Live Model</a>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            
        </div> 
        <div class="home-expirement_content-gallery-container">
            <div class="home-expirement_content-gallery-wrapper">
                <?php while($expirement = $expirements->fetch(PDO::FETCH_ASSOC)) :?>
                   
                <div class="home-expirement__content-gallery-img-container left">
                    <?php if ($expirement['expirementThumbnail'] == null) {
                        echo '<h4>' . "Content Coming Soon" . '</h4>';
                        
                        } else {
                        echo '<img src="' . $expirement['expirementThumbnail'] . '" alt=" ">';
                        echo '<div class="home-expirement___content-gallery-link-container">'
                        . '<a href="/expirement?id='
                        .$expirement['id']
                        .'">Live Model</a>'
                        .'</div>';

                        }
                    ?>
                   
                  
               
                </div>
                <?php endwhile;?>          
            </div>
        </div>  
        <div class="home-expirement_more-gallery-btn-container">
            <div class="home-expirement_more-gallery-btn-wrapper">
            </div>
        </div> 
    </div>
</section>