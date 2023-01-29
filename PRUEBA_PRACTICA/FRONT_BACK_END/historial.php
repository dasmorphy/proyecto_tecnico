<?php
require_once("./src/conexion.php");
session_start();
if (!isset($_SESSION['usuario'])){
    header("Location: index.php");
} 
$usuario = $_SESSION['usuario'];


$sql = "SELECT * from usuarios where usuario = '$usuario'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();   
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@200&family=Signika+Negative&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Turnos</title>
    <style>
        table th {
            height: 3rem
        }
        .navegacion a {
            text-decoration: none;
        }
    
        table tr:nth-child(odd) {
            background: #fff;
        }
    </style>
    
</head>

<body>
           
    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="lista.php">
                    <img src="./img/proyectoLogo.png" alt="logo proyecto">
                </a>


                <nav id="navegacion" class="navegacion">
                    <a style="color: white;">Bienvenido <?php echo utf8_decode($row['usuario']); ?></a> 

                    <a href="index.php">Inicio</a>
                    <a href="./src/salirsesion.php" onclick="return ConfirmSession()">Cerrar Sesión</a>


                </nav>
            </div>
        </div>
    </header>

    <div class="container">
        <h2 style="text-align:center; margin-top:3rem;">Historial de Turnos</h2>
        <br>
        <input class= "btn btn-outline-dark" id="imprimir" type="submit" value="Informe">
    </div>
    <br>
     

    <section id="tabla" class="container">
        <br>
        <table class="table">

            <thead class="thead-dark" >

                <tr>
                    <th>Nombre</th>
                    <th>Area</th>
                    <th>Trámite</th>
                    <th>Observacion</th>
                    <th>Estado</th>
        
                </tr>
            </thead>

            <?php
                
                $sql="SELECT * from turno WHERE(estado LIKE '%atendido%')";
                $result=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
                
                <td><?php echo $mostrar['nombre']?></td>
   
                <td><?php echo $mostrar['area']?></td>
                <td><?php echo $mostrar['tramite']?></td>
                <td><?php echo $mostrar['observacion']?></td>
                <td><?php echo $mostrar['estado']?></td>
                
            </tr>

            <?php
            }

            ?>
        </table>
    </section>

    <br>
    <br>
    <br>
    <br><br><br>
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


<script src="./js/modal.js?v=<?= $rand ?>"></script>

<script type="text/javascript">

    function ConfirmSession() {
        var respuesta = confirm("¿Está seguro que desea cerrar sesión?");
        if (respuesta == true) {
            //header("location: index.php")
            return true;
        } else {
            return false;
        }
    }
</script>

</body>

</html>
