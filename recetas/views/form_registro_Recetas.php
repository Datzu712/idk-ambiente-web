<div class="modal fade" id="modalRegistroReceta" tabindex="-1" aria-labelledby="modalRegistroRecetaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalRegistroRecetaLabel"><i class="bi bi-file-medical"></i> Registrar Receta Médica</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body container">
                <form id="formRegistroReceta" class="needs-validation row" novalidate>

                    <div class="mb-3 col-6">
                        <label for="nombre_paciente" class="form-label"><i class="bi bi-person"></i> Nombre Paciente:</label>
                        <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" placeholder="Ejemplo: Juan Pérez" required>
                        <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="nombre_medico" class="form-label"><i class="bi bi-person-badge"></i> Nombre Médico:</label>
                        <input type="text" class="form-control" id="nombre_medico" name="nombre_medico" placeholder="Ejemplo: Dr. López" required>
                        <div class="invalid-feedback">Ingrese el nombre del médico.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="medicamento" class="form-label"><i class="bi bi-capsule"></i> Medicamento:</label>
                        <input type="text" class="form-control" id="medicamento" name="medicamento" placeholder="Ejemplo: Paracetamol" required>
                        <div class="invalid-feedback">Ingrese el medicamento.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="dosis" class="form-label"><i class="bi bi-droplet"></i> Dosis:</label>
                        <input type="text" class="form-control" id="dosis" name="dosis" placeholder="Ejemplo: 500 mg" required>
                        <div class="invalid-feedback">Ingrese la dosis.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="frecuencia" class="form-label"><i class="bi bi-clock"></i> Frecuencia:</label>
                        <input type="text" class="form-control" id="frecuencia" name="frecuencia" placeholder="Ejemplo: Cada 8 horas" required>
                        <div class="invalid-feedback">Ingrese la frecuencia.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="fecha" class="form-label"><i class="bi bi-calendar-event"></i> Fecha:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                        <div class="invalid-feedback">Ingrese la fecha.</div>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="observaciones" class="form-label"><i class="bi bi-journal-text"></i> Observaciones:</label>
                        <textarea class="form-control" id="observaciones" name="observaciones" placeholder="Ejemplo: Tomar después de las comidas"></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary w-45"><i class="bi bi-save"></i> Guardar Receta</button>
                        <button type="reset" class="btn btn-secondary w-45"><i class="bi bi-x-circle"></i> Limpiar Formulario</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
