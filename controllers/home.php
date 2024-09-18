<?php 

namespace core;
use PDO;
//Grabs the config file for us

$config =  require basePath('core/config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);


$projects = $db->query("SELECT id, projectTitle, projectDesc, projectImg, projectTag from projects")->fetchAll(PDO::FETCH_ASSOC); 


    //Setting the Start to Zero
    $start = 1;

    //Setting Number of Journals to Post
    $rowsPerPage = 4;

    $record = $db->query("SELECT COUNT(*) as totalRecords FROM expirements");
    $numberOfRows = $record->fetch()["totalRecords"]; //Note: there is most likely a better way 




    $expirements = $db->query("SELECT * from expirements limit $start, $rowsPerPage");

//$expirements = $db->query("SELECT * from expirements")->fetchAll(PDO::FETCH_ASSOC); 



view("home.view.php", [
    //Header Information
    'pageStyleSheet' => "index.css",
    'pageHeading' => "Portfolio | HomePage",
    'pageDescription' => "Here is my site",
    'pageImage' => "",
    'pageURL' =>"",
    'keywords' => array('devin', 'moats', 'portfolio'),
    'pageFavicon' => "images/home/Favicon.svg",
    //Passing Variables
    'projects' => $projects,
    
    'expirements' => $expirements
   
]);




?>