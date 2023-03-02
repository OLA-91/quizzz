// je recoie de ./process_recupQuestions.php la bonne Reponse *$*
console.log(bonneReponse);// AFFICHE
// je récupére les input don latribue name es reponse(s) *$*
let reponses = document.querySelectorAll("input[name=reponse]");
// une boucle pour extrait la reponse des reponse(s)
for (let s = 0; s < reponses.length; s++) {
    //on obtien reponse donner par l'utilisateur au moment du click *$*
    reponses[s].addEventListener('click', function () {
        // je la garde dans une variable *$*
        let reponseSelectionner = this.value
        console.log(reponseSelectionner);// AFFICHE
        console.log(bonneReponse);// AFFICHE
        // je compare les deux reponseSelectionner qui soie egal a bonneReponse et je donne un resulta *$*
        if (reponseSelectionner === bonneReponse) {
            document.getElementById("resulta").innerHTML = "Jolie ces bien la bonne réponse";
        } else {
            document.getElementById("resulta").innerHTML = "Et non la bonne réponse es :<br/>" + bonneReponse;
        }
    })
}

