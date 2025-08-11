<!-- Modal Registro Receta -->
<div class="modal fade" id="modalRegistroReceta" tabindex="-1" aria-labelledby="modalRegistroRecetaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalRegistroRecetaLabel">Registrar Receta Médica</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form id="formRegistroReceta" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="nombre_paciente" class="form-label">Nombre Paciente:</label>
            <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" required />
            <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
          </div>
          <div class="mb-3">
            <label for="nombre_medico" class="form-label">Nombre Médico:</label>
            <input type="text" class="form-control" id="nombre_medico" name="nombre_medico" required />
            <div class="invalid-feedback">Ingrese el nombre del médico.</div>
          </div>
          <div class="mb-3">
            <label for="medicamento" class="form-label">Medicamento:</label>
            <input type="text" class="form-control" id="medicamento" name="medicamento" required />
            <div class="invalid-feedback">Ingrese el medicamento.</div>
          </div>
          <div class="mb-3">
            <label for="dosis" class="form-label">Dosis:</label>
            <input type="text" class="form-control" id="dosis" name="dosis" required />
            <div class="invalid-feedback">Ingrese la dosis.</div>
          </div>
          <div class="mb-3">
            <label for="frecuencia" class="form-label">Frecuencia:</label>
            <input type="text" class="form-control" id="frecuencia" name="frecuencia" required />
            <div class="invalid-feedback">Ingrese la frecuencia.</div>
          </div>
          <div class="mb-3">
            <label for="fecha" class="form-label">Fecha:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required />
            <div class="invalid-feedback">Ingrese la fecha.</div>
          </div>
          <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones:</label>
            <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Guardar Receta</button>
        </form>
      </div>
    </div>
  </div>
</div>
