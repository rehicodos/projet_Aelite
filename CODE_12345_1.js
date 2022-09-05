// affichage des informations du client dans les champs input
	var tabl = document.getElementById("tabl_biblio"), rwIndex;
	for(var i = 0 ; i < tabl.rows.length ; i++){
		tabl.rows[i].onclick = function(){
			rwIndex = this.rowIndex;
			// alert(rwIndex);
			document.getElementById("nom").value = this.cells[0].innerHTML;
			document.getElementById("tel").value = this.cells[1].innerHTML;
			document.getElementById("fax").value = this.cells[2].innerHTML;
			document.getElementById("adress").value = this.cells[3].innerHTML;
			document.getElementById("email").value = this.cells[4].innerHTML;
		};
	}


$(document).ready(function(){
	// _____partie saisir devis_____
	$(document).on('click', '#checkAll', function() {          	
		$(".itemRow").prop("checked", this.checked);
	});	
	$(document).on('click', '.itemRow', function() {  	
		if ($('.itemRow:checked').length == $('.itemRow').length) {
			$('#checkAll').prop('checked', true);
		} else {
			$('#checkAll').prop('checked', false);
		}
	}); 
    // _____partie calcul devis_____
	$(document).on('click', '#checkAl', function() {          	
		$(".itemRoww").prop("checked", this.checked);
	});	
	$(document).on('click', '.itemRoww', function() {  	
		if ($('.itemRoww:checked').length == $('.itemRoww').length) {
			$('#checkAl').prop('checked', true);
		} else {
			$('#checkAl').prop('checked', false);
		}
	}); 
	// _______Ajoute d'un grand titre______
	var count = $(".itemRow").length;
	$(document).on('click', '.un_titre', function() { 
		count++;
		var htmlRows = '';
		htmlRows += '<tr>';   
		htmlRows += '<td><input class="itemRow" type="checkbox"></td>'; 		
		htmlRows += '<td id="gd_titre" colspan="6"><input type="text" name="grand_ttitre[]" id="grand_ttitre'+count+'" autocomplete="off"></td>';		 
		// htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
		htmlRows += '</tr>';
		$('#ajout_lign').append(htmlRows);
	});
	// _______Ajoute d'un grand titre partie calcul______
	var count = $(".itemRoww").length;
	$(document).on('click', '.un2_titre', function() { 
		count++;
		var htmlRows = '';
		htmlRows += '<tr>';   
		htmlRows += '<td><input class="itemRoww" type="checkbox"></td>'; 		
		htmlRows += '<td colspan="8"><input class="titre_defo_calcul" type="text" name="grand_ttitre[]"  autocomplete="off"></td>';		 
		// htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
		htmlRows += '</tr>';
		$('#calcul_des_details_du_devis').append(htmlRows);
	});
	// _______Ajoute sous-total______
	var count = $(".itemRow").length;
	$(document).on('click', '.sous_total', function() { 
		count++;
		var htmlRows = '';
		htmlRows += '<tr>'; 
		htmlRows += '<td><input class="itemRow" type="checkbox"></td>';   		
		htmlRows += '<td colspan="4"><h4 class="s_t_calcul"><strong>Sous-total</strong></h4></td>';	
		htmlRows += '<td><input type="number" name="sous_total[]" id="sous_total'+count+'" class="PRIX_T" autocomplete="off"></td>';	 
		// htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
		htmlRows += '</tr>';
		$('#ajout_lign').append(htmlRows);
	});
	// _______Ajoute de nouvele ligne______
	var count = $(".itemRow").length;
	$(document).on('click', '.nv_lign', function() { 
		count++;
		var htmlRows = '';
		htmlRows += '<tr>';
		htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
		htmlRows += '<td><input type="text" name="designation[]" id="productCode_'+count+'" class="DESI" autocomplete="off"></td>';          
		htmlRows += '<td><input type="text" name="unite[]" id="productCode_'+count+'" class="UNIT" autocomplete="off"></td>';          
		htmlRows += '<td><input type="number" name="quantite_[]" id="quantity_'+count+'" class="QUANT" autocomplete="off"></td>';	
		htmlRows += '<td><input type="number" name="prix_u[]" id="price_'+count+'" class="PRIX_U" autocomplete="off"></td>';   		
		htmlRows += '<td><input type="number" name="prix_t[]" id="total_'+count+'" class="PRIX_T" autocomplete="off"></td>';		 
		// htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
		htmlRows += '</tr>';
		$('#ajout_lign').append(htmlRows);
	});

	// _______Ajoute de nouvele ligne partie calcul______
	var count = $(".itemRoww").length;
	$(document).on('click', '.nvlle_lign', function() { 
		count++;
		var htmlRows = '';
		htmlRows += '<tr>';
		htmlRows += '<td><input class="itemRoww" type="checkbox"></td>';          
		htmlRows += '<td><input class="titre_defo_calcull" type="text" name="designation[]" id="productCode_'+count+'" autocomplete="off"></td>';          
		htmlRows += '<td><input class="lign_c" type="text" name="unite[]" id="productCode_'+count+'"  autocomplete="off"></td>';          
		htmlRows += '<td><input class="lign_c" type="number" name="quantite_[]" id="quantity__'+count+'"  autocomplete="off"></td>';	
		htmlRows += '<td><input class="lign_c" type="number" name="prix_u[]" id="ciment_'+count+'" " autocomplete="off"></td>';   		
		htmlRows += '<td><input class="lign_c" type="number" name="prix_u[]" id="sable_'+count+'"  autocomplete="off"></td>';   		
		htmlRows += '<td><input class="lign_c" type="number" name="prix_u[]" id="gravier_'+count+'"  autocomplete="off"></td>';   		
		htmlRows += '<td><input class="lign_c" type="number" name="prix_u[]" id="coffrage_'+count+'" autocomplete="off"></td>';   		
		htmlRows += '<td><input class="lign_c" type="number" name="prix_u[]" id="acier_'+count+'"  autocomplete="off"></td>';   		
		// htmlRows += '<td><input type="number" name="prix_t[]" id="total_'+count+'" class="PRIX_T" autocomplete="off"></td>';		 
		// htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
		htmlRows += '</tr>';
		$('#calcul_des_details_du_devis').append(htmlRows);
	});
	
	
	$(document).ready(function(){
		// var countt = $(".itemRow").length;
		var totalAmount = 0;
		$("[id^='price_']").keyup(function() {
			var id = $(this).attr('id');
			id = id.replace("price_",'');
			var price = $('#price_'+id).val();
			var quantity  = $('#quantity_'+id).val();
			if(!quantity) {
				quantity = 1;
			}
			var total = price*quantity;
			$('#total_'+id).val(parseFloat(total));
			totalAmount += total;
						
		});
		     
	});
	
	$(document).ready(function(){
		// var countt = $(".itemRow").length;
		$(".lign_c").keyup(function(){

				// countt++;
				var total = 0;
				var x = Number($("#qt").val());
				var y = Number($("#pa").val());
				total = x*y;
				$("#pv").val(total);
			});      
	});
	
    //  suppression____
	$(document).on('click', '.sup_lign', function(){
		$(".itemRow:checked").each(function() {
			$(this).closest('tr').remove();
		});
		$('#checkAll').prop('checked', false);
		calculateTotal();
	});	

    //  suppression partie calcul____
	$(document).on('click', '.sup2_lign', function(){
		$(".itemRoww:checked").each(function() {
			$(this).closest('tr').remove();
		});
		$('#checkAl').prop('checked', false);
		calculateTotal();
	});	

	$(document).on('blur', "[id^=quantity_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', ".genne", function(){
		debut_calcul_ht();
	});	
	$(document).on('blur', "[id^=price_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', "#taxRate", function(){		
		calculateTotal();
	});	
	$(document).on('blur', "#amountPaid", function(){
		var amountPaid = $(this).val();
		var totalAftertax = $('#totalAftertax').val();	
		if(amountPaid && totalAftertax) {
			totalAftertax = totalAftertax-amountPaid;			
			$('#amountDue').val(totalAftertax);
		} else {
			$('#amountDue').val(totalAftertax);
		}	
	});	
	$(document).on('click', '.deleteInvoice', function(){
		var id = $(this).attr("id");
		if(confirm("Are you sure you want to remove this?")){
			$.ajax({
				url:"action.php",
				method:"POST",
				dataType: "json",
				data:{id:id, action:'delete_invoice'},				
				success:function(response) {
					if(response.status == 1) {
						$('#'+id).closest("tr").remove();
					}
				}
			});
		} else {
			return false;
		}
	});
});
	
