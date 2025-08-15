<div class="services-list">
  <a style="background-color:#003366;  color: #ffffff;" class="text-white no-hover">Technical Details</a>
  <a href="./EO_Agr_Objective.php">Overview</a>
  <a href="./RSA_Applications.php">Applications</a>
  <a href="./RSA_Sensors.php">Sensors</a>
  <a href="./RSA_Users.php">Users</a>
  <a href="./RSA_portals.php">Portals</a>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
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
    highlightMenuItem();
    window.addEventListener('focus', highlightMenuItem);
    
    
  });
</script>
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