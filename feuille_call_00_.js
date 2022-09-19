// _______Ajoute de nouvele ligne a la table fouille______
var count = $(".itemRowww").length;
$(document).on('click', '#bouton_fouille', function() { 
    count++;
    var htmlRows = '';
    htmlRows += '<tr>';
    // htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
    htmlRows += '<td><select name="" id=""><option value="">Selectionne ...</option><option value="Fouille_rigole">Fouille en Rigole</option><option value="Fouille_trous">Fouille en Trous</option><option value="Fouille_excavation">Fouille en Excavation</option><option value="Fouille_tranchee">Fouille en Tranchée</option></select></td>';          
    htmlRows += '<td><input type="text" value="m³" id="unitt_'+count+'"  autocomplete="off"></td>';          
    htmlRows += '<td><input class="fouille_cal" type="number" id="qtt_'+count+'"  autocomplete="off"></td>';	
    htmlRows += '<td><input class="fouille_cal" type="number" id="puu_'+count+'"  autocomplete="off"></td>';   		
    htmlRows += '<td><input type="number" id="ptt_'+count+'"  autocomplete="off"></td>';   		
    // htmlRows += '<td><input type="number" id="total_'+count+'"  autocomplete="off"></td>';		 
    // htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
    htmlRows += '</tr>';
    $('#tab_fouille').append(htmlRows);
});
// _______Ajoute de nouvele ligne a la table remblais______
var count = $(".ite").length;
$(document).on('click', '#bouton_remblais', function() { 
    count++;
    var htmlRows = '';
    htmlRows += '<tr>';
    // htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
    htmlRows += '<td><select name="" id=""><option value="">Selectionne ...</option><option value="">Remblai Fouilles en Rigole</option><option value="">Remblai Fouilles en Trous</option><option value="">Remblai compacté sous dalle</option><option value="">Apport de terre argilo-sableuse</option><option value="">Apport de terre graveleuse</option><option value="">Epandage des terres</option><option value="">Nivellement definitif sous dallage</option><option value="">Exécutiondes de talus droit</option><option value="">Exécutiondes de talus courbe</option><option value="">Exécution des déblais excédentaires</option></select></td>';          
    htmlRows += '<td><input type="text" value="m³" id="unitt_'+count+'"  autocomplete="off"></td>';          
    htmlRows += '<td><input class="fouille_cal" type="number" id="qt2_'+count+'"  autocomplete="off"></td>';	
    htmlRows += '<td><input class="fouille_cal" type="number" id="pu2_'+count+'"  autocomplete="off"></td>';   		
    htmlRows += '<td><input class="fouille_tt" type="number" id="pt2_'+count+'"  autocomplete="off"></td>';  		
    // htmlRows += '<td><input type="number" id="total_'+count+'"  autocomplete="off"></td>';		 
    // htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
    htmlRows += '</tr>';
    $('#tab_remblais').append(htmlRows);
});

// ______calcul fouille_______

$("#bt_ok_fouille").click(function(){
    var compt =0;
    var q00 = Number($('#quantite00_').val());
	var prix00 = Number($('#prix_unitaire00_').val());
    var q00_prix00 = q00*prix00;
    $('#pprix_total00_').val(q00_prix00);

    var taill = $("[id^='designn_']").length;
    for(var i=1; i < taill + 1; i++){
        var quant = Number($('#tab_fouille tbody #qtt_'+ i).val());
		var prixu = Number($('#tab_fouille tbody #puu_'+ i).val());
        var qt_pu = quant*prixu;

        $('#tab_fouille tbody #ptt_' + i).val(qt_pu);
        compt += qt_pu;
    }
    $("#tt_fouille").val(compt + q00_prix00);
});

// ______calcul remblais_______
$("#bt_ok_remblais").click(function(){
    var compt =0;
    var q0 = Number($('#quantite0_').val());
	var prix0 = Number($('#prix_unitaire0_').val());
    var q0_prix0 = q0*prix0;
    $('#pprix_total0_').val(q0_prix0);

    var taill = $("[id^='design2_']").length;
    for(var i=1; i < taill + 1; i++){
        var quant = Number($('#tab_remblais tbody #qt2_'+ i).val());
		var prixu = Number($('#tab_remblais tbody #pu2_'+ i).val());
        var qt_pu = quant*prixu;

        $('#tab_remblais tbody #pt2_' + i).val(qt_pu);
        compt += qt_pu;
    }
    $("#tt_remblais").val(compt + q0_prix0);
});

