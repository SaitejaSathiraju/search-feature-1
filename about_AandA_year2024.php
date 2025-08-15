<?php include 'header.php'; ?> 
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Achievement & Awards</title>
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

      .breadcrumbs {
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

      /* Table styles */
      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        font-size: 20px;
      }

      th,
      td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }

      th {
        background-color: #3498db;
        color: white;
        font-weight: bold;
        position: sticky;
        top: 0;
      }

      tr:nth-child(even) {
        background-color: #f8f9fa;
      }

      tr:hover {
        background-color: #f1f7fd;
      }

      .hindi {
        font-family: 'Nirmala UI', 'Mangal', sans-serif;
      }

      /* Card styles for mobile */
      .card-table {
        display: none;
      }
      
      .card-row {
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
      }
      
      .card-header {
        background-color: #3498db;
        color: white;
        padding: 10px 15px;
        font-weight: bold;
      }
      
      .card-body {
        padding: 15px;
      }
      
      .card-item {
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
      }
      
      .card-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
      }
      
      .card-label {
        font-weight: bold;
        color: #555;
        display: block;
        margin-bottom: 3px;
      }
      
      /* Responsive styles */
      @media screen and (max-width: 768px) {
        table {
          display: none;
        }
        
        .card-table {
          display: block;
        }
        
        .section h3 {
          font-size: 20px;
        }
      }

      @media screen and (min-width: 769px) {
        /* Column widths for desktop */
        #myTable td:first-child,
        #myTable th:first-child {
          width: 1%;
        }

        #myTable td:nth-child(2),
        #myTable th:nth-child(2) {
          width: 10%;
        }

        #myTable td:nth-child(3),
        #myTable th:nth-child(3) {
          width: 20%;
        }

        #myTable td:nth-child(4),
        #myTable th:nth-child(4) {
          width: 5%;
        }

        #myTable td:nth-child(5),
        #myTable th:nth-child(5) {
          width: 5%;
        }

        #myTable td:nth-child(6),
        #myTable th:nth-child(6) {
          width: 10%;
        }

        #myTable td:nth-child(7),
        #myTable th:nth-child(7),
        #myTable td:nth-child(8),
        #myTable th:nth-child(8) {
          width: 20%;
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
                <h1 class="heading-title text-break text-center"> Achievements & Awards</h1>
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
                <b>Achievements & Awards </b>
              </li>
              <li class="current">
                <b>Year 2024 </b>
              </li>
            </ol>
          </div>
        </nav>
        </div>
        <!-- End Page Title -->
        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
          <div class="container-fluid">
            <div class="row gy-4">
              <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
              <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3" aria-label="Course Navigation"> 
                <?php include 'about_awardlist.php'; ?> 
              </aside>
              <section class="col-md-9 col-lg-9">
                <h3>Awards/Achivements (2024-25)</h3>
                <br>
                
                <!-- Desktop Table -->
                <table id="myTable">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Employee Code</th>
                      <th>Name of the Individual / Group</th>
                      <th>Area</th>
                      <th>Group</th>
                      <th>Division</th>
                      <th>Award Details</th>
                      <th>Event Details</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>NR02325</td>
                      <td>DR. STUTEE GUPTA</td>
                      <td>RSA</td>
                      <td>SR & LUM</td>
                      <td>RDWMD</td>
                      <td>Women Geospatial Scientist Award-2024</td>
                      <td>GEOSPATIA, Radhanath Sikdar Institute of Geospatial Science and Technology (RSIGST)</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>NR01327</td>
                      <td>RANI T E</td>
                      <td>RSA</td>
                      <td>SR & LUM</td>
                      <td>MAP RECORD</td>
                      <td>Best Paper in the Theme(Optimum positioning for airborne LiDAR using GNSS Virtual Reference Stations)</td>
                      <td>44th Indian National Cartographic Assiciation (INCA) international congress</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>NR01589</td>
                      <td>ANJANI</td>
                      <td>BG&WSA</td>
                      <td>TDVASG</td>
                      <td>TD&VAS OFF</td>
                      <td>The excellent paper award for "AI Driven techniques for Night Time Lights analysis to assess Socio Economic Parameters"</td>
                      <td>ACRS2024</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>NR02065</td>
                      <td>MAHESH PATHAKOTI</td>
                      <td>ECSA</td>
                      <td>AS&LSPG</td>
                      <td>ASD</td>
                      <td rowspan="2">Silver Medal for Development of Cloud-based Air pollution Tracking system using Machine Learning and Google Earth Engine</td>
                      <td rowspan="2">ISRS I-CON contest 2024</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>NR02370</td>
                      <td>SANTHOSHI T</td>
                      <td>BG&WSA</td>
                      <td>BCGG</td>
                      <td>VASD</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>NR02519</td>
                      <td>PRUTHIVI RAJ BEHERA</td>
                      <td>RSA</td>
                      <td>AA&CIG</td>
                      <td>AS&CID</td>
                      <td>2nd Prize for Oral Presentation National Symposium</td>
                      <td rowspan="2">Remote Sensing for Sustainable Future: A Roadmap towards Viksit Bharat' and Annual Convention 2024 of ISRS & ISG at AKTU</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>NR01657</td>
                      <td>DR.CH.SUDHAKAR REDDY</td>
                      <td>RSA</td>
                      <td>FEG</td>
                      <td>FBED</td>
                      <td>Presidents' Appreciation Medal Award</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>NR02063</td>
                      <td>SURAJ REDDY R</td>
                      <td>RSA</td>
                      <td>FEG</td>
                      <td>FRD</td>
                      <td>Prof. Kakania Nageswara Rao Young achiever award</td>
                      <td>Indian Society of Geomatics December, 2024</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>NR02017</td>
                      <td>ANJU BAJPAI</td>
                      <td>RC</td>
                      <td>RRSCNAGP</td>
                      <td>RRSC-NAGP</td>
                      <td rowspan="5">Best Paper Award</td>
                      <td rowspan="5">44th INCA International Congress</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>NR02015</td>
                      <td>GIRISH KUMAR T P</td>
                      <td>RC</td>
                      <td>RRSCNAGP</td>
                      <td>RRSC-NAGP</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>NR01994</td>
                      <td>SURYA PRAKASA RAO D</td>
                      <td>RC</td>
                      <td>RRSCNAGP</td>
                      <td>RRSC-NAGP</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>NR02005</td>
                      <td>SREENIVASAN G</td>
                      <td>RC</td>
                      <td>RRSCNAGP</td>
                      <td>RRSC-NAGP</td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>GI01236</td>
                      <td>SUSHIL KUMAR SRIVASTAV</td>
                      <td>RC</td>
                      <td>RRSCDELH</td>
                      <td>RRSC-DELHI</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td>RRSC-Central Team</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>Best Stall Presentation Award </td>
                      <td>Mahakoshal Vigyan Mela, Jabalpur during 15 – 18 November 2024.</td>
                    </tr>
                    <tr>
                      <td>14</td>
                      <td>NR01886</td>
                      <td>ABHIJIT MADHUSUDHAN PILLAI</td>
                      <td>RC</td>
                      <td>RRSCNAGP</td>
                      <td>RRSC-NAGP</td>
                      <td rowspan="5">Best Paper Award</td>
                      <td rowspan="5">IEEE-INGARSS, 2024</td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td>AC07070</td>
                      <td>PRAKASH CHAUHAN</td>
                      <td>NR DIR</td>
                      <td>DIR OFF</td>
                      <td>NR DIR</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>16</td>
                      <td>NR01704</td>
                      <td>NALINI J</td>
                      <td>ASDM</td>
                      <td>HRDPG</td>
                      <td>HRDPG OFF</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>17</td>
                      <td>NR01706</td>
                      <td>NARENDER B</td>
                      <td>ASDM</td>
                      <td>HRDPG</td>
                      <td>HRDPG OFF</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>18</td>
                      <td>NR01153</td>
                      <td>MURALI KRISHNAN S</td>
                      <td>DPA</td>
                      <td>DPA OFF</td>
                      <td>DPA OFF</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>19</td>
                      <td>NR01668</td>
                      <td>NIRAJ PRIYADARSHI</td>
                      <td>RC</td>
                      <td>RRSCKOLK</td>
                      <td>RRSC-KOLK</td>
                      <td>Best Paper Award</td>
                      <td>44th INCA International Congress, Statue of Unity, Gujarat 23-25 October 2024</td>
                    </tr>
                    <tr>
                      <td>20</td>
                      <td></td>
                      <td>DR. PRABIR KUMAR DAS</td>
                      <td>RRSC-East</td>
                      <td></td>
                      <td></td>
                      <td class="hindi">फरवरी 2024 के दौरान क्षेत्रीय केंद्र-पश्चिम, जोधपुर द्वारा आयोजित हिन्दी तकनीकी संगोष्ठी में तकनीकी लेख के सर्वश्रेष्ठ प्रस्तुतिकरण हेतु प्रथम पुरस्कार प्राप्त हुआ ।</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>21</td>
                      <td>NR02344</td>
                      <td>KHUSHBOO MIRZA</td>
                      <td>RC</td>
                      <td>RRSCDELH</td>
                      <td>RRSC-DELHI</td>
                      <td rowspan="2">Copyright for Nyaya Vikas Mobile application</td>
                      <td rowspan="2">Copyright for Nyaya Vikas Mobile application, 2024.</td>
                    </tr>
                    <tr>
                      <td>22</td>
                      <td>GI01641</td>
                      <td>SAMEER SARAN</td>
                      <td>RC</td>
                      <td>RRSCDELH</td>
                      <td>RRSC-DELHI</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>23</td>
                      <td>NR01758</td>
                      <td>ARULRAJ MURUGAVEL</td>
                      <td>BG&WSA</td>
                      <td>BGWSG</td>
                      <td>BGWSG OFF</td>
                      <td>Bhuvan – NRSC in the Sustainability and Environment Protection Category</td>
                      <td>DNPA Conclave and Awards 2024</td>
                    </tr>
                    <tr>
                      <td>24</td>
                      <td></td>
                      <td>SWETA</td>
                      <td colspan="3">
                        <center>Research Scientist</center>
                      </td>
                      <td>Best Paper award (Geographical Information System and Remote Sensing for Natural Resource Mapping)</td>
                      <td>44th INCA international congress, organized by Indian National Cartographic Association (INCA) during Oct, 2024 at Ekta Nagar, Gujarat</td>
                    </tr>
                    <tr>
                      <td>25</td>
                      <td></td>
                      <td class="hindi">क्षेत्रीय सुदूर संवेदन केंद्र-पूर्व, कोलकाता</td>
                      <td colspan="3">
                        <center>RRSC-East</center>
                      </td>
                      <td class="hindi">नराकास-4, दामोदर घाटी निगम, कोलकाता द्वारा दिनांक 26 जुलाई, 2024 को आयोजित बैठक में क्षेत्रीय सुदूर संवेदन केंद्र-पूर्व, कोलकाता कार्यालय को राजभाषा के उत्कृष्ट कार्यान्वयन हेतु तृतीय पुरस्कार प्रदान किया गया ।</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>26</td>
                      <td></td>
                      <td class="hindi">क्षेत्रीय सुदूर संवेदन केंद्र-दक्षिण</td>
                      <td colspan="3">
                        <center>RRSC-South</center>
                      </td>
                      <td class="hindi">क्षेत्रीय राजभाषा पुरस्कार -द्वितीय', दक्षिण एवं दक्षिण-पश्चिम क्षेत्रों का संयुक्त राजभाषा सम्मेलन, दिनांक 4.1.2025 को मैसुर में आयोजित ।</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>27</td>
                      <td></td>
                      <td class="hindi">क्षेत्रीय सुदूर संवेदन केंद्र-दक्षिण</td>
                      <td colspan="3">
                        <center>RRSC-South</center>
                      </td>
                      <td class="hindi">'राजभाषा शील्ड -प्रथम पुरस्कार',नराकास (का.-1), बेंगलूरु 24/12/2024</td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                
                <!-- Mobile Card View -->
                <div class="card-table">
                  <!-- Row 1 -->
                  <div class="card-row">
                    <div class="card-header">Award 1</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>1</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR02325</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>DR. STUTEE GUPTA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RSA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>SR & LUM</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>RDWMD</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Women Geospatial Scientist Award-2024</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>GEOSPATIA, Radhanath Sikdar Institute of Geospatial Science and Technology (RSIGST)</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 2 -->
                  <div class="card-row">
                    <div class="card-header">Award 2</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>2</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR01327</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>RANI T E</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RSA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>SR & LUM</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>MAP RECORD</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper in the Theme(Optimum positioning for airborne LiDAR using GNSS Virtual Reference Stations)</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>44th Indian National Cartographic Association (INCA) international congress</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 3 -->
                  <div class="card-row">
                    <div class="card-header">Award 3</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>3</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR01589</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>ANJANI</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>BG&WSA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>TDVASG</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>TD&VAS OFF</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>The excellent paper award for "AI Driven techniques for Night Time Lights analysis to assess Socio Economic Parameters"</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>ACRS2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 4 -->
                  <div class="card-row">
                    <div class="card-header">Award 4</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>4</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR02065</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>MAHESH PATHAKOTI</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>ECSA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>AS&LSPG</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>ASD</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Silver Medal for Development of Cloud-based Air pollution Tracking system using Machine Learning and Google Earth Engine</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>ISRS I-CON contest 2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 5 -->
                  <div class="card-row">
                    <div class="card-header">Award 5</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>5</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR02370</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>SANTHOSHI T</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>BG&WSA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>BCGG</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>VASD</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Silver Medal for Development of Cloud-based Air pollution Tracking system using Machine Learning and Google Earth Engine</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>ISRS I-CON contest 2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 6 -->
                  <div class="card-row">
                    <div class="card-header">Award 6</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>6</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR02519</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>PRUTHIVI RAJ BEHERA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RSA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>AA&CIG</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>AS&CID</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>2nd Prize for Oral Presentation National Symposium</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>Remote Sensing for Sustainable Future: A Roadmap towards Viksit Bharat' and Annual Convention 2024 of ISRS & ISG at AKTU</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 7 -->
                  <div class="card-row">
                    <div class="card-header">Award 7</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>7</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR01657</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>DR.CH.SUDHAKAR REDDY</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RSA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>FEG</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>FBED</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Presidents' Appreciation Medal Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>Remote Sensing for Sustainable Future: A Roadmap towards Viksit Bharat' and Annual Convention 2024 of ISRS & ISG at AKTU</span>
                      </div>
                    </div>
                  </div>
                  <!-- Row 8 -->
                  <div class="card-row">
                    <div class="card-header">Award 8</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>8</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR02063</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>SURAJ REDDY R</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RSA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>FEG</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>FRD</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Prof. Kakania Nageswara Rao Young achiever award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>Indian Society of Geomatics December, 2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 9 -->
                  <div class="card-row">
                    <div class="card-header">Award 9</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>9</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR02017</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>ANJU BAJPAI</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RC</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSCNAGP</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>RRSC-NAGP</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>44th INCA International Congress</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 10 -->
                  <div class="card-row">
                    <div class="card-header">Award 10</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>10</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR02015</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>GIRISH KUMAR T P</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RC</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSCNAGP</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>RRSC-NAGP</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>44th INCA International Congress</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 11 -->
                  <div class="card-row">
                    <div class="card-header">Award 11</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>11</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR01994</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>SURYA PRAKASA RAO D</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RC</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSCNAGP</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>RRSC-NAGP</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>44th INCA International Congress</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 12 -->
                  <div class="card-row">
                    <div class="card-header">Award 12</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>12</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR02005</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>SREENIVASAN G</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RC</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSCNAGP</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>RRSC-NAGP</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>44th INCA International Congress</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 13 -->
                  <div class="card-row">
                    <div class="card-header">Award 13</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>13</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>GI01236</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>SUSHIL KUMAR SRIVASTAV</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RC</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSCDELH</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>RRSC-DELHI</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>44th INCA International Congress</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 14 -->
                  <div class="card-row">
                    <div class="card-header">Award 14</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>14</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR01886</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>ABHIJIT MADHUSUDHAN PILLAI</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RC</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSCNAGP</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>RRSC-NAGP</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>IEEE-INGARSS, 2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 15 -->
                  <div class="card-row">
                    <div class="card-header">Award 15</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>15</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>AC07070</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>PRAKASH CHAUHAN</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>NR DIR</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>DIR OFF</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>NR DIR</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>IEEE-INGARSS, 2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 16 -->
                  <div class="card-row">
                    <div class="card-header">Award 16</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>16</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR01704</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>NALINI J</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>ASDM</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>HRDPG</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>HRDPG OFF</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>IEEE-INGARSS, 2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 17 -->
                  <div class="card-row">
                    <div class="card-header">Award 17</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>17</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR01706</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>NARENDER B</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>ASDM</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>HRDPG</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>HRDPG OFF</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>IEEE-INGARSS, 2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 18 -->
                  <div class="card-row">
                    <div class="card-header">Award 18</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>18</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR01153</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>MURALI KRISHNAN S</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>DPA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>DPA OFF</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>DPA OFF</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>IEEE-INGARSS, 2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 19 -->
                  <div class="card-row">
                    <div class="card-header">Award 19</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>19</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR01668</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>NIRAJ PRIYADARSHI</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RC</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSCKOLK</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>RRSC-KOLK</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper Award</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>44th INCA International Congress, Statue of Unity, Gujarat 23-25 October 2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 20 -->
                  <div class="card-row">
                    <div class="card-header">Award 20</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>20</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>DR. PRABIR KUMAR DAS</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RRSC-East</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span class="hindi">फरवरी 2024 के दौरान क्षेत्रीय केंद्र-पश्चिम, जोधपुर द्वारा आयोजित हिन्दी तकनीकी संगोष्ठी में तकनीकी लेख के सर्वश्रेष्ठ प्रस्तुतिकरण हेतु प्रथम पुरस्कार प्राप्त हुआ ।</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>-</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 21 -->
                  <div class="card-row">
                    <div class="card-header">Award 21</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>21</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR02344</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>KHUSHBOO MIRZA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RC</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSCDELH</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>RRSC-DELHI</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Copyright for Nyaya Vikas Mobile application</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>Copyright for Nyaya Vikas Mobile application, 2024.</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 22 -->
                  <div class="card-row">
                    <div class="card-header">Award 22</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>22</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>GI01641</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>SAMEER SARAN</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>RC</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSCDELH</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>RRSC-DELHI</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Copyright for Nyaya Vikas Mobile application</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>Copyright for Nyaya Vikas Mobile application, 2024.</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 23 -->
                  <div class="card-row">
                    <div class="card-header">Award 23</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>23</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>NR01758</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>ARULRAJ MURUGAVEL</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>BG&WSA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>BGWSG</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>BGWSG OFF</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Bhuvan – NRSC in the Sustainability and Environment Protection Category</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>DNPA Conclave and Awards 2024</span>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Row 24 -->
                  <div class="card-row">
                    <div class="card-header">Award 24</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>24</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>SWETA</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>Research Scientist</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>Best Paper award (Geographical Information System and Remote Sensing for Natural Resource Mapping)</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>44th INCA international congress, organized by Indian National Cartographic Association (INCA) during Oct, 2024 at Ekta Nagar, Gujarat</span>
                      </div>
                    </div>
                  </div>



                  <!-- Row 25 -->
                  <div class="card-row">
                    <div class="card-header">Award 24</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>25</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>क्षेत्रीय सुदूर संवेदन केंद्र-पूर्व, कोलकाता</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSC-East</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>नराकास-4, दामोदर घाटी निगम, कोलकाता द्वारा दिनांक 26 जुलाई, 2024 को आयोजित बैठक में क्षेत्रीय सुदूर संवेदन केंद्र-पूर्व, कोलकाता कार्यालय को राजभाषा के उत्कृष्ट कार्यान्वयन हेतु तृतीय पुरस्कार प्रदान किया गया ।</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>-</span>
                      </div>
                    </div>
                  </div>



                  <!-- Row 26 -->
                  <div class="card-row">
                    <div class="card-header">Award 24</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>26</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>क्षेत्रीय सुदूर संवेदन केंद्र-दक्षिण</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSC-South</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>क्षेत्रीय राजभाषा पुरस्कार -द्वितीय', दक्षिण एवं दक्षिण-पश्चिम क्षेत्रों का संयुक्त राजभाषा सम्मेलन, दिनांक 4.1.2025 को मैसुर में आयोजित ।</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>-</span>
                      </div>
                    </div>
                  </div>



                  <!-- Row 27 -->
                  <div class="card-row">
                    <div class="card-header">Award 24</div>
                    <div class="card-body">
                      <div class="card-item">
                        <span class="card-label">S.No.</span>
                        <span>27</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Employee Code</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Name</span>
                        <span>क्षेत्रीय सुदूर संवेदन केंद्र-दक्षिण</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Area</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Group</span>
                        <span>RRSC-South</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Division</span>
                        <span>-</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Award Details</span>
                        <span>'राजभाषा शील्ड -प्रथम पुरस्कार',नराकास (का.-1), बेंगलूरु 24/12/2024</span>
                      </div>
                      <div class="card-item">
                        <span class="card-label">Event Details</span>
                        <span>-</span>
                      </div>
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

<script>
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