<?php
require_once '../bean/Usuario.php';
require_once '../bd/Conectar.php';

$conectar = new Conectar();
$con = $conectar->getConnexion();

// Comparamos el formulario con la TABLE 'users' de la BBDD
$sql = "SELECT * FROM users WHERE name=:username AND password = md5(:password) LIMIT 1";
$stmt = $con->prepare($sql);
$stmt->bindParam(':username', $_POST['user']);
$stmt->bindParam(':password', $_POST['pass']);
$stmt->execute();

$stmt->bindColumn(1,$id);
$stmt->bindColumn(2,$email);
$stmt->bindColumn(3,$name);
$stmt->bindColumn(4,$password);

while ($stmt->fetch()) {
    $user = new Usuario($id, $name, $email, $password);
    session_start();
    $_SESSION['login_user'] = $user;
    
//     echo "<br>session:<br>";
//     echo $_SESSION['login_user']->getId()."<br>";
//     echo $_SESSION['login_user']->getName()."<br>";
//     echo $_SESSION['login_user']->getEmail()."<br>";
//     echo $_SESSION['login_user']->getPassword()."<br>";
}

// CON MYSQLI
// $result = $con->query($sql);
// if (!$result) {
//     echo 'query inválida: ' . mysql_error();
// } else {
//     $row = mysqli_fetch_array($result);
//     $user = new Usuario($row['user_id'], $row['name'], $row['email'], $row['password']);
//     session_start();
//     $_SESSION['login_user'] = $user;
//     echo "<br>session:<br>";
//     echo $_SESSION['login_user']->getId();
//     echo $_SESSION['login_user']->getName();
//     echo $_SESSION['login_user']->getEmail();
//     echo $_SESSION['login_user']->getPassword()."<br>";
// }

// $stmt->free_result();
// $con->close();

?>