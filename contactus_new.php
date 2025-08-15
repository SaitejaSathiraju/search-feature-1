<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <style>
      .container li {
        font-size: 24px;
        color: #3f68b5;
      }

      .heading-title {
        word-break: break-word;
      }

      @media (max-width: 576px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }

        .container li {
          font-size: 18px !important;
        }
      }

      .contact-cards-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
      }

      .contact-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        /* Center all card content */
        text-align: center;
        /* Center text elements */
        flex: 1 1 calc(25% - 20px);
        /* 4 per row */
        max-width: calc(25% - 20px);
      }

      .contact-photo-container {
        width: 100%;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f5f5f5;
        border-top: 3px solid #3f68b5;
        /* Changed to top border */
        border-bottom: 3px solid #3f68b5;
        overflow: hidden;
        margin: 0;
      }

      .contact-photo {
        width: 200px;
        height: 250px;
        object-fit: cover;
        display: block;
        margin-top: 15px;
        border-top: 2px solid rgb(0, 0, 0);
        border-bottom: 2px solid rgb(0, 0, 0);
        border-left: 2px solid rgb(0, 0, 0);
        border-right: 2px solid rgb(0, 0, 0);
        overflow: hidden;
        position: relative;
      }

      .no-photo {
        width: 100%;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #777;
        font-size: 14px;
        background: #f5f5f5;
        border-top: 3px solid #3f68b5;
        border-bottom: 3px solid #3f68b5;
      }

      .contact-details {
        padding: 15px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .contact-name {
        font-size: 20px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 8px;
        text-align: center;
        width: 100%;
      }

      .contact-position {
        font-size: 18px;
        color: #e74c3c;
        margin-bottom: 15px;
        font-weight: 500;
        text-align: center;
        width: 100%;
      }

      .contact-link {
        display: inline-block;
        background: #3f68b5;
        color: white;
        padding: 8px 20px;
        border-radius: 4px;
        font-size: 15px;
        text-decoration: none;
        transition: background 0.3s;
        margin-top: 10px;
      }

      .service-details .row {
        align-items: flex-start;
      }

      .main-content {
        padding-left: 30px;
      }

      @media (max-width: 1200px) {
        .contact-card {
          flex: 1 1 calc(50% - 20px);
          /* 2 cards per row */
          max-width: calc(50% - 20px);
        }
      }

      @media (max-width: 768px) {
        .contact-card {
          flex: 1 1 100%;
          max-width: 100%;
          /* 1 card per row */
        }
      }

      .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
      }
    </style>
  </head>
  <body>
