<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Our Founder</title>
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

      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }

      .p-style p {
        font-size: 20px;
        text-align: justify;
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

      #myImage {
        display: block;
        margin: 0 auto;
        border: 4px solid #333;
        border-radius: 4px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        object-fit: cover;
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
                <h1 class="heading-title text-break text-center">Our Founder</h1>
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
                <b>Organization</b>
              </li>
              <li class="current">
                <b>Our Founder</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="founder-main" id="founder-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_orgStructure_Services_List.php'; ?> </aside>
            <section class="col-lg-9 p-style">
              <h3>Dr. Vikram Ambalal Sarabhai</h3>
              <br>
              <img src="assets/img/VSarabhai_2.jpg" alt="Founder" id="myImage" width="200px" height="250px" ; />
              <p class="p-style">
                <br />
                <b>Dr. Vikram Sarabhai</b> was born on 12 August 1919 in Ahmedabad, Gujarat. Dr. Vikram A Sarabhai obtained his Tripos (1939) and Ph. D. (1947) in Cosmic Ray Physics from Cambridge University, U.K. He worked with Sir C.V.Raman, the Nobel Laureate, at the Indian Institute of Science, Bangalore. On his return from Cambridge, Dr. Sarabhai set up the Physical Research Laboratory (PRL), Ahmedabad. He also established the Ahmedabad Textile Industry’s Research Association (ATIRA) and the Indian Institute of Management (IIM), Ahmedabad.
              </p>
              <p class="p-style"> With a belief that space technology could play a meaningful role in national development and solving the problems of common man, Dr. Vikram A. Sarabhai shaped the Indian Space Programme in 1960. The Indian Space programme concentrated on achieving self reliance and developing capability to build and launch communication satellites for television broadcast, telecommunications and meteorological applications; remote sensing satellites for management of natural resources. Thus Indian Space Programme initiated space activities in the country and gradually ISRO came into existence on August 15, 1969. </p>
              <p class="p-style"> Dr. Vikram Sarabhai further established the Community Science Centre under the aegis of the Nehru Foundation for Development, which was renamed as Vikram A. Sarabhai Community Science Centre. In 1966, Dr. Sarabhai was appointed as Chairman, Atomic Energy Commission, and Government of India. </p>
              <p class="p-style"> Awards : Shanti Swarup Bhatnagar Award (1962), Padma Bhushan (1966), Padma Vibhushan, posthumous (after-death) (1972). </p>
              <p class="p-style"> Distinguished Positions : President of the Physics section, Indian Science Congress (1962), President of the General Conference of the I.A.E.A., Verína (1970), Vice-President, Fourth U.N. Conference on 'Peaceful uses of Atomic Energy' (1971). </p>
              <p class="p-style"> Honours : The Vikram Sarabhai Space Centre, (VSSC), a research institute specialising in solid and liquid propellants for rockets located in Thiruvananthapuram (Trivandrum), capital of Kerala state, is named in his memory. In 1974, the International Astronomical Union at Sydney decided that a Moon Crater BESSEL in the Sea of Serenity will be known as the Dr. Sarabhai Crater. </p>
              <p class="p-style"> Dr. Vikram Sarabhai died on 30 December 1971 at Kovalam, Thiruvananthapuram, Kerala. ISRO has adopted his vision strategy in steering space programmes primarily aimed at societal benefits. </p>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html><script>
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