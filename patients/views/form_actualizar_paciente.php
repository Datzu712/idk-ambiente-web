<!-- Modal Actualizar Paciente -->
<div class="modal fade" id="modalActualizarPaciente" tabindex="-1" aria-labelledby="modalActualizarPacienteLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="modalActualizarPacienteLabel">Actualizar Paciente</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form id="formActualizar" class="needs-validation" novalidate>
            <input type="hidden" id="idUpd" name="id">
            <div class="mb-3">
                <label for="nombreUpd" class="form-label">Nombre del paciente:</label>
                <input type="text" class="form-control" id="nombreUpd" name="nombre" required>
                <div class="invalid-feedback">Por favor ingresa el nombre.</div>
            </div>
            <div class="mb-3">
                <label for="apellidosUpd" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" id="apellidosUpd" name="apellidos" required>
                <div class="invalid-feedback">Por favor ingresa los apellidos.</div>
            </div>
            <div class="mb-3">
                <label for="identificacionUpd" class="form-label">Identificación:</label>
                <input type="text" class="form-control" id="identificacionUpd" name="identificacion" required>
                <div class="invalid-feedback">Por favor ingresa la identificación.</div>
            </div>
            <div class="mb-3">
                <label for="edadUpd" class="form-label">Edad:</label>
                <input type="number" class="form-control" id="edadUpd" name="edad" required>
                <div class="invalid-feedback">Por favor ingresa la edad.</div>
            </div>
            <div class="mb-3">
                <label for="sexoUpd" class="form-label">Sexo:</label>
                <select class="form-select" id="sexoUpd" name="sexo" required>
                    <option value="">Seleccione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <div class="invalid-feedback">Por favor selecciona el sexo.</div>
            </div>
            <div class="mb-3">
                <label for="sintomasUpd" class="form-label">Síntomas:</label>
                <input type="text" class="form-control" id="sintomasUpd" name="sintomas" required>
                <div class="invalid-feedback">Por favor ingresa los síntomas.</div>
            </div>
            <div class="mb-3">
                <label for="posibleAfliccionUpd" class="form-label">Posible aflicción:</label>
                <input type="text" class="form-control" id="posibleAfliccionUpd" name="posibleAfliccion" required>
                <div class="invalid-feedback">Por favor ingresa la posible aflicción.</div>
            </div>
            <div class="mb-3">
                <label for="diagnosticoUpd" class="form-label">Diagnóstico:</label>
                <input type="text" class="form-control" id="diagnosticoUpd" name="diagnostico" required>
                <div class="invalid-feedback">Por favor ingresa el diagnóstico.</div>
            </div>
            <div class="mb-3">
                <label for="fechaUpd" class="form-label">Fecha de Ingreso:</label>
                <input type="date" class="form-control" id="fechaUpd" name="fecha" required>
                <div class="invalid-feedback">Por favor ingresa la fecha de ingreso.</div>
            </div>
            <button type="submit" class="btn btn-success w-100">Actualizar Paciente</button>
        </form>
      </div>
    </div>
  </div>
</div>
