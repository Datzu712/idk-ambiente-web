<!DOCTYPE html>
<html lang="en">
<?php include_once "./../layout/head.php" ?>

<body>
    <header>
        <?php include_once  "./../layout/navbar.php" ?>
    </header>

    <main>
        <form action="mostrarPacientes.php" method="POST">
            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : ''; ?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo isset($nombre) ? htmlspecialchars($nombre) : ''; ?>">
            <input type="text" name="apellidos" placeholder="Apellidos" value="<?php echo isset($apellidos) ? htmlspecialchars($apellidos) : ''; ?>">
            <input type="text" name="identificacion" placeholder="Identificación" value="<?php echo isset($identificacion) ? htmlspecialchars($identificacion) : ''; ?>">
            <input type="text" name="sintomas" placeholder="Síntomas" value="<?php echo isset($sintomas) ? htmlspecialchars($sintomas) : ''; ?>">
            <input type="text" name="posibleAfliccion" placeholder="Posible aflicción" value="<?php echo isset($posibleAfliccion) ? htmlspecialchars($posibleAfliccion) : ''; ?>">
            <input type="submit" value="Actualizar">
        </form>
    </main>

</body>

</html>