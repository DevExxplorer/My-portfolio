<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../dist/bundle.css">
</head>
<body>
    <div class="wrapper">
        <?php
            require('../app/Views/home/hero.php');
            require('../app/Views/home/projects.php');
        ?>
    </div>
    <script type="module" src="../dist/bundle.js"></script>
</body>
</html>