<?php 
$bdd = new PDO("mysql:host=localhost;dbname=mondial;charset=utf8","root",""); 

    if(isset($_POST['motcle']) and !empty($_POST['motcle'])){
        $query = preg_replace("#[^a-zA-Z ?0-9]#i", "", $_POST['motcle']);

            if($_POST['filtre'] == "ismember"){
                $rql = "SELECT id_ismember FROM ismember WHERE Country LIKE ?";
            }

            else if($_POST['filtre'] == "--"){
                // rien
            }

            $rq = $bdd->prepare($rql);
            $rq->execute(array('%'.$query.'%'));
            $count = $rq->rowCount();

            if($count >= 1){
                echo 'dos';
            }

            else{
                // rien
                echo 'rehico';
            }
    }
//  }
// echo 'rehico dos'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Entete </title>
    <style>
    #corps{
        background: white;
    }
    
    #formauto{
    position: relative;
    border: 1px solid whitesmoke;
    border-left: none; border-right: none;
    background-color: rgba(000, 000,000, 0.2);
    margin-left: auto;margin-right: auto;
    width: 65%; min-height: 3%;
    text-align: center;
    padding:2%;
    margin-top: 30px;
    margin-bottom: -20px;

}

/*============== style champs de recherche ==========*/
#motcle{
    height: 30px;width: 250px;
    border: none; scroll-padding-left: 2px;
    border-radius: 15px;
}

/*=============== style bouton recherche ===============*/
.btfind{
    height: 30px;width: 250px;
    border: none; background-color: #F30;
    color: #FFF;
    border-radius: 15px;
    margin-left: 3px;
}
    </style>
</head>

<body id="corps">

<div id="formauto">
<form name="formauto" methode="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
     <input  type="search" id="motcle" name="motcle" placeholder="     Recherche sur la table" />
     <select name="filtre">
    <option value="ismember">ismember</option>
    <option value="--">-------</option>
   </select>
     <input  type="submit" class="btfind"  value="Recherche" />

</form>
</div>

</body>
</html>