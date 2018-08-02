<?php require_once '../../layout/header.php'; ?>

<h1>Ajouter un pays</h1>

<form action="insert_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" name="nom" class="form-control" placeholder="Nom">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-10">
            <input type="file" name="photo" accept="images/*" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Valider
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>
