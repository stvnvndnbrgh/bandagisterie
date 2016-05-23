<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <form action="zoekviagemeentenaam.php?action=zoek" method="post">
            Gemeentenaam:<br />
            <input type="text" name="gemeente" autofocus>
            <input type="submit" value="Zoek">
        </form>
        <?php
        if(isset($lijst)){
            foreach($lijst as $rij){?>
                <p><?php print($rij->getPostcode()); ?></p>
            <?php } 
        }
        ?>
                <form action="zoekviapostcode.php" method="get">
                    <input type="submit" value="Kies op postcode">
                </form>
    </body>
</html>
