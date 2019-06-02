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
    rec.start();
}else{
    document.getElementById("text_reconocido").style.display = "none";
}