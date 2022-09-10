<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feuille_calcul12345.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Document</title>
</head>
<body>
    
    <div class="maconnerie">
        <table id="tab_maconnerie">
            <tr>
                <!-- <td></td> -->
                <td colspan="6"><p>Maçonnerie</p></td>
            </tr>
            <tr>
                <td colspan="2"><p>Mur en Elevation</p></td>
            </tr>
            <tr>
                <th>Surface du Mur</th>
                <th>Qt Ciment(sac)</th>
                <th>Qt Sable(t)</th>
                <!-- <th>nbre sac ciment JOIN</th> -->
                <th>Prix Ciment</th>
                <th>Prix Sable</th>
            </tr>
            <tr>
                <td><input type="text" name="" id=""></td>
                <td><input type="text" name="" id=""></td>
                <td><input type="number" name="" id=""></td>
                <td><input type="number" name="" id=""></td>
                <td><input type="number" name="" id=""></td>
                <!-- <td><input type="number" name="" id=""></td> -->
                <!-- <td><input type="number" name="" id=""></td> -->
            </tr>
            
        </table>
        <div class="separateur"></div>
        <table id="">
            </tr>
                <td colspan="2"><p>Enduit/Crepissage</p></td>
            </tr>
            <tr>
                <th>Surface du Mur</th>
                <th>Qt Ciment(sac)</th>
                <th>Qt Sable(t)</th>
                <!-- <th colspan="2">nbre sac ciment JOIN</th> -->
                <th>Prix Ciment</th>
                <th>Prix Sable</th>
            <tr>
                <td><input type="text" name="" id=""></td>
                <td><input type="text" name="" id=""></td>
                <td><input type="number" name="" id=""></td>
                <td><input type="number" name="" id=""></td>
                <td><input type="number" name="" id=""></td>
                <!-- <td><input type="number" name="" id=""></td> -->
            </tr>
        </table>
        <div class="separateur"></div>
        <table id="">
            </tr>
                <td colspan="2"><p>Nombre de brique pour Mur</p></td>
            </tr>
            <tr>
                <th>Surface du Mur(m²)</th>
                <th>Dimention Agglos</th>
                <th>Prix_U</th>
                <th>Nbre de Brq nécessaire</th>
                <th>Prix_T</th>
            <tr>
                <td><input class="brq" type="text" name="" id="surface_mur"></td>
                <td>
                    <select name="" id="selection_type_brq" onchange="cal(this.value);">
                        <option value="">Selectionne</option>
                        <option value="type_1">20x20x40</option>
                        <option value="type_2">20x20x50</option>
                    </select>
                </td>
                <td><input type="text" name="" id="prix_u_brq" onkeyup="cal();"></td>
                <td><strong><h3 id="nbre_brq">0.00</h3></strong></td>
                <td><strong><h3 id="prix_t_brq">0.00</h3></strong></td>
            </tr>
        </table>
        <div class="separateur"></div>
        <table id="">
            <tr>
                <th>Surface du Mur(m²)</th>
                <th>Longueur Brq (m)</th>
                <th>Largeur Brq (m)</th>
                <th>Prix_U</th>
                <th>Nbre de Brq nécessaire</th>
                <th>Prix_T</th>
            <tr>
                <td><input class="brq" type="number" name="" id="surface_mur2" ></td>
                <td><input class="brq" type="number" name="" id="long_brq" ></td>
                <td><input class="brq" type="number" name="" id="larg_brq" onkeyup="cal2();"></td>
                <td><input type="text" name="" id="prix_u_brq2" onkeyup="cal2();"></td>
                <td><strong><h3 id="saisi_nbre_brq">0.00</h3></strong></td>
                <td><strong><h3 id="saisir_prix_t_brq">0.00</h3></strong></td>
            </tr>
        </table>
        <div id="table_resultat_calcul">
            <table>
                <tr>
                    <td colspan="5"><p class="sms_dosage">Agglos et Hourdis</p></td>
                </tr>
                <tr>
                    <th>Désignation</th>
                    <th>Unité</th>
                    <th>Quantité</th>
                    <th>Prix_U</th>
                    <th>Prix_T</th>
                </tr>
                <tr>
                    <td><input type="text" value="Agglos 10 creux" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input class="qt_pu_agglos_hourdis_1" type="number" name="" id="agglo_10_qt"></td>
                    <td><input class="qt_pu_agglos_hourdis_1" type="text"  name="" id="agglo_10_pu"></td>
                    <td><input type="text" name="" id="tt_agglo_10"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Agglos 15 creux" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input class="qt_pu_agglos_hourdis_2" type="number" name="" id="agglo_15_creux_qt"></td>
                    <td><input class="qt_pu_agglos_hourdis_2" type="text"  name="" id="agglo_15_creux_pu"></td>
                    <td><input type="text" name="" id="tt_agglo_15_creux"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Agglos 15 pleins" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input class="qt_pu_agglos_hourdis_3" type="number" name="" id="agglo_15_plein_qt"></td>
                    <td><input class="qt_pu_agglos_hourdis_3" type="text"  name="" id="agglo_15_plein_pu"></td>
                    <td><input type="text" name="" id="tt_agglo_15_plein"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Agglos 20 creux" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input class="qt_pu_agglos_hourdis_4" type="number" name="" id="agglo_20_creux_qt"></td>
                    <td><input class="qt_pu_agglos_hourdis_4" type="text"  name="" id="agglo_20_creux_pu"></td>
                    <td><input type="text" name="" id="tt_agglo_20_creux"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Agglos 20 pleins" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input class="qt_pu_agglos_hourdis_5" type="number" name="" id="agglo_20_plein_qt"></td>
                    <td><input class="qt_pu_agglos_hourdis_5" type="text"  name="" id="agglo_20_plein_pu"></td>
                    <td><input type="text" name="" id="tt_agglo_20_plein"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Hourdis 16" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input class="qt_pu_agglos_hourdis_6" type="number" name="" id="hourdis_16_qt"></td>
                    <td><input class="qt_pu_agglos_hourdis_6" type="text"  name="" id="hourdis_16_pu"></td>
                    <td><input type="text" name="" id="tt_hourdi_16"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Hourdis 20" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input class="qt_pu_agglos_hourdis_7" type="number" name="" id="hourdis_20_qt"></td>
                    <td><input class="qt_pu_agglos_hourdis_7" type="text"  name="" id="hourdis_20_pu"></td>
                    <td><input type="text" name="" id="tt_hourdi_20"></td>
                </tr>
                
                <tr>
                    <td colspan="4"><h4  class="s_t_calcul"><strong>PRIX TOTAL</strong></h4></td>
                    <td><strong><h3 id="debour_ht_aggol_hourdi">0.00</h3></strong></td>
                </tr>
            </table>
        </div>
    </div>



    <script src="feuille_call_000.js"></script>
</body>
</html>