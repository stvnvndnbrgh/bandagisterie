<!DOCTYPE html>
<!--Presentation/gemeenteViaPostcode.php-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gemeente</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
            ?>

        <?php
        }
        }
        ?>
            <form action="zoekviagemeentenaam.php" method="get">
            <input type="submit" value="Kies op gemeentenaam">
            </form>
    </body>
</html>

