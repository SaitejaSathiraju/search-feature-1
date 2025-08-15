<?php include 'header.php'; ?> 
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Sitemap</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
  <link rel="stylesheet" href="assets/css/all_5.15.4.min.css" 
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
  <!-- Scripts -->
  <script src="assets/js/jquery.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>

  <style>
    #p-style {
      font-size: 20px;
      text-align: justify;
    }

    @media (max-width: 576px) {
      .heading-title {
        font-size: 26px !important;
        line-height: 1.3 !important;
      }
    }

    .sitemap-container {
      padding: 30px 15px;
    }

    .home-link-container {
      margin-bottom: 30px;
    }

    .home-link {
      font-weight: bold;
      font-size: 1.3rem;
      color: #fff;
      padding: 12px 24px;
      background: linear-gradient(to right, #3f51b5, #5c6bc0);
      border-radius: 50px;
      display: inline-block;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .home-link:hover {
      background: linear-gradient(to right, #303f9f, #3f51b5);
      transform: translateY(-2px);
      box-shadow: 0 5px 12px rgba(0, 0, 0, 0.15);
    }

    .home-link i {
      margin-right: 8px;
    }

    .sitemap-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 25px;
    }

    @media (max-width: 992px) {
      .sitemap-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 576px) {
      .sitemap-grid {
        grid-template-columns: 1fr;
      }
    }

    .sitemap-section {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 1px solid #e0e3e8;
    }

    .sitemap-section:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .sitemap-heading a {
      font-size: 1.2rem;
      color: #0d47a1;
      text-decoration: none;
      display: block;
      position: relative;
      padding-left: 20px;
    }

    .sitemap-heading a::before {
      content: "\f0da";
      font-family: "Font Awesome 5 Free";
      font-weight: 900;
      position: absolute;
      left: 0;
      top: 2px;
      color: #0d47a1;
    }

    .sitemap-main-link {
      font-weight: 600;
    }

    .sitemap-list {
      list-style: none;
      padding-left: 0;
      margin: 0;
    }

    .sitemap-item {
      margin-bottom: 8px;
    }

    .sitemap-link {
      color: #333;
      text-decoration: none;
      display: block;
      padding: 5px 0 5px 16px;
      position: relative;
      font-size: 0.95rem;
      transition: all 0.2s ease;
    }

    .sitemap-link::before {
      content: "›";
      position: absolute;
      left: 0;
      color: #3f68b5;
      font-weight: bold;
    }

    .sitemap-link:hover {
      color: #3f68b5;
      padding-left: 20px;
    }

    .sitemap-sublist {
      list-style: none;
      padding-left: 15px;
      margin-top: 5px;
      border-left: 2px dashed #d0d7e5;
    }

    @media (max-width: 768px) {
      .sitemap-grid {
        grid-template-columns: 1fr;
      }

      .home-link {
        font-size: 1.1rem;
        padding: 10px 20px;
      }
    }
  </style>
</head>
<body>
  <main id="main-content" class="main" role="main">
    <header class="page-title" role="banner">
      <section class="heading">
        <div class="container-fluid">
          <div class="row justify-content-center text-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-9">
              <h1 class="heading-title text-break text-center">Sitemap</h1>
            </div>
          </div>
        </div>
      </section>
    </header>

    <section id="service-details" class="service-details section">
      <div class="container-fluid">
        <div class="row gy-4">
          <div class="container sitemap-container">
            <!-- Home Link -->
            <div class="home-link-container text-center mb-4">
              <a href="./index.php" class="home-link">
                <i class="fas fa-home"></i> Home
              </a>
            </div>

            <div class="sitemap-grid">
              <!-- Add Your Sitemap Sections Below -->
              <?php include 'sitemap_sections.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer role="contentinfo">
    <?php include 'footer.php'; ?>
  </footer>
</body>
</html>
