<?php


$list = [
    $project['listItemOne'],
    $project['listItemTwo'],
    $project['listItemThree'],
    $project['listItemFour'],
    $project['listItemFive'],
    $project['listItemSix'],

];

?>




<section class="project-sidebar-container">
    <div class="project-sidebar-wrapper">
        <header class="project-sidebar_header-contaner">
            <div class="project-sidebar_header-wrapper">
                <img src="images/home/UI-Arrow.svg" alt="">
                <a href="/">return home</a>
            </div>
        </header>
        <div class="project-sidebar_content-container">
            <div class="project-sidebar_content-wrapper">
                <div class="project-side-bar__content-title-container">
                    <div class="project-side-bar_content-title-wrapper">
                        <h1><?=$project['projectTitle']?></h1>
                    </div>
                </div>
                <div class="project-side-bar__content-tags-container">
                    <div class="project-side-bar_content-tags-wrapper">
                         <span><?=$project['projectTag']?></span>
                         <span>PHP</span>
                    </div>
                </div>
                <div class="project-sidebar__content-body-container">
                <div class="project-sidebar__content-body-wrapper">
                    <br>
                    <p><?=$project['projectDesc']?></p>
                    <br>
                    <ul>
                    <?php 
                    foreach($list as $liItem):
                    //check if null before outputing data
                    if ($liItem !== null): ?>
                        <li><?=$liItem?></li>
                    <?php 
                    endif; 
                    endforeach; 
                    ?>
                    </ul>
                    <br>
                </div>
            </div>
            </div>
            
        </div>
        <div class="project-sidebar_links-container">
            <div class="project-sidebar_links-wrapper">
                <?php //<a href="https://www.devinmoats.xyz/domain-boards-project">ANALYSIS</a>?>
                <a href="<?=$project['projectLink']?>" target="_blank">VISIT</a>
            </div>
        </div>

    </div>
</section>