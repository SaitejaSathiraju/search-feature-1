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
              <b>Planning and Programming </b>
            </a>
          </li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->
   <div data-skip-id="PnP-main" id="PnP-main"></div>
  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">
    <div class="container-fluid ">
      <div class="row gy-4">
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100"> <?php include 'pnp_services_list.php'; ?> </div>
        <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="200">
          <h3> Planning and Programming System</h3>
          <br />
          <p style="font-size: 20px; text-align:justify"> NRSC Data Centre is responsible for generating the final schedule files which is used for satellite coverage. commanding. Presently payload programming is available for the following satellites. </p>
          <ol style="font-size: 20px; text-align:justify">
            <li>Cartosat-1 liAN data</li>
            <li>Cartosat-2 lian data</li>
            <li>Cartosat - 2S lian + MX , EVM data</li>
            <li>Resourcesat-1 L4 Mono and MX data</li>
            <li>Resourcesat-2 L3+AwIFS and L4 FMx</li>
            <li>Resourcesat-2A L3+AwIFS and L4 FMx and</li>
            <li>Oceansat-2 OCM</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- /Service Details Section -->
</main> <?php include 'footer.php'; ?>