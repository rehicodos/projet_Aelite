
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