<?php
    //EJEMPLO CONEXION Y CREACIÓN DE TABLA
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuario3";
try {
    $conn= new PDO("mysql:host=$servername;dbname=$dbname"
    ,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //creacion tabla SQL
    $sql = "CREATE TABLE usuarios(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        correo VARCHAR(30) NOT NULL,
        telefono VARCHAR(11) NOT NULL,
        password VARCHAR(50) NOT NULL,
        fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        ON UPDATE CURRENT_TIMESTAMP)";
    $conn->exec($sql);
    echo"Tabla usuario creada correctamente";
} catch (PDOException $e) {
    echo $sql ."<br>" . $e->getMessage();
}
$conn = null;
