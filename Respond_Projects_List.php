<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Respond Details</a>
  <a href="./Respond_Projects.php" >Overview</a>
  <a href="./Research_Areas_in_space.php" >Research Areas in Space</a>
  <a href="Respond_basket_2024.php" >Respond Basket-2024</a>
  <a href="Respond_proposal_format.php" >Respond Proposal Format</a>
  <a href="Respond_proposal_format_final.php" >Format for Final Project Report</a>
  <a href="Respond_proposal_submission.php" >Submission of Research Proposal</a>
  <a href="Respond_i_grasp_portal.php" >I-Grasp Portal</a>
  <a href="respond_contact.php" >Contact</a>
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