<?php
require_once './conex.php';
$conexion=conectarBD();

/*para llenar combox sexo*/
$consulta="SELECT * FROM public.sexo";
$resultadosexo=pg_query($conexion,$consulta) or die ("error al realizar la consulta en la tabla sexo de la BBD" );
$numregsexo=pg_num_rows($resultadosexo);

/*para llenar combox cargo*/
$consulta="SELECT * FROM public.cargo";
$resultadocargo=pg_query($conexion,$consulta) or die ("error al realizar la consulta en la tabla sexo de la BBD" );
$numregcargo=pg_num_rows($resultadocargo);

?>
