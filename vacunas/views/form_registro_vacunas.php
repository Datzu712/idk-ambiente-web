<div class="modal fade" id="modalRegistroVacuna" tabindex="-1" aria-labelledby="modalRegistroVacunaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalRegistroVacunaLabel"><i class="bi bi-eyedropper"></i> Registrar Vacuna</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body container">
                <form id="formRegistroVacuna" class="needs-validation row" novalidate>

                    <div class="mb-3 col-6">
                        <label for="nombre_paciente" class="form-label"><i class="bi bi-person"></i> Nombre Paciente:</label>
                        <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" placeholder="Ejemplo: Juan Pérez" required>
                        <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="nombre_vacuna" class="form-label"><i class="bi bi-capsule"></i> Nombre Vacuna:</label>
                        <input type="text" class="form-control" id="nombre_vacuna" name="nombre_vacuna" placeholder="Ejemplo: COVID-19" required>
                        <div class="invalid-feedback">Ingrese el nombre de la vacuna.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="fecha_aplicacion" class="form-label"><i class="bi bi-calendar-event"></i> Fecha Aplicación:</label>
                        <input type="date" class="form-control" id="fecha_aplicacion" name="fecha_aplicacion" required>
                        <div class="invalid-feedback">Ingrese la fecha de aplicación.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="dosis" class="form-label"><i class="bi bi-droplet"></i> Dosis:</label>
                        <input type="text" class="form-control" id="dosis" name="dosis" placeholder="Ejemplo: 1ra dosis" required>
                        <div class="invalid-feedback">Ingrese la dosis.</div>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="observaciones" class="form-label"><i class="bi bi-journal-text"></i> Observaciones:</label>
                        <textarea class="form-control" id="observaciones" name="observaciones" placeholder="Ejemplo: Sin reacciones adversas"></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary w-45"><i class="bi bi-save"></i> Guardar Vacuna</button>
                        <button type="reset" class="btn btn-secondary w-45"><i class="bi bi-x-circle"></i> Limpiar Formulario</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