function calculateTotal(){
	 
	$("[id^='price_']").each(function() {
		var id = $(this).attr('id');
		id = id.replace("price_",'');
		var price = $('#price_'+id).val();
		var quantity  = $('#quantity_'+id).val();
		if(!quantity) {
			quantity = 1;
		}
		var total = price*quantity;
		$('#total_'+id).val(parseFloat(total));
		// totalAmount += total;			
	});
    
	// ____deuxieme feuille_______________________
	// ____CELULLE DES QUANTITES______
	var tt__1 = 0;
	var tt__2 = 0;
	var tt__3 = 0;
	var tail = $("[id^='quantity__']").length;
	for(var i = 1; i < tail + 1 ; i++){
		var cimentt = Number($('#ciment_'+ i).val());
		var sablee = Number($('#sable_'+ i).val());
		var gravierr = Number($('#gravier_'+ i).val());
		tt__1 += cimentt;	
		tt__2 += sablee;	
		tt__3 += gravierr;	
	}
	
	$('#tt_ciment').val(parseFloat((tt__1).toFixed(2)));
	$('#tt_sable').val(parseFloat((tt__2).toFixed(2)));
	$('#tt_gravier').val(parseFloat((tt__3).toFixed(2)));

	$('#cimen').val(parseFloat(tt__1.toFixed(2)));
	$('#sabl').val(parseFloat((tt__2 / 12).toFixed(2)));
	$('#gravie').val(parseFloat(tt__3.toFixed(2)));
	$('#t_g').val(parseFloat((tt__3 / 30).toFixed(2)));
    
	// _______POUR LE CALCUL DE PRIX TOTAL_____
	var ttt_1 = parseFloat($("#cimen").val());
	var ttt_2 = parseFloat($("#sabl").val());
	var ttt_3 = parseFloat($("#gravie").val());
	var ttt_4 = parseFloat($("#t_g").val());
	
	var ttT_1 = parseFloat($("#tt1").val());
	var ttT_2 = parseFloat($("#tt2").val());
	var ttT_3 = parseFloat($("#tt3").val());
	var ttT_4 = parseFloat($("#tt4").val());

	$('#pt_ciment').val(ttt_1.toFixed(2) * ttT_1.toFixed(2));
	$('#pt_sable').val(ttt_2.toFixed(2) * ttT_2.toFixed(2));
	$('#pt_gravier').val(ttt_3.toFixed(2) * ttT_3.toFixed(2));
	$('#pt_coffrage').val(ttt_4.toFixed(2) * ttT_4.toFixed(2));

	// _______debour_ht_____
	var ht__1 = ttt_1.toFixed(1) * ttT_1.toFixed(1);
	var ht__2 = ttt_2.toFixed(1) * ttT_2.toFixed(1);
	var ht__3 = ttt_3.toFixed(1) * ttT_3.toFixed(1);
	var ht__4 = ttt_4.toFixed(1) * ttT_4.toFixed(1);
	
	$("#debour_ht").val(ht__1+ht__2+ht__3+ht__4);
	// ______calcul de marge et coefficiant____
	$("#montant_travo").keyup(function(){
		var ht__ = $("#debour_ht").val() ;
		var montant_t = $("#montant_travo").val();
		$("#marge_").val(montant_t - ht__);
		$("#coeff").val((montant_t / ht__).toFixed(1));
	});
	
	// var taxRate = $("#tva").val();
	var subTotal = $('#ht_').val();	
	if(subTotal) {
		$(document).each(function(){
			var x = parseFloat($("#ht_").val());
			// var y = Number($("#tva").val());
			var tt_tva = (18/100)*x;
			var TTC = x + tt_tva;	
			$("#tva").val(tt_tva);
			$('#ttc_').val(TTC);
		});
		
	}
}
function debut_calcul_ht(){
	var gener1 = $("#gen_pt").val();
	var gener2 = $("#gen1_pt").val();
	$("#debour_ht").val(parseFloat(gener1)+parseFloat(gener2));
}
// _________feuille de calcul devis__________
$(document).ready(function(){
	$("#m2_2, #m2_1").keyup(function(){
		var m2_1 = $("#m2_1").val();
		var m2_2 = $("#m2_2").val();
		var result = m2_1*m2_2 ;
		$("#result_m2").val(result);
	});
	$("#m3_1, #m3_2, #m3_3").keyup(function(){
		var m3_1 = $("#m3_1").val();
		var m3_2 = $("#m3_2").val();
		var m3_3 = $("#m3_3").val();
		var resultT = m3_1*m3_2*m3_3 ;
		$("#result_m3").val(resultT);
	});
	// _____generalité_______
	$(".genne").keyup(function(){
		var gene_qt = Number($("#gene_qt").val());
		var gene_pu = Number($("#gene_pu").val());
		var gene1_qt = Number($("#gene1_qt").val());
		var gene1_pu = Number($("#gene1_pu").val());
		var gene1 = gene_qt*gene_pu;
		var gene2 = gene1_qt*gene1_pu;

		$("#gene_pt").val(gene1);
		$("#gene1_pt").val(gene2);
		$("#gen_qt").val(gene_qt);
		$("#gen_pu").val(gene_pu);
		$("#gen1_qt").val(gene1_qt);
		$("#gen1_pu").val(gene1_pu);
		$("#gen_pt").val(gene1);
		$("#gen1_pt").val(gene2);
		$("#tt_generalite").val(gene1 + gene2);
	});

});
// $(document).ready(function(){
// 	function produit() {
// 		var id = this.getAttribute("id");
// 		var numero = id.substring(id.length - 1, id.length);
// 		console.log(numero);
// 		var quantite = document.getElementById("quantity__"+numero).value;
// 		document.getElementById("ciment_"+numero).value = quantite*0.15;
// 		document.getElementById("sable_"+numero).value = quantite*0.5;
// 		document.getElementById("gravier_"+numero).value = quantite*0.5;
// 		document.getElementById("coffrage_"+numero).value = quantite*0.5;
// 		document.getElementById("acier_"+numero).value = quantite*0.5;
// 	}
// 	$("[id^='quantity__']").keyup(function(){
// 		var tt_ch_saisir = document.getElementsByClassName("lign_c");
// 		for(var i = 0 ; i < tt_ch_saisir.length ; i++){
// 			tt_ch_saisir[i].addEventListener("change", produit, false);
// 			tt_ch_saisir[i].addEventListener("change", produit, false);
// 			tt_ch_saisir[i].addEventListener("change", produit, false);
// 			tt_ch_saisir[i].addEventListener("change", produit, false);
// 			tt_ch_saisir[i].addEventListener("change", produit, false);
// 	    }
// 	});
		 
