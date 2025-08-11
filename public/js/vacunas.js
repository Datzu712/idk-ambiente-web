document.addEventListener('DOMContentLoaded', () => {
  const tabla = $('#tablaVacunas').DataTable({
    ajax: {
      url: '/vacunas/controller/VacunasController.php?action=listar',
      dataSrc: ''
    },
    columns: [
      { data: 'id' },
      { data: 'nombre_paciente' },
      { data: 'nombre_vacuna' },
      { data: 'fecha_aplicacion' },
      { data: 'dosis' },
      { data: 'observaciones' },
      {
        data: null,
        render: function (data, type, row) {
          return `
                        <button class="btn btn-primary btn-sm btn-editar" data-id="${row.id}" data-bs-toggle="modal" data-bs-target="#modalActualizarVacuna">Actualizar</button>
                        <button class="btn btn-danger btn-sm btn-eliminar" data-id="${row.id}">Eliminar</button>
                    `
        }
      }
    ]
  })

  // Editar vacuna
  $('#tablaVacunas tbody').on('click', '.btn-editar', function () {
    const id = $(this).data('id')
    fetch(`/vacunas/controller/VacunasController.php?action=obtener&id=${id}`)
      .then((res) => res.json())
      .then((data) => {
        if (data.error) {
          alert(data.error)
          return
        }
        $('#idUpd').val(data.id)
        $('#nombre_pacienteUpd').val(data.nombre_paciente)
        $('#nombre_vacunaUpd').val(data.nombre_vacuna)
        $('#fecha_aplicacionUpd').val(data.fecha_aplicacion)
        $('#dosisUpd').val(data.dosis)
        $('#observacionesUpd').val(data.observaciones)
      })
  })

  // Actualizar vacuna
  $('#formActualizarVacuna').on('submit', function (e) {
    e.preventDefault()

    if (!this.checkValidity()) {
      e.stopPropagation()
      this.classList.add('was-validated')
      return
    }

    const formData = new FormData(this)
    formData.append('action', 'actualizar')

    fetch('/vacunas/controller/VacunasController.php', {
      method: 'POST',
      body: formData
    })
      .then((res) => res.json())
      .then((resp) => {
        if (resp.success) {
          const modalEl = document.getElementById('modalActualizarVacuna')
          const modalInstance = bootstrap.Modal.getInstance(modalEl)
          if (modalInstance) modalInstance.hide()

          tabla.ajax.reload(null, false)
          alert('Vacuna actualizada con éxito')
          this.classList.remove('was-validated')
        } else {
          alert('Error al actualizar vacuna')
        }
      })
      .catch(() => alert('Error en la conexión'))
  })

  // Crear vacuna
  $('#formRegistroVacuna').on('submit', function (e) {
    e.preventDefault()

    if (!this.checkValidity()) {
      e.stopPropagation()
      this.classList.add('was-validated')
      return
    }

    const formData = new FormData(this)
    formData.append('action', 'crear')

    fetch('/vacunas/controller/VacunasController.php', {
      method: 'POST',
      body: formData
    })
      .then((res) => res.json())
      .then((resp) => {
        if (resp.success) {
          const modalEl = document.getElementById('modalRegistroVacuna')
          const modalInstance = bootstrap.Modal.getInstance(modalEl)
          if (modalInstance) modalInstance.hide()

          tabla.ajax.reload(null, false)
          alert('Vacuna creada con éxito')
          this.reset()
          this.classList.remove('was-validated')
        } else {
          alert('Error al crear vacuna')
        }
      })
      .catch(() => alert('Error en la conexión'))
  })

  // Eliminar vacuna
  $('#tablaVacunas tbody').on('click', '.btn-eliminar', function () {
    const id = $(this).data('id')
    if (confirm('¿Seguro que quieres eliminar esta vacuna?')) {
      fetch(
        `/vacunas/controller/VacunasController.php?action=eliminar&id=${id}`
      )
        .then((res) => res.json())
        .then((resp) => {
          if (resp.success) {
            tabla.ajax.reload(null, false)
            alert('Vacuna eliminada')
          } else {
            alert('Error al eliminar vacuna')
          }
        })
    }
  })
})
