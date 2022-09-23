<?php
 include_once('connexion.php');

    if(isset($_POST['bt_modifi_info_aelite'])){
    
                
        $nom=$_POST['nomm'];             
        $position=$_POST['posit']; 
        $adress=$_POST['adress'];            
        $tel=$_POST['tell'];            
        $email=$_POST['maill'];            
        // $logo=$_POST['logoo'];            

        $quer = "UPDATE info_aelite SET nom='".$_POST['nomm']."',position='".$_POST['posit']."',adress_bp='".$_POST['adress']."',tel='".$_POST['tell']."',email='".$_POST['maill']."' WHERE id='1'";
        $result = mysqli_query($bdd,$quer);
        
    
    }

    if(isset($_POST['bt_valider_entete_devis'])){
        if(!empty($_POST['nom1']) and !empty($_POST['tel1']) and !empty($_POST['adress1'])){
                    
            $nom=$_POST['nom1'];             
            $tel=$_POST['tel1']; 
            $fax=$_POST['fax1'];            
            $adress=$_POST['adress1'];            
            $mail=$_POST['mail1'];            
            $web=$_POST['web1'];            
 
            $quer = "INSERT INTO client_copy(nom,tel,fax,adress_bp,email,site_web) VALUES('$nom', '$tel', '$fax', '$adress', '$mail', '$web')";
            $result = mysqli_query($bdd,$quer);
        }
        
        
    }
    if(isset($_POST['bt_valider_entete_devis'])){
        if(!empty($_POST['nom_']) and !empty($_POST['tel_']) and !empty($_POST['adress_'])){
                    
            $nom_=$_POST['nom_'];             
            $tel_=$_POST['tel_']; 
            $fax_=$_POST['fax_'];            
            $adress_=$_POST['adress_'];            
            $mail_=$_POST['mail_'];            
            $web_=$_POST['web_'];            
 
            $quer = "INSERT INTO client_copy(nom,tel,fax,adress_bp,email,site_web) VALUES('$nom_', '$tel_', '$fax_', '$adress_', '$mail_', '$web_')";
            $result = mysqli_query($bdd,$quer);
        }
        
        
    }
    if(isset($_POST['bt_valider_entete_devis'])){
        if(!empty($_POST['num']) and !empty($_POST['offr']) and !empty($_POST['dat'])){
                    
            $num__=$_POST['num'];             
            $offr__=$_POST['offr']; 
            $dat__=$_POST['dat'];            
            $edit__=$_POST['edit'];                       
 
            $quer = "INSERT INTO num_date(num_devis,offre,date_devis,edition_) VALUES('$num__', '$offr__', '$dat__', '$edit__')";
            $result = mysqli_query($bdd,$quer);
        }
        
        
    }
    if(isset($_POST['bt_valider_entete_devis'])){
        if(!empty($_POST['nom_']) and !empty($_POST['tel_']) and !empty($_POST['adress_'])){
                    
            $nom__=$_POST['nom_'];             
            $tel__=$_POST['tel_']; 
            $fax__=$_POST['fax_'];            
            $adress__=$_POST['adress_'];            
            $mail__=$_POST['mail_'];            
            // $web__=$_POST['web_'];            
 
            $quer = "INSERT INTO client(nom,tel,fax,adress_bp,email) VALUES('$nom__', '$tel__', '$fax__', '$adress__', '$mail__')";
            $result = mysqli_query($bdd,$quer);
        }
        
        
    }
    
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="devis00__.css">
    <link rel="stylesheet" href="f_devis__.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Devis</title>
