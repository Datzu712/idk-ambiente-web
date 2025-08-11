<!-- Modal Actualizar Cita -->
<div class="modal fade" id="modalActualizarCita" tabindex="-1" aria-labelledby="modalActualizarCitaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="modalActualizarCitaLabel">Actualizar Cita</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form id="formActualizarCita" class="needs-validation" novalidate>
          <input type="hidden" id="idUpd" name="id" />
          <div class="mb-3">
            <label for="nombre_pacienteUpd" class="form-label">Nombre Paciente</label>
            <input type="text" class="form-control" id="nombre_pacienteUpd" name="nombre_paciente" required />
            <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
          </div>

          <div class="mb-3">
            <label for="fechaUpd" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fechaUpd" name="fecha" required />
            <div class="invalid-feedback">Ingrese la fecha.</div>
          </div>

          <div class="mb-3">
            <label for="horaUpd" class="form-label">Hora</label>
            <input type="time" class="form-control" id="horaUpd" name="hora" required />
            <div class="invalid-feedback">Ingrese la hora.</div>
          </div>

          <div class="mb-3">
            <label for="estadoUpd" class="form-label">Estado</label>
            <select class="form-select" id="estadoUpd" name="estado" required>
              <option value="pendiente">Pendiente</option>
              <option value="confirmada">Confirmada</option>
              <option value="cancelada">Cancelada</option>
            </select>
            <div class="invalid-feedback">Seleccione un estado.</div>
          </div>

          <div class="mb-3">
            <label for="nombre_usuarioUpd" class="form-label">Nombre Usuario</label>
            <input type="text" class="form-control" id="nombre_usuarioUpd" name="nombre_usuario" required />
            <div class="invalid-feedback">Ingrese el nombre del usuario.</div>
          </div>

          <button type="submit" class="btn btn-success w-100">Actualizar Cita</button>
        </form>
      </div>
    </div>
  </div>
</div>
