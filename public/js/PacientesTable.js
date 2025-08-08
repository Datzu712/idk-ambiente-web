class PacientesTable {
  constructor(tableId) {
    this.tableId = tableId;
    this.table = document.getElementById(tableId);
    this.init();
  }

  cargarPacientes() {
    fetch('/views/patients/buscarPaciente.php')
      .then(response => response.json())
      .then(data => {
        const tbody = this.table.querySelector('tbody');
        tbody.innerHTML = '';
        if (Array.isArray(data)) {
          data.forEach(paciente => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
              <td>${paciente.id}</td>
              <td>${paciente.nombre}</td>
              <td>${paciente.apellidos}</td>
              <td>${paciente.diagnostico ?? ''}</td>
              <td>
                <a href="/views/patients/actualizarInformacion.php?id=${paciente.id}" class="btn btn-primary btn-sm me-1">Editar</a>
                <button class="btn btn-danger btn-sm btn-eliminar" data-id="${paciente.id}">Eliminar</button>
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
      this.cargarPacientes();
      this.table.querySelector('tbody').addEventListener('click', (e) => {
        if (e.target.classList.contains('btn-eliminar')) {
          const id = e.target.getAttribute('data-id');
          if (confirm('¿Seguro que quieres eliminar este paciente?')) {
            fetch(`/views/patients/eliminarPaciente.php?id=${id}`, {
              method: 'GET',
            })
              .then(response => {
                if (response.redirected) {
                  this.cargarPacientes();
                } else {
                  alert('Error al eliminar el paciente.');
                }
              });
          }
        }
      });
    });
  }
}

if (document.getElementById('tablaPacientes')) {
  new PacientesTable('tablaPacientes');
}
