<div class="modal fade" id="modalActualizarPaciente" tabindex="-1" aria-labelledby="modalActualizarPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalActualizarPacienteLabel">Actualizar Paciente</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body container">
                <form id="formActualizar" class="needs-validation row" novalidate>
                    <input type="hidden" id="idUpd" name="id">

                    <div class="mb-3 col-6">
                        <label for="nombreUpd" class="form-label"><i class="bi bi-person"></i> Nombre del paciente:</label>
                        <input type="text" class="form-control" id="nombreUpd" name="nombre" placeholder="Ejemplo: Juan" required>
                        <div class="invalid-feedback">Por favor ingresa el nombre.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="apellidosUpd" class="form-label"><i class="bi bi-person-badge"></i> Apellidos:</label>
                        <input type="text" class="form-control" id="apellidosUpd" name="apellidos" placeholder="Ejemplo: Pérez" required>
                        <div class="invalid-feedback">Por favor ingresa los apellidos.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="identificacionUpd" class="form-label"><i class="bi bi-card-text"></i> Identificación:</label>
                        <input type="text" class="form-control" id="identificacionUpd" name="identificacion" placeholder="Ejemplo: 123456789" required>
                        <div class="invalid-feedback">Por favor ingresa la identificación.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="edadUpd" class="form-label"><i class="bi bi-calendar"></i> Edad:</label>
                        <input type="number" class="form-control" id="edadUpd" name="edad" placeholder="Ejemplo: 30" required>
                        <div class="invalid-feedback">Por favor ingresa la edad.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="sexoUpd" class="form-label"><i class="bi bi-gender-ambiguous"></i> Sexo:</label>
                        <select class="form-select" id="sexoUpd" name="sexo" required>
                            <option value="">Seleccione</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                        <div class="invalid-feedback">Por favor selecciona el sexo.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="sintomasUpd" class="form-label"><i class="bi bi-clipboard-data"></i> Síntomas:</label>
                        <input type="text" class="form-control" id="sintomasUpd" name="sintomas" placeholder="Ejemplo: Fiebre, tos" required>
                        <div class="invalid-feedback">Por favor ingresa los síntomas.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="posibleAfliccionUpd" class="form-label"><i class="bi bi-heart-pulse"></i> Posible aflicción:</label>
                        <input type="text" class="form-control" id="posibleAfliccionUpd" name="posibleAfliccion" placeholder="Ejemplo: Gripe" required>
                        <div class="invalid-feedback">Por favor ingresa la posible aflicción.</div>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="fechaUpd" class="form-label"><i class="bi bi-calendar-event"></i> Fecha de Ingreso:</label>
                        <input type="date" class="form-control" id="fechaUpd" name="fecha" placeholder="Ejemplo: 2023-10-01" required>
                        <div class="invalid-feedback">Por favor ingresa la fecha de ingreso.</div>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="diagnosticoUpd" class="form-label"><i class="bi bi-file-earmark-text"></i> Diagnóstico:</label>
                        <textarea type="text" class="form-control" id="diagnosticoUpd" name="diagnostico" placeholder="Ejemplo: Diagnóstico detallado" required></textarea>
                        <div class="invalid-feedback">Por favor ingresa el diagnóstico.</div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success w-45"><i class="bi bi-arrow-repeat"></i> Actualizar Paciente</button>
                        <button type="reset" class="btn btn-secondary w-45"><i class="bi bi-x-circle"></i> Limpiar Formulario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
