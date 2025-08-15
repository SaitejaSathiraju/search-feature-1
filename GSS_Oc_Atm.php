<?php include 'header.php'; ?> <?php include 'navbar.php'; ?> <style>
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
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  }

  @media (max-width: 768px) {
    .container {
      flex-direction: column;
    }

    .main-content {
      padding-right: 0;
    }
  }

  .card {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    margin: 10px 0;
    padding: 16px;
    display: flex;
    align-items: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
  }

  .card i {
    font-size: 24px;
    color: #1a73e8;
    margin-right: 15px;
    min-width: 30px;
    text-align: center;
  }

  .card a {
    color: #1a73e8;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
  }

  @media (max-width: 480px) {
    .card {
      padding: 10px;
      font-size: 14px;
      margin: 8px auto;
    }

    .card a {
      font-size: 14px;
    }

    .modal-content {
      margin: 10% auto;
      width: 90%;
      padding: 15px;
    }

    th,
    td {
      font-size: 12px;
      padding: 6px;
    }

    .close {
      font-size: 20px;
    }
  }

  /* Modal styles */
  .modal {
    display: none;
    position: fixed;
    z-index: 10;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    border-radius: 10px;
    width: 60%;
    position: relative;
  }

  .close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    color: #aaa;
  }

  .close:hover {
    color: #000;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th,
  td {
    padding: 10px;
    border: 1px solid #ccc;
  }

  .pagination {
    justify-content: center;
    margin-top: 15px;
  }
</style>
<script>
  // JavaScript for any interactive functionality
  document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded successfully');
    // Example: Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
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
              <b>Thematic Services</b>
            </a>
          </li>
          <li class="current" style="font-size:24px; color: #3f68b5;">
            <b>Ocean Sciences and Atmosphere</b>
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
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100"> <?php include 'about_GSS_Services_List.php'; ?> </div>
        <div class="col-lg-9" data-aos="fade-up" data-aos-delay="200">
          <h3>Ocean, Atmosphere, Terrestrial Products</h3>
          <br />
          <div class="card" onclick="openModal('ocean')" style="font-size: 20px;">
            <i class="fas fa-map"></i>
            <font color="blue">Ocean Products</font>
          </div>
          <div class="card" onclick="openModal('atmosphere')" style="font-size: 20px;">
            <i class="fas fa-map"></i>
            <font color="blue">Atmospheric Products</font>
          </div>
          <div class="card" onclick="openModal('cryosphere')" style="font-size: 20px;">
            <i class="fas fa-map"></i>
            <font color="blue">Cryosphere Products</font>
          </div>
          <div class="card" onclick="openModal('terrestrial')" style="font-size: 20px;">
            <i class="fas fa-map"></i>
            <font color="blue">Terrestrial Products</font>
          </div>
        </div>
        <!-- Modal -->
        <div id="popupModal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <br />
            <h3 id="modalTitle">Product Details</h3>
            <br />
            <input type="text" id="searchInput" class="form-control" placeholder="Search..." style="margin-bottom: 20px;">
            <table id="myTable" class="table table-hover  table-striped-rows">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>URL</th>
                </tr>
              </thead>
              <tbody>
                <!-- Filled dynamically -->
              </tbody>
            </table>
            <nav>
              <ul class="pagination" id="pagination"></ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
</main> <?php include 'footer.php'; ?> <script>
  const productData = {
    ocean: [{
      name: "Chlorophyll - OC2 - Global",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=oc2"
    }, {
      name: "Chlorophyll - OC2 - North indian ocean",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=oc2l"
    }, {
      name: "Chlorophyll - OC4 - Global",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=oc4"
    }, {
      name: "Chlorophyll - OC4 - North indian ocean",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=oc4l"
    }, {
      name: "Co-Tidal Map (K1O1) Amplitude-Phase",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=tamp"
    }, {
      name: "Co-Tidal Map (M2S2) Amplitude-Phase",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=tph"
    }, {
      name: "Daily Ocean Heat Content of 700m Layer",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=ohc"
    }, {
      name: "Daily Ocean Mean Temperature",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=omt1"
    }, {
      name: "Daily Tropical Cyclone Heat Potential",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=tchp"
    }, {
      name: "Diffuse Attenuation Coefficient at 490 nm - Global",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=kd490"
    }, {
      name: "Diffuse Attenuation Coefficient at 490 nm - North Indian ocean",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=kd490l"
    }, {
      name: "Dissolved Inorganic Carbon",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=dic&g=OS"
    }, {
      name: "Eddy Kinetic Energy",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=eke"
    }, {
      name: "Eddy Kinetic Energy - Daily",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=eked25&g=OS"
    }, {
      name: "Ekman Currents - Global",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ekecg&g=OS"
    }, {
      name: "Ekman Currents - Indian Ocean",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=ekec"
    }, {
      name: "Geostrophic Currents - Global",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=geocg&g=OS"
    }, {
      name: "Geostrophic Currents - Indian Ocean",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=geoc"
    }, {
      name: "Mean Sea Level Anomaly",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=msla"
    }, {
      name: "Model Derived Depth of 26°C ISOTHERM",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=mdd26"
    }, {
      name: "Model Derived Tropical Cyclone Heat Potential",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=mdtchp"
    }, {
      name: "OSCAT Ocean Wind - 25Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wsw25"
    }, {
      name: "OSCAT Ocean Wind - 50Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wswg"
    }, {
      name: "OSCAT Ocean Wind Curl - 25Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wsc25"
    }, {
      name: "OSCAT Ocean Wind Curl - 50Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wscg"
    }, {
      name: "OSCAT Ocean Wind Stress - 25Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wst25"
    }, {
      name: "OSCAT Ocean Wind Stress - 50Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=wstg"
    }, {
      name: "SCATSAT Ocean Wind - 25Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swsw25&g=OS"
    }, {
      name: "SCATSAT Ocean Wind - 50Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swsw50&g=OS"
    }, {
      name: "SCATSAT Ocean Wind Curl - 25Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swsc25&g=OS"
    }, {
      name: "SCATSAT Ocean Wind Curl - 50Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swsc50&g=OS"
    }, {
      name: "SCATSAT Ocean Wind Stress - 25Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swst25&g=OS"
    }, {
      name: "SCATSAT Ocean Wind Stress - 50Km",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=swst50&g=OS"
    }, {
      name: "SCATSAT Sea Level Pressure",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=sslp50&g=OS"
    }, {
      name: "Sea Level Pressure",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=slp"
    }, {
      name: "Ekman Currents - Global",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ekecg&g=OS"
    }, {
      name: "Ekman Currents - Indian Ocean",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=ekec"
    }, {
      name: "Geostrophic Currents - Global",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=geocg&g=OS"
    }, {
      name: "Geostrophic Currents - Indian Ocean",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=geoc"
    }, {
      name: "Mean Sea Level Anomaly",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=msla"
    }, {
      name: "Model Derived Depth of 26°C ISOTHERM",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=mdd26"
    }, {
      name: "Sea Level Pressure",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=slp"
    }, {
      name: "Sea Surface Height - Global",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=sshg&g=OS"
    }, {
      name: "Sea Surface Height - Indian Ocean",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=ssh"
    }, {
      name: "Total Alkalinity",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=tal&g=OS"
    }, {
      name: "Total Currents - Global",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=totcg&g=OS"
    }, {
      name: "Total Currents - Indian Ocean",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=OS&p=totc"
    }],
    atmosphere: [{
      name: "Cloud Fraction and Cloud Cover",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=cfri10&g=AS"
    }, {
      name: "Derived Tropospheric Ozone",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=dto&g=AS"
    }, {
      name: "Planetary Boundary Layer Height (Daily, 7 Day, Monthly)",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=pblh&g=AS"
    }],
    cryosphere: [{
      name: "AWiFS: Snow Cover Fraction",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=CS&p=scf"
    }, {
      name: "Snow Melt and Freeze",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=CS&p=smf"
    }, {
      name: "Snowmelt Antarctica",
      url: "https://bhuvan-app3.nrsc.gov.in/downloadsma/index.php"
    }],
    terrestrial: [{
      name: "Annual Cropland Data set",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=acd&g=TS"
    }, {
      name: "Net Ecosystem Productivity - GIMMS",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=nep"
    }, {
      name: "AWiFS: Snow Albedo",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=salbedo&g=TS"
    }, {
      name: "Net Ecosystem Productivity - MODIS",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=nepm&g=TS"
    }, {
      name: "AWiFS: Water Bodies Fraction",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=wbf"
    }, {
      name: "Net Primary Productivity - GIMMS",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=npp"
    }, {
      name: "Forest Fire Regime (3 Parameters)",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ff&g=TS"
    }, {
      name: "Net Primary Productivity - MODIS",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=nppm&g=TS"
    }, {
      name: "Forest Fraction Cover",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ffc&g=TS"
    }, {
      name: "OCM2: Albedo",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=t&s=TR&p=albedo"
    }, {
      name: "Forest Type 5Km grid (14 Parameters)",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ftg&g=TS"
    }, {
      name: "OCM2: Filter Normalized Difference Vegetation Index",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=t&s=LV&p=fndvi"
    }, {
      name: "Hydrological Products",
      url: "https://bhuvan-app3.nrsc.gov.in/nices/"
    }, {
      name: "OCM2: Normalized Difference Vegetation Index - Global Coverage",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=ndvigc"
    }, {
      name: "Indian Soil Datasets (3 Parameters)",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=isd&g=TS"
    }, {
      name: "OCM2: Normalized Difference Vegetation Index - Local Coverage",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=t&s=LV&p=ndvi"
    }, {
      name: "Land Degradation (4 Parameters)",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&p=ldd&g=TS"
    }, {
      name: "OCM2: Vegetation Fraction",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=t&s=LV&p=vf"
    }, {
      name: "Mesoscale compatible inputs for: MM5",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=mm5"
    }, {
      name: "OCM: Surface Water Layer Products_2Day Repeativity",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=t&s=TR&p=swp"
    }, {
      name: "Mesoscale compatible inputs for: WRF",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=wrf"
    }, {
      name: "Surface Soil Moisture - 2 Day",
      url: "https://bhuvan-app3.nrsc.gov.in/data/download/index.php?c=p&s=NI&g=TS&p=ssm2"
    }]
  };

  function openModal(category) {
    const tableBody = document.querySelector("#myTable tbody");
    const title = category.charAt(0).toUpperCase() + category.slice(1) + " Products";
    document.getElementById("modalTitle").textContent = title;
    tableBody.innerHTML = ""; // Clear previous content
    productData[category].forEach(item => {
      const row = `
		<tr style="font-size:18px;">
			<td>${item.name}</td>
			<td>
				<a href="${item.url}" target="_blank">${item.url}</a>
			</td>
		</tr>`;
      tableBody.innerHTML += row;
    });
    document.getElementById("popupModal").style.display = "block";
  }

  function closeModal() {
    document.getElementById("popupModal").style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == document.getElementById("popupModal")) {
      closeModal();
    }
  }
