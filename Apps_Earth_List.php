<div class="services-list">
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Technical Details</a>
  <a href="./Apps_Earth_Overview.php">Overview</a>
  <a style="background-color:#003366; color: #ffffff;" class="text-white no-hover">Applications</a>
  <div class="sub-links">
    <a href="./Apps_Earth_OS.php">Ocean Sciences</a>
    <a href="./Apps_Earth_ACS.php">Atmoshere And Climatic Studies</a>
    <a href="./Apps_Earth_Cryosphere.php">Cryrosphere Studies</a>
    <a href="./Apps_Earth_terre.php">Terrestrial Studies</a>
    <a href="./Apps_Earth_Solar.php">Solar Energy</a>
  </div>
  <a href="./Apps_Earth_AI.php">Atmosheric Instruments</a>
  <a href="./Apps_Earth_OI.php">Ocean Instruments</a>
</div>
<!-- PDF Modal -->
<div id="pdfModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closePdfModal()">&times;</span>
    <iframe id="pdfViewer" frameborder="0" style="width:100%; height:80vh;"></iframe>
  </div>
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

  /* Modal styles */
  .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
  }

  .modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 900px;
    position: relative;
  }

  .close {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    right: 15px;
    top: 5px;
    cursor: pointer;
  }

  .close:hover {
    color: black;
  }
</style>
<script>
  function openPdfModal(pdfUrl) {
    document.getElementById('pdfViewer').src = pdfUrl;
    document.getElementById('pdfModal').style.display = 'block';
  }

  function closePdfModal() {
    document.getElementById('pdfModal').style.display = 'none';
    document.getElementById('pdfViewer').src = '';
  }
  // Close modal when clicking outside of it
  window.onclick = function(event) {
    const modal = document.getElementById('pdfModal');
    if (event.target == modal) {
      closePdfModal();
    }
  }
</script>
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
        if (normalizedPath.includes(normalizedHref) || (storedValue && (linkText.includes(storedValue) || normalizedHref.includes(storedValue)))) {
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
    links.forEach(link => {
      link.addEventListener('click', function() {
        localStorage.removeItem('activeMenuItem');
      });
    });
  });
</script>