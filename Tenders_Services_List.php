<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Tenders</a>
  <a href="Tenders_overview.php">Overview</a>
  <!-- Results & Documents with Visible Sub-links -->
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Purchase & Stores</a>
  <div class="sub-links">
    <a href="Tenders_Purchase_active.php">Active</a>
    <a href="Tenders_Purchase_archives.php">Archives</a>
  </div>
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Civil Works/Construction</a>
  <div class="sub-links">
    <a href="Tenders_cmg_active.php">Active</a>
    <a href="Tenders_cmg_archives.php">Archives</a>
  </div>
</div>
<!-- Add some CSS for the sub-links styling -->
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