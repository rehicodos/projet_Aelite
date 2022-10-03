<?php
    // include_once('connexion.php');
    $bdd = new PDO("mysql:host=localhost;dbname=dbaelite;charset=utf8","root","");

    if(isset($_POST['nom']) or isset($_POST['position']) or isset($_POST['adress_bp']) or isset($_POST['tel']) or isset($_POST['email'])){
        if(!empty($_POST['nom']) or !empty($_POST['position']) or !empty($_POST['adress_bp']) or !empty($_POST['tel']) or !empty($_POST['email'])){
                
            // if(isset($_POST['bt_modifi_info_aelite'])){
                // $bdd_ = new PDO("mysql:host=localhost;dbname=dbaelite;charset=utf8","root",""); 
    
                $nom=$_POST['nom'];             
                $position=$_POST['position']; 
                $adress_bp=$_POST['adress_bp'];
                $tel=$_POST['tel']; 
                $email=$_POST['email'];           
        
                $requ = "UPDATE info_aelite SET nom='$nom' , position='$position' , adress_bp='$adress_bp' , tel='$tel' , email='$email' ";
                $resul = $bdd->prepare($requ);
                $resul->execute();
        
                 if($requ){
                    header('location:devis.php');
                  }
            // }
    
        //   else{
        //      header('location:mod_echec.php');
        //    }
    
          }
    
          $bdd = null;
    } 
    
?>