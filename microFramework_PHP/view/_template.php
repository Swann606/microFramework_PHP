<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=ASSETS?>/CSS/knacss.css">
    <link rel="stylesheet" href="<?=ASSETS?>/CSS/grillade.css">
    <link rel="stylesheet" href="<?=ASSETS?>/CSS/style.css">

    <title>A changer</title>

</head>

<?php if(session_status() === PHP_SESSION_NONE) session_start() ?>

<header>header a placer ici</header>


<!------ My page ----------->
<?php echo $contentPage;?>


<footer>footer  a placer ici </footer>



