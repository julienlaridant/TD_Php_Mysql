<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<?php  
include 'fonctionmenu.php'; ?>


<?php 

 menu();
?>
<?php
try{
    $bdd = new PDO('mysql:host=192.168.65.138;dbname=ex2td2julien;charset=utf8', 'root', 'root');
    
}catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

$Result = $bdd->query('SELECT * FROM patient');
$Count = $Result->rowcount();

if($Count>0)

{
?>

    <table>
    <thead>
        <td>Noms</td>
        <td>Prénoms</td>
    </thead>


<?php
while ($Data = $Result->fetch())
{
?>
   
    <tr>
        <td><?php echo $Data["nom"];?></td>
        <td><?php echo $Data["prénom"];?></td>
    </tr>
<?php
}
?>
</table>
<?php
}else{
    echo "<div class='erreur'>Y'a un problème !</div>";
}
?>
 
<?php

$Result->closeCursor();

?>

<?php
highlight_file(__FILE__);
?>

</body>
</html>