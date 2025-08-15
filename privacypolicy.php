<?php include 'header.php'; ?> <?php include 'navbar.php'; ?> <main class="main">
  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-9">
            <h1 class="heading-title">Privacy Policy</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="privacy-content py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4 p-lg-5">
              <div class="privacy-icon text-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#4e5a53" viewBox="0 0 16 16">
                  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                </svg>
              </div>
              <div class="privacy-text">
                <div class="alert alert-info bg-light border-info mb-4">
                  <h3 class="h5 mb-3">Information Collection</h3>
                  <p style="font-size:20px; text-align:justify">The information, user provide on this portal is strictly voluntary and will be strictly used only for its intended purpose. This portal collects usage related details automatically & through manual inputs by the user.This information includes User IP addresses, the type of web browser, operating system, date and time of web access, name of the files and services accessed. Our web sites use session and persistent cookies for technical purposes such as to enable better navigation through the site, session management, or to allow users to customize their preferences for interacting with the web site. These cookies are strictly to the selected user session. If user do not wish to have session or persistent cookies stored on his/her machine, he/she can turn them off in the web browser. However, this may affect the functioning of some web applications as per desired service. This information is only used to enhance our web applications. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main> <?php include 'footer.php'; ?> <style>
  .privacy-hero {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  }

  .privacy-content {
    background-color: #f8f9fa;
  }

  .privacy-icon svg {
    color: #4e5a53;
  }

  .card {
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: translateY(-3px);
  }

  .list-group-item {
    padding-left: 0;
    border-left: 0;
    border-right: 0;
  }

  .breadcrumb {
    background-color: transparent;
    padding: 0.75rem 1rem;
  }
</style>