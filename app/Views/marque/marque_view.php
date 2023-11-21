<?= $this->extend('main_layout') ?>

<?php $this->section('content') ?>

    <div class="container">
        <div class="container d-flex">
            <h1 class="me-auto">Liste des marques</h1>
            <a href="/marques/ajout" class="btn btn-primary ms-auto">Ajouter</a>
        </div>
       
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Marque</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php  foreach($marques as $marque){ ?>
                    <tr>
                        <td id="<?= $marque["id_marque"]?>"><?= $marque["nom"] ?></td>
                        <td>
                            <button type="button" class="btn btn-info editMarque" >Modifier</button>
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                <?php }?>
                
            </tbody>
        </table>
    </div>

    <div class="modal" id="modalAddMarque">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajout de marque</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
            <div class="input-group mb-3">
                <span class="input-group-text">Nom de marque</span>
                <input type="text" class="form-control" id="nomMarque">
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="buttonAddMarque">Ajouter</button>
                <button type="button" class="btn btn-primary" id="buttonModifMarque">Modifier</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
            </div>
        </div>
        </div>
<?php $this->endSection() ?>


