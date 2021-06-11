<?php
require_once ('conex.php');
$conexion=conectarBD();

$consulta="SELECT * FROM public.sexo";
$resultado=pg_query($conexion,$consulta) or die ("error al realizar la consulta en la tabla sexo de la BBD")
$numreg=pg_num_rows($resultado);


// pg_free_result($resultado);
// pg_close($conexion);
?>