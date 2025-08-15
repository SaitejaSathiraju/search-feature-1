<div class="services-list">
  <a style="background-color:#003366;  color: #ffffff;" class="text-white no-hover">India Missions</a>
  <a href="./Satellite_Handbooks.php">Data Product DOI's</a>
</div>
<style>
  .services-list a {
    font-size: 22px !important;
  }

  .services-list a.no-hover {
    pointer-events: none;
    cursor: default;
  }

  .services-list a.no-hover:hover {
    background-color: #003366 !important;
    color: #ffffff !important;
  }
</style>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Function to highlight the appropriate menu item
    function highlightMenuItem() {
      const links = document.querySelectorAll('.services-list a');
      const currentPath = window.location.pathname;
      const storedActive = localStorage.getItem('activeMenuItem');
      links.forEach(link => {
        const href = link.getAttribute('href');
        if (!href) return;
        const normalizedHref = href.replace("./", "/").toLowerCase();
        const normalizedPath = currentPath.toLowerCase();
        const linkText = link.textContent.trim().toLowerCase();
        const storedValue = storedActive ? storedActive.toLowerCase() : null;
        if (normalizedPath.includes(normalizedHref) || (storedValue && (linkText.includes(storedValue) || normalizedHref.includes(storedValue)))) {
          link.style.backgroundColor = '#4abded';
          link.style.color = '#ffffff';
        } else {
          link.style.backgroundColor = '';
          link.style.color = '#000000';
        }
      });
    }
    // Run on initial load
    highlightMenuItem();
    // Also run when window gains focus (user returns from child tab)
    window.addEventListener('focus', highlightMenuItem);
    // Optional: Clear highlighting when clicking other links
    links.forEach(link => {
      link.addEventListener('click', function() {
        localStorage.removeItem('activeMenuItem');
      });
    });
  });
</script>