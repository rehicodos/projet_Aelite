<?php
 include_once('connexion.php');
 ?>
 <?php


        if(isset($_POST['bt_evoi'])){
            if(!empty($_POST['desig']) and !empty($_POST['un']) and !empty($_POST['qtt']) and !empty($_POST['paa']) and !empty($_POST['ptt'])){
                        
                $desi=$_POST['desig'];             
                $unit=$_POST['un']; 
                $qt=$_POST['qtt'];            
                $pu=$_POST['paa'];            
                $pt=$_POST['ptt'];            
                // @$g_titre=htmlspecialchars($_GET['g_titre']);            

                for($a = 0; $a < count($desi); $a++){
                    $quer = "INSERT INTO bloc_1(design,unite,quantite,prix_u,prix_t) VALUES('$desi[$a]', '$unit[$a]', '$qt[$a]', '$pu[$a]', '$pt[$a]')";
                    $result = mysqli_query($bdd,$quer);
                }
                
            
            }
            
            
        }
        if(isset($_POST['bt_evoi'])){
            if(!empty($_POST['des']) and !empty($_POST['uni']) and !empty($_POST['qt']) and !empty($_POST['pa']) and !empty($_POST['pv'])){
                        
                $des=$_POST['des'];             
                $uni=$_POST['uni']; 
                $quan=$_POST['qt'];            
                $pri_a=$_POST['pa'];            
                $pri_t=$_POST['pv'];            
                
                $quer = "INSERT INTO bloc_1(design,unite,quantite,prix_u,prix_t) VALUES('$des', '$uni', '$quan', '$pri_a', '$pri_t')";
                $result = mysqli_query($bdd,$quer);               
            
            }

        }     
        if(isset($_POST['bt_evoi'])){
            if(!empty($_POST['titr'])){
                        
                $titr=$_POST['titr'];                         
                
                $quer = "INSERT INTO titr_bloc_1(titre) VALUES('$titr')";
                $result = mysqli_query($bdd,$quer);               
            
            }
        }     
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form_travaux000.css">
    <link rel="stylesheet" href="factures.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Formulaire travaux</title>
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
                $(".recour_biblio").toggle();
            });
        });

        $(document).ready(function(){
            $(".pu").click(function(){
                $(".tout_saisir_form_calcul_pu").toggle();
            });
         });

        $(document).ready(function(){
            $(".feuille_de_calcul").click(function(){
                $("#parti_calcul_devis").toggle(slow="300");
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
    <script>
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
        
       
    </script>
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
    <!-- _________________Recherche auto sur biblio________________ -->
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
    
    <h1>Travaux et divers coordonnées</h1>
    
            <div class="for_saisir">
                <div class="saisir">
                    <div id="gt_rech">
                                                
                        <div class="raccoucir">
                           <div class="recherche">
                                <label class="lab_rech" for="rech">Accès bibliothèque →</label>    
                                <button class="raccoucir_B">Biblio</button>
                            </div>
                        </div>
                    </div>
                    <div class="saisi_et_biblio">
                        <div class="saisi_direct">
                            <form action="" method="post">
                
                                <!-- ____________Saisir de devis entier____________ -->
                                <div class="tout_saisir">
                                    <!-- <form action="" method="post"> -->
                                        <table class="tableau_tout_saisir_devis" id="ajout_lign">
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
                                        </table>
                                    <!-- </form> -->
                                </div>
                                <div class="ajout_sup_execut">
                                        <div class="eff_execut">
                                            <button type="button" class="nv_lign">Nouvelle ligne +</button>
                                            <button type="button" class="sup_lign">Supprimer ligne -</button>
                                            <button type="button" class="un_titre">Un titre</button>
                                            <button type="button" class="sous_total">Sous-total</button>
                                            <button type="button" class="feuille_de_calcul">Feuille de Calcul</button>
                                        </div>         
                                        <div class="eff_execut">
                                            <input class="bt_ef_ev" type="reset" value="Annuler">
                                            <input name="bt_evoi"  class="bt_ef_ev" type="submit" value="Exécuter">
                                        </div>        
                                </div>
                            </form>
                        </div>
                    <!-- ___________________la grande bibliotheque_________________ -->
                        <div class="recour_biblio">
                            <h3>___ Cocher une ligne ___</h3>
                            <div id="rch_bilbioo">
                                <h4>Recherche :</h4>
                                <input type="text" name="seach" id="seach">
                            </div>
                            <?php
                                //  include('tb_DB.php');
                                $reqselect = "select * from dbaeliteco";
                                $resultat = mysqli_query($bdd,$reqselect);

                                $nbr = mysqli_num_rows($resultat);
                                // echo "<h4> Total :<b> ".$nbr."</b> elements present.</h4>";
                            ?>
                            <table id="tabl_biblio">
                                <form action="" method="post">
                                    <tr class="tr_biblio_entete">
                                        <td colspan="2"><?php echo "<h4> Total :<b> ".$nbr."</b> elements present.</h4>"; ?></td>
                                        <td colspan="2"></td>
                                        <td colspan="2"><button name="ok" type="submit" class="coch_ok">OK</button></td>
                                    </tr>
                                
                                    <tr>
                                        <th>Cocher</th>
                                        <th>Désignation</th>
                                        <th>Unité</th>
                                        <th>Quantité</th>
                                        <th>Prix d'achat</th>
                                        <th>Prix de vente</th>
                                        <!-- <th>Modifier</th> -->
                                    </tr>
                                    <?php
                                        $re = "SELECT * FROM dbaeliteco";
                                        $rows = mysqli_query($bdd,$re);
                                        // $i = 1;
                                    foreach($rows as $row) :
                                    ?>
                                    <tr class="tr_survol">
                                        <td><input id="clic_radio" type="radio" name="check[]" value="<?php echo $row['Code'] ; ?>"></td>
                                        <td><?php echo utf8_encode($row['designation']);?></td>
                                        <td><?php echo utf8_encode($row['unite']);?></td>
                                        <td><?php echo $row['quantite'];?></td>
                                        <td><?php echo $row['pa'];?></td>
                                        <td><?php echo $row['pv'];?></td>
                                    </tr>

                                    <?php endforeach; ?>
                                
                                </form>

                            </table>
                         </div>
                        </div>
                    </form>
              </table>
                </div>
                
    <!-- ____________calcul des details du devis____________  -->
    <div id="parti_calcul_devis">
        <div class="saisi_direct">
            <h2 id="sms_feuille_calcul">Feuille de calcul (DQE)</h2>
            <div id="m2_m3">
                <div class="m2">
                    <div class="text">
                        <h2>Calcul en m²</h2>
                    </div>
                    <div class="champ_de_sais">
                        <table>
                            <tr>
                                <th>Longueur</th>
                                <th>Largeur</th>
                                <th>Surface</th>
                            </tr>
                            <tr>
                                <td><input type="number" name="" id="m2_1"></td>
                                <td><input type="number" name="" id="m2_2"></td>
                                <td><input type="number" name="" id="result_m2"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="m3">
                    <div class="text">
                        <h2>Calcul en m³</h2>
                    </div>
                    <div class="champ_de_sais2">
                        <table>
                            <tr>
                                <th>Longueur</th>
                                <th>Largeur</th>
                                <th>Hauteur</th>
                                <th>Volume</th>
                            </tr>
                            <tr>
                                <td><input type="number" name="" id="m3_1"></td>
                                <td><input type="number" name="" id="m3_2"></td>
                                <td><input type="number" name="" id="m3_3"></td>
                                <td><input type="number" name="" id="result_m3"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="generalite">
                <table>
                    <tr>
                        <td colspan='5'><p class="genera">Généralité</p></td>
                    </tr>
                    <tr>                                                                           
                        <th width="25%">Désignation</th>                                   
                        <th width="10%">Unité</th>                                   
                        <th width="19%">Quantité</th>                                    
                        <th width="23%">Prix_U</th>                                   
                        <th width="23%">Prix_T</th>                                                                     
                    </tr>
                    <tr>
                        <td><input class="gener" type="text" value='Installation et replis chantier' name="" id=""></td>
                        <td><input class="gene" type="text" value="ft" name="" id=""></td>
                        <td><input class="genne" type="number" name="" id="gene_qt"></td>
                        <td><input class="genne" type="number" name="" id="gene_pu"></td>
                        <td><input class="gene" type="number" name="" id="gene_pt"></td>
                    </tr>
                    <tr>
                        <td><input class="gener" type="text" value="Implantation d'ouvrage" name="" id=""></td>
                        <td><input class="gene" type="text" value="m²" name="" id=""></td>
                        <td><input class="genne" type="number" name="" id="gene1_qt"></td>
                        <td><input class="genne" type="number" name="" id="gene1_pu"></td>
                        <td><input class="gene" type="number" name="" id="gene1_pt"></td>
                    </tr>
                    <tr>
                        <td colspan="4"><h4 id="s_t_calcull" class="s_t_calcul"><strong>Total</strong></h4></td>
                        <td><input type="number" name="" id="tt_generalite"></td>
                    </tr>
                </table>
            </div>
                <div class="beton">
                    <div class="tout_calcul_">   
                    <div class="vrai_feuill_calcu">
                        <table id="tab_fouille">
                            <tr>
                                <td colspan="6"><p id="id_terrassem">Fondation / Terrassement</p></td>
                            </tr>
                            <tr>
                                <!-- <td></td> -->
                                <td colspan="2"><p>*Fouille</p></td>
                            </tr>
                            <tr>
                                <th>Désignaton</th>
                                <th>Unité</th>
                                <th>Quantité</th>
                                <th>Prix_U</th>
                                <th>Prix_T</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="" id="" ></td>
                                <td><input type="text" value="m³" name="" id="unitt_"></td>
                                <td><input class="premiere_lign" type="number" name="" id="quantite00_"></td>
                                <td><input class="premiere_lign" type="number" name="" id="prix_unitaire00_"></td>
                                <td><input type="number" name="" id="pprix_total00_"></td>
                            </tr>
                            <tbody></tbody>
                            <tr>
                                <td colspan="4"><h4  class="s_t_calcul"><strong>Prix Total Fouille</strong></h4></td>
                                <td><input type="number" name="" id="tt_fouille"></td>
                            </tr>
                            <tr>
                                <td><button type="button" id="bouton_fouille">Ajouter ligne</button></td>
                                <td><button type="button" id="bt_ok_fouille">OK</button></td>
                            </tr>
                        </table>
                        <div class="separateur"></div>
                        <table id="tab_remblais">
                            <tr>
                                <!-- <td></td> -->
                                <td colspan="2"><p>*Remblais</p></td>
                            </tr>
                            <tr>
                                <th>Désignaton</th>
                                <th>Unité</th>
                                <th>Quantité</th>
                                <th>Prix_U</th>
                                <th>Prix_T</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="" id="" ></td>
                                <td><input type="text" value="m³" name="" id="unitt_"></td>
                                <td><input class="premiere_lign" type="number" name="" id="quantite0_"></td>
                                <td><input class="premiere_lign" type="number" name="" id="prix_unitaire0_"></td>
                                <td><input type="number" name="" id="pprix_total0_"></td>
                            </tr>
                            <tbody></tbody>
                            <tr>
                                <td colspan="4"><h4  class="s_t_calcul"><strong>Prix Total Remblais</strong></h4></td>
                                <td><input type="number" name="" id="tt_remblais"></td>
                            </tr>
                            <tr>
                                <td><button type="button" id="bouton_remblais">Ajouter ligne</button></td>
                                <td><button type="button" id="bt_ok_remblais">OK</button></td>
                            </tr>
                        </table>
                    </div>       
                        <table class="calcul_des_details_du_devi" id="calcul_des_details_du_devis">
                            <tr>
                                <!-- <td><input class="itemRoww" type="checkbox" name="" id=""></td> -->
                                <td></td>
                                <td></td>
                                <td colspan="3"><p class="sms_dosage">Dosage Béton</p></td>
                            </tr>
                            <tr>                                           
                                <!-- <th width="5%"><input id="checkAl" class="formcontrol" type="checkbox"></th>                                   -->
                                <th width="24%">Désignation</th>                                   
                                <th width="10%">Unité</th>                                   
                                <th width="13%">Quantité</th>                                    
                                <th width="11%">Ciment</th>                                   
                                <th width="11%">Sable</th>                                   
                                <th width="10%">Gravier</th>                                   
                                <th width="11%">Coffrage</th>                                   
                                <th width="10%">Acier</th>                                   
                            </tr>
                            <tr>
                                <!-- <td><input class="itemRoww" type="checkbox" name="" id=""></td> -->
                                <td colspan="8"><p class="sm_dosage">Béton Propreté Dosé à :</p></td>
                            </tr>
                            <tr>
                                <!-- <td><input class="itemRoww" type="checkbox" name="" id=""></td> -->
                                <td><input class="titre_defo_calcull" value="150kg/m3" id="desii" type="text" name="designation[]" autocomplete="off"></td>
                                <td><input value="m³" class="unii" type="text" name="unite[]" autocomplete="off" ></td>
                                <td><input class="lign_c" id="quantity__1" type="number" name="quantite_[]" autocomplete="off" ></td>
                                <td><input class="lign_" id="ciment_1" type="number" name="prix_u[]" autocomplete="off"></td>
                                <td><input class="lign_c" id="sable_1" type="number" name="prix_u[]" autocomplete="off"></td>
                                <td><input class="lign_c" id="gravier_1" type="number" name="prix_u[]" autocomplete="off"></td>
                                <td><input class="lign_c" id="coffrage_1" type="number" name="prix_u[]" autocomplete="off"></td>
                                <td><input class="lign_c" id="acier_1" type="number" name="prix_u[]" autocomplete="off"></td>
                            </tr>
                                        <tr>
                                            <!-- <td><input class="itemRoww" type="checkbox" name="" id=""></td> -->
                                            <td><input class="titre_defo_calcull" value="200kg/m3" id="desii" type="text" name="designation[]" autocomplete="off"></td>
                                            <td><input value="m³" class="unii" type="text" name="unite[]" autocomplete="off" ></td>
                                            <td><input class="lign_c" id="quantity__2" type="number" name="quantite_[]" autocomplete="off" ></td>
                                            <td><input class="lign_" id="ciment_2" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="sable_2" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="gravier_2" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="coffrage_2" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="acier_2" type="number" name="prix_u[]" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <!-- <td><input class="itemRoww" type="checkbox" name="" id=""></td> -->
                                            <td><input class="titre_defo_calcull" value="250kg/m3" id="desii" type="text" name="designation[]" autocomplete="off"></td>
                                            <td><input value="m³" class="unii" type="text" name="unite[]" autocomplete="off" ></td>
                                            <td><input class="lign_c" id="quantity__3" type="number" name="quantite_[]" autocomplete="off" ></td>
                                            <td><input class="lign_" id="ciment_3" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="sable_3" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="gravier_3" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="coffrage_3" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="acier_3" type="number" name="prix_u[]" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <!-- <td><input class="itemRoww" type="checkbox" name="" id=""></td> -->
                                            <td colspan="8"><p class="sm_dosage">Béton Armé Dosé à :</p></td>
                                        </tr>
                                        <tr>
                                            <!-- <td><input class="itemRoww" type="checkbox" name="" id=""></td> -->
                                            <td><input class="titre_defo_calcull" value="350kg/m3" id="desii" type="text" name="designation[]" autocomplete="off"></td>
                                            <td><input value="m³" class="unii" type="text" name="unite[]" autocomplete="off" ></td>
                                            <td><input class="lign_c" id="quantity__4" type="number" name="quantite_[]" autocomplete="off" ></td>
                                            <td><input class="lign_" id="ciment_4" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="sable_4" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="gravier_4" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="coffrage_4" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="acier_4" type="number" name="prix_u[]" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <!-- <td><input class="itemRoww" type="checkbox" name="" id=""></td> -->
                                            <td><input class="titre_defo_calcull" value="400kg/m3" id="desii" type="text" name="designation[]" autocomplete="off"></td>
                                            <td><input value="m³" class="unii" type="text" name="unite[]" autocomplete="off" ></td>
                                            <td><input class="lign_c" id="quantity__5" type="number" name="quantite_[]" autocomplete="off" ></td>
                                            <td><input class="lign_" id="ciment_5" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="sable_5" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="gravier_5" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="coffrage_5" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="acier_5" type="number" name="prix_u[]" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <!-- <td><input class="itemRoww" type="checkbox" name="" id=""></td> -->
                                            <td><input class="titre_defo_calcull" value="450kg/m3" id="desii" type="text" name="designation[]" autocomplete="off"></td>
                                            <td><input value="m³" class="unii" type="text" name="unite[]" autocomplete="off" ></td>
                                            <td><input class="lign_c" id="quantity__6" type="number" name="quantite_[]" autocomplete="off" ></td>
                                            <td><input class="lign_" id="ciment_6" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="sable_6" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="gravier_6" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="coffrage_6" type="number" name="prix_u[]" autocomplete="off"></td>
                                            <td><input class="lign_c" id="acier_6" type="number" name="prix_u[]" autocomplete="off"></td>
                                        </tr>
                                        
                                        <tbody>
                                        </tbody>
                                        <tr>
                                        <td colspan="3"><h4 id="s_t_calcull" class="s_t_calcul"><strong>Total</strong></h4></td>
                                        <td><input class="lign_c" type="text" name="" id="tt_ciment"></td>
                                        <td><input class="lign_c" type="number" name="" id="tt_sable"></td>
                                        <td><input class="lign_c" type="number" name="" id="tt_gravier"></td>
                                        <td><input class="lign_c" type="number" name="" id="tt_coffrage"></td>
                                        <td><input class="lign_c" type="number" name="" id="tt_acier"></td>
                                        </tr> 
                        </table>  
                    </div>
                    <!-- <div class="ajout_sup_executt">
                        <div class="eff_execut">
                            <button type="button" class="nvlle_lign">Nouvelle ligne +</button>
                            <button type="button" class="sup2_lign">Supprimer ligne -</button>
                            <button type="button" class="un2_titre">Un titre</button>
                            <button id="okay_calcul" type="button">Okay</button>
                        </div>                 
                    </div> -->
                    <div id="table_resultat_calcul">
                        <table>
                            <tr>
                                <td colspan="5"><p class="sms_dosage">Rendu en Détails</p></td>
                            </tr>
                            <tr>
                                <th>Désignation</th>
                                <th>Unité</th>
                                <th>Quantité</th>
                                <th>Prix_U</th>
                                <th>Prix_T</th>
                            </tr>
                            <tr>
                                <td><input type="text" value="Ciment" name="" id=""></td>
                                <td><input type="text" value="t" name="" id=""></td>
                                <td><input type="number" name="" id="cimen"></td>
                                <td><input type="text" value="80000" name="" id="tt1"></td>
                                <td><input type="text" name="" id="pt_ciment"></td>
                            </tr>
                            <tr>
                                <td><input type="text" value="Sable" name="" id=""></td>
                                <td><input type="text" value="v" name="" id=""></td>
                                <td><input type="number" name="" id="sabl"></td>
                                <td><input type="text" value="85000" name="" id="tt2"></td>
                                <td><input type="text" name="" id="pt_sable"></td>
                            </tr>
                            <tr>
                                <td><input type="text" value="Gravier" name="" id=""></td>
                                <td><input type="text" value="t" name="" id=""></td>
                                <td><input type="number" name="" id="gravie"></td>
                                <td><input type="text" value="10000" name="" id="tt3"></td>
                                <td><input type="text" name="" id="pt_gravier"></td>
                            </tr>
                            <tr>
                                <td><input type="text" value="Transport gravier" name="" id=""></td>
                                <td><input type="text" value="v" name="" id=""></td>
                                <td><input type="number" name="" id="t_g"></td>
                                <td><input type="text" value="150000" name="" id="tt4"></td>
                                <td><input type="text" name="" id="pt_coffrage"></td>
                            </tr>
                            <!-- <tr>
                                <td><input type="text" value="Eau" name="" id=""></td>
                                <td><input type="text" value="L" name="" id=""></td>
                                <td><input type="number" name="" id=""></td>
                                <td><input type="text" value="1 500" name="" id=""></td>
                                <td><input type="number" name="" ></td>
                            </tr> -->
                            <tr>
                                <td><input type="text" value="Acier" name="" id=""></td>
                                <td><input type="text" value="b" name="" id=""></td>
                                <td><input type="number" name="" id="aci____er"></td>
                                <td><input type="text" value="59322" name="" id="tt5"></td>
                                <td><input type="number" name="" id="pt_acier"></td>
                            </tr>
                            <tr>
                                <td><input type="text" value="Coffrage" name="" id=""></td>
                                <td><input type="text" value="m²" name="" id=""></td>
                                <td><input type="number" name="" id="coff"></td>
                                <td><input type="text" value="3750" name="" id="tt6"></td>
                                <td><input type="number" name="" id="pt_cof_2"></td>
                            </tr>
                            <!-- <footer> -->
                                <tr>
                                    <td colspan="4"><h4  class="s_t_calcul"><strong>TOTAL DEBOURSE SEC HT DOSAGE</strong></h4></td>
                                    <td><input type="number" name="" id="debour_ht"></td>
                                </tr>
                                <!-- <tr>
                                    <td colspan="4"><h4  class="s_t_calcul"><strong>MONTANT TOTAL TRAVAUX HT</strong></h4></td>
                                    <td><input type="number" name="" id="montant_travo"></td>
                                </tr>
                                <tr>
                                    <td colspan="4"><h4  class="s_t_calcul"><strong>TOTAL MARGE HT</strong></h4></td>
                                    <td><input type="text" name="" id="marge_"></td>
                                </tr>
                                <tr>
                                    <td colspan="4"><h4  class="s_t_calcul"><strong>COEFFICIENT K</strong></h4></td>
                                    <td><input type="text" name="" id="coeff"></td>
                                </tr> -->
                            <!-- </footer> -->
                        </table>
                    </div>
                </div>
            <?php
                include_once('feuille_calcul.php');
            ?>    
        </div>
    </div>

                <!-- _________h2 pour le SMS de resultat___________ -->
                <div class="sms_resultat">
                    <h2>Resultat du travail effectué</h2>
                </div>
                <!-- ____________Affichage de resultat pour toutes saisir_____________ -->
                <div class="tb_resltat">
                   <?php
                            //  include('tb_DB.php');
                        $reqselect = "select * from bloc_1";
                        $resultat = mysqli_query($bdd,$reqselect);

                        $nbr = mysqli_num_rows($resultat);
                        echo "<h4> Total :<b> ".$nbr."</b> element(s) present.</h4>";
                            
                    ?> 
                        <table id="table_resultatt_">
                            <tr>
                                <!-- <th>Cocher</th> -->
                                <th class="un">Désignation</th>
                                <th class="deux">Unité</th>
                                <th class="trois">Quantité</th>
                                <th class="qatre">Prix d'achat</th>
                                <th class="cinq">Prix de vente</th>
                                <!-- <th>Modifier</th> -->
                            </tr>
                            
                            
                            <?php
 
                            while($ligne = mysqli_fetch_assoc($resultat))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $ligne['design'];?></td>
                                    <td><?php echo $ligne['unite'];?></td>
                                    <td><?php echo $ligne['quantite'];?></td>
                                    <td><?php echo $ligne['prix_u'];?></td>
                                    <td id="totall"><?php echo $ligne['prix_t'];?></td>
                                   
                                </tr>
                                
                                <?php
                            }
                            ?>
                            <tr >
                                <td  colspan="4"><h4 class="p_tr">Sous-total :</h4></td>
                                <td id="champ_r" ></td>
                            </tr>
                            

                        </table>
                        
                </div>
            </div>
  
            <?php
           
            ?>
    <script src="CODE_12345_1.js"></script>
</body>
</html>