<?php

function new_user($username,$email,$password,$con) {
    
    echo "inserting new user...<br>";
    
    $insert = "INSERT INTO users(email, name, password) VALUES ('".$email."','".$username."',md5('".$password."'))";

    if ( $con->query($insert) === TRUE ) {
        echo "OK<br> Pots anar al login";
        header("location: ../views/form_login.php");
    } else {
        echo "Error: " . $con->error;
    }   
    echo "check";
        
}

function delete_user($user,$con) {
    require_once "../bean/Usuario.php";
    
    echo "deleting user " . $user->getName() . "...";
    
    $sql = "DELETE FROM users WHERE name='" . $user->getName() . "'";
    if ( $con->query($sql) === TRUE )
        echo "OK: user deleted";
        else
            echo "Error: " . $con->error;
}

function edit_user($user,$newemail,$newpassword,$con) {
    
    echo "editing user " . $user->getName() . "...";
    
    $sql = "UPDATE users SET email = '$newemail', password = md5('$newpassword') WHERE name='" . $user->getName() . "' AND password = '" . $user->getPassword() . "'";
    if ( $con->query($sql) === TRUE ) {
        echo "OK: user deleted";
        session_start();
    } else {
        echo "Error: " . $con->error;
    }
}


?>