<?php
session_start();
include ("con_db.php");
if (isset($_POST['nombre_bodega']) && 
    isset($_POST['password']) && 
    isset($_POST['confirm_password']) && 
    isset($_POST['pais']) && 
    isset($_POST['postal']) && 
    isset($_POST['ciudad']) && 
    isset($_POST['calle']) && 
    isset($_POST['calle_num']) && 
    isset($_POST['email']) && 
    isset($_POST['telefono'])) {
    $nombreBodega = $_POST['nombre_bodega'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $pais = $_POST['pais'];
    $codigoPostal = $_POST['postal'];
    $ciudad = $_POST['ciudad'];
    $calle = $_POST['calle'];
    $numeroCalle = $_POST['calle_num'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    if($password==$confirmPassword){
        
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO bodegas (nombreBodega,password, emailBodega, pais, ciudad, calle, numeroCalle, codigoPostal, numerotelefono, habilitado) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conex->prepare($sql);
        $habilitado = 2; 
        $stmt->bind_param("sssssssssi", $nombreBodega, $hashed_password, $email, $pais, $ciudad, $calle, $numeroCalle, $codigoPostal, $telefono, $habilitado);

        if ($stmt->execute()) {
            $_SESSION['notificacion']= "Registro insertado con éxito.";
            header('Location: register.php');
        } else {
            $_SESSION['notificacion']= "Error al insertar el registro: " . $stmt->error;
            header('Location: register.php');
        }

        $stmt->close();
        $conex->close();
    }


} else {
    $_SESSION['Complete todos los datos'];            
    header('Location: register.php');
}
