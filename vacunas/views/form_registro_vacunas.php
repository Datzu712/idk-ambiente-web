<div class="modal fade" id="modalRegistroVacuna" tabindex="-1" aria-labelledby="modalRegistroVacunaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalRegistroVacunaLabel">Registrar Vacuna</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form id="formRegistroVacuna" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="nombre_paciente" class="form-label">Nombre Paciente</label>
            <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" required>
            <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
          </div>
          <div class="mb-3">
            <label for="nombre_vacuna" class="form-label">Nombre Vacuna</label>
            <input type="text" class="form-control" id="nombre_vacuna" name="nombre_vacuna" required>
            <div class="invalid-feedback">Ingrese el nombre de la vacuna.</div>
          </div>
          <div class="mb-3">
            <label for="fecha_aplicacion" class="form-label">Fecha Aplicación</label>
            <input type="date" class="form-control" id="fecha_aplicacion" name="fecha_aplicacion" required>
            <div class="invalid-feedback">Ingrese la fecha de aplicación.</div>
          </div>
          <div class="mb-3">
            <label for="dosis" class="form-label">Dosis</label>
            <input type="text" class="form-control" id="dosis" name="dosis" required>
            <div class="invalid-feedback">Ingrese la dosis.</div>
          </div>
          <div class="mb-3">
            <label for="observaciones" class="form-label">Observaciones</label>
            <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Guardar Vacuna</button>
        </form>
      </div>
    </div>
  </div>
</div>
