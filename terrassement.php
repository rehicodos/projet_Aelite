<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="terrassemen__00t.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Terrassement</title>
</head>
<body>
    <h2>Travaux de terrassement</h2>
    <div id="tb_retou"><button id="bt_retour_terrassement" type="button"><strong><-<-<- Retour</strong></button></div>
    <div class="vrai_feuill_calcu">
        <div class="fouille_dim">
            <div class="dim_">
                 <div class="volum_fouill_0">
                    <h5>Dimensions Fouille en Mètre (m)</h5>
                </div>
                <div class="placement_l_L_p"><h3>Longueur Fouille :</h3><input id="inp1" type="text" placeholder="0.00"></div>
                <div class="placement_l_L_p"><h3>Largeur Fouille :</h3><input id="inp2" type="text" placeholder="0.00"></div>
                <div class="placement_l_L_p"><h3>Profondeur Fouille :</h3><input id="inp3" type="text" placeholder="0.00"></div>
                <!-- <h3>Longueur Fouille :</h3><input type="text">
                <h3>Largeur Fouille :</h3><input type="text">
                <h3>Profondeur Fouille :</h3><input type="text"> -->
                <div class="volum_fouill_1">
                    <h5>Volume Fouille est : <strong>0.00</strong> m³</h5>
                </div>
            </div>

            <div id="image">
                <img src="images/terrassement_fouille.jpg" alt="">
            </div>
        </div>
        <table id="tab_fouille">
                            <!-- <tr>
                                <td colspan="6"><p id="id_terrassem">Fondation / Terrassement</p></td>
                            </tr> -->
                            <tr>
                                <!-- <td></td> -->
                                <td colspan="2"><p><strong>*Fouille</strong></p></td>
                            </tr>
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
                                        <option value="Fouille_rigole">Fouille en Rigole</option>
                                        <option value="Fouille_trous">Fouille en Trous</option>
                                        <option value="Fouille_excavation">Fouille en Excavation</option>
                                        <option value="Fouille_tranchee">Fouille en Tranchée</option>
                                    </select>
                                </td>
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
                                <td><button type="button" id="">Valider</button></td>
                            </tr>
        </table>
        <div class="separateur"></div>
        <div class="fouille_dim">
            <div class="dim_">
                 <div class="volum_fouill">
                    <h5>Dimensions Remblais en Mètre (m)</h5>
                </div>
                <div class="placement_l_L_p"><h3>Longueur Remblai :</h3><input id="inp1" type="text" placeholder="0.00"></div>
                <div class="placement_l_L_p"><h3>Largeur Remblai :</h3><input id="inp2" type="text" placeholder="0.00"></div>
                <div class="placement_l_L_p"><h3>Profondeur Remblai :</h3><input id="inp3" type="text" placeholder="0.00"></div>
                <!-- <h3>Longueur Fouille :</h3><input type="text">
                <h3>Largeur Fouille :</h3><input type="text">
                <h3>Profondeur Fouille :</h3><input type="text"> -->
                <div class="volum_fouille">
                    <h5>Volume Remblai est : <strong>0.00</strong> m³</h5>
                </div>
            </div>

            <div id="image">
                <img src="images/terrassement_remblai.jpg" alt="">
            </div>
        </div>
        <table id="tab_remblais">
                            <tr>
                                <!-- <td></td> -->
                                <td colspan="2"><p><strong>*Remblais</strong></p></td>
                            </tr>
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
                                        <option value="">Remblai Fouilles en Rigole</option>
                                        <option value="">Remblai Fouilles en Trous</option>
                                        <option value="">Remblai compacté sous dalle</option>
                                        <option value="">Apport de terre argilo-sableuse</option>
                                        <option value="">Apport de terre graveleuse</option>
                                        <option value="">Epandage des terres</option>
                                        <option value="">Nivellement definitif sous dallage</option>
                                        <option value="">Exécutiondes de talus droit</option>
                                        <option value="">Exécutiondes de talus courbe</option>
                                        <option value="">Exécution des déblais excédentaires</option>
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
                                <td><input type="number" name="" id="tt_remblais"></td>
                            </tr>
                            <tr>
                                <td><button type="button" id="bouton_remblais">Ajouter ligne</button></td>
                                <td><button type="button" id="bt_ok_remblais">OK</button></td>
                                <td><button type="button" id="">Valider</button></td>
                            </tr>
        </table>
    </div> 
    <script src="feuille_call_00_.js"></script>
</body>
</html>