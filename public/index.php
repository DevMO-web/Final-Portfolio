<?php

/* ===============
  FIRST STAGE
   =============== */

//BASE_PATH:

/*
1. The server must start on public folder
2. Then Code Below grabs us out of public folder after index is called. 
*/
const BASE_PATH = __DIR__ . '/../';

//BASE_PATH + Functions:

/*
1. Next Step We Load All The Functions we want for our website
*/
include BASE_PATH . ('core/functions.php');

/* ===============
  SECOND STAGE
   =============== */

//Now that Funtions are loaded, we can use the basePath with spl_autoload_function.

spl_autoload_register(function($class){

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    //with new namespace. the class is changed to core\Database. Before it was just Database
    

    //new $class rule
    require basePath("{$class}.php");
 });


 require basePath('routes.php');