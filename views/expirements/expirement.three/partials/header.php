<header id="ph1" class="ph1-header-container">
    <div class="ph1-header-wrapper">
       <div class="ph1_name-container">
            <div class="ph1_name-wrapper">
                <span><?=$companyName?></span>
            </div>
       </div>
       <div class="ph1_nav-grouping-container">
        <div class="ph1_nav-grouping-wrapper">
            <nav class="ph1__nav-container">
                <ul class="ph1__nav-wrapper">
                    <?php foreach($navLinks as $navLink):?>
                        <li><a href="<?='/' /*$navLink*/ ?>"><?=$navLink?></a></li>
                    <?php endforeach;?>
                </ul>
            </nav>
        </div>

       </div>
    </div>
</header>