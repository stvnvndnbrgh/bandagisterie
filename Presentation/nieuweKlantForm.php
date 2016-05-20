<!DOCTYPE html>
<!--Presentation/nieuweKlantForm.php-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nieuwe klant</title>
    </head>
    <body>
        <h1>Nieuwe klant toevoegen</h1>
        <?php
        // put your code here
        ?>
        <form method="post" action="voegklanttoe.php?action=process">
            <table>
                <tbody>
                    <tr>
                        <td>Voornaam: </td>
                        <td>
                            <input type="text" name="vn" />
                        </td>                     
                    </tr>
                    <tr>
                        <td>Familienaam: </td>
                        <td>
                            <input type="text" name="fn" />
                        </td>                     
                    </tr>
                    <tr>
                        <td>Telefoon: </td>
                        <td>
                            <input type="text" name="tel" />
                        </td>                     
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Toevoegen" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
