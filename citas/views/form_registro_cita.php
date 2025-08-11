<!-- Modal Registro Cita -->
<div class="modal fade" id="modalRegistroCita" tabindex="-1" aria-labelledby="modalRegistroCitaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalRegistroCitaLabel">Registrar Cita</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form id="formRegistroCita" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="nombre_paciente" class="form-label">Nombre Paciente</label>
            <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" required />
            <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
          </div>

          <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required />
            <div class="invalid-feedback">Ingrese la fecha.</div>
          </div>

          <div class="mb-3">
            <label for="hora" class="form-label">Hora</label>
            <input type="time" class="form-control" id="hora" name="hora" required />
            <div class="invalid-feedback">Ingrese la hora.</div>
          </div>

          <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="estado" name="estado" required>
              <option value="pendiente" selected>Pendiente</option>
              <option value="confirmada">Confirmada</option>
              <option value="cancelada">Cancelada</option>
            </select>
            <div class="invalid-feedback">Seleccione un estado.</div>
          </div>

          <div class="mb-3">
            <label for="nombre_usuario" class="form-label">Nombre Usuario</label>
            <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required />
            <div class="invalid-feedback">Ingrese el nombre del usuario.</div>
          </div>

          <button type="submit" class="btn btn-primary w-100">Guardar Cita</button>
        </form>
      </div>
    </div>
  </div>
</div>
