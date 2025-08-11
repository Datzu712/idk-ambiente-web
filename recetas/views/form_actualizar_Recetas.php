<!-- Modal Actualizar Receta -->
<div class="modal fade" id="modalActualizarReceta" tabindex="-1" aria-labelledby="modalActualizarRecetaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="modalActualizarRecetaLabel">Actualizar Receta Médica</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form id="formActualizarReceta" class="needs-validation" novalidate>
          <input type="hidden" id="idUpd" name="id" />
          <div class="mb-3">
            <label for="nombre_pacienteUpd" class="form-label">Nombre Paciente:</label>
            <input type="text" class="form-control" id="nombre_pacienteUpd" name="nombre_paciente" required />
            <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
          </div>
          <div class="mb-3">
            <label for="nombre_medicoUpd" class="form-label">Nombre Médico:</label>
            <input type="text" class="form-control" id="nombre_medicoUpd" name="nombre_medico" required />
            <div class="invalid-feedback">Ingrese el nombre del médico.</div>
          </div>
          <div class="mb-3">
            <label for="medicamentoUpd" class="form-label">Medicamento:</label>
            <input type="text" class="form-control" id="medicamentoUpd" name="medicamento" required />
            <div class="invalid-feedback">Ingrese el medicamento.</div>
          </div>
          <div class="mb-3">
            <label for="dosisUpd" class="form-label">Dosis:</label>
            <input type="text" class="form-control" id="dosisUpd" name="dosis" required />
            <div class="invalid-feedback">Ingrese la dosis.</div>
          </div>
          <div class="mb-3">
            <label for="frecuenciaUpd" class="form-label">Frecuencia:</label>
            <input type="text" class="form-control" id="frecuenciaUpd" name="frecuencia" required />
            <div class="invalid-feedback">Ingrese la frecuencia.</div>
          </div>
          <div class="mb-3">
            <label for="fechaUpd" class="form-label">Fecha:</label>
            <input type="date" class="form-control" id="fechaUpd" name="fecha" required />
            <div class="invalid-feedback">Ingrese la fecha.</div>
          </div>
          <div class="mb-3">
            <label for="observacionesUpd" class="form-label">Observaciones:</label>
            <textarea class="form-control" id="observacionesUpd" name="observaciones"></textarea>
          </div>
          <button type="submit" class="btn btn-success w-100">Actualizar Receta</button>
        </form>
      </div>
    </div>
  </div>
</div>
