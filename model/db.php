<?php
function getConnection(){
    $host = 'localhost';
    $user = 'root' ;
    $password = '';
    $dbname = 'bp2';
    $dsn = "mysql:host=$host;dbname=$dbname";
    try {
    //     var_dump("1");
    // die;
        $db = new PDO($dsn, $user, $password);
        
    }catch(PDOException $ex){
        die ('Error : '.$ex->getMessage());
    }
    return $db;
}

?>