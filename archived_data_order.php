<?php include 'header.php'; ?> <?php include 'navbar.php'; ?> <main class="main">
  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-9">
            <h1 class="heading-title">  Data Dissemination </h1>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li>
            <a style="font-size:24px; color: #3f68b5;">
              <b>Services</b>
            </a>
          </li>
          <li>
            <a  style="font-size:24px; color: #3f68b5;" ">
              <b> Data Dissemination </b>
            </a>
          </li>
          <li>
            <a style="font-size:24px; color: #3f68b5;">
              <b> Archived Data Order </b>
            </a>
          </li>
          <li>
            <a  style="font-size:24px; color: #3f68b5;" ">
              <b> Overview </b>
            </a>
          </li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->
  <div data-skip-id="dataOrder-main" id="dataOrder-main"></div>
  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">
    <div class="container-fluid ">
      <div class="row gy-4">
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100"> <?php include 'data_order_services_list.php'; ?> </div>
        <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="200">
          <h3> Overview</h3>
          <br />
          <p style="font-size: 20px; text-align:justify"> Earth Observation (EO) from the satellite platforms has proven to be an indispensable tool for mapping, monitoring and management of natural resources along with environmental assessment at global, regional and local levels. This is particularly due to multi-platform, multi-resolution, multi-temporal and synoptic viewing capabilities from various space platforms. NRSC is a nodal centre for satellite dissemination in India. Data Acquisition Planning & Outreach Group is responsible for IRS data dissemination to Indian and SAARC-BIMSTEC country users. And also it is responsible for distribution of foreign high resolution satellite data to Indian Users. <br><Br>

            Data from EO satellites support wide range of information needs of the user community for better understanding of the Earth system at global to local scale and helps in providing information on natural resources, agricultural, water, land use, forests, weather, natural disasters and so on. With a host of payloads on-board the series of Indian Remote Sensing (IRS) Satellites, the Indian EO system provides a wide variety of operational services to the user community in the country. <br><Br>

            The satellite data is acquired, processed and disseminated to the user community as standard and value added products. In order to minimize the turn-around-time from data acquisition to product delivery; and to provide near real time data for critical applications, Integrated Multi-mission Ground Segment for Earth Observation Satellites (IMGEOS) has been commissioned at Shadnagar campus of NRSC.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /Service Details Section -->
</main> <?php include 'footer.php'; ?>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var menuBtn = document.getElementById("menuToggleBtn");
    var sidebar = document.getElementById("mobileSidebar");
    $('#mobileSidebar').on('show.bs.collapse', function() {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function() {
      menuBtn.innerText = "Show Menu";
    });
  });
</script>