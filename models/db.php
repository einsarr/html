<?php

    function getPdo() : PDO{
        $serveur = "localhost";
        $login = "root";
        $password="";
        $dbname = "banquedupeuple";
        try{
            $pdo = new PDO("mysql:hots=$serveur;dbname=$dbname",$login,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            die('Error : '.$e->getMessage());
        }
        return $pdo;
    }
