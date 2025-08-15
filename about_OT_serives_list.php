<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Outreach</a>
  <a href="./OutReach_Overview.php">Overview</a>
  <a href="./OT_Activities.php">Activities</a>
  <a href="./OT_SE.php">Special Events</a>
  <a href="./OT_Visits.php">Visits</a>
  <a href="./OT_SnW.php">Space on Wheels</a>
  <!-- <a href="./OT_ChatBot.php">Geo-Spatial CHATBOT</a> -->
  <a href="./OT_DnD.php">Do's and Don'ts</a>
  <a href="./OutReach_HolidayList.php">Holiday List</a>
  <a href="./OT_contact.php">Contact</a>
</div>
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
</style>