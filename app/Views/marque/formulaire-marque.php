<?= $this->extend('main_layout')?>

<?= $this->section('content') ?>
    <div class="container">
        <h1>Ajout marque</h1>
        <form action="/marques/ajout" method="post">
            <div class="form-group">
                <div class="input-group mb-3">
                    <span class="input-group-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom de la marque:</font></font></span>
                    <input type="text" class="form-control" name="nomMarque">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajouter</font></font></button>
                </div>
            </div>
        </form>
    </div>

<?= $this->endSection() ?>