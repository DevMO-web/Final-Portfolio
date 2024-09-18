<footer id="p-f2c1" class="p-f2c1-container">
    <div class="p-f2c1-wrapper">
        <div class="p-f2c1_icon-container">
            <div class="p-f2c1_icon-wrapper">
                <div class="p-f2c1__icon-indiv-container">
                    <div class="p-f2c1__icon-indiv-wrapper">
                        <a href="">
                        <img src="<?=(imagesPath("expirement.three/images/insta.svg"))?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="p-f2c1__icon-indiv-container">
                    <div class="p-f2c1__icon-indiv-wrapper">
                        <a href="">
                        <img src="<?=(imagesPath("expirement.three/images/twitter.svg"))?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="p-f2c1__icon-indiv-container">
                    <div class="p-f2c1__icon-indiv-wrapper">
                        <a href="">
                        <img src="<?=(imagesPath("expirement.three/images/facebook.svg"))?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="p-f2c1__icon-indiv-container">
                    <div class="p-f2c1__icon-indiv-wrapper">
                        <a href="">
                        <img src="<?=(imagesPath("expirement.three/images/pinterest.svg"))?>" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="p-f2c1_nav-grouping-container">
            <div class="p-f2c1_grouping-wrapper">
                <nav class="p-f2c1__nav-container">
                <ul class="p-f2c1__nav-wrapper">
                    <?php foreach($navLinks as $navLink):?>
                        <li><a href="<?='#' /*$navLink*/ ?>"><?=$navLink?></a></li>
                    <?php endforeach;?>
                </ul>
            </nav>
            </div>
        </div>
    </div>
</footer>