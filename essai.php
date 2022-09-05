<?php 
$serveur = "localhost";
$user = "root";
$pw = "";
$bddd = "essai_db";

$bdd = new mysqli($serveur,$user,$pw,$bddd);

if(isset($_POST['ok'])){
            // if(!empty($_POST['desig']) and !empty($_POST['un']) and !empty($_POST['qtt']) and !empty($_POST['paa']) and !empty($_POST['ptt'])){
                        
                $desi=$_POST['desig'];             
                $unit=$_POST['un']; 
                $qt=$_POST['qtt'];            
                $pu=$_POST['paa'];            
                $pt=$_POST['ptt'];  
                $invoiceDat = date("d/m/Y ; H:i:s");          

                    $quer = "INSERT INTO produit(inf_client,date_,nom_p,qt_p,prix_u,prix_t) VALUES('$desi','$invoiceDat', '$unit', '$qt', '$pu', '$pt')";
                    $result = mysqli_query($bdd,$quer);                    
}

?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <title>Document</title>
    
</head>
<style>
    table{
        border: 2px solid black;
    }
    td{
        border: 1px solid black;
    }
</style>
<body>

    <table class="tb1">
        <form action="" method="post">
            <tr>
                <td colspan="6"><button name="ok" class="bt_ok" type="submit">valider</button></td>
            </tr>
            <tr>
                <!-- <th class="un">Numéro facture</th> -->
                <th class="deux">N° client</th>
                <th class="trois">Nom produit</th>
                <th class="trois">Quantité</th>
                <th class="qatre">Prix d'achat</th>
                <th class="cinq">Prix de vente</th>
            </tr>
            
            <tr>
                <!-- <td><input type="checkbox" name="check[]" value="<?php echo $row['Code'] ; ?>"></td> -->
                <td><input name="desig" type="text" autocomplete="off"></td>
                <td><input name="un"  type="text" autocomplete="off"></td>
                <td><input name="qtt"  type="text" autocomplete="off"></td>
                <td><input name="paa"  type="text" autocomplete="off"></td>
                <td><input name="ptt"  type="text" autocomplete="off"></td>

            </tr>

            
        </form>
    </table><br><br>

    <table>
        <tr>
            <!-- <th>Cocher</th> -->
            <th class="un">Numéro facture</th>
            <th class="un">Date</th>
            <th class="deux">N° client</th>
            <th class="trois">Nom produit</th>
            <th class="trois">Quantité</th>
            <th class="qatre">Prix d'achat</th>
            <th class="cinq">Prix de vente</th>
            <!-- <th>Modifier</th> -->
        </tr>
        <form action="" method="post">
        <?php
        function getData($sqlQuery) {
            $serveur = "localhost";
            $user = "root";
            $pw = "";
            $bddd = "essai_db";

            $bdd = new mysqli($serveur,$user,$pw,$bddd);
            $result = mysqli_query(@$bdd, $sqlQuery);
            if(!$result){
                die('Error in query: '. mysqli_error());
            }
            $data= array();
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $data[]=$row;            
            }
            return $data;
        }
        function getInvoiceList(){
            $sqlQuery = "
                SELECT * FROM produit ";
            return getData($sqlQuery);
        }
        
        $invoiceList = getInvoiceList();
        foreach($invoiceList as $invoiceDetails){
			// @$invoiceDate = date("d/M/Y, H:i:s");
            echo '
              <tr>
                <td>'.$invoiceDetails["id_p"].'</td>
                <td>'.$invoiceDetails["date_"].'</td>
                <td>'.$invoiceDetails["inf_client"].'</td>
                <td>'.$invoiceDetails["nom_p"].'</td>
                <td>'.$invoiceDetails["qt_p"].'</td>
                <td>'.$invoiceDetails["prix_u"].'</td>
                <td>'.$invoiceDetails["prix_t"].'</td>
            
               
              </tr>
            ';
        }       
        ?>
            
        
        </form>
    </table>
    <table id="table">
        <tr>
            <th>nom</th>
            <th>tel</th>
            <th>mail</th>
        </tr>
        <tr>
            <td>a</td>
            <td>1</td>
            <td>2</td>
        </tr>
        <tr>
            <td>d</td>
            <td>z</td>
            <td>t</td>
        </tr>
        <tr>
            <td>3d</td>
            <td>z4</td>
            <td>t2</td>
        </tr>
        
    </table>
    <table>
        <tr>
            <td><input id="nom" type="text"></td>
            <td><input id="tel" type="text"></td>
            <td><input id="mail" type="text"></td>
        </tr>
    </table>

<script>
    var table = document.getElementById("table");
    var rwIndex;
	for(var i = 1 ; i < table.rows.length ; i++){
		table.rows[i].onclick = function(){
			rwIndex = this.rowIndex;
			console.log(rwIndex);
			// document.getElementById("nom").value = this.cells[0].innerHTML;
			// document.getElementById("tel").value = this.cells[1].innerHTML;
			// document.getElementById("mail").value = this.cells[2].innerHTML;
			// document.getElementById("adress").value = this.cells[3].innerHTML;
		};
	}
</script>

    
       
</body>
</html>