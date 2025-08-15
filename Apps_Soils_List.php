<div class="services-list">
<a style="background-color:#003366; color: #ffffff;" class="text-white no-hover" >Technical Details</a>
    <a href="./Apps_Soils_Overview.php" >Overview</a>
    <a href="./Apps_Soils_Apps.php" >Applications</a>
    <a href="./Apps_Soils_Sensors.php" >Sensors</a>
    <a href="./Apps_Soils_Users.php" >Users</a>
    <a href="./Apps_Soils_Portals.php" >Portals</a>
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