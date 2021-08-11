/*alert("ingreso a la validacion");

const formulario=document.getElementById("formulario_registro");
const inputs=document.querySelectorAll("#formulario_registro input");

//objeto de expresiones con propiedades regular 
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const fun_validarformulario=(e)=>{
//console.log("ejecuta");
switch(e.target.name){
case"id":
//console.log('funciona')
break
case"nombre":
if(expresiones.usuario.test(e.target.value)){

}else{
    
}
break
case"nombre_uno":
break
case"apellido":
break
case"apellido_uno":
break
case"correo":
break
case"contrasena":
break

}
}

inputs.forEach((input)=> {
input.addEventListener('keyup',fun_validarformulario);
input.addEventListener('blur',fun_validarformulario);

});
formulario.addEventListener('submit',(e)=>{
    e.preventDefault();
});
alert("ingreso a la for");
*/

document.getElementById("bto_registrar").addEventListener("click", f_bto_registrar);
document.getElementById("bto_iniciar_sesion").addEventListener("click", f_bto_ingresar);
window.addEventListener("resize",anchopagina);

//declaracion  de variables
var contenedor_login_registro = document.querySelector(".contenedor_login_registro");
var formulario_login = document.querySelector(".formulario_login");
var formulario_registro = document.querySelector(".formulario_registro");
var contenedor_login = document.querySelector(".contenedor_login");
var contenedor_registro = document.querySelector(".contenedor_registro");


function anchopagina(){
if(window.innerWidth> 850){
    contenedor_login.style.display="block";
    contenedor_registro.style.display="block";
}else{
    contenedor_registro.style.display="block";
    contenedor_registro.style.opacity="1";
    contenedor_login.style.display="none";
    formulario_login.style.display="block";
    formulario_registro.style.display="none";
    contenedor_login_registro.style.left="0px";
}

}

anchopagina();

function f_bto_ingresar() {

    if (window.innerWidth > 850) {
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "10px";
        formulario_login.style.display = "block";
        contenedor_registro.style.opacity = "1";
        contenedor_login.style.opacity = "0";
    } else {
        formulario_registro.style.display = "none";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "block";
        contenedor_registro.style.display = "block";
        contenedor_login.style.display = "none";

    }
}
function f_bto_registrar() {

    if (window.innerWidth > 850) {

        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "410px";
        formulario_login.style.display = "none";
        contenedor_registro.style.opacity = "0";
        contenedor_login.style.opacity = "1";
    } else {
        formulario_registro.style.display = "block";
        contenedor_login_registro.style.left = "0px";
        formulario_login.style.display = "none";
        contenedor_registro.style.display = "none";
        contenedor_login.style.display = "block";
        contenedor_login_style.opacity = 1;
    }
}