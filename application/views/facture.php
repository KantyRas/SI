<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="<?php echo base_url(); ?>assets/css/stylefacture.css" rel="stylesheet">
    
</head>
<body>
    <section>
        <div id="logo">
            <p><img src="<?php echo base_url(); ?>assets/img/logo.png"> </p>
        </div>
        <hr>
        <div id="detailsociete">
            <p>Nom entreprise</p>
            <p>Adresse</p>
            <p>Code postal</p>
            <p>Ville</p>
            <p>Pays</p>
        </div>
        <div id="detailfacture">
            <p>facture numero: </p>
            <p>Date: 20/02/2004</p>
        </div>
        <div id="detailclient">
            <p>Nom client</p>
            <p>Adresse</p>
            <p>Code postal</p>
            <p>Ville</p>
            <p>Pays</p>
        </div>
        <div id="objet">
            <h4>objet: vente de riz</h4>
            <h4>reference: </h4>
        </div>
        <table>
        <thead>
        <tr>
            <th>Description</th>
            <th>Quantite</th>
            <th>P.U</th>
            <th>montant</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Produit 1</td>
            <td>2</td>
            <td>$10.00</td>
            <td>$20.00</td>
    
        </tr>
        <tr>
            <td>Produit 2</td>
            <td>1</td>
            <td>$15.00</td>
            <td>$15.00</td>
        </tr>
        <tr>
            <td colspan="3" class="total">TVA:</td>
            <td class="total">$35.00</td>
        </tr>
        <tr>
            <td colspan="3" class="total">HT:</td>
            <td class="total">$35.00</td>
        </tr>
        <tr>
            <td colspan="3" class="total">Total TTC:</td>
            <td class="total">$100.00</td>
        </tr>
        </tbody>
    </table>
    <div>
        <p>arrete a la somme de: </p>
    </div>
    <hr>
    <div id="sonia1">
        <p>Le client</p>
    </div>
    <div id="sonia2">
        <p>Le Societe</p>
    </div>
    </section>
</body>
</html>
