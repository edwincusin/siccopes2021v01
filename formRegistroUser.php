<?php 
    include './sessionStart.php';
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <?php include 'headLib.html';?>
        <script type="text/javascript" src="./jsValidarEmail.js"></script>
        <title>Gestión de usuario</title>
    </head>    

    <body>  
        <form action="" method="post">
            <div class="contenedorMainInicio">
                <div class="subcontenedorInicio">
                    <!--menu inicio -->                
                        <?php           
                            include './encabezadoMenuMain.php';
                        ?>     
                    <!-- fin menu-->            

                    <!-- INICIO FORMULARIO   -->
                    <div class="tituloForm">
                        <h2>Control de usuarios</h2>
                    </div>

                    <div class="contenedorControlesForm">

                    
                    <table>
                        <tr>
                            <td> <label for=""><span>N° Cédula:</span></label> </td>
                            <td colspam="2"> <input type="text" size="10" maxlength="10" placeholder="Ingrese cédula" required> </td>
                            <td> <input type="submit" value="&#128270; Buscar"> </td>
                        </tr>
                    </table>
                
            
                    <fieldset  > <legend>Datos usuario</legend>

                        <table>
                            <tr>
                                <td> <label for=""><span>N° Cédula:</span></label> </td>
                                <td> <input type="text" size="10" maxlength="10"  placeholder="Cédula" required> </td>
                            
                                <td> <label for=""><span>Sexo:</span></label> </td>
                                <td>
                                    
                                        <?php                                            
                                            require_once ('conex.php');
                                            $conexion=conectarBD();
                                            $consulta="SELECT * FROM public.sexo";
                                            $resultado=pg_query($conexion,$consulta) or die ("error al realizar la consulta en la tabla sexo de la BBD" );
                                            $numreg=pg_num_rows($resultado);
                                            
                                            if($numreg>0){                                           

                                        ?>
                                        <select name="" id="" name="descripcionSexo" required>
                                        <option disabled selected value="">Seleccionar</option>

                                        <?php

                                            while ($row=pg_fetch_array($resultado)){
                                        ?> 
                                            <option value="<?php echo $row['codigo_sexo']; ?>"><?php echo $row['descripcion_sexo']; ?></option>

                                        <?php   
                                            }
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td> <label for=""><span>Apellido paterno:</span></label> </td>
                                <td> <input type="text" size="17" maxlength="18" placeholder="Primer apellido" required> </td>
                                <td> <label for=""><span>Cargo:</span></label> </td>
                                <td>
                                    <select name="" id="" required>
                                        <option disabled selected value="">Seleccionar</option>
                                    </select>
                                </td>
                                
                            </tr>

                            <tr>
                                <td> <label for=""><span>Primer nombre:</span></label> </td>
                                <td> <input type="text" size="17" maxlength="18" placeholder="Primer nombre" required> </td>  
                                <td> <label for=""><span> Fecha registro:</span></label> </td>
                                <td> <input type="date" min="1961-12-31" max="2003-12-31"> &emsp;&emsp; </td>
                            </tr>

                            <tr>
                                <td> <label for=""><span>Contraseña:</span></label> </td>
                                <td> <input type="password" size="17" maxlength="18" placeholder="Mínimo 8 digitos" required> </td>  
                            </tr>

                            <tr>
                                <td> <label for=""><span>Email @:</span></label> </td>
                                <td> <input type="text" size="25" maxlength="39" placeholder="ejemplo18@email.com" required> </span> </td>     
                            </tr>                                                      

                        </table>
                        
                            
                </fieldset>

                <fieldset> <legend>Rol</legend>
                    <table>
                        <tr>
                            <td> <label for=""><span>Estado:</span></label> </td>
                            <td>
                                <select name="" id="" required>
                                    <option disabled selected value="">Seleccionar</option>
                                </select>
                                &emsp;&emsp;
                            </td>       
                            
                            <td> <label for=""><span>Tipo de usuario:</span></label> </td>
                            <td>
                                <select name="" id="" required>
                                    <option disabled selected value="">Seleccionar</option>
                                </select>
                                &emsp;&emsp;
                            </td> 
                                                                
                        </tr>
                                    
                    </table>
                </fieldset>

                <input type="submit" value="&#10004; Guardar">
                <input type="submit" value="&#128221; Modificar cambios">   

                    </div>
                    <!-- INICIO FORMULARIO   -->
                </div>
            </div>
        </form>
        <?php
        include './derechosAutor.html';
        ?>        
        
    </body>

</html>