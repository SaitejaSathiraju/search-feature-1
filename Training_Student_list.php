<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Student Projects/Internships</a>
  <a href="./Training_Student_Eligibility.php" style="color:#000000;">Eligibility and Duration</a>
  <a href="./Training_Student_RforP.php">Request for Project</a>
  <a href="./Training_Student_SandJ.php">Selection and Joining</a>
  <a href="./Training_Student_Feedback.php">Feedback</a>
  <a href="./Training_Student_Certification.php">Certification</a>
  <a href="./Training_Student_GI.php">General information</a>
  <a href="./Training_Student_Contact.php">Contact</a>
  <a href="./Training_Student_Facilities.php">Facilities</a>
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

  .services-list a.no-hover:hover {
    background-color: #003366 !important;
    color: #ffffff !important;
  }
</style>