<?php include 'header.php'; ?> <?php include 'navbar.php'; ?> <main class="main">
  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-9">
            <h1 class="heading-title">Disclaimer</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
  <!-- Service Details Section -->
  <section class="disclaimer-content py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
          <div class="card shadow-sm border-0 rounded-lg">
            <div class="card-body p-4 p-md-5">
              <div class="disclaimer-icon text-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#4e5a53" viewBox="0 0 16 16">
                  <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z"/>
                  <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.55.55 0 0 1-1.1 0z"/>
                </svg>
              </div>
              <div class="disclaimer-text">
                <p class="lead text-center mb-4" style="font-size: 1.25rem; line-height: 1.6;">
                  By using the remote sensing data and products from this portal, you acknowledge and agree to the following terms:
                </p>
                <div class="alert alert-light border" role="alert" style="background-color: #f8f9fa;">
                  <ul class="mb-0" style="padding-left: 1.5rem; text-align: justify">
                    <li class="mb-2">NRSC will not be liable for any direct or indirect loss arising from the use of the information provided</li>
                    <li class="mb-2">NRSC/ISRO disclaims responsibility for any inadvertent errors beyond its limitations</li>
                    <li>This portal has been compiled in good faith by NRSC, but no representation is made or warranty given (either expressed or implied) as to the completeness or accuracy of the information it contains</li>
                  </ul>
                </div>
                <div class="text-center mt-4">
                  <a href="index.php" class="btn btn-primary px-4">Return to Home</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>

<style>
  .disclaimer-hero {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-bottom: 1px solid rgba(0,0,0,0.1);
  }
  
  .disclaimer-hero .heading-title {
    font-weight: 600;
    color: #4e5a53;
    font-size: 2.5rem;
  }
  
  .disclaimer-content {
    background-color: #f8f9fa;
  }
  
  .disclaimer-icon svg {
    color: #4e5a53;
  }
  
  .breadcrumb {
    background-color: transparent;
    padding: 0;
    justify-content: center;
  }
  
  .breadcrumb-item.active {
    color: #6c757d;
  }
  
  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }
</style>