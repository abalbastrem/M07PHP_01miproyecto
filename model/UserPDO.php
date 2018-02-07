<?php

function get_user($name2check,$password2check,$con) {
    
    echo "getting user profile...<br>";
    
    // Comparamos el formulario con la TABLE 'users' de la BBDD
    $sql = "SELECT * FROM users WHERE name=:username AND password = md5(:password) LIMIT 1";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':username', $name2check);
    $stmt->bindParam(':password', $password2check);
    $stmt->execute();
    
    echo $name2check;
    echo $password2check;
    
    $stmt->bindColumn(1,$id);
    $stmt->bindColumn(2,$name);
    $stmt->bindColumn(3,$email);
    $stmt->bindColumn(4,$password);
    
    while ($stmt->fetch()) { // Mi objetivo es quitar este while para hacerlo en validar_login
    
        echo "inside fetch";
    
        $user = new Usuario($id, $name, $email, $password);
    
        echo "<br>session:<br>";
        echo $user->getId()."<br>";
        echo $user->getName()."<br>";
        echo $user->getEmail()."<br>";
        echo $user->getPassword()."<br>";
    
    }
    
    return $stmt;
    
}

function new_user($name,$email,$password,$con) {
    
    echo "inserting new user...<br>";
    
    $sql = "INSERT INTO users(email, name, password) VALUES (:email,:name,md5(:password))";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':password',$password);
    
    $stmt->execute();

    // COMPRUEBA SI HA HABIDO ROWS AFECTADOS
    if ($stmt->rowCount()){
        echo 'Success: At least 1 row was affected.';
    } else{
        echo 'Failure: 0 rows were affected.';
    }
        
}

function delete_user($user,$con) {
    require_once "../bean/Usuario.php";
    
    echo "deleting user " . $user->getName() . "...";
    
    $sql = "DELETE FROM users WHERE name=:name AND password=:password";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':name',$user->getName());
    $stmt->bindParam(':password',$user->getPassword());
    
    $stmt->execute();
    
    // COMPRUEBA SI HA HABIDO ROWS AFECTADOS
    if ($stmt->rowCount()){
        echo 'Success: At least 1 row was affected.';
    } else{
        echo 'Failure: 0 rows were affected.';
    }
    
//     if ( $con->query($sql) === TRUE )
//         echo "OK: user deleted";
//         else
//             echo "Error: " . $con->error;
}

function edit_user($user,$newemail,$newpassword,$con) {
    
    echo "editing user " . $user->getName() . "...";

    $sql = "UPDATE users SET email=:newemail, password=md5(:newpassword) WHERE name=:name AND password=:password";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':newemail',$newemail);
    $stmt->bindParam(':newpassword',$newpassword);
    $stmt->bindParam(':name',$user->getName());
    $stmt->bindParam(':password',$user->getPassword());
    
    $stmt->execute();
    
    // COMPRUEBA SI HA HABIDO ROWS AFECTADOS
    if ($stmt->rowCount()){
        echo 'Success: At least 1 row was affected.';
    } else{
        echo 'Failure: 0 rows were affected.';
    }
}


?>