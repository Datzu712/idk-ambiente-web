<!DOCTYPE html>
<html lang="en">


<?php include_once "../components/header/head.php" ?>


<body>
    <header>
        <h2>Apartado para la creacion de productos</h2>
        <?php include_once  "./../layout/navbar.php" ?>
    </header>
    <?php include_once "./../layout/sidebar.php" ?>

    <form action="mostrarPacientes.php" method="POST">
        <input type="text" name="nombre" placeholder="Agrega el nombre del paciente">
        <input type="text" name="apellidos" placeholder="Agrega los apellidos del paciente">
        <input type="text" name="identificacion" placeholder="Agrega la identificacion del paciente">
        <input type="text" name="sintomas" placeholder="Agrega los sintomas del paciente">
        <input type="text" name="posibleAfliccion" placeholder="Agrega las posibles enfermedades paciente">
        <input type="submit" value="Agregar">
    </form>
</body>

</html>