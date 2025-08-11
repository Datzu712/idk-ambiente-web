<div class="modal fade" id="modalActualizarVacuna" tabindex="-1" aria-labelledby="modalActualizarVacunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalActualizarVacunaLabel"><i class="bi bi-eyedropper"></i> Actualizar Vacuna</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body container">
                <form id="formActualizarVacuna" class="needs-validation row" novalidate>
                    <input type="hidden" id="idUpd" name="id">

                    <div class="mb-3 col-6">
                        <label for="nombre_pacienteUpd" class="form-label"><i class="bi bi-person"></i> Nombre Paciente:</label>
                        <input type="text" class="form-control" id="nombre_pacienteUpd" name="nombre_paciente" placeholder="Ejemplo: Juan Pérez" required>
                        <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="nombre_vacunaUpd" class="form-label"><i class="bi bi-capsule"></i> Nombre Vacuna:</label>
                        <input type="text" class="form-control" id="nombre_vacunaUpd" name="nombre_vacuna" placeholder="Ejemplo: COVID-19" required>
                        <div class="invalid-feedback">Ingrese el nombre de la vacuna.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="fecha_aplicacionUpd" class="form-label"><i class="bi bi-calendar-event"></i> Fecha Aplicación:</label>
                        <input type="date" class="form-control" id="fecha_aplicacionUpd" name="fecha_aplicacion" required>
                        <div class="invalid-feedback">Ingrese la fecha de aplicación.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="dosisUpd" class="form-label"><i class="bi bi-droplet"></i> Dosis:</label>
                        <input type="text" class="form-control" id="dosisUpd" name="dosis" placeholder="Ejemplo: 1ra dosis" required>
                        <div class="invalid-feedback">Ingrese la dosis.</div>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="observacionesUpd" class="form-label"><i class="bi bi-journal-text"></i> Observaciones:</label>
                        <textarea class="form-control" id="observacionesUpd" name="observaciones" placeholder="Ejemplo: Sin reacciones adversas"></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success w-45"><i class="bi bi-arrow-repeat"></i> Actualizar Vacuna</button>
                        <button type="reset" class="btn btn-secondary w-45"><i class="bi bi-x-circle"></i> Limpiar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
