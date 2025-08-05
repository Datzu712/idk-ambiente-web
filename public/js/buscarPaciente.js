document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form'); 
    const inputBusqueda = form.querySelector('input[type="search"]'); 
    const resultadoDiv = document.getElementById('resultadoBusqueda');

    function buscarPacientes(query) {
        fetch(`/buscarPaciente.php?identificacion=${query}`)
            .then(response => response.json())
            .then(data => {
                resultadoDiv.innerHTML = '';

                if (data.length > 0) {
                    const table = document.createElement('table');
                    table.className = 'table table-striped';
                    table.innerHTML = `
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Diagnóstico</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${data.map(paciente => `
                                <tr>
                                    <td>${paciente.identificacion}</td>
                                    <td>${paciente.nombre}</td>
                                    <td>${paciente.apellidos}</td>
                                    <td>${paciente.diagnostico}</td>
                                    <td>
                                        <a href="/views/patients/actualizarInformacion.php?id=${paciente.identificacion}" class="btn btn-primary btn-sm">Editar</a>
                                    </td>
                                </tr>
                            `).join('')}
                        </tbody>
                    `;
                    resultadoDiv.appendChild(table);
                } else {
                    resultadoDiv.innerHTML = '<p class="alert alert-warning">No se encontraron pacientes.</p>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                resultadoDiv.innerHTML = '<p class="alert alert-danger">Ocurrió un error al realizar la búsqueda.</p>';
            });
    }

    inputBusqueda.addEventListener('input', (e) => {
        buscarPacientes(e.target.value);
    });

    buscarPacientes('');
});