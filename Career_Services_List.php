<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Careers</a>
  <a href="./Career_Contact.php">Contact</a>
  <a href="./Career_ApplyOnline.php">Apply Online</a>
  <!-- Results & Documents with Visible Sub-links -->
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Results & Documents</a>
  <div class="sub-links">
    <a href="./Career_Result_Active.php">Active</a>
    <a href="./Career_Result_Archive.php">Archive</a>
  </div>
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Advertisements</a>
  <div class="sub-links">
    <a href="./Advt_Active.php">Active</a>
    <a href="./Advt_Archive.php">Archive</a>
  </div>
  <a href="./Old_Qn_Papers.php">Old Question Papers</a>
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