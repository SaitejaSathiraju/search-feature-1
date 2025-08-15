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
              <b> Limited Warranty and Liability </b>
            </a>
          </li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->
   <div data-skip-id="dataWarr-main" id="dataWarr-main"></div>
  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">
    <div class="container-fluid ">
      <div class="row gy-4">
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100"> <?php include 'data_order_services_list.php'; ?> </div>
        <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="200">
          <h3> Limited Warranty and Liability</h3>
          <br />
          <p style="font-size: 20px; text-align:justify">NRSC warrants (a) that it has sufficient distribution to make the Product available to the user under the terms hereof, free from the adverse claims of third parties; and (b) that the Product will, for thirty (30) days from the date of receipt, substantially conform to NRSC's specifications when used on appropriate computer hardware and DOS certified Software packages. The high resolution data products are complex in nature and may contain a few artefacts, which may not affect the usability of the data products supplied. The recommended usage for Cartosat-2 data is up to 1: 4000 scales. There are no expressed or implied warranties of fitness or merchantability given in connection with the sale or use of this product. NRSC disclaims all other warranties not expressly given herein.

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