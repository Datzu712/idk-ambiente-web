<!DOCTYPE html>
<html lang="en">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/header/head.php"; ?>

<body>
    <header>
        <div class="presentation">
            <h1>Creación de pacientes</h1>
        </div>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/navbar/navbar.php"; ?>
    </header>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/sidebar/sidebar.php"; ?>
    <main>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/views/components/forms/form_registro_paciente.php"; ?>
    </main>
    <!-- <script src="/public/js/sidebar.js"></script> -->
    <script src="/public/js/registroPaciente.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const main = document.querySelector('main');
            const header = document.querySelector('header');

            function updateLayout() {
                if (sidebar.classList.contains('sidebar-open')) {
                    main.style.marginLeft = '220px';
                    header.style.marginLeft = '220px';
                } else {
                    main.style.marginLeft = '60px';
                    header.style.marginLeft = '60px';
                }
            }
            document.getElementById('sidebarToggle').addEventListener('click', updateLayout);
            updateLayout();
        });
    </script>
    <script>
        (() => {
            const form = document.querySelectorAll('.needs-validation')

            Array.from(form).forEach(element => {
                element.addEventListener('submit', event => {
                    if (!element.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    element.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>