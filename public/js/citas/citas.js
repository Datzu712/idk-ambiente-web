(() => {
  const forms = document.querySelectorAll('.needs-validation');

  Array.from(forms).forEach((form) => {
    form.addEventListener(
      'submit',
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      },
      false
    );
  });
})();


document.getElementById('formRegistroCita').addEventListener('submit', function (e) {
  e.preventDefault();

  if (!this.checkValidity()) {
    this.classList.add('was-validated');
    return;
  }

  const data = new FormData(this);
  data.append('action', 'crear');

  fetch('/citas/controller/citasController.php', {
    method: 'POST',
    body: data,
  })
    .then((res) => res.json())
    .then((result) => {
      if (result.success) {
        const modal = bootstrap.Modal.getInstance(document.getElementById('modalRegistroCita'));
        modal.hide();
        this.reset();
        this.classList.remove('was-validated');
        if (window.citasTableInstance) window.citasTableInstance.cargarCitas();
      } else {
        alert('Error al crear la cita.');
      }
    });
});

document.getElementById('tablaCitas').addEventListener('click', function (e) {
  if (e.target.classList.contains('btn-editar')) {
    const id = e.target.getAttribute('data-id');

    fetch(`/citas/controller/citasController.php?action=listar`)
      .then((res) => res.json())
      .then((citas) => {
        const cita = citas.find((c) => c.id == id);
        if (cita) {
          document.getElementById('idUpd').value = cita.id;
          document.getElementById('nombre_pacienteUpd').value = cita.nombre_paciente;
          document.getElementById('fechaUpd').value = cita.fecha;
          document.getElementById('horaUpd').value = cita.hora;
          document.getElementById('estadoUpd').value = cita.estado;
          document.getElementById('nombre_usuarioUpd').value = cita.nombre_usuario;

          const modal = new bootstrap.Modal(document.getElementById('modalActualizarCita'));
          modal.show();
        }
      });
  }
});

document.getElementById('formActualizarCita').addEventListener('submit', function (e) {
  e.preventDefault();

  if (!this.checkValidity()) {
    this.classList.add('was-validated');
    return;
  }

  const data = new FormData(this);
  data.append('action', 'actualizar');

  fetch('/citas/controller/citasController.php', {
    method: 'POST',
    body: data,
  })
    .then((res) => res.json())
    .then((result) => {
      if (result.success) {
        const modal = bootstrap.Modal.getInstance(document.getElementById('modalActualizarCita'));
        modal.hide();
        this.reset();
        this.classList.remove('was-validated');
        if (window.citasTableInstance) window.citasTableInstance.cargarCitas();
      } else {
        alert('Error al actualizar la cita.');
      }
    });
});
