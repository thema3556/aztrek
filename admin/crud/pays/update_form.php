<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier un pays</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" name="nom" value="<?php echo $pays["nom"]; ?>" class="form-control" placeholder="Nom">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-1">
            <img src="../../../uploads/<?php echo $pays["photo"]; ?>"  class="img-responsive img-thumbnail">
        </div>
        <div class="col-sm-9">
            <input type="file" name="photo" accept="images/*" class="form-control">
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Valider
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

