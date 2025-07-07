<aside class="sidebar" id="sidebar">
    <button class="sidebar-toggle" id="sidebarToggle" aria-label="Abrir menú">
        &#9776;
    </button>
    <ul>
        <li><a href="/">Index</a></li>
        <li><a href="/views/patients/registro.php">Registrar Pacientes</a></li>
        <li><a href="/views/patients/mostrarPacientes.php">Mostrar Pacientes</a></li>
        <li><a href="/views/patients/actualizarInformacion.php">Actualizar informacion</a></li>
    </ul>
</aside>
<script>
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('sidebarToggle');
    toggle.addEventListener('click', () => {
        sidebar.classList.toggle('sidebar-open');
    });
</script>