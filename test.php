<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>LogIn</title>
      <meta name="description" content="">
      <meta name="keywords" content="">

      <!-- Favicons -->
      <link href="./images/Favico.ico" rel="icon">
      <link href="./images/Favico.ico" rel="apple-touch-icon">

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com" rel="preconnect">
      <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

      <!-- Main CSS File -->
      <link href="assets/css/main.css" rel="stylesheet">

      <!-- =======================================================
      
      ======================================================== -->
    </head>

    <body>
        <div class="logo_section container d-flex">
            <a href="" class="d-flex align-items-center">
                <img src="./images/akmeemanalogo-removebg-preview.png" alt="">
                <h2 class="ms-3" class="logo_name"><b>Akmeemana</b> Pradeshiya Sabha</h2>
            </a>
            <div class="language_btn d-flex justify-content-end align-items-center w-100">
                <button class="btn">සිංහල</button>
                <button class="btn ms-3">தமிழ்</button>
            </div>
        </div>
      <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container d-flex align-items-center">

          <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="./images/akmeemanalogo-removebg-preview.png" alt="">
            <h3 class="sitename"><b>Akmeemana</b> Pradeshiya Sabha</h3>
          </a>

          <nav id="navmenu" class="navmenu">
              <ul>
                <?php 
                  $sql = $bdd -> prepare('SELECT * FROM navbar');
                  $sql -> execute();

                  while($data = $sql -> fetch()) {
                ?>
                  <?php 
                    if($data[3]){ 
                      $name = explode("," , $data[1]);
                      $link = explode("," , $data[2]);
                        $is_activeDropdowns = in_array($current_page, $link) ? 'active' : '' ;
                    ?>
                      <li class="dropdown"><a class="<?= $is_activeDropdowns ?>" href="<?= $link[0] ?>"><span><?= $name[0] ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                        <?php
                          for($i = 1; $i < count($name) ; $i++){
                            $active = ($current_page == basename($link[$i])) ? 'active' : '';  
                        ?>
                          <li><a class="<?= $active ?>" href="./<?= $link[$i] ?>"><?= $name[$i] ?></a></li>
                        <?php
                          }
                        ?>
                        </ul>
                      </li>
                    <?php
                    }else{ 
                      $active = ($current_page == basename($data[2])) ? 'active' : '';  
                      ?>
                      <li><a class="<?= $active ?>" href="./<?= $data[2] ?>" class=""><?= $data[1] ?></a></li>
                    <?php
                    }
                  ?>
              <?php } ?>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
      </header>

      <div id="preloader"></div>

    </body>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Jquery Link -->
    <script src="./assets/js/jquery.min.js"></script>

    </html>