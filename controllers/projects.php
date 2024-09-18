<?php 
namespace core;
use PDO;
//Grabs the config file for us

$config =  require basePath('core/config.php');

//Initializes the Database while place the cinfig varaible and the correct key to the database
$db = new Database($config['database']);

//Still poses security issue when i put 6 as id and does not exist..
if (isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Convert the id to an integer
} else {
    echo "Invalid or undefined ID.";
    die();
}


$projects = $db->query(
    'SELECT projectImages.*, projects.*, projectList.* 
     FROM projectImages 
     LEFT JOIN projects ON projectImages.project_id = projects.id 
     LEFT JOIN projectList ON projectList.project_id = projects.id 
     WHERE projectImages.id = :id',
    ['id' => $id]
)->fetch(PDO::FETCH_ASSOC);


if (empty($projects)) {
    view("errors/404.php", [
        'heading' => "Error 404"
       
    ]);
    die();
    }

function pathFinder($path){
    return "subpages/projects/" . $path;
}



view("/project.view.php", [
    'pageStyleSheet' => pathFinder("index.css"),
    'pageHeading' => "Portfolio | Projects",
    'pageDescription' => "Projects go here",
    'pageImage' => "",
    'pageURL' =>"",
    'pageFavicon' => "images/home/Favicon.svg",
    'keywords' => array('devin', 'moats', 'portfolio'),
    
    //Variables
    'projects' => $projects
]);

?>
