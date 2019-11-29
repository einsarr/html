<?php
    require_once "../models/clientDao.php";
    //var_dump($_GET);exit(0);
    extract($_POST);
    if (isset($id) && isset($_GET["update"])) {
        updateClient($id,$nom,$prenom,$adresse,$telephone);
        echo "<script>alert('Modification réussie avec succès'); window.location = '../clients';</script>";
    } else if(isset($_GET["delete"])){
        //var_dump($_GET);exit(0);
        $message = deleteClient($_GET["delete"]);
        echo "<script>alert('".$message."'); window.location = '../../clients';</script>";
    }else{
        header("Location:clients");
    }