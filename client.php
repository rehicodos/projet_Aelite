<?php 

    include_once('connexion.php');

    if(isset($_GET['supp'])){
        $sup = $_GET['supp'];
        $reqdelete = "DELETE FROM client WHERE id='$sup'";
        $result = mysqli_query($bdd,$reqdelete);
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="biblio.css">
    <link rel="stylesheet" href="client__00.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Clients</title>
</head>
<body>
    <!-- _________________Recherche auto sur biblio________________ -->
    <script>
        $(document).ready(function(){
            $("#rechh").keyup(function(){
                search_table($(this).val());
            });
            function search_table(value) {
                $("#tabl #tr_copier__").each(function(){
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
    <h2>Liste des Clients</h2>
    
        <div id="cont_client">
            <div id="formauto">
                <h4 id="h4_">Rechercher un client :</h4>
                <input type="text" id="rechh" name="rechh">
            </div>    
           <?php
            //  include('tb_DB.php');
            $reqselect = "select * from client order by id DESC";
            $resultat = mysqli_query($bdd,$reqselect);

            $nbr = mysqli_num_rows($resultat);
            ?>
            <div id="zone_ajouter_client_">
                <?php echo "<p><strong> Total :<b> ".$nbr."</b> client(s).</strong></p>"; ?>
                <div id="bt_ajouter_client_0">
                    <h3>Ajouter un client :</h3>
                    <a href="ajouter_client.php"><img src="images/icone_ajouter.jpg" alt="" width="50px" height="50px"></a>
                </div>
            </div>
           <div class="ss_">
                <table id="tabl">
                <tr>
                        <!-- <th>Cocher</th> -->
                        <th width="15%">Nom</th>
                        <th width="15%">Tel</th>
                        <th width="10%">Fax</th>
                        <th width="15%">Adresse</th>
                        <th width="15%">E-mail</th>
                        <th width="15%">Modifier</th>
                        <th width="15%">Supprimer</th>
                </tr>
            
                    <?php
                    
                        while($ligne = mysqli_fetch_assoc($resultat))
                        {
                            ?>
                            <tr id="tr_copier__">
                                <!-- <td><input type='checkbox' name='modifier".$id."' width="40px" height="40px"/></td> -->
                                <td><?php echo utf8_encode($ligne['nom']);?></td>
                                <td><?php echo utf8_encode($ligne['tel']);?></td>
                                <td><?php echo utf8_encode($ligne['fax']);?></td>
                                <td><?php echo utf8_encode($ligne['adress_bp']);?></td>
                                <td><?php echo utf8_encode($ligne['email']);?></td>
                                <!-- <td><img src="" alt="Aelite"></td> -->
                                <td><a href="modifier_client.php?modifier=<?php echo $ligne['id']; ?>"><img src="images/MOD.png" width="50px" height="40px"></a></td>    
                                <td><a href="client.php?supp=<?php echo $ligne['id']; ?>"><img src="images/sup.jpg" width="50px" height="40px"></a></td>    
                            </tr>
                            
                            <?php
                        }
                    ?>

                </table>
           </div>
    </div>
</body>
</html>