// });

// ________FEUILLE DE CALCUL________________
$("#quantity__1").keyup(function(){
	var QT1 = $('#quantity__1').val();
	$('#ciment_1').val(parseFloat(QT1 * 0.15).toFixed(2));
	$('#sable_1').val(parseFloat(QT1 * 0.4).toFixed(2));
	$('#gravier_1').val(parseFloat(QT1 * 1.35).toFixed(2));
});
$("#quantity__2").keyup(function(){
	var QT2 = $('#quantity__2').val();
	$('#ciment_2').val(parseFloat(QT2 * 0.20).toFixed(2));
	$('#sable_2').val(parseFloat(QT2 * 0.4).toFixed(2));
	$('#gravier_2').val(parseFloat(QT2 * 1.35).toFixed(2));
});
$("#quantity__3").keyup(function(){
	var QT3 = $('#quantity__3').val();
	$('#ciment_3').val(parseFloat(QT3 * 0.25).toFixed(2));
	$('#sable_3').val(parseFloat(QT3 * 0.4).toFixed(2));
	$('#gravier_3').val(parseFloat(QT3 * 1.35).toFixed(2));
});
$("#quantity__4").keyup(function(){
	var QT4 = $('#quantity__4').val();
	$('#ciment_4').val(parseFloat(QT4 * 0.35).toFixed(2));
	$('#sable_4').val(parseFloat(QT4 * 0.4).toFixed(2));
	$('#gravier_4').val(parseFloat(QT4 * 1.35).toFixed(2));
});
$("#quantity__5").keyup(function(){
	var QT5 = $('#quantity__5').val();
	$('#ciment_5').val(parseFloat(QT5 * 0.4).toFixed(2));
	$('#sable_5').val(parseFloat(QT5 * 0.4).toFixed(2));
	$('#gravier_5').val(parseFloat(QT5 * 1.35).toFixed(2));
});
$("#quantity__6").keyup(function(){
	var QT6 = $('#quantity__6').val();
	$('#ciment_6').val(parseFloat(QT6 * 0.45).toFixed(2));
	$('#sable_6').val(parseFloat(QT6 * 0.4).toFixed(2));
	$('#gravier_6').val(parseFloat(QT6 * 1.35).toFixed(2));
});

