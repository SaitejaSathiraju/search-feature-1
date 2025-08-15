<div class="services-list">
         <a style="background-color:#003366;  color: #ffffff;" class="text-white no-hover">India Missions</a>
    <a href="./Data_Products.php" >Overview</a>
   <!-- <a href="./Satellite_Handbooks.php" >Data Product DOI's</a>  --->
    <a href="./data_products_avail.php" >Data Availability</a>
   <!-- <a href="./india_miss_microwave.php" >Microwave</a>
    <a href="./data_products_hyperspectral.php" >Hyperspectral</a>  -->
    <a href="./data_products_policy.php" >Policy</a>
    <a href="./data_products_portals.php" >Data Dissemination Portals</a>
    <a href="./Data_Products_users.php" >Who Can Buy IRS Data</a>
    <a href="./Data_Products_anyquery.php" >Any Query?</a>
</div>
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
<script>
  document.addEventListener("DOMContentLoaded", function() {
      // Function to highlight the appropriate menu item
      function highlightMenuItem() {
          const links = document.querySelectorAll('.services-list a');
          const currentPath = window.location.pathname;
          const storedActive = localStorage.getItem('activeMenuItem');
          
          links.forEach(link => {
              const href = link.getAttribute('href');
              if (!href) return;

              const normalizedHref = href.replace("./", "/").toLowerCase();
              const normalizedPath = currentPath.toLowerCase();
              const linkText = link.textContent.trim().toLowerCase();
              const storedValue = storedActive ? storedActive.toLowerCase() : null;

              // Check if either:
              // 1. Current URL matches the link href
              // 2. Stored value matches the link text or href
              if (normalizedPath.includes(normalizedHref) || 
                  (storedValue && (linkText.includes(storedValue) || normalizedHref.includes(storedValue)))) {
                  link.style.backgroundColor = '#4abded';
                  link.style.color = '#ffffff';
              } else {
                  link.style.backgroundColor = '';
                  link.style.color = '#000000';
              }
          });
      }

      // Run on initial load
      highlightMenuItem();

      // Also run when window gains focus (user returns from child tab)
      window.addEventListener('focus', highlightMenuItem);

      // Optional: Clear highlighting when clicking other links
      // links.forEach(link => {
      //     link.addEventListener('click', function() {
      //         localStorage.removeItem('activeMenuItem');
      //     });
      // });
  });
</script>