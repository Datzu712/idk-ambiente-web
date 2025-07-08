


document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('formRegistro');
  if (!form) return;
  form.addEventListener('submit', function(event) {
    event.preventDefault();
    if (!form.checkValidity()) {
      event.stopPropagation();
      form.classList.add('was-validated');
      return;
    }
    const inputs = form.querySelectorAll('input, select');
    const datos = {};
    inputs.forEach(input => {
      if (input.name) {
        datos[input.name] = input.value.trim();
      }
    });
    const registros = JSON.parse(localStorage.getItem('registrosClinicos')) || [];
    registros.push(datos);
    localStorage.setItem('registrosClinicos', JSON.stringify(registros));
    alert('Registro guardado con éxito');
    form.reset();
    form.classList.remove('was-validated');
  });
});
