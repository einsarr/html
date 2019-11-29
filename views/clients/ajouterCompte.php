<?php require_once "../../public/template/header.php";?>
<?php require_once "../../public/template/menu.php";?>


<div class="col-md-4">
    <div class="panel panel-primary">
        <div class="panel-heading">Création de compte</div>
        <div class="panel-body">
            <form method="post" action="../../controllers/compteController.php">
                <div class="form-group">
                    <label for="numero">Numéro du compte</label>
                    <input type="text" name="numero" class="form-control">
                </div>
                <div class="form-group">
                    <label for="numero">Numéro du compte</label>
                    <input type="text" name="numero" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-primary" value="Enrégistrer">
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "../../public/template/footer.php";?>



