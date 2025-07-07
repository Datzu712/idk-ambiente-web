<form id="formActualizarPaciente" action="" method="POST">
    <label for="identificacion">Identificación del paciente:</label>
    <input type="text" id="identificacion" name="identificacion" required><br>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos"><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad"><br>

    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo">
        <option value="">Seleccione</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select><br>

    <label for="sintomas">Síntomas:</label>
    <input type="text" id="sintomas" name="sintomas"><br>

    <label for="posibleAfliccion">Posible aflicción:</label>
    <input type="text" id="posibleAfliccion" name="posibleAfliccion"><br>

    <label for="diagnostico">Diagnóstico:</label>
    <input type="text" id="diagnostico" name="diagnostico"><br>

    <label for="fecha">Fecha de Ingreso:</label>
    <input type="date" id="fecha" name="fecha"><br>

    <button type="submit">Actualizar Paciente</button>
</form>
