<?php 
    // include_once('connexion.php');

    // ========= la connexion ===========
    $bdd = new PDO("mysql:host=localhost;dbname=dbaelite;charset=utf8","root",""); 


    // ============= presence des mots automatique dans le formulaire modifier ========
    if(isset($_GET['modifier'])){
    $id = $_GET['modifier'];
    $query = $bdd->prepare('SELECT * FROM  client WHERE id= :modifier');
    $query->bindValue(':modifier',$_GET['modifier'],PDO::FETCH_ASSOC);
    $query->execute();
    $data = $query->fetch();
    }

    if(isset($_POST['nom_cl']) or isset($_POST['tel_cl']) or isset($_POST['fax_cl']) or isset($_POST['adresse_cl']) or isset($_POST['email_cl']) or isset($_GET['modifier'])){
        if(!empty($_POST['nom_cl']) or !empty($_POST['tel_cl']) or !empty($_POST['fax_cl']) or !empty($_POST['adresse_cl']) or !empty($_POST['email_cl']) or !empty($_POST['modifier'])){
                
        //   if(isset($_POST['mod'])){
    
             $nom=htmlspecialchars($_POST['nom_cl']);             
             $tel=htmlspecialchars($_POST['tel_cl']); 
             $fax=htmlspecialchars($_POST['fax_cl']);
             $adresse=htmlspecialchars($_POST['adresse_cl']);
             $mail=htmlspecialchars($_POST['email_cl']);
             $id =htmlspecialchars(@$_GET['modifier']);            
    
             $requ = "UPDATE client SET nom='$nom' , tel='$tel' , fax='$fax' , adress_bp='$adresse' , email='$mail' WHERE id='$id'";
             $resul = $bdd->prepare($requ);
             $resul->execute();
    
             if($requ){
                header('location:client.php');
              }
            // }
    
        //   else{
        //      header('location:mod_echec.php');
        //    }
    
          }
    
          $bdd = null; 
    } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajouter_client.css">
    <title>Modifier client</title>
</head>
<body>
    <h2 id="h2_0_">Modification des informations du client</h2>
    <a href="client.php"><div id=""><button id="bt_retour_ajout_client" type="button"><strong><-<-<- Retour</strong></button></div></a>
    <div id="caneva_">
        <!-- <div id="sms_reussi_"></div> -->
        <form action="" method="post">
            <div id="sous_caneva"> 
                <h3>Changer les coordonnés du client</h3>
                <hr/>
                <div class="cont_nom_">
                    <label for="nom_cl">Nom :</label>
                    <input  value="<?php echo @$data['nom'];?>" type="text" id="nom_cl" name="nom_cl" placeholder="Entrer Nom" autocomplete="off">
                </div>
                <div class="cont_nom_">
                    <label for="tel_cl">Tel :</label>
                    <input  value="<?php echo @$data['tel'];?>" type="text" id="tel_cl" name="tel_cl" placeholder="Entrer tel" autocomplete="off">
                </div>
                <div class="cont_nom_">
                    <label for="fax_cl">Fax :</label>
                    <input  value="<?php echo @$data['fax'];?>" type="text" id="fax_cl" name="fax_cl" placeholder="Entrer fax" autocomplete="off">
                </div>
                <div class="cont_nom_">
                    <label for="adresse_cl">Adresse :</label>
                    <input  value="<?php echo @$data['adress_bp'];?>" type="text" id="adresse_cl" name="adresse_cl" placeholder="Entrer adresse" autocomplete="off">
                </div>
                <div class="cont_nom_">
                    <label for="email_cl">E-mail :</label>
                    <input  value="<?php echo @$data['email'];?>" type="email" id="email_cl" name="email_cl" placeholder="Entrer email" autocomplete="off">
                </div>
                <hr/>
                <div id="les_bt_clent">
                    <button type="reset">Effacer</button>
                    <button type="submit">Valider</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>