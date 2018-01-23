<?php
$servername="localhost";
$username="admin";
$password="123456";
$database="test1";

$con = new mysqli($servername,$username,$password,$database);

// Conexión
if ( $con->connect_error )
    die ("Fallo en la conexión " . $con -> connect_error);

echo "Conexión establecida<br>";

// Consulta GET
$sql = "SELECT * FROM users";
$result = $con->query($sql);

if ($result->num_rows>0) {
    while($fila = $result->fetch_assoc()) {
        echo "email: " . $fila["email"] . "<br/>Name: " . $fila["name"] . "<br/>password: " . $fila["password"]. "<br>";
    }
} else {
    echo "sin resultados";
}

// Consulta INSERT
$insert = "INSERT INTO users(email, name, password) VALUES ('ab@gmail.com','albert',md5('123456'))";

if ( $con->query($insert) === TRUE )
    echo "OK";
else
    echo "Error " . $con->error;


$con->close();

?>