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
$("#ok_brq").click(function(){
    var surface_mur = Number($('#surface_mur').val());
	var long_brq = Number($('#long_brq').val()) + (0.02);
	var larg_brq = Number($('#larg_brq').val()) + (0.02);
	var prix_u_brq = Number($('#prix_u_brq').val());
    var surface_brq = long_brq*larg_brq;
    var nbre_brq = surface_mur / surface_brq;
    var rattrape_chute_brq = nbre_brq * 1.07;
    var prix_tt_brq = prix_u_brq * rattrape_chute_brq;
    // $("#nbre_brq").val(rattrape_chute_brq.textContent);
    document.getElementById('nbre_brq').innerHTML = rattrape_chute_brq.toFixed(2);
    document.getElementById('prix_t_brq').innerHTML = prix_tt_brq.toFixed(2) ;
});
// ______css nbre brique et prix total_____
document.getElementById('nbre_brq').style.backgroundColor= "tomato";
document.getElementById('prix_t_brq').style.backgroundColor= "tomato";
