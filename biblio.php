<?php include_once('connexion.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="biblio.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Biblio (DB)</title>
</head>
<body>
    <!-- _________________Recherche auto sur biblio________________ -->
    <script>
        $(document).ready(function(){
            $("#rechh").keyup(function(){
                search_table($(this).val());
            });
            function search_table(value) {
                $("#tabl tr").each(function(){
                    var found = "false";
                    $(this).each(function(){
                        if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0){
                            found = "true";
                        }
                    });
                    if(found == 'true'){
                        $(this).show();
                    }
                    else{
                        $(this).hide();
                    }
                });
                
            }
        });
    </script>
    <h1>Toutes Informations Ici</h1>
    
        <div class="droite">
            <div id="formauto">
                <h4 id="h4_">Recherche par famille de mot :</h4>
                <input type="text" id="rechh" name="rechh">
            </div>    
           <?php
            //  include('tb_DB.php');
            $reqselect = "select * from dbaeliteco";
            $resultat = mysqli_query($bdd,$reqselect);

            $nbr = mysqli_num_rows($resultat);
            echo "<p> Total :<b> ".$nbr."</b> elements present.</p>";
           ?>
           <div class="ss">
            <table id="tabl">
               <tr>
                <!-- <th>Cocher</th> -->
                <th>Désignation</th>
                <th>Unité</th>
                <th>Quantité</th>
                <th>Prix d'achat</th>
                <th>Prix de vente</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                <!-- <th>Modifier</th> -->
               </tr>
        
                <?php
                
                    while($ligne = mysqli_fetch_assoc($resultat))
                    {
                        ?>
                        <tr>
                            <!-- <td><input type='checkbox' name='modifier".$id."' width="40px" height="40px"/></td> -->
                            <td><?php echo utf8_encode($ligne['designation']);?></td>
                            <td><?php echo utf8_encode($ligne['unite']);?></td>
                            <td><?php echo $ligne['quantite'];?></td>
                            <td><?php echo $ligne['pa'];?></td>
                            <td><?php echo $ligne['pv'];?></td>
                            <!-- <td><img src="" alt="Aelite"></td> -->
                            <td><a href="Modifier_db.php?modifier=<?php echo $ligne['Code']; ?>"><img src="images/modifier1.jpg" width="50px" height="40px"></a></td>    
                            <td><a href="Modifier_db.php?modifier=<?php echo $ligne['Code']; ?>"><img src="images/sup.jpg" width="50px" height="40px"></a></td>    
                        </tr>
                        
                        <?php
                    }
                ?>

            </table>
           </div>
    </div>
    

</body>
</html>