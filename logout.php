<?php
session_start();
//On redirige vers la page PHP_Partie1_Exo9.php
header('PHP_Partie1_Exo9.php');
//On détruit toutes les variables de session
session_unset();
