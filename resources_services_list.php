<div class="services-list">
    <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Resources</a>
    <a href="./Handbooks.php">Satellite Handbooks</a>
    <a href="./resources_atlas.php">Atlas</a>
    <a href="./resources_iproperty.php">Intellectual Property</a>
    <a href="./resources_ebooks.php">E-books</a>
    <a href="./utility_softwares_1.php">Utility Software</a>
    <a href="./resources_newsletters.php">News Letters</a>
    <a href="./resources_tt_overview.php">Technology Transfers</a>
    <!-- <a href="#" >UIM_2024</a> -->
    <a href="./resources_brochures.php" >Brochures</a>
    
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    function highlightMenuItem() {
        const links = document.querySelectorAll('.services-list a');
        const currentPath = window.location.pathname.toLowerCase();
        const storedActive = localStorage.getItem('activeMenuItem')?.toLowerCase();

        links.forEach(link => {
            const href = link.getAttribute('href');
            if (!href) return;

            const normalizedHref = href.replace("./", "/").toLowerCase();
            const linkText = link.textContent.trim().toLowerCase();

            // Exact match instead of includes
            const isPathMatch = currentPath === normalizedHref;
            const isStoredTextMatch = storedActive && (linkText === storedActive || normalizedHref === `/${storedActive}.php`);

            if (isPathMatch || isStoredTextMatch) {
                link.style.backgroundColor = '#4abded';
                link.style.color = '#ffffff';
            } else {
                link.style.backgroundColor = '';
                link.style.color = '#000000';
            }
        });
    }

    highlightMenuItem();
    window.addEventListener('focus', highlightMenuItem);

    const links = document.querySelectorAll('.services-list a');
    links.forEach(link => {
        link.addEventListener('click', function () {
            localStorage.removeItem('activeMenuItem');
        });
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