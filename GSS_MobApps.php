<?php include 'header.php'; ?> 
<?php include 'navbar.php'; ?>

<style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
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
        
        .breadcrumb a {
            color: #0066cc;
            text-decoration: none;
        }
        
        .breadcrumb a:hover {
            text-decoration: underline;
        }
        
               
        .section {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .main-content {
                padding-right: 0;
            }
            .sidebar {
                width: 100%;
                margin-left: 0;
                margin-top: 30px;
            }
        }
		
	
    </style>
	
<script>
        // JavaScript for any interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Page loaded successfully');
            
            // Example: Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
			
        
    </script>
	
    <main class="main">
      <!-- Page Title -->
      <div class="page-title">
        <div class="heading">
          <div class="container-fluid">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-9">
                <h1 class="heading-title">Geo Spatial Services</h1>           
              </div>
            </div>
          </div>
        </div>
         <nav class="breadcrumbs">
          <div class="container">
            <ol>
			  <li>
            <a style="font-size:24px; color: #3f68b5;">
              <b>About</b>
            </a>
          </li>
          <li>
            <a style="font-size:24px; color: #3f68b5;">
              <b>Organization</b>
            </a>
          </li>
          <li class="current" style="font-size:24px; color: #3f68b5;">
            <a href="About_GSS.php">
              <b>Geo Spatial Services</b>
            </a>
          </li>
          <li>
            <a style="font-size:24px; color: #3f68b5;">
              <b>Mobile Applications</b>
            </a>
          </li>
          
            </ol>
          </div>
        </nav> 
      </div>
      <!-- End Page Title -->

      <!-- Service Details Section -->
      <section id="service-details" class="service-details section">
        <div class="container-fluid ">
          <div class="row gy-4">
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <?php include 'about_GSS_Services_List.php'; ?>
            </div>
	  <div class="col-lg-9" data-aos="fade-up" data-aos-delay="200">
		<h3>Mobile Applications</h3> <br />
            
                <p style="font-size:20px; text-align:justify">NRSC has been developing many Mobile apps for Geo-governance. The recent advances in the field of mobile devices, communications and global positioning systems have made it possible to design and build innovative and effective methods of field data collection and management. Now-a-days mobile devices are equipped with the features like integrated GPS receiver, photo camera, GPRS/3G/4G/Wi-Fi connectivity, feature-rich OS, etc., which can be leveraged to implement highly productive applications. <br /><br/>
				Field data collection is a mandatory process foracquiring ground truth information in remote sensing data analysis projects, and also in several geospatial infrastructure mapping and activity monitoring projects. Traditionally, the collection of data is a manual process with the project scientists visiting the planned sites, noting down the parameters of interest, taking photographs as required and incorporating the collected information in the final application after returning to office. However this manual entry is not only error prone but also consumes significant amount of time and effort. <br /><br/>
				In most cases, data collection is not just limited to non-spatial data but also collecting spatial data features e.g. line, point and polygon features using the inbuilt GPS device and in some cases using external devices to get enhanced positional accuracy. The utility of data collection process is further enhanced with the incorporation of geo-tagged field photographs and other audio/ video/ multimedia content.Mobile technology can be used extensively to collect field information by means of crowd sourcingor controlled crowd sourcing.<br/><br/>
				By implementing a mobile device based solution to streamline the data collection and utilization process, some of the achieved benefits are:

		<ol style="font-size:20px; text-align:justify"><li>Minimizing the errors associated with manual data collection processes</li>
			<li>The collected data is authenticated since the user invariably has to visit the site to capture location (latitude-longitude), photographs and mandatory field attributes</li>
			<li>Attribute values can be edited prior sending to Bhuvan Server.</li>
			<li>Near real time visualization of the location based field data on web browser. Since the entire process of receiving, organisation and visualization of datasets on the satellite image map are automated.</li>
			<li>Very useful for disaster mitigation, damage assessment, infrastructure periodic monitoring projects, scientific geo-information science projects (natural resources), etc.</li>
		</ol>
						</p>

            
           
        </div>
        
     

    </div>
    </div>
	
	
	
    
    
    
		
	
	
	</section>
	  
	  
	  
    </main>

    <?php include 'footer.php'; ?>
