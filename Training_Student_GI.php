<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Student Projects/Internships</title>
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

      @media (max-width: 768px) {
        .container {
          flex-direction: column;
        }

        .main-content {
          padding-right: 0;
        }
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
                <h1 class="heading-title text-break text-center">Student Projects/Internships</h1>
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
                <b>Student Projects/Internships</b>
              </li>
              <li class="current">
                <b>General Information</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="OutreachOverview-main" id="OutreachOverview-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'Training_Student_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <p id="myptag"> 1270 students are enrolled, from all over the country, since 2018</p>
              <h3>General Information</h3>
              <p id="myptag"> The duration of the project work will be 3-12 months. Preference is given to the students doing project for a longer duration. Guide’s availability is a crucial factor</p>
              <ul>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> There will be no financial assistance from NRSC & NRSC does not charge for internship
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> The outstation students will have to arrange for their stay at Hyderabad, as NRSC Outreach Facility does not provide any accommodation
                </li>
                <li id="myptag">
                  <i class="bi bi-check-circle"></i> NRSC does not provide any free food, transport, etc, to the students. However, food is provided at subsidized rates.
                </li>
                <li style="font-size:20px;text-align:justify;">
                  <i class="bi bi-check-circle"></i> The work place can be at Jeedimetla or Shadnagar depending upon project & guide
                </li>
                <li style="font-size:20px;text-align:justify;">
                  <i class="bi bi-check-circle"></i> Students can apply by email at: <a href="mailto:&#115;&#116;&#117;&#100;&#101;&#110;&#116;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;"> &nbsp;student[at]nrsc[dot]gov[dot]in </a>
                </li>
                <li style="font-size:20px;text-align:justify;">
                  <i class="bi bi-check-circle"></i> Students are discouraged to send mails to any NRSC mail ID other than that specified here. Sending mails to multiple persons may lead to disqualification
                </li>
                <li style="font-size:20px;text-align:justify;">
                  <i class="bi bi-check-circle"></i> The aggregate marks reflected in the resume, will be verified with original certificates at the time of joining
                </li>
                <li style="font-size:20px;text-align:justify;">
                  <i class="bi bi-check-circle"></i> Number of students from each college will be limited to a maximum of eight students per branch for under-graduate and six students per institute for PG students
                </li>
                <li style="font-size:20px;text-align:justify;">
                  <i class="bi bi-check-circle"></i> After receiving the application, all further correspondence will be carried out through email only
                </li>
                <li style="font-size:20px;text-align:justify;">
                  <i class="bi bi-check-circle"></i> Student Projects/Internships are provided in offline mode.
                </li>
                <li style="font-size:20px;text-align:justify;">
                  <i class="bi bi-check-circle"></i> Student project facility is available for students who would like work full time at NRSC.
                </li>
              </ul>
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