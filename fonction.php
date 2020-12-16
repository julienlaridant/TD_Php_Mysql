<?php
function tab1()
{
?>
<table border="1" >
<tr>
<td>ligne1</td>
<td>ligne2</td>
<td>ligne3</td>
</tr>
</table>
<?php

}
?>

<?php
function tab2()
{
?>
    <table border="1" >
    <tr>
    <td>colonne1</td>
    <td>colonne2</td>
    <td>colonne3</td>
    </tr>
    <?php
tab1();
tab1();

}
?>


<?php
function moy($a,$b,$c)
{

   $g = ($a+$b+$c)/3;

return $g;
}

?>
<?php
function formu()
{
    ?>
    <form method="post">

Login:<input type="text" name="login" />
Mot de passe:<input type="text" name="mdp" />
<p><input type="submit" value="Valider" /></p></form>

<?php
}
?>

