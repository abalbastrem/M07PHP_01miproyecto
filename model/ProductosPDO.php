<?php

function getProductos($con) {
    require_once '../bean/Producto.php';

    echo "getting products....<br>";
    
    $sql = "SELECT * FROM productos";
    
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bindColumn(1,$id);
    $stmt->bindColumn(2,$name);
    $stmt->bindColumn(3,$descripcion);
    $stmt->bindColumn(4,$precio);
//     $stmt->bind_result($id,$name,$descripcion,$precio); // Només per mysqli

//     return $stmt;
    
    // BUILD TABLE OF PRODUCTS
    echo "<table>";
    echo "<tr><td>name</td><td>descripcion</td><td>precio</td><td>cantidad a pedir</td><td>añadir a la cesta de compra</td></tr>";
    
    while ($stmt->fetch()) {
        
        $producto = new Producto($id, $name, $descripcion, $precio);
        
        echo "<tr>";
        echo "<form action='../control/controller.php' method='post'>";
        echo "<td>" . $producto->getName() . "</td>";
        echo "<td>" . $producto->getDescripcion() . "</td>";
        echo "<td>" . $producto->getPrecio() . "</td>";
        echo "<td> <input type='text' name='quant'/> </td>";
        echo "<input type='hidden' name='id_producto' value='" . $producto->getId() . "'>";
        echo "<td> <button type='submit' name='add' >Añadir</button> </td>";
        echo "<input type='hidden' name='form' value='add2cesta'>";
        echo "</form>";
        echo "</tr>";
    }
    echo "</table>";
    
    echo "<a href='../views/cesta.php'> Vés a la cistella >></a><br>";
    
    // TERMINATES
    $stmt->free_result();
    $con->close();

}


?>