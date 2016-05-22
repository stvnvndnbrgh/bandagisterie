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
                font-size: 20px;
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
            $test = $rij->getGemeente();
            $test = preg_replace("/(\w+)/e","ucfirst('\\1')", $test);
            print($test);
            print_r($lijst);
            ?>

        <?php
        }
        }
        ?>
    </body>
</html>
