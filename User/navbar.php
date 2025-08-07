<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Legalcare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>

  .consultation-btn {
    transition: background-color 0.3s ease, transform 0.2s ease;
  }
  .consultation-btn:hover {
    transform: scale(1.05);
  }
  .consultation-btn:active {
    transform: scale(0.97);
  }

</style>

  </head>
  <body>
    
<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">Legalcare <span>A Law Firm Agency</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?= ($currentPage == 'index.php') ? 'active' : '' ?>">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item <?= ($currentPage == 'about.php') ? 'active' : '' ?>">
          <a href="about.php" class="nav-link">About</a>
        </li>
        <li class="nav-item <?= ($currentPage == 'attorneys.php') ? 'active' : '' ?>">
          <a href="attorneys.php" class="nav-link">Attorneys</a>
        </li>
        <li class="nav-item <?= ($currentPage == 'practice-areas.php') ? 'active' : '' ?>">
          <a href="practice-areas.php" class="nav-link">Practice Areas</a>
        </li>
        <li class="nav-item <?= ($currentPage == 'case.php') ? 'active' : '' ?>">
          <a href="case.php" class="nav-link">Case Studies</a>
        </li>
        <li class="nav-item <?= ($currentPage == 'blog.php') ? 'active' : '' ?>">
          <a href="blog.php" class="nav-link">Blog</a>
        </li>
        <li class="nav-item <?= ($currentPage == 'contact.php') ? 'active' : '' ?>">
          <a href="contact.php" class="nav-link">Contact</a>
        </li>
        <li class="nav-item cta">
          <a href="#" class="btn btn-primary nav-link text-white px-3 py-2 consultation-btn" data-toggle="modal" data-target="#signupModal" style="margin-top: 5px;">Register Now!</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
include("singing-signup.php")
?>
 