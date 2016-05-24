<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Klanten</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>Klantenlijst</h1>
        <table>
            <tr>
                <th>Klantnummer</th>
                <th>Voornaam</th>
                <th>Familienaam</th>
                <th>Straat</th>
                <th>Huisnummer</th>
                <th>Postcode</th>
                <th>Gemeente</th>
                <th>Telefoonnummer</th>
                <th>Email</th>
            </tr>
            <?php
            //print_r($klantenLijst);
            foreach($klantenLijst as $klant){
            ?>
            <tr>
                <td>
                    <?php print($klant->getId()); ?>
                </td>
                <td>
                    <?php print($klant->getVoornaam()); ?>
                </td>
                <td>
                    <?php print($klant->getFamilienaam()); ?>
                </td>
                <td>
                    <?php print($klant->getAdres_id()->getStraat()); ?>
                </td>
                <td>
                    <?php
                    print($klant->getAdres_id()->getHuisnummer());
                    if($klant->getAdres_id()->getBusnummer() != ''){
                        print("/" . $klant->getAdres_id()->getBusnummer());
                    }
                    ?>
                </td>
                <td>
                    <?php print($klant->getAdres_id()->getPostcode_id()->getPostcode()); ?>
                </td>
                <td>
                    <?php print($klant->getAdres_id()->getPostcode_id()->getGemeente()); ?>
                </td>
                <td>
                    <?php print($klant->getTelefoonnummer()); ?>
                </td>
                <td>
                    <?php print($klant->getEmailadres()); ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <?php
        // put your code here
        ?>
    </body>
</html>
