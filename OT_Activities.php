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

      /* .sidebar {
        width: 450px;
        margin-left: auto;
      } */

      .sidebar h3 {
        color: #003366;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 0;
      }

      .image-gallery {
        margin-top: 20px;
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .image-item {
        position: relative;
      }

      .image-item img {
        width: 100%;
        height: auto;
        object-fit: contain;
        border: 1px solid #ddd;
        border-radius: 4px;
      }

      .image-overlay {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 8px 12px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 4px;
        width: calc(100% - 24px);
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

        .sidebar {
          /* width: 100%;
          margin-left: 0; */
          order: 3; 
          margin-top: 20px;
        }
		

        .sidebar h3 {
          font-size: 16px !important;
        }
      }

      #myptag {
        text-align: justify;
        font-size: 20px;
      }

      #line-style{
        height:1px;
        background-color:orange;
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
                <b>Activities</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="OutreachActivities-main" id="OutreachActivities-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'about_OT_serives_list.php'; ?> </aside>
            <section class="col-lg-6">
              <h3>Activities</h3>
              <br />
              <h4>Engaging Outreach Activities: Building Bridges and Fostering Connections</h4>
              <br />
              <p id="myptag">In a world driven by connections and collaborations, outreach activities serve as vital bridges between organizations, communities, and individuals. Whether it's reaching out to underprivileged communities, promoting awareness about crucial issues, or fostering partnerships between diverse groups, the essence of outreach lies in its ability to create meaningful interactions and bring about positive change. Let's delve into the significance and impact of outreach activities in today's society.</p>
              <hr id="line-style">
              <h4>Creating Awareness and Empowering Communities</h4>
              <br />
              <p id="myptag">One of the primary objectives of outreach activities is to organize Lectures, workshops, seminars, and awareness campaigns. Outreach initiatives aim to educate communities and empower individuals to about Space Technologies and Remote Sensing. These activities serve as catalysts for change, igniting young minds, sparking conversations and inspiring collective action.</p>
              <hr id="line-style">
              <h4>Building Partnerships and Collaboration</h4>
              <br />
              <p id="myptag">Effective outreach extends beyond mere dissemination of information; it fosters collaboration and partnerships among stakeholders. By bringing together government agencies, non-profit organizations, businesses, and community members, outreach activities create synergies that amplify their impact. Collaborative efforts enable the pooling of resources, expertise, and networks, leading to more comprehensive solutions to complex challenges, partnerships forged through outreach activities are instrumental in driving sustainable change.</p>
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>OUTREACH ACTIVITIES</h3>
                <div class="image-gallery">
                  <div class="image-item">
                    <img data-entity-type="file" src="assets/img/about/p3.jpg" />
                  </div>
                  <div class="image-item">
                    <img data-entity-type="file" src="assets/img/about/p6.jpg" />
                  </div>
                  <div class="image-item">
                    <img data-entity-type="file" src="assets/img/about/p8.jpg" />
                  </div>
                </div>
              </div>
            </aside>
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