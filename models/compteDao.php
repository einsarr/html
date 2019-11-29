<?php
    require_once "clientDao.php";

    function addCompte(string $numero,int $solde,int $etat,int $idCl):int{
        $pdo = getPdo();
        $sql = $pdo->prepare("INSERT INTO compte(id,numero,solde,etat,idCl) VALUES(NULL,:numero,:solde,:etat,:idCl)");
        $sql->bindValue(':numero',$numero,PDO::PARAM_STR);
        $sql->bindValue(':solde',$solde,PDO::PARAM_INT);
        $sql->bindValue(':etat',$etat,PDO::PARAM_INT);
        $sql->bindValue(':idCl',$idCl,PDO::PARAM_INT);

        return $sql->execute();

    }

    function addCompteNewClient(string $nom,string $prenom,string $telephone,string $email,string $adresse,string $numero,int $solde,int $etat):void{
        $pdo = getPdo();
        $pdo->beginTransaction();
        $id = addClient($nom,$prenom,$telephone,$email,$adresse);
        if($id > 0){
            addCompte($numero,$solde,$etat,$id);
        }
        $pdo->rollBack();
    }

    function updateCompte(int $idCl,string $nom,string $prenom,string $adresse,string $telephone):string{
        $pdo = getPdo();
        $requete = $pdo->prepare("UPDATE client SET nom=:nom,prenom=:prenom,adresse=:adresse,telephone=:telephone WHERE idCl=:idCl ");
        $requete->bindValue(':nom',$nom,PDO::PARAM_STR);
        $requete->bindValue(':prenom',$prenom,PDO::PARAM_STR);
        $requete->bindValue(':adresse',$adresse,PDO::PARAM_STR);
        $requete->bindValue(':telephone',$telephone,PDO::PARAM_STR);
        $requete->bindValue(':idCl',$idCl,PDO::PARAM_INT);

        $resultat = $requete->execute();
        if($resultat){
            return "Le client a été mise à jour avec succès";
        }
        else{
            return "Echec de la mise à jour du client";
        }
    }

    function findCompteById(int $idCpt){
        $pdo = getPdo();
        $requete = $pdo->prepare("SELECT * FROM compte where idCpt=:idCpt");
        $requete->bindValue(":idCpt",$idCpt,PDO::PARAM_INT);
        $resultat = $requete->execute();
        return $resultat->fetch();
    }
    function findAllCompte(){
        $pdo = getPdo();
        $requete = $pdo->query('SELECT cpt.*,clt.* FROM compte cpt JOIN client clt ON clt.id=cpt.idCl');
        return $requete->fetchAll();

    }

