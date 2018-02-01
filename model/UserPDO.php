<?php

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