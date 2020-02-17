var security=true;

function equalpass(){
    var pass1 = $('password1').val();
    var pass2 = $('password2').val();
    //Get the date from the form
    var dat= $('dat').val();
    
    //Format dates d:NowDate c:inputDate
    var d=new Date();
    var c=new Date(dat);

    //Get the difference between the actual date vs input date
    var yearCom=d.getFullYear()-c.getFullYear();
    var monthCom=d.getMonth()-c.getMonth();
    var dayCom=d.getDate()-(c.getDate()+1);
    
    //Get the age by logic
    if(monthCom>0 || (monthCom==0 && dayCom>=0)){
        age=yearCom;
    }else{
        age=yearCom-1;
    }

    //document.getElementById("demo").innerHTML = age; This is the best for watch errors

    if(age<18){
        $('dat').setCustomValidity("No tienes la edad necesaria");
        this.security=false;
    }else{
        $('dat').setCustomValidity("");
    }

    if(pass1!=pass2){
        $('dat').setCustomValidity("Las contraseñas no coinciden");
        this.security=false;
     
    }else{
        this.security=true;
        $('dat').setCustomValidity("");
    }
    
    if(this.security==false){
        alert("No es posible registrarse, hay errores en algunas casillas");
    }
    
}

function emailAE(){
    $('email').setCustomValidity("El email ya esta en uso");
}


function chan(){
    $('email').setCustomValidity("");
}

function equalpassword(){
    var pass1 = $('pass1').val();
    var pass2 = $('pass2').val();
    if(pass1!=pass2){
        $('pass2').setCustomValidity("Las contraseñas no coinciden");
    
    }else{
        $('pass2').setCustomValidity("");
    }
}

function alertas(){
    alert("La contraseña no es la indicada");
}

