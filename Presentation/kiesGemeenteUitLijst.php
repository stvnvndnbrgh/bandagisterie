<!DOCTYPE html>
<!--Presentation/kiesGemeenteUitLijst.php-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gemeente</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
       
    </head>
    <body>
        <h1>Kies uit lijst</h1>
        <table>
            <thead>
                <tr>
                    <th>Gemeente <?php print($lijst[0]->getPostcode()) ?></th>
                </tr>
            </thead>
            <tbody>
                
                    <?php
                    foreach ($lijst as $gemeente){?>
                        <tr>
                        <?php print("<td> <a href=# >" . $gemeente->getGemeente() . "</a></td>"); ?>
                        </tr>
                    <?php }
                    ?>
                
            </tbody>
        </table>
        
    </body>
</html>
