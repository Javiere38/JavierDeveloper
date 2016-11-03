<?php
$tipo=$_POST['tipo'];
$user=$_POST['user'];
$pass=$_POST['pass'];

$verifica=strlen($tipo)*strlen($user)*strlen($pass);
if($verifica>0){
   $conexion= pg_connect("host=localhost dbname=web user=postgres password=12345")or die ('error al conectar' .pg_last_error());
    $query="select * from personas where usuario='".$user."' and password='".$pass."' and tipo='".$tipo."'";
    $res=pg_query($conexion, $query);
    if(pg_num_rows(@$res)>0){
        header("location:perfil.php?user=".$user."");
    }else{
        echo "<script>alert('No existe los datos')</script>";
        require("index.php");
    }
        
    
}else{
    header("location:index.php");
    echo"<script>alert('Rellene todos los campos')</script>";
}

pg_close($conexion);
?>