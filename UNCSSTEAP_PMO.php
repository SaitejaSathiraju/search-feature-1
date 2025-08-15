<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UN-CSSTEAP@NRSC PMO</title>
    <!-- Bootstrap and JS Dependencies -->
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css">
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
  </head>
  <body>
    <main id="main-content" class="main" role="main">
      <!-- Page Title -->
      <header class="page-title" role="banner">
        <section class="heading" role="banner">
          <div class="container-fluid">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-sm-10 col-md-9 col-lg-9">
                <h1 class="heading-title text-break text-center">UN-CSSTEAP@NRSC</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>UN-CSSTEAP@NRSC</b>
              </li>
              <li class="current">
                <b>Programme Management Office (PMO)</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="PMO-main" id="PMO-main"></div>
      <!-- Content Section -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn"> Show Menu </button>
            <!-- Sidebar -->
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'UNCSSTEAP_Services_List.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>NRSC CSSTEAP Programme Management Office</h3>
              <br>
              <!-- Profile Section -->
              <div class="container"> <?php
                      $profiles = [
                        [
                          'img' => '1.jpg',
                          'name' => 'Dr. M Naresh Kumar',
                          'designation' => 'Program Manager, NRSC CSSTEAP PMO',
                          'email' => ['cssteap_tc@nrsc.gov.in', 'nareshm@nrsc.gov.in'],
                          'tel' => '+91 040 23884352'
                        ],
                        [
                          'img' => '2.jpg',
                          'name' => 'Mrs. Meena P',
                          'designation' => 'Course Director, SRSDAP',
                          'email' => ['meena_p@nrsc.gov.in'],
                          'tel' => '+91 854222 5216'
                        ],
                        [
                          'img' => '3.jpg',
                          'name' => 'Mr. Anjaneyulu RVG',
                          'designation' => 'Course Director, SRSDAP',
                          'email' => ['anjaneyulu_rvg@nrsc.gov.in'],
                          'tel' => '+91 854222 5115'
                        ],
                        [
                          'img' => '4.jpg',
                          'name' => 'Dr. Heera Singh Rathlavath',
                          'designation' => 'Course Coordinator, SRSDAP',
                          'email' => ['heerasinghr@nrsc.gov.in'],
                          'tel' => '+91 854222 5248'
                        ],
                        [
                          'img' => '5.jpg',
                          'name' => 'Mrs. Latha James',
                          'designation' => 'Course Coordinator, SRSDAP',
                          'email' => ['latha_j@nrsc.gov.in'],
                          'tel' => '+91 854222 5118'
                        ],
                        [
                          'img' => '6.jpg',
                          'name' => 'Dr. PV Nagamani',
                          'designation' => 'Course Director, SRSOA',
                          'email' => ['nagamani_pv@nrsc.gov.in'],
                          'tel' => '+91 040 2388 4865'
                        ],
                        [
                          'img' => '7.jpg',
                          'name' => 'Mr. Rajesh Sikhakolli',
                          'designation' => 'Course Coordinator, SRSOA',
                          'email' => ['rajesh_s@nrsc.gov.in'],
                          'tel' => '+91 040 2388 4867'
                        ],
                      ];

                      foreach ($profiles as $profile) {
                        echo '
                                      
													
													<div class="profile-card">';
                        echo '
                                        
														
														<img src="assets/img/cssteap/pmo/' . htmlspecialchars($profile['img']) . '" class="img-fluid" alt="' . htmlspecialchars($profile['name']) . '">';
                        echo '
                                          
															
															<div class="profile-content">';
                        echo '
                                            
																
																<h3>' . htmlspecialchars($profile['name']) . '</h3>';
                        echo '
                                            
																
																<p class="font-weight-bold">' . htmlspecialchars($profile['designation']) . '</p>';
                        echo '
                                            
																
																<p>National Remote Sensing Centre, Indian Space Research Organisation</p>';
                        echo '
                                            
																
																<p>Tel: ' . htmlspecialchars($profile['tel']) . '</p>';
                        echo '
                                            
																
																<p>Website: 
                                              
																	
																	<a href="https://www.nrsc.gov.in/" target="_blank" rel="noopener noreferrer">www.nrsc.gov.in</a>
																</p>';
                        echo '
                                            
																
																<p>Email: ';
                        foreach ($profile['email'] as $email) {
                          echo '
                                              
																	
																	<a href="mailto:' . $email . '">' . str_replace(['@', '.'], ['[at]', '[dot]'], $email) . '</a>
																	<br>';
                        }
                        echo '
                                              
																	
																	</p>
																</div>
															</div>';
                      }
                ?> </div>
          </div>
        </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<!-- JS to Toggle Button Text -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var menuBtn = document.getElementById("menuToggleBtn");
    $('#mobileSidebar').on('show.bs.collapse', function() {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function() {
      menuBtn.innerText = "Show Menu";
    });
  });
</script>
<!-- Styles -->
<style>
  .container li {
    font-size: 24px;
    color: #3f68b5;
  }

  .profile-card {
    display: flex;
    flex-wrap: wrap;
    background-color: #f8f9fa;
    padding: 20px;
    border: 1px solid #dee2e6;
    border-radius: 10px;
    margin-bottom: 20px;
  }

  .profile-card img {
    width: 200px;
    height: auto;
    object-fit: contain;
    border-radius: 8px;
    margin-right: 20px;
  }

  .profile-content {
    flex: 1;
  }

  .profile-content h3 {
    font-size: 1.5rem;
    margin-top: 0;
  }

  .section-title {
    font-size: 1.5rem;
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-weight: bold;
  }

  a {
    word-break: break-word;
  }

  @media (max-width: 768px) {
    .profile-card {
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .profile-card img {
      margin-right: 0;
      margin-bottom: 15px;
    }

    .heading-title {
      font-size: 26px !important;
      line-height: 1.3 !important;
    }

    .container li {
      font-size: 18px !important;
    }
  }
</style>