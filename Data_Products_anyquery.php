<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Indian Missions</title>
    <link rel="stylesheet" href="assets/css/all_6.5.0.min.css" integrity="sha512-b9q0tMlVt/uy/F+u2F7mLfE1lL6ph+M7GjE2ls4VOSbYpUc4kls8ukXQY4k3OEDYfHOibSCpAxAJtN5YTe+vwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/bootstrap4.6.2.min.css" />
    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap4.6.2.bundle.min.js"></script>
    <style>
        .container li {
            font-size: 24px;
            color: #3f68b5;
        }

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

            .container li {
                font-size: 18px !important;
            }
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

        .section {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        :root {
            --isro-blue: #1a3e72;
            --isro-light-blue: #e6f0fa;
            --accent-orange: #f57c00;
        }

        .contact-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            width: 100%;
            max-width: 700px;
        }

        .contact-title {
            font-weight: 600;
            color: var(--isro-blue);
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .contact-details {
            margin-bottom: 25px;
        }

        .contact-details p {
            margin: 8px 0;
            line-height: 1.7;
        }

        .contact-method {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-icon {
            min-width: 40px;
            height: 40px;
            background: var(--isro-light-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--isro-blue);
            font-size: 1.2rem;
        }

        .email-group {
            margin-top: 25px;
        }

        .email-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 4px;
            transition: background 0.2s;
        }

        .email-item:hover {
            background: var(--isro-light-blue);
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .container-fluid {
                padding-left: 15px;
                padding-right: 15px;
            }

            .col-lg-6 {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 15px;
            }

            .main-content {
                padding-right: 0;
            }

            .breadcrumb ol li a,
            .breadcrumb ol li.current {
                font-size: 18px !important;
            }

            .contact-title {
                font-size: 24px;
                text-align: justify;
            }

            .contact-details p,
            .contact-method,
            .email-group div {
                font-size: 16px !important;
            }

            .contact-card {
                padding: 15px;
            }

            .contact-method {
                flex-direction: column;
                align-items: flex-start;
            }

            .contact-icon {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 576px) {
            .breadcrumb ol li a,
            .breadcrumb ol li.current {
                font-size: 16px !important;
            }

            #p-style {
                font-size: 16px;
            }

            .email-item {
                flex-direction: column;
                align-items: flex-start;
            }
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
                            <h1 class="heading-title text-break text-center">Indian Missions</h1>
                        </div>
                    </div>
                </div>
            </section>
            <nav class="breadcrumbs" aria-label="Breadcrumb">
                <div class="container">
                    <ol>
                        <li class="current">
                            <b>Data Products</b>
                        </li>
                        <li class="current">
                            <b>Indian Missions</b>
                            </a>
                        </li>
                        <li class="current">
                            <b>Any Query</b>
                        </li>
                    </ol>
                </div>
            </nav>
        </header>
        <div data-skip-id="data_products-main" id="data_products-main"></div>
        <section id="service-details" class="service-details section">
            <div class="container-fluid">
                <div class="row gy-4">
                    <button class="btn btn-primary d-md-none mb-3" type="button" data-toggle="collapse" data-target="#mobileSidebar" aria-expanded="false" aria-controls="mobileSidebar" id="menuToggleBtn">Show Menu</button>
                    <aside id="mobileSidebar" class="collapse d-md-block col-md-3 col-lg-3"
 aria-label="Course Navigation">
                        <?php include 'data_products_Services_List.php'; ?>
                    </aside>
<section class="col-md-9 col-lg-9">
                        <h3>Any Query</h3>
                        <br />
                        <p id="p-style">Please contact the following for all data related queries</p>
                        <div class="contact-card">
                            <div class="contact-title">Group Head, Data Acquisition Planning & Outreach Group</div>
                            <div class="contact-details">
                                <p id="p-style">National Remote Sensing Centre (NRSC)</p>
                                <p id="p-style">Indian Space Research Organisation (ISRO)</p>
                                <p id="p-style">Balanagar, Hyderabad - 500037</p>
                                <p id="p-style">India</p>
                            </div>
                            <div class="contact-method" id="p-style">
                                <div class="contact-icon">📞</div>
                                <div>+91 (40) 2388 4422 / 4423</div>
                            </div>
                            <div class="email-group">
                                <div class="contact-method" id="p-style">
                                    <div class="contact-icon">✉️</div>
                                    <div>
                                        <div class="email-item">
                                            <span>sales[at]nrsc[dot]gov[dot]in</span>
                                        </div>
                                        <div class="email-item">
                                            <span>data[at]nrsc[dot]gov[dot]in</span>
                                        </div>
                                        <div class="email-item">
                                            <span>ghdpog[at]nrsc[dot]gov[dot]in</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="p-style">For any latest information, Please visit <a href="https://bhoonidhi.nrsc.gov.in/" target="_blank">BHOONIDHI</a></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
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