<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Right to Information</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />

  <!-- Scripts -->
  <script src="assets/js/jquery.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>

  <style>
    .heading-title {
      word-break: break-word;
    }

    #p-style {
      font-size: 20px;
      text-align: justify;
    }

    @media (max-width: 576px) {
      .heading-title {
        font-size: 26px !important;
        line-height: 1.3 !important;
      }
    }
  </style>
</head>

<body>
  <main id="main-content" class="main" role="main">
    <header class="page-title" role="banner">
      <section class="heading">
        <div class="container-fluid">
          <div class="row justify-content-center text-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-9">
              <h1 class="heading-title text-break text-center">Right to Information</h1>
            </div>
          </div>
        </div>
      </section>
    </header>

    <section id="service-details" class="service-details section">
      <div class="container-fluid">
        <div class="row gy-4">
          <section class="col-lg-12 container">
            <div class="container">
              <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search..." />

              <table id="myTable" class="table table-hover table-striped-rows">
                <tbody>
                  <tr id="p-style">
                      <td>1</td>
                      <td>
                        <a href="https://rti.gov.in/RTICorner/GuideForRTI.htm" target="_blank" id="p-style">Guidelines for submission of application under RTI Act, 2005</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>2</td>
                      <td>
                        <a href="https://www.isro.gov.in/Suo_Motu_disclosure_Section41b.html" target="_blank" id="p-style">Organisation, functions and duties</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>3</td>
                      <td>
                        <a href="https://www.isro.gov.in/Powers_and_duties.html" target="_blank" id="p-style">Powers and duties of the Officers and Employees</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>4</td>
                      <td>
                        <a href="https://www.isro.gov.in/Procedure_followed.html" target="_blank" id="p-style">Procedure followed in the decision making process, including channels of supervision and accountability</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>5</td>
                      <td>
                        <a href="https://www.isro.gov.in/The_Norms_set.html" target="_blank" id="p-style">Norms set by the Department of Space for the discharge of its functions</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>6</td>
                      <td>
                        <a href="https://www.isro.gov.in/Suo_Motu_disclosure_Section41b.html" target="_blank" id="p-style">Rules, regulations, instructions, manuals and records of the Department of Space used by its employees for discharging its functions</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>7</td>
                      <td>
                        <a href="https://www.isro.gov.in/Statement_of_the_categories.html" target="_blank" id="p-style">Statement of the Categories of documents held by the Department of Space or under its control</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>8</td>
                      <td>
                        <a href="https://www.isro.gov.in/media_isro/pdf/RTI/7_particulars_of_arrangements.pdf" target="_blank" id="p-style">Particulars of arrangements for consultation with or representation by the public in relation to the formulation of policies and implementation thereof by the Department of Space.</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>9</td>
                      <td>
                        <a href="https://www.isro.gov.in/media_isro/pdf/RTI/8_statement_of_boards.pdf" target="_blank" id="p-style">Statement of Boards, Councils, Committees and other bodies, and as to whether meetings of such Boards, etc., are open to public or the minutes of such meetings are accessible to public.</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>10</td>
                      <td>
                        <a href="./assets/pdf/RTI/fundesignations_16042024.pdf" target="_blank" id="p-style">Directory of Officers holding functional designations</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>11a</td>
                      <td>
                        <a href="./assets/pdf/RTI/CONTACT DETAILS SUOMOTO.pdf" target="_blank" id="p-style">Directory of Officers/Employees of NRSC </a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>11b</td>
                      <td>
                        <a href="./assets/pdf/RTI/renumeration for suomoto.pdf" target="_blank" id="p-style">Directory of structure of emoluments</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>12</td>
                      <td>
                        <a href="https://www.isro.gov.in/media_isro/pdf/RTI/11_manner_of_execution.pdf" target="_blank" id="p-style">Manner of execution of subsidy programmes and details of beneficiaries of such programmes</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>13</td>
                      <td>
                        <a href="https://www.isro.gov.in/Suo_Motu_disclosure_Section41b.html" target="_blank" id="p-style">Particulars of recipients of concessions, permits or authorisations granted by the Department of Space</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>14</td>
                      <td>
                        <a href="https://www.isro.gov.in/Particulars_of_facilities.html" target="_blank" id="p-style">Particulars of facilities available to Citizens for obtaining information on NRSC</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>15</td>
                      <td>
                        <a href="https://www.isro.gov.in/Suo_Motu_disclosure_Section41b.html" target="_blank" id="p-style">Information available to or held by the NRSC in electronic form</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>16</td>
                      <td>
                        <a href="https://www.isro.gov.in/Suo_Motu_disclosure_Section41b.html" target="_blank" id="p-style">Names, designations and other particulars of the Public Information Officers, Assistant Public Information Officers and Appellate Authority(to decide 1st stage appeals)</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>17</td>
                      <td>
                        <a href="./assets/pdf/RTI/Budget_NRSC_18042024.pdf" target="_blank" id="p-style">Budget of NRSC</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>18</td>
                      <td>
                        <a href="https://www.isro.gov.in/Timeline.html" target="_blank" id="p-style">Milestones of the Department of Space/Indian Space Research Organisation</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>19</td>
                      <td>
                        <a href="https://www.isro.gov.in/AnnualReports.html" target="_blank" id="p-style">Department of Space Annual Report</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>20</td>
                      <td>
                        <a href="https://www.isro.gov.in/media_isro/pdf/RTI/dospurchasemanual2015.pdf" target="_blank" id="p-style">DOS Purchase Manual</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>21</td>
                      <td>
                        <a href="https://www.isro.gov.in/media_isro/pdf/HumanResource.pdf" target="_blank" id="p-style">Human Resources of DOS</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>22</td>
                      <td>
                        <a href="https://www.isro.gov.in/Transfer_Policy_Suo.html" target="_blank" id="p-style">Transfer Policy of Officers in Administrative Areas</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>23</td>
                      <td>
                        <a href="https://www.isro.gov.in/citizencharter.html" target="_blank" id="p-style">Citizen Charter of Department of Space</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>24</td>
                      <td>
                        <a href="https://www.isro.gov.in/media_isro/pdf/RTI/dos_financial_powers_ver_2_eng_ver.pdf" target="_blank" id="p-style">DOS Book of Financial Powers</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>25</td>
                      <td>
                        <a href="https://pgportal.gov.in/" target="_blank" id="p-style">Public Grievances</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>26</td>
                      <td>
                        <a href="./assets/pdf/RTI/Annexure_26.pdf" target="_blank" id="p-style">
                          <em>Suo motu </em>Disclosure of Official Tours of Joint Secretary level Officials and above. </a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>27</td>
                      <td>
                        <a href="./assets/pdf/RTI/da18042024.pdf" target="_blank" id="p-style">Designated Authorities for adjudication of RTI applications/appeals</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>28</td>
                      <td>
                        <a href="./assets/pdf/RTI/Annexure_28.pdf" target="_blank" id="p-style">
                          <em>Suo motu </em>List of Employees and details of their Official Domestic and Foreign Tours. </a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>29</td>
                      <td>
                        <a href="./assets/pdf/RTI/RTI-01102018-31122018-TOURS.pdf " target="_blank" id="p-style">
                          <em>Suo motu </em>List of Employees and details of their Official Domestic and Foreign Tours (01.10.2018 to 31.12.2018). </a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>30</td>
                      <td>
                        <a href="./assets/pdf/RTI/RTI-01012019-31032019-TOURS.pdf " target="_blank" id="p-style">
                          <em>Suo motu </em>List of Employees and details of their Official Domestic and Foreign Tours (01.01.2019 to 31.03.2019). </a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>31</td>
                      <td>
                        <a href="./assets/pdf/RTI/Suo Motu Final_Merged.pdf " target="_blank" id="p-style">
                          <em>Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.07.2019 to 30.09.2019 and for the period 01.04.2019 to 30. 06.2019 </em>
                        </a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>32</td>
                      <td>
                        <a href="./assets/pdf/RTI/Vigilanceinformation_23082023.pdf " target="_blank" id="p-style">Details of Departmental/Vigilance/Court cases filed against the employees of NRSC as on 31.12.2021.</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>33</td>
                      <td>
                        <a href="./assets/pdf/RTI/rti-suomotu-ta-2020_new.pdf " target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.10.2019 to 31.12.2019 and for the period 01.01.2020 to 30.06.2020</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>34</td>
                      <td>Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.07.2020 to 30.09.2020 is NIL</td>
                    </tr>
                    <tr id="p-style">
                      <td>35</td>
                      <td>
                        <a href="./assets/pdf/RTI/RTI_quarterly report _ 30.06.2021.pdf" target="_blank" id="p-style">RTI-Suo Motu Disclosure of quarterly report from 01.04.2021 to 30.06.2021</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>36</td>
                      <td>
                        <a href="./assets/pdf/RTI/tours-sg-01.10.2020 to 31.03.2021.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.10.2020 to 31.03.2021</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>37</td>
                      <td>
                        <a href="./assets/pdf/RTI/SUO-MOTU-TRAVEL-01.01.2021_to_30.06.2021.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.01.2021 to 31.03.2021 and 01.04.2021 to 30.06.2021</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>38</td>
                      <td>
                        <a href="./assets/pdf/RTI/cpo_SUO-MOTU-TRAVEL-01.07.2021 to 30.09.2021.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.07.2021 to 30.09.2021</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>39</td>
                      <td>
                        <a href="./assets/pdf/RTI/cpo_SUO-MOTU-TRAVEL-01.10.2021 to 31.12.2021.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.07.2021 to 30.09.2021 and 01.10.2021 to 31.12.2021</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>40</td>
                      <td>
                        <a href="./assets/pdf/RTI/RTI_Tour_Detatils_01012022-to-31032022.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.01.2022 to 31.03.2022</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>41</td>
                      <td>
                        <a href="./assets/pdf/RTI/official_tour_01042022_to_30062022.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.04.2022 to 30.06.2022</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>42</td>
                      <td>
                        <a href="./assets/pdf/RTI/Tours_01072022_to_30092022.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.07.2022 to 30.09.2022</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>43</td>
                      <td>
                        <a href="./assets/pdf/RTI/Tours_01102022_31122022.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.10.2022 to 31.12.2022</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>44</td>
                      <td>
                        <a href="./assets/pdf/RTI/RTI-01012023-to-31032023.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.01.2023 to 31.03.2023</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>45</td>
                      <td>
                        <a href="./assets/pdf/RTI/RTI_Tours_01042023_30062023.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.04.2023 to 30.06.2023</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>46</td>
                      <td>
                        <a href="./assets/pdf/RTI/SelfAppraisal_2020-21.pdf" target="_blank" id="p-style">Self Appraisal report for Year 2020-2021</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>47</td>
                      <td>
                        <a href="./assets/pdf/RTI/officeorders_23082023.pdf" target="_blank" id="p-style">Office Orders - Promotions, Transfers</a>
                        <a href="./assets/pdf/RTI/FAccounts_20082024.pdf" target="_blank" id="p-style">Order-1</a>
                        <a href="./assets/pdf/RTI/PStores_20082024.pdf" target="_blank" id="p-style">Order-2</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>48</td>
                      <td>
                        <a href="./assets/pdf/RTI/Tours_01072023_30092023.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.07.2023 to 30.09.2023</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>49</td>
                      <td>
                        <a href="./assets/pdf/RTI/Tours_01102023_31122023.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.10.2023 to 31.12.2023</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>50</td>
                      <td>
                        <a href="./assets/pdf/RTI/Vigilance-Court case-05162024151931.pdf " target="_blank" id="p-style">Details of Departmental/Vigilance/Court cases filed against the employees of NRSC as on 31.12.2023.</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>51</td>
                      <td>
                        <a href="./assets/pdf/RTI/document-6.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.01.2024 to 31.03.2024</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>52</td>
                      <td>
                        <a href="./assets/pdf/RTI/Tours_01042024_30062024.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.04.2024 to 30.06.2024</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>53</td>
                      <td>
                        <a href="./assets/pdf/RTI/document-14.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.07.2024 to 30.09.2024</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>54</td>
                      <td>
                        <a href="./assets/pdf/RTI/Audit Report National_Remote_Sensing_Centre_Hyderabad.pdf" target="_blank" id="p-style">Self appraisal report of NRSC for the year 2023-2024</a>
                      </td>
                    </tr>
                    <tr id="p-style">
                      <td>55</td>
                      <td>
                        <a href="./assets/pdf/RTI/Tours_of_scientists.pdf" target="_blank" id="p-style">Suo Motu disclosure of Official Tours of Scientist /Engineer -G and above for the period of 01.09.2024 to 31.12.2024</a>
                      </td>
                    </tr>
                </tbody>
              </table>

              <nav>
                <ul class="pagination" id="pagination"></ul>
              </nav>
            </div>
          </section>
        </div>
      </div>
    </section>
  </main>

  <footer role="contentinfo">
    <?php include 'footer.php'; ?>
  </footer>

  <!-- Pagination Script -->
  <script>
	const rowsPerPage = 10;
	const allRows = Array.from(document.querySelectorAll("#myTable tbody tr"));
	const pagination = document.getElementById("pagination");
	const searchInput = document.getElementById("searchInput");

	let currentPage = 1;
	let filteredRows = [...allRows]; // Initially, all rows

	function renderTable() {
		const start = (currentPage - 1) * rowsPerPage;
		const end = start + rowsPerPage;

		// Show only filtered and paginated rows
		allRows.forEach(row => row.style.display = "none");
		filteredRows.slice(start, end).forEach(row => row.style.display = "");
	}

	function setupPagination() {
		pagination.innerHTML = "";

		const pageCount = Math.ceil(filteredRows.length / rowsPerPage);

		for (let i = 1; i <= pageCount; i++) {
		const li = document.createElement("li");
		li.className = "page-item" + (i === currentPage ? " active" : "");
		const a = document.createElement("a");
		a.className = "page-link";
		a.href = "#";
		a.textContent = i;

		a.addEventListener("click", (e) => {
			e.preventDefault();
			currentPage = i;
			renderTable();
			setupPagination(); // Refresh pagination highlighting
		});

		li.appendChild(a);
		pagination.appendChild(li);
		}
	}

	function filterRows() {
		const term = searchInput.value.toLowerCase();
		filteredRows = allRows.filter(row =>
		Array.from(row.cells).some(cell =>
			cell.textContent.toLowerCase().includes(term)
		)
		);
		currentPage = 1;
		renderTable();
		setupPagination();
	}

	// Event listener for search
	searchInput.addEventListener("input", filterRows);

	// Initialize table on page load
	filterRows();
	</script>

</body>
</html>
