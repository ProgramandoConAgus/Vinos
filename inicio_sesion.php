<?php
session_start();
include ("con_db.php");
if (isset($_POST['nombre_bodega']) && 
    isset($_POST['email'])&&  
    isset($_POST['password'])){
    $nombreBodega = $_POST['nombre_bodega'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM bodegas WHERE emailBodega = ?";
    $stmt = $conex->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result) {
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
			if($user['nombreBodega']==$nombreBodega && password_verify($password, $user['password'])&& $user['emailBodega']==$email){
                $_SESSION['notificacion']="Session iniciada correctamente";
                $_SESSION['nombreBodega']=$nombreBodega;
                $_SESSION['emailBodega']=$email;
                $_SESSION['idBodega']=$user['idBodega'];
                header("Location: index.php");
            }
            else{
                $_SESSION['notificacion']="Credenciales incorrectas";
                header("Location: register.php");
            }
        }
    }

    $stmt->close();
    $conex->close();


} else {
    $_SESSION['notificacion']="Complete todos los campos";
    header('Location: register.php');
}
