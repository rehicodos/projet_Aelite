<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="travaux_prelim00.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Travaux Preliminaire</title>
</head>
<body>
    <h2 id="text_h2">Travaux Preliminaires</h2>
    <div id="tb_retou"><button id="bt_tprelim_retour_page_page_devis" type="button"><strong><-<-<- Retour</strong></button></div>
    <div class="generalite">
    <div>
        <table id="tab_generalite">
            <tr>
                <td colspan='5'><p class="genera"><strong>Généralité</strong></p></td>
            </tr>
            <tr>                                                                           
                <!-- <th class="th_" width="4%">X</th>                                                                      -->
                <th class="th_" width="32%">Désignation</th>                                   
                <th class="th_" width="10%">Unité</th>                                   
                <th class="th_" width="15%">Quantité</th>                                    
                <th class="th_" width="20%">Prix_U</th>                                   
                <th class="th_" width="23%">Prix_T</th>                                                                     
            </tr>
            <tr class="lign_prelimm">
                    <!-- <td><input type="checkbox" id=""></td> -->
                    <td class="preli">
                        <select id="desc_selectionne_1" name="">
                            <option value="">Selectionne ...</option>
                            <option value="Levés topographiques">Levés topographiques</option>
                            <option value="Installation chantier">Installation chantier</option>
                            <option value="Implantation des ouvrages">Implantation des ouvrages</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="selection_unite_1">
                            <option value="">---</option>
                            <option value="ft">ft</option>
                            <option value="m²">m²</option>
                            <option value="m³">m³</option>
                            <option value="ha">ha</option>
                        </select>
                    </td>

                    <td><input class="gee" type="text" name="" id="gene_qt_1"></td>
                    <td><input class="gee" type="text" name="" id="gene_pu_1"></td>
                    <td><input class="" type="text" name="" id="gene_pt_1"></td>
            </tr>
            <tbody></tbody>

        </table>
        <div class="les_bouton">
            <button id="executer_prelim" type="button">Exécuter</button>
            <!-- <button type="button" id="effacx">Effacer</button> -->
            <button type="button" id="bt_prelim_valider">OK</button>
        </div>
       </div>
       <div id="img_prelim">
        <img src="images/installation.png" alt="">
    </div>
  </div>
  <div id="tab_preliminaire_cach3">
    <table id="tab2_prelim_cacher">
        <tr>
            <th>X</th>
            <th>Désignation</th>
            <th>Unité</th>
            <th>Quantité</th>
            <th>Prix_U</th>
            <th>Prix_T</th>
        </tr>
        <tr class="lign_tab2">
            <td><input type="checkbox" id=""></td>
            <td><input type="text" id="tab2_desc1"></td>
            <td><input type="text" id="tab2_unit1"></td>
            <td><input type="text" id="tab2_qt1"></td>
            <td><input type="text" id="tab2_pu1"></td>
            <td><input class="s_t_01" type="text" id="tab2_pt1"></td>
        </tr>
        <tbody></tbody>
    </table>
    <table id="tab_prelim_cacher_3">
        <tr>
            <th>X</th>
            <th>Désignation</th>
            <th>Unité</th>
            <th>Quantité</th>
            <th>Prix_U</th>
            <th>Prix_T</th>
        </tr>
        <!-- <tr>
            <td></td>
            <td colspan="3"><input type="text" value="Généralité"></td>
        </tr> -->
        <tbody></tbody>
        <tr id="sous_tt_vers_devis">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <!-- <td colspan="2"><h4 id="s_t_calcull" class="s_t_calcul"><strong>Total</strong></h4></td> -->
            <td><input type="text" class="sous_" id="" value="Sous-Total :"></td>
            <td><input type="text" class="sous_tt_" id="tt_travau" value="0.00"></td>
            <!-- <td><strong><h3 id="tt_travaux_prelim">0.00</h3></strong></td> -->
        </tr>
    </table>

  </div>
    <script>
        // _______Ajoute de nouvele ligne ______
        function ajouter_ligne(){
            var count = $(".ite").length;
            count++;
            var htmlRows = '';
            htmlRows += '<tr class="lign_prelimm">';
            htmlRows += '<td><input id="" type="checkbox"></td>';                  
            htmlRows += '<td><input id="tab2_desc" type="text"></td>';                  
            htmlRows += '<td><input id="tab2_unit" type="text"></td>';                  
            htmlRows += '<td><input class="fouille_cal" type="text" id="tab2_qt'+count+'"  autocomplete="off"></td>';	
            htmlRows += '<td><input class="fouille_cal" type="text" id="tab2_pu'+count+'"  autocomplete="off"></td>';   		
            htmlRows += '<td><input class="fouille_tt" type="text" id="tab2_pt'+count+'"  autocomplete="off"></td>';  		
            htmlRows += '</tr>';
            $('#tab2_prelim_cacher').append(htmlRows);
        }

        var tail_tab = $("[id^='selection_unite_']").length;
        $(document).on('click', '#n_ligne', function() { 
            tail_tab++;
            var htmlRows = '';
            htmlRows += '<tr class="lign_prelimm">';
            htmlRows += '<td><input id="" type="checkbox"></td>';          
            htmlRows += '<td id="desc_selectionne_'+tail_tab+'" class="preli"><select name="" onchange="copy_ds_(this.value);"><option value="">Selectionne ...</option><option value="">Levés topographiques</option><option value="type_1">Installation chantier</option><option value="type_2">Implantation des ouvrages</option></select></td>';          
            htmlRows += '<td><select name="" id="selection_unite_'+tail_tab+'" onchange="unite(this.value);"><option value="">ft</option><option value="type_1">m²</option><option value="type_2">m³</option><option value="type_2">ha</option></select></td>';          
            htmlRows += '<td><input class="fouille_cal" type="text" id="gene_qt_'+tail_tab+'"  autocomplete="off"></td>';	
            htmlRows += '<td><input class="fouille_cal" type="text" id="gene_pu_'+tail_tab+'"  autocomplete="off"></td>';   		
            htmlRows += '<td><input class="fouille_tt" type="text" id="gene_pt_'+tail_tab+'"  autocomplete="off"></td>';  		
            htmlRows += '</tr>';
            $('#tab_generalite').append(htmlRows);
            ajouter_ligne();
        });
    </script>
    <script>
        




        function transfert_donnees(){

            if($("#desc_selectionne_1").val() !="" && $("#selection_unite_1").val() !="" && $("#gene_qt_1").val() !="" && $("#gene_pu_1").val() !=""){
                var qt = $("#gene_qt_1").val();
                var pu = $("#gene_pu_1").val();
                var pt = $("#gene_pt_1").val();

                $("#tab2_qt1").val(qt);
                $("#tab2_pu1").val(pu);
                $("#tab2_pt1").val(pt);

                document.getElementById('tab2_desc1').value = document.getElementById('desc_selectionne_1').value;
                document.getElementById('tab2_unit1').value = document.getElementById('selection_unite_1').value;

                var copyy_ligne_prelim = $("#tab2_prelim_cacher .lign_tab2").clone().appendTo($("#tab_prelim_cacher_3").add(copyy_ligne_prelim));

                $("#gene_qt_1").val(""); 
                $("#gene_pu_1").val(""); 
                $("#gene_pt_1").val(""); 
                $("#desc_selectionne_1").val(""); 
                $("#selection_unite_1").val(""); 

                $("#tab_prelim_cacher_3").show();
            }
            else{
                alert("Renseignez tous les champs de saisir SVP !!!");
            }
        }
        $(".gee").keyup(function(){
            // ______calcul qt, pu et pt____
            var _qt1 = Number($("#gene_qt_1").val());
            var _pu1 = Number($("#gene_pu_1").val());
            var produit = _qt1*_pu1;
            $("#gene_pt_1").val(produit.toFixed(2));
        });
        
        $("#executer_prelim").click(function(){
            transfert_donnees();
            
            // _______calcul de tous les sous total pour atteindre le grand total_____
            $(function(){
                var ss_tt = 0;
                $("#tab_prelim_cacher_3 [id^='tab2_pt']").each(function(){
                    ss_tt = ss_tt + Number($(this).val());
                });
                $(".sous_tt_").val(ss_tt);
            });          
        });

        $("#bt_prelim_valider").click(function(){
            var tail_tab = $("#tab_prelim_cacher_3 tr").length;
            if(tail_tab > 3){
                var copy_ligne_prelim = $("#tab_prelim_cacher_3 .lign_tab2").clone().appendTo($("#tab_devis").add(copy_ligne_prelim));
                var copy_ligne_pr = $("#tab_prelim_cacher_3 #sous_tt_vers_devis").clone().appendTo($("#tab_devis").add(copy_ligne_pr));

                var copy_ligne_prel = $("#tab_prelim_cacher_3 .lign_tab2").clone().appendTo($("#tab_dqe").add(copy_ligne_prel));
                var copy_ligne_pre = $("#tab_prelim_cacher_3 #sous_tt_vers_devis").clone().appendTo($("#tab_dqe").add(copy_ligne_pre));

                
                $("#tab_prelim_cacher_3 .lign_tab2").remove();
                $("#tab_prelim_cacher_3").hide();
                // var tab_dqe =
            }
            else{
                alert("Aucune operation effectuée !!!");
            }
        });

    </script>
</body>
</html>