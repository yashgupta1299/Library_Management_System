<?php

class db{
protected $connection;
function setconnection(){
    try{
        // Development connection
        // $this->connection=new PDO("mysql:host=localhost; dbname=library_managment","root","");

        // Remote database connection
        $this->connection=new PDO("mysql:host=sql12.freesqldatabase.com; dbname=sql12541230","sql12541230","7CRiJe89Bg");
        
        // include("/config/config.php");
        // include("config/config.php");
        // $this->connection=new PDO("mysql:host=".HOSTNAME."; dbname=".DBNAME,USER,PASSWORD);
        
        // echo "Done";
    }catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}
?>