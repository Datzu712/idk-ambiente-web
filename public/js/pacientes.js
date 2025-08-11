document.addEventListener('DOMContentLoaded', () => {
    const tabla = $('#tablaPacientes').DataTable({
        ajax: {
            url: '/patients/controller/pacientesController.php?action=listar',
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'nombre' },
            { data: 'apellidos' },
            { data: 'diagnostico' },
            {
                data: null,
                render: function (data, type, row) {
                    return `
                    <button class="btn btn-primary btn-sm btn-editar" data-id="${row.id}" data-bs-toggle="modal" data-bs-target="#modalActualizarPaciente">Actualizar</button>
                    <button class="btn btn-danger btn-sm btn-eliminar" data-id="${row.id}">Eliminar</button>`;
                }
            }
        ]
    });

    // Mostrar modal actualizar con datos del paciente
    $('#tablaPacientes tbody').on('click', '.btn-editar', function () {
        const id = $(this).data('id');
        fetch(`/patients/controller/pacientesController.php?action=obtener&id=${id}`)
            .then(res => res.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                    return;
                }
                $('#idUpd').val(data.id);
                $('#nombreUpd').val(data.nombre);
                $('#apellidosUpd').val(data.apellidos);
                $('#identificacionUpd').val(data.identificacion);
                $('#edadUpd').val(data.edad);
                $('#sexoUpd').val(data.sexo);
                $('#sintomasUpd').val(data.sintomas);
                $('#posibleAfliccionUpd').val(data.posible_afliccion);
                $('#diagnosticoUpd').val(data.diagnostico);
                $('#fechaUpd').val(data.fecha_ingreso);
            });
    });

    // Enviar formulario actualizar 
    $('#formActualizar').on('submit', function (e) {
        e.preventDefault();

        if (!this.checkValidity()) {
            e.stopPropagation();
            this.classList.add('was-validated');
            return;
        }

        const formData = new FormData(this);
        formData.append('action', 'actualizar');

        fetch('/patients/controller/pacientesController.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(resp => {
            if (resp.success) {
                $('#modalActualizarPaciente').modal('hide');
                tabla.ajax.reload(null, false);
                alert('Paciente actualizado con éxito');
                this.classList.remove('was-validated');
            } else {
                alert('Error al actualizar paciente');
            }
        })
        .catch(() => alert('Error en la conexión'));
    });

    // Enviar formulario registro 
    $('#formRegistro').on('submit', function (e) {
        e.preventDefault();

        if (!this.checkValidity()) {
            e.stopPropagation();
            this.classList.add('was-validated');
            return;
        }

        const formData = new FormData(this);
        formData.append('action', 'crear');

        fetch('/patients/controller/pacientesController.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(resp => {
            if (resp.success) {
                $('#modalRegistroPaciente').modal('hide');
                tabla.ajax.reload(null, false);
                alert('Paciente creado con éxito');
                this.reset();
                this.classList.remove('was-validated');
            } else {
                alert('Error al crear paciente');
            }
        })
        .catch(() => alert('Error en la conexión'));
    });

    // Botón eliminar
    $('#tablaPacientes tbody').on('click', '.btn-eliminar', function () {
        const id = $(this).data('id');
        if (confirm('¿Seguro que quieres eliminar este paciente?')) {
            fetch(`/patients/controller/pacientesController.php?action=eliminar&id=${id}`)
            .then(res => res.json())
            .then(resp => {
                if (resp.success) {
                    tabla.ajax.reload(null, false);
                    alert('Paciente eliminado');
                } else {
                    alert('Error al eliminar paciente');
                }
            });
        }
    });
});
