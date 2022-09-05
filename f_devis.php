<?php
 include_once('connexion.php');
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="f_deviss.css">
    <title>Login</title>
</head>
<body>
    <!-- ____________________Somme total ou encore Sous-total_________________ -->
    <script>
        // BLOC_1
        $(function(){
            var somme_v = 0;
            $("[id*=chat_1]").each(function(){
                somme_v = somme_v + parseFloat($(this).html());
            });
            $("[id*=chat_]").html(somme_v);

        });
        // BLOC_2
        $(function(){
            var somme_v = 0;
            $("[id*=voll_2]").each(function(){
                somme_v = somme_v + parseFloat($(this).html());
            });
            $("[id*=vol_]").html(somme_v);

        });
        // BLOC_3
        $(function(){
            var somme_v = 0;
            $("[id*=cttt_3]").each(function(){
                somme_v = somme_v + parseFloat($(this).html());
            });
            $("[id*=cat_]").html(somme_v);

        });
        // BLOC_4
        $(function(){
            var somme_v = 0;
            $("[id*=AA_4]").each(function(){
                somme_v = somme_v + parseFloat($(this).html());
            });
            $("[id*=A_]").html(somme_v);

        });
        // BLOC_5
        $(function(){
            var somme_v = 0;
            $("[id*=BB_5]").each(function(){
                somme_v = somme_v + parseFloat($(this).html());
            });
            $("[id*=B_]").html(somme_v);

        });
        // BLOC_6
        $(function(){
            var somme_v = 0;
            $("[id*=CC_6]").each(function(){
                somme_v = somme_v + parseFloat($(this).html());
            });
            $("[id*=C_]").html(somme_v);

        });
        // BLOC_7
        $(function(){
            var somme_v = 0;
            $("[id*=DD_7]").each(function(){
                somme_v = somme_v + parseFloat($(this).html());
            });
            $("[id*=D_]").html(somme_v);

        });
        // BLOC_8
        $(function(){
            var somme_v = 0;
            $("[id*=EE_8]").each(function(){
                somme_v = somme_v + parseFloat($(this).html());
            });
            $("[id*=E_]").html(somme_v);

        });

    </script>
    <!-- _____________________Calcul HT TVA TTH__________________ -->
    <script>
        $(function(){
            var init_HT = 0;
            // $("[id*=chat_1]").each(function(){
                init_HT = parseFloat($("#chat_").html()) + parseFloat($("#vol_").html()) + parseFloat($("#cat_").html()) + parseFloat($("#A_").html()) + parseFloat($("#B_").html()) + parseFloat($("#C_").html()) + parseFloat($("#D_").html()) + parseFloat($("#E_").html());
            // });
            $("#HT_").html(init_HT);

        });
        $(document).ready(function(){
            $("#tva").keyup(function(){
                    // alert(compter);
                    var TTH = 0;
                    var x = parseFloat($("#HT_").html());
                    var y = Number($("#tva").val());
                    var tt_tva = (y/100)*x;
                    TTC = x + tt_tva;
                    $("#TTH_").html(TTC);
                });      
        });
    </script>
    <div class="global">
        <!-- <h1>Plan de Devis</h1> -->
        <div class="entet_ttbt">
            <div class="conteneur_bt">
                <ul>
                    <div class="st">
                        <li><a href="formulaire_travaux.php"><button class="bt_li_a">BLOC_1</button></a></li>
                        <div class="sous_t">
                                <p class="bt_st">Sous total :</p>
                                <p id="chat_" class="lab_st"></p>
                        </div>
                    </div>
                    <div class="st">
                        <li><a href="f_t_bloc_2.php"><button class="bt_li_a">BLOC_2</button></a></li>
                        <div class="sous_t">
                                <p class="bt_st">Sous total :</p>
                                <p id="vol_" class="lab_st"></p>
                        </div>
                    </div>
                    <div class="st">
                        <li><a href="f_t_bloc_3.php"><button class="bt_li_a">BLOC_3</button></a></li>
                        <div class="sous_t">
                                <p class="bt_st">Sous total :</p>
                                <p id="cat_" class="lab_st"></p>
                        </div>
                    </div>
                    <div class="st">
                        <li><a href="f_t_bloc_4.php"><button class="bt_li_a">BLOC_4</button></a></li> 
                        <div class="sous_t">
                                <p class="bt_st">Sous total :</p>
                                <p id="A_" class="lab_st"></p>
                        </div>
                    </div>   
                </ul>
                <ul>
                    <div class="st">
                    <li><a href="f_t_bloc_5.php"><button class="bt_li_a">BLOC_5</button></a></li>
                    <div class="sous_t">
                            <p class="bt_st">Sous total :</p>
                            <p id="B_" class="lab_st"></p>
                    </div>
                    </div>
                    <div class="st">
                        <li><a href="f_t_bloc_6.php"><button class="bt_li_a">BLOC_6</button></a></li>
                        <div class="sous_t">
                            <p class="bt_st">Sous total :</p>
                            <p id="C_" class="lab_st"></p>
                        </div>
                    </div>
                    <div class="st">
                    <li><a href="f_t_bloc_7.php"><button class="bt_li_a">BLOC_7</button></a></li>
                    <div class="sous_t">
                            <p class="bt_st">Sous total :</p>
                            <p id="D_" class="lab_st"></p>
                    </div>
                    </div>
                    <div class="st">
                        <li><a href="f_t_bloc_8.php"><button class="bt_li_a">BLOC_8</button></a></li>
                        <div class="sous_t">
                            <p class="bt_st">Sous total :</p>
                            <p id="E_" class="lab_st"></p>
                        </div>
                    </div>
                </ul>
                
            </div>
        </div>
        <div class="conteneur_tg">
            <div class="cont_ht">
                <a href="#"><button  class="bt_tht">Total HT :</button></a>
                <p id="HT_"></p>
            </div>
            <div class="cont_ht">
                <label for="tva" class="lab_tva">Taux TVA :</label>
                <input type="integer" id="tva" value="18">
            </div>
            <div class="cont_ht">
                <a href="#"><button  class="bt_tht">Total TTC :</button></a>
                <p id="TTH_"></p>
            </div>
        </div>

        <button class="bt_act">Actualiser</button>

    </div>
    <!-- Les pages caher pour afficher les resultats sous-total -->
    <div class="bloc1">
    
        <?php
                            //  include('tb_DB.php');
                        $reqselect = "select * from bloc_1";
                        $resultat = mysqli_query($bdd,$reqselect);
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
                            $reql = "select * from titr_bloc_1";
                            $resul = mysqli_query($bdd,$reql);
                            $lig = mysqli_fetch_assoc($resul);
                            ?>
                            <tr class="tire">
                                <td colspan="5"><strong><h4 id="p_tr"><?php echo utf8_encode(@$lig['titre']); ;?></h4></strong></td>
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
                                    <td id="chat_1"><?php echo $ligne['prix_t'];?></td>
                                   
                                </tr>
                                
                                <?php
                            }
                            ?>
                            <tr >
                                <td  colspan="4"><h4 class="p_tr">Sous-total :</h4></td>
                                <td id="chat_" ></td>
                            </tr>
                </table>
                            

                        
                        
                
    </div>
    <div class="bloc1">
        <?php
                            //  include('tb_DB.php');
                        $reqselect = "select * from bloc_2";
                        $resultat = mysqli_query($bdd,$reqselect);

                        // $nbr = mysqli_num_rows($resultat);
                        // echo "<h4> Total :<b> ".$nbr."</b> element(s) present.</h4>";
                            
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
                            $reql = "select * from titr_bloc_2";
                            $resul = mysqli_query($bdd,$reql);
                            $lig = mysqli_fetch_assoc($resul);
                            ?>
                            <tr class="tire">
                                <td colspan="5"><strong><h4 id="p_tr"><?php echo utf8_encode(@$lig['titre']); ;?></h4></strong></td>
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
                                    <td id="voll_2"><?php echo $ligne['prix_t'];?></td>
                                   
                                </tr>
                                
                                <?php
                            }
                            ?>
                            <tr >
                                <td  colspan="4"><h4 class="p_tr">Sous-total :</h4></td>
                                <td id="vol_" ></td>
                            </tr>


                </table>
                            

                    
                        
                
    </div>
    <div class="bloc1">
        <?php
                            //  include('tb_DB.php');
                        $reqselect = "select * from bloc_3";
                        $resultat = mysqli_query($bdd,$reqselect);

                        // $nbr = mysqli_num_rows($resultat);
                        // echo "<h4> Total :<b> ".$nbr."</b> element(s) present.</h4>";
                            
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
                            $reql = "select * from titr_bloc_3";
                            $resul = mysqli_query($bdd,$reql);
                            $lig = mysqli_fetch_assoc($resul);
                            ?>
                            <tr class="tire">
                                <td colspan="5"><strong><h4 id="p_tr"><?php echo utf8_encode(@$lig['titre']); ;?></h4></strong></td>
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
                                    <td id="cttt_3"><?php echo $ligne['prix_t'];?></td>
                                   
                                </tr>
                                
                                <?php
                            }
                            ?>
                            <tr >
                                <td  colspan="4"><h4 class="p_tr">Sous-total :</h4></td>
                                <td id="cat_" ></td>
                            </tr>
                            

                        </table>
                        
                
    </div>
    <div class="bloc1">
        <?php
                            //  include('tb_DB.php');
                        $reqselect = "select * from bloc_4";
                        $resultat = mysqli_query($bdd,$reqselect);

                        // $nbr = mysqli_num_rows($resultat);
                        // echo "<h4> Total :<b> ".$nbr."</b> element(s) present.</h4>";
                            
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
                            $reql = "select * from titr_bloc_4";
                            $resul = mysqli_query($bdd,$reql);
                            $lig = mysqli_fetch_assoc($resul);
                            ?>
                            <tr class="tire">
                                <td colspan="5"><strong><h4 id="p_tr"><?php echo utf8_encode(@$lig['titre']); ;?></h4></strong></td>
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
                                    <td id="AA_4"><?php echo $ligne['prix_t'];?></td>
                                   
                                </tr>
                                
                                <?php
                            }
                            ?>
                            <tr >
                                <td  colspan="4"><h4 class="p_tr">Sous-total :</h4></td>
                                <td id="A_" ></td>
                            </tr>
                            

                        </table>
                        
                
    </div>
    <div class="bloc1">
        <?php
                            //  include('tb_DB.php');
                        $reqselect = "select * from bloc_5";
                        $resultat = mysqli_query($bdd,$reqselect);

                        // $nbr = mysqli_num_rows($resultat);
                        // echo "<h4> Total :<b> ".$nbr."</b> element(s) present.</h4>";
                            
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
                            $reql = "select * from titr_bloc_5";
                            $resul = mysqli_query($bdd,$reql);
                            $lig = mysqli_fetch_assoc($resul);
                            ?>
                            <tr class="tire">
                                <td colspan="5"><strong><h4 id="p_tr"><?php echo utf8_encode(@$lig['titre']); ;?></h4></strong></td>
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
                                    <td id="BB_5"><?php echo $ligne['prix_t'];?></td>
                                   
                                </tr>
                                
                                <?php
                            }
                            ?>
                            <tr >
                                <td  colspan="4"><h4 class="p_tr">Sous-total :</h4></td>
                                <td id="B_" ></td>
                            </tr>
                            

                        </table>
                        
                
    </div>
    <div class="bloc1">
        <?php
                            //  include('tb_DB.php');
                        $reqselect = "select * from bloc_6";
                        $resultat = mysqli_query($bdd,$reqselect);

                        // $nbr = mysqli_num_rows($resultat);
                        // echo "<h4> Total :<b> ".$nbr."</b> element(s) present.</h4>";
                            
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
                            $reql = "select * from titr_bloc_6";
                            $resul = mysqli_query($bdd,$reql);
                            $lig = mysqli_fetch_assoc($resul);
                            ?>
                            <tr class="tire">
                                <td colspan="5"><strong><h4 id="p_tr"><?php echo utf8_encode(@$lig['titre']); ;?></h4></strong></td>
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
                                    <td id="CC_6"><?php echo $ligne['prix_t'];?></td>
                                   
                                </tr>
                                
                                <?php
                            }
                            ?>
                            <tr >
                                <td  colspan="4"><h4 class="p_tr">Sous-total :</h4></td>
                                <td id="C_" ></td>
                            </tr>
                            

                        </table>
                        
                
    </div>
    <div class="bloc1">
        <?php
                            //  include('tb_DB.php');
                        $reqselect = "select * from bloc_7";
                        $resultat = mysqli_query($bdd,$reqselect);

                        // $nbr = mysqli_num_rows($resultat);
                        // echo "<h4> Total :<b> ".$nbr."</b> element(s) present.</h4>";
                            
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
                            $reql = "select * from titr_bloc_7";
                            $resul = mysqli_query($bdd,$reql);
                            $lig = mysqli_fetch_assoc($resul);
                            ?>
                            <tr class="tire">
                                <td colspan="5"><strong><h4 id="p_tr"><?php echo utf8_encode(@$lig['titre']); ;?></h4></strong></td>
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
                                    <td id="DD_7"><?php echo $ligne['prix_t'];?></td>
                                   
                                </tr>
                                
                                <?php
                            }
                            ?>
                            <tr >
                                <td  colspan="4"><h4 class="p_tr">Sous-total :</h4></td>
                                <td id="D_" ></td>
                            </tr>
                            

                        </table>
                        
                
    </div>
    <div class="bloc1">
        <?php
                            //  include('tb_DB.php');
                        $reqselect = "select * from bloc_8";
                        $resultat = mysqli_query($bdd,$reqselect);

                        // $nbr = mysqli_num_rows($resultat);
                        // echo "<h4> Total :<b> ".$nbr."</b> element(s) present.</h4>";
                            
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
                            $reql = "select * from titr_bloc_8";
                            $resul = mysqli_query($bdd,$reql);
                            $lig = mysqli_fetch_assoc($resul);
                            ?>
                            <tr class="tire">
                                <td colspan="5"><strong><h4 id="p_tr"><?php echo utf8_encode(@$lig['titre']); ;?></h4></strong></td>
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
                                    <td id="EE_8"><?php echo $ligne['prix_t'];?></td>
                                   
                                </tr>
                                
                                <?php
                            }
                            ?>
                            <tr >
                                <td  colspan="4"><h4 class="p_tr">Sous-total :</h4></td>
                                <td id="E_" ></td>
                            </tr>
                            

                        </table>
                        
                
    </div>
    
</body>
</html>