<section class="home-project-container" id="projects">
    <div class="home-project-wrapper">
        <div class="home-project_title-container">
                <hgroup class="home-project_title-wrapper">
                    <h2>Explore my Projects.</h2>
                    <p>Along the way peek into my design process, 
                        and discover how my solutions expand unique 
                        ideas into a compelling websites from scratch. </p>
                </hgroup>
            </div>
            <div class="home-project_card-container">
            <div class="home-project_card-wrapper" slider-category="grid-container">
                <?php
                foreach($projects as $project):?>
                <div class="home-project__indv-card-container" slider-category="grid-item">
                    <div class="home-project__indv-card-wrapper">
                        <div class="home-project___card-content-img-container">
                            <img src="<?=$project['projectImg']?>" alt="">

                        </div>
                        <div class="home-project___card-content-text-container">
                            <div class="home-project___card-content-text-wrapper">
                                <br>
                                <h3><?=$project['projectTitle']?></h3>
                                <br>
                                <p><?=$project['projectDesc']?></p>

                            </div>
                        </div>
                        <div class="home-project___card-content-tag-container">
                            <div class="home-project___card-content-tag-wrapper">
                                <span><?=$project['projectTag']?></span>
                                <a href="/project?id=<?=$project['id']?>">Learn More</a>

                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="home-project_arrow-container" slider-category="btn-container">
            <div class="home-project_arrow-wrapper">
                <div class="home-project__left-arrow-container" slider-category="btn-prev">
                    <img src="images/home/UI-Arrow.svg" alt="" slider-category="btn-prev">
                </div>
                <div class="home-project__right-arrow-container" slider-category="btn-next">
                    <img src="images/home/UI-Arrow.svg" alt="" slider-category="btn-next">
                </div>
            </div>
        </div>

        </div>
       
</section>