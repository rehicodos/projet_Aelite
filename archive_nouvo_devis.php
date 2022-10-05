<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="archive_nouvo_devis.css">
    <title>Archive ou créer nouveau devis </title>
</head>
<body>
    <h2>Archive Devis</h2>
    <div id="bt_nouvo_devis">
        <a href="index.php"><button id="bt_retour" type="button"><-<-<- Retour</button></a>
        <a href="devis.php"><button id="new_devis" type="button">Créer nouveau Devis</button></a>
    </div>
    <div id="cont_archive">
        <div id="cont_tableau_archive">
            <table>
                <tr>
                    <th>N°_Devis</th>
                    <th>Date Creation</th>
                    <th>Client</th>
                    <th>Montant Total</th>
                    <th>PDF</th>
                    <th>Supprimer</th>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>