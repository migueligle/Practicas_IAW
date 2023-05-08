window.addEventListener("DOMContentLoaded", function (e) {
    let rojo = document.getElementById("rojo");
    let azul = document.getElementById("azul");
    let verde = document.getElementById("verde");
    let body = document.getElementById("cuerpo");
//cambiar color fondo
    rojo, azul, verde.addEventListener("change", function (e) {
        body.style.backgroundColor = 'rgb(' + rojo.value + ',' + verde.value + ',' + azul.value + ')';
    });

    let posicionx = document.getElementById("x");
    let posiciony = document.getElementById("y");
    let rotacion = document.getElementById("r");
    let moscas = document.querySelectorAll(".mosca");
    for (let mosca of moscas) {

        //cambiar posicion mosca
        rotacion.addEventListener("change", function (e) {

            mosca.style.rotate = rotacion.value + 'deg';
        });
        posicionx.addEventListener("change", function (e) {
            mosca.style.marginLeft = posicionx.value + '%';

        });
        posiciony.addEventListener("change", function (e) {

            mosca.style.marginTop = posiciony.value + '%';

        });
//quitar o poner moscas rojas o negras
        let centinela = true;
        mosca.addEventListener("click", function (e) {

            if (centinela == true) {
                mosca.setAttribute("src", "img/negro.svg");
                centinela = false;

            } else {
                mosca.setAttribute("src", "img/rojo.svg");
                centinela = true;
            }
        });
    }

//añadir moscas
    let nuevamosca = document.getElementById("nmosca");

    nuevamosca.addEventListener("click", function (e) {
        e.preventDefault();
        let nueva = document.createElement("img");
        nueva.setAttribute("src", "img/negro.svg");
        nueva.classList.add("mosca");
        document.querySelector(".fmosca").append(nueva);
    });


});