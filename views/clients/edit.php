<?php
require_once "../../public/template/header.php";
require_once "../../public/template/menu.php";
require_once "../../models/clientDao.php";

$leClient = findClientById($_GET['id']);
//var_dump($leClient);exit(0);
?>

<div class="col-md-4">
    <div class="panel panel-primary">
        <div class="panel-heading">Edition du client</div>
        <div class="panel-body">
            <form method="post" action="../update">
                <input type="hidden" name="id" value="<?php echo $leClient['id'] ?>">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" value="<?php echo $leClient['nom'] ?>">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" class="form-control" value="<?php echo $leClient['prenom'] ?>">
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="text" name="telephone" class="form-control" value="<?php echo $leClient['telephone'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $leClient['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" class="form-control" value="<?php echo $leClient['adresse'] ?>">
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-primary" value="Mèttre à jour">
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "../../public/template/footer.php";?>



