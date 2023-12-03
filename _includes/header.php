<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ucfirst($page); ?> | ACME University</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL . "_assets/css/style.css" ?>">
  <link rel="stylesheet" href="<?php echo BASE_URL . "_assets/css/utilities.css" ?>">
  <!-- Slick CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto+Slab:wght@300;400;600;700&family=Work+Sans:wght@900&display=swap" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <!-- Slick Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
<body>
  <header>
    <!-- Header-top -->
    <div class="header-top bg-secondary">
      <div class="container">
        <ul class="nav flex-nowrap overflow-auto small">
          <li class="nav-item small text-uppercase"><a href="#!" class="nav-link text-light">About</a></li>
          <li class="nav-item small text-uppercase"><a href="#!" class="nav-link text-light">Education</a></li>
          <li class="nav-item small text-uppercase"><a href="#!" class="nav-link text-light">Research</a></li>
          <li class="nav-item small text-uppercase"><a href="#!" class="nav-link text-light">Feedback</a></li>
          <li class="nav-item small text-uppercase"><a href="#!" class="nav-link text-light">RTI</a></li>
          <li class="nav-item small text-uppercase"><a href="#!" class="nav-link text-light">Contact</a></li>
          <li class="nav-item small text-uppercase"><a href="#!" class="nav-link text-light">Sitemap</a></li>
        </ul>
      </div>
    </div>
    <!-- Logo banner -->
    <div class="logo-banner bg-white py-3">
      <div class="container">
        <a href="<?php echo BASE_URL; ?>" class="d-flex align-items-center text-decoration-none">
          <img class="mr-2" width="60px" src="<?php echo BASE_URL . "_assets/imgs/college-website-logo.png" ?>" alt="college website logo">
          <h1 class="ff-work text-dark font-weight-bold m-0">ACME <span class="ff-work text-danger font-weight-bold">University</span></h1>
        </a>
      </div>
    </div>
    <!-- Navbar -->
    <div class="navbar-wrapper bg-dark">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-end">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item <?php if($page == "home") echo "active"; ?>"><a href="<?php echo BASE_URL; ?>" class="nav-link"><i class="fa fa-home"></i></a></li>
              <li class="nav-item dropdown <?php if($page == "aboutUs") echo "active"; ?>">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  About Us
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo BASE_URL . "about-us/about-acme"; ?>">About ACME</a>
                  <a class="dropdown-item" href="<?php echo BASE_URL . "about-us/directors-message"; ?>">Director's Message</a>
                  <a class="dropdown-item" href="<?php echo BASE_URL . "about-us/our-history"; ?>">Our History</a>
                  <a class="dropdown-item" href="<?php echo BASE_URL . "about-us/our-mission-and-vision"; ?>">Our Mission &amp; Vision</a>
                </div>
              </li>
              <li class="nav-item dropdown <?php if($page == "academics") echo "active"; ?>">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  Academics
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo BASE_URL . "academics/overview"; ?>">Overview</a>
                  <a class="dropdown-item" href="<?php echo BASE_URL . "academics/academic-divisions"; ?>">Academic Divisions</a>
                </div>
              </li>
              <li class="nav-item dropdown <?php if($page == "students") echo "active"; ?>">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  Students
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo BASE_URL . "students/campus-life"; ?>">Campus Life</a>
                  <a class="dropdown-item" href="<?php echo BASE_URL . "students/current-students"; ?>">Current Students</a>
                  <a class="dropdown-item" href="<?php echo BASE_URL . "students/prospective-students"; ?>">Prospective Students</a>
                  <a class="dropdown-item" href="#">Gender Cell(AKA Women's Cell)</a>
                  <a class="dropdown-item" href="#">Student Wellness Center(Counselling Care)</a>
                  <a class="dropdown-item" href="#">SC/ST Cell</a>
                </div>
              </li>
              <li class="nav-item dropdown <?php if($page == "faculty") echo "active"; ?>">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  Faculty
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Facilities at ACME</a>
                  <a class="dropdown-item" href="#">Prospective Faculty</a>
                  <a class="dropdown-item" href="#">Current Faculty</a>
                  <a class="dropdown-item" href="#">Retired Faculty</a>
                  <a class="dropdown-item" href="#">Awards &amp; Honours</a>
                  <a class="dropdown-item" href="#">Chair Professorship</a>
                  <a class="dropdown-item" href="#">Gender Cell(AKA Women's Cell)</a>
                  <a class="dropdown-item" href="#">ACME Research Park</a>
                </div>
              </li>
              <li class="nav-item dropdown <?php if($page == "alumni") echo "active"; ?>">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  Alumni
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">ACME Alumni Office</a>
                  <a class="dropdown-item" href="#">Alumni Association</a>
                </div>
              </li>
              <li class="nav-item dropdown <?php if($page == "industry") echo "active"; ?>">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  Industry
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">ACME Research Park</a>
                  <a class="dropdown-item" href="#">SARC</a>
                  <a class="dropdown-item" href="#">Consultancy &amp; Research</a>
                  <a class="dropdown-item" href="#">Continuing Education</a>
                  <a class="dropdown-item" href="#">Analytical Measurements</a>
                  <a class="dropdown-item" href="#">Technology Transfer &amp; Licensing</a>
                  <a class="dropdown-item" href="#">Donor Relationship</a>
                  <a class="dropdown-item" href="#">Placements at ACME</a>
                  <a class="dropdown-item" href="#">Vendor's Corner</a>
                  <a class="dropdown-item" href="#">Tenders</a>
                  <a class="dropdown-item" href="#">GST Registration Details</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" role="button">
                  News
                </a>
              </li>
              <li class="nav-item dropdown <?php if($page == "media") echo "active"; ?>">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  Media
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Public Relations Office</a>
                  <a class="dropdown-item" href="#">News Hub</a>
                  <a class="dropdown-item" href="#">Research at ACME</a>
                  <a class="dropdown-item" href="#">Photo Gallery</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" role="button">
                  Login <i class="fa fa-user-circle"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" role="button">
                  Search <i class="fa fa-search"></i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>