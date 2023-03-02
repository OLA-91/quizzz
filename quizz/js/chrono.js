let now = new Date().getTime();
let countDownDate = new Date("February 3, 2023").getTime();
let chrono = document.getElementsById("chrono");

console.log(now, countdownDate);

function getchrono() {
    let distanceBase = countDownDate - now;

    let days = Math.floor(distanceBase / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distanceBase % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distanceBase % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distanceBase % (1000 * 60)) / 1000);

    console.log(days, hours, minutes, seconds);

    chrono.innerTEXT = `${days}j ${hours}h ${minutes}m ${seconds}s`;
}

getchrono();

let countDownIterval = setInterval(() => {
    getchrono();
}, 1000);