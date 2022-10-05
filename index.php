<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="principp.css">
    <title>Principal -Accueil</title>
</head>
<body>
    <div class="ent">
        <div class="bann">
            <h1 id="nom_logiciel">Fast-Devis</h1>
        </div>
        <div class="nav_bar"></div>
        <div class="bar"></div>
    </div>
    <div id="conteneur_page_principale">
        <div class="conteneur_icone">
            <div class="cont1">
                <div class="repertw">
                    <a href="#"><img src="images/rep.jpg" width="100%" height="90%"></a>
                    <p>Répertoire</p>
                </div>
                <div class="repertw">
                    <a href="client.php"><img src="images/client2.jpg" width="100%" height="90%"></a>
                    <p>Clients</p>
                </div>
                <div class="repertw">
                    <a href="biblio.php"><img src="images/biblio2.jpg" width="100%" height="90%"></a>
                    <p>Bibliothèque</p>
                </div>
                <div class="repertw">
                    <a href="archive_nouvo_devis.php"><img id="" src="images/devis2.jpg" width="100%" height="90%"></a>
                    <p>Devis</p>
                </div>
            </div>
            <div class="cont2">
                <div class="repertw">
                    <a href="facture.php"><img src="images/fact5.jpg" width="100%" height="90%"></a>
                    <p>Factures</p>
                </div>
                <div class="repertw">
                    <a href="#"><img src="images/av.jpg" width="100%" height="90%"></a>
                    <p>Avoirs</p>
                </div>
                <div class="repertw">
                    <a href="#"><img src="images/situation.jpg" width="100%" height="90%"></a>
                    <p>Situation</p>
                </div>
                <div class="repertw">
                    <a href="#"><img src="images/stock2.jpg" width="100%" height="90%"></a>
                    <p>Stock</p>
                </div>
            </div>
        </div>
        <div class="cont_bt">
            <ul>
                <li><a href="http://www.aeliteco-ci.com/"><button>Site Web</button></a></li>
                <li><a href="#"><button>Info</button></a></li>
                <li><a href="#"><button>Aide</button></a></li>
                <li><a href="#"><button>Autres</button></a></li>
            </ul>
        </div>
    </div>
    
    <!-- ______inclusion des pages externe____ -->
    
    

    <script>
        //  ____affichage/appel des pages_______
        $(document).ready(function(){
            // ____affichage/appel de la page devis.php(page_devis)_______
            $("#image_devis_page_principale").click(function(){
                $("#page_devis").show();
                $(".ent").hide();
                $("#conteneur_page_principale").hide();
            });
            
        });
    </script>
</body>
</html>