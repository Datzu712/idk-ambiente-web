document.addEventListener('DOMContentLoaded', () => {
  const tabla = $('#tablaRecetas').DataTable({
    ajax: {
      url: '/recetas/controller/RecetasController.php?action=listar',
      dataSrc: ''
    },
    columns: [
      { data: 'id' },
      { data: 'nombre_paciente' },
      { data: 'nombre_medico' },
      { data: 'medicamento' },
      { data: 'dosis' },
      { data: 'frecuencia' },
      { data: 'fecha' },
      { data: 'observaciones' },
      {
        data: null,
        render: function (data, type, row) {
          return `
                        <button class="btn btn-primary btn-sm btn-editar" data-id="${row.id}" data-bs-toggle="modal" data-bs-target="#modalActualizarReceta">Actualizar</button>
                        <button class="btn btn-danger btn-sm btn-eliminar" data-id="${row.id}">Eliminar</button>
                    `
        }
      }
    ]
  })

  // Editar receta
  $('#tablaRecetas tbody').on('click', '.btn-editar', function () {
    const id = $(this).data('id')
    fetch(`/recetas/controller/RecetasController.php?action=obtener&id=${id}`)
      .then((res) => res.json())
      .then((data) => {
        if (data.error) {
          alert(data.error)
          return
        }
        $('#idUpd').val(data.id)
        $('#nombre_pacienteUpd').val(data.nombre_paciente)
        $('#nombre_medicoUpd').val(data.nombre_medico)
        $('#medicamentoUpd').val(data.medicamento)
        $('#dosisUpd').val(data.dosis)
        $('#frecuenciaUpd').val(data.frecuencia)
        $('#fechaUpd').val(data.fecha)
        $('#observacionesUpd').val(data.observaciones)
      })
  })

  // Actualizar receta
  $('#formActualizarReceta').on('submit', function (e) {
    e.preventDefault()

    if (!this.checkValidity()) {
      e.stopPropagation()
      this.classList.add('was-validated')
      return
    }

    const formData = new FormData(this)
    formData.append('action', 'actualizar')

    fetch('/recetas/controller/RecetasController.php', {
      method: 'POST',
      body: formData
    })
      .then((res) => res.json())
      .then((resp) => {
        if (resp.success) {
          const modalEl = document.getElementById('modalActualizarReceta')
          const modalInstance = bootstrap.Modal.getInstance(modalEl)
          if (modalInstance) modalInstance.hide()

          tabla.ajax.reload(null, false)
          alert('Receta actualizada con éxito')
          this.classList.remove('was-validated')
        } else {
          alert('Error al actualizar receta')
        }
      })
      .catch(() => alert('Error en la conexión'))
  })

  // Crear receta
  $('#formRegistroReceta').on('submit', function (e) {
    e.preventDefault()

    if (!this.checkValidity()) {
      e.stopPropagation()
      this.classList.add('was-validated')
      return
    }

    const formData = new FormData(this)
    formData.append('action', 'crear')

    fetch('/recetas/controller/RecetasController.php', {
      method: 'POST',
      body: formData
    })
      .then((res) => res.json())
      .then((resp) => {
        if (resp.success) {
          const modalEl = document.getElementById('modalRegistroReceta')
          const modalInstance = bootstrap.Modal.getInstance(modalEl)
          if (modalInstance) modalInstance.hide()

          tabla.ajax.reload(null, false)
          alert('Receta creada con éxito')
          this.reset()
          this.classList.remove('was-validated')
        } else {
          alert('Error al crear receta')
        }
      })
      .catch(() => alert('Error en la conexión'))
  })

  // Eliminar receta
  $('#tablaRecetas tbody').on('click', '.btn-eliminar', function () {
    const id = $(this).data('id')
    if (confirm('¿Seguro que quieres eliminar esta receta?')) {
      fetch(
        `/recetas/controller/RecetasController.php?action=eliminar&id=${id}`
      )
        .then((res) => res.json())
        .then((resp) => {
          if (resp.success) {
            tabla.ajax.reload(null, false)
            alert('Receta eliminada')
          } else {
            alert('Error al eliminar receta')
          }
        })
    }
  })
})
