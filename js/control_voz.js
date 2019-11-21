if(!localStorage.getItem("control_voz")){
   var opcion = confirm("Presione aceptar si es una persona con dificultades para escribir || De lo contrario precione Cancelar");
    if(opcion == true){
        localStorage.setItem("control_voz", "si");
    }else{
        localStorage.setItem("control_voz", "no");
    }
}

if(localStorage.getItem("control_voz") == "si"){
    let rec;
    if(!("webkitSpeechRecognition" in window)){
        alert("No puedes utilizar el reconocimiento de voz");
    }else{
        rec = new webkitSpeechRecognition();
        rec.lang = "es-EC";
        rec.continuous = true;
        rec.interim = true;
        rec.addEventListener("result", iniciar);
    }
    function iniciar(event){
        for(i = event.resultIndex; i < event.results.length; i++){
            document.getElementById("text_reconocido").innerHTML = event.results[i][0].transcript;
        }
    }
    var leer2 = setInterval(function (){
        rec.start();
        var leer = setInterval(function (){
            recibir(document.getElementById("text_reconocido").innerText,leer,leer2);
        },1000);
    },5000);

    let recibir = (text,leer) => {
        console.log(text);
        if(text == "menú de comando" || text == "menú de comandos" || text == "menú comandos"){
            document.getElementById("menu_comandos").style.display = "block";
            responder(text,"#CCFF8F");
        }else if(text == "cerrar menú de comandos" || text == "cerrar menú de comando"){
            document.getElementById("menu_comandos").style.display = "none";
            responder(text,"#CCFF8F");
        }else if(text == "Pronuncia: Menu de comandos....."){
            responder(text,"#fff");
        }else if(text == "Abrir pestaña inicio" || text == "pestaña inicio"){
            redireccionar("index",text,leer,leer2);
        }else if(text == "Abrir pestaña login" || text == "pestaña login"){
            redireccionar("login",text,leer,leer2);
        }else if(text == "Abrir pestaña cursos" || text == "pestaña curso" || text == "pestaña cursos"){
            redireccionar("cursos",text,leer,leer2);
        }else if(text == "Abrir pestaña blog" || text == "pestaña blog"){
            redireccionar("blog",text,leer,leer2);
        }else if(text == "Abrir pestaña contacto" || text == "pestaña contacto"){
            redireccionar("contact",text,leer,leer2);
        }else if(text == "acceder" || text == "Iniciar sesión"){
            responder(text,"#CCFF8F");
            document.getElementById("ejecu").click();
            detener(leer, leer2);
        }else if(text == "Cerrar sesión" || text == "cerrar perfil" || text == "cerrar sesión"){
            redireccionar("cerrar",text,leer,leer2);
        }else if(text == "pestaña perfil" || text == "Abrir pestaña perfil"){
            redireccionar("perfil",text,leer,leer2);
        }else if(text == "deslizar pantalla abajo" || text == "deslizar pantalla"){
            responder(text,"#CCFF8F");
            deslizar(100);
        }else if(text == "deslizar pantalla arriba" || text == "subir pantalla"){
            responder(text,"#CCFF8F");
            deslizar(-100);
        }else{
            responder("Comando no reconocido","pink");
        }
    }
    
    let responder = (respuesta,color) => {
        var text_reconocido = document.getElementById("text_reconocido");
            text_reconocido.innerHTML = respuesta;
            text_reconocido.style.backgroundColor = color;
    }

    let detener = (time1, time2) => {
            clearInterval(time1);
            clearInterval(time2);
    }

    let redireccionar = (pagina,text,leer,leer2) => {
            window.location.href=pagina;
            detener(leer,leer2);
            responder(text,"#CCFF8F");
    }

    let deslizar = (pixeles) => {
        pixeles += window.scrollY;
        window.scrollTo(0,pixeles);
    }

}else{
    document.getElementById("text_reconocido").style.display = "none";
}