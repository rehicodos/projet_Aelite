<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="travaux_prelim.css">
    <script src="jquery-3.6.0.js"></script>
    <title>Travaux Preliminaire</title>
</head>
<body>
<div class="generalite">
    <table id="tab_generalite">
        <tr>
            <td colspan='5'><p class="genera">Généralité</p></td>
        </tr>
        <tr>                                                                           
            <th width="25%">Désignation</th>                                   
            <th width="10%">Unité</th>                                   
            <th width="19%">Quantité</th>                                    
            <th width="23%">Prix_U</th>                                   
            <th width="23%">Prix_T</th>                                                                     
        </tr>
        <tr>
            <td><input class="gener" type="text" value='Installation et replis chantier' name="" id=""></td>
            <td>
                <select name="" id="selection_type_brq" onchange="cal(this.value);">
                    <option value="">ft</option>
                    <option value="type_1">m²</option>
                    <option value="type_2">m³</option>
                </select>
            </td>
            <td><input class="genne" type="number" name="" id="gene_qt"></td>
            <td><input class="genne" type="number" name="" id="gene_pu"></td>
            <td><input class="gene" type="number" name="" id="gene_pt"></td>
        </tr>
        <tr>
            <td><input class="gener" type="text" value="Implantation d'ouvrage" name="" id=""></td>
            <td>
            <select name="" id="selection_type_brq" onchange="cal(this.value);">
                <option value="type_1">m²</option>
                <option value="">ft</option>
                <option value="type_2">m³</option>
            </select>
            </td>
            <td><input class="genne" type="number" name="" id="gene1_qt"></td>
            <td><input class="genne" type="number" name="" id="gene1_pu"></td>
            <td><input class="gene" type="number" name="" id="gene1_pt"></td>
        </tr>
        <tbody></tbody>
        <tr>
            <td colspan="4"><h4 id="s_t_calcull" class="s_t_calcul"><strong>Total</strong></h4></td>
            <td><strong><h3 id="tt_travaux_prelim">0.00</h3></strong></td>
        </tr>
    </table>
    <div class="les_bouton">
        <button id="n_ligne" type="button">Nouvelle Ligne</button>
        <button type="reset">Effacer</button>
        <button type="submit">Valider</button>
    </div>
</div>
<script>
    // _______Ajoute de nouvele ligne ______
var count = $(".ite").length;
$(document).on('click', '#n_ligne', function() { 
    count++;
    var htmlRows = '';
    htmlRows += '<tr>';
    // htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
    htmlRows += '<td><input class="ite" type="text"  id="design2_'+count+'"  autocomplete="off"></td>';          
    htmlRows += '<td><select name="" id="selection_type_brq" onchange="cal(this.value);"><option value="">ft</option><option value="type_1">m²</option><option value="type_2">m³</option></select></td>';          
    htmlRows += '<td><input class="fouille_cal" type="number" id="qt2_'+count+'"  autocomplete="off"></td>';	
    htmlRows += '<td><input class="fouille_cal" type="number" id="pu2_'+count+'"  autocomplete="off"></td>';   		
    htmlRows += '<td><input class="fouille_tt" type="number" id="pt2_'+count+'"  autocomplete="off"></td>';  		
    htmlRows += '</tr>';
    $('#tab_generalite').append(htmlRows);
});
</script>
</body>
</html>