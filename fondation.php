<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fondation__225.css">
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
                <div class="placement_l_L_p"><h3>Longueur de toutes les Fouilles :</h3><input class="dimensions" id="inp1" type="text" placeholder="0.00"></div>
                <div class="placement_l_L_p"><h3>Largeur de la Fouille :</h3><input class="dimensions" id="inp2" type="text" placeholder="0.00"></div>
                <div class="placement_l_L_p"><h3>Epaisseur du Béton :</h3><input class="dimensions" id="inp3" type="text" placeholder="0.00"></div>
                <div class="volum_fouille">
                    <h5>Volume du Béton : <strong><span class="spandecor" id="volum_b">0.00</span></strong> m³</h5>
                </div>
                <hr/>
                <table>
                    <tr>
                        <th>Désignation</th>
                        <th>Unité</th>
                        <th>Quantité</th>
                        <th>Qt Ciment</th>
                        <th>Qt Sable</th>
                        <th>Qt Gravier</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="" id="la_selection" onchange="calcul_select(this.value);">
                                <option class="" id="" value="">Selectionne ...</option>
                                <option class="" id="" value="p1">Béton de propreté dosé à 150 kg/m³</option>
                                <option class="" id="" value="p2">Béton de propreté dosé à 200 kg/m³</option>
                                <option class="" id="" value="p3">Béton de propreté dosé à 250 kg/m³</option>
                                <option class="" id="" value="a1">Béton Armé dosé à 350 kg/m³</option>
                                <option class="" id="" value="a2">Béton Armé dosé à 400 kg/m³</option>
                                <option class="" id="" value="a3">Béton Armé dosé à 450 kg/m³</option>
                                <option class="" id="" value="a4">Béton Armé dosé à 500 kg/m³</option>
                            </select>
                        </td>
                                
                        <td><input type="text" value="m³"></td>
                        <td><input id="surfax_f_b" type="text" ></td>
                        <td><input type="text" id="ciment__0" value="0.00"></td>
                        <td><input type="text" id="sable__0" value="0.00"></td>
                        <td><input type="text" id="gravier__0" value="0.00"></td>
                    </tr>
                </table>
                <div id="">
                    <div id="beton_arme_caher">
                        <div class="placement_l_L_p_"><h3 class="avance_texte">Qt Aciers :</h3><input id="inp10_" type="text" placeholder="Qt"><h3 class="toto">Prix_U :</h3><input type="text" id="inp1__0" placeholder="0.00"></div>
                        <div class="placement_l_L_p_"><h3 class="avance_texte">Qt Fil de Fer :</h3><input id="inp11_" type="text" placeholder="Qt"><h3 class="toto">Prix_U :</h3><input type="text" id="inp1__0" placeholder="0.00"></div>
                    </div>
                    <div class="placement_l_L_p_"><h3 class="avance_texte">Ciment :</h3><input class="les_prix_u" id="inp1_" type="text" placeholder="Prix_U"><h3 class="toto">Prix_T Ciment :</h3><input type="text" id="inp1__" placeholder="0.00"></div>
                    <div class="placement_l_L_p_"><h3 class="avance_texte">Sable :</h3><input class="les_prix_u" id="inp2_" type="text" placeholder="Prix_U"><h3 class="toto">Prix_T Sable :</h3><input type="text" id="inp2__" placeholder="0.00"></div>
                    <div class="placement_l_L_p_"><h3 class="avance_texte">Gravier :</h3><input class="les_prix_u" id="inp3_" type="text" placeholder="Prix_U"><h3 class="toto">Prix_T Gravier :</h3><input type="text" id="inp3__" placeholder="0.00"></div>
                </div>
                <div class="volum_fouille">
                    <h5>Total HT Béton : <strong><span id="prix_tt" class="spandecor">0.00</span></strong></h5>
                </div>
                <hr/>
                <table id="tab_fondation">
                    <!-- <tr> -->
                                <!-- <td></td> -->
                                <!-- <td colspan="2"><p><strong>*Remblais</strong></p></td> -->
                    <!-- </tr> -->
                    <tr>
                                <th>Désignaton</th>
                                <th>Unité</th>
                                <th>Quantité</th>
                                <th>Prix_U</th>
                                <th>Prix_T</th>
                    </tr>
                    <tr>
                                <td>
                                    <select name="" id="">
                                        <option class="" id="" value="">Selectionne ...</option>
                                        <option class="" id="" value="">Béton de propreté dosé à 150 kg/m³</option>
                                        <option class="" id="" value="">Béton de propreté dosé à 200 kg/m³</option>
                                        <option class="" id="" value="">Béton de propreté dosé à 250 kg/m³</option>
                                        <option class="" id="" value="">Béton Armé dosé à 350 kg/m³</option>
                                        <option class="" id="" value="">Béton Armé dosé à 400 kg/m³</option>
                                        <option class="" id="" value="">Béton Armé dosé à 450 kg/m³</option>
                                        <option class="" id="" value="">Béton Armé dosé à 500 kg/m³</option>
                                    </select>
                                </td>
                                <td><input type="text" value="m³" name="" id="unitt_"></td>
                                <td><input class="premiere_lign" type="number" name="" id="quantite0_"></td>
                                <td><input class="premiere_lign" type="number" name="" id="prix_unitaire0_"></td>
                                <td><input type="number" name="" id="pprix_total0_"></td>
                    </tr>
                    <tbody></tbody>
                    <tr>
                                <td colspan="4"><h4  class="s_t_calcul"><strong>Prix Total Dosage Béton</strong></h4></td>
                                <td><input type="number" name="" id="tt_fondat"></td>
                    </tr>
                </table>
                <div id="tb">
                    <button type="button" id="bouton_fondation">Ajouter ligne</button>
                    <!-- <button type="button" id="bt_ok_remblais">OK</button> -->
                    <button type="button" id="">Valider</button>
                </div>
            </div>
            <div id="image">
                <img src="images/beton_prop.jpg" alt="">
            </div>
        </div>
    </div>
    <table id="tab_fondation">
        <tr>
            <th>Désignaton</th>
            <th>Unité</th>
            <th>Quantité</th>
            <th>Prix_U</th>
            <th>Prix_T</th>
        </tr>
        <tr>
            <td><input value="Ciment" type="text"  name="" id=""></td>
            <td><input value="pqt" type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
        </tr>
        <tr>
            <td><input value="Sable" type="text"  name="" id=""></td>
            <td><input value="m³" type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
        </tr>
        <tr>
            <td><input value="Gravier" type="text"  name="" id=""></td>
            <td><input value="m³" type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
        </tr>
        <tr>
            <td><input value="Aciers" type="text"  name="" id=""></td>
            <td><input value="botte" type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
        </tr>
        <tr>
            <td><input value="Fil de Fer" type="text"  name="" id=""></td>
            <td><input value="rlx" type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
            <td><input type="text"  name="" id=""></td>
        </tr>
        <!-- <tbody></tbody> -->
        <tr>
            <td colspan="4"><h4  class="s_t_calcul"><strong>Prix Total Dosage Béton</strong></h4></td>
            <td><input type="number" name="" id="tt_fondat"></td>
        </tr>
    </table>
