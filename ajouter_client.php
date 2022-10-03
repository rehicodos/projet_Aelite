<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajouter_client.css">
    <title>Ajouter client</title>
</head>
<body>
    <h2 id="h2_0_">Ajouter un nouveau client</h2>
    <a href="client.php"><div id=""><button id="bt_retour_ajout_client" type="button"><strong><-<-<- Retour</strong></button></div></a>
    <div id="caneva_">
        <!-- <div id="sms_reussi_"></div> -->
        <form action="" method="post" id="form_ajouter_client_">
            <div id="sous_caneva"> 
                <h3>Veillez renseigner les coordonnés du client</h3>
                <hr/>
                <div class="cont_nom_">
                    <label for="nom_cl">Nom :</label>
                    <input type="text" id="nom_cl" name="nom_cl" placeholder="Entrer Nom" autocomplete="off">
                </div>
                <div class="cont_nom_">
                    <label for="tel_cl">Tel :</label>
                    <input type="text" id="tel_cl" name="tel_cl" placeholder="Entrer tel" autocomplete="off">
                </div>
                <div class="cont_nom_">
                    <label for="fax_cl">Fax :</label>
                    <input type="text" id="fax_cl" name="fax_cl" placeholder="Entrer fax" autocomplete="off">
                </div>
                <div class="cont_nom_">
                    <label for="adresse_cl">Adresse :</label>
                    <input type="text" id="adresse_cl" name="adresse_cl" placeholder="Entrer adresse" autocomplete="off">
                </div>
                <div class="cont_nom_">
                    <label for="email_cl">E-mail :</label>
                    <input type="email" id="email_cl" name="email_cl" placeholder="Entrer email" autocomplete="off">
                </div>
                <hr/>
                <div id="les_bt_clent">
                    <button type="reset">Effacer</button>
                    <button class="submit" type="submit">Valider</button>
                </div>
            </div>
        </form>
    </div>
    <?php

            $bdd = new PDO("mysql:host=localhost;dbname=dbaelite;charset=utf8","root","");

            if(isset($_POST['nom_cl'] , $_POST['tel_cl'] , $_POST['fax_cl'] , $_POST['adresse_cl'] , $_POST['email_cl'])){
               if(!empty($_POST['nom_cl']) and !empty($_POST['tel_cl']) and !empty($_POST['fax_cl']) and !empty($_POST['adresse_cl']) and !empty($_POST['email_cl'])){
                        
                    $nom=htmlspecialchars($_POST['nom_cl']);             
                    $tel=htmlspecialchars($_POST['tel_cl']); 
                    $fax=htmlspecialchars($_POST['fax_cl']);            
                    $adresse=htmlspecialchars($_POST['adresse_cl']);            
                    $mail=htmlspecialchars($_POST['email_cl']);            

                    $insert = $bdd->prepare("INSERT INTO client(nom, tel, fax, adress_bp, email) VALUES(?,?,?,?,?)");
                    $insert->execute(array($nom, $tel, $fax, $adresse, $mail));

                    if($insert){
                        echo "Insertion de données reussir !!!";
                    }
                }
                else{
                    echo "Echec d'insertion !!! remplir tous les champs obligatoire...!";
                    }
             
           }  
    ?>
    <!-- <script>
        $(document).ready(function(){
            $("#form_ajouter_client_").submit(function(){
                var nom = $("#nom_cl").val();
                var tel = $("#tel_cl").val();
                var fax = $("#fax_cl").val();
                var adress = $("#adresse_cl").val();
                var email = $("#email_cl").val();

                $.post('ajouter_client.php', {nom:nom, tel:tel, fax:fax, adress_bp:adress, email:email}, function(){
                    $("#nom_cl").val('dos');
                    $("#tel_cl").val('');
                    $("#fax_cl").val('');
                    $("#adresse_cl").val('');
                    $("#email_cl").val('');
                });
                return false;
            });
        });
    </script> -->
</body>
</html>