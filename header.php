


<!DOCTYPE html>
<html lang="en">

<head>
<?php wp_head();?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DevBlog </title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="/wp-content/themes/myTheme/assets/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="/wp-content/themes/myTheme/assets/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body class="light-theme">

  <!--
    - #HEADER
  -->

  <header>

    <div class="container">

      <nav class="navbar">

        <a href="#">
          <img src="/wp-content/themes/myTheme/assets/logo-light.svg" alt="Devblog's logo" width="150" class="logo-light">
          <img src="/wp-content/themes/myTheme/assets/logo-dark.svg" alt="Devblog's logo" width="150" class="logo-dark">
        </a>

        <div class="btn-group">

          <button class="theme-btn theme-btn-mobile light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>

          <button class="nav-menu-btn">
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

        <div class="flex-wrapper">

          <ul class="desktop-nav">

            <li>
              <a href="http://pet-adoption.local/#" class="nav-link">Home</a>
            </li>

            <li>
              <a href="http://pet-adoption.local/about/" class="nav-link">About Me</a>
            </li>

            <li>
              <a href="http://pet-adoption.local/contact/" class="nav-link">Contact</a>
            </li>

          </ul>

          <button class="theme-btn theme-btn-desktop light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>

        </div>

        <div class="mobile-nav">

          <button class="nav-close-btn">
            <ion-icon name="close-outline"></ion-icon>
          </button>

          <div class="wrapper">

            <p class="h3 nav-title">Main Menu</p>

            <ul>
              <li class="nav-item">
                <a href="http://pet-adoption.local/#" class="nav-link">Home</a>
              </li>

              <li class="nav-item">
                <a href="http://pet-adoption.local/about/" class="nav-link">About Me</a>
              </li>

              <li class="nav-item">
                <a href="http://pet-adoption.local/contact/" class="nav-link">Contact</a>
              </li>
            </ul>

          </div>

          <div>

            <p class="h3 nav-title">Topics</p>

            <ul>
              <li class="nav-item">
                <a href="#" class="nav-link">Database</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Accessibility</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Web Performance</a>
              </li>
            </ul>

          </div>

        </div>

      </nav>

    </div>

  </header>

 

  