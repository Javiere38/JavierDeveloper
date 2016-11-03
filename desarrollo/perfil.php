<!DOCTYPE html>
<html lang="es">
    
    <head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        
    
		<title>Perfil</title>
    		
		<link rel="stylesheet" href="css/fontello.css">
		<link rel="stylesheet" href="css/estilos.css">    
         <script src="js/script.js"></script>
    
	</head>

	<body>
<main>
            
          
            
  <section id="contenedor">      

  
    <fieldset><!--para crear un marco al formulario-->
      <legend>Perfil de usuario</legend><br><!--nombre formulario-->
        <?php 
$usr=$_GET['user'];
$conexion= pg_connect("host=localhost dbname=web user=postgres password=12345")or die ('error al conectar' .pg_last_error());  
$query = "select * from personas where usuario = '".$usr."'";
$result = pg_query($conexion,$query) or die('Query failed: ' . pg_last_error());

$rows = pg_numrows($result);
echo "<table width='471' bgcolor='#FFE7CB'>";
echo "<tbody><tr>";
echo "<td width='280'>";
echo "<img class='avatar avatar-70 grav-hashed grav-hijack alignleft'"; 
echo "id='grav-1465a431df9b656bf373d4d35ad406ea-0' ";
echo "style='margin-left: 30px; margin-right: 30px' ";
//mostrar los datos
for($i=1;$i<=$rows; $i++){
$line = pg_fetch_array($result, null, PGSQL_ASSOC);
echo "src='https://s.gravatar.com/avatar/$line[gravatr]'";
echo "width='220' height='220' />";
echo "</td>";
echo " <td width='220'>";
echo "<p>Id: $line[id]</p>";
echo "<p>Nombre: $line[nombre]</p>";
echo "<p>Usuario: $line[usuario]</p>";
echo "<p>Email: $line[correo]</p>";
echo "</tr>";
}

echo"</table>";

// Free resultset
pg_free_result($result);
// Closing connection
pg_close($conexion);
?> 
      <input type="button" name="Btn" class="cambio" value="Vovler" onclick="redireccionar()">
      </fieldset> <br> <br>
       
    </body>
        </html>