<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Bootstrap</title>

    <!-- Inclusion du fichier CSS Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Test Bootstrap</h1>
        <p>Ceci est une page de test pour Bootstrap.</p>

        <!-- Bouton Bootstrap -->
        <button class="btn btn-primary">Bouton Bootstrap</button>
    </div>

    <!-- Inclusion du fichier JavaScript Bootstrap (assurez-vous de l'inclure après jQuery si vous l'utilisez) -->
    <script src="<?= base_url('vendor/twbs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
</body>
</html>
