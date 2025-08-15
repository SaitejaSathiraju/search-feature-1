<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Outreach</title>
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/all.min.css" />
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

      .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      }

      .item h3 {
        margin-top: 20px;
        font-size: 1.2rem;
      }

      .item p {
        font-size: 1rem;
        line-height: 1.6;
      }

      @media (max-width: 768px) {
        .section {
          padding: 10px;
        }

        .item h3 {
          font-size: 1rem;
        }

        .item p {
          font-size: 0.95rem;
        }
      }

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }
      }

      .do-section {
        background: #e6f7ff;
        /* light blue */
        border-left: 5px solid #1890ff;
      }

      .dont-section {
        background: #fff1f0;
        /* light red */
        border-left: 5px solid #ff4d4f;
      }

      #myptag {
        text-align: justify;
        font-size: 20px;
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
                <h1 class="heading-title text-break text-center">Outreach</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Training & Outreach</b>
              </li>
              <li class="current">
                <b>Outreach</b>
              </li>
              <li class="current">
                <b>Do's and Don'ts</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="OutreachDnD-main" id="OutreachDnD-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_OT_serives_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>Do's and Don'ts</h3>
              <br />
              <div class="section do-section">
                <h3>Do's</h3>
                <div class="item">
                  <h3>Be Curious</h3>
                  <p id="myptag">Ask questions! NRSC outreach facilities often have knowledgeable staff who are eager to share information and engage in discussions about space.</p>
                </div>
                <div class="item">
                  <h3>Participate</h3>
                  <p id="myptag">Engage in exhibits, demonstrations, or activities available at the facility. Hands-on experiences can enhance your understanding and enjoyment of space science.</p>
                </div>
                <div class="item">
                  <h3>Respect Rules and Guidelines</h3>
                  <p id="myptag">Follow the rules and guidelines for behaviour and safety within the facility. This ensures a positive experience for everyone and helps protect exhibits and equipment.</p>
                </div>
                <div class="item">
                  <h3>Take Your Time</h3>
                  <p id="myptag">Space outreach facilities often have a lot to offer. Take your time exploring exhibits, reading informational displays, and watching presentations or Water Rocket.</p>
                </div>
                <div class="item">
                  <h3>Bring Your Camera</h3>
                  <p id="myptag">Capture memories of your visit by taking photos. NRSC Outreach facility have stunning exhibits, Selfie corners and displays that you'll want to remember.</p>
                </div>
                <div class="item">
                  <h3>Share Your Experience</h3>
                  <p id="myptag">Spread the word about your visit to friends and family. Sharing your enthusiasm for space science can inspire others to visit NRSC Outreach facility. Also Share your experience with us for further improving the facility.</p>
                </div>
              </div>
              <div class="section dont-section">
                <h3>Don'ts</h3>
                <div class="item">
                  <h3>Don't Touch Without Permission</h3>
                  <p id="myptag">Respect any signs or instructions regarding touching exhibits or equipment. Some items may be fragile or sensitive to handling.</p>
                </div>
                <div class="item">
                  <h3>Don't Disrupt Others</h3>
                  <p id="myptag">Be mindful of other visitors, Office premises and avoid disruptive behaviours that could detract from their experience.</p>
                </div>
                <div class="item">
                  <h3>Don't Miss Opportunities to Learn</h3>
                  <p id="myptag">NRSC outreach facility often offer guided tours, presentations, or workshops. Don't miss out on these opportunities to deepen your understanding of space science.</p>
                </div>
                <div class="item">
                  <h3>Don't Leave Trash Behind</h3>
                  <p id="myptag">Dispose of any trash or recyclables in designated bins to help keep the facility clean and welcoming for other visitors.</p>
                </div>
                <div class="item">
                  <h3>Don't Be Afraid to Ask for Help</h3>
                  <p id="myptag">If you have questions or need assistance during your visit, don't hesitate to ask a staff member for help.</p>
                </div>
              </div>
              <p id="myptag">By following these dos and don'ts, you can have a rewarding and enjoyable experience during your visit to a NRSC Outreach facility.</p>
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