<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">What We Do</a>
  <a href="./about.php">Our Activities</a>
  <a href="./About_SDA.php">Satellite Data Acquisition</a>
  <a href="./About_DPD.php">Data Processing & Dissemination</a>
  <a href="./About_ASDM.php">Aerial Services & Digital Mapping</a>
  <a href="./About_RSA.php">Remote Sensing Applications</a>
  <a href="./About_DMS.php">Disaster Management Support</a>
  <a href="./About_GSS.php">Geospatial Services</a>
  <a href="./About_RSS.php">Region Specific Services</a>
  <a href="./About_OT.php">Outreach and Training</a>
</div>
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
    //   // Optional: Clear highlighting when clicking other links
    //   links.forEach(link => {
    //       link.addEventListener('click', function() {
    //           localStorage.removeItem('activeMenuItem');
    //       });
    //   });
  });
</script>
<style>
  .services-list a.no-hover {
    pointer-events: none;
    cursor: default;
  }

  .services-list a.no-hover:hover {
    background-color: #003366 !important;
    color: #ffffff !important;
  }

  .services-list a {
    font-size: 22px !important;
  }
</style>