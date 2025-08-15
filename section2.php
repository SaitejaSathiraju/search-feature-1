<div class="container-fluid">
        <div class="row gy-4">
          <!-- Announcements (Auto-scrolling) -->
          <div class="col-lg-4 col-md-6 d-flex flex-column">
            <div class="service-card announcement-card">
              <div class="card-header" style="background-color: #fb795d;">
                <div class="icon-wrapper">
                  <i class="bi bi-megaphone"></i>
                </div>
                <h3>Announcements</h3>
              </div>
              <div> <?php include 'announcements.php'; ?> </div>
            </div>
          </div>
          <!-- Space Based Disaster Management (Auto-scrolling) -->
          <div class="col-lg-4 col-md-6 d-flex flex-column">
            <div class="service-card disaster-card">
              <div class="card-header" style="background-color: #78cdf0;">
                <div class="icon-wrapper">
                  <i class="bi bi-cloud-lightning-rain"></i>
                </div>
                <h3>Disaster Management</h3>
              </div>
              <div> <?php include 'disaster_events.php'; ?> </div>
            </div>
          </div>
          <!-- Recent Events (Calendar-based) -->
          <div class="col-lg-4 col-md-6 d-flex flex-column">
            <div class="service-card events-card">
              <!-- Card Header -->
              <div class="card-header" style="background-color: #5f73d6;">
                <div class="icon-wrapper">
                  <i class="bi bi-calendar-event"></i>
                </div>
                <h3>Recent Events</h3>
              </div>
              <div> <?php include 'recent_events.php'; ?> </div>
            </div>
          </div>
        </div>
      </div>