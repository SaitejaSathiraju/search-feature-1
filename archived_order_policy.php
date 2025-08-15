<?php include 'header.php'; ?> <?php include 'navbar.php'; ?> <main class="main">
  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-9">
            <h1 class="heading-title"> Data Dissemination</h1>
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
              <b> Policy </b>
            </a>
          </li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->
   <div data-skip-id="dataPolicy-main" id="dataPolicy-main"></div>
  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">
    <div class="container-fluid ">
      <div class="row gy-4">
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100"> <?php include 'data_order_services_list.php'; ?> </div>
        <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="200">
          <h3> Policy</h3>
          <br />
          <p style="font-size: 20px; text-align:justify"> The government has adopted a comprehensive Remote Sensing Data Policy (RSDP) for the acquisition and distribution of remote sensing satellite data, from Indian and foreign satellites, for the civilian users in India. The policy comprehensively covers guidelines for satellite data acquisition and distribution in the country and for licensing the IRS capacities to other countries. Department of Space is the nodal agency for implementing this policy. In particular, the policy streamlines the distribution of high-resolution data to government users; private users involved in developmental activities with government and other private/ academic/ foreign users. <br><Br>

            The RSDP is envisaged to be a step towards making transparent procedures for satellite data distribution, allowing even high resolution data to be made available to the users without being restrictive. This has helped in regulating the process of data distribution so that the Indian users are not denied access to this valuable information - which has become a mainstay of the natural resources management activities of the country. Through this policy, the National Remote Sensing Centre (NRSC) of the Indian Space Research Organisation (ISRO)/ DOS is vested with the authority to acquire and disseminate all remote sensing satellite data in India, from both Indian and foreign satellites.
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