<?php

$user=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$iden=$_POST['identificacion'];
$name=$_POST['nombre'];
$tipo=$_POST['tipo'];
$gravatar=md5($email);
 $conexion= pg_connect("host=localhost dbname=web user=postgres password=12345")or die ('error al conectar' .pg_last_error());
$verifica=strlen($tipo)*strlen($user)*strlen($pass)*strlen($email)*strlen($iden)*strlen($name);
if($verifica>0){
   
    $query="select * from personas where usuario='".$user."'";
    $res=pg_query($conexion, $query);
    if(pg_num_rows(@$res)>0){

        echo "<script>alert('El usuario ya existe')</script>";
        require("formulario.php");
       
    }else{
    $query2="INSERT INTO personas(nombre,usuario,password,correo,gravatr,tipo,identificacion)
    VALUES('".$name."','".$user."','".$pass."','".$email."','".$gravatar."','".$tipo."','".$iden."')";
    pg_query($conexion, $query2);
        header("location:index.php");
    
        
    }
    
  
    
        
    
}else{
    
    echo"<script>alert('Rellene todos los campos')</script>";
    header("location:formulario.php");
}
pg_close($conexion);

?>