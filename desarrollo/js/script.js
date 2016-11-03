
function add() {

            var verificar=true;
           var expRegNombre=/^[A-Za-zأأ�أأأأأأ�أ�أ­أ�أ�\s]+$/;
           var expRegApellido=/^[A-Za-zأأ�أأأأأأ�أ�أ­أ�أ�\s]+$/;
           var expRegEmail=/^[_a-zA-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
           var expRegUrl=/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
           var expRegfecha='^[12][0-9]|3[01])[- /.](19|20)?[0-9]{2}|(0?[1-9]|1[012])[- /.](0?[1-9]|$'
           
           var nombre = document.getElementById("nombre");
           var apellido = document.getElementById("apellido");
           var email = document.getElementById("email");
           var telefono = document.getElementById("telefono");
           var url = document.getElementById("url");
           var mensaje = document.getElementById("mensaje");
           var fecha=document.getElementById("fecha");
           var checkbox=document.getElementById("checkbox");
   
  if (nombre.value == "" ) {
            alert("Escriba un nombre");
            nombre.focus();
            
            verificar=false;
            }
           else if(!expRegNombre.exec(nombre.value)){
              alert("el nombre no es valido");
              nombre.focus();
            verificar=false;
            }

           else if (apellido.value == "" ) {
            alert("Esciba un apellido");
            apellido.focus();
            
            verificar=false;
            }
             else if(!expRegApellido.exec(apellido.value)){
              alert("el apellido no es valido");
              apellido.focus();
            verificar=false;
            }
            else if (email.value == "" ) {
            alert("Esciba un e-mail");
            email.focus();
            
            verificar=false;
            }
            else if(!expRegEmail.exec(email.value)){
              alert("el E-mail no es valido");
              email.focus();
              verificar=false;
            }
          
            else if (telefono.value == "" ) {
            alert("Esciba un telefono");
            telefono.focus();
            
            verificar=false;
            }
            else if(isNaN(telefono.value)){
                  alert("El campo telefono solo acepta numeros");
                  telefono.focus();
                 
                  verificar=false;
            }
            else if (url.value == "" ) {
            alert("Esciba una url");
            url.focus();
            
            verificar=false;
            }
            else if(!expRegUrl.exec(url.value)){
              alert("escriba una Url valida");
            
             verificar=false;
            }
            else if (fecha.value == "" ) {
            alert("llene el campo fecha");
            fecha.focus();
            
            verificar=false;
            }
            
            else if (mensaje.value == "" ) {
            alert("Esciba un mensaje");
            mensaje.focus();
            verificar=false;
            }
            
             else if(verificar==true){
                llenar();
              regenerateTable();
              
            }           
}

function registrar(){
    window.location="formulario.php";
}
function redireccionar(){
    window.location="index.php";
}