<!DOCTYPE html>
<!--Presentation/gemeenteViaPostcode.php-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gemeente</title>
    </head>
    <body>

        <form method="post" action="../zoekviapostcode.php?action=zoek">
            Postcode:<br />
            <input type="text" name="postcode">
            <input type="submit" value="Zoek">
        </form>
        <?php
        if (isset($_GET['action']) && $_GET['action'] == "toon"){
            
        }
        ?>
    </body>
</html>
