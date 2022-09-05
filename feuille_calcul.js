// _______Ajoute de nouvele ligne a la table fouille______
var count = $(".itemRow").length;
$(document).on('click', '#bouton_fouille', function() { 
    count++;
    var htmlRows = '';
    htmlRows += '<tr>';
    // htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
    htmlRows += '<td><input class="itemRow" type="text"  id="design_'+count+'"  autocomplete="off"></td>';          
    htmlRows += '<td><input type="text" id="unit_'+count+'"  autocomplete="off"></td>';          
    htmlRows += '<td><input type="number" id="long_'+count+'"  autocomplete="off"></td>';	
    htmlRows += '<td><input type="number" id="larg_'+count+'"  autocomplete="off"></td>';   		
    htmlRows += '<td><input type="number" id="hauteur_'+count+'"  autocomplete="off"></td>';   		
    htmlRows += '<td><input type="number" id="total_'+count+'"  autocomplete="off"></td>';		 
    // htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
    htmlRows += '</tr>';
    $('#tab_fouille').append(htmlRows);
});
// _______Ajoute de nouvele ligne a la table remblais______
var count = $(".itemRow").length;
$(document).on('click', '#bouton_remblais', function() { 
    count++;
    var htmlRows = '';
    htmlRows += '<tr>';
    // htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
    htmlRows += '<td><input class="itemRow" type="text"  id="design_'+count+'"  autocomplete="off"></td>';          
    htmlRows += '<td><input type="text" id="unit_'+count+'"  autocomplete="off"></td>';          
    htmlRows += '<td><input type="number" id="long_'+count+'"  autocomplete="off"></td>';	
    htmlRows += '<td><input type="number" id="larg_'+count+'"  autocomplete="off"></td>';   		
    htmlRows += '<td><input type="number" id="hauteur_'+count+'"  autocomplete="off"></td>';   		
    htmlRows += '<td><input type="number" id="total_'+count+'"  autocomplete="off"></td>';		 
    // htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
    htmlRows += '</tr>';
    $('#tab_remblais').append(htmlRows);
});