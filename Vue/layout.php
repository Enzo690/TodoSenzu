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
</header>

    <?php if (isset($_SESSION['id'])) {
        echo 'connecté !!!!';
    }else{
        echo 'jkqifhoeo';
    } ?>
    <div id="contenu">
        <?php echo $contenu ?>
    </div> <!-- #contenu -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="./Contenu/login.js"></script>
    </body>
</html>