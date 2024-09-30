<?php
require_once ("bd.php");
if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break; 
            case 'eliminar_registro':
            eliminar_registro();
            break;
            case 'acceso_usuario':
            acceso_usuario();
            break;
		}
	}
    function editar_registro() {
		$conexion=mysqli_connect("localhost","root","","usuario2");
		extract($_POST);
		$consulta="UPDATE usuarios SET nombre = '$nombre', correo = '$correo', telefono = '$telefono',
		password ='$password' WHERE id = '$id' ";
		mysqli_query($conexion, $consulta);
		header('Location: ../views/usuario.php');
    
}
function eliminar_registro() {
    $conexion=mysqli_connect("localhost","root","","usuario2");
    extract($_POST);
    $id = $_POST['id'];
    $consulta="DELETE FROM usuarios WHERE id=$id";
    mysqli_query($conexion, $consulta);
    header('Location: ../views/usuario.php');

}
function acceso_usuario(){
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    //sesion
    session_start();
    $_SESSION['nombre'] = $nombre;
    $conexion =mysqli_connect("localhost","root","","usuario2");
    $consulta = "SELECT * FROM usuarios WHERE nombre='$nombre' AND password='$password'";
    $resultado= mysqli_query($conexion, $consulta);
    $fila = mysqli_num_rows($resultado);
    if($fila){
    header('Location: ../views/usuario.php');
}else{
    header('Location: login.html');
    session_destroy();
    }
}
