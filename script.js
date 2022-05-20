//declaracion de variables
const cardIngreso = document.getElementById("cardIngreso");
const cardRegistro = document.getElementById("cardRegistro");

    //el elemento con el id link es un <a>, 
    //esta no tiene la propiedad onclick 
const link = document.getElementById("link");
link.onclick = ingreso;

//declaracion de funciones
function registro() {
    cardRegistro.style.display = "block";
    cardIngreso.style.display = "none";
}

function ingreso() {
    cardIngreso.style.display = "block";
    cardRegistro.style.display = "none";
}

//para que aparezca al principio el de iniciar sesion
ingreso();
