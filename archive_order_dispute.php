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
              <b> Returns and Disputes </b>
            </a>
          </li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->
   <div data-skip-id="dataReturn-main" id="dataReturn-main"></div>
  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">
    <div class="container-fluid ">
      <div class="row gy-4">
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100"> <?php include 'data_order_services_list.php'; ?> </div>
        <div class="col-lg-9 " data-aos="fade-up" data-aos-delay="200">
          <h3> Returns and Disputes</h3>
          <br />
          <p style="font-size: 20px; text-align:justify">For a period of thirty (30) days, NRSC warrants that the products delivered by NRSC will be limited to the area of interest ordered and the original media NRSA supplied the data product will be free from physical or material defects. If FTP is selected as the mode of data products dissemination, products will be available for 15 days at FTP server for the users to download. No complaint related to the quality and/or quantity of the products will be entertained unless the complaint is lodged at Data Acquisition Planning & Outreach Group within 30 days from the data of receipt of data. On acceptance of the complaint, products are to be returned in the original media supplied by Data Acquisition Planning & Outreach Group. NRSC's sole obligation and user's sole remedy under this Limited Warranty is that NRSC either, in its discretion, shall use reasonable efforts to repair or replace the Product or to provide a procedure within a commercially reasonable time so that the Product substantially conforms to the specifications. <br>
            <Br> This Limited Warranty is void if any non-conformity has resulted from accident, abuse, misuse, misapplication, or modification by someone other than NRSC. The Limited Warranty is for user's benefit only, and is non-transferable. NRSC is not liable for any incidental or consequential damages associated with users’ possession and/or use of the Product. <br>
            <br> In case any disputes arises on the applicability or interpretation of the above terms and conditions between the NRSC and the user, the matter shall be referred to the Secretary, Department of Space, Govt. of India, whose decision shall be binding on both parties.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /Service Details Section -->
</main> <?php include 'footer.php'; ?>