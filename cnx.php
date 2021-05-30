<?php
$conexion=pg_connect("host='localhost' dbname=siccopes port=5432 user=postgres password=admin1996")
or die ("error de conexión".pg_last_error());
?>