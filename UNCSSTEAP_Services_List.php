<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover" >UN-CSSTEAP@NRSC</a>
  <a href="./UNCSSTEAP_Overview.php">Overview</a>
  <a href="./UNCSSTEAP_TrainingCalendar.php">Training Calendar</a>
  <a href="./UNCSSTEAP_PMO.php">Programme Management Office (PMO)</a>
  <a href="./UNCSSTEAP_Participants.php" >Participants</a>
  <div class="sub-links">
    <a href="./2024_SRSDAP.php">2024-SRSDAP</a>
    <a href="./2024_SRSOA.php">2024-SRSOA</a>
    <a href="./2023_RSDA.php">2023-RSDA</a>
    <a href="./2023_RSDP.php">2023-RSDP</a>
  </div>
  <a href="./Publications.php">Publication</a>
  <a href="./UNCSSTEAP_Gallery.php">Gallery</a>
</div>
<style>
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