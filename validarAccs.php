<?php
session_start();
include './cxn.php';

$user =$_POST[usuario];
$pass= $_POST[pwd];

$consulta="SELECT cedula_usr, 
                  contraseña_usr, 
                  primerApellido_usr, 
                  primerNombre_usr, 
                  email_usr, 
                  fechaRegistro_usr, 
                  cargo_usr, 
                  tipoUsuario_usr, 
                  sexo_usr,
                  estadoLaboral_usr
            FROM public.usuarioSiccopes 
            WHERE cedula_usr=$usuario, 
                  contraseña_usr=$pwd";

$resultado=pg_query($conexion,$consulta);

$usuario2="";
$pwd2="";
$estadouser=0;

while ($row = pg_fetch_array($result)) {

    $usuario2 = $row['cedula_usr']; //para validar q exista algun regsitro
    $clave2 = $row['contraseña_usr'];
    $estadouser=$row['estadoLaboral_usr'];

}

if ($usuario2 == "" && $pwd2 == "") {
    
    header("location:index.php ?fallo=true");   
    echo "<script type=\"text/javascript\">alert(\"Usuario Errado o Contraseña Errada\");</script>"; 
    echo "exitos";
}
else{
    
    if($estadouser==1){
        header("location:menuInicio.php");
    }else{
        echo "<script type=\"text/javascript\">alert(\"Usuario con estado: INACTIVO \");</script>";
        header("location:index.php?fallo=true");
    }
} 
    
pg_free_result($resultado) ;
pg_close($con);


?>