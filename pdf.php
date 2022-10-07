<?php
    include_once('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<style>
    * { 
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    table{
        /* background: #0ff; */
        border: 2px solid black;
        width: 70%;
        margin: 20px auto;
        text-align: center;
        border-collapse: collapse;
        border-spacing: 2px;
        /* border-color: grey; */
    }
    th {
        color: white;
        background: #808080;
    }
    td {
        border-bottom: 1px solid black;
        border-left: 1px solid black;
        border-right: 1px solid black;
    }
</style>
<body>
    <table>
        <tr>
            <th>Designation</th>
            <th>Unité</th>
            <th>Quantité</th>
            <th>Prix_u</th>
            <th>Prix_t</th>
        </tr>
        <?php

            $details = "select * from details_devis where ord_id='16'";
            $valid = mysqli_query($bdd, $details); 

            while($ligne = mysqli_fetch_assoc($valid))
                {
                    ?>
                    <tr id="">
                        <td><?php echo utf8_encode($ligne['designation']);?></td>
                        <td><?php echo utf8_encode($ligne['unite']);?></td>
                        <td><?php echo utf8_encode($ligne['quantite_']);?></td>
                        <td><?php echo utf8_encode($ligne['prix_u']);?></td>
                        <td><?php echo utf8_encode($ligne['prix_t']);?></td>
                    </tr>
                    
                        
                    <?php
                    
                }
        ?>
    </table>
</body>
</html>