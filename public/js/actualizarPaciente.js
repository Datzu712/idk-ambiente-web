class ActualizarPaciente {
  constructor(formId) {
    this.form = document.getElementById(formId);
    if (this.form) {
      this.form.addEventListener("submit", this.actualizarRegistro.bind(this));
    }
  }

  actualizarRegistro(event) {
    event.preventDefault();
    const f = this.form;
    const identificacion = f.identificacion.value.trim();
    if (!identificacion) {
      alert("Por favor, ingresa la identificación del paciente a actualizar.");
      return;
    }
    let registros = JSON.parse(localStorage.getItem("registrosClinicos")) || [];
    const idx = registros.findIndex(r => r.identificacion === identificacion);
    if (idx === -1) {
      alert("Paciente no encontrado.");
      return;
    }
    const campos = ["nombre", "apellidos", "edad", "sexo", "sintomas", "posibleAfliccion", "diagnostico", "fecha"];
    campos.forEach(campo => {
      if (f[campo] && f[campo].value.trim() !== "") {
        registros[idx][campo] = f[campo].value.trim();
      }
    });
    localStorage.setItem("registrosClinicos", JSON.stringify(registros));
    alert("Paciente actualizado con éxito");
    this.form.reset();
  }
}

window.addEventListener("DOMContentLoaded", () => {
  new ActualizarPaciente("formActualizarPaciente");
});
