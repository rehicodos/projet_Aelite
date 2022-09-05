<?php 
// ========= la connexion ===========
//  include_once('connexion.php'); 
$bdd = new PDO("mysql:host=localhost;dbname=dbaelite;charset=utf8","root","");


// ============= presence des mots automatique dans le formulaire modifier ========
if(isset($_GET['modifier'])){
   $id = $_GET['modifier'];
   $query = $bdd->prepare('SELECT * FROM  dbaeliteco WHERE Code= :modifier');
   $query->bindValue(':modifier',$_GET['modifier'],PDO::FETCH_ASSOC);
   $query->execute();
   $data = $query->fetch();
}

// ================ execution avec bouton modifier ==========

if(isset($_POST['desi']) or isset($_POST['unit']) or isset($_POST['qt']) or isset($_POST['pa']) or isset($_POST['pv']) or @isset($_GET['modifier'])){
   if(!empty($_POST['desi']) or !empty($_POST['unit']) or !empty($_POST['qt']) or !empty($_POST['pa']) or !empty($_POST['pv']) or !empty($_POST['modifier'])){
           
     if(isset($_POST['mod'])){

      $desi=htmlspecialchars($_POST['desi']);             
      $unit=htmlspecialchars($_POST['unit']); 
      $qt=htmlspecialchars($_POST['qt']);
      $pa=htmlspecialchars($_POST['pa']);
      $pv=htmlspecialchars($_POST['pv']);
      $id =htmlspecialchars(@$_GET['modifier']);             

      // $requ = "UPDATE dbaeliteco SET designation='$desi' , unite='$unit' , quantite='$qt' , pa='$pa' , pv='$pv'  WHERE Code='$id'";
      $requ = "UPDATE `dbaeliteco` SET`designation`='$desi',`unite`='$unit',`quantite`='$qt',`pa`='$pa',`pv`='$pv' WHERE Code='$id'";
      $resul = $bdd->prepare($requ);
      $resul->execute();

        if($requ){
      //   header('location:biblio.php');
      echo 'ok cela est très bien' ;
        }
     }

     else{
      //   header('location:mod_echec.php');
      echo 'non erreur..';
      }

  }

   //   $bdd = null; 
} 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN" "http://www.w3.org/TR/REC-html40/strict.dtd"> 
<html>   
   <head>         
        <meta http-equiv="Content-Type" content="text/html; charset=utf8">   
        <title>Modifier element dans une table</title>
        <link rel="stylesheet" href="modifier_db.css" type="text/css" />
   </head>  

<body id="style_body">  

  <div id="container">  
     
    <form action=""            
    method="post" class="formulaire"          
    enctype="application/x-www-form-urlencoded">  

    <h2 id="h2_d_ajouter" >Modifier les informations</h2> 

        <fieldset id="fieldset_ajouter">         

         <legend><b>Vos coordonnées</b></legend>   

            <table id="tab">             
            <tr> <td id="style_td">Designation : </td> <td id="style_td"><input id="style_input" type="text" name="desi" 
            value="<?php echo @$data['designation'];?>" size="40" maxlength="30" require/></td> </tr>   

            <tr> <td id="style_td">Unité : </td> <td id="style_td"><input id="style_input" type="text" name="unit" 
            value="<?= @$data['unite'];?>" size="40" maxlength="30" require/></td> </tr> 
            
            <tr> <td id="style_td">Quantité : </td> <td id="style_td"><input id="style_input" type="text" name="qt" 
            value="<?= @$data['quantite'];?>" size="40" maxlength="30" require/></td> </tr>

            <tr> <td id="style_td">Prix d'achat : </td> <td id="style_td"><input id="style_input" type="text" name="pa" 
            value="<?= @$data['pa'];?>" size="40" maxlength="30" require/></td> </tr>

            <tr> <td id="style_td">Prix de vente : </td> <td id="style_td"><input id="style_input" type="text" name="pv" 
            value="<?= @$data['pv'];?>" size="40" maxlength="30" require/></td> </tr>

            <td id="style_td"><input id="style_input_efface" type="reset" value=" Effacer "></td> 
            <td id="style_td"><input type="submit" name="mod" value=" Modifier "></td>                
                       
            </table>   
         <p><a href="biblio.php" class="submit"><h3>Retour</h3></a></p> 

        </fieldset>   
   </form>  

  </div>

   </body> 
</html> 