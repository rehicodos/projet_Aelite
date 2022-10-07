<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="archive_nouvo_devis__.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Archive ou créer nouveau devis </title>
</head>
<body>
    <h2>Archive Devis</h2>
    <div id="bt_nouvo_devis">
        <a href="index.php"><button id="bt_retour" type="button"><-<-<- Retour</button></a>
        <a href="devis.php"><button id="new_devis" type="button">Créer nouveau Devis</button></a>
    </div>
    
    <div id="rech_devis">
        <div id="sous_rech_devis">
            <p>Recherche : </p>
            <input type="text" id="champ_saisir_rech_devis" placeholder="Entrer un mot"/>
        </div>
    </div>
    
    <div id="cont_archive">
        <div id="cont_tableau_archive">
            <table id="tabll_">
                <tr>
                    <th width="10%">N°_Devis</th>
                    <th width="15%">Date Creation</th>
                    <th width="15%">Client</th>
                    <th width="12%">Montant Total</th>
                    <th width="8%">Pdf</th>
                    <th width="8%">Excel</th>
                    <th width="8%">DS</th>
                    <th width="12%">Modifier</th>
                    <th width="12%">Supprimer</th>
                </tr>
                <?php
                        include_once('connexion.php');
                        $reqselect = "select * from archive_devis order by id DESC";
                        $resultat = mysqli_query($bdd,$reqselect);
                    
                        while($ligne = mysqli_fetch_assoc($resultat))
                        {
                            ?>
                            <tr id="tr_copier__0">
                                <!-- <td><input type='checkbox' name='modifier".$id."' width="40px" height="40px"/></td> -->
                                <td><?php echo utf8_encode($ligne['n_devis']);?></td>
                                <td><?php echo utf8_encode($ligne['date_creation']);?></td>
                                <td><?php echo utf8_encode($ligne['nom_cl']);?></td>
                                <td><?php echo utf8_encode($ligne['montant_ttc']);?></td>
                                <!-- <td><?php echo utf8_encode($ligne['email']);?></td> -->
                                <!-- <td><img src="" alt="Aelite"></td> -->
                                <td><a href="#"><img src="images/pdf_0.png" width="50px" height="40px"></a></td>    
                                <td><a href="#"><img src="images/excel.png" width="50px" height="40px"></a></td>    
                                <td><a href="#"><img src="images/ds_.png" width="50px" height="40px"></a></td>    
                                <td><a href="#"><img src="images/MOD.png" width="50px" height="40px"></a></td>    
                                <td><a href="#"><img src="images/sup.jpg" width="50px" height="40px"></a></td>    
                            </tr>
                            
                            <?php
                        }
                    ?>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#champ_saisir_rech_devis").keyup(function(){
                search_table($(this).val());
            });
            function search_table(value) {
                $("#tabll_ #tr_copier__0").each(function(){
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
</body>
</html>