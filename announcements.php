<div class="events-container">
  <div class="events-section">
    <div class="scroll-box" id="announcements-scroll">
      <div class="event-item">
        <div class="event-left">
          <a href="assets/pdf/advt_active/NRSC-RMT-2-2025.pdf" target="_blank">Advt No: NRSC-RMT-2-2025 dated 21.06.2025</a><span class="new-badge">NEW</span>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="Advt_Active.php" target="_blank">ADVERTISEMENT NO. NRSC-RMT-1-2025: Recruitment for the posts of Scientist Engineer 'SC' (Dated: 10.05.2025) </a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="Career_Result_Active.php" target="_blank">List of Candidates shortlisted for Skill Test to the post of Library Assistant 'A' (Post Code: 19) (Advertisement no: NRSC-RMT-1-2024 dated 22.01.2024) </a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="Career_Result_Active.php" target="_blank">Results for recruitment to the posts of Scientist/Engineer 'SC' (Advertisement no: NRSC-RMT-1-2024 dated 22.01.2024) </a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left"> India Space Week Celebrating the golden jubilee of India 's first satellite, Aryabhata Satellite Technology day-19th April, 2025 (Registration start Date: 06-03-2025) <a href="https://aryabhata.indiaspaceweek.org/" target="_blank" onclick="return confirm('You are being redirected to an external website outside of NRSC. Continue?')">Click here for registration</a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="Career_Result_Active.php" target="_blank">Results for Recruitment to the Post of Assistant/JPA recruitment (Advertisement no: ISRO:ICRB:02(A-JPA):2022 Assistant/JPA recruitment) Post Nos - 1, 2, 5, 6</a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="Career_Result_Active.php" target="_blank">SCIENTIST/ENGINEER -SC INTERVIEW SCHEDULE FOR THE PROVISIONALLY SHORT-LISTED CANDIDATES (Advertisement No. NRSC-RMT-1-2024)</a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="Advt_Active.php" target="_blank">Written Test (CBT) for the post of Nurse 'B' (Post Code: 18) Advt No: NRSC-RMT-1-2024 on 24.02.2025, "Candidates whose Test Centre is Mumbai, may please note that there is a change in exam venue in Mumbai. The details of the new venue in Mumbai has been sent to registered E-mail IDs of the candidates. Candidates are advised to note the change and attend the exam accordingly."</a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="Advt_Active.php" target="_blank">Download E-Admit card the post of Nurse 'B' (Post Code: 18) against Advt No: NRSC-RMT-1-2024 is scheduled to be held on 24.02.2025 (Monday).</a>
        </div>
      </div>
      <div class="event-item">
        <div class="event-left">
          <a href="https://digitalagri2025.nrsc.gov.in/digitalagri2025" target="_blank">National Workshop on Leveraging Earth Observations towards Digital Agriculture NRSC, Hyderabad | 20-21 Feb, 2025 </a>
        </div>
      </div>
    </div>
  </div>
  <div class="view-more-btn">
    <a href="./View_More_Announcements.php" target="_blank">View More <i class="bi bi-arrow-right"></i>
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

  .scroll-box {
    flex: 1; /* take all remaining vertical space */
    overflow-y: scroll;
    padding: 12px;
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE/Edge */
  }

  .scroll-box {
    scrollbar-width: none; /* For Firefox */
    -ms-overflow-style: none; /* For IE and Edge */
  }

  .scroll-box::-webkit-scrollbar {
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
    const scrollBox = document.getElementById("announcements-scroll");
    let scrollSpeed = 0.5;
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
