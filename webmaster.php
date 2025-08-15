<?php include 'header.php'; ?> <?php include 'navbar.php'; ?><main id="main-content" class="main" role="main">
  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-9">
            <h1 class="heading-title">Web Information Manager</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Title -->
  <section class="profile-section py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card profile-card shadow-lg">
            <div class="card-body p-4">
              <div class="row align-items-center">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                  <div class="profile-img-container">
                    <img src="assets/img/cssteap/pmo/1.jpg" class="img-fluid border border-4 border-primary" alt="Dr. M Naresh Kumar">
                    <div class="mt-3">
                      <a href="mailto:&#119;&#105;&#109;&#64;&#110;&#114;&#115;&#99;&#46;&#103;&#111;&#118;&#46;&#105;&#110;" class="btn btn-primary btn-sm" style="font-size:20px">
                        Contact
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <h2 class="text-primary mb-3">Dr. M Naresh Kumar</h2>
                  <h5 class="text-secondary mb-4">Head, Human Resource Development Division</h5>
                  
                  <div class="profile-details">
                    <div class="detail-item mb-3">
                      <div class="d-flex align-items-center">
                        <div class="icon-circle bg-light-primary me-3">
                          <i class="fas fa-building text-primary"></i>
                        </div>
                        <div>
                          <h5 class="mb-0">National Remote Sensing Centre</h5>
                          <p class="text-muted mb-0">Indian Space Research Organisation</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="detail-item mb-3">
                      <div class="d-flex align-items-center">
                        <div class="icon-circle bg-light-primary me-3">
                          <i class="fas fa-landmark text-primary"></i>
                        </div>
                        <div>
                          <p class="mb-0">Dept. of Space, Govt. Of India</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="detail-item">
                      <div class="d-flex align-items-center">
                        <div class="icon-circle bg-light-primary me-3">
                          <i class="fas fa-map-marker-alt text-primary"></i>
                        </div>
                        <div>
                          <p class="mb-0">Balanagar, Hyderabad - 500037, Telangana State</p>
                        </div>
                      </div>
                    </div>
                  </div>
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
  .hero-banner {
    padding: 5rem 0;
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
  }
  
  .divider {
    width: 80px;
    height: 3px;
    background-color: rgba(255,255,255,0.5);
    margin: 1.5rem auto;
  }
  
  .profile-card {
    border-radius: 12px;
    border: none;
    overflow: hidden;
    transition: transform 0.3s ease;
  }
  
  .profile-card:hover {
    transform: translateY(-5px);
  }
  
  .profile-img-container img {
    width: 300px;
    height: 300px;
    object-fit: cover;
  }
  
  .icon-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .detail-item {
    padding: 8px 0;
  }
  
  @media (max-width: 768px) {
    .profile-img-container {
      margin-bottom: 0.5rem;
    }
    
    .hero-banner {
      padding: 3rem 0;
    }
  }
</style>