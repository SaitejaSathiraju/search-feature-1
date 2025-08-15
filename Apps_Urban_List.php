<div class="services-list">
<a style="background-color:#003366; color: #ffffff;" class="text-white no-hover" >Technical Details</a>
    <a href="./Apps_Urban_Overview.php" >Overview</a>
    <a href="./Apps_Urban_Apps.php" >Applications</a>
    <a href="./Apps_Urban_Sensors.php" >Sensors</a>
    <a href="./Apps_Urban_Users.php" >Users</a>
    <a href="./Apps_Urban_Portals.php" >Portals</a>
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
