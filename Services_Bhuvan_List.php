<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Bhuvan Services</a>
  <a href="Services_Bhuvan_overview.php">Overview</a>
  <a href="Services_Bhuvan_SatelliteDataServices.php">Satellite Data Services</a>
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Thematic Services</a>
  <div class="sub-links">
    <a href="Services_Bhuvan_NaturalResourcesCensus.php">Natural Resources Census</a>
    <a href="Services_Bhuvan_agriculture.php">Agriculture</a>
    <a href="Services_Bhuvan_Forestry_Environment.php">Forestry and Environment</a>
    <a href="Services_Bhuvan_RuralDevelopment.php">Rural Development</a>
    <a href="Services_Bhuvan_WaterResources.php">Water Resources</a>
    <a href="Services_Bhuvan_Geosciences.php">GeoSciences</a>
    <a href="Services_Bhuvan_UrbanInfrastructure.php">Urban and Infrastructure</a>
    <a href="Services_Bhuvan_OceanSciencesAtmosphere.php">Ocean Sciences and Atmosphere</a>
    <a href="Services_Bhuvan_Disaster_Management_Support.php">Disaster Management Support</a>
  </div>
  <a href="Services_Bhuvan_mobileapplications.php">Mobile Applications</a>
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

  .sub-links {
    margin-left: 20px;
    padding-top: 5px;
  }

  .sub-links a {
    display: block;
    padding: 5px 0;
    text-decoration: none;
    color: #007bff;
  }

  .sub-links a:hover {
    color: #0056b3;
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