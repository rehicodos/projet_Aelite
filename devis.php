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
    <link rel="stylesheet" href="devis__.css">
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
                $(".info-aelite").show(slow="3000");
                $(".client").show(slow="3000");
                $("#num_off").show(slow="3000");
                $("#les_dates").show(slow="3000");
            });
        });
        $(document).ready(function(){
            $(".formul").click(function(){
                // $(".travaux_devis").toggle(slow="3000");
                $("#pere_borderau").toggle(slow="3000");
                $("#tab_devis").show(slow="3000");
                $("#signature_directeur").show(slow="3000");
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
        <div id=""><a href="archive_nouvo_devis.php"><button id="" type="button"><strong><-<-<- Retour</strong></button></a></div>
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
                <button type="button" id="ds_">DS</button>
            </div>
        </div>
    </div>
    
    <!-- ==========la fenetre contenant les clients========  -->
    <div class="renseignement_inf_client">
        <table id="tabl_biblio">
                    <!-- <form action="" method="post"> -->
                        <?php
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
                                <td><?php echo utf8_encode($row['fax']);?></td>
                                <td><?php echo utf8_encode($row['adress_bp']);?></td>
                                <td><?php echo utf8_encode($row['email']);?></td>
                                <!-- <td><?php echo $row['site_web'];?></td> -->
                            </tr>

                            <?php endforeach; ?>
                                        
                    <!-- </form> -->

                </table>
    </div>

            <!-- =========entete devis cacher============== -->
            <div class="f_dos">
                <div class="les_champ">
                    <div class="d2">
                        <h3>Coordonnées de l'entreprise</h3>
                        <hr/>
                        <div class="info_entrepise">
                            <!-- <button type="button" class="bt_info_aelite" id="bt_info_aelite_ancien">Information existante</button> -->
                            <button type="button" class="bt_info_aelite" id="bt_info_aelite_nouvelle">Modifier information de l'entreprise</button>
                        </div>
                    </div>

                    <div class="d1">
                        <h3>L'identité du client</h3>
                        <hr/>
                        <button type="button" class="bt_info_aelite" id="bt_choisir_client">Selectionner un client </button>
                        <button type="button" class="bt_info_aelite" id="bt_nouveau_client">Nouveau client </button>

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
                                
                            </table>

                        <div id="champ_ajout_client_cacher">
                            <hr/>
                            <form action="ajout_cl_sur_form_devi.php" method="post" class="form_nouvo_client">
                                <table>
                                    <tr class="trr2">
                                        <td><label class="nm_cl" for="nom_cl">Nom :</label></td>
                                        <td><input name="nom_cl" id="nom_cl" type="text"></td>
                                    </tr>
                                    <tr class="trr2">
                                        <td><label class="pm_cl" for="pm_cl">Tel :</label></td>
                                        <td><input name="tel_cl" id="tel_cl" type="text"></td>
                                    </tr>
                                    <tr class="trr2">
                                        <td><label class="n_cl" for="n_cl">Fax :</label></td>
                                        <td><input name="fax_cl" id="fax_cl" type="text"></td>
                                    </tr>
                                    <tr class="trr2">
                                        <td><label class="adress_cl" for="adress_cl">Adresse :</label></td>
                                        <td><input name="adresse_cl" id="adresse_cl" type="text"></td>
                                    </tr>
                                    <tr class="trr2">
                                        <td><label class="email_cl" for="email_cl">E-mail :</label></td>
                                        <td><input name="email_cl" id="email_cl_0"  type="mail"></td>
                                    </tr>
                                </table>
                                <hr/>
                                <div id="cont_bt_val_nouvo_client"><button id="bt_val_nouvo_client" type="submit">Valider</button></div>
                                
                            </form>
                        </div>
                        
                        
                    </div>
                
                    <div class="d1">
                        <table>
                            <tr>
                                <td><label  for="num_devis">Numéro devis :</label></td>
                                <td><input class="commande_" name="num" type="text" id="num_devis"><br></td>
                            </tr>
                            <tr>
                                <td><label  for="offre_devis">L'offre :</label></td>
                                <td><input class="commande_" name="offr" type="text" id="offre_devis"><br></td>
                            </tr>
                            <tr class="date_bt_cacher">
                                <td><label class="d_t" for="date_demande">Date de demande :</label></td>
                                <td><input name="dat" type="date" id="date_demande"><br></td>
                            </tr>
                            <tr class="date_bt_cacher">
                                <td><label class="d_s_t" for="date_edition">Date d'edition :</label></td>
                                <td><input name="edit" type="date" id="date_edition"></td>
                            </tr>
                        </table>
                        <hr class="date_bt_cacher" id="hr_"/>
                        <div class="date_bt_cacher" id="cont_num_off_date">
                            <button type="button" id="bt_num_off_date">Okay</button>
                        </div>
                    </div>
                </div>

                <!-- <div class="bt_f">
                    <input class="eff" type="reset" value="Annuler">
                    <input name="bt_valider_entete_devis" class="vali" type="submit" value="Valider">
                </div> -->
            </div> 
             
        <div class="mise_ajour_info_aelite">
            <form action="mod_info_aelite.php" method="post" class="form_mod_info_aelite">
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
                        <td><input class="nom_aelite" name="nom" type="text" value="<?php echo utf8_encode($data['nom']);?>"></td>
                        <td><input class="position" name="position" type="text" value="<?php echo utf8_encode($data['position']);?>"></td>
                        <td><input class="adresse" name="adress_bp" type="text" value="<?php echo utf8_encode($data['adress_bp']);?>"></td>
                        <td><input class="tel" name="tel" type="text" value="<?php echo utf8_encode($data['tel']);?>"></td>
                        <td><input class="email" name="email" type="text" value="<?php echo utf8_encode($data['email']);?>"></td>
                        
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
    
    <div id="resultat_dqe">
            <h3 id="dqe_">DEBOURSER SEC (DS)</h3>
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
    <div id="conteneur_resultat">
        <div class="resultat">
            <!-- Info_aelite et client affiche -->
            <div class="info_aelite_client">
                <div class="info-aelite">
                    <?php
                        $query = $bdd_0->prepare('SELECT * FROM  info_aelite');
                        // $query->bindValue(':modifier',$_GET['modifier'],PDO::FETCH_ASSOC);
                        $query->execute();
                        $data = $query->fetch();
                    ?>
                    
                        <p id=""><img src="images/logo_aelite.png" alt="logo-aelite"></p>
                        <p>Entrepise : <span id="aff_info_entreprise_"><?php echo utf8_encode(@$data['nom']);?></span></p>               
                        <p> Adresse : <span id="aff_info_entreprise_2"><?php echo utf8_encode(@$data['position']);?></span></p>               
                        <p>Boite postale : <span id="aff_info_entreprise_3"><?php echo utf8_encode(@$data['adress_bp']);?></span></p>               
                        <p>Tel : <span id="aff_info_entreprise_4"><?php echo utf8_encode(@$data['tel']);?></span></p>               
                        <p>E-mail : <span id="aff_info_entreprise_5"><?php echo utf8_encode(@$data['email']);?></span></p>               
                                     
                        
                </div>
                <div class="client">
                    <p>Nom client : <span id="aff_info_client_"></span></p>               
                    <p> Tel : <span id="aff_info_client_2"></span></p>               
                    <p>Fax : <span id="aff_info_client_3"></span></p>               
                    <p>Adresse : <span id="aff_info_client_4"></span></p>               
                    <p>E-mail : <span id="aff_info_client_5"></span></p> 
                </div>
            </div>
            <div class="date_numero_devis">
                <div id="num_off">
                    <p>N°_Devis : <span id="num_d"></span></p>
                    <p>Offre : <span id="off_d"></span></p>
                </div>
                <div id="les_dates">
                    <p>Date de demande : <span id="date_d"></span></p>
                    <p>Date d'Edition : <span id="date_e"></span></p>
                </div>
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
                <tr>
                    <td ></td>
                    <td rowspan="3">
                        <p>CONDITION DE PAIEMENT :</p>
                        <p>50% à la commande</p>
                        <p>Solde à l'avancementsur situation mensuelle</p>
                    </td>
                    <!-- <td ></td> -->
                    <!-- <td ></td> -->
                    <td ></td>
                    <td colspan="2"><input type="text" value="MONTANT TOTAL NET HT : "></input></td>
                    <td ><input type="text" value="0.00"></input></td>
                </tr>
                <tr>
                    <td ></td>
                    <!-- <td ></td> -->
                    <!-- <td ></td> -->
                    <td ></td>
                    <td colspan="2"><input type="text" value="TVA 18% : "></input></td>
                    <td ><input type="text" value="0.00"></input></td>
                </tr>
                <tr>
                    <td ></td>
                    <!-- <td ></td> -->
                    <!-- <td ></td> -->
                    <td ></td>
                    <td colspan="2"><input type="text" value="MONTANT TOTAL TTC : "></input></td>
                    <td ><input type="text" value="0.00"></input></td>
                </tr>
                <!-- <tr> -->
                    <!-- <td ><p>aaa</p></td>
                    <td ><p>bbb</p></td>
                    <td ><p>ccc</p></td> -->
                    <!-- <td><p>d</p></td> -->
                <!-- </tr> -->
                <!-- <tr>
                    <td rowspan="2"><p>a</p></td>
                    <td colspan="2"><p>b</p></td>
                    <td colspan="2"><p>c</p></td>
                    <td><p>d</p></td>
                </tr> -->
            </table>
            <div id="signature_directeur">
                <p><strong>La Direction Générale</strong></p>
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

    <!-- ______inclusion des pages externe____ -->
    <div id="travaux_preliminaiire"><?php include('travaux_preliminaire.php'); ?></div>
    <div id="terressement"><?php include('terrassement.php'); ?></div>
    <div id="fondaton"><?php include('fondation.php'); ?></div>

    <script>
        // ==========modification info aelite sans recharger la page=====
        $(document).ready(function(){
            $('.form_mod_info_aelite').on('submit', function(e){
                e.preventDefault();

                var nom_aelite = $('.nom_aelite').val();
                var position = $('.position').val();
                var adresse = $('.adresse').val();
                var tel = $('.tel').val();
                var email = $('.email').val();

                var url_ = 'mod_info_aelite.php';
                var data_ = $(this).serialize(); 

                $.post(url_, data_, function(){
                    // $(".f_dos").toggle(slow="3000");
                    $(".mise_ajour_info_aelite").toggle(slow="3000");

                    $('#aff_info_entreprise_').text(nom_aelite);
                    $('#aff_info_entreprise_2').text(position);
                    $('#aff_info_entreprise_3').text(adresse);
                    $('#aff_info_entreprise_4').text(tel);
                    $('#aff_info_entreprise_5').text(email);
                });
                
            });
        });
        // ==========ajoute de nouveau client sans recharger la page=====
        $(document).ready(function(){
            
            $('.form_nouvo_client').on('submit', function(e){
                e.preventDefault();

                var nom_cl = $('#nom_cl').val();
                var tel_cl = $('#tel_cl').val();
                var fax_cl = $('#fax_cl').val();
                var adress_cl = $('#adresse_cl').val();
                var email_cl = $('#email_cl_0').val();

                var url_ = 'ajout_cl_sur_form_devi.php';
                var data_ = $(this).serialize(); 

                $.post(url_, data_, function(){

                    $('#aff_info_client_').text(nom_cl);
                    $('#aff_info_client_2').text(tel_cl);
                    $('#aff_info_client_3').text(fax_cl);
                    $('#aff_info_client_4').text(adress_cl);
                    $('#aff_info_client_5').text(email_cl);

                    $('#nm_cl').val(nom_cl);
                    $('#pm_cl').val(tel_cl);
                    $('#n_cl').val(fax_cl);
                    $('#adress_cl').val(adress_cl);
                    $('#email_cl').val(email_cl);

                    $('#nom_cl').val('');
                    $('#tel_cl').val('');
                    $('#fax_cl').val('');
                    $('#adresse_cl').val('');
                    $('#email_cl_0').val('');

                    // $(".renseignement_inf_client").toggle(slow="3000");
                    $("#champ_ajout_client_cacher").toggle(slow="3000");

                    recharg_page_auto();
                });
                
            });
            function recharg_page_auto() {
                $("#tabl_biblio").load(" #tabl_biblio");
            }
            // setInterval(recharg_page_auto,1000);
        });
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
                $("#champ_ajout_client_cacher").hide(slow="3000");
                // $(".trr3").show(slow="3000")
            });
        });
        $(document).ready(function(){
            $("#bt_num_off_date").click(function(){
                var num_devis = $("#num_devis").val();
                var offre_devis = $("#offre_devis").val();
                var date_demande = $("#date_demande").val();
                var date_edition = $("#date_edition").val();

                $("#num_d").text(num_devis);
                $("#off_d").text(offre_devis);
                $("#date_d").text(date_demande);
                $("#date_e").text(date_edition);

                $(".f_dos").hide(slow="3000");
            });
            $(".commande_").keyup(function(){
                $(".date_bt_cacher").show(slow="3000");
                $("#hr_").show(slow="3000");
            });
        });
        $(document).ready(function(){
            $("#tabl_biblio tr").click(function(){
                // $(".trr3").show(slow="3000");
                $(".renseignement_inf_client").hide(slow="3000");
            });
        });
        $(document).ready(function(){
            $("#bt_nouveau_client").click(function(){
                // $(".trr3").toggle();
                $("#champ_ajout_client_cacher").toggle(slow="3000");
                $(".renseignement_inf_client").hide(slow="3000");

                $('#nm_cl').val('');
                $('#pm_cl').val('');
                $('#n_cl').val('');
                $('#adress_cl').val('');
                $('#email_cl').val('');

                document.getElementById("aff_info_client_").textContent = '';
                document.getElementById("aff_info_client_2").textContent = '';
                document.getElementById("aff_info_client_3").textContent = '';
                document.getElementById("aff_info_client_4").textContent = '';
                document.getElementById("aff_info_client_5").textContent = '';
            });
        });
        $(document).ready(function(){
            $("#bt_info_aelite_nouvelle").click(function(){
                $(".mise_ajour_info_aelite").toggle(slow="3000");
            });
            $("#ds_").click(function(){
                $("#resultat_dqe").toggle(slow="3000");
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

                document.getElementById("aff_info_client_").textContent = this.cells[0].innerHTML;
                document.getElementById("aff_info_client_2").textContent = this.cells[1].innerHTML;
                document.getElementById("aff_info_client_3").textContent = this.cells[2].innerHTML;
                document.getElementById("aff_info_client_4").textContent = this.cells[3].innerHTML;
                document.getElementById("aff_info_client_5").textContent = this.cells[4].innerHTML;
            };
        }
    </script>   
</body>
</html>