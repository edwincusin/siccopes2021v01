<?php 
    include './sessionStart.php';
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <?php include 'headLib.html';?>
        <script type="text/javascript" src="./jsValidarCedulaEcu.js"></script>
        <title>Gestión de usuario</title>
    </head>    

    <body>  
        <form action="sqlRegistroUser" method="post">
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
                            <td colspam="2"> <input type="text" id="validarCedulaEcu" size="10" maxlength="10" placeholder="Ingrese cédula" required> </td>
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
                                     <select name="" id="" name="descripcionSexo" required>
                                        <option disabled selected value="">Seleccionar</option>
                                        <?php                                            
                                            require_once ('./sqlcombobox.php'); //* se hace un solo llamado para todo el  documento las consultas de combobox*/                                                                                      
                                            if($numregSexo>0){                                         
                                            while ($row=pg_fetch_array($resultadoSexo)){
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
                                    <select name="descripcionCargo" id="" required>
                                    <option disabled selected value="">Seleccionar</option>
                                        <?php
                                            if($numregEstadoLab>0){
                                                while($row=pg_fetch_array($resultadoCargo)){                                               
                                        ?>
                                            <option value="<?php echo $row['codigo_cargo']; ?>"><?php echo $row['descripcion_cargo']; ?></option>

                                            <?php 
                                                }                                              
                                            }
                                            ?>
                                    </select>
                                </td>
                                
                            </tr>

                            <tr>
                                <td> <label for=""><span>Primer nombre:</span></label> </td>
                                <td> <input type="text" size="17" maxlength="18" placeholder="Primer nombre" required> </td>  
                                <td> <label for=""><span> Fecha registro:</span></label> </td>
                                <td> <input type="date" name="fechaRegistro" disabled value="<?php echo date ("Y-m-d")?>"> &emsp;&emsp; </td>
                            </tr>

                            <tr>
                                <td> <label for=""><span>Contraseña:</span></label> </td>
                                <td> <input type="password" size="17" maxlength="18" placeholder="Mínimo 8 digitos" required> </td>  
                            </tr>

                            <tr>
                                <td> <label for=""><span>Email @:</span></label> </td>
                                <td> <input type="text" size="25" id="input_email" maxlength="39" placeholder="ejemplo18@email.com" required> </span> </td>     
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
                                    <?php
                                            if($numregEstadoLab>0){
                                                while($row=pg_fetch_array($resultadoEstadoLab)){  
                                        ?>
                                        <option value="<?php echo $row['codigo_el']; ?>"><?php echo $row['descripcion_el']; ?></option>

                                        <?php 
                                            }                                              
                                        }
                                        ?>                               
                                
                                </select>
                                &emsp;&emsp;&emsp;&emsp;
                            </td>       
                            
                            <td> <label for=""><span>Tipo de usuario:</span></label> </td>
                            <td>
                                <select name="" id="" required>
                                    <option disabled selected value="">Seleccionar</option>
                                    <?php
                                            if($numregTipoUsuario>0){
                                                while($row=pg_fetch_array($resultadoTipoUsuario)){  
                                        ?>
                                        <option value="<?php echo $row['codigo_tu']; ?>"><?php echo $row['descripcion_tu']; ?></option>

                                        <?php 
                                            }                                              
                                        }
                                        ?>                               
                                
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