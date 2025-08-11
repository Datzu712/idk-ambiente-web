class RecetasTable {
  constructor(tableId) {
    this.tableId = tableId;
    this.table = document.getElementById(tableId);
    this.init();
  }

  cargarRecetas() {
    fetch('/recetas/controller/recetasController.php?action=listar')
      .then(res => res.json())
      .then(data => {
        const tbody = this.table.querySelector('tbody');
        tbody.innerHTML = '';
        data.forEach(receta => {
          const tr = document.createElement('tr');
          tr.innerHTML = `
            <td>${receta.id}</td>
            <td>${receta.nombre_paciente}</td>
            <td>${receta.nombre_medico}</td>
            <td>${receta.medicamento}</td>
            <td>${receta.dosis}</td>
            <td>${receta.frecuencia}</td>
            <td>${receta.fecha}</td>
            <td>${receta.observaciones || ''}</td>
            <td>
              <button class="btn btn-primary btn-sm btn-editar" data-id="${receta.id}" data-bs-toggle="modal" data-bs-target="#modalActualizarReceta">Editar</button>
              <button class="btn btn-danger btn-sm btn-eliminar" data-id="${receta.id}">Eliminar</button>
            </td>
          `;
          tbody.appendChild(tr);
        });
        if (window.jQuery && window.jQuery.fn.DataTable && window.jQuery.fn.DataTable.isDataTable(`#${this.tableId}`)) {
          window.jQuery(`#${this.tableId}`).DataTable().destroy();
        }
        window.jQuery(`#${this.tableId}`).DataTable();
      });
  }

  init() {
    document.addEventListener('DOMContentLoaded', () => {
      this.cargarRecetas();

      this.table.querySelector('tbody').addEventListener('click', (e) => {
        if (e.target.classList.contains('btn-eliminar')) {
          const id = e.target.getAttribute('data-id');
          if (confirm('¿Seguro que quieres eliminar esta receta?')) {
            fetch(`/recetas/controller/recetasController.php?action=eliminar&id=${id}`)
              .then(res => res.json())
              .then(result => {
                if (result.success) {
                  this.cargarRecetas();
                } else {
                  alert('Error al eliminar la receta.');
                }
              });
          }
        }
      });
    });
  }
}

if (document.getElementById('tablaRecetas')) {
  window.recetasTableInstance = new RecetasTable('tablaRecetas');
}

(() => {
  const forms = document.querySelectorAll('.needs-validation');

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', e => {
      e.preventDefault();

      if (!form.checkValidity()) {
        e.stopPropagation();
        form.classList.add('was-validated');
        return;
      }

      const data = new FormData(form);
      const action = form.id === 'formRegistroReceta' ? 'crear' : 'actualizar';
      data.append('action', action);

      fetch('/recetas/controller/recetasController.php', {
        method: 'POST',
        body: data
      })
        .then(res => res.json())
        .then(result => {
          if (result.success) {
            const modalId = action === 'crear' ? 'modalRegistroReceta' : 'modalActualizarReceta';
            const modal = bootstrap.Modal.getInstance(document.getElementById(modalId));
            modal.hide();
            form.reset();
            form.classList.remove('was-validated');
            window.recetasTableInstance.cargarRecetas();
          } else {
            alert('Error al procesar la receta.');
          }
        });
    });
  });
})();

document.querySelector('#tablaRecetas tbody').addEventListener('click', e => {
  if (e.target.classList.contains('btn-editar')) {
    const id = e.target.getAttribute('data-id');
    fetch('/recetas/controller/recetasController.php?action=listar')
      .then(res => res.json())
      .then(recetas => {
        const receta = recetas.find(r => r.id == id);
        if (receta) {
          document.getElementById('idUpd').value = receta.id;
          document.getElementById('nombre_pacienteUpd').value = receta.nombre_paciente;
          document.getElementById('nombre_medicoUpd').value = receta.nombre_medico;
          document.getElementById('medicamentoUpd').value = receta.medicamento;
          document.getElementById('dosisUpd').value = receta.dosis;
          document.getElementById('frecuenciaUpd').value = receta.frecuencia;
          document.getElementById('fechaUpd').value = receta.fecha;
          document.getElementById('observacionesUpd').value = receta.observaciones;

          const modal = new bootstrap.Modal(document.getElementById('modalActualizarReceta'));
          modal.show();
        }
      });
  }
});
