var login = document.getElementById("login");
var registro = document.getElementById("registro");

function crear_cuenta(){
    login.style.display = "none";
    registro.style.display = "block";    
}

function inicia_session(){  
    login.style.display = "block";
    registro.style.display = "none";
}