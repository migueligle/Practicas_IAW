window.addEventListener("DOMContentLoaded", function (e) {
    //variables
    let ps = document.querySelectorAll("p");
    let nuevotexto = document.getElementById("nuevotexto");
    let colorletra = document.querySelector("#colorletra");
    let colorfondo = document.querySelector("#colorfondo");
    let tipoletra = document.querySelector("#letra");
    let tamaño = document.querySelector("#tamaño")
    let quitar = document.querySelector("#quitar");
    let copiar=document.querySelector("#copiar");
    let pegar=document.querySelector("#pegar");
    let quitarformato=document.querySelector("#quitarformato");
    let formato="";
//bucle recorres las ps
    for (let p of ps) {
        p.addEventListener("click", function (e) {
                p.classList.add("seleccionar");




            //color letra
            colorletra.addEventListener("change", function (e) {

                if (p.classList.contains("seleccionar" )||p.classList.contains("copiado" )) {
                    p.style.color = colorletra.value;
                }
            });

            //color fondo

            colorfondo.addEventListener("change", function (e) {

                if (p.classList.contains("seleccionar")) {
                    p.style.backgroundColor = colorfondo.value;
                }
            });
//tipo de letra
            tipoletra.addEventListener("change", function (e) {
                if (p.classList.contains("seleccionar")) {
                     p.style.fontFamily = tipoletra.value;
                }

            });


            //tamaño letra


            tamaño.addEventListener("change", function (e) {
                if (p.classList.contains("seleccionar") ) {
                    p.style.fontSize = tamaño.value + "em";
                }




            });


//quitar seleccion
            quitar.addEventListener("click", function (e) {
                e.preventDefault();
                if (p.classList.contains("seleccionar")) {
                    p.classList.remove("seleccionar")
                }else{
                    alert("no has seleccionado ningun parrafo");
                }

            });


            //cambiar texto
            nuevotexto.addEventListener("change", function (e) {
                e.preventDefault();
                if (p.classList.contains("seleccionar")) {
                    p.innerText = nuevotexto.value;
                }else{
                    alert("no has seleccionado ningun parrafo");
                }

            });

            //quitar formato

            quitarformato.addEventListener("click",function (e){
                if (p.classList.contains("seleccionar")) {
                    p.setAttribute("style","");
                }
            });


//copiar formato

copiar.addEventListener("click",function (e){
    if (p.classList.contains("seleccionar")) {
        formato = [colorletra.value, tamaño.value, colorfondo.value, tipoletra.value];
    }else{
        alert("Debes seleccionar un párrafo")
    }
    p.classList.remove("seleccionar")



});

            //pegar formato

            pegar.addEventListener("click",function (e){
if (p.classList.contains("seleccionar")){

    let cl=formato[0];
    let tama=formato[1];
    let colfon=formato[2];
    let tipletra=formato[3];

    p.style.fontFamily = tipletra;
    p.style.color = cl;
    p.style.fontSize = tama+"em";
    p.style.backgroundColor = colfon;




}else{
    alert("No hay ningun estilo copiado");
}






            });
        });

    }


});