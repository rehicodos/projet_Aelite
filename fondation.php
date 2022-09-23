<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fondation2_22.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Fondation</title>
</head>
<body>
    <h1>Travaux de Béton</h1>
    <div id="beton_d_propete">
        <div id="text_beton">
            <h2>Dosage Béton de Proprété/Armé</h2>
        </div>
        <div id="detail">
            <div class="dim">
                 <div class="volum_fouill">
                    <h5>Dimensions en Mètre (m)</h5>
                </div>
                <div class="placement_l_L_p"><h3>Longueur de *Fouilles :</h3><input class="dimensions" id="inp1" type="text" placeholder="0.00"></div>
                <div class="placement_l_L_p"><h3>Largeur de la Fouille :</h3><input class="dimensions" id="inp2" type="text" placeholder="0.00"></div>
                <div class="placement_l_L_p"><h3>Epaisseur du Béton :</h3><input class="dimensions" id="inp3" type="text" placeholder="0.00"></div>
                <div class="volum_fouille">
                    <h5>Volume du Béton : <strong><span class="spandecor" id="volum_b">0.00</span></strong> m³</h5>
                </div>
                <hr/>
                <table>
                    <tr>
                        <th width="30%">Désignation</th>
                        <th width="10%">Unité</th>
                        <th width="15%">Quantité</th>
                        <th width="15%">Qt Ciment</th>
                        <th width="15%">Qt Sable</th>
                        <th width="15%">Qt Gravier</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="" id="la_selection" onchange="calcul_select(this.value);">
                                <option class="" id="" value="">Selectionne ...</option>
                                <option class="beton_prop" id="" value="p1">Béton de propreté dosé à 150 kg/m³</option>
                                <option class="beton_prop" id="" value="p2">Béton de propreté dosé à 200 kg/m³</option>
                                <option class="beton_prop" id="" value="p3">Béton de propreté dosé à 250 kg/m³</option>
                                <option class="" id="" value="a1">Béton Armé dosé à 350 kg/m³</option>
                                <option class="" id="" value="a2">Béton Armé dosé à 400 kg/m³</option>
                                <option class="" id="" value="a3">Béton Armé dosé à 450 kg/m³</option>
                                <option class="" id="" value="a4">Béton Armé dosé à 500 kg/m³</option>
                            </select>
                        </td>
                                
                        <td><input type="text" value="m³"></td>
                        <td><input id="surfax_f_b" type="text"></td>
                        <td><input type="text" id="ciment__0" value="0.00"></td>
                        <td><input type="text" id="sable__0" value="0.00"></td>
                        <td><input type="text" id="gravier__0" value="0.00"></td>
                    </tr>
                </table>
                <div id="">
                    <div id="beton_arme_caher">
                        <div class="placement_l_L_p_"><h3 class="avance_texte">Qt Aciers :</h3><input class="arme_b" id="qt_aciers" type="text" placeholder="Qt"><h3 class="toto">Prix_U :</h3><input class="arme_b" type="text" id="pu_aciers" placeholder="0.00"></div>
                        <div class="placement_l_L_p_"><h3 class="avance_texte">Qt Fil de Fer :</h3><input class="arme_b" id="qt_fil" type="text" placeholder="Qt"><h3 class="toto">Prix_U :</h3><input class="arme_b" type="text" id="pu_fil" placeholder="0.00"></div>
                    </div>
                    <div class="placement_l_L_p_"><h3 class="avance_texte">Ciment :</h3><input class="les_prix_u" id="inp1_" type="text" placeholder="Prix_U"><h3 class="toto">Prix_T Ciment :</h3><input type="text" id="inp1__" placeholder="0.00"></div>
                    <div class="placement_l_L_p_"><h3 class="avance_texte">Sable :</h3><input class="les_prix_u" id="inp2_" type="text" placeholder="Prix_U"><h3 class="toto">Prix_T Sable :</h3><input type="text" id="inp2__" placeholder="0.00"></div>
                    <div class="placement_l_L_p_"><h3 class="avance_texte">Gravier :</h3><input class="les_prix_u" id="inp3_" type="text" placeholder="Prix_U"><h3 class="toto">Prix_T Gravier :</h3><input type="text" id="inp3__" placeholder="0.00"></div>
                </div>
                <div class="volum_fouille">
                    <h5>Total HT Béton : <strong><span class="spandecor" id="prix_tt">0.00</span></strong> m³</h5>
                </div>
                <hr/>
                <!-- <form action="" method="post"> -->
                <table id="tab_">
                        <!-- <tr> -->
                                    <!-- <td></td> -->
                                    <!-- <td colspan="2"><p><strong>*Remblais</strong></p></td> -->
                        <!-- </tr> -->
                        <tr>
                                    <th width="10%">X</th>
                                    <th width="30%">Désignaton</th>
                                    <th width="10%">Unité</th>
                                    <th width="15%">Quantité</th>
                                    <th width="15%">Prix_U</th>
                                    <th width="20%">Prix_T</th>
                        </tr>
                        <!-- <tr>
                                    <td><input type="text" id="descrip_" name="desc"></td>
                                    <td><input type="text" value="m³" name="unit" id="unitt_"></td>
                                    <td><input class="premiere_lign" id="qt" type="number" name="qt" ></td>
                                    <td><input class="premiere_lign" id="pu_mini_devi" type="number" name="pu"></td>
                                    <td><input type="number" name="pt" id="tt_mini_devi"></td>
                        </tr> -->
                        <tbody>
                            <tr id="logg">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><input type="text" id="descrip_" name="desc"></td>
                                <td><input type="text" value="m³" name="unit" id="unitt_"></td>
                                <td><input class="premiere_lign" id="qt" type="text" name="qt" ></td>
                                <td><input class="premiere_lign" id="pu_mini_devi" type="text" name="pu"></td>
                                <td><input type="text" name="pt" id="tt_mini_devi"></td>
                            </tr>
                        </tbody>
                        <!-- <tr>
                            <td colspan="4"><h4  class="s_t_calcul"><strong>Prix Total Dosage Béton</strong></h4></td>
                            <td><input type="number" name="" id="tt_fondat"></td>
                        </tr> -->
                </table>
                <!-- </form> -->
                <div id="tb">
                    <!-- <button type="button" id="bouton_fondation">Ajouter ligne</button> -->
                    <!-- <button type="button" id="bt_ok_remblais">OK</button> -->
                    <button type="button" id="valiii">Valider</button>
                </div>
            </div>
            <!-- <div id="image">
                <img src="images/beton_prop.jpg" alt="">
            </div> -->
        </div>
    </div>
    <table id="tab_fondat">
        <tr>
            <th>Désignaton</th>
            <th>Unité</th>
            <th>Quantité</th>
            <th>Prix_U</th>
            <th>Prix_T</th>
        </tr>
        <tr id="rang1">
            <td><input value="Ciment" type="text"  name="" id=""></td>
            <td><input value="pqt" type="text"  name="" id=""></td>
            <td><input type="text"  name="" id="c1"></td>
            <td><input type="text"  name="" id="pu_c"></td>
            <td><input type="text"  name="" id="tt_c"></td>
        </tr>
        <tr id="rang2">
            <td><input value="Sable" type="text"  name="" id=""></td>
            <td><input value="m³" type="text"  name="" id=""></td>
            <td><input type="text"  name="" id="s1"></td>
            <td><input type="text"  name="" id="pu_s"></td>
            <td><input type="text"  name="" id="tt_s"></td>
        </tr>
        <tr id="rang3">
            <td><input value="Gravier" type="text"  name="" id=""></td>
            <td><input value="m³" type="text"  name="" id=""></td>
            <td><input type="text"  name="" id="g1"></td>
            <td><input type="text"  name="" id="pu_g"></td>
            <td><input type="text"  name="" id="tt_g"></td>
        </tr>
        <tr id="rang4">
            <td><input value="Aciers" type="text"  name="" id=""></td>
            <td><input value="botte" type="text"  name="" id=""></td>
            <td><input type="text"  name="" id="ac1"></td>
            <td><input type="text"  name="" id="pu_ac"></td>
            <td><input type="text"  name="" id="tt_ac"></td>
        </tr>
        <tr id="rang5">
            <td><input value="Fil de Fer" type="text"  name="" id=""></td>
            <td><input value="rlx" type="text"  name="" id=""></td>
            <td><input type="text"  name="" id="fil1"></td>
            <td><input type="text"  name="" id="pu_filLL"></td>
            <td><input type="text"  name="" id="tt_fil"></td>
        </tr>
        <!-- <tbody></tbody> -->
        <tr id="rang6">
            <td></td>
            <td></td>
            <td></td>
            <td><input type="text" value="Prix Total"></td>
            <td><input type="text" name="" id="tt_fondat"></td>
        </tr>
    </table>
    <hr/>
    <table id="exemple_tab">
        <tr>
            <th>X</th>
            <th>Désignaton</th>
            <th>Unité</th>
            <th>Quantité</th>
            <th>Prix_U</th>
            <th>Prix_T</th>
        </tr>
        <tbody></tbody>
    </table>
    <hr/>
    <table id="exemple_tab_2">
        <tr>
            <!-- <th>X</th> -->
            <th>Désignaton</th>
            <th>Unité</th>
            <th>Quantité</th>
            <th>Prix_U</th>
            <th>Prix_T</th>
        </tr>
        <tbody></tbody>
    </table>
