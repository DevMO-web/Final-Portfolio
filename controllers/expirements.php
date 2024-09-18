<?php
namespace core;
use PDO;
$config =  require basePath('core/config.php');


/*Helper Function for blocking certain Ip addresses*/
/*
$allowedIps = ['127.0.0.1'];
$userIp = $_SERVER['REMOTE_ADDR'];

if (!in_array($userIp, $allowedIps)) {
    echo "Forbidden";
    die();
}
*/



try {
    // Initializes the Database while placing the config variable and the correct key to the database
    $db = new Database($config['database']);

    // Still poses security issue when i put 6 as id and does not exist..
    if (isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
        $id = intval($_GET['id']); // Convert the id to an integer
    } else {
        echo "Invalid or undefined ID.";
        die();
    }

    $expirements = $db->query('SELECT * from expirements where id= :id', ['id' => $id])->fetch(PDO::FETCH_ASSOC);

   // Check if the $expirements array is empty
   if (empty($expirements)) {
    view("errors/404.php", [
        'heading' => "Error 404"
       
    ]);
    die();
    } else {
    $expirementType = $expirements['expirementNumber'];
    }

    function pathFinder($path, $key){
        // Place id variable code here for upgrading pathFinder
        return "subpages/expirements/expirement.$key/" . $path;
    }

    function imagesPath($path){
        return "subpages/expirements/" . $path;
    }

    view("expirements/expirement.$expirementType/expirement.view.php", [
        'pageStyleSheet' => pathFinder("index.css", $expirementType),
        'pageHeading' => "Portfolio | Expirement",
        'pageDescription' => "Projects go here",
        'pageImage' => "",
        'pageURL' =>"",
        'pageFavicon' => "images/home/Favicon.svg",
        'keywords' => array('devin', 'moats', 'portfolio'),
        'navLinks' => array('about', 'articles', "subscribe"),
        'companyName' => "LO"
    ]);
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
   
}


?>