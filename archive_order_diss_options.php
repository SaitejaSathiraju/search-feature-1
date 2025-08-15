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
              <b> Dissemination Options </b>
            </a>
          </li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->
   <div data-skip-id="dataDissOpt-main" id="dataDissOpt-main"></div>
  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">
    <div class="container-fluid ">
      <div class="row gy-4">
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100"> <?php include 'data_order_services_list.php'; ?> </div>
        <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="200">
          <h3> Dissemination Options</h3>
          <br />
          <ol style="font-size: 20px; text-align:justify">
            <li>
              <b>Emergency products :</b> These are standard georeferenced Products generated for emergency responses like disasters, etc without visual quality inspection with a turn around time of one hour. Please <a  href="archive_any_query.php">Contact Data Acquisition Planning & Outreach Group</a> for ordering these products.
            </li>
            <br />
            <li>
              <b>Urgent Products :</b> These are standard georeferenced Products generated for urgent responses like disasters ,etc with quality inspection with a turn around time of one hour. Only limited number can be supplied
            </li>
            <br />
            <li>
              <b>Normal Products : </b>All types ofProcessing levels as defined for the mission can be supplied within 24 hours .
            </li>
            <br />
            <li>
              <b>Value added Products :</b> Precision products/Mosaiced/Merged products can be supplied within 72 hours .
            </li>
            <br />
            <li>
              <b>Subscription Products :</b> Standard Georeferenced / Orthokit products in Near real time within 6 hours for a specified Area of Interest can be supplied on yearly basis for Registered users <p></p>
            </li>
          </ol> <br/>
          <h3> Modes of dissemination</h3>
          <br />
          <ol style="font-size: 20px; text-align:justify">
            <li>SFTP, Media DVD, Photoprint , WebService – Bhuvan</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- /Service Details Section -->
</main><?php include 'footer.php'; ?>