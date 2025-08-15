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
  }

  .card {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    margin: 10px 0;
    padding: 16px;
    display: flex;
    align-items: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  }

  .card i {
    font-size: 24px;
    color: #1a73e8;
    margin-right: 15px;
    min-width: 30px;
    text-align: center;
  }

  .card a {
    color: #1a73e8;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
  }

  @media (max-width: 480px) {
    .card {
      padding: 12px;
    }

    .card i {
      font-size: 20px;
      margin-right: 10px;
    }

    .card a {
      font-size: 14px;
    }
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
            <h1 class="heading-title">Geo Spatial Services</h1>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li>
            <a style="font-size:24px; color: #3f68b5;">
              <b>About</b>
            </a>
          </li>
          <li>
            <a style="font-size:24px; color: #3f68b5;">
              <b>Organization</b>
            </a>
          </li>
          <li class="current" style="font-size:24px; color: #3f68b5;">
            <a href="About_GSS.php">
              <b>Geo Spatial Services</b>
            </a>
          </li>
          <li>
            <a style="font-size:24px; color: #3f68b5;">
              <b>Thematic Services</b>
            </a>
          </li>
          <li class="current" style="font-size:24px; color: #3f68b5;">
            <b>Forestry & Environment</b>
          </li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->
  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">
    <div class="container-fluid ">
      <div class="row gy-4">
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100"> <?php include 'about_GSS_Services_List.php'; ?> </div>
        <div class="col-lg-9" data-aos="fade-up" data-aos-delay="200">
          <h3>Forestry and Environment</h3>
          <br />
          <div class="card">
            <i class="fas fa-map"></i>
            <a href="https://bhuvan-app1.nrsc.gov.in/moef/" target="_blank" style="font-size:20px">Ministry of Environment,Forest and Climate Change</a>
          </div>
          <div class="card">
            <i class="fas fa-map"></i>
            <a href="https://bhuvan-app1.nrsc.gov.in/uk_forest/" target="_blank" style="font-size:20px">Uttarkhand Forest Department</a>
          </div>
          <div class="card">
            <i class="fas fa-map"></i>
            <a href="https://bhuvan-app1.nrsc.gov.in/ka_forest/" target="_blank" style="font-size:20px"> Karnataka Forest Department</a>
          </div>
          <div class="card">
            <i class="fas fa-mountain"></i>
            <a href="https://bhuvan-app1.nrsc.gov.in/hp_forest/hpfd.php" target="_blank" style="font-size:20px"> Himachal Forest Department</a>
          </div>
          <div class="card">
            <i class="fas fa-mountain"></i>
            <a href="https://bhuvan-app1.nrsc.gov.in/envis/" target="_blank" style="font-size:20px"> Environmental Information System - ENVIS</a>
          </div>
          <div class="card">
            <i class="fas fa-mountain"></i>
            <a href="https://bhuvan-app1.nrsc.gov.in/flycatchers/flycatchers.php" target="_blank" style="font-size:20px"> Distribution of Flycatchers</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main> <?php include 'footer.php'; ?>