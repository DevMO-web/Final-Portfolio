<?php

/* ===============
  FIRST STAGE
   =============== */

//NameSpace: 
namespace core;

//USE
/*
Since namespace is declared, the pdo inside the function below is washed out(no meaning/useless). Loses its functionality.
*/
use PDO; //The Use case reinstates the meaning.


/* ===============
  Second STAGE
   =============== */

//Creating Database Class
class Database
{
//PDO cant be grabbed since its outside the scope. So we rename PDO to connection and put a "property" on top
public $connection;

//__contruct is used when we have to reuse a instance. In this case, it will only be used once. But why and How?
public function __construct($config){
    //the third parameter in http is our seperator for the dsn
    $dsn = 'mysql:' . http_build_query($config, '',';');

    //Place $username and $password to make it dynamic. Can place values elsewhere
    $this->connection = new PDO($dsn, $config['username'], $config['password'], [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //Look into this at some point and understand it deeper.
    ]);
}

//Databse Query Method. Index.php controls what i can put into here

public function query($query, $params = [])
{
    $statement = $this->connection->prepare($query);


  //This allows for dymanic params to be placed into the query. example: update page

     foreach ($params as $param => &$value) {
        $statement->bindParam($param, $value);
    }

    $statement->execute($params);

    return $statement;
}


};

/* ===============
  FIRST STAGE
   =============== */

//NameSpace: 
/*
namespace core;

//USE
/*
Since namespace is declared, the pdo inside the function below is washed out(no meaning/useless). Loses its functionality.
*/
/*
use PDO; //The Use case reinstates the meaning.


/* ===============
  Second STAGE
   =============== */

//Creating Database Class
/*
class Database
{
//PDO cant be grabbed since its outside the scope. So we rename PDO to connection and put a "property" on top
public $connection;

//__contruct is used when we have to reuse a instance. In this case, it will only be used once. But why and How?
public function __construct($config, $username = 'root', $password = ''){
    //the third parameter in http is our seperator for the dsn
    $dsn = 'mysql:' . http_build_query($config, '',';');

    //Place $username and $password to make it dynamic. Can place values elsewhere
    $this->connection = new PDO($dsn, $username, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //Look into this at some point and understand it deeper.
    ]);
}

//Databse Query Method. Index.php controls what i can put into here

public function query($query, $params = [])
{
    $statement = $this->connection->prepare($query);


  //This allows for dymanic params to be placed into the query. example: update page

     foreach ($params as $param => &$value) {
        $statement->bindParam($param, $value);
    }

    $statement->execute($params);

    return $statement;
}


};


*/