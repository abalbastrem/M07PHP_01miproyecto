Nombre: <?php echo htmlspecialchars($_POST['nombre']);?> # htmlspecialchars evita els inserts de codi
 Edad: <?php echo $_POST['edad'];?>

<br>

$var = 0.0;
Nombre: <?php 

    if (isset($_POST['nombre'])) {
        echo "declarada";
    }
    if (is_null($_POST['nombre'])) {
        echo "null";
    }
    if (empty($var)) { # var sortirà buida perquè a php 0.0 es considera null
        echo "vacía";
    }
    
    ?>
    
<br>
<br>

DNI: <?php echo htmlspecialchars($_POST['dni']);?> <br>
Nombre: <?php echo htmlspecialchars($_POST['name']);?> <br>
Apellidos: <?php echo htmlspecialchars($_POST['surnames']);?> <br>
Fecha de nacimiento: <?php echo htmlspecialchars($_POST['dob']);?> <br>
Dirección: <?php echo htmlspecialchars($_POST['address']);?> <br>
Sepso: <?php echo htmlspecialchars($_POST['sex']);?> <br>
Teléfono: <?php echo htmlspecialchars($_POST['phone']);?>

<br>