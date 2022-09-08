<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feuille_calcul.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Document</title>
</head>
<body>
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
                <th>Longueur Brique(m)</th>
                <th>Largeur Brique(m)</th>
                <th>Prix_U</th>
                <!-- <th colspan="2">nbre sac ciment JOIN</th> -->
                <th>Nbre de Brq nécessaire</th>
                <th>Prix_T</th>
            <tr>
                <td><input class="brq" type="text" name="" id="surface_mur"></td>
                <td><input class="brq" type="text" name="" id="long_brq"></td>
                <td><input class="brq" type="text" name="" id="larg_brq"></td>
                <td><input type="text" name="" id="prix_u_brq"></td>
                <td><strong><h3 id="nbre_brq">0.00</h3></strong></td>
                <td><strong><h3 id="prix_t_brq">0.00</h3></strong></td>
                <!-- <td><input type="number" name="" id="prix_t_brq"></td> -->
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><button id="ok_brq" type="button">OK</button></td>
            </tr>
        </table>
        <div id="table_resultat_calcul">
            <table>
                <tr>
                    <td colspan="5"><p class="sms_dosage">Rendu en Détails Agglos et Hourdis</p></td>
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
                    <td><input type="number" name="" id="cimen"></td>
                    <td><input type="text"  name="" id="tt1"></td>
                    <td><input type="text" name="" id="pt_"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Agglos 15 creux" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input type="number" name="" id="cimen"></td>
                    <td><input type="text"  name="" id="tt1"></td>
                    <td><input type="text" name="" id="pt_"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Agglos 15 pleins" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input type="number" name="" id="cimen"></td>
                    <td><input type="text"  name="" id="tt1"></td>
                    <td><input type="text" name="" id="pt_"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Agglos 20 creux" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input type="number" name="" id="cimen"></td>
                    <td><input type="text"  name="" id="tt1"></td>
                    <td><input type="text" name="" id="pt_"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Agglos 20 pleins" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input type="number" name="" id="cimen"></td>
                    <td><input type="text"  name="" id="tt1"></td>
                    <td><input type="text" name="" id="pt_"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Hourdis 16" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input type="number" name="" id="cimen"></td>
                    <td><input type="text"  name="" id="tt1"></td>
                    <td><input type="text" name="" id="pt_"></td>
                </tr>
                <tr>
                    <td><input type="text" value="Hourdis 20" name="" id=""></td>
                    <td><input type="text" value="u" name="" id=""></td>
                    <td><input type="number" name="" id="cimen"></td>
                    <td><input type="text"  name="" id="tt1"></td>
                    <td><input type="text" name="" id="pt_"></td>
                </tr>
                
                <tr>
                    <td colspan="4"><h4  class="s_t_calcul"><strong>TOTAL DEBOURSE SEC HT AGGLOS/HOURDIS</strong></h4></td>
                    <td><input type="number" name="" id="debour_ht"></td>
                </tr>
            </table>
        </div>
    </div>



    <script src="feuille_call.js"></script>
</body>
</html>