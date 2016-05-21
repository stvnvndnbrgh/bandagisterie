<!DOCTYPE html>
<!--Presentation/gemeenteViaPostcode.php-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gemeente</title>
        <style>
            body{
                font-family: arial;
                font-weight: bold;
                font-size: 25px;
            }
        </style>
    </head>
    <body>

        <form method="post" action="zoekviapostcode.php?action=zoek">
            Postcode:<br />
            <input type="text" name="postcode" autofocus>
            <input type="submit" value="Zoek">
        </form>
        <?php
        if (isset($_GET['paske'])){
        foreach ($_GET['paske'] as $rij){?>
            <p><?php print(ucwords(strtolower($rij->getGemeente())));?></p>
        
        <?php
        }
        }
        ?>
    </body>
</html>
