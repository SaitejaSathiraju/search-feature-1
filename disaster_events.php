<div class="events-container">
  <div class="events-section">
    <div class="scroll-box-disaster" id="disasters-scroll">
      <div class="event-item">
        <div class="event-left">
          <a href="assets/pdf/Flood_Hazard_Zonation_Atlas_of_Assam_using_multi_sensor_satellite_data1998_2023.pdf" target="_blank">Release of Flood Hazard Zonation Atlas of Assam - using multi-sensor satellite data 1998-2023</a><span class="new-badge">NEW</span>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="MyanmarEarthquake2025-main/index_earthquake.html" target="_blank">Myanmar Earthquake: 28.03.2025 - Slider</a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="assets/pdf/DMSP/Charter_1029_VAP_2_31july2024.pdf" target="_blank">Landslide Impact Map of Chooralmala, Wayanad, Kerala</a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="assets/pdf/DMSP/NDEM_v5.pdf" target="_blank">2 day workshop organised by NRSC and NIDM on Space Technology in Disaster Risk Management during 4-5 December 2023 at NIDM, Delhi </a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="assets/pdf/DMSP/NIDM_NRSC_workshop_4_5_122023.pdf" target="_blank">Release of National Database for Emergency Management (NDEM Ver. 5.0) at Prithvi Bhawan, New Delhi on 28.06.2024 </a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="assets/pdf/DMSP/pre-post_7_12_2023_AP_FRS_2of2.pdf" target="_blank">Flood affected areas in ANDHRA PRADESH State during Michaung Cyclone </a>
        </div>
      </div>
    </div>
  </div>
  <div class="view-more-btn">
    <a href="./View_More_Space_Based_DM.php" target="_blank">View More <i class="bi bi-arrow-right"></i>
    </a>
  </div>
</div>
<style>
  .events-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    height: 600px;
  }

  .events-section {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .section-header {
    background-color: #0a6c80;
    color: white;
    padding: 12px 16px;
    font-weight: 600;
    font-size: 18px;
    display: flex;
    align-items: center;
  }

  .scroll-box-disaster {
    flex: 1; /* take all remaining vertical space */
    overflow-y: scroll;
    padding: 12px;
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE/Edge */
  }

  .scroll-box-disaster {
    scrollbar-width: none; /* For Firefox */
    -ms-overflow-style: none; /* For IE and Edge */
  }

  .scroll-box-disaster::-webkit-scrollbar {
    display: none; /* For Chrome, Safari, and Opera */
  }

  .event-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 14px 12px;
    margin-bottom: 10px;
    background: #f9f5ff;
    border: 1px solid #e2d6f3;
    border-radius: 10px;
    transition: all 0.3s ease;
  }

  .event-item:hover {
    background: #f2e7ff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transform: translateY(-2px);
  }

  .event-left {
    flex: 1;
    font-weight: 500;
    color: #2e2e2e;
    font-size: 18px;
    text-align: justify;
  }

  .event-left a {
    color: #2e2e2e;
    text-decoration: none;
    transition: color 0.2s;
  }

  .event-left a:hover {
    text-decoration: underline;
  }

  .bi {
    font-size: 1.1em;
    vertical-align: middle;
  }

  .new-badge {
            background: #ff4d6d;
            color: white;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 12px;
            margin-left: 10px;
        }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const scrollBox = document.getElementById("disasters-scroll");
    let scrollSpeed = 0.3;
    let scrollAmount = 0;
    let isPaused = false;

    // Pause scrolling on hover
    scrollBox.addEventListener("mouseenter", function () {
      isPaused = true;
    });

    // Resume scrolling when not hovered
    scrollBox.addEventListener("mouseleave", function () {
      isPaused = false;
    });

    function autoScroll() {
      if (!isPaused) {
        scrollAmount += scrollSpeed;
        scrollBox.scrollTop = scrollAmount;

        if (scrollBox.scrollTop + scrollBox.clientHeight >= scrollBox.scrollHeight) {
          scrollAmount = 0;
        }
      }

      requestAnimationFrame(autoScroll);
    }

    autoScroll();
  });
</script>
