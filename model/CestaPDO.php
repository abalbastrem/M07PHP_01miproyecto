<?php

function producto2cesta($cesta,$con) {
    require_once '../bean/Cesta.php';
    
    echo "añadiendo producto " . $cesta->getProduct_id() . " a tu cesta...<br>";

    $sql = "INSERT INTO cesta (product_id, cantidad, user_id) VALUES (:product_id, :cantidad, :user_id)";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':product_id',$cesta->getProduct_id());
    $stmt->bindParam(':cantidad',$cesta->getCantidad());
    $stmt->bindParam(':user_id',$cesta->getUser_id());
    
    $stmt->execute();
    
    echo "producto añadido.<br>";
    
    // TERMINATES
    $stmt->free_result();
}

function getCesta($con) {
    require_once '../bean/Cesta.php';
    require_once '../bean/Usuario.php';
    session_start();
    
    echo "getting your products....<br>";
    
    $sql = "SELECT * FROM cesta WHERE user_id=:uid";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':uid',$_SESSION['login_user']->getId());
    $stmt->execute();

    $stmt->bindColumn(1,$id);
    $stmt->bindColumn(2,$product_id);
    $stmt->bindColumn(3,$cantidad);
    $stmt->bindColumn(4,$user_id);
    
    echo "<table>";
    echo "<tr>";
    echo "<td>ID PRODUCTO</td>";
    echo "<td>CANTIDAD</td>";
    echo "</tr>";
    
    while ($stmt->fetch()) {
        
        $cesta = new Cesta($product_id, $cantidad, $user_id);
        
        echo "<tr><form action='../control/controller.php' method='post'>";
        echo "<td>" . $cesta->getProduct_id() . "</td>";
        echo "<td>" . $cesta->getCantidad() . "</td>";
        echo "<td> <input type='hidden' name='form' value='deleteFromCesta'>";
        echo "<input type='hidden' name='product_id' value='" . $cesta->getProduct_id() . "'>";
        echo "<input type='hidden' name='user_id' value='" . $cesta->getUser_id() . "'>";
        echo "<button type='submit' name='delete' >Borrar producto</button>" . "</td>";
        echo "</form>";
        echo "</tr>";
    }
    echo "<tr><td></td>";
    echo "<td><form action='../control/controller.php' method='post'>";
    echo "<button type='submit' name='delete' >Borrar cesta</button>";
    echo "<input type='hidden' name='form' value='deleteCesta'></td></tr>";
    echo "<input type='hidden' name='user_id' value='" . $cesta->getUser_id() . "'>";
    echo "</table>";
    
    $stmt->free_result();
    
}

function deleteProductFromCesta($user_id,$product_id,$con) {
    echo "deleting product from your shopping cart...<br>";
    
    $sql = "DELETE FROM cesta WHERE product_id=:pid AND user_id=:uid";
    
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':uid',$user_id);
    $stmt->bindParam(':pid',$product_id);
    $stmt->execute();
    
    $stmt->free_result();
}

function deleteCesta($user_id,$con) {
    echo "deleting shopping cart...";
    
    $sql = "DELETE FROM cesta WHERE user_id=:uid";
        
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':uid',$user_id);
    $stmt->execute();
    
    $stmt->free_result();
}

?>