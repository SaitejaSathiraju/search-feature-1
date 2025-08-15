<div class="services-list">
     <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover" >Atlas Details</a>
    <a href="./resources_atlas.php" >River Basin Atlas</a>
    <a href="./resources_atlas_wastelands.php">Wastelands Atlas</a>
    <a href="./resources_atlas_FloodHazard_Zonation.php" >Flood Hazard Zonation Atlas</a>
    <a href="./resources_atlas_glacialLake.php" >Glacial Lake Atlas</a>
    <a href="./resources_atlas_teaGarden.php" >Tea Garden Atlas</a>
    <a href="./resources_atlas_landslide.php" >Landslide Atlas</a>
    <a href="./resources_atlas_geology.php" >Geology Atlas</a>
    <a href="./resources_atlas_LULC.php" >LULC Atlas</a>
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