<!DOCTYPE html>
<html lang="es">
    
    <head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        
    
		<title>Desarrollo Web</title>
    		
		<link rel="stylesheet" href="css/fontello.css">
		<link rel="stylesheet" href="css/estilos.css">    
         <script src="js/script.js"></script>
        <script src="js/verifica.js"></script>
        <script src="jquery-1.3.2.js"></script>
        
    
	</head>

	<body>
		
		
		<main>
                       
			
            
            
  <section id="contenedor">      

  
    <fieldset><!--para crear un marco al formulario-->
      <legend>FORMULARIO</legend><br><!--nombre formulario-->
        <form name="frm" method="POST" action="Registrar.php">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="cambio" maxlength="20" placeholder="escriba su nombre"> <br> <br> <br>
            
            <label for="nombre">Nombre de usuario:</label>
        <input type="text" name="user" id="user" class="cambio" maxlength="20" placeholder="escriba usuario" onchange="verifica()">
        <div id="Info"></div>    <br> <br> <br>
            
          <label for="nombre">Contraseña:</label>  
        <input type="password" name="pass" id="pass" class="cambio" maxlength="20" placeholder="contraseña"> <br> <br> <br>
            
       	<section>
       	<label for="email">E-mail:</label>
       	<input type="text" name="email" id="email" class="cambio" maxlength="50" placeholder="example@example.com"/>
       	</section> <br>
            
       	<div>
       	<label for="ident">Identificacion:</label>
       	<input type="number" name="identificacion" id="ident" class="cambio"  maxlength="10" placeholder="identificacion" />
       	</div>  <br> <br>
    
 
            
       	<div class="radio"/ >
         <input type="radio" name="tipo" id="bachi" value="Bachiller">
         <label for="tipo">Bachiller</label> <br>
            
         <input type="radio" name="tipo" id="tecni" value="Tecnico">
         <label for="tipo">Tecnico</label> <br>


         
            </div> <br> <br>
             
       	
            
<input type="hidden" name="rowIndex"><br>
<p><br></p>
<input type="submit" name="addBtn" class="cambio" value="Registrar" >

        
        </form>
      </fieldset> <br> <br>
      
      
    </body>
        </html>