<!-- app/Views/main_layout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Mon Site' ?></title>
    <!-- Inclure les fichiers CSS Bootstrap -->
    <link rel="stylesheet" href="<?=  base_url('bootstrap/css/bootstrap.min.css')?>" type="text/css">
    <!-- Vos autres styles personnalisés peuvent être inclus ici -->
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="navbar-brand" href="/marques"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Marques
                        </font></font><span class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(actuel)</font></font></span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voitures</font></font></a>
                    </li>
                </ul>
            </div>
        </div>
         <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Recherche">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recherche</font></font></button>
            </form>
            </div>
        </div>
        </nav>
    <!-- Contenu de la vue spécifique -->
    <?= $this->renderSection('content') ?>

    <!-- Inclure les fichiers JS Bootstrap (placez-les à la fin du corps du document pour une meilleure performance) -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/bootstrap.min.js')?>"><</script>
    <script type="text/javascript" src="<?= base_url('assets/js/marque/marque.js') ?>"></script>
    <!-- Vos autres scripts personnalisés peuvent être inclus ici -->
</body>
</html>
