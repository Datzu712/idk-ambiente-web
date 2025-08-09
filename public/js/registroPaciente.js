(() => {
  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach((element) => {
    element.addEventListener(
      'submit',
      (event) => {
        if (!element.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        element.classList.add('was-validated')
      },
      false
    )
  })
})()

document.addEventListener('DOMContentLoaded', function () {
  // --- Lógica del Sidebar ---
  const sidebar = document.getElementById('sidebar')
  const main = document.querySelector('main')
  const header = document.querySelector('header')

  function updateLayout () {
    if (sidebar) {
      if (sidebar.classList.contains('sidebar-open')) {
        main.style.marginLeft = '220px'
        header.style.marginLeft = '220px'
      } else {
        main.style.marginLeft = '60px'
        header.style.marginLeft = '60px'
      }
    }
  }

  const sidebarToggle = document.getElementById('sidebarToggle')
  if (sidebarToggle) {
    sidebarToggle.addEventListener('click', updateLayout)
  }
  updateLayout()
})
