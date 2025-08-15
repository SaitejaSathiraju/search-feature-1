<style>
  #myptag {
    font-size: 24px;
    line-height: 1.4;
    margin-bottom: 0;
  }

  #mandateSection {
    background: linear-gradient(145deg, #EBF5FB, #f8f9fa);
    border-radius: 15px;
    box-shadow:
      0 6px 20px rgba(0, 0, 0, 0.1),
      0 8px 25px rgba(0, 123, 255, 0.15);
    transform-style: preserve-3d;
    transition: all 0.3s ease;
    border: none !important;
    margin: 30px 0;
    padding: 25px;
    position: relative;
    overflow: hidden;
  }

  #mandateDiv {
    position: relative;
    z-index: 2;
  }

  #mandatePTag {
    font-size: 24px;
    color: #343a40;
    position: relative;
    padding: 20px;
    background: linear-gradient(to right, #E9F7EF, #D5F5E3);
    border-radius: 10px;
    font-weight: 500;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
  }

  #mandateDesc {
    display: block;
    font-style: italic;
    position: relative;
    padding: 0 20px;
  }

  .mandate-img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #ffc107;
    transition: all 0.3s ease;
    display: block;
    margin: 0 auto;
  }

  #mandateText {
    font-size: 14px;
    margin-top: 8px;
    font-weight: 500;
    text-align: center;
  }

  #mandate_icons_a {
    text-decoration: none;
    color: inherit;
    display: block;
  }

  #iconsDiv {
    width: 100%;
    padding: 1rem 0;
    overflow-x: auto;
    white-space: nowrap;
    text-align: center;
  }

  #servicesDiv {
    display: inline-block;
    white-space: nowrap;
  }

  #mandate_icons {
    display: inline-block;
    width: 150px;
    margin: 0 10px;
    vertical-align: top;
    white-space: normal;
  }

  @media only screen and (max-width: 768px) {
    #iconsDiv {
        overflow-x: visible; /* Remove horizontal scrolling */
        white-space: normal; /* Allow wrapping */
        padding: 1rem;
    }
    
    #servicesDiv {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* 2 columns */
        gap: 20px;
        width: 100%;
        white-space: normal;
    }
    
    #mandate_icons {
        display: block;
        width: auto;
        margin: 0;
    }
    
    .mandate-img {
        width: 70px;
        height: 70px;
    }
    
    #mandateText {
        font-size: 13px;
    }
  }
</style>
<div class="container-fluid section-title" id="mandateDiv">
  <h3>
    <b>Our Mandate</b>
  </h3>
  <p id="mandatePTag">
    <span id="mandateDesc">National Remote Sensing Centre (NRSC) has the mandate for establishment of ground stations for receiving satellite data, generation of data products, dissemination to users, and development of remote sensing applications including disaster management support, geospatial services for governance, and capacity building. </span>
  </p>
  <div id="iconsDiv">
    <div id="servicesDiv">
      <!-- Aerial Services -->
      <div id="mandate_icons">
        <a href="About_ASDM.php" id="mandate_icons_a">
          <img src="assets/img/clients/aerial_2.jpg" class="mandate-img" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="Aerial Services" />
          <p id="mandateText">Aerial Services & Digital Mapping</p>
        </a>
      </div>
      <!-- Satellite Data Reception -->
      <div id="mandate_icons">
        <a href="About_SDA.php" id="mandate_icons_a">
          <img src="assets/img/clients/antenna_1.jpg" class="mandate-img" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="Satellite Data" />
          <p id="mandateText">Satellite Data Reception</p>
        </a>
      </div>
      <!-- Disaster Management -->
      <div id="mandate_icons">
        <a href="About_DMS.php" id="mandate_icons_a">
          <img src="assets/img/clients/disaster_0.jpg" class="mandate-img" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="Disaster Management" />
          <p id="mandateText">Disaster Management Support</p>
        </a>
      </div>
      <!-- Geospatial Services -->
      <div id="mandate_icons">
        <a href="About_GSS.php" id="mandate_icons_a">
          <img src="assets/img/clients/geospatial_0.jpg" class="mandate-img" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="Geospatial Services" />
          <p id="mandateText">Geospatial Services</p>
        </a>
      </div>
      <!-- Data Processing -->
      <div id="mandate_icons">
        <a href="About_DPD.php" id="mandate_icons_a">
          <img src="assets/img/clients/satellite_data_0.jpg" class="mandate-img" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="Data Processing" />
          <p id="mandateText">Data Processing & Dissemination</p>
        </a>
      </div>
      <!-- Remote Sensing -->
      <div id="mandate_icons">
        <a href="About_RSA.php" id="mandate_icons_a">
          <img src="assets/img/clients/rs_applications_0.jpg" class="mandate-img" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="Remote Sensing" />
          <p id="mandateText">Remote Sensing Applications</p>
        </a>
      </div>
      <!-- NRSC Establishments -->
      <div id="mandate_icons">
        <a href="about_campuses.php" id="mandate_icons_a">
          <img src="assets/img/clients/regional_0.jpg" class="mandate-img" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="NRSC Establishments" />
          <p id="mandateText">NRSC Establishments</p>
        </a>
      </div>
      <!-- Capacity Building -->
      <div id="mandate_icons">
        <a href="About_OT.php" id="mandate_icons_a">
          <img src="assets/img/clients/outreach_0.jpg" class="mandate-img" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';" alt="Capacity Building" />
          <p id="mandateText">Capacity Building</p>
        </a>
      </div>
    </div>
  </div>
</div>