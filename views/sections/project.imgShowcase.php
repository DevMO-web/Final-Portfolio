<?php



function pathFinder($path){
    return "subpages/projects/" . $path;
}


$images = [
    $project['productImageOne'],
    $project['productImageTwo'],
    $project['productImageThree'],
    $project['productImageFour'],
    $project['productImageFive'],
    $project['productImageSix'],

];



$prefix2 = ".75x";



function fileCombiner($img, $prefix = ""){
    $fileFormat = ".jpg";
    $base = pathFinder($img);
    $base .= $prefix;
    $base .= $fileFormat;
    return $base;
}


?>





<section class="project-showcase-container">
    <div class="project-showcase-wrapper">
        <?php 
        foreach($images as $img):
        //check if null before outputing data
        if ($img !== null): ?>
        <div class="project_indv-image-container">
            <img src="<?= fileCombiner($img)?>"
                 srcset="<?= fileCombiner($img)?> 1000w, <?= fileCombiner($img, $prefix2) ?> 600w"
                 sizes="(max-width: 60rem) 50vw, (max-width: 120rem) 33.3vw"
                 alt="Responsive image">
        </div>
        <?php 
            endif; 
            endforeach; 
        ?>
    </div>
</section>

