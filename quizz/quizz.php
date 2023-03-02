<?php

include "process/process_recupQuestions.php";

include "process/process_recupUtilisateurs.php";

include "partials/header.php";

?>

<section class="pageResulta">
    <article class="afficheResulta">
        <p id="chrono">01:00</p>
        <p id="resulta">?.?.?</p>
    </article>
</section>
<section class="pageQuizz">
    <article class="quizz">
        <form action="" method="post">
            <P class="question">
                <?= $question ?>
            </P>
            <table>
                <tr>
                    <td class="tdmarg"><input type="radio" id="reponse1" name="reponse" value="<?= $reponse1 ?>"></td>
                    <td><label for="reponse">
                            <?= $reponse1 ?>
                        </label></td>
                </tr>
                <tr>
                    <td class="tdmarg"><input type="radio" id="reponse2" name="reponse" value="<?= $reponse2 ?>"></td>
                    <td><label for="reponse">
                            <?= $reponse2 ?>
                        </label></td>
                </tr>
                <tr>
                    <td class="tdmarg"><input type="radio" id="reponse3" name="reponse" value="<?= $reponse3 ?>"></td>
                    <td><label for="reponse">
                            <?= $reponse3 ?>
                        </label></td>
                </tr>
                <tr>
                    <td class="tdmarg"></td>
                    <td><a href="quizz.php"><input type="button" class="btnSuivant" id="btnSuivant" value="Suivant"></a>
                    </td>
                </tr>
            </table>
        </form>
    </article>
</section>

<?php include "partials/footer.php"; ?>