<?php
session_start();
//echo session_id();
//Vamos a validar un usuario
//Comprobar que el ususrio quiere iniciar sesion
if(isset($_POST['iniciar'])){
    //Vamos a iniciar sesion
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    if($usuario == 2021670253 &&$contraseña=='1234'){
        $_SESSION['usuario']=$usuario;
        $_SESSION['login']= 1;
        header("Location: menu.php");
        
    } else 
    echo "Usuario y/o contraseña incorrectos";
}
//Verificar si ya tiene iniciada la sesion
//Si tiene iniciada sesion mandarlo directamente a index.php o al menu
if(isset($_SESSION['login']))
    if($_SESSION['login']==1)
    header("Location: menu.php");
?>