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
			  <li><a  style="font-size:24px; color: #3f68b5;"><b>About</b></a></li>
        <li><a  style="font-size:24px; color: #3f68b5;"><b>Organization</b></a></li>
              <li class="current" style="font-size:24px; color: #3f68b5;"> <a href="About_GSS.php"><b>Geo Spatial Services</b></a></li>
			  <li class="current" style="font-size:24px; color: #3f68b5;"> <b>Satellite Data Services</b></li>
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
		<h3>Bhuvan Satellite data</h3> <br />
            
                <p style="font-size:20px; text-align:justify">Satellite data 1m and lower spatial resolution are hosted on Bhuvan portal for visualisation. <br /><br/>
				Further, satellite data Resourcesat seasonal AWiFS (56m), LISS III (23.5m) sensor data with 2 years time lag are hosted on Bhuvan and are accessible for free download.
				</p>

            
           
        </div>
        
     

    </div>
    </div>
	
	
	
    
    
    
		
	
	
	</section>
	  
	  
	  
    </main>

    <?php include 'footer.php'; ?>
