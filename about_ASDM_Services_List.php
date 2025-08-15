<div class="services-list">
    <a style="background-color:#003366;  color: #ffffff;" class="text-white no-hover">Technical Details</a>    
    <a href="./Eop_Aerial_Objective.php" >Overview</a>
    <a href="./ASDM_AP.php" >Airborne Platform</a>
    <a href="./ASDM_Sensors.php" >Airborne Sensors</a>
    <a href="./ASDM_Ground_Survey.php" >Ground Surveys</a>
    <a href="./ASDM_OP.php" >Operational Projects</a>
    <a href="./ASDM_RP.php" >Research Projects</a>
    <a href="./ASDM_Users.php" >Users</a>
</div>
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