// ________calcul nbre de brique______
function cal(val) {
    var surface_mur = Number($('#surface_mur').val());
    var selection_ = document.getElementById("selection_type_brq").value;
    var prix_u_brq = Number($('#prix_u_brq').val());

    var surfax_brq_1 = 0.0924;
    var surfax_brq_2 = 0.1144;
    var nbre_brq_opt1 = ((surface_mur / surfax_brq_1) * (1.2));
    var nbre_brq_opt2 = ((surface_mur / surfax_brq_2) * (1.2));

    if(selection_ == "type_1"){
        var som_ = prix_u_brq * nbre_brq_opt1;
        document.getElementById('nbre_brq').innerHTML = nbre_brq_opt1.toFixed(2);
        document.getElementById('prix_t_brq').innerHTML = som_.toFixed(2);
    }
    if(selection_ == "type_2"){
        var som_2 = prix_u_brq * nbre_brq_opt2;
        document.getElementById('nbre_brq').innerHTML = nbre_brq_opt2.toFixed(2);
        document.getElementById('prix_t_brq').innerHTML = som_2.toFixed(2);
    }
}
function cal2() {
    var surface_mur = Number(document.getElementById("surface_mur2").value);
    var long_brq = Number(document.getElementById("long_brq").value);
    var larg_brq = Number(document.getElementById("larg_brq").value);
    var joint = 0.02;
    var surfaxx_brq = ((parseFloat(long_brq)+joint)*(parseFloat(larg_brq)+joint));
    var nbr_brq = (parseFloat(surface_mur)/surfaxx_brq)*(1.2);
    var prix_u_brq = Number(document.getElementById("prix_u_brq2").value);
    var som_ = parseFloat(prix_u_brq) * nbr_brq;

    document.getElementById('saisi_nbre_brq').innerHTML = nbr_brq.toFixed(2);
    document.getElementById('saisir_prix_t_brq').innerHTML = som_.toFixed(2);
}

// ______css nbre brique et prix total_____
// document.getElementById('nbre_brq').style.backgroundColor= "tomato";
// document.getElementById('prix_t_brq').style.backgroundColor= "tomato";
// document.getElementById('saisi_nbre_brq').style.backgroundColor= "tomato";
// document.getElementById('saisir_prix_t_brq').style.backgroundColor= "tomato";

// __________peinture________
// ______determination de la surface du mur______
$("#lon_ , #lar_ , #haut_").keyup(function(){
    var L = Number($("#lon_").val());
    var l = Number($("#lar_").val());
    var h = Number($("#haut_").val());
    var p = ((L+l)*2);
    var surf = p*h;
    document.getElementById('surfac_a_peindr').innerHTML = surf;
});
// ________calcul de la quantité de peinture du mur______
$(".qt_peinture_mur").keyup(function(){
    var surfa = Number($("#surf_mur").val());
    var nbre_couch = Number($("#nbre_couche_mur").val());
    var rendement = Number($("#rendement_mur").val());
    var p_u = Number($("#pu_peinture_mur").val());
    var qt_peinture = ((surfa/rendement)*nbre_couch);
    var p_t = p_u*qt_peinture;
    document.getElementById('peinture_necessaire_mur').innerHTML = qt_peinture.toFixed(2);
    document.getElementById('prix_peinture_mur').innerHTML = p_t.toFixed(2);
});
// ________calcul de la quantité de peinture du plafond______
$(".qt_peinture_plafond").keyup(function(){
    var surfa = Number($("#surf_plafond").val());
    var nbre_couch = Number($("#nbre_couche_plafond").val());
    var rendement = Number($("#rendement_plafond").val());
    var p_u = Number($("#pu_plafond").val());
    var qt_peinture = ((surfa/rendement)*nbre_couch);
    var p_t = p_u*qt_peinture;
    document.getElementById('peinture_necessaire_plafond').innerHTML = qt_peinture.toFixed(2);
    document.getElementById('prix_peinture_plafond').innerHTML = p_t.toFixed(2);
});

