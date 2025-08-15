<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Respond Projects</title>

  <!-- Bootstrap & jQuery -->
  <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
  <script src="assets/js/jquery.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>

  <!-- Styles -->
  <style>
    .container li {
      font-size: 24px;
      color: #3f68b5;
    }

    .heading-title {
      word-break: break-word;
    }

    @media (max-width: 576px) {
      .heading-title {
        font-size: 26px !important;
        line-height: 1.3 !important;
      }

      .container li {
        font-size: 18px !important;
      }
    }

    .doc-card:hover {
      transform: scale(1.02);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
    }

    .doc-search {
      margin: 20px 0;
    }

    .tab-pane {
      margin-top: 20px;
    }

    .doc-card-wrapper {
      margin-bottom: 20px;
    }

    .doc-card {
      display: flex;
      align-items: center;
      background: #fff;
      padding: 15px 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .doc-icon {
      width: 40px;
      height: auto;
      margin-right: 15px;
    }

    .doc-details h5 {
      font-size: 16px;
      margin: 0;
      font-weight: 600;
      color: #004085;
    }

    .doc-details p {
      font-size: 14px;
      margin: 5px 0;
      color: #555;
    }

    .btn-download {
      margin-top: 5px;
    }

    #financial-tab, #report-tab {
      font-size: 20px;
      font-weight: 700;
    }
  </style>
</head>

<body>
<main id="main-content" class="main" role="main">
    <header class="page-title" role="banner">
      <section class="heading" role="banner">
        <div class="container-fluid">
          <div class="row justify-content-center text-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-9">
              <h1 class="heading-title text-break text-center">Respond Projects</h1>
            </div>
          </div>
        </div>
      </section>

      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="container">
          <ol>
            <li class="current"><b>Training & Outreach</b></li>
            <li class="current"><b>Respond Projects</b></li>
            <li class="current"><b>Respond Proposal Format</b></li>
          </ol>
        </div>
      </nav>
    </header>

    <section id="service-details" class="service-details section">
      <div class="container-fluid">
        <div class="row gy-4">
          <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>

          <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation">
            <?php include 'Respond_Projects_List.php'; ?>
          </aside>

<section class="col-md-9 col-lg-9">
            <h3>Respond Proposal Format</h3>
              <!-- Search -->
              <input type="text" class="form-control doc-search" placeholder="Search documents..." id="docSearch">

              <!-- Tabs -->
              <ul class="nav nav-tabs" id="docTabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="financial-tab" data-bs-toggle="tab" data-bs-target="#financial" type="button">Financial Forms</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="report-tab" data-bs-toggle="tab" data-bs-target="#report" type="button">Reports & Others</button>
                </li>
              </ul>

              <!-- Tab Content -->
              <div class="tab-content" id="docTabsContent">
                <!-- Financial Forms Tab -->
                <div class="tab-pane fade show active" id="financial" role="tabpanel">
                  <div class="row g-3 mt-2" id="financial-docs">
                    <?php
                    $financial_docs = [
                      [
                        'title' => 'Grant-in-Aid Bill – RESPOND Projects',
                        'file' => 'assets/pdf/respond/Grant_in_aid_billRespond.doc',
                        'type' => 'doc',
                        'size' => '27 KB'
                      ],
                      [
                        'title' => 'Electronic Fund Transfer Form',
                        'file' => 'assets/pdf/respond/Electronic_Transfer_Mandate_Form29.doc',
                        'type' => 'doc',
                        'size' => '28 KB'
                      ],
                      [
                        'title' => 'Fund Utilization Certificate',
                        'file' => 'assets/pdf/respond/FundUtilizationCertificateForm.pdf',
                        'type' => 'pdf',
                        'size' => '446 KB'
                      ],
                      [
                        'title' => 'Audited Accounts Statement – Projects',
                        'file' => 'assets/pdf/respond/AuditedAccountsStatement-RespondProjects.doc',
                        'type' => 'doc',
                        'size' => '32 KB'
                      ],
                      [
                        'title' => 'Form – C',
                        'file' => 'assets/pdf/respond/form_c-1.pdf',
                        'type' => 'pdf',
                        'size' => '394 KB'
                      ]
                    ];

                    foreach ($financial_docs as $doc) {
                      $icon = $doc['type'] == 'pdf'
                        ? "<img src='assets/img/pdf_img.png' alt='PDF' class='doc-icon' />"
                        : "<img src='assets/img/word_icon.png' alt='Word Icon' class='doc-icon' />";

                      echo "
                        <div class='col-md-6 doc-card-wrapper'>
                          <div class='doc-card'>
                            {$icon}
                            <div class='doc-details'>
                              <h5>{$doc['title']}</h5>
                              <p>" . strtoupper($doc['type']) . " – {$doc['size']}</p>
                              <a href='{$doc['file']}' class='btn btn-outline-primary btn-sm btn-download' target='_blank'>Download</a>
                            </div>
                          </div>
                        </div>
                      ";
                    }
                    ?>
                  </div>
                </div>

                <!-- Reports Tab -->
                <div class="tab-pane fade" id="report" role="tabpanel">
                  <div class="row g-3 mt-2" id="report-docs">
                    <?php
                    $report_docs = [
                      [
                        'title' => 'Format of Annual Report',
                        'file' => 'assets/pdf/respond/FormatofAnnualReport-RespondProjects.doc',
                        'type' => 'doc',
                        'size' => '30 KB'
                      ]
                    ];

                    foreach ($report_docs as $doc) {
                      $icon = $doc['type'] == 'pdf'
                        ? "<img src='assets/img/pdf_img.png' alt='PDF' class='doc-icon' />"
                        : "<img src='assets/img/word_icon.png' alt='Word Icon' class='doc-icon' />";

                      echo "
                        <div class='col-md-6 doc-card-wrapper'>
                          <div class='doc-card'>
                            {$icon}
                            <div class='doc-details'>
                              <h5>{$doc['title']}</h5>
                              <p>" . strtoupper($doc['type']) . " – {$doc['size']}</p>
                              <a href='{$doc['file']}' class='btn btn-outline-primary btn-sm btn-download' target='_blank'>Download</a>
                            </div>
                          </div>
                        </div>
                      ";
                    }
                    ?>
                  </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  </main>

  <footer role="contentinfo">
    <?php include 'footer.php'; ?>
  </footer>

  <!-- JS: Simple client-side search filter -->
  <script>
    document.getElementById("docSearch").addEventListener("input", function () {
      const value = this.value.toLowerCase();
      document.querySelectorAll(".doc-card-wrapper").forEach(card => {
        card.style.display = card.textContent.toLowerCase().includes(value) ? "" : "none";
      });
    });
  </script>
</body>
</html>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var menuBtn = document.getElementById("menuToggleBtn");
    var sidebar = document.getElementById("mobileSidebar");
    $('#mobileSidebar').on('show.bs.collapse', function() {
      menuBtn.innerText = "Hide Menu";
    });
    $('#mobileSidebar').on('hide.bs.collapse', function() {
      menuBtn.innerText = "Show Menu";
    });
  });
</script>