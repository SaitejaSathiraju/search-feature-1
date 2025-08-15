<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Technical Details</a>
  <a href="Dataproducts_geophysical_overview.php">Overview</a>
  <a href="Dataproducts_geophysical_TerrestrialProducts.php">Terrestrial Products</a>
  <a href="Dataproducts_geophysical_ocean.php">Ocean Products</a>
  <a href="Dataproducts_geophysical_AtmosphericProducts.php">Atmospheric Products</a>
  <a href="Dataproducts_geophysical_CryophericProducts.php">Cryopheric Products</a>
  <a href="Dataproducts_geophysical_policy.php">Policy</a>
  <a href="Dataproducts_geophysical_price.php">Price</a>
  <a href="Dataproducts_geophysical_ds_links.php">Data Dissemination Links</a>
  <a href="Dataproducts_geophysical_query.php">Any Query?</a>
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