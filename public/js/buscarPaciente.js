class BuscarPaciente {
  constructor(formId) {
    this.form = document.getElementById(formId);
    if (this.form) {
      this.form.addEventListener("submit", this.buscarRegistro.bind(this));
    }
  }

  buscarRegistro(event) {
    event.preventDefault();
    const identificacion = this.form.identificacion.value.trim();
    if (!identificacion) {
      alert("Por favor, ingresa la identificación a buscar.");
      return;
    }
    const registros =
      JSON.parse(localStorage.getItem("registrosClinicos")) || [];
    const paciente = registros.find((r) => r.identificacion === identificacion);
    if (paciente) {
      alert("Paciente encontrado:\n" + JSON.stringify(paciente, null, 2));
    } else {
      alert("Paciente no encontrado.");
    }
  }
}

window.addEventListener("DOMContentLoaded", () => {
  new BuscarPaciente("formBuscarPaciente");
});
