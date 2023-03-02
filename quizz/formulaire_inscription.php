<?php

include 'partials/header.php';

?>

<section class="pageFormulaire">
    <article class="formulaire">
        <form action="process/process_inscription.php" method="post">
            <table>
                <tr>
                    <td><label for="pseudo">Quel est votre pseudo</label></td>
                </tr>
                <tr>
                    <td><input type="text" id="pseudo" name="pseudo"></td>
                </tr>
                <tr>
                    <td><input class="btnInscription" type="submit" value="Incription"></td>
                </tr>
            </table>
        </form>
    </article>
</section>

<?php include 'partials/footer.php' ?>