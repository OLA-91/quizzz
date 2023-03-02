
const departMinutes = 1
let temps = departMinutes * 60

const timerElement = document.getElementById("chrono");

function rebour() {
    setInterval(() => {
        let minutes = parseInt(temps / 60, 10);
        let secondes = parseInt(temps % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        secondes = secondes < 10 ? "0" + secondes : secondes;

        timerElement.innerText = `${minutes}:${secondes}`;
        temps = temps <= 0 ? 0 : temps - 1;
        if (temps === 0) {
            timerElement.innerHTML = "Temps épuise la bonne réponse es :<br />" + `${bonneReponse}`;
        }
    }, 1000)

}

rebour();



