<!DOCTYPE html>
<html lang="es">
    
    <head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        
    
		<title>Desarrollo Web</title>
    		
		<link rel="stylesheet" href="css/fontello.css">
		<link rel="stylesheet" href="css/estilos.css">    
         <script src="js/script.js"></script>
    
	</head>

	<body>
		
		
		<main>
            
<h1>Bienvenidos a nuestra plataforma virtual</h1>
            
            <br>
            <br>
            <br>
            
            
  <section id="contenedor">      

  
    <fieldset><!--para crear un marco al formulario-->
      <legend>BIENVENIDOS</legend><br><!--nombre formulario-->
        <form name="frm" method="POST" action="login.php">

     
            
            <label for="nombre">Nombre de usuario:</label>
        <input type="text" name="user" id="user" class="cambio" maxlength="20" placeholder="escriba usuario"> <br> <br> <br>
            
          <label for="nombre">Contraseña:</label>  
        <input type="password" name="pass" id="pass" class="cambio" maxlength="20" placeholder="contraseña"> <br> <br> <br>
            
      
 
            
       	<div class="radio"/ >
         <input type="radio" name="tipo" id="tipo" value="Bachiller">
         <label for="tipo">Bachiller</label> <br>
            
         <input type="radio" name="tipo" id="tipo" value="Tecnico">
         <label for="tipo">Tecnico</label> <br>


         
            </div> <br> <br>
            
   
             
       	
            
<input type="hidden" name="rowIndex"><br>
<p><br></p>
<input type="submit" name="addBtn" class="cambio" value="Entrar">
<input type="button" name="Btn" class="cambio" value="Registar" onclick="registrar()">


        
        </form>
      </fieldset> <br> <br>
      
       <p>Si ya estás registrado ingresa tu nombre de usuario y si no, selecciona la opción "Registrar" y llena el formulario.</p>

                 
       
    
            </section>
        </main>
            </body>
        </html>