<main id="main-content" class="main" role="main">
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">Contact Us</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>About</b>
              </li>
              <li class="current">
                <b>Contact Us </b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="ContactUs-main" id="ContactUs-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'main_about_Services_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Contact Us</h3>
              <br />
              <!-- Modified Contact Cards Section - 3 per row -->
              <div class="contact-cards-container">
                <!-- Card 1 -->
                <div class="contact-card">
                  <img src="assets/img/contactus/1.jpg" alt="Dr. Prakash Chauhan" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Dr. Prakash Chauhan</div>
                    <div class="contact-position">Director</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>
                <!-- Card 2 -->
                <div class="contact-card">
                  <img src="assets/img/contactus/2.jpg" alt="Shri. P. Srinivasulu" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Shri. P. Srinivasulu</div>
                    <div class="contact-position">Associate Director</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>
                <!-- Card 3 -->
                <div class="contact-card">
                  <img src="assets/img/contactus/3.jpg" alt="Dr. S.K Srivastav" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Dr. S.K Srivastav</div>
                    <div class="contact-position">Chief General Manager, RCs</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>
                <!-- Card 4 -->
                 <div class="contact-card">
                  <img src="assets/img/contactus/6.jpg" alt="Shri. G.Srinivasa Rao" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Shri. G.Srinivasa Rao</div>
                    <div class="contact-position">Dy. Director, ECSA & Addl. Responsibility of Dy. Director, RSAA</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>

                <div class="contact-card">
                  <img src="assets/img/contactus/8.jpg" alt="Dr. S. Murali Krishnan" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Dr. S. Murali Krishnan</div>
                    <div class="contact-position">Dy. Director, DPA & Addl. Responsibility of Dy. Director, ASDMA</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>

                <div class="contact-card">
                  <img src="assets/img/contactus/9.jpg" alt="Dr. N Aparna" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Dr. N Aparna</div>
                    <div class="contact-position">Dy. Director, MSA</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>
                <!-- Card 5 -->
                <div class="contact-card">
                  <img src="assets/img/contactus/5.jpg" alt="Shri. Koteswara Rao K" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Shri. Koteswara Rao K</div>
                    <div class="contact-position">Dy. Director, SDRISA</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>
                <!-- Card 6 -->

                
                


                <!-- <div class="contact-card"><img src="assets/img/contactus/6.jpg" alt="Shri. G.Srinivasa Rao" class="contact-photo"><div class="contact-details"><div class="contact-name">Shri. G.Srinivasa Rao</div><div class="contact-position">Dy. Director, ECSA</div><a href="contactus_email_pn.php" class="contact-link">Contact Details</a></div></div> -->
                <!-- Card 7 -->
                <!-- <div class="contact-card"><img src="assets/img/contactus/6.jpg" alt="Shri. G.Srinivasa Rao" class="contact-photo"><div class="contact-details"><div class="contact-name">Shri. G.Srinivasa Rao</div><div class="contact-position">Dy. Director, RSAA</div><a href="contactus_email_pn.php" class="contact-link">Contact Details</a></div></div> -->
                <!-- Card 8 -->
                <!-- <div class="contact-card"><img src="assets/img/contactus/8.jpg" alt="Dr. S. Murali Krishnan" class="contact-photo"><div class="contact-details"><div class="contact-name">Dr. S. Murali Krishnan</div><div class="contact-position">Dy. Director, DPA</div><a href="contactus_email_pn.php" class="contact-link">Contact Details</a></div></div> -->
                <!-- Card 9 -->
                
                <!-- Card 10 -->
                <div class="contact-card">
                  <img src="assets/img/contactus/10.jpg" alt="Smt. C S Padmavathy" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Smt. C S Padmavathy</div>
                    <div class="contact-position">Dy. Director, SRQA</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>
                <!-- Card 11 -->
                
                <!-- <div class="contact-card"><img src="assets/img/contactus/8.jpg" alt="Dr. S. Murali Krishnan" class="contact-photo"><div class="contact-details"><div class="contact-name">Dr. S. Murali Krishnan</div><div class="contact-position">Dy. Director, ASDMA</div><a href="contactus_email_pn.php" class="contact-link">Contact Details</a></div></div> -->

                <div class="contact-card">
                  <img src="assets/img/contactus/bhuvan.jpg" alt="Shri. Abdul Hakeem K" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Shri. Abdul Hakeem K</div>
                    <div class="contact-position">Dy. Director, BGWSA</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>
                <!-- Card 12 -->
                <div class="contact-card">
                  <img src="assets/img/contactus/12.jpg" alt="Shri. Ankur Srivastava, IRSS" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Shri. Ankur Srivastava, IRSS</div>
                    <div class="contact-position">Controller</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>
                <!-- Card 13 -->
                <div class="contact-card">
                  <img src="assets/img/contactus/13.jpg" alt="Dr. K Chandrasekar" class="contact-photo">
                  <div class="contact-details">
                    <div class="contact-name">Dr. K Chandrasekar</div>
                    <div class="contact-position">Group Director, PPEG</div>
                    <a href="contactus_email_pn.php" class="contact-link">Contact Details</a>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>document.addEventListener("DOMContentLoaded", function() {
    var menuBtn = document.getElementById("menuToggleBtn");
    var sidebar = document.getElementById("mobileSidebar");
    $('#mobileSidebar').on('show.bs.collapse', function() {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function() {
      menuBtn.innerText = "Show Menu";
    });
  });</script>