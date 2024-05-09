document.addEventListener("DOMContentLoaded", funciones);

function funciones() {
    aumentarLetra();
    mostrarHora();
}
function aumentarLetra() {
    let tamañoLetra = document.getElementById("content");
    let originalFontSize = parseFloat(window.getComputedStyle(document.body).fontSize);
    tamañoLetra.addEventListener("click", function() {
        let currentFontSize = parseFloat(window.getComputedStyle(tamañoLetra).fontSize);
        if (currentFontSize < originalFontSize * 2) {
            tamañoLetra.style.fontSize = `${currentFontSize + 1}px`;
        } else {
            tamañoLetra.style.fontSize = `${originalFontSize}px`;
        }
    });
}
function mostrarHora(){
    let reloj = document.createElement("div");
    reloj.innerHTML = "00:00:00";
    reloj.id = "reloj";
    reloj.setAttribute("style", "position: absolute; display: none; background-color: red; color: blue; border: 1px solid black;");
    document.body.appendChild(reloj);

    let parrafos = document.getElementsByTagName("p");
    for (let index = 0; index < parrafos.length; index++) {
        parrafos[index].addEventListener("mouseenter", function (e) {
            let reloj = document.getElementById("reloj");
            reloj.style.display = "block";
            let d = new Date();
            reloj.innerHTML = (d.getHours()) + ":" + (d.getMinutes()) + ":" + (d.getSeconds());
        });

        parrafos[index].addEventListener("mousemove", function (e) {
            let reloj = document.getElementById("reloj");
            reloj.style.left = (e.clientX + 5) + "px";
            reloj.style.top = (e.clientY - 5) + "px";
        });

        parrafos[index].addEventListener("mouseleave", function (e) {
            let reloj = document.getElementById("reloj");
            reloj.style.display = "none";
            console.log(e.target, e.currentTarget);
        });
    }
}
