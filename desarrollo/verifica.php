<?php
sleep(1);
$conexion= pg_connect("host=localhost dbname=web user=postgres password=12345")or die ('error al conectar' .pg_last_error());
if($_REQUEST)
{
	$username =$_REQUEST['user'];
	$query = "select * from personas where usuario='".strtolower($username)."'";
	$results = pg_query($conexion, $query) or die('fail');
	
	if(pg_num_rows(@$results) > 0) // not available
	{
		echo '<div class="info" id="Error">Usuario ya existente</div>';
		
	}
	else
	{
		echo '<div class="info" id="Success">Disponible</div>';
	}
	
}?>
