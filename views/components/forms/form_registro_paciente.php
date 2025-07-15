<form id="formRegistro" class="needs-validation" action="" method="POST" novalidate>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del paciente:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
        <div class="invalid-feedback">Por favor ingresa el nombre.</div>
    </div>
    <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos:</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        <div class="invalid-feedback">Por favor ingresa los apellidos.</div>
    </div>
    <div class="mb-3">
        <label for="identificacion" class="form-label">Identificación:</label>
        <input type="text" class="form-control" id="identificacion" name="identificacion" required>
        <div class="invalid-feedback">Por favor ingresa la identificación.</div>
    </div>
    <div class="mb-3">
        <label for="edad" class="form-label">Edad:</label>
        <input type="number" class="form-control" id="edad" name="edad" required>
        <div class="invalid-feedback">Por favor ingresa la edad.</div>
    </div>
    <div class="mb-3">
        <label for="sexo" class="form-label">Sexo:</label>
        <select class="form-select" id="sexo" name="sexo" required>
            <option value="">Seleccione</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
        <div class="invalid-feedback">Por favor selecciona el sexo.</div>
    </div>
    <div class="mb-3">
        <label for="sintomas" class="form-label">Síntomas:</label>
        <input type="text" class="form-control" id="sintomas" name="sintomas" required>
        <div class="invalid-feedback">Por favor ingresa los síntomas.</div>
    </div>
    <div class="mb-3">
        <label for="posibleAfliccion" class="form-label">Posible aflicción:</label>
        <input type="text" class="form-control" id="posibleAfliccion" name="posibleAfliccion" required>
        <div class="invalid-feedback">Por favor ingresa la posible aflicción.</div>
    </div>
    <div class="mb-3">
        <label for="diagnostico" class="form-label">Diagnóstico:</label>
        <input type="text" class="form-control" id="diagnostico" name="diagnostico" required>
        <div class="invalid-feedback">Por favor ingresa el diagnóstico.</div>
    </div>
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha de Ingreso:</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required>
        <div class="invalid-feedback">Por favor ingresa la fecha de ingreso.</div>
    </div>
    <button type="submit" class="btn btn-primary w-100">Guardar Registro</button>
</form>
