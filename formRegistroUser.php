<?php 
    include './sessionStart.php';
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <?php include 'headLib.html';?>
        <title>Gestión de usuario</title>
    </head>    

    <body>  
        <div class="contenedorMainInicio">
            <div class="subcontenedorInicio">
                <!--menu inicio -->                
                    <?php           
                        include './encabezadoMenuMain.php';
                    ?>     
                <!-- fin menu-->            

                <!-- INICIO FORMULARIO   -->
                <div class="tituloForm">
                    <h3>Usuario</h3>
                </div>

                <div class="contenedorControlesForm">









                </div>
                <!-- INICIO FORMULARIO   -->
            </div>
        </div>
        
        <?php
        include './derechosAutor.html';
        ?>        
        
    </body>

</html>