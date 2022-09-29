import './bootstrap';

const hr = document.querySelector('#hr');
const min = document.querySelector('#min');
const seg = document.querySelector('#seg');

setInterval(() => {
    let day = new Date();
    let hh = day.getHours() * 30;
    let mm = day.getMinutes() * 6;
    let ss = day.getSeconds() * 6;

    hr.style.transform = `rotateZ(${hh + (mm / 12)}deg)`;
    min.style.transform = `rotateZ(${mm}deg)`;
    seg.style.transform = `rotateZ(${ss}deg)`;


    // *********************************************
    // Relógio Digital
    const horas = document.querySelector('#horas');
    const minutos = document.querySelector('#minutos');
    const segundos = document.querySelector('#segundos');
    const ampm = document.querySelector('#ampm');

    let h = new Date().getHours();
    let m = new Date().getMinutes();
    let s = new Date().getSeconds();
    let am = "AM";

    // Am ou PM
    if (h > 12) {
        // h = h - 12     .... deixar a hora com só com os 12 números
        am = "PM"
    }

    // Inserir zero
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    horas.innerHTML = h + ":";
    minutos.innerHTML = m + ":";
    segundos.innerHTML = s + "&nbsp";
    ampm.innerHTML = am;

})
