<?php include 'header.php'; ?> <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Indian Missions</title>
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
      }

      .main-content {
        flex: 1;
        min-width: 60%;
        padding-right: 30px;
      }

      /* .sidebar {
        width: 400px;
        margin-left: auto;
      } */

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

      .image-gallery {
        margin-top: 20px;
      }

      .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        text-align: center;
      }

      .lightbox-content {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        max-width: 90%;
        max-height: 90%;
        margin: 0 auto;
      }

      .lightbox-content img {
        max-height: 80vh;
        max-width: 100%;
        border: 3px solid #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
      }

      .lightbox-content h3 {
        color: #fff;
        margin-bottom: 20px;
        font-size: 24px;
      }

      .close-lightbox {
        position: absolute;
        top: 20px;
        right: 30px;
        color: #fff;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
      }

      .image-item {
        margin-bottom: 20px;
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
          font-size: 22px !important;
        }

        .image-overlay {
				  position: absolute;
				  background-color: rgba(0, 0, 0, 0.6);
				  color: white;
				  font-size: 10px;
				  text-align: center;
				  font-weight: bold;
				  border-radius: 4px;
				  width: calc(100% - 24px);
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
                <h1 class="heading-title text-break text-center">Indian Missions</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Data Products</b>
              </li>
              <li class="current">
                <b>Indian Missions</b>
                </a>
              </li>
              <li class="current">
                <b>Policy</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <div data-skip-id="data_products-main" id="data_products-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> <?php include 'data_products_Services_List.php'; ?> </aside>
            <section class="col-lg-6">
              <h3>Policy</h3>
              <br />
              <!-- <div id="page1" class="page active"> -->
              <!-- <p id="p-style">For operating a remote sensing satellite from India, license and/or permission of the Government, through the nodal agency, will be necessary. As a national commitment and as a "public good", Government assures a continuous/improving observing/imaging capability from its own Indian Remote Sensing Satellites (IRS) programme.The Government of India, through the nodal agency, will be the sole and exclusive owner of all data collected/received from IRS. All users will be provided with only a license to use the said data and add value to the satellite data.Govemment reserves right to impose control over imaging tasks and distribution of data from IRS or any other Indian remote sensing satellite when it is of the opinion that national security and/or international obligations and/or foreign policies of the Government so require.</p><p id="p-style">For acquisition/distribution of remote sensing data within India, license/permission from the Government of India, through the nodal agency, will be necessary.Govemment reserves the right to select and permit agencies to acquire/distribute satellite remote sensing data in India. DOS shall be competent to decide about the procedure for granting license/permission for dissemination of such data and for the levy of necessary fees.</p><p id="p-style">To cater to the developmental needs of the country, the National Remote Sensing Centre (NRSC) of the Indian Space Research Organisation (ISRO)/DOS is vested with the authority to acquire and disseminate all satellite remote sensing data in India, both from Indian and foreign satellites.</p> -->
              <p id="p-style">The ISP-2023 enables open data access from remote sensing satellites of ISRO and share technologies, products, processes and best practices with NGEs( Non Government Entities) and/or Government companies. In this regard, remote sensing data of GSD of 5 meters and higher shall be made easily accessible in a timely manner on ‘free and open’ basis to all while remote sensing data of GSD of less than 5 meter, shall be made available free of any charges to Government entities but at fair and transparent pricing to NGEs. </p>
              <p id="p-style">
                <a href="assets/pdf/Indian Space Policy 2023.pdf" target="_blank">Indian Space Policy -2023</a>
                <!-- </div> -->
                <!-- Page 2 Content (your new content) -->
                <!-- <div id="page2" class="page"><p id="p-style">NRSC shall enter into appropriate arrangements with DOS for acquiring/distributing data from IRS within the visibility circle of NRSC receiving station(s). NRSC and/ or Antrix Corporation Ltd., shall be competent to enter into agreements with foreign satellite operator(s) for acquisition/distribution of foreign satellite data in India. However, NRSC will distribute the data as per terms agreed to with Antrix Corporation Ltd. NRSC shall maintain a systematic National Remote Sensing Data Archive and a log of all acquisitions/sales of data for all satellites. For acquisition and distribution of IRS data for use in countries other than India, the Government of India, through the nodal agency, shall grant license to such bodies/agencies of those countries as are interested in the acquisition/distribution of IRS data, as per specific procedures.</p><p id="p-style">The Antrix Corporation Limited (of DOS) is vested with the authority for receiving the applications for grant of license for acquisition/distribution of IRS data outside of India; to consider and decide about the grant of license within the policy considerations of the Government and to enter into licensing agreements with the prospective users on behalf of the Government. Antrix Corporation Ltd. shall also be competent to levy such fees for granting licenses as may be considered appropriate by it. It shall also be responsible, where necessary, for rendering any further help/guidance needed by the license.</p><p id="p-style">The Government reserves right to impose restrictions over imaging tasks and distribution of IRS data in any country when it is of the opinion that national security and/or international obligations and/or foreign policies of the Government so require.</p></div><div id="page3" class="page"><p id="p-style">The Government prescribes the following guidelines to be adopted for dissemination of satellite remote sensing data in India:</p><ol id="p-style"><li>All data of resolutions up to 1 m shall be distributed on a nondiscriminatory basis and on “as requested basis”</li><li>With a view to protect national security interests, all data of better than 1 m resolution shall be screened and cleared by the appropriate agency prior to distribution; and the following procedure shall be followed:</li><li>Government users namely, Ministries/ Departments/ Public Sector/ Autonomous Bodies/ Government R&D institutions/ Government Educational/ Academic Institutions, can obtain the data without any further clearance.</li><li>Private sector agencies, recommended at least by one Government agency, for supporting development activities, can obtain the data without any further clearance. </li><li>Other private, foreign and other users, including web based service providers, can obtain the data after further clearance from an inter-agency High Resolution Image Clearance Committee (HRC), already in place.</li><li>Specific requests for data of sensitive areas, by any user, can be distributed only after obtaining clearance from HRC. Specific sale/ non-disclosure agreements to be concluded between NRSC and other users for data of better than 1 m resolution.</li></ol><p id="p-style">This policy (RSDP-2011) comes into effect immediately and may be reviewed from time-to-time by the Government.</p></div><div class="pagination"><span onclick="showPage(1)">1</span><span onclick="showPage(2)">2</span><span onclick="showPage(3)">3</span></div>  --->
                <!-- <script>
              function showPage(pageNumber) {
                // Hide all pages
                document.querySelectorAll('.page').forEach(page => {
                  page.classList.remove('active');
                });
                // Show selected page
                document.getElementById('page' + pageNumber).classList.add('active');
                // Update pagination highlights
                document.querySelectorAll('.pagination span').forEach((span, index) => {
                  if (index === pageNumber - 1) {
                    span.classList.add('active');
                  } else {
                    span.classList.remove('active');
                  }
                });
              }

              // Make Page 1 active on page load
              showPage(1);
            </script> -->
            </section>
            <aside class="col-md-3 sidebar">
              <div class="section">
                <h3>IRS PRODUCTS</h3>
                <div class="image-gallery">
                  <div class="image-item" onclick="openLightbox(this)">
                    <img data-entity-type="file" src="assets/img/about/c2s_hitechcity_1kby500_1.jpg" alt="C2S-Hitech City, Hyderabad"/>
                    <div class="image-overlay">C2S-Hitech City, Hyderabad</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)">
                    <img data-entity-type="file" src="assets/img/about/c2s_mx_hitechcity_1kby500.jpg" alt="C2S MX Hitech City, Hyderabad"/>
                    <div class="image-overlay">C2S MX Hitech City, Hyderabad</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)">
                    <img data-entity-type="file" src="assets/img/about/rs2a_awifs_gujarat_1kby500.jpg" alt="RS2A AWIFS Gujarat"/>
                    <div class="image-overlay">RS2A AWIFS Gujarat</div>
                  </div>
                  <div class="image-item" onclick="openLightbox(this)">
                    <img data-entity-type="file" src="assets/img/about/rs2a_l3_mumbai_1kby500.jpg" alt="RS2A L3 Mumbai"/>
                    <div class="image-overlay">RS2A L3 Mumbai</div>
                  </div>
                </div>
              </div>
            </aside>
            <!-- Lightbox Popup -->
            <div class="lightbox" id="lightbox">
              <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
              <div class="lightbox-content">
                <h3 id="lightbox-title"></h3>
                <img id="lightbox-image" src="" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  function openLightbox(element) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    // Get image source and overlay text
    const imgSrc = element.querySelector('img').src;
    const titleText = element.querySelector('.image-overlay').textContent;
    // Set lightbox content
    lightboxImg.src = imgSrc;
    lightboxTitle.textContent = titleText;
    // Show lightbox
    lightbox.style.display = 'block';
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
    document.body.style.overflow = 'auto';
  }
  // Close when clicking outside image
  document.getElementById('lightbox').addEventListener('click', function(e) {
    if (e.target === this) {
      closeLightbox();
    }
  });
  // Close with ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeLightbox();
    }
  });

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
