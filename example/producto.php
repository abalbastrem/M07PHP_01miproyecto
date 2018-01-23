

<?php
require("con.php");
//https://dev.mysql.com/doc/refman/5.7/en/option-files.html




?>
<?php 
//SELECT y MOSTRAR
$id = $_GET['id'] ?: '';
$sql = "SELECT * FROM productos where id=".$_GET['id']."";

$stmt = $conn->prepare("SELECT * FROM productos WHERE id=?"); //Consulta
$stmt->bind_param("i",$id);//Datos
$stmt->execute();
$stmt->bind_result($a,$b,$c,$d);


while ($stmt->fetch()) {
    
    echo " id: $a";
    echo " name: $b";
    
}
$stmt->free_result();
$conn->close();














?> 