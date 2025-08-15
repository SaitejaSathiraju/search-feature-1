<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Thematic Maps</a>
  <a href="Dataproducts_Thematic_overview.php">Overview</a>
  <a href="Dataproducts_Thematic_cartodem.php">Carto DEM</a>
  <a href="Dataproducts_Thematic_wmslayers.php">WMS Layers</a>
  <a href="Dataproducts_Thematic_query.php">Any Query</a>
</div>
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