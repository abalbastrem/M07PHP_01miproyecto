<?php
session_start();

function getProductos($con) {
    require_once '../bean/Producto.php';

    echo "getting products....<br>";
    
    $sql = "SELECT * FROM productos";
    
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($id,$name,$descripcion,$precio);

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

    // TERMINATES
    $stmt->free_result();
    $con->close();

}

function producto2cesta($cesta,$con) {
    require_once '../bean/Cesta.php';
    
    echo "añadiendo producto a cesta...<br>";
    
    $sql = "INSERT INTO cesta (product_id, cantidad, user_id) VALUES (:product_id, :cantidad, :user_id)";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':product_id',$cesta->getProduct_id());
    $stmt->bindParam(':cantidad',$cesta->getCantidad());
    $stmt->bindParam(':user_id',$cesta->getUser_id());
    
    $stmt->execute();
    
    echo "producto añadido.<br>";
    
    // TERMINATES
    $stmt->free_result();
    $con->close();
}

?>