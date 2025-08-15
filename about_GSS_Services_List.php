<div class="services-list">
  <a style="background-color:#003366;  color: #ffffff;" class="text-white no-hover">Technical Details</a>
  <a href="./EO_Bhuvan_Objective.php">Overview</a>
  <a href="./GSS_SDS.php">Satellite Data Services</a>
  <a style="background-color:#003366;  color: #ffffff;" class="text-white no-hover">Thematic Services</a>
  <div class="sub-links">
    <a href="./GSS_NRCs.php">Natural Resources Census</a>
    <a href="./GSS_Agri.php">Agriculture</a>
    <a href="./GSS_Forest.php">Forestry & Environment</a>
    <a href="./GSS_RD.php">Rural Development</a>
    <a href="./GSS_WR.php">Water Resources</a>
    <a href="./GSS_Geosci.php">GeoSciences</a>
    <a href="./GSS_Urban.php">Urban & Infrastructure</a>
    <a href="./GSS_Oc_Atm.php">Ocean Sciences and Atmosphere</a>
    <a href="./GSS_DMS.php">Disaster Management Support</a>
  </div>
  <a href="./GSS_MobApps.php">Mobile Applications</a>
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