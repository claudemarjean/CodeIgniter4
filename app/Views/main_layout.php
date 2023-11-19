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
    <!-- Contenu de la vue spécifique -->
    <?= $this->renderSection('content') ?>

    <!-- Inclure les fichiers JS Bootstrap (placez-les à la fin du corps du document pour une meilleure performance) -->
    <script type="text/javascript" src="<?= base_url('bootstrap/js/bootstrap.min.js')?>"><</script>
    <script type="text/javascript" src="<?= base_url('assets/js/marque/marque.js') ?>"></script>
    <!-- Vos autres scripts personnalisés peuvent être inclus ici -->
</body>
</html>
