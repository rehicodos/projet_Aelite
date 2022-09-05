<?php
 include_once('connexion.php');
 ?>
 <?php
    if(isset($_POST['bt_evoi'])){
        if(!empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['designation']) and !empty($_POST['quantite_'])){

            $nom=$_POST['nom'];             
            $tel=$_POST['tel']; 
            $fax=$_POST['fax'];            
            $adress=$_POST['adress'];            
            $email=$_POST['email']; 

            $desi=$_POST['designation'];             
            $unit=@$_POST['unite']; 
            $qt=@$_POST['quantite_'];            
            $pu=@$_POST['prix_u'];            
            $pt=@$_POST['prix_t']; 

            $lastInsertId = mysqli_insert_id($bdd);         
            for($a = 0; $a < count($desi); $a++){
                $quer = "INSERT INTO details_facture(ord_id,designation,unite,quantite_,prix_u,prix_t) VALUES($lastInsertId, '$desi[$a]', '$unit[$a]', '$qt[$a]', '$pu[$a]', '$pt[$a]')";
                $result = mysqli_query($bdd,$quer);
            }

            $requete = "SELECT COUNT(id) AS nb FROM client WHERE nom='".$_POST["nom"]."' AND email='".$_POST["email"]."';";
            $retours = mysqli_query($bdd, $requete);
            $retour = mysqli_fetch_array($retours);

            if($retour["nb"]>0)
            print("");
            else
            {
                $querre = "INSERT INTO client(nom,tel,fax,adress_bp,email) VALUES('$nom', '$tel', '$fax', '$adress', '$email')";
                $resut = mysqli_query($bdd,$querre);
                
            }

            $date_ = date("d/m/Y ; H:i:s");
            $nom_client = $_POST['nom'];
            $ref_detail = mysqli_insert_id($bdd);
            $num_f = @$_POST['numero_f'];

            $montant_total = 0;
            $pt=@$_GET['prix_t'];
            for($a = 0; $a < sizeof($pt); $a++){
                $montant_total += $pt[$a];

            }

            $req = "INSERT INTO h_facture(date_,num_facture,id_cl,id_details_f,montant_) VALUES ('@$date', '$num_f', '$nom_client', $ref_detail, $montant_total)";
            $resut = mysqli_query($bdd,$req);
        }
        

        
    }

    
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="factures__p.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Facturation</title>
</head>
<body>
    <!-- _____________Affichage rapide d'une fenetre_________________ -->
    <script>
        //  alert("Bonjour");
        $(document).ready(function(){
            $(".qt").click(function(){
                $(".tout_saisir_form_calcul").toggle();
            });
        });

        $(document).ready(function(){
            $(".n_lign").click(function(){
                $("#ligne_cacher").toggle();
                alert(somme_v);
            });
        });

        $(document).ready(function(){
            $(".raccoucir_B").click(function(){
                $(".recour_biblio").toggle(slow="4000");
            });
        });
        $(document).ready(function(){
            $("#tabl_biblio td").click(function(){
                $(".recour_biblio").toggle(slow="3000");
            });
        });

        $(document).ready(function(){
            $(".pu").click(function(){
                $(".tout_saisir_form_calcul_pu").toggle();
            });
         });
        $(document).ready(function(){
            $(".coch_ok").click(function(){
                $("#saisir_cl_cacher_").toggle();
            });
         });
    </script>
    
    <!-- calcul automatique des champs Quantité et Prix unitaire -->
    <script>
        $(document).ready(function(){
            $(".tout , .touttt").keyup(function(){
                    // alert(compter);
                    var total = 0;
                    var x = Number($("#quan").val());
                    var y = Number($("#paa").val());
                    total = x*y;
                    $("#ptt").val(total);
                });      
        });
        $(document).ready(function(){
            $("#ligne_cacher .lign_c").keyup(function(){
                    // alert(compter);
                    var total = 0;
                    var x = Number($("#qt").val());
                    var y = Number($("#pa").val());
                    total = x*y;
                    $("#pv").val(total);
                });      
        });
    </script>
    
    <!-- _____________ajout de nouvelle ligne au champ de saisir___________________ -->
    <!-- <script>
        function ajout_bt(){
            var n_l = "<tr>";
            n_l += "<td><input name='des[]' type='text' placeholder=' Saisir désignation'</td>";
            n_l += "<td><input name='uni[]' type='text' placeholder=' Saisir unité '</td>";
            n_l += "<td><input name='quan[]' type='text' id='quan' placeholder=' Saisir quantité'</td>";
            n_l += "<td><input name='pri_a[]' type='text' id='p_a' placeholder=' Saisir prix unitaire'</td>";
   
            n_l += "<td><input  name='pri_t[]' type='text' id='p_t'</td>";
            n_l += "</tr>";

            document.getElementById("tbodyy").insertRow().innerHTML = n_l;
        }
        
       
    </script> -->
    <!-- ____________________Somme total ou encore Sous-total_________________ -->
    <script>
        
        $(function(){
            var somme_v = 0;
            $("[id*=totall]").each(function(){
                somme_v = somme_v + parseFloat($(this).html());
            });
            $("[id*=champ_r]").html(somme_v);

        });

    </script>
    <!-- _________________Recherche auto sur liste client________________ -->
    <script>
        $(document).ready(function(){
            $("#seach").keyup(function(){
                search_table($(this).val());
            });
            function search_table(value) {
                $("#tabl_biblio tr").each(function(){
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
    
    <h1>Facturation</h1>
            <div class="for_saisir">
                <div class="saisir">
                    <div class="info_client_et_bt">
                        <div id="client_info"><strong>Informations client</strong></div>
                        <div class="raccoucir">
                            <!-- <label class="lab_rech" for="rech">Selectionner un client →</label>     -->
                            <button class="raccoucir_B">Selectionner un client</button>
                            <!-- <button id="aj_client" class="raccouci_B">Ajouter un client</button> -->
                        </div>
                    </div>
                    
                    <!-- ___________________la liste cliente_________________ -->
                    <div class="recour_biblio">
                            <!-- <h3>___ Cocher une ligne ___</h3> -->
                            <?php
                                //  include('tb_DB.php');
                                $reqselect = "select * from client";
                                $resultat = mysqli_query($bdd,$reqselect);

                                $nbr = mysqli_num_rows($resultat);
                                // echo "<h4> Total :<b> ".$nbr."</b> elements present.</h4>";
                            ?>
                            <form id="no_reflech" action="" method="post"> 
                                <div class="entet_list_clien">
                                    <?php echo "<h4> Total :<b> ".$nbr."</b> client(s)</h4>"; ?>
                                    <div id="rech_search">
                                        <h4>Recherche :</h4>
                                        <input type="text" name="seach" id="seach">
                                    </div>
                                </div>
                                <div class="boit_liste_client">
                                    <table id="tabl_biblio">                      
                                            <tr>
                                                <!-- <th>Cocher</th> -->
                                                <th>Nom</th>
                                                <th>Tel</th>
                                                <th>Fax</th>
                                                <th>Adresse</th>
                                                <th>E-mail</th>
                                                <!-- <th>Site Web</th> -->
                                                <!-- <th>Modifier</th> -->
                                            </tr>
                                            <?php
                                                $re = "SELECT * FROM client";
                                                $rows = mysqli_query($bdd,$re);
                                                // $i = 1;
                                            foreach($rows as $row) :
                                            ?>
                                            <tr class="tr_survol">
                                                <!-- <td><input id="clic_radio" type="radio" name="check[]" value="<?php echo $row['id'] ; ?>"></td> -->
                                                <td><?php echo utf8_encode($row['nom']);?></td>
                                                <td><?php echo utf8_encode($row['tel']);?></td>
                                                <td><?php echo $row['fax'];?></td>
                                                <td><?php echo $row['adress_bp'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <!-- <td><?php echo $row['site_web'];?></td> -->
                                            </tr>

                                            <?php endforeach; ?>
                                    </table>
                                </div>
                            </form>
                            
                    </div>
                    <div class="saisi_et_biblio">
                        <form action="" method="post">
                                    <!-- ____________Saisir de facture entiere____________ -->
                            <div id="client_saisir">
                                <table>
                                    <tr>
                                        <th><p>Nom</p></th>
                                        <th><p>Tel</p></th>
                                        <th><p>Fax</p></th>
                                        <th><p>Adresse</p></th>
                                        <th><p>E-mail</p></th>
                                    </tr>
                                    <tr id="saisir_cl_cacher_">
                                        <td><input name="nom" id="nom" type="text" autocomplete="off"></td>
                                        <td><input name="tel" id="tel" type="text" autocomplete="off"></td>
                                        <td><input name="fax" id="fax" type="text" autocomplete="off"></td>
                                        <td><input name="adress" id="adress" type="text" autocomplete="off"></td>
                                        <td><input name="email" id="email" type="text" autocomplete="off"></td>
                                    </tr>
                                </table>
                            </div>
                           <div id="client_info"><strong>Details facture</strong></div>
                           <div id="details_f_saisi">
                                <table>
                                    <tr>
                                        <th><p>Numéro facture</p></th>
                                        <th><p>Date de création</p></th>
                                    </tr>
                                    <tr id="saisir_cl_cacher_">
                                        <td><input name="numero_f" id="numero_f" type="text" autocomplete="off"></td>
                                        <td><input name="date_f" id="date_f" type="text" autocomplete="off"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="saisi_direct">
                                <div class="tout_saisir">
                                    <div class="detail_f">
                                        <table class="tableau_tout_saisir_devis" id="ajout_lign">
                                                <form action="" method="post">
                                                    <tr>                                           
                                                        <th width="10%"><p><input id="checkAll" class="formcontrol" type="checkbox"></p></th>                                  
                                                        <th width="30%"><p>Désignation</p></th>                                   
                                                        <th width="10%"><p>Unité</p></th>                                   
                                                        <th width="10%"><p>Quantité</p></th>                                    
                                                        <th width="20%"><p>Prix Unitaire</p></th>                                   
                                                        <th width="20%"><p>Prix Total</p></th>                                   
                                                    </tr>
                                                    <tr>
                                                        <td><input class="itemRow" type="checkbox" name="" id=""></td>
                                                        <td><input id="des" type="text" name="designation[]" autocomplete="off"></td>
                                                        <td><input id="uni" type="text" name="unite[]" autocomplete="off" ></td>
                                                        <td><input class="lign_c" id="quantity_1" type="number" name="quantite_[]" autocomplete="off" ></td>
                                                        <td><input class="lign_c" id="price_1" type="number" name="prix_u[]" autocomplete="off"></td>
                                                        <td><input id="total_1" type="number" name="prix_t[]" autocomplete="off" ></td>
                                                    </tr>                        
                                                </form>
                                        </table>
                                        <div class="ajout_sup_execut">
                                                
                                                <button type="button" class="nv_lign">Nouvelle ligne +</button>
                                                <button type="button" class="sup_lign">Supprimer ligne -</button>

                                                <div class="eff_execut">
                                                    <input class="bt_ef_ev" type="reset" value="Annuler">
                                                    <input name="bt_evoi"  class="bt_ef_ev" type="submit" value="Exécuter">
                                                </div>        
                                        </div>
                                    </div>
                                    <div class="ht_tva_ttc">
                                            <table>
                                                <tr>
                                                    <th class="td_nom"></th>
                                                    <th class="td_input"></th>
                                                </tr>
                                                <tr>
                                                    <td ><strong><p>HT :</p></strong></td>
                                                    <td ><input id="ht_" type="text"></td>
                                                </tr>
                                                <tr>
                                                    <td ><strong><p>TVA 18%</p></strong></td>
                                                    <td ><input id="tva"  type="text"></td>
                                                </tr>
                                                <tr>
                                                    <td ><strong><p>TTC :</p></strong></td>
                                                    <td ><input id="ttc_" type="text"></td>
                                                </tr>
                                                
                                            </table>
                                    </div>          
                                </div>     
                            </div>
                        </form>
                    
                    </div>
                    </form>
              </table>
                </div>
                <!-- _________h2 pour le SMS de resultat___________ -->
                <div class="sms_resultat">
                    <h2>Resultat du travail effectué</h2>
                </div>
                <!-- ____________Affichage de resultat pour toutes saisir_____________ -->
                <div class="tb_resltat">
                   <?php
                            //  include('tb_DB.php');
                        $reqselect = "select * from h_facture";
                        $resultat = mysqli_query($bdd,$reqselect);

                        $nbr = mysqli_num_rows($resultat);
                        echo "<h4> Total :<b> ".$nbr."</b> element(s) present.</h4>";
                            
                    ?> 
                        <table id="table_resultatt_">
                            <tr>
                                <!-- <th>Cocher</th> -->
                                <th class="un">N°</th>
                                <th class="deux">Date de creation</th>
                                <th class="trois">Numéro</th>
                                <th class="qatre">N° client</th>
                                <th class="cinq">Details</th>
                                <!-- <th>Modifier</th> -->
                            </tr>
                            <?php
 
                            while($ligne = mysqli_fetch_assoc($resultat))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $ligne['id'];?></td>
                                    <td><?php echo $ligne['date'];?></td>
                                    <td><?php echo $ligne['num_facture'];?></td>
                                    <td><?php echo $ligne['id_cl'];?></td>
                                    <td id="totall"><?php echo $ligne['id_details_f'];?></td>
                                   
                                </tr>
                                
                                <?php
                            }
                            ?>
                            <!-- <tr >
                                <td  colspan="4"><h4 class="p_tr">Sous-total :</h4></td>
                                <td id="champ_r" ></td>
                            </tr>
                             -->

                        </table>
                        
                </div>
            </div>
  
            <?php
           
            ?>
    <script src="CODE_16JS.js"></script>
    
</body>
</html>