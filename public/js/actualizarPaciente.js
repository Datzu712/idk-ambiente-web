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
    if (!f.checkValidity()) {
      event.stopPropagation();
      f.classList.add("was-validated");
      return;
    }
    const inputs = f.querySelectorAll("input, select");
    let identificacion = "";
    const datos = {};
    inputs.forEach((input) => {
      if (input.name) {
        datos[input.name] = input.value.trim();
        if (input.name === "identificacion") {
          identificacion = input.value.trim();
        }
      }
    });
    const registros =
      JSON.parse(localStorage.getItem("registrosClinicos")) || [];
    const idx = registros.findIndex((r) => r.identificacion === identificacion);
    if (idx === -1) {
      alert("Paciente no encontrado.");
      return;
    }
    Object.keys(datos).forEach((campo) => {
      if (campo !== "identificacion" && datos[campo] !== "") {
        registros[idx][campo] = datos[campo];
      }
    });
    localStorage.setItem("registrosClinicos", JSON.stringify(registros));
    alert("Paciente actualizado con éxito");
    this.form.reset();
    f.classList.remove("was-validated");
  }
}

window.addEventListener("DOMContentLoaded", () => {
  new ActualizarPaciente("formActualizarPaciente");
});
