<!-- Modal Registro Paciente -->
<div class="modal fade" id="modalRegistroPaciente" tabindex="-1" aria-labelledby="modalRegistroPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalRegistroPacienteLabel">Registrar Paciente</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body container">
                <form id="formRegistro" class="needs-validation row" novalidate>

                    <div class="mb-3 col-6">
                        <label for="nombre" class="form-label"><i class="bi bi-person"></i> Nombre del paciente:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo: Juan" required>
                        <div class="invalid-feedback">Por favor ingresa el nombre.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="apellidos" class="form-label"><i class="bi bi-person-badge"></i> Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ejemplo: Pérez" required>
                        <div class="invalid-feedback">Por favor ingresa los apellidos.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="identificacion" class="form-label"><i class="bi bi-card-text"></i> Identificación:</label>
                        <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Ejemplo: 123456789" required>
                        <div class="invalid-feedback">Por favor ingresa la identificación.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="edad" class="form-label"><i class="bi bi-calendar"></i> Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="Ejemplo: 30" required>
                        <div class="invalid-feedback">Por favor ingresa la edad.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="sexo" class="form-label"><i class="bi bi-gender-ambiguous"></i> Sexo:</label>
                        <select class="form-select" id="sexo" name="sexo" required>
                            <option value="">Seleccione</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                        <div class="invalid-feedback">Por favor selecciona el sexo.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="sintomas" class="form-label"><i class="bi bi-clipboard-data"></i> Síntomas:</label>
                        <input type="text" class="form-control" id="sintomas" name="sintomas" placeholder="Ejemplo: Fiebre, tos" required>
                        <div class="invalid-feedback">Por favor ingresa los síntomas.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="posibleAfliccion" class="form-label"><i class="bi bi-heart-pulse"></i> Posible aflicción:</label>
                        <input type="text" class="form-control" id="posibleAfliccion" name="posibleAfliccion" placeholder="Ejemplo: Gripe" required>
                        <div class="invalid-feedback">Por favor ingresa la posible aflicción.</div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="fecha" class="form-label"><i class="bi bi-calendar-event"></i> Fecha de Ingreso:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ejemplo: 2023-10-01" required>
                        <div class="invalid-feedback">Por favor ingresa la fecha de ingreso.</div>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="diagnostico" class="form-label"><i class="bi bi-file-earmark-text"></i> Diagnóstico:</label>
                        <textarea type="text" class="form-control" id="diagnostico" name="diagnostico" placeholder="Ejemplo: Diagnóstico detallado" required></textarea>
                        <div class="invalid-feedback">Por favor ingresa el diagnóstico.</div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary w-45"><i class="bi bi-save"></i> Guardar Registro</button>
                        <button type="reset" class="btn btn-secondary w-45"><i class="bi bi-x-circle"></i> Limpiar Formulario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>