</script>
<script>
  let currentPage = 1;
  const rowsPerPage = 7;

  function openModal(category) {
    const title = category.charAt(0).toUpperCase() + category.slice(1) + " Products";
    document.getElementById("modalTitle").textContent = title;
    const data = productData[category];
    currentPage = 1;
    renderTable(data, currentPage);
    renderPagination(data);
    document.getElementById("popupModal").style.display = "block";
    // Attach search handler
    document.getElementById('searchInput').oninput = function() {
      const filtered = data.filter(item => item.name.toLowerCase().includes(this.value.toLowerCase()));
      currentPage = 1;
      renderTable(filtered, currentPage);
      renderPagination(filtered);
    };
  }

  function renderTable(data, page) {
    const tableBody = document.querySelector("#myTable tbody");
    tableBody.innerHTML = "";
    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    const paginatedItems = data.slice(start, end);
    paginatedItems.forEach(item => {
      const row = `
		<tr style="font-size:18px;">
			<td>${item.name}</td>
			<td>
				<a href="${item.url}" target="_blank">${item.url}</a>
			</td>
		</tr>`;
      tableBody.innerHTML += row;
    });
  }

  function renderPagination(data) {
    const pagination = document.getElementById("pagination");
    pagination.innerHTML = "";
    const pageCount = Math.ceil(data.length / rowsPerPage);
    for (let i = 1; i <= pageCount; i++) {
      const li = document.createElement("li");
      li.className = "page-item" + (i === currentPage ? " active" : "");
      li.innerHTML = `
		<a class="page-link" href="#">${i}</a>`;
      li.addEventListener("click", function() {
        currentPage = i;
        renderTable(data, currentPage);
        renderPagination(data);
      });
      pagination.appendChild(li);
    }
  }

  function closeModal() {
    document.getElementById("popupModal").style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == document.getElementById("popupModal")) {
      closeModal();
    }
  }
</script>