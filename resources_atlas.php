<?php include 'header.php'; ?> 
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>River Basin Atlas</title>
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

      @media (max-width: 768px) {
        .heading-title {
          font-size: 26px !important;
          line-height: 1.3 !important;
        }

        .container li {
          font-size: 18px !important;
        }
      }

      #myptag {
        font-size: 20px;
        text-align: justify;
      }

      .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      #myTable {
        width: 100%;
        font-size: 18px;
      }

      #myTable td {
        padding: 12px 8px;
        vertical-align: middle;
      }

      #myTable a {
        word-break: break-word;
      }

      #searchInput {
        margin-bottom: 20px;
      }

      .menu-toggle-btn {
        width: 100%;
        margin-bottom: 15px;
      }

      @media (max-width: 768px) {
        #myTable {
          font-size: 16px;
        }
        
        #myptag {
          font-size: 18px;
        }
      }

      @media (max-width: 576px) {
        #myTable {
          font-size: 14px;
        }
        
        #myTable td {
          padding: 8px 4px;
          display: block;
          width: 100% !important;
          text-align: center;
          border-bottom: 1px solid #eee;
        }
        
        #myTable tr {
          display: block;
          margin-bottom: 15px;
          border: 1px solid #ddd;
        }
        
        #myTable td:nth-child(odd) {
          background-color: #f9f9f9;
        }
        
        #myTable td:nth-child(even) {
          background-color: #fff;
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
                <h1 class="heading-title text-break text-center">Atlas</h1>
              </div>
            </div>
          </div>
        </section>
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <div class="container">
            <ol>
              <li class="current">
                <b>Resources</b>
              </li>
              <li class="current">
                <b>Atlas</b>
              </li>
              <li class="current">
                <b>River Basin Atlas</b>
              </li>
            </ol>
          </div>
        </nav>
      </header>
      <!-- End Page Title -->
      <div data-skip-id="Atlas-main" id="Atlas-main"></div>
      <section id="service-details" class="service-details section">
        <div class="container-fluid">
          <div class="row gy-4">
            <button class="btn btn-primary menu-toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
            <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation"> <?php include 'resources_atlas_services_list.php'; ?> </aside>
<section class="col-md-9 col-lg-9">
              <h3>River Basin Atlas</h3>
              <br />
              <p id="myptag">The River Basin Atlas of India has been prepared under the joint project Generation of Database and Implementation of Web Enabled Water Resources Information System (India-WRIS) in the Country by the Central Water Commission (CWC) and Indian Space Research Organisation (ISRO). It has been launched on November 1, 2012 by Hon'ble Minister of Water Resources Shri. Harish Rawat at CWC, New Delhi. <br />
                <br />
                <a href="assets/pdf/atlas/RiverBasinAtlas_Full.pdf" target="_blank" class="btn btn-primary">Download Full River Basin Atlas</a>
              </p>
              <div class="table-responsive">
                <table id="myTable" class="table table-hover table-striped-rows">
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><a href="https://indiawris.gov.in/downloads/Indus%20Basin.pdf" target="_blank">Indus Basin</a></td>
                      <td>2</td>
                      <td><a href="https://indiawris.gov.in/downloads/Ganga%20Basin.pdf" target="_blank">Ganga Basin</a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><a href="https://indiawris.gov.in/downloads/Brahamaputra%20Basin.pdf" target="_blank">Brahmaputra Basin</a></td>
                      <td>4</td>
                      <td><a href="https://indiawris.gov.in/downloads/Barak%20and%20Others%20Basin.pdf" target="_blank">Barak and Others</a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><a href="https://indiawris.gov.in/downloads/Godavari%20Basin.pdf" target="_blank">Godavari Basin</a></td>
                      <td>6</td>
                      <td><a href="https://indiawris.gov.in/downloads/Krishna%20Basin.pdf" target="_blank">Krishna Basin</a></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td><a href="https://indiawris.gov.in/downloads/Cauvery%20Basin.pdf" target="_blank">Cauvery Basin</a></td>
                      <td>8</td>
                      <td><a href="https://indiawris.gov.in/downloads/Subernarekha%20Basin.pdf" target="_blank">Subarnarekha Basin</a></td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td><a href="https://indiawris.gov.in/downloads/Brahmani%20and%20Baitarni%20Basin.pdf" target="_blank">Brahmani and Baitarni Basin</a></td>
                      <td>10</td>
                      <td><a href="https://indiawris.gov.in/downloads/Mahanadi%20Basin.pdf" target="_blank">Mahanadi Basin</a></td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td><a href="https://indiawris.gov.in/downloads/Pennar%20Basin.pdf" target="_blank">Pennar Basin</a></td>
                      <td>12</td>
                      <td><a href="https://indiawris.gov.in/downloads/Mahi%20Basin.pdf" target="_blank">Mahi Basin</a></td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td><a href="https://indiawris.gov.in/downloads/Sabarmati%20Basin.pdf" target="_blank">Sabarmati Basin</a></td>
                      <td>14</td>
                      <td><a href="https://indiawris.gov.in/downloads/Narmada%20Basin.pdf" target="_blank">Narmada Basin</a></td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td><a href="https://indiawris.gov.in/downloads/Tapi%20Basin.pdf" target="_blank">Tapi Basin</a></td>
                      <td>16</td>
                      <td><a href="https://indiawris.gov.in/downloads/West%20Flowing%20Rivers%20from%20Tapi%20to%20Tadri%20Basin.pdf" target="_blank">WFR Tapi to Tadri</a></td>
                    </tr>
                    <tr>
                      <td>17</td>
                      <td><a href="https://indiawris.gov.in/downloads/West%20Flowing%20Rivers%20from%20Tadri%20to%20Kanyakumari%20Basin.pdf" target="_blank">WFR- Tadri-Kanyakumari</a></td>
                      <td>18</td>
                      <td><a href="https://indiawris.gov.in/downloads/East%20Flowing%20Rivers%20between%20Mahanadi%20and%20Pennar%20Basin.pdf" target="_blank">WFR Mahanadi -Pennar</a></td>
                    </tr>
                    <tr>
                      <td>19</td>
                      <td><a href="https://indiawris.gov.in/downloads/East%20Flowing%20Rivers%20between%20Pennar%20and%20Kanyakumari%20Basin.pdf" target="_blank">EFR Pennar_Kanyakumari</a></td>
                      <td>20</td>
                      <td><a href="https://indiawris.gov.in/downloads/West%20Flowing%20Rivers%20of%20Kutch%20and%20Saurashtra%20including%20Luni%20Basin.pdf" target="_blank">WFR Kutch-Saurashtra</a></td>
                    </tr>
                    <tr>
                      <td>21</td>
                      <td><a href="https://indiawris.gov.in/downloads/Area%20of%20Inland%20Drainage%20in%20Rajasthan%20Basin.pdf" target="_blank">Area of inland drainage in Rajasthan</a></td>
                      <td>22</td>
                      <td><a href="https://indiawris.gov.in/downloads/Minor%20Rivers%20Draining%20into%20Myanmar%20and%20Bangladesh%20Basin.pdf" target="_blank">Minor Rivers</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>
      </section>
    </main>
    <footer role="contentinfo"> <?php include 'footer.php'; ?> </footer>
  </body>
</html>
<script>
  // Toggle menu button text
  document.getElementById('menuToggleBtn').addEventListener('click', function() {
    const isExpanded = this.getAttribute('aria-expanded') === 'true';
    this.textContent = isExpanded ? 'Show Menu' : 'Hide Menu';
  });
</script>