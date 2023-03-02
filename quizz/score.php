<?php

include "utils/bdd_quizz.php";

include "process/process_recupUtilisateurs.php";

include "partials/header.php";

?>

<section class="pageScore">
    <article class="classment">
        <form action="" method="post">
            <table>
                <thead>
                    <th>Pseudo</th>
                    <th>Note</th>
                </thead>

                <tbody>
                    <?php foreach ($utilisateurs as $utilisateur) { ?>
                        <tr>
                            <th>
                                <?= $utilisateur['pseudo']; ?>
                            </th>
                            <th>
                                <?= $utilisateur["note"]; ?>
                            </th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </form>
    </article>
</section>

<?php include 'partials/footer.php'; ?>