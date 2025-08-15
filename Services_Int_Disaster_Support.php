<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>International Disaster Support</title>
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

      #p-style {
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

        #p-style {
          font-size: 14px !important;
        }
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
                <h1 class="heading-title text-break text-center">International Disaster Support</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol class="breadcrumb bg-transparent p-0">
              <li class="breadcrumb-item"><b>Services</b></li>
              <li class="breadcrumb-item"><b>International Disaster Support</b></li>
              <li class="breadcrumb-item active" aria-current="page"><b>Overview</b></li>
            </ol>
          </div>
        </nav>
      </header>

      <div data-skip-id="IntDM-main" id="IntDM-main"></div>

      <section id="service-details" class="service-details section py-3">
        <div class="container-fluid">
          <div class="row gy-4">
            <!-- Mobile Toggle Button -->
            <div class="col-12 d-md-none">
              <button class="btn btn-primary mb-3 w-100" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">
                Show Menu
              </button>
            </div>

            <!-- Sidebar Menu -->
            <aside id="mobileSidebar" class="collapse d-md-block col-12 col-md-3 col-lg-3 mb-3 mb-md-0" aria-label="Course Navigation">
              <?php include 'Services_Int_Disaster_Support_list.php'; ?>
            </aside>

            <!-- Main Content -->
            <section class="col-12 col-md-9 col-lg-9">
              <h3>International Disaster Support</h3>
              <br />
              <p id="p-style">
                NRSC provides IRS data for the global disaster emergencies by servicing the International Charter space, Sentinel Asia, and ASEAN Coordinating Centre for Humanitarian Assistance (<em>AHA Centre</em>).
              </p>

              <p id="p-style">
                International Charter Space is composed of space agencies and system operators worldwide who work together to provide satellite imagery for disaster monitoring purposes 
                (<a class="link" href="https://disasterscharter.org">https://disasterscharter.org/</a>).
              </p>

              <p id="p-style">
                The AHA Centre is an intergovernmental organisation established by the ten ASEAN Member States to facilitate cooperation and coordination of disaster management. 
                The agreement was signed by ASEAN Foreign Ministers on 17 November 2011. The AHA Centre performs Risk Identification, Early Warning, and Monitoring. 
                More at <a class="link" href="https://ahacentre.org">https://ahacentre.org/</a>.
              </p>

              <p id="p-style">
                The Sentinel Asia initiative is a collaboration among space agencies, disaster management agencies, and international bodies to apply remote sensing and Web-GIS 
                technologies for disaster support in the Asia-Pacific region. Supported by agencies like APRSAF, UN ESCAP, UN OOSA, AIT, and ADRC.
              </p>

              <p id="p-style">
                <a class="link" href="https://www.aprsaf.org/initiatives/sentinel_asia/">https://www.aprsaf.org/initiatives/sentinel_asia/</a>,
                <a class="link" href="https://sentinel.tksc.jaxa.jp">https://sentinel.tksc.jaxa.jp</a>
              </p>
            </section>
          </div>
        </div>
      </section>
    </main>

    <?php include 'footer.php'; ?>
  </body>
</html>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var menuBtn = document.getElementById("menuToggleBtn");
    var sidebar = document.getElementById("mobileSidebar");

    $('#mobileSidebar').on('show.bs.collapse', function () {
      menuBtn.innerText = "Hide Menu";
    });

    $('#mobileSidebar').on('hide.bs.collapse', function () {
      menuBtn.innerText = "Show Menu";
    });
  });
</script>
