document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('formRegistro');

  form.addEventListener('submit', (event) => {
    event.preventDefault();

    const paciente = {
      nombre: form.nombre.value.trim(),
      edad: form.edad.value,
      sexo: form.sexo.value,
      diagnostico: form.diagnostico.value.trim(),
      fecha: form.fecha.value
    };

    if (!paciente.nombre || !paciente.diagnostico || !paciente.fecha) {
      alert("Por favor, completa todos los campos.");
      return;
    }

    let registros = JSON.parse(localStorage.getItem('registrosClinicos')) || [];
    registros.push(paciente);
    localStorage.setItem('registrosClinicos', JSON.stringify(registros));

    alert("Registro guardado con éxito");
    form.reset();
  });
});
