<?php
    session_start();
    error_reporting(0);
    $varsession=$_SESSION['nameuser'];
    if($varsession==null || $varsession==" "){
        echo'<script type="text/javascript">
                alert("Usuario sin identificarse, Ud. no tiene autorizacion para navegar en el aplicativo SICCOPES, soria a la camara");
                window.location.href="index.php";            
                </script>';
             die();
    }
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <?php include 'headLib.html';?>
        <title>Inicio menú</title>
    </head>
    

    <body>  
        <div class="contenedorMainInicio">
            <div class="subcontenedorInicio">
                <!--menu inicio -->                
                    <?php           
                        include './encabezadoMenuMain.php';
                    ?>     
                <!-- fin menu-->
            

                <div id="bienvenido">

                    <img src="./img/LogoEsfoguar.png" alt="">
                    <h1>Evolución en Seguridad y Formación Integral</h1>
                    <h1>
                        ¡Bienvenido!
                    </h1>
                    <h2> a Siccopes</h2>
                    <h3> Versión 0.01</h3>

                </div>
            </div>
        </div>
        
        <?php
        include './derechosAutor.html';
        ?>        
        
    </body>

</html>