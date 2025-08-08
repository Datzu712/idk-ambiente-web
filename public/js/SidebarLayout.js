class SidebarLayout {
  constructor() {
    document.addEventListener('DOMContentLoaded', () => {
      const sidebar = document.getElementById('sidebar');
      const main = document.querySelector('main');
      const header = document.querySelector('header');
      function updateLayout() {
        if (sidebar && sidebar.classList.contains('sidebar-open')) {
          main.style.marginLeft = '220px';
          header.style.marginLeft = '220px';
        } else {
          main.style.marginLeft = '60px';
          header.style.marginLeft = '60px';
        }
      }
      updateLayout();
    });
  }
}

new SidebarLayout();
