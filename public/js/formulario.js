document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formRegistro");

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    const datos = {
      nombre: form.nombre.value.trim(),
      apellidos: form.apellidos.value.trim(),
      identificacion: form.identificacion.value.trim(),
      edad: form.edad.value,
      sexo: form.sexo.value,
      sintomas: form.sintomas.value.trim(),
      posibleAfliccion: form.posibleAfliccion.value.trim(),
      diagnostico: form.diagnostico.value.trim(),
      fecha: form.fecha.value,
    };

    if (
      !datos.nombre ||
      !datos.apellidos ||
      !datos.identificacion ||
      !datos.edad ||
      !datos.sexo ||
      !datos.sintomas ||
      !datos.posibleAfliccion ||
      !datos.diagnostico ||
      !datos.fecha
    ) {
      alert("Por favor, completa todos los campos.");
      return;
    }

    const registros =
      JSON.parse(localStorage.getItem("registrosClinicos")) || [];
    registros.push(datos);
    localStorage.setItem("registrosClinicos", JSON.stringify(registros));

    alert("Registro guardado con éxito");
    form.reset();
  });
});
