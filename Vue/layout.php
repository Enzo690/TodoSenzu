<?php
// Code here...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="./Contenu/style.css">
    <link rel="stylesheet" href="./Contenu/list.css">
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
</head>
<body>
<header  class="bg-blue-500 text-white text-center">
    <h1><?= $titre ?></h1>
    <nav>
        <a href="?action=add">Ajouter</a>
    </nav>
</header>
    <div id="contenu">
        <?php echo $contenu ?>
    </div> <!-- #contenu -->
    </body>
</html>