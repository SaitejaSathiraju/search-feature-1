
<div class="services-list">
    <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover" >Training Courses</a>
    <a href="./Training_TC_Overview.php" >Overview</a>
	<a href="./Training_TC_calendar.php" >Training Calendar</a>
    <a href="./Training_TC_Facilities.php" >Training Facilities</a>
    <a href="./Training_TC_SCC.php" >Summary of Courses Conducted</a>
    <a href="./trainingCourses_Gallery.php" >Gallery</a>
    <a href="./Training_TC_ContactUs.php" >Contact</a>
</div>

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