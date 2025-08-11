class CitasTable {
  constructor(tableId) {
    this.tableId = tableId;
    this.table = document.getElementById(tableId);
    this.init();
  }

  cargarCitas() {
    fetch('/citas/controller/citasController.php?action=listar')
      .then(response => response.json())
      .then(data => {
        const tbody = this.table.querySelector('tbody');
        tbody.innerHTML = '';
        if (Array.isArray(data)) {
          data.forEach(cita => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
              <td>${cita.id}</td>
              <td>${cita.nombre_paciente}</td>
              <td>${cita.fecha}</td>
              <td>${cita.hora}</td>
              <td>${cita.estado}</td>
              <td>${cita.nombre_usuario}</td>
              <td>
                <button class="btn btn-primary btn-sm me-1 btn-editar" data-bs-toggle="modal" data-bs-target="#modalActualizarCita" data-id="${cita.id}">Actualizar</button>
                <button class="btn btn-danger btn-sm btn-eliminar" data-id="${cita.id}">Eliminar</button>
              </td>
            `;
            tbody.appendChild(tr);
          });
        }
        if (window.jQuery && window.jQuery.fn.DataTable && window.jQuery.fn.DataTable.isDataTable(`#${this.tableId}`)) {
          window.jQuery(`#${this.tableId}`).DataTable().destroy();
        }
        window.jQuery(`#${this.tableId}`).DataTable();
      });
  }

  init() {
    document.addEventListener('DOMContentLoaded', () => {
      this.cargarCitas();

      this.table.querySelector('tbody').addEventListener('click', (e) => {
        if (e.target.classList.contains('btn-eliminar')) {
          const id = e.target.getAttribute('data-id');
          if (confirm('¿Seguro que quieres eliminar esta cita?')) {
            fetch(`/citas/controller/citasController.php?action=eliminar&id=${id}`, {
              method: 'GET',
            })
              .then(response => response.json())
              .then(result => {
                if (result.success) {
                  this.cargarCitas();
                } else {
                  alert('Error al eliminar la cita.');
                }
              });
          }
        }
      });
    });
  }
}

if (document.getElementById('tablaCitas')) {
  window.citasTableInstance = new CitasTable('tablaCitas');
}
