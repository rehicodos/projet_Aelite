<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <link rel="stylesheet" href="gros_oeuvre_0_.css">
    <title>Gros Oeuvre</title>
</head>
<body>
    <h2>Travaux : Gros Oeuvre </h2>
    <div id="tb_retou"><button id="bt_retour_gros_oeuvre" type="button"><strong><-<-<- Retour</strong></button></div>
    <div class="conteneur">
        <div class="div_1">
            <a href="travaux_prelimiaire.php"><img src="images/pt.png" alt=""></a>
            <p>Travaux Préliminaires</p>
        </div>
        <div class="div_1">
            <a href="terrassement.php"><img src="images/terrassement.jpg" alt=""></a>
            <p>Terrassement</p>
        </div>
    </div>
    <div class="conteneur">
        <div class="div_1">
            <img id="image_affich_fondadtion" src="images/fondation_2.jpg" alt="">
            <p id="text_affich_fondadtion">Fondation</p>
        </div>
        <div class="div_1">
            <img src="images/assainissement.jpg" alt="">
            <p>Assainissement</p>
        </div>
    </div>
    <div class="conteneur">
        <div class="div_1">
            <img src="images/soubassement.jpg" alt="">
            <p>Soubassement</p>
        </div>
        <div class="div_1">
            <img src="images/plancher.jpg" alt="">
            <p>Plancher</p>
        </div>
    </div>
    <div class="conteneur">
        <div class="div_1">
            <img src="images/elevation.jpg" alt="">
            <p>Elevation</p>
        </div>
        <div class="div_1">
            <img src="images/charpente.jpg" alt="">
            <p>Charpente</p>
        </div>
    </div>
    <div class="conteneur">
        <div class="div_1">
            <img src="images/toiture.jpg" alt="">
            <p>Toiture</p>
        </div>
        <div class="div_1">
            <img src="images/menuiserie_3.jpg" alt="">
            <p>Menuiserie exterieurs</p>
        </div>
    </div>
    <div id="travaux_preliminaire"><?php include('travaux_prelimiaire.php'); ?></div>

    <script>
        //  ____affichage/appel a la page gros oeuvre_______
        $(document).ready(function(){
            // ____affichage/appel de la page  gros_oeuvre.php_______
            $("#image_affich_T").click(function(){
                $("#gros_oeuvre").hide();
                $("#fondaton").show();
                $(".doc_devis").hide();
                $("#text_resul").hide();
                $("#conteneur_resultat").hide();
                $(".travaux_devis").hide();
                $("#les_bt_pdf_excel").hide();
            });
        });
    </script>
</body>
</html>