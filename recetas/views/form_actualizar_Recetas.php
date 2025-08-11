<div class="modal fade" id="modalActualizarReceta" tabindex="-1" aria-labelledby="modalActualizarRecetaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalActualizarRecetaLabel"><i class="bi bi-file-medical"></i> Actualizar Receta Médica</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body container">
                <form id="formActualizarReceta" class="needs-validation row" novalidate>
                    <input type="hidden" id="idUpd" name="id">

                    <div class="mb-3 col-6">
                        <label for="nombre_pacienteUpd" class="form-label"><i class="bi bi-person"></i> Nombre Paciente:</label>
                        <input type="text" class="form-control" id="nombre_pacienteUpd" name="nombre_paciente" placeholder="Ejemplo: Juan Pérez" required>
                        <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="nombre_medicoUpd" class="form-label"><i class="bi bi-person-badge"></i> Nombre Médico:</label>
                        <input type="text" class="form-control" id="nombre_medicoUpd" name="nombre_medico" placeholder="Ejemplo: Dr. López" required>
                        <div class="invalid-feedback">Ingrese el nombre del médico.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="medicamentoUpd" class="form-label"><i class="bi bi-capsule"></i> Medicamento:</label>
                        <input type="text" class="form-control" id="medicamentoUpd" name="medicamento" placeholder="Ejemplo: Paracetamol" required>
                        <div class="invalid-feedback">Ingrese el medicamento.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="dosisUpd" class="form-label"><i class="bi bi-droplet"></i> Dosis:</label>
                        <input type="text" class="form-control" id="dosisUpd" name="dosis" placeholder="Ejemplo: 500 mg" required>
                        <div class="invalid-feedback">Ingrese la dosis.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="frecuenciaUpd" class="form-label"><i class="bi bi-clock"></i> Frecuencia:</label>
                        <input type="text" class="form-control" id="frecuenciaUpd" name="frecuencia" placeholder="Ejemplo: Cada 8 horas" required>
                        <div class="invalid-feedback">Ingrese la frecuencia.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="fechaUpd" class="form-label"><i class="bi bi-calendar-event"></i> Fecha:</label>
                        <input type="date" class="form-control" id="fechaUpd" name="fecha" required>
                        <div class="invalid-feedback">Ingrese la fecha.</div>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="observacionesUpd" class="form-label"><i class="bi bi-journal-text"></i> Observaciones:</label>
                        <textarea class="form-control" id="observacionesUpd" name="observaciones" placeholder="Ejemplo: Tomar después de las comidas"></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success w-45"><i class="bi bi-arrow-repeat"></i> Actualizar Receta</button>
                        <button type="reset" class="btn btn-secondary w-45"><i class="bi bi-x-circle"></i> Limpiar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
