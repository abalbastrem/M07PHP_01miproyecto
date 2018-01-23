<?php

function getProductos($con) {
    
    echo "getting products....<br>";
    
    $sql = "SELECT * FROM productos";
    
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->bind_result($a,$b,$c,$d);
    
    $button = "<button type='button'>Añadir</button>";
    
    echo "<table>";
    echo "<tr><td>id</td><td>name</td><td>descripcion</td><td>precio</td><td>añadir a la cesta de compra</td></tr>";
    
    while ($stmt->fetch()) {
        
        echo "<tr>";
        echo "<td> $a </td>";
        echo "<td> $b </td>";
        echo "<td> $c </td>";
        echo "<td> $d </td>";
        echo "<td> $button </td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    $stmt->free_result();
    $con->close();
    
}