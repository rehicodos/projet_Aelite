<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fondation.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Fondation</title>
</head>
<body>
    <h1>Travaux de Béton</h1>
    <div id="beton_d_propete">
        <div id="text_beton">
            <h2>Béton de Proprété</h2>
        </div>
        <div id="detail">
            <div class="dim">
                 <div class="volum_fouill">
                    <h5>Dimensions en Mètre (m)</h5>
                </div>
                <div class="placement_l_L_p"><h3>Longueur de toutes les Fouilles :</h3><input id="inp1" type="text" placeholder="0.00"></div>
                <div class="placement_l_L_p"><h3>Largeur de la Fouille :</h3><input id="inp2" type="text" placeholder="0.00"></div>
                <div class="placement_l_L_p"><h3>Epaisseur du Béton :</h3><input id="inp3" type="text" placeholder="0.00"></div>
                <div class="volum_fouille">
                    <h5>Volume du Béton : <strong>0.00</strong> m³</h5>
                </div>
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
                            <select name="" id="">
                                <option value="">Selectionne ...</option>
                                <option value="">Béton dosé à 150 kg/m³</option>
                                <option value="">Béton dosé à 200 kg/m³</option>
                                <option value="">Béton dosé à 250 kg/m³</option>
                            </select>
                        </td>
                        <td><input type="text" value="m³"></td>
                        <td><input type="text"></td>
                        <td><p>0.00</p></td>
                        <td><p>0.00</p></td>
                        <td><p>0.00</p></td>
                    </tr>
                </table>
                <div id="">
                    <div class="placement_l_L_p"><h3>Ciment :</h3><input id="inp1_" type="text" placeholder="Prix_U"><h3 class="toto">Prix_T Ciment :</h3><input type="text" id="inp1__" placeholder="0.00"></div>
                    <div class="placement_l_L_p"><h3>Sable :</h3><input id="inp2_" type="text" placeholder="Prix_U"><h3 class="toto">Prix_T Sable :</h3><input type="text" id="inp2__" placeholder="0.00"></div>
                    <div class="placement_l_L_p"><h3>Gravier :</h3><input id="inp3_" type="text" placeholder="Prix_U"><h3 class="toto">Prix_T Gravier :</h3><input type="text" id="inp3__" placeholder="0.00"></div>
                </div>
                <div class="volum_fouille">
                    <h5>Total HT Béton : <strong>0.00</strong></h5>
                </div>
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
                                        <option value="">Selectionne ...</option>
                                        <option value="">Béton dosé à 150 kg/m³</option>
                                        <option value="">Béton dosé à 200 kg/m³</option>
                                        <option value="">Béton dosé à 250 kg/m³</option>
                                    </select>
                                </td>
                                <td><input type="text" value="m³" name="" id="unitt_"></td>
                                <td><input class="premiere_lign" type="number" name="" id="quantite0_"></td>
                                <td><input class="premiere_lign" type="number" name="" id="prix_unitaire0_"></td>
                                <td><input type="number" name="" id="pprix_total0_"></td>
                            </tr>
                            <tbody></tbody>
                            <tr>
                                <td colspan="4"><h4  class="s_t_calcul"><strong>Prix Total Remblais</strong></h4></td>
                                <td><input type="number" name="" id="tt_fondat"></td>
                            </tr>
                            <tr>
                                <td><button type="button" id="bouton_fondation">Ajouter ligne</button></td>
                                <td><button type="button" id="bt_ok_remblais">OK</button></td>
                                <td><button type="button" id="">Valider</button></td>
                            </tr>
                </table>
            </div>
            <div id="image">
                <img src="images/beton_prop.jpg" alt="">
            </div>
        </div>
    </div>
    <script>
    // _______Ajoute de nouvele ligne ______
var count = $(".ite").length;
$(document).on('click', '#bouton_fondation', function() { 
    count++;
    var htmlRows = '';
    htmlRows += '<tr>';
    // htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
    htmlRows += '<td><select name="" id=""><option value="">Selectionne ...</option><option value="">Béton dosé à 150 kg/m³</option><option value="">Béton dosé à 200 kg/m³</option><option value="">Béton dosé à 250 kg/m³</option></select></td>';          
    htmlRows += '<td><select name="" id="selection_type_brq" onchange="cal(this.value);"><option value="">ft</option><option value="type_1">m²</option><option value="type_2">m³</option><option value="type_2">ha</option></select></td>';          
    htmlRows += '<td><input class="fouille_cal" type="number" id="qt2_'+count+'"  autocomplete="off"></td>';	
    htmlRows += '<td><input class="fouille_cal" type="number" id="pu2_'+count+'"  autocomplete="off"></td>';   		
    htmlRows += '<td><input class="fouille_tt" type="number" id="pt2_'+count+'"  autocomplete="off"></td>';  		
    htmlRows += '</tr>';
    $('#tab_fondation').append(htmlRows);
});
</script>
</body>
</html>