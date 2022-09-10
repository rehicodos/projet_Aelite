// _______Ajoute de nouvele ligne a la table fouille______
var count = $(".itemRowww").length;
$(document).on('click', '#bouton_fouille', function() { 
    count++;
    var htmlRows = '';
    htmlRows += '<tr>';
    // htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
    htmlRows += '<td><input class="itemRowww" type="text"  id="designn_'+count+'"  autocomplete="off"></td>';          
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
    htmlRows += '<td><input class="ite" type="text"  id="design2_'+count+'"  autocomplete="off"></td>';          
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
    var nbre_brq_opt1 = ((surface_mur / surfax_brq_1) * (1.07));
    var nbre_brq_opt2 = ((surface_mur / surfax_brq_2) * (1.07));

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
    var nbr_brq = (parseFloat(surface_mur)/surfaxx_brq)*(1.07);
    var prix_u_brq = Number(document.getElementById("prix_u_brq2").value);
    var som_ = parseFloat(prix_u_brq) * nbr_brq;

    document.getElementById('saisi_nbre_brq').innerHTML = nbr_brq.toFixed(2);
    document.getElementById('saisir_prix_t_brq').innerHTML = som_.toFixed(2);
}

// ______css nbre brique et prix total_____
document.getElementById('nbre_brq').style.backgroundColor= "tomato";
document.getElementById('prix_t_brq').style.backgroundColor= "tomato";
document.getElementById('saisi_nbre_brq').style.backgroundColor= "tomato";
document.getElementById('saisir_prix_t_brq').style.backgroundColor= "tomato";

// _____________css tt , agglos et hourdis__________
document.getElementById('debour_ht_aggol_hourdi').style.backgroundColor= "tomato";

$(".qt_pu_agglos_hourdis_1").keyup(function(){
    var agglo_10_qt = Number($("#agglo_10_qt").val());
    var agglo_10_pu = Number($("#agglo_10_pu").val());
    $("#tt_agglo_10").val(agglo_10_pu * agglo_10_qt);

    var tt1 = Number($("#tt_agglo_10").val());
    var tt2 = Number($("#tt_agglo_15_creux").val());
    var tt3 = Number($("#tt_agglo_15_plein").val());
    var tt4 = Number($("#tt_agglo_20_creux").val());
    var tt5 = Number($("#tt_agglo_20_plein").val());
    var tt6 = Number($("#tt_hourdi_16").val());
    var tt7 = Number($("#tt_hourdi_20").val());
    var grand_tt = tt1+tt2+tt3+tt4+tt5+tt6+tt7;
    document.getElementById('debour_ht_aggol_hourdi').innerHTML = grand_tt;
});

$(".qt_pu_agglos_hourdis_2").keyup(function(){
    var agglo_15_creux_qt = Number($("#agglo_15_creux_qt").val());
    var agglo_15_creux_pu = Number($("#agglo_15_creux_pu").val());
    $("#tt_agglo_15_creux").val(agglo_15_creux_qt * agglo_15_creux_pu);

    var tt1 = Number($("#tt_agglo_10").val());
    var tt2 = Number($("#tt_agglo_15_creux").val());
    var tt3 = Number($("#tt_agglo_15_plein").val());
    var tt4 = Number($("#tt_agglo_20_creux").val());
    var tt5 = Number($("#tt_agglo_20_plein").val());
    var tt6 = Number($("#tt_hourdi_16").val());
    var tt7 = Number($("#tt_hourdi_20").val());
    var grand_tt = tt1+tt2+tt3+tt4+tt5+tt6+tt7;
    document.getElementById('debour_ht_aggol_hourdi').innerHTML = grand_tt;
});

$(".qt_pu_agglos_hourdis_3").keyup(function(){
    var agglo_15_plein_qt = Number($("#agglo_15_plein_qt").val());
    var agglo_15_plein_pu = Number($("#agglo_15_plein_pu").val());
    $("#tt_agglo_15_plein").val(agglo_15_plein_qt * agglo_15_plein_pu);

    var tt1 = Number($("#tt_agglo_10").val());
    var tt2 = Number($("#tt_agglo_15_creux").val());
    var tt3 = Number($("#tt_agglo_15_plein").val());
    var tt4 = Number($("#tt_agglo_20_creux").val());
    var tt5 = Number($("#tt_agglo_20_plein").val());
    var tt6 = Number($("#tt_hourdi_16").val());
    var tt7 = Number($("#tt_hourdi_20").val());
    var grand_tt = tt1+tt2+tt3+tt4+tt5+tt6+tt7;
    document.getElementById('debour_ht_aggol_hourdi').innerHTML = grand_tt;
});

$(".qt_pu_agglos_hourdis_4").keyup(function(){
    var agglo_20_creux_qt = Number($("#agglo_20_creux_qt").val());
    var agglo_20_creux_pu = Number($("#agglo_20_creux_pu").val());
    $("#tt_agglo_20_creux").val(agglo_20_creux_qt * agglo_20_creux_pu);

    var tt1 = Number($("#tt_agglo_10").val());
    var tt2 = Number($("#tt_agglo_15_creux").val());
    var tt3 = Number($("#tt_agglo_15_plein").val());
    var tt4 = Number($("#tt_agglo_20_creux").val());
    var tt5 = Number($("#tt_agglo_20_plein").val());
    var tt6 = Number($("#tt_hourdi_16").val());
    var tt7 = Number($("#tt_hourdi_20").val());
    var grand_tt = tt1+tt2+tt3+tt4+tt5+tt6+tt7;
    document.getElementById('debour_ht_aggol_hourdi').innerHTML = grand_tt;
});

$(".qt_pu_agglos_hourdis_5").keyup(function(){
    var agglo_20_plein_qt = Number($("#agglo_20_plein_qt").val());
    var agglo_20_plein_pu = Number($("#agglo_20_plein_pu").val());
    $("#tt_agglo_20_plein").val(agglo_20_plein_qt * agglo_20_plein_pu);

    var tt1 = Number($("#tt_agglo_10").val());
    var tt2 = Number($("#tt_agglo_15_creux").val());
    var tt3 = Number($("#tt_agglo_15_plein").val());
    var tt4 = Number($("#tt_agglo_20_creux").val());
    var tt5 = Number($("#tt_agglo_20_plein").val());
    var tt6 = Number($("#tt_hourdi_16").val());
    var tt7 = Number($("#tt_hourdi_20").val());
    var grand_tt = tt1+tt2+tt3+tt4+tt5+tt6+tt7;
    document.getElementById('debour_ht_aggol_hourdi').innerHTML = grand_tt;
});

$(".qt_pu_agglos_hourdis_6").keyup(function(){
    var hourdi_16_qt = Number($("#hourdis_16_qt").val());
    var hourdi_16_pu = Number($("#hourdis_16_pu").val());
    $("#tt_hourdi_16").val(hourdi_16_qt * hourdi_16_pu);

    var tt1 = Number($("#tt_agglo_10").val());
    var tt2 = Number($("#tt_agglo_15_creux").val());
    var tt3 = Number($("#tt_agglo_15_plein").val());
    var tt4 = Number($("#tt_agglo_20_creux").val());
    var tt5 = Number($("#tt_agglo_20_plein").val());
    var tt6 = Number($("#tt_hourdi_16").val());
    var tt7 = Number($("#tt_hourdi_20").val());
    var grand_tt = tt1+tt2+tt3+tt4+tt5+tt6+tt7;
    document.getElementById('debour_ht_aggol_hourdi').innerHTML = grand_tt;
});

$(".qt_pu_agglos_hourdis_7").keyup(function(){
    var hourdi_20_qt = Number($("#hourdis_20_qt").val());
    var hourdi_20_pu = Number($("#hourdis_20_pu").val());
    $("#tt_hourdi_20").val(hourdi_20_qt * hourdi_20_pu);

    var tt1 = Number($("#tt_agglo_10").val());
    var tt2 = Number($("#tt_agglo_15_creux").val());
    var tt3 = Number($("#tt_agglo_15_plein").val());
    var tt4 = Number($("#tt_agglo_20_creux").val());
    var tt5 = Number($("#tt_agglo_20_plein").val());
    var tt6 = Number($("#tt_hourdi_16").val());
    var tt7 = Number($("#tt_hourdi_20").val());
    var grand_tt = tt1+tt2+tt3+tt4+tt5+tt6+tt7;
    document.getElementById('debour_ht_aggol_hourdi').innerHTML = grand_tt;
});

