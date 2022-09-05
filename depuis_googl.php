<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une ligne à un tableau</title>
    <script src="jquery-3.6.0.js"></script>
    <script>
        function ajout_bt(){
            var n_l = "<tr>";
            n_l += "<td><input name='desi[]' type='text' placeholder=' Saisir design ici..'</td>";
            n_l += "<td><input name='un[]' type='text' placeholder=' Saisir unité ici..'</td>";
            n_l += "<td><input name='qt[]' type='text' placeholder=' Saisir quantité ici..'</td>";
            n_l += "<td><input name='pa[]' type='text' placeholder=' Saisir prix achat ici..'</td>";
            n_l += "<td><input name='pv[]' type='text' placeholder=' Saisir prix vent ici..'</td>";
            n_l += "</tr>";


            document.getElementById("tbodyy").insertRow().innerHTML = n_l;


        }
        function produitt(){
            // var id = this.getAttribute("id");
            // console.log(id);
            var quantité = document.getElementById("un").value;
            var pri_u = document.getElementById("deux").value;
            var pri_t = document.getElementById("total");
            pri_t.value = parseInt(quantité)*parseInt(pri_u);
        }
        
        // var element = document.getElementsByClassName("tout");
        // for(var i=0; i<element.length; i++){
        //     element[i].addEventListener("change", produit, false);
        //     element[i].addEventListener("change", produit, false);
        // }
        var quantité = document.getElementById("un");
        var pri_u = document.getElementById("deux");
        var pri_t = document.getElementById("total");
        quantité.addEventListener("change", produitt, false);
        pri_u.addEventListener("change", produitt, false);
        
    </script>
</head>
<style>
    table {
        border: 2px black solid;
        border-radius: 5px;
    }
    table td {
        border: 1px black solid ;
    }
    .tb{
        width: 100%;
        /* text-align: center; */
    }
</style>
<body>
    <script>
        $(document).ready(function(){
            $("#un, #deux").keyup(function(){
                var total = 0;
                var x = Number($("#un").val());
                var y = Number($("#deux").val());
                total = x*y;
                $("#total").val(total);
            });
        });
    </script>
    <script>
        function mult() {
            var quantité = document.getElementById("un").value;
            var pri_u = document.getElementById("deux").value;
            var pri_t = document.getElementById("total");
            pri_t.value = parseInt(quantité)*parseInt(pri_u);
            
        }
    </script>
    
    <script>
        // function produitt(){
            // var id = this.getAttribute("id");
            // console.log(id);
        //     var quantité = document.getElementById("un").value;
        //     var pri_u = document.getElementById("deux").value;
        //     var pri_t = document.getElementById("total");
        //     pri_t.value = quantité*pri_u;
        // }
        
        // var element = document.getElementsByClassName("tout");
        // for(var i=0; i<element.length; i++){
        //     element[i].addEventListener("change", produit, false);
        //     element[i].addEventListener("change", produit, false);
        // }
        //     var quantité = document.getElementById("un");
        //     var pri_u = document.getElementById("deux");
        //     var pri_t = document.getElementById("total");
        //     quantité.addEventListener("change", produitt, false);
        //     pri_u.addEventListener("change", produitt, false);
        
        
    </script>
    <table>
        <head>
            <tr>
                <!-- <th>Designation</th> -->
                <!-- <th>Unité</th> -->
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Prix total</th>
            </tr>
        </head>
        <tbody id="tbodyy">
            <tr>
                <!-- <td><input name="des" type="text"></td> -->
                <!-- <td><input name="uni" type="text"></td> -->
                <td><input id="un" name="un" type="text"></td>
                <td><input id="deux" name="deux" type="text"></td>
                <td><input id="total" name="tota" type="text" onkeyup="mut();"></td>
            </tr>
            

        </tbody>
        <footer>
            <tr>
                <td colspan="5"><button class="tb" type="button" onclick="mult();">Nouvelle ligne</button></td>
            </tr>
        </footer>
    </table>
</body>
</html>