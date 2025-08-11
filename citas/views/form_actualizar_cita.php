<div class="modal fade" id="modalActualizarCita" tabindex="-1" aria-labelledby="modalActualizarCitaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalActualizarCitaLabel">Actualizar Cita</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body container">
                <form id="formActualizarCita" class="needs-validation row" novalidate>
                    <input type="hidden" id="idUpd" name="id" />

                    <div class="mb-3 col-6">
                        <label for="nombre_pacienteUpd" class="form-label"><i class="bi bi-person"></i> Nombre Paciente</label>
                        <input type="text" class="form-control" id="nombre_pacienteUpd" name="nombre_paciente" placeholder="Ejemplo: Juan Pérez" required />
                        <div class="invalid-feedback">Ingrese el nombre del paciente.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="fechaUpd" class="form-label"><i class="bi bi-calendar-event"></i> Fecha</label>
                        <input type="date" class="form-control" id="fechaUpd" name="fecha" required />
                        <div class="invalid-feedback">Ingrese la fecha.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="horaUpd" class="form-label"><i class="bi bi-clock"></i> Hora</label>
                        <input type="time" class="form-control" id="horaUpd" name="hora" required />
                        <div class="invalid-feedback">Ingrese la hora.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="estadoUpd" class="form-label"><i class="bi bi-check2-square"></i> Estado</label>
                        <select class="form-select" id="estadoUpd" name="estado" required>
                            <option value="">Seleccione</option>
                            <option value="pendiente">Pendiente</option>
                            <option value="confirmada">Confirmada</option>
                            <option value="cancelada">Cancelada</option>
                        </select>
                        <div class="invalid-feedback">Seleccione un estado.</div>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="nombre_usuarioUpd" class="form-label"><i class="bi bi-person-badge"></i> Nombre Usuario</label>
                        <input type="text" class="form-control" id="nombre_usuarioUpd" name="nombre_usuario" placeholder="Ejemplo: Dr. López" required />
                        <div class="invalid-feedback">Ingrese el nombre del usuario.</div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success w-45"><i class="bi bi-arrow-repeat"></i> Actualizar Cita</button>
                        <button type="reset" class="btn btn-secondary w-45"><i class="bi bi-x-circle"></i> Limpiar Formulario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>