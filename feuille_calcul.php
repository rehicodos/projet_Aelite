<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feuille_calcul.css">
    <title>Document</title>
</head>
<body>
    <div class="vrai_feuill_calcu">
        <table id="tab_fouille">
            <tr>
                <td colspan="6"><p id="id_terrassem">Fondation / Terrassement</p></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><p>*Fouille</p></td>
            </tr>
            <tr>
                <th>Désignaton</th>
                <th>Unité</th>
                <th>Longueur</th>
                <th>Largeur</th>
                <th>Epaisseur/hauteur</th>
                <th>Resultat</th>
            </tr>
            <tr>
                <td><input type="text" name="" id="design_1"></td>
                <td><input type="text" name="" id="unit_1"></td>
                <td><input type="number" name="" id="long_1"></td>
                <td><input type="number" name="" id="larg_1"></td>
                <td><input type="number" name="" id="hauteur_1"></td>
                <td><input type="number" name="" id="total_1"></td>
            </tr>
            <tbody></tbody>
            <tr>
                <td colspan="5"><h4  class="s_t_calcul"><strong>Volume Total Fouille</strong></h4></td>
                <td><input type="number" name="" id=""></td>
            </tr>
            <tr>
                <td><button type="button" id="bouton_fouille">Ajouter ligne</button></td>
            </tr>
        </table>
        <div class="separateur"></div>
        <table id="tab_remblais">
        <tr>
                <td></td>
                <td colspan="2"><p>*Remblais</p></td>
            </tr>
            <tr>
                <th>Désignaton</th>
                <th>Unité</th>
                <th>Longueur</th>
                <th>Largeur</th>
                <th>Epaisseur/hauteur</th>
                <th>Resultat</th>
            </tr>
            <tr>
                <td><input type="text" name="" id=""></td>
                <td><input type="text" name="" id=""></td>
                <td><input type="number" name="" id=""></td>
                <td><input type="number" name="" id=""></td>
                <td><input type="number" name="" id=""></td>
                <td><input type="number" name="" id=""></td>
            </tr>
            <tbody></tbody>
            <tr>
                <td colspan="5"><h4  class="s_t_calcul"><strong>Volume Total Remblais</strong></h4></td>
                <td><input type="number" name="" id=""></td>
            </tr>
            <tr>
                <td><button type="button" id="bouton_remblais">Ajouter ligne</button></td>
            </tr>
        </table>
    </div>
    <script src="feuille_calcul.js"></script>
</body>
</html>