<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=k, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Exercice 1 TD4</title>
</head>

<body>
<?php  
include 'fonctionmenu.php'; ?>


<?php 

 menu();
?>
<form action="" method="post">
        Prénom : <input type="text" name="prénom">
        Nom : <input type="text" name="nom">
        <input type="submit" value="submit">
    </form>


    <?php
highlight_file(__FILE__);
?>
    <?php


try{

    
    if(isset($_POST['nom'])){
        $MaBase = new PDO('mysql:host=192.168.65.138; dbname=ex2td2julien; charset=utf8','siteweb', 'siteweb');
        

        
        $Result = $MaBase->prepare("SELECT * FROM patient WHERE prenom = ? AND nom = ?");
        $Result->execute(array($_POST['prenom'], $_POST['nom']));

        

        if($Result->rowCount()>=1){
            echo "tu es connecté";
        }else{
            echo "le nom ou le prenom est incorrect";
        };

        
    }

   


}catch(Exception $e){

    echo "J'ai eu un problème.  erreur :".$e->getMessage();
}
?>

</body>

</html>