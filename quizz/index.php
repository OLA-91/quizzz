<?php

include "partials/header.php";

?>


<!-- *$* INDEX CONNECTION OU INSCRIPTION *$* -->
<section class="pageConnection">
    <article class="connection">
        <form action="process/process_connection.php" method="post">
            <table>
                <tr>
                    <td colspan="2"><label for="pseudo">Votre pseudo</label></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" id="pseudo" name="pseudo"></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input class="btnConnection" type="submit" value="Connection"></td>
                    <td><a href="formulaire_inscription.php"><input class="btnInscription" type="button"
                                value="Incription"></a></td>
                </tr>
            </table>
        </form>
    </article>
</section>

<?php include 'partials/footer.php' ?>