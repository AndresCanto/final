//declaracion de variables
const cardIngreso = document.getElementById("cardIngreso");
const cardRegistro = document.getElementById("cardRegistro");
let titel = document.getElementsByTagName("title");

//declaracion de funciones
function registro() {
    cardRegistro.style.display = "block";
    cardIngreso.style.display = "none";
    title.innerHTML = 'Registrar Cuenta';
}

function ingreso() {
    cardIngreso.style.display = "block";
    cardRegistro.style.display = "none";
    title.innerHTML = 'Iniciar Sesión';
}

//para que al cargar la pgina se vea el formulario iniciar sesion
ingreso();
