<?php
    require_once("./src/conexion.php");
    
    date_default_timezone_set('America/Guayaquil');
    $fecha_actual = date("Y-m-d");
    $rand = rand();
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@200&family=Signika+Negative&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    
</head>

<body>


    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="#">
                    <img src="img/proyectoLogo.png" alt="logo proyecto">
                </a>


                <nav id="navegacion" class="navegacion">
                   

                    <a href="turnos.php">Ver turnos</a>
                    <a href="login.php">Ver tu historial de turno</a>
                    


                </nav>
            </div>
        </div>
    </header>
   
    <h2 style="text-align:center; margin-top:3rem;">Ventanilla</h2>
    
    <section class="container" style="margin-top: 3rem;">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <form method="POST" id="formDatos" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-12"  >
                                <!--  -->
                                <?php
                                    $sql="SELECT * FROM turno WHERE id = (SELECT MAX(id) from turno)";
                                    $result=mysqli_query($conexion,$sql);
                                    
                                    while($mostrar=mysqli_fetch_array($result)){
                                    
                                ?>
                                

                                <input type="hidden" value="<?php echo $mostrar['id']?>" name="id"></input>

                                <div class="form-group form-row">
                                   
                                    <label for="" class="col-sm-2 col-form-label">Nombre:</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" required type="text" id="nombre" value="<?php echo $mostrar['nombre']?>" disabled>
                                        </div>
                            
                                </div>
                                <div class="form-group form-row">
                                        <label for="" style="margin-left: 2" class="col-sm-2">Area:</label>
                                        <div class="col-sm-6">
                                            <select required class="form-control" id="area" disabled>
                                                <option value="<?php echo $mostrar['area']?>"><?php echo $mostrar['area']?></option>
                                            </select>
                                        </div>
                                
                                </div>

                                <div class="form-group form-row">
                                        <label for="" style="margin-left: 2" class="col-sm-2">Trámite:</label>
                                        <div class="col-sm-6">
                                            <select required class="form-control" id="tramite" disabled>
                                                <option value="<?php echo $mostrar['tramite']?>"><?php echo $mostrar['tramite']?></option>



                                            </select>
                                        </div>
                                
                                </div>
                                
                                <div class="form-group form-row">
                                        <label for="" style="margin-left: 2" class="col-sm-2">Observacion:</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control txt" rows="5" name="notes" id="observacion" disabled placeholder="Ingrese su observación"><?php echo $mostrar['observacion']?></textarea>
                                        </div>
                                
                                </div>

                                <div class="form-group form-row">
                                        <label for="" style="margin-left: 2" class="col-sm-2">Comentario:</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control txt" rows="5" name="notes" id="comentario" placeholder="Ingrese comentario"></textarea>
                                        </div>
                                
                                </div>

                                <div class="form-group form-row">
                                        <label for="" class="col-sm-2">Archivo:</label>
                                        <div class="col-sm-4">
                                            <input type="file" class="form-control " id="image" name="image">
                                        </div>
                                
                                </div>
                                <?php
                                    }

                                ?>
                            </div>
                        
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-success btn-lg">Siguiente</button>
                                <button class="btn btn-danger btn-lg">Saltar</button>

                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </section>

    <br>
    <br>
    <br>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="#">¿Quienes somos?</a>
                <a href="#">Terminos y Condiciones</a>
                <a href="#">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>
    <script src="./js/index.js?v=<?= $rand ?>"></script>
 






</body>

</html>
