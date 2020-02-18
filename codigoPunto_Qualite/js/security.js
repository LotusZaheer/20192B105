var security=true;

function equalpass(){
    
    //Get the date from the form
    var dat= document.getElementById("dat").value;
    
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

    

    if(age<18){
        document.getElementById("demo").innerHTML = age; 
        document.getElementById("dat").setCustomValidity("No tienes la edad necesaria");
        //falta algo aqui
        
    }else{
        document.getElementById("dat").setCustomValidity("");
    }
    
}

function emailAE(){
    document.getElementById("email").setCustomValidity("El email ya esta en uso");
}


function chan(){
    document.getElementById("email").setCustomValidity("");
}

function equalpassword(){
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    if(pass1!=pass2){
        document.getElementById("pass2").setCustomValidity("Las contraseñas no coinciden");
    
    }else{
        document.getElementById("pass2").setCustomValidity("");
    }
}

function alertas(){
    alert("La contraseña no es la indicada");
}

