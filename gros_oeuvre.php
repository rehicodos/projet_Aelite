<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <link rel="stylesheet" href="gros_oeuvre.css">
    <title>Gros Oeuvre</title>
</head>
<body>
    <h2>Travaux : Gros Oeuvre </h2>
    <div id="tb_retou"><button id="bt_retour_gros_oeuvrre" type="button"><strong><-<-<- Retour</strong></button></div>
    <div id="conteneur_gros_oeuvre">
        <div id="conteneur_bt_img">
            <div class="conteneur_bt_img_1">

                <div class="cont_travaux_prelim">
                    <img src="images/pt.png" alt="" width="100%" height="90%">
                    <button id="bt_affich_travaux_prelimiaire">T.Préliminaires</button>
                </div>
                <div class="cont_travaux_prelim">
                    <img src="images/terrassement.jpg" alt="" width="100%" height="90%">
                    <button>Terrassement</button>
                </div>
                <div class="cont_travaux_prelim">
                    <img src="images/fondation_2.jpg" alt="" width="100%" height="90%">
                    <button id="text_affich_fondadtion">Fondation</button>
                </div>
                <div class="cont_travaux_prelim">
                    <img src="images/assainissement.jpg" alt="" width="100%" height="90%">
                    <button>Assainissement</button>
                </div>
                <div class="cont_travaux_prelim">
                    <img src="images/soubassement.jpg" alt="" width="100%" height="90%">
                    <button>Soubassement</button>
                </div>
            </div>
            <hr/>
            <div class="conteneur_bt_img_2">

                <div class="cont_travaux_prelim">
                    <img src="images/plancher.jpg" alt="" width="100%" height="90%">
                    <button>Plancher</button>
                </div>
                <div class="cont_travaux_prelim">
                    <img src="images/elevation.jpg" alt="" width="100%" height="90%">
                    <button>Elevation</button>
                </div>
                <div class="cont_travaux_prelim">
                    <img src="images/charpente.jpg" alt="" width="100%" height="90%">
                    <button>Charpente</button>
                </div>
                <div class="cont_travaux_prelim">
                    <img src="images/toiture.jpg" alt="" width="100%" height="90%">
                    <button>Toiture</button>
                </div>
                <div class="cont_travaux_prelim">
                    <img src="images/menuiserie_3.jpg" alt="" width="100%" height="90%">
                    <button>Menuiserie</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ______inclusion des pages externe____ -->
    <div id="t_preliminaires"><?php include('travaux_preliminaire.php'); ?></div>
    <div id="terrassementt"><?php include('terrassement.php'); ?></div>
    <div id="fondationn"><?php include('fondation.php'); ?></div>

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