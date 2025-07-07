<form id="formRegistro" action="" method="POST">
    <label for="nombre">Nombre del paciente:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" required><br>

    <label for="identificacion">Identificación:</label>
    <input type="text" id="identificacion" name="identificacion" required><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required><br>

    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo" required>
        <option value="">Seleccione</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select><br>

    <label for="sintomas">Síntomas:</label>
    <input type="text" id="sintomas" name="sintomas" required><br>

    <label for="posibleAfliccion">Posible aflicción:</label>
    <input type="text" id="posibleAfliccion" name="posibleAfliccion" required><br>

    <label for="diagnostico">Diagnóstico:</label>
    <input type="text" id="diagnostico" name="diagnostico" required><br>

    <label for="fecha">Fecha de Ingreso:</label>
    <input type="date" id="fecha" name="fecha" required><br>

    <button type="submit">Guardar Registro</button>
</form>
