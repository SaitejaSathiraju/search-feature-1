<div class="services-list">
    <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover" >Technical Details</a>
    <a href="Services_AerialServices_Digital_Mapping_overview.php">Overview</a>
    <a href="Services_ASDM_AirbornePlatform.php">Airborne Platform</a>
	<a href="Services_ASDM_AirborneSensors.php">Airborne Sensors</a>
	<a href="Services_ASDM_GroundSurveys.php">Ground Surveys</a>
	<a href="Services_ASDM_OperationalProjects.php">Operational Projects</a>
	<a href="Services_ASDM_researchprojects.php">Research projects</a>
	<a href="Services_ASDM_users.php">Users</a>
	<a href="Services_ASDM_anyquery.php">Any Query</a>
    
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
document.addEventListener("DOMContentLoaded", function () {
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
