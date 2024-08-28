<?php
session_start();
include('con_db.php');

// Verificación de permisos de la bodega
if(isset($_SESSION['idBodega'])){
    $sql = "SELECT habilitado FROM bodegas WHERE idBodega = ?";
    $stmt = $conex->prepare($sql);
    $stmt->bind_param('i', $_SESSION['idBodega']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result) {
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if($user['habilitado'] != 1){
                $_SESSION['notificacion'] = "Permisos insuficientes";
                header("Location: index.php");
                exit();
            }
        }
    }
} else {
    $_SESSION['notificacion'] = "Debe iniciar sesión primero";
    header("Location: register.php");
    exit();
}

// Verificación de campos de entrada
if (isset($_POST['nombreVino']) && 
    isset($_POST['descripcion']) && 
    isset($_POST['precioVino']) && 
    isset($_FILES['imagen']) && 
    $_FILES['imagen']['error'] == 0) {

    $nombreVino = $_POST['nombreVino'];
    $descripcion = $_POST['descripcion'];
    $precioVino = $_POST['precioVino'];
    
    // Procesar la imagen
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    // Preparar e insertar el registro en la base de datos
    $sql = "INSERT INTO vinos (nombreVino, descripcion, precio, imagen, idBodega) 
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conex->prepare($sql);
    $bodega = $_SESSION['idBodega'];

    // Verificar que la imagen se ha leído correctamente
    if ($imagen !== false) {
        $stmt->bind_param("ssdsi", $nombreVino, $descripcion, $precioVino, $imagen, $bodega);
        $result = $stmt->execute();

        if ($result) {
            $_SESSION['notificacion'] = "Registro insertado con éxito.";
        } else {
            $_SESSION['notificacion'] = "Error al insertar el registro: " . $stmt->error;
        }
    } else {
        $_SESSION['notificacion'] = "Error al procesar la imagen.";
    }

    $stmt->close();
    $conex->close();
    
    header('Location: cargarVinos.php');
    exit();

} else {
    $_SESSION['notificacion'] = 'Complete todos los datos correctamente.';
    header('Location: cargarVinos.php');
    exit();
}
