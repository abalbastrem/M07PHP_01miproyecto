<?php
require_once '../model/UserPDO.php';
require_once '../bean/Usuario.php';
require_once '../bd/Conectar.php';

$conectar = new Conectar();
$con = $conectar->getConnexion();

$user = get_user($_POST['user'], $_POST['pass'], $con);

session_start();
$_SESSION['login_user'] = $user;

// while ($stmt->fetch()) {
//     echo "inside fetch";
//     echo $id;
//     echo $name;
//     echo $email;
//     echo $password;
    
//     $user = new Usuario($id, $name, $email, $password);
// }

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