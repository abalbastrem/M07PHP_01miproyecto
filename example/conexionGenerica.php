<?php 
try{
    $username = "admin";
    $password = "123456";
    $dbname="test1";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $db = new PDO($dsn, $username, $password);
    
    #$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    #$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $db->prepare("SELECT * FROM users where name=:nombre and email=:email");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $nombre="victor";
    $mail="v@gmail.com";
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindValue(':email', $mail);
    
    
    $stmt->execute(array(':nombre'=>$nombre,':email'=>$mail));
    //$users=new User($nombre,$email);
    //$stmt->execute(array($user));
    
    error_log("asdasdasdasd"."\n", 3, '/tmp/logs.txt');
    file_put_contents('/tmp/logs.txt', $nombre,FILE_APPEND);
    chmod($filename, 0664);
    while ($row = $stmt->fetch()){
        echo "Nombre: {$row['name']}<br>";
        echo "Email: {$row['email']}<br>";
    }
    
    
}catch(PDOException $e){
    echo $e->getMessage();
}

?>

