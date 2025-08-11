<div class="modal fade" id="modalActualizarVacuna" tabindex="-1" aria-labelledby="modalActualizarVacunaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="modalActualizarVacunaLabel">Actualizar Vacuna</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form id="formActualizarVacuna" class="needs-validation" novalidate>
          <input type="hidden" id="idUpd" name="id">
          <div class="mb-3">
            <label for="nombre_pacienteUpd" class="form-label">Nombre Paciente</label>
            <input type="text" class="form-control" id="nombre_pacienteUpd" name="nombre_paciente" required>
            <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
          </div>
          <div class="mb-3">
            <label for="nombre_vacunaUpd" class="form-label">Nombre Vacuna</label>
            <input type="text" class="form-control" id="nombre_vacunaUpd" name="nombre_vacuna" required>
            <div class="invalid-feedback">Ingrese el nombre de la vacuna.</div>
          </div>
          <div class="mb-3">
            <label for="fecha_aplicacionUpd" class="form-label">Fecha Aplicación</label>
            <input type="date" class="form-control" id="fecha_aplicacionUpd" name="fecha_aplicacion" required>
            <div class="invalid-feedback">Ingrese la fecha de aplicación.</div>
          </div>
          <div class="mb-3">
            <label for="dosisUpd" class="form-label">Dosis</label>
            <input type="text" class="form-control" id="dosisUpd" name="dosis" required>
            <div class="invalid-feedback">Ingrese la dosis.</div>
          </div>
          <div class="mb-3">
            <label for="observacionesUpd" class="form-label">Observaciones</label>
            <textarea class="form-control" id="observacionesUpd" name="observaciones"></textarea>
          </div>
          <button type="submit" class="btn btn-success w-100">Actualizar Vacuna</button>
        </form>
      </div>
    </div>
  </div>
</div>