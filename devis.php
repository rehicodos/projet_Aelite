<?php
    include_once('connexion.php');

    if(isset($_POST['nom']) or isset($_POST['position']) or isset($_POST['adress_bp']) or isset($_POST['tel']) or isset($_POST['email'])){
        if(!empty($_POST['nom']) or !empty($_POST['position']) or !empty($_POST['adress_bp']) or !empty($_POST['tel']) or !empty($_POST['email'])){
                
            // if(isset($_POST['bt_modifi_info_aelite'])){
                // $bdd_ = new PDO("mysql:host=localhost;dbname=dbaelite;charset=utf8","root",""); 
    
                $nom=htmlspecialchars($_POST['nom']);             
                $position=htmlspecialchars($_POST['position']); 
                $adress_bp=htmlspecialchars($_POST['adress_bp']);
                $tel=htmlspecialchars($_POST['tel']); 
                $email=htmlspecialchars(@$_POST['email']);           
        
                $requ = "UPDATE info_aelite SET nom='$nom' , position='$position' , adress_bp='$adress_bp' , tel='$tel' , email='$email' ";
                $resul = $bdd->prepare($requ);
                $resul->execute();
        
                //  if($requ){
                //     header('location:client.php');
                //   }
            // }
    
        //   else{
        //      header('location:mod_echec.php');
        //    }
    
          }
    
          $bdd = null; 
    } 
    
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="devis.css">
    <link rel="stylesheet" href="f_devis.css">
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
 
    <!-- ________affichage rapide de doc_client, travaux et les actions gros - second oeunvre________________  -->
    <script>
        //  ____affichage/appel des page  gros oeuvre_______
        $(document).ready(function(){
            // ____affichage/appel de la page principale_______
            $("#bt_retour_page_principale").click(function(){
                $("#page_devis").hide();
                $(".ent").show();
                $("#conteneur_page_principale").show();
            });
            
            // ____affichage/appel de la page  devis.php(page_devis)_______
            $("#bt_tprelim_retour_page_page_devis").click(function(){
                $("#travaux_preliminaiire").hide();
                $(".doc_devis").show();
                $("#conteneur_bt_retour_et_bordereau_T").show();
                $("#text_resul").show();
                $("#conteneur_resultat").show();
                $("#les_bt_pdf_excel").show();
            });
            $("#bt_retour_terrassement").click(function(){
                $("#terressement").hide();
                $(".doc_devis").show();
                $("#conteneur_bt_retour_et_bordereau_T").show();
                $("#text_resul").show();
                $("#conteneur_resultat").show();
                $("#les_bt_pdf_excel").show();
            });
            $("#bt_retour_fondation").click(function(){
                $("#fondaton").hide();
                $(".doc_devis").show();
                $("#conteneur_bt_retour_et_bordereau_T").show();
                $("#text_resul").show();
                $("#conteneur_resultat").show();
                $("#les_bt_pdf_excel").show();
            });
            
            $("#bt_retour_gros_oeuvre").click(function(){
                $("#gros_oeuvre").hide();
                $(".doc_devis").show();
                $("#text_resul").show();
                $("#conteneur_resultat").show();
                $(".travaux_devis").show();
                $("#les_bt_pdf_excel").show();
                $("#bt_retour_page_principale").show();
            });

        });


        $(document).ready(function(){
            $(".bt_doc_cl").click(function(){
                $(".f_dos").toggle(slow="3000");
            });
        });
        $(document).ready(function(){
            $(".formul").click(function(){
                // $(".travaux_devis").toggle(slow="3000");
                $("#pere_borderau").toggle(slow="3000");
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

    <!-- ______bt_retour et borderau travaux_____ -->
    <div id="conteneur_bt_retour_et_bordereau_T" >
        <div id="tb_retou"><button id="bt_retour_page_principale" type="button"><strong><-<-<- Retour</strong></button></div>
        <div id="pere_borderau">
            <div class="borderau">
                <h3>Borderau Travaux</h3>
                <select id="borderau_select_travaux_0" name="" onclick="select_borderau();">
                    <option value="">Selectionne ...</option>
                    <option value="1">T.Préliminaires</option>
                    <option value="2">Terrassement</option>
                    <option value="3">Fondation</option>
                    <option value="4">Assainissement</option>
                    <option value="5">Soubassement</option>
                    <option value="6">Elevation</option>
                    <option value="7">Charpente</option>
                    <option value="8">Toiture</option>
                    <option value="9">Menuiserie</option>
                    <option value="10">Cloisons</option>
                    <option value="11">Isolation Thermique</option>
                    <option value="12">Electricité</option>
                    <option value="13">Plomberie</option>
                    <option value="14">Peinture</option>
                    <option value="15">Platerie</option>
                    <option value="16">Revêtement Mur</option>
                    <option value="17">Maçonnerie</option>
                    <option value="18">Funeraire</option>
                    <option value="19">Dallage</option>
                    <option value="20">Pavage</option>
                    <option value="21">Carrelage</option>
                    <option value="22">Zinguerie</option>
                    <option value="23">Etancheité</option>
                    <option value="24">Cheminée</option>
                </select>
            </div>
        </div>
    </div>
    
    <!-- la fenetre contenant les clients  -->
    <div class="renseignement_inf_client">
            <table id="tabl_biblio">
                <!-- <form action="" method="post"> -->
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
                        $re = "SELECT * FROM client ORDER BY id DESC";
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
                                    
                <!-- </form> -->

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
            <form action="#" method="post">
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
                        $bdd_0 = new PDO("mysql:host=localhost;dbname=dbaelite;charset=utf8","root","");

                        $query = $bdd_0->prepare('SELECT * FROM  info_aelite');
                        // $query->bindValue(':modifier',$_GET['modifier'],PDO::FETCH_ASSOC);
                        $query->execute();
                        $data = $query->fetch();
                    ?>
                    <tr>
                        <td><input name="nom" type="text" value="<?php echo utf8_encode(@$data['nom']);?>"></td>
                        <td><input name="position" type="text" value="<?php echo utf8_encode(@$data['position']);?>"></td>
                        <td><input name="adress_bp" type="text" value="<?php echo utf8_encode(@$data['adress_bp']);?>"></td>
                        <td><input name="tel" type="text" value="<?php echo utf8_encode(@$data['tel']);?>"></td>
                        <td><input name="email" type="text" value="<?php echo utf8_encode(@$data['email']);?>"></td>
                        
                    </tr>
                </table>
                <hr/>
                <div id="bt_mod_aelite_">
                    <td colspan="2"><button name="bt_modifi_info_aelite" id="bt_valider_la_modification_info_aelite" type="submit">Valider</button></td>
                </div>
            </form>
        </div>
    <!-- __________canvas gros oeuvre et second oeuvre_____ -->
    <div class="travaux_devis">
        <div class="global">
            <div class="gros_oeuvre">
                <!-- <div class="s_g_o"> -->
                <img src="images/g_oeuvre_2.jpg" alt="">
                <button type="button" id="affich_gros_oeuvre" class="text_gros_second_oeuvre">Gros Oeuvre</button>
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

    <h2 id="text_resul">Resultat Devis</h2>

    <div id="conteneur_resultat">
        <div class="resultat">
            <!-- Info_aelite et client affiche -->
            <div class="info_aelite_client">
                <div class="info-aelite">
                    
                        <p><img src="images/logo_aelite.png" alt="logo-aelite"></p>               
                        
                </div>
                <div class="client">
                    
                </div>
            </div>
            <div class="date_numero_devis">
                
            </div>
            <table id="tab_devis">
                <tr>
                    <th width="5%">X</th>
                    <th width="30%">Désignation</th>
                    <th width="10">Unité</th>
                    <th width="15%">Quantité</th>
                    <th width="20%">Prix_U</th>
                    <th width="20%">Prix_T</th>
                </tr>
                <tbody></tbody>
            </table> 
        </div>
        <div id="resultat_dqe">
            <h3 id="dqe_">Devis Quantitatif Estimatif (DQE)</h3>
            <table id="tab_dqe">
                <tr>
                    <th width="5%">X</th>
                    <th width="30%">Désignation</th>
                    <th width="10">Unité</th>
                    <th width="15%">Quantité</th>
                    <th width="20%">Prix_U</th>
                    <th width="20%">Prix_T</th>
                </tr>
                <tbody></tbody>
            </table>
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

    <!-- ______inclusion des pages externe____ -->
    <div id="travaux_preliminaiire"><?php include('travaux_preliminaire.php'); ?></div>
    <div id="terressement"><?php include('terrassement.php'); ?></div>
    <div id="fondaton"><?php include('fondation.php'); ?></div>

    <script>
        // ______selection type de travail dans borderau_____
        function select_borderau() {
            var selection_B = document.getElementById("borderau_select_travaux_0").value;

            if(selection_B == "1"){
                $("#travaux_preliminaiire").show();
                $("#conteneur_bt_retour_et_bordereau_T").hide();
                $(".doc_devis").hide();
                $("#text_resul").hide();
                $("#conteneur_resultat").hide();
                $(".travaux_devis").hide();
                $("#les_bt_pdf_excel").hide();

                $("#borderau_select_travaux_0").val("");
            }
            if(selection_B == "2"){
                $("#terressement").show();
                $("#conteneur_bt_retour_et_bordereau_T").hide();
                $(".doc_devis").hide();
                $("#text_resul").hide();
                $("#conteneur_resultat").hide();
                $(".travaux_devis").hide();
                $("#les_bt_pdf_excel").hide();

                $("#borderau_select_travaux_0").val("");
            }
            if(selection_B == "3"){
                $("#fondaton").show();
                $("#conteneur_bt_retour_et_bordereau_T").hide();
                $(".doc_devis").hide();
                $("#text_resul").hide();
                $("#conteneur_resultat").hide();
                $(".travaux_devis").hide();
                $("#les_bt_pdf_excel").hide();

                $("#borderau_select_travaux_0").val("");
            }

        }


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