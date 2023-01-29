<?php
include ("./conexion.php");

$objetos =  json_decode($_POST["json"], true);

foreach($objetos['data'] as $objeto){
    $nombre= $objeto["nombre"];
    $area= $objeto["area"];
    $tramite= $objeto["tramite"];
    $observacion= $objeto["observacion"];
    $estado= $objeto["estado"];
    //$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    



    $insertar = "INSERT INTO  turno (nombre,area, tramite, observacion, estado) VALUES 
    ('$nombre', '$area', '$tramite', '$observacion', '$estado')";
    //var_dump($objeto);

    $resultado = mysqli_query($conexion, $insertar);

    if ($resultado){
        echo "Turno registrado!";
        
        
        
    }
    
    
}


?>