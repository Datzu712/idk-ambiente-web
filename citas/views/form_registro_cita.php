<div class="modal fade" id="modalRegistroCita" tabindex="-1" aria-labelledby="modalRegistroCitaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalRegistroCitaLabel"><i class="bi bi-calendar-check"></i> Registrar Cita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body container">
                <form id="formRegistroCita" class="needs-validation row" novalidate>

                    <div class="mb-3 col-6">
                        <label for="nombre_paciente" class="form-label"><i class="bi bi-person"></i> Nombre Paciente:</label>
                        <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" placeholder="Ejemplo: Juan Pérez" required>
                        <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="nombre_usuario" class="form-label"><i class="bi bi-person-badge"></i> Nombre Usuario:</label>
                        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Ejemplo: Dr. López" required>
                        <div class="invalid-feedback">Ingrese el nombre del usuario.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="fecha" class="form-label"><i class="bi bi-calendar-event"></i> Fecha:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                        <div class="invalid-feedback">Ingrese la fecha.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="hora" class="form-label"><i class="bi bi-clock"></i> Hora:</label>
                        <input type="time" class="form-control" id="hora" name="hora" required>
                        <div class="invalid-feedback">Ingrese la hora.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="estado" class="form-label"><i class="bi bi-flag"></i> Estado:</label>
                        <select class="form-select" id="estado" name="estado" required>
                            <option value="">Seleccione</option>
                            <option value="pendiente" selected>Pendiente</option>
                            <option value="confirmada">Confirmada</option>
                            <option value="cancelada">Cancelada</option>
                        </select>
                        <div class="invalid-feedback">Seleccione un estado.</div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <button type="submit" class="btn btn-primary w-45"><i class="bi bi-save"></i> Guardar Cita</button>
                        <button type="reset" class="btn btn-secondary w-45"><i class="bi bi-x-circle"></i> Limpiar Formulario</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
