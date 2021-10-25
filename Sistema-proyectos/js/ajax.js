
//Validando formulario de registro.

function registro(){

    var rg_username=document.querySelector('#rg_username').value;
    var rg_email=document.querySelector('#rg_email').value;
    var rg_pass1=document.querySelector('#rg_pass1').value;
    var rg_pass2=document.querySelector('#rg_pass2').value;

    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    expresion=  /^[a-zA-Z0-9]+$/;

    
    if(rg_username == ''){
       M.toast({html: 'El campo Usuario no puede estar vacío.'})
    }else if(!expresion.exec(rg_username)){
        M.toast({html: 'En el campo usuario, No se permiten caracteres especiales ni espacios'})
    }

    if(rg_email == ''){
       M.toast({html: 'El campo Email no puede estar vacío.'})
    }else if(!emailRegex.exec(rg_email)){
        M.toast({html: 'Por favor introduce un email valido'})
    }

    if(rg_pass1 == ''){
      M.toast({html: 'El campo Contraseña no puede estar vacío.'})
    }else if(!expresion.exec(rg_pass1)){
        M.toast({html: 'En el campo contraseña, No se permiten caracteres especiales ni espacios'})
        }

    if(rg_pass2 == ''){
      M.toast({html: 'El campo Confirmar contraseña no puede estar vacío.'})
    }else if(!expresion.exec(rg_pass2)){
        M.toast({html: 'En el campo confirmar contraseña, No se permiten caracteres especiales ni espacios'})
    }
    if(rg_pass1 !== rg_pass2){
        M.toast({html: 'Las contraseñas no coinciden.'})
    }


}