<script>
    // _______copier le mini devis vers le devis principal_____
    $("#valiii").click(function(){
        if($("#descrip_").val() !="" && $("#qt").val() !="" && $("#pu_mini_devi").val() !="" && $("#tt_mini_devi").val() !=""){
            var copy_ligne = $("#logg").clone().appendTo($("#exemple_tab ").add(copy_ligne));

            $("#descrip_").val("");
            $("#qt").val("");
            $("#pu_mini_devi").val("");
            $("#tt_mini_devi").val("");
        }
        else{
            alert("Les champs de saisir sont vide !!!");
        }
        copy_ds();
        effacer_tout();
    }); 
    function copy_ds(){
        if($("#qt_aciers").val() !="" && $("#qt_fil").val() !="" && $("#pu_aciers").val() !="" && $("#pu_fil").val() !=""){
            var copy_ligne1 = $("#rang1").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne1));
            var copy_ligne2 = $("#rang2").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne2));
            var copy_ligne3 = $("#rang3").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne3));
            var copy_ligne4 = $("#rang4").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne4));
            var copy_ligne5 = $("#rang5").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne5));
            // var copy_ligne5 = $("#rang6").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne5));

            $("#c1").val("");
            $("#pu_c").val("");
            $("#tt_c").val("");
            
            $("#s1").val("");
            $("#pu_s").val("");
            $("#tt_s").val("");

            $("#g1").val("");
            $("#pu_g").val("");
            $("#tt_g").val("");

            $("#ac1").val("");
            $("#pu_ac").val("");
            $("#tt_ac").val("");

            $("#fil1").val("");
            $("#pu_filLL").val("");
            $("#tt_fil").val("");

            // $("#tt_fondat").val("");
            var copy_ligne0 = $("#rang6").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne0));
            
        }
        else{
            if($("#qt_aciers").val() =="" && $("#qt_fil").val() =="" && $("#pu_aciers").val() =="" && $("#pu_fil").val() ==""){
                var copy_ligne1_ = $("#rang1").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne1_));
                var copy_ligne2_ = $("#rang2").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne2_));
                var copy_ligne3_ = $("#rang3").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne3_));
                // var copy_ligne3 = $("#rang6").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne3));

                $("#c1").val("");
                $("#pu_c").val("");
                $("#tt_c").val("");
                
                $("#s1").val("");
                $("#pu_s").val("");
                $("#tt_s").val("");

                $("#g1").val("");
                $("#pu_g").val("");
                $("#tt_g").val("");

                // $("#tt_fondat").val("");
                var copy_ligne0 = $("#rang6").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne0));
            }
            else{
                $("#c1").val("");
                $("#pu_c").val("");
                $("#tt_c").val("");
                
                $("#s1").val("");
                $("#pu_s").val("");
                $("#tt_s").val("");

                $("#g1").val("");
                $("#pu_g").val("");
                $("#tt_g").val("");

                $("#ac1").val("");
                $("#pu_ac").val("");
                $("#tt_ac").val("");

                $("#fil1").val("");
                $("#pu_filLL").val("");
                $("#tt_fil").val("");

                $("#tt_fondat").val("");
                alert("Remplissage de tous les champs Prix_U/Qt obligatoire !!!");
            }
        }

        // var copy_ligne0 = $("#rang6").clone().appendTo($("#exemple_tab_2 ").add(copy_ligne0));
        $("#tt_fondat").val("");
    }
    function effacer_tout(){
        $("#inp1").val("");
        $("#inp2").val("");
        $("#inp3").val("");

        document.getElementById('volum_b').innerHTML = "0.00";
        document.getElementById('prix_tt').innerHTML = "0.00";

        $("#la_selection").val("");
        $("#surfax_f_b").val("");
        $("#ciment__0").val("");
        $("#sable__0").val("");
        $("#gravier__0").val("");

        $("#qt_aciers").val("");
        $("#qt_fil").val("");
        $("#pu_aciers").val("");
        $("#pu_fil").val("");

        $("#inp1_").val("");
        $("#inp2_").val("");
        $("#inp3_").val("");
        $("#inp1__").val("");
        $("#inp2__").val("");
        $("#inp3__").val("");
        
    }
    
    // _______Ajoute de nouvele ligne ______
    // var count = $(".ite").length;
    // $(document).on('click', '#bouton_fondation', function() { 
    //     count++;
    //     var htmlRows = '';
    //     htmlRows += '<tr>';
    //     // htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
    //     htmlRows += '<td><select name="" id=""><option value="">Selectionne ...</option><option value="">Béton dosé à 150 kg/m³</option><option value="">Béton dosé à 200 kg/m³</option><option value="">Béton dosé à 250 kg/m³</option><option class="" id="" value="">Béton Armé dosé à 350 kg/m³</option><option class="" id="" value="">Béton Armé dosé à 400 kg/m³</option><option class="" id="" value="">Béton Armé dosé à 450 kg/m³</option><option class="" id="" value="">Béton Armé dosé à 500 kg/m³</option></select></td>';          
    //     htmlRows += '<td><input type="text" name="" id="" value="m³"></td>';          
    //     htmlRows += '<td><input class="fouille_cal" type="number" id="qt2_'+count+'"  autocomplete="off"></td>';	
    //     htmlRows += '<td><input class="fouille_cal" type="number" id="pu2_'+count+'"  autocomplete="off"></td>';   		
    //     htmlRows += '<td><input class="fouille_tt" type="number" id="pt2_'+count+'"  autocomplete="off"></td>';  		
    //     htmlRows += '</tr>';
    //     $('#tab_fondation').append(htmlRows);
    // });
    // ____________ calcul des dimensions __________
    $(".dimensions").keyup(function() {
        var L = Number($("#inp1").val());
        var l = Number($("#inp2").val());
        var ep = Number($("#inp3").val());
        var produit = L*l*ep;
        document.getElementById('volum_b').innerHTML = produit.toFixed(2);
    });
    // __________ calcul a partir de select les dosages_______
    $("#surfax_f_b").keyup(function(){
        var surface_beton = Number($('#surfax_f_b').val());
        $("#qt").val(surface_beton);
        calcul_select();
        // calcul_prix_u();
    });
    $(".les_prix_u").keyup(function(){
        calcul_prix_u();
    });

    $(".arme_b").keyup(function(){
        ac_fil();
    });
    $("#pu_mini_devi").keyup(function(){
        var qt_ = Number($('#qt').val());
        var pu_ = Number($("#pu_mini_devi").val());
        var tt = qt_*pu_;
        $("#tt_mini_devi").val(tt.toFixed(2));
    });
    function ac_fil(){
        var qt_ac = Number($("#qt_aciers").val());
        var qt_fil = Number($("#qt_fil").val());

        var pu_ac00 = Number($("#pu_aciers").val());
        var pu_fil = Number($("#pu_fil").val());

        var tt_g1_ = Number($("#tt_c").val());
        var tt_g2_ = Number($("#tt_s").val());
        var tt_g3_ = Number($("#tt_g").val());

        var tt_ac = qt_ac*pu_ac00;
        var tt_fil = qt_fil*pu_fil;

        var tt_glob = tt_ac+tt_fil+tt_g1_+tt_g2_+tt_g3_;

        $("#ac1").val(qt_ac);
        $("#fil1").val(qt_fil);

        $("#pu_ac").val(pu_ac00);
        $("#pu_filLL").val(pu_fil);

        $("#tt_ac").val(tt_ac);
        $("#tt_fil").val(tt_fil);

        $("#tt_fondat").val(tt_glob.toFixed(2));
    }

    function calcul_prix_u(){
        $(".les_prix_u").keyup(function(){
            var prix1 = Number($("#ciment__0").val());
            var prix2 = Number($("#sable__0").val());
            var prix3 = Number($("#gravier__0").val());

            var prix_u1_ = Number($("#inp1_").val());
            var prix_u2_ = Number($("#inp2_").val());
            var prix_u3_ = Number($("#inp3_").val());

            var tt_1 = Number($("#tt_ac").val());
            var tt_2 = Number($("#tt_fil").val());

            var resul1 = prix1*prix_u1_;
            var resul2 = prix2*prix_u2_;
            var resul3 = prix3*prix_u3_;

            var somm = resul1+resul2+resul3;
            var tt_global = tt_1+tt_2+resul1+resul2+resul3;

            $("#inp1__").val(resul1.toFixed(2));
            $("#inp2__").val(resul2.toFixed(2));
            $("#inp3__").val(resul3.toFixed(2));

            $("#pu_c").val(prix_u1_);
            $("#pu_s").val(prix_u2_);
            $("#pu_g").val(prix_u3_);
            
            $("#tt_c").val(resul1.toFixed(2));
            $("#tt_s").val(resul2.toFixed(2));
            $("#tt_g").val(resul3.toFixed(2));

            $("#tt_fondat").val(tt_global.toFixed(2));

            document.getElementById('prix_tt').innerHTML = somm.toFixed(2);
        });
    }

    function calcul_select(val) {
        var surface_b = Number($('#surfax_f_b').val());
        var selection_ = document.getElementById("la_selection").value;

        if(selection_ == "p1"){
            document.getElementById('ciment__0').value = (surface_b*(0.15)).toFixed(2);
            document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
            document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
            document.getElementById('descrip_').value = "Béton de propreté dosé à 150 kg/m³";
            $("#beton_arme_caher").hide(slow='3000');
        }
        if(selection_ == "p2"){
            document.getElementById('ciment__0').value = (surface_b*(0.20)).toFixed(2);
            document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
            document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
            document.getElementById('descrip_').value = "Béton de propreté dosé à 200 kg/m³";
            $("#beton_arme_caher").hide(slow='3000');
        }
        if(selection_ == "p3"){
            document.getElementById('ciment__0').value = (surface_b*(0.25)).toFixed(2);
            document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
            document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
            document.getElementById('descrip_').value = "Béton de propreté dosé à 250 kg/m³";
            $("#beton_arme_caher").hide(slow='3000');
        }

        if(selection_ == "a1"){
            document.getElementById('ciment__0').value = (surface_b*(0.35)).toFixed(2);
            document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
            document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
            document.getElementById('descrip_').value = "Béton Armé dosé à 350 kg/m³";
            $("#beton_arme_caher").show(slow="3000");
        }
        if(selection_ == "a2"){
            document.getElementById('ciment__0').value = (surface_b*(0.40)).toFixed(2);
            document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
            document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
            document.getElementById('descrip_').value = "Béton Armé dosé à 400 kg/m³";
            $("#beton_arme_caher").show(slow="3000");
        }
        if(selection_ == "a3"){
            document.getElementById('ciment__0').value = (surface_b*(0.45)).toFixed(2);
            document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
            document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
            document.getElementById('descrip_').value = "Béton Armé dosé à 450 kg/m³";
            $("#beton_arme_caher").show(slow="3000");
        }
        if(selection_ == "a4"){
            document.getElementById('ciment__0').value = (surface_b*(0.50)).toFixed(2);
            document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
            document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
            document.getElementById('descrip_').value = "Béton Armé dosé à 500 kg/m³";
            $("#beton_arme_caher").show(slow="3000");
        }
        // calcul_prix_u();
        var prix1 = Number($("#ciment__0").val());
        var prix2 = Number($("#sable__0").val());
        var prix3 = Number($("#gravier__0").val());

        var prix_u1_ = Number($("#inp1_").val());
        var prix_u2_ = Number($("#inp2_").val());
        var prix_u3_ = Number($("#inp3_").val());

        var resul1 = prix1*prix_u1_;
        var resul2 = prix2*prix_u2_;
        var resul3 = prix3*prix_u3_;

        var somm = resul1+resul2+resul3;

        $("#inp1__").val(resul1.toFixed(2));
        $("#inp2__").val(resul2.toFixed(2));
        $("#inp3__").val(resul3.toFixed(2));

        document.getElementById('prix_tt').innerHTML = somm.toFixed(2);
        
        // ______ affichage auto calcul qt et prix_u______
        $("#c1").val(prix1.toFixed(2));
        $("#s1").val(prix2.toFixed(2));
        $("#g1").val(prix3.toFixed(2));
    }
</script>
</body>
</html>