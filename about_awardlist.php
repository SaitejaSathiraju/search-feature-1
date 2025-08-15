<div class="services-list">
  <a style="background-color:#003366;  color: #ffffff;" class="text-white no-hover">Awards</a>
  <a href="./about_AandA_year2024.php"> Year 2024</a>
  <a href="./about_AandA_year2023.php"> Year 2023</a>
  <a href="./about_AandA_year2017.php">Year 2017</a>
  <a href="./about_AandA_year2016.php">Year 2016</a>
  <a href="./about_AandA_year2015.php"> Year 2015</a>
  <a href="./about_AandA_year2014.php"> Year 2014</a>
  <a href="./about_AandA_year2013.php"> Year 2013</a>
  <a href="./about_AandA_year2012.php"> Year 2012</a>
  <a href="./about_AandA_year2010.php"> Year 2009-2010</a>
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