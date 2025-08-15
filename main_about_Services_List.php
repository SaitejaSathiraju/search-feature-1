<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">About</a>
  <a href="./about.php">Organization</a>
  <a href="./nrsc_vision.php">NRSC Vision</a>
  <a href="./nrsc_iso.php">ISO Certification</a>
  <a href="about_AandA_year2024.php">Achievements & Awards</a>
  <a href="about_campuses.php">Campuses</a>
  <a href="./contactus_new.php">Contact Us</a>
</div>
<style>
  .services-list a.no-hover {
    pointer-events: none;
    cursor: default;
  }

  .services-list a {
    font-size: 22px !important;
  }

  .services-list a.no-hover:hover {
    background-color: #003366 !important;
    color: #ffffff !important;
  }
</style>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.services-list a');
    const currentPath = window.location.pathname;
    links.forEach(link => {
      const href = link.getAttribute('href');
      if (!href) return; // Skip "What We Do"
      // Normalize paths for comparison
      const normalizedHref = href.replace("./", "/");
      const normalizedPath = currentPath.endsWith("/") ? currentPath : currentPath + "/";
      if (normalizedPath.includes(normalizedHref)) {
        link.style.backgroundColor = '#4abded'; // Highlight color
        link.style.color = '#ffffff';
      } else {
        link.style.backgroundColor = '';
        link.style.color = '#000000';
      }
    });
  });
</script>