// $("[id^='quantity__']").keyup(function() {
			
// });

$("[id^='coffrage_']").keyup(function(){
	var coff = 0;
	var tail = $("[id^='quantity__']").length;
	for(var i = 1; i < tail + 1 ; i++){
		var cofff = Number($('#coffrage_'+ i).val());
		coff += cofff;		
	}
	$('#tt_coffrage').val(parseFloat((coff).toFixed(3)));

	var coffrag = Number($("#tt_coffrage").val());
	$('#coff').val(parseFloat(coffrag.toFixed(3)));

	var tt_6 = parseFloat($("#tt6").val());
	var ttt_6 = parseFloat($("#coff").val());
	var tot = tt_6 * ttt_6;
	if(tot){
		$('#pt_cof_2').val(tot.toFixed(1));
	}
	var g1 = Number($('#pt_ciment').val());
	var g2 = Number($('#pt_sable').val());
	var g3 = Number($('#pt_gravier').val());
	var g4 = Number($('#pt_coffrage').val());
	var g5 = Number($('#pt_cof_2').val());
	var g6 = Number($('#pt_acier').val());
	var tt_g = g1 + g2 + g3 + g4 + g5 + g6;
	$("#debour_ht").val(tt_g);

});

$("[id^='acier_']").keyup(function(){
	var aci = 0;
	var tail = $("[id^='quantity__']").length;
	for(var i = 1; i < tail + 1 ; i++){
		var acii__ = Number($('#acier_'+ i).val());
		aci += acii__;		
	}
	$('#tt_acier').val(parseFloat((aci).toFixed(3)));

	var aciierr = Number($("#tt_acier").val());
	$('#aci____er').val(parseFloat((aciierr / 100).toFixed(3)));

	var tt_5 = parseFloat($("#tt5").val());
	var ttt_5 = parseFloat($("#aci____er").val());
	var tot2 = tt_5 * ttt_5;
	if(tot2){
		$('#pt_acier').val(tot2.toFixed(1));
	}
	var g1 = Number($('#pt_ciment').val());
	var g2 = Number($('#pt_sable').val());
	var g3 = Number($('#pt_gravier').val());
	var g4 = Number($('#pt_coffrage').val());
	var g5 = Number($('#pt_cof_2').val());
	var g6 = Number($('#pt_acier').val());
	var tt_g = g1 + g2 + g3 + g4 + g5 + g6;
	$("#debour_ht").val(parseFloat(tt_g));
});



 