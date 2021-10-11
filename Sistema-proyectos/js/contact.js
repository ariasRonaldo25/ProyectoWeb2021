
const $form = document.querySelector('#form')
$form.addEventListener('submit', handleSubmit)

///funcion para enviar correos a traves del formulario de contacto.
function handleSubmit(event) {
  event.preventDefault()
  const form = new FormData(this)
  correo.setAttribute('href', `mailto:dda.03.official@gmail.com?subject=${form.get('name')}${form.get('email')}${form.get('asunto')}&body=}${form.get('mensaje')}`)
  correo.click()
}

//validar formulario de contacto.
var name=document.getElementById("name");
var username=document.getElementById("email");
var mensaje=document.getElementById("mensaje");
var error=document.getElementById("error");
error.style.color="red";

function validarFormContact(){
 
    console.log("Enviando formulario");

    var errores=[];

    if(name=== null || name===''){
        errores.push("Ingresa tú nombre");
    }
 
    if(username=== null || username===''){
        errores.push("Ingresa tú email");
    }

    if(mensaje=== null || mensaje===''){
        errores.push("Ingresa un mensaje");
    }
 
    error.innerHTML=errores.join(", ");

    return false;

}