<script>
    // _______Ajoute de nouvele ligne ______
    var count = $(".ite").length;
    $(document).on('click', '#bouton_fondation', function() { 
        count++;
        var htmlRows = '';
        htmlRows += '<tr>';
        // htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
        htmlRows += '<td><select name="" id=""><option value="">Selectionne ...</option><option value="">Béton dosé à 150 kg/m³</option><option value="">Béton dosé à 200 kg/m³</option><option value="">Béton dosé à 250 kg/m³</option><option class="" id="" value="">Béton Armé dosé à 350 kg/m³</option><option class="" id="" value="">Béton Armé dosé à 400 kg/m³</option><option class="" id="" value="">Béton Armé dosé à 450 kg/m³</option><option class="" id="" value="">Béton Armé dosé à 500 kg/m³</option></select></td>';          
        htmlRows += '<td><input type="text" name="" id="" value="m³"></td>';          
        htmlRows += '<td><input class="fouille_cal" type="number" id="qt2_'+count+'"  autocomplete="off"></td>';	
        htmlRows += '<td><input class="fouille_cal" type="number" id="pu2_'+count+'"  autocomplete="off"></td>';   		
        htmlRows += '<td><input class="fouille_tt" type="number" id="pt2_'+count+'"  autocomplete="off"></td>';  		
        htmlRows += '</tr>';
        $('#tab_fondation').append(htmlRows);
    });
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
        calcul_select();
    });

    $(".les_prix_u").keyup(function(){
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
    });

    function calcul_select(val) {
    var surface_b = Number($('#surfax_f_b').val());
    var selection_ = document.getElementById("la_selection").value;

    if(selection_ == "p1"){
        document.getElementById('ciment__0').value = (surface_b*(0.15)).toFixed(2);
        document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
        document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
    }
    if(selection_ == "p2"){
        document.getElementById('ciment__0').value = (surface_b*(0.20)).toFixed(2);
        document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
        document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
    }
    if(selection_ == "p3"){
        document.getElementById('ciment__0').value = (surface_b*(0.25)).toFixed(2);
        document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
        document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
    }

    if(selection_ == "a1"){
        document.getElementById('ciment__0').value = (surface_b*(0.35)).toFixed(2);
        document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
        document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
    }
    if(selection_ == "a2"){
        document.getElementById('ciment__0').value = (surface_b*(0.40)).toFixed(2);
        document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
        document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
    }
    if(selection_ == "a3"){
        document.getElementById('ciment__0').value = (surface_b*(0.45)).toFixed(2);
        document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
        document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
    }
    if(selection_ == "a4"){
        document.getElementById('ciment__0').value = (surface_b*(0.50)).toFixed(2);
        document.getElementById('sable__0').value = (surface_b*(0.4)).toFixed(2);
        document.getElementById('gravier__0').value = (surface_b*(0.9)).toFixed(2);
    }
    
}
</script>
</body>
</html>