</head>
<body>
    <!-- PARTIE RESULTAT TOTAL __ CALCUL DE TVA HT ET TTC -->
    <script>
        // CALCUL DE TOUS LES SOUS TOTAUX
        $(function(){
            var somme_v = 0;
            $("[id*=tt_prix_]").each(function(){
                somme_v = somme_v + parseFloat($(this).html());
            });
            $(".HT_").html(somme_v);

        });
        // CALCUL DU TVA
        $(document).ready(function(){
            $("#tva").keyup(function(){
                    var x = parseFloat($("#HT_").html());
                    var y = Number($("#tva").val());
                    var tt_tva = (y/100)*x;
                    $("#TTvAA").html(tt_tva);
            });
        });
        // CALCUL DU MONTANT_TTC
        $(document).ready(function(){
            $("#tva").keyup(function(){
                    // alert(compter);
                    var TTH = 0;
                    var x = parseFloat($("#HT_").html());
                    var y = Number($("#tva").val());
                    var tt_tva = (y/100)*x;
                    TTC = x + tt_tva;
                    $("#MONTANT_TTC").html(TTC);
            });
        });
    </script>
    <!-- affiche dierct de la valeur  -->
    <script>
        $(document).ready(function(){
            $("#tva").keyup(function(){
                    var y = Number($("#tva").val());
                    $("#val_tva").html(y);
            });
        }); 
    </script>
 
    <!-- ________affichage rapide de doc_client et travaux________________  -->
    <script>
        //  ____affichage gros oeuvre_______
        $(document).ready(function(){
            $("#affich_gros_oeuvre").click(function(){
                $("#gros_oeuvre").show();
                $(".doc_devis").hide();
                $("#text_resul").hide();
                $(".resultat").hide();
                $(".travaux_devis").hide();
                $("#les_bt_pdf_excel").hide();
            });
            $(".text_gros_second_oeuvre").click(function(){
                $("#gros_oeuvre").show();
                $(".doc_devis").hide();
                $("#text_resul").hide();
                $(".resultat").hide();
                $(".travaux_devis").hide();
                $("#les_bt_pdf_excel").hide();
            });
            $("#bt_retour_gros_oeuvre").click(function(){
                $("#gros_oeuvre").hide();
                $(".doc_devis").show();
                $("#text_resul").show();
                $(".resultat").show();
                $(".travaux_devis").show();
                $("#les_bt_pdf_excel").show();
            });
        });

        $(document).ready(function(){
            $(".bt_doc_cl").click(function(){
                $(".f_dos").toggle(slow="3000");
            });
        });
        $(document).ready(function(){
            $(".formul").click(function(){
                $(".travaux_devis").toggle(slow="3000");
            });
        });
        $(document).ready(function(){
            $("#bt_info_aelite_ancien").click(function(){
                $(".info-aelite").toggle(slow="3000");
            });
        });
    </script>
   
    <div class="doc_devis">
        <div class="doc">
            <button class="bt_doc_cl">Entête devis</button>
        </div>
        <div class="devi">
            <button class="formul">Etude (Travaux)</button>
        </div>
    </div>
    <!-- la fenetre contenant les clients  -->
    <div class="renseignement_inf_client">
            <table id="tabl_biblio">
                <form action="" method="post">
                    <?php
                                //  include('tb_DB.php');
                        $reqselect = "select * from client";
                        $resultat = mysqli_query($bdd,$reqselect);

                        $nbr = mysqli_num_rows($resultat);
                                // echo "<h4> Total :<b> ".$nbr."</b> elements present.</h4>";
                    ?>
                    <tr class="tr_biblio_entete">
                        <td colspan="2"><?php echo "<h4> Nombre de client :<b> ".$nbr."</b></h4>"; ?></td>
                        <!-- <td colspan="2"></td> -->
                        <!-- <td colspan="2"><button name="ok" type="submit" class="coch_ok">OK</button></td> -->
                    </tr>
                                    
                    <tr>
                        <!-- <th>Cocher</th> -->
                        <th>Nom</th>
                        <th>Tel</th>
                        <th>Fax</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <!-- <th>Site Web</th> -->
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
                                    
                </form>

            </table>
    </div>
        <!-- <div class="f_dos"> -->
    <form action="#" method="post" >
            <div class="f_dos">
                <div class="les_champ">
                    <div class="d2">
                        <h3>Coordonnées de l'entreprise</h3>
                        <div class="info_entrepise">
                            <!-- <button type="button" class="bt_info_aelite" id="bt_info_aelite_ancien">Information existante</button> -->
                            <button type="button" class="bt_info_aelite" id="bt_info_aelite_nouvelle">Modifier information de l'entreprise</button>
                        </div>
                    </div>
                    <div class="d1">
                    <h3>L'identité du client</h3>
                    <table >
                        <!-- <div class="trr3"> -->
                            <tr class="trr3">
                                <td><label class="nm_cl" for="nm_cl">Nom :</label></td>
                                <td><input name="nom_" id="nm_cl" type="text"></td>
                            </tr>
                            <tr class="trr3">
                                <td><label class="pm_cl" for="pm_cl">Tel :</label></td>
                                <td><input name="tel_" id="pm_cl" type="text"></td>
                            </tr>
                            <tr class="trr3">
                                <td><label class="n_cl" for="n_cl">Fax :</label></td>
                                <td><input name="fax_" id="n_cl" type="text"></td>
                            </tr>
                            <tr class="trr3">
                                <td><label class="adress_cl" for="adress_cl">Adresse :</label></td>
                                <td><input name="adress_" id="adress_cl" type="text"></td>
                            </tr>
                            <tr class="trr3">
                                <td><label class="email_cl" for="email_cl">E-mail :</label></td>
                                <td><input name="mail_" id="email_cl"  type="mail"></td>
                            </tr>
                            <!-- <tr class="trr3">
                                <td><label class="site_web_cl" for="logo_cl">Logo :</label></td>
                                <td><input name="logo_" id="logo_cl" type="file"></td>
                            </tr> -->

                            <tr class="trr2">
                                <td><label class="nm_cl" for="nm_cl">Nom :</label></td>
                                <td><input name="nom_" id="nm_cl" type="text"></td>
                            </tr>
                            <tr class="trr2">
                                <td><label class="pm_cl" for="pm_cl">Tel :</label></td>
                                <td><input name="tel_" id="pm_cl" type="text"></td>
                            </tr>
                            <tr class="trr2">
                                <td><label class="n_cl" for="n_cl">Fax :</label></td>
                                <td><input name="fax_" id="n_cl" type="text"></td>
                            </tr>
                            <tr class="trr2">
                                <td><label class="adress_cl" for="adress_cl">Adresse :</label></td>
                                <td><input name="adress_" id="adress_cl" type="text"></td>
                            </tr>
                            <tr class="trr2">
                                <td><label class="email_cl" for="email_cl">E-mail :</label></td>
                                <td><input name="mail_" id="email_cl"  type="mail"></td>
                            </tr>
                            <!-- <tr class="trr2">
                                <td><label class="site_web_cl" for="logo_cl">Logo :</label></td>
                                <td><input name="logo_" id="logo_cl" type="file"></td>
                            </tr> -->
                            <!-- <tr class="trr3">
                                <td><label class="site_web_cl" for="site_web_cl">Site web :</label></td>
                                <td><input name="web_" id="site_web_cl" type="text"></td>
                            </tr> -->
                            
                        <!-- </div> -->
                        <?php
                            if(isset($_POST['ok']) and isset($_POST['check'])){
                                // $idd = $_POST['check']
                                foreach($_POST['check'] as $iddId){
                                    $re = "SELECT * FROM client WHERE id='$iddId'";
                                    $resultaux = mysqli_query($bdd,$re);

                                    if ($resultaux->num_rows > 0) {
                                        while($row = $resultaux->fetch_assoc()) {
                                            ?>
                                            
                                            <tr>
                                                <td><label class="nm_cl" for="nm_cl">Nom Client :</label></td>
                                                <td><input id="nm_cl" name="nom1" value="<?php echo utf8_encode($row['nom']); ?>" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td><label class="pm_cl" for="pm_cl">Tel :</label></td>
                                                <td><input id="pm_cl" name="tel1" value="<?php echo utf8_encode($row['tel']); ?>" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td><label class="n_cl" for="n_cl">Fax :</label></td>
                                                <td><input id="n_cl" name="fax1" value="<?php echo utf8_encode($row['fax']); ?>" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td><label class="adress_cl" for="adress_cl">Adresse :</label></td>
                                                <td><input id="adress_cl" name="adress1" value="<?php echo utf8_encode($row['adress_bp']); ?>" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td><label class="email_cl" for="email_cl">E-mail :</label></td>
                                                <td><input id="email_cl" name="mail1" value="<?php echo utf8_encode($row['email']); ?>" type="mail"></td>
                                            </tr>
                                            <tr>
                                                <td><label class="site_web_cl" for="site_web_cl">Site web :</label></td>
                                                <td><input id="site_web_cl" name="web1" value="<?php echo utf8_encode($row['site_web']); ?>" type="text"></td>
                                            </tr>
                                            <?php
                                        }
                                    } 
                                }
                            }
                        ?>
                        <button type="button" class="bt_info_aelite" id="bt_choisir_client">Selectionner un client </button>
                        <button type="button" class="bt_info_aelite" id="bt_nouveau_client">Nouveau client </button>
                    </table>
                </div>
                    <div class="d1">
                        <table>
                            <tr>
                                <td><label class="d_d" for="d_d">Numéro devis :</label></td>
                                <td><input name="num" type="text" id="d_d"><br></td>
                            </tr>
                            <tr>
                                <td><label class="d_v_d" for="d_v_d">L'offre :</label></td>
                                <td><input name="offr" type="text" id="d_v_d"><br></td>
                            </tr>
                            <tr>
                                <td><label class="d_t" for="d_t">Date de demande :</label></td>
                                <td><input name="dat" type="date" id="d_t"><br></td>
                            </tr>
                            <tr>
                                <td><label class="d_s_t" for="d_s_t">Date d'edition :</label></td>
                                <td><input name="edit" type="date" id="d_s_t"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="bt_f">
                    <input class="eff" type="reset" value="Annuler">
                    <input name="bt_valider_entete_devis" class="vali" type="submit" value="Valider">
                </div>
            </div> 
             
        </form>
        <div class="mise_ajour_info_aelite">
            <form action="#" method="">
                <table>
                    <tr>
                        <th id="info_n">Nom entreprise </th>
                        <th id="info_p">Adresse </th>
                        <th id="info_a">Boite postale</th>
                        <th id="info_t">Tel</th>
                        <th id="info_e">Email</th>
                        <!-- <th id="info_l">Logo</th> -->
                    </tr>
                    <?php
                        $reqselect = "select * from info_aelite";
                        $resultat = mysqli_query($bdd,$reqselect);
                        $ligggne = mysqli_fetch_assoc($resultat);
                    ?>
                    <tr>
                        <td><input name="nomm" type="text" value="<?php echo utf8_encode(@$ligggne['nom']);?>"></td>
                        <td><input name="posit" type="text" value="<?php echo utf8_encode(@$ligggne['position']);?>"></td>
                        <td><input name="adress" type="text" value="<?php echo utf8_encode(@$ligggne['adress_bp']);?>"></td>
                        <td><input name="tell" type="text" value="<?php echo utf8_encode(@$ligggne['tel']);?>"></td>
                        <td><input name="maill" type="text" value="<?php echo utf8_encode(@$ligggne['email']);?>"></td>
                        <!-- <td><input name="logoo" type="file" value="<?php echo utf8_encode(@$ligggne['logo']);?>"></td> -->
                        
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2"><button name="bt_modifi_info_aelite" id="bt_valider_la_modification_info_aelite" type="submit">Valider</button></td>
                        <td colspan="2"></td>
                    </tr>
                </table>
            </form>
        </div>
    <div class="travaux_devis">
        <div class="global">
            <div class="gros_oeuvre">
                <!-- <div class="s_g_o"> -->
                <img id="affich_gros_oeuvre" src="images/g_oeuvre_2.jpg" alt="">
                <button type="button" class="text_gros_second_oeuvre">Gros Oeuvre</button>
                <!-- </div> -->
            </div>
            <div id="second_oeuvre">
                <!-- <div class="s_s_o"> -->
                <a href="second_oeuvre.php"><img id="imag" src="images/second_oeuvre.jpg" alt=""></a>
                <button type="button" class="text_gros_second_oeuvr">Second Oeuvre</button>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div id="gros_oeuvre"><?php include('gros_oeuvre.php'); ?></div>
    
    <h2 id="text_resul">Resultat Devis</h2>
    <!-- _____________affichage total tout bloc devis____________ -->
    <div class="resultat">
        <!-- Info_aelite et client affiche -->
        <div class="info_aelite_client">
            <div class="info-aelite">
                <?php
                    $reqselect = "select * from info_aelite";
                    $resultat = mysqli_query($bdd,$reqselect);
                    $lig = mysqli_fetch_assoc($resultat);
                ?>
                    <p><img src="images/logo_aelite.png" alt="logo-aelite"></p>               
                    <p class="avance_p"><?php echo utf8_encode(@$lig['nom']);?></p>                
                    <p class="avance_p"><?php echo utf8_encode(@$lig['position']);?></p>                
                    <p class="avance_p"><?php echo utf8_encode(@$lig['adress_bp']);?></p>               
                    <p class="avance_p">Tel :<?php echo "  ",utf8_encode(@$lig['tel']);?></p>                   
                    <p class="avance_p">Email :<?php echo "  ",utf8_encode(@$lig['email']);?></p>
            </div>
            <div class="client">
                <?php
                    $reqselect = "select * from client_copy";
                    $resultat = mysqli_query($bdd,$reqselect);
                    $lig = mysqli_fetch_assoc($resultat);
                ?>
                <p class="avanc_p">Client :<?php echo "  ",utf8_encode(@$lig['nom']);?></p>               
                <p class="avanc_p">Tel :<?php echo "  ",utf8_encode(@$lig['tel']);?></p>           
                <p class="avanc_p">Fax :<?php echo "  ",utf8_encode(@$lig['fax']);?></p>           
                <p class="avanc_p">Adresse :<?php echo "  ",utf8_encode(@$lig['adress_bp']);?></p>                
                <p class="avanc_p">E-mail :<?php echo "  ",utf8_encode(@$lig['email']);?></p>
                <p class="avanc_p">Site web :<?php echo "  ",utf8_encode(@$lig['site_web']);?></p>
            </div>
        </div>
        <div class="date_numero_devis">
            <?php
                $reqselect = "select * from num_date";
                $resultat = mysqli_query($bdd,$reqselect);
                $ligner = mysqli_fetch_assoc($resultat);
            ?>
            <div class="numero_offr">
                <p class="avanc_p">NUMERO DEVIS :<?php echo "  ",utf8_encode(@$ligner['num_devis']);?></p>
                <p class="avanc_p">OFFRE :<?php echo "  ",utf8_encode(@$ligner['offre']);?></p>  
            </div>
            <div class="date_devis">
                <p >Abidjan le,<?php echo "  ",utf8_encode(@$ligner['date_devis']);?></p>
                <p>Edition du <?php echo "  ",utf8_encode(@$ligner['edition_']);?></p>  
            </div>
        </div> 
    </div>
    <div id="les_bt_pdf_excel">
        <div class="div_val">
        <button class="bouton_val">Valider</button>
        </div>
        <div class="imp_enregistExcel">
            <a href="#"><button class="bt_im">PDF</button></a>
            <a href="#"><button class="bt_">Exporter vers Excel</button></a>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#bt_choisir_client").click(function(){
                $(".renseignement_inf_client").toggle(slow="3000");
            });
        });
        $(document).ready(function(){
            $("#tabl_biblio td").click(function(){
                $(".trr3").show(slow="3000");
                $(".renseignement_inf_client").hide();
            });
        });
        $(document).ready(function(){
            $("#bt_nouveau_client").click(function(){
                $(".trr3").hide();
                $(".trr2").toggle(slow="3000");
            });
        });
        $(document).ready(function(){
            $("#bt_info_aelite_nouvelle").click(function(){
                $(".mise_ajour_info_aelite").toggle(slow="3000");
            });
        });
        
        // affichage des informations du client dans les champs input
        var tabl = document.getElementById("tabl_biblio"), rwIndex;
        for(var i = 0 ; i < tabl.rows.length ; i++){
            tabl.rows[i].onclick = function(){
                rwIndex = this.rowIndex;
                // alert(rwIndex);
                document.getElementById("nm_cl").value = this.cells[0].innerHTML;
                document.getElementById("pm_cl").value = this.cells[1].innerHTML;
                document.getElementById("n_cl").value = this.cells[2].innerHTML;
                document.getElementById("adress_cl").value = this.cells[3].innerHTML;
                document.getElementById("email_cl").value = this.cells[4].innerHTML;
            };
        }
    </script>   
</body>
</html>