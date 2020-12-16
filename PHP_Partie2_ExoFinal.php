
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Exercice 4</title>
</head>
<body>
<?php  
include 'fonctionmenu.php'; ?>


<?php 

 menu();
?>


    
    <?php
    include 'fonctions.php';

$yep = formu();

 if( $yep === "ok"){
    ?><a href="connecté.php">cliquez sur le lien</a><?php

 }else{
    echo "";
 }
 highlight_file((__FILE__))
    ?>
</body>
</html>  