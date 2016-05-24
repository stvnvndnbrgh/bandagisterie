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
                            <input type="text" name="vn" autofocus />
                        </td>                     
                    </tr>
                    <tr>
                        <td>Familienaam: </td>
                        <td>
                            <input type="text" name="fn" />
                        </td>                     
                    </tr>
                    <tr>
                        <td>Straat: </td>
                        <td>
                            <input type="text" name="straat" />
                        </td>                     
                    </tr>
                    <tr>
                        <td>Huisnummer: </td>
                        <td>
                            <input type="text" name="huisnummer" />
                        </td>                     
                    </tr>
                    <tr>
                        <td>Busnummer: </td>
                        <td>
                            <input type="text" name="busnummer" />
                        </td>                     
                    </tr>
                    <tr>
                        <td>Postcode: </td>
                        <td>
                            <input type="text" name="postcode" />
                        </td>                     
                    </tr>
                    <tr>
                        <td>Gemeente: </td>
                        <td>
                            <input type="text" name="gemeente" />
                        </td>                     
                    </tr>
                    <tr>
                        <td>Telefoon: </td>
                        <td>
                            <input type="text" name="tel" />
                        </td>                     
                    </tr>
                    <tr>
                        <td>E-mail: </td>
                        <td>
                            <input type="text" name="email" />
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
