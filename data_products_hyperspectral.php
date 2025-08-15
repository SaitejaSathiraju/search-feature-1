<?php include 'header.php'; ?> <?php include 'navbar.php'; ?> <style>
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
  }

  .main-content {
    flex: 1;
    min-width: 60%;
    padding-right: 30px;
  }

  .sidebar {
    width: 450px;
    margin-left: auto;
  }

  .sidebar h3 {
    color: #003366;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-top: 0;
  }

  .image-gallery {
    margin-top: 20px;
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .image-item {
    position: relative;
  }

  .image-item img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .image-overlay {
    position: absolute;
    bottom: 10px;
    left: 10px;
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
    padding: 8px 12px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 4px;
    width: calc(100% - 24px);
  }

  .breadcrumb {
    padding: 10px 20px;
    font-size: 14px;
    color: #666;
  }

  .breadcrumb a {
    color: #0066cc;
    text-decoration: none;
  }

  .breadcrumb a:hover {
    text-decoration: underline;
  }

  .section {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  }

  @media (max-width: 768px) {
    .container {
      flex-direction: column;
    }

    .main-content {
      padding-right: 0;
    }

    .sidebar {
      width: 100%;
      margin-left: 0;
      margin-top: 30px;
    }
  }

  .lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    z-index: 1000;
    text-align: center;
  }

  .lightbox-content {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    max-width: 90%;
    max-height: 90%;
    margin: 0 auto;
  }

  .lightbox-content img {
    max-height: 80vh;
    max-width: 100%;
    border: 3px solid #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
  }

  .lightbox-content h3 {
    color: #fff;
    margin-bottom: 20px;
    font-size: 24px;
  }

  .close-lightbox {
    position: absolute;
    top: 20px;
    right: 30px;
    color: #fff;
    font-size: 35px;
    font-weight: bold;
    cursor: pointer;
  }
</style>
<script>
  // JavaScript for any interactive functionality
  document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded successfully');
    // Example: Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  });
</script>
<main class="main">
  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-9">
            <h1 class="heading-title">India Missions</h1>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li>
            <a style="font-size:24px; color: #3f68b5;">
              <b>Data Products</b>
            </a>
          </li>
          <li class="current" style="font-size:24px; color: #3f68b5;">
            <a>
              <b>India Missions</b>
            </a>
          </li>
          <li style="font-size:24px; color: #3f68b5;">
            <a>
              <b>Hyperspectral</b>
            </a>
          </li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->
  <div data-skip-id="hyperspectral-main" id="hyperspectral-main"></div>
  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">
    <div class="container-fluid ">
      <div class="row gy-4">
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100"> <?php include 'data_products_Services_List.php'; ?> </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3>Hyperspectral</h3>
            <br />
            <table id="myTable" class="table table-hover  table-striped-rows" style="font-size:20px; text-align:justify">
              <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Satellite</th>
                  <th>Sensor </th>
                  <th>Resolution</th>
                  <th>Data Availablility</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width: 45px;">1</td>
                  <td style="width: 146px;">IMS-1</td>
                  <td style="width: 206px;">VNIR</td>
                  <td style="width: 178px; text-align:center;">500m</td>
                  <td style="width: 387px;">02-Jan-2009</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="sidebar">
            <div class="section">
              <h3>IRS PRODUCTS</h3>
              <div class="image-gallery">
                <div class="image-item" onclick="openLightbox(this)">
                  <img data-entity-type="file" src="assets/img/about/c2s_hitechcity_1kby500_1.jpg" />
                  <div class="image-overlay">C2S-Hitech City, Hyderabad</div>
                </div>
                <div class="image-item" onclick="openLightbox(this)">
                  <img data-entity-type="file" src="assets/img/about/c2s_mx_hitechcity_1kby500.jpg" />
                  <div class="image-overlay">C2S MX Hitech City, Hyderabad</div>
                </div>
                <div class="image-item" onclick="openLightbox(this)">
                  <img data-entity-type="file" src="assets/img/about/rs2a_awifs_gujarat_1kby500.jpg" />
                  <div class="image-overlay">RS2A AWIFS Gujarat</div>
                </div>
                <div class="image-item" onclick="openLightbox(this)">
                  <img data-entity-type="file" src="assets/img/about/rs2a_l3_mumbai_1kby500.jpg" />
                  <div class="image-overlay">RS2A L3 Mumbai</div>
                </div>
              </div>
            </div>
          </div>
          <!-- Lightbox Popup -->
          <div class="lightbox" id="lightbox">
            <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
            <div class="lightbox-content">
              <h3 id="lightbox-title"></h3>
              <img id="lightbox-image" src="" alt="">
            </div>
          </div>
        </div>
      </div>
      <script>
        function openLightbox(element) {
          const lightbox = document.getElementById('lightbox');
          const lightboxImg = document.getElementById('lightbox-image');
          const lightboxTitle = document.getElementById('lightbox-title');
          // Get image source and overlay text
          const imgSrc = element.querySelector('img').src;
          const titleText = element.querySelector('.image-overlay').textContent;
          // Set lightbox content
          lightboxImg.src = imgSrc;
          lightboxTitle.textContent = titleText;
          // Show lightbox
          lightbox.style.display = 'block';
          document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
          document.getElementById('lightbox').style.display = 'none';
          document.body.style.overflow = 'auto';
        }
        // Close when clicking outside image
        document.getElementById('lightbox').addEventListener('click', function(e) {
          if (e.target === this) {
            closeLightbox();
          }
        });
        // Close with ESC key
        document.addEventListener('keydown', function(e) {
          if (e.key === 'Escape') {
            closeLightbox();
          }
        });
      </script>
  </section>
</main> <?php include 'footer.php'; ?>