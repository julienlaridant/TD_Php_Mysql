<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>exercice 3</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">

</head>
<body>
    <?php  
include 'fonctionmenu.php'; ?>


<?php 

 menu();
?>
    <table>
        <caption>liste de matière</caption>
   
     
        <tr>
            <td></td>
            <th >1semestre</th>
            <th>2semestre</th>
        </tr>
        <tr>
            <td rowspan="3">sio</td>
            <td>SI1 SI2 SI3 SI4 </td>
            <td>SI5 SI6</td>
        </tr>
        <tr>
            
            <td>SLAM</td>
            <td>SISR</td>
           
        </tr>
        <tr>
         
          <td>SLAM1 SLAM2</td>
          <td >SISR1 SISR2</td>
        </tr>
        <tr>
            <td rowspan="3">sio</td>
            <td colspan="2">si7</td>
        </tr>
        <tr>
            <td> SLAM</td>
            <TD> SISR</TD>

        </tr>
        <tr>
            <TD>SLAM3 SLAM4 SLAM4 SLAM5</TD>
            <TD>SISR3 SISR4 SISR5</TD>
        </tr>
     </table>


    </table>
</body>
</html>