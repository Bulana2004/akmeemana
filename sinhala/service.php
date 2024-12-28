<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Service</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="../images/Favico.ico" rel="icon">
    <link href="../images/Favico.ico" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Vendor CSS Files -->
    <link href="./../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="./../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="./../assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
        
        ======================================================== -->
</head>
<?php
include './../config/config.php';
$current_page = basename($_SERVER['REQUEST_URI']) . ".php";
?>

<body class="about-page">

    <div class="d-flex justify-content-end p-1">
        <!-- <button class="btn rounded-5 me-2 shadow tran_btn"><a href="./index.php" style="color: white;">සිංහල</a></button> -->
        <button class="btn rounded-5 me-2 shadow tran_btn"><a href="../service.php" style="color: white;">English</a></button>
        <button class="btn rounded-5 shadow tran_btn"><a href="../Tamil/service.php" style="color: white;">தமிழ்</a></button>
    </div>

    <header id="header" class="header d-flex align-items-center sticky-top shadow">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="./index.php" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="../images/logo.png" alt="">
                <h3 class="sitename">වැලිවිටිය දිවිතුර ප්‍රාදේශීය සභාව</h3>
            </a>

            <!--===============================================================Navigation Bar Start============================================================-->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <?php
                    $sql = $bdd->prepare('SELECT * FROM sinnavbar');
                    $sql->execute();

                    while ($data = $sql->fetch()) {
                    ?>
                        <?php
                        if ($data[3]) {
                            $name = explode(",", $data[1]);
                            $link = explode(",", $data[2]);
                            $is_activeDropdowns = in_array($current_page, $link) ? 'active' : '';
                        ?>
                            <li class="dropdown"><a class="<?= $is_activeDropdowns ?>" href="<?= $link[0] ?>"><span><?= $name[0] ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <?php
                                    for ($i = 1; $i < count($name); $i++) {
                                        $active = ($current_page == basename($link[$i])) ? 'active' : '';
                                    ?>
                                        <li><a class="<?= $active ?>" href="./<?= $link[$i] ?>"><?= $name[$i] ?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                        <?php
                        } else {
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
            <!--================================================================Navigation Bar Stop=================================================================-->

            <!-- <div class="header-social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div> -->

        </div>
    </header>

    <main class="save_main">

        <!-- Page Title -->
        <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">සේවාවන්</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.php">මුල් පිටුව</a></li>
                        <li class="current">සේවාවන්</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="../images/sev1.jpg" alt="Responsive Image" style="object-fit: cover;">
                        </div>
                    </div>

                    <div class="col-lg-6 order-2 order-lg-2" data-aos="fade-up" data-aos-delay="0.3s">
                        <h1 class=" bg-white text-start pe-3">ආයතන හා ගිණුම් අංශය</h1>
                        <br>
                        <ul>
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0 ">සභා රැස්වීම්,විශේෂ සභා රැස්වීම් හා කමිටු රැස්වීම් පැවැත්වීම හා එම තීරණ ක්‍රියත්මක කිරීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">කාර්‍යය මණ්ඩලය මෙහෙයවීම හා පාලනය කිරීම.
                                            ලබා දීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">සභාවේ අභ්‍යන්තර විගණන කටයුතු සිදු කිරීම
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">සභාවට අය විය යුතු සියළු ආදායම් රැස් කිරීම</p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">ටෙන්ඩර් කැඳවීම් හා සියළු මිල දී ගැනීම් සිදුකිරීම</p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">සියළු ගෙවීම් සැලසුම් කිරීම්</p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">ව්‍යාපාර සඳහා බදු පැනවීමේ කටයුතු හා සකස් කිරීම හා වාර්ෂික ගිණුම් සකස් කිරීම හා වාර්ෂික අයවැය සකස් කිරීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">වාහන හා යන්ත්‍රෝපකරණ නඩත්තුව</p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">සැලසුම්කරුවන් ලියාපදිංචි කිරීම </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">පුවත්පත් දැන්වීම් පලකිරීම් හා දෑන්වීම් ගැසට් පත්‍රවල පල කිරීම.</p>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="0.3s">
                        <h1 class=" bg-white text-start pe-3">සැලසුම් හා සංවර්ධන අංශය</h1>
                        <br>
                        <ul class="custemer-bullet">
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            වීථි රේඛා සහතික,නොපවරා ගැනීමේ සහතික හා වරිපනම් සහතික නිකුත් කිරීම
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            ඉඩම් පිඹුරු සහ අනුබෙදුම් සඳහා අනුමැතිය ලබාදීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            නිවාස,ව්‍යාපාරික ස්ථාන ආදී ඉදිකිරීම් සඳහා ගොඩනැගිලි අයදුම්පත්‍ර නිකුත් කිරීම හා සැලසුම් අනුමත කිරීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            අනුකූලතා සහතික නිකුත් කිරීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            ඉදිකිරීම් ඇතුළු කර්මාන්ත සම්බන්ධ සියළු කටයුතු.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            ප්‍රාදේශීය සභා ගොඩනැගලි,මාර්ග,කාණු හා බෝක්කු ඇතුලු සියළු ඉදිකිරීම් නඩත්තු කිරීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            මහජන පැමිණිලි හා පෙත්සම් වලට අදාල කටයුතු සිදු කිරීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            අනවසර ඉදිකිරීම් පාලනය හා ඒ සම්බන්ධව නිත්‍යානුකූල ක්‍රියාමර්ග ගැනීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            පොදු ඉඩම් පාලනය කිරීම හා සංවර්ධනය කිරීම
                                        </p>
                                    </li>
                                </div>
                            </div>
                        </ul>

                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="../images/sev2.jpg" alt="Responsive Image" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="../images/sev3.jpg" alt="Responsive Image" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0.3s">
                        <h1 class=" bg-white text-start pe-3">සෞඛ්‍ය,පරිසර හා ප්‍රජා සංවර්ධන අංශය</h1>
                        <br>
                        <ul>
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            සෞඛ්‍ය වෛද්‍ය නිළධාරී කර්‍යයාලය හා එක්ව ප්‍රාදේශයේ රෝග වැලැක්වීමේ සේවා හා මහජන සනීපාරක්ෂාව පිළිබඳ සේවා පවත්වාගෙන යාම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            ආයුර්වේද සෞඛ්‍ය සේවා ලබා දීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            පරිසර බලපත්‍ර නිකුත් කිරීම ඈලුත් කිරීම හා පරිසර පැමිණිලි වලට අදාල කටයුතු කිරීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            අනතුරු දායක ගස් ඉවත් කිරීමේ අයදුම් පත් නිකුත් කිරීම හා ඊට අදාළ නියෝග ලබා දීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            පුස්තකාල සේවා පවත්වාගෙන යාම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            පෙරපාසල් සේවා ලබා දීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            පොදු වෙළඳපොල නඩත්තුව.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            සුසාන භූමි පවත්වාගෙන යාම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            බල ප්‍රදේශයේ කසල ඉවත් කිරීම හා කළමණාකරණය කිරීම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            විථි ආලෝකකරණය.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            ප්‍රජා ශාලා පවත්වාගෙන යාම.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            ආගමික හා සංකෘතික කටයුතු ප්‍රවර්ධනය කිරීම.
                                        </p>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="0.3s">
                        <h1 class=" bg-white text-start pe-3">පුස්ථකාලය</h1>
                        <br>
                        <ul>
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                            edyeyewuuwgduygedgeuidegdugedguydeudedetf
                                        </p>
                                    </li>
                                </div>
                            </div>
                        </ul>

                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="../images/sev4.jpg" alt="Responsive Image" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

    </main>

        <footer id="footer" class="footer dark-background">

            <div class="container footer-top">
                <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="./index.php" class="logo d-flex align-items-center">
                    <span class="sitename">වැලිවිටිය දිවිතුර <br> ප්‍රාදේශීය සභාව.</span>
                    </a>
                    <div class="footer-contact pt-3">
                    <p>වැලිවිටිය දිවිතුර</p>
                    <p>ප්‍රාදේශීය සභාව, අගලිය</p>
                    <p class="mt-3"><strong>දුරකථන අං:</strong> <span>0912260554</span></p>
                    <p><strong>විද්‍යුත් ලිපිනය:</strong> <span>wdps2006@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                    <a href="" target="_blank" class="text-primary" style="border-color: #0d6efd;"><i class="bi bi-facebook"></i></a>
                    <a href="" target="_blank" style="color: #0074b1;border-color:#0074b1;"><i class="bi bi-bank"></i></a>
                    </div>
                </div>

                <div class="col-lg-2"></div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>ප්‍රයෝජනවත් සබැඳි</h4>
                    <ul>
                    <li><a href="./index.php">මුල්පිටුව</a></li>
                    <li><a href="./booking.php">වෙන්කරවා ගැනීම</a></li>
                    <li><a href="./service.php">සේවා</a></li>
                    <li><a href="./tenders.php">ටෙන්ඩර්</a></li>
                    <li><a href="./application.php">යෙදුම</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>අපගේ සේවාවන්</h4>
                    <ul>
                    <li><a href="#">ආයතන සහ ගිණුම් අංශය</a></li>
                    <li><a href="#">ආදායම් අංශය</a></li>
                    <li><a href="#">සංවර්ධන අංශය</a></li>
                    <li><a href="#">ගිණුම් අංශය</a></li>
                    </ul>
                </div>

            </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Welivitya Divithura Pradeshiya Sabha</strong> <span>All Rights Reserved</span></p>
                <div class="credits">
                Designed by <a href="#" class="ms-2 me-3" style="text-decoration: underline;">N Code UX Private Limited</a><img src="./../images/company logo.png" alt="" width="40px">
                </div>
            </div>

            </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

        <!-- ChatBox -->
        <div class="container">
            <!-- Chat Button -->
            <button class="btn chat-toggle" onclick="toggleChat()"><i class="bi bi-chat-dots-fill" style="font-size: 1.5rem;"></i></button>

            <!-- Chat Box -->
            <div class="card chat-box d-none" id="chatBox">
                    <!-- Toast Element -->
        <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true" id="myToast">
          <div class="d-flex">
            <div class="toast-body">
              දැන් ඔබට ඔබගේ පැමිණිලි වෙබ් අඩවිය හරහා සෘජුවම අප වෙත යොමු කළ හැක.
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>
        <script>
          // Show Toast on Page Load
          document.addEventListener('DOMContentLoaded', function () {
            const myToast = document.getElementById('myToast');
            const toast = new bootstrap.Toast(myToast, {delay: 7000});
            toast.show();
          });
        </script>

        <!-- ChatBox -->
        <div class="container">
            <!-- Chat Button -->
            <button class="btn chat-toggle" onclick="toggleChat()"><i class="bi bi-chat-dots-fill" style="font-size: 2rem;"></i></button>

            <!-- Chat Box -->
            <div class="card chat-box d-none" id="chatBox">
                <div class="card-header text-bg-danger">
                    කතාබස් කරන්න
                    <button type="button" class="btn-close btn-close-white float-end" onclick="toggleChat()"></button>
                </div>
                <div class="card-body">
                    <form id="contactForm" enctype="multipart/form-data">
                        <label for="name">නම :</label>
                        <input type="text" id="name" name="name" class="form-control border-dark mb-2" placeholder="ඔබගේ නම ඇතුළත් කරන්න">
                        <label for="phonenumber">දුරකථන අංකය :</label>
                        <input type="number" id="phonenumber" name="phonenumber" class="form-control border-dark mb-2" placeholder="ඔබගේ දුරකථන අංකය ඇතුළත් කරන්න">
                        <label for="email">විද්යුත් තැපෑල :</label>
                        <input type="email" id="email" name="email" class="form-control border-dark mb-2" placeholder="ඔබගේ විද්‍යුත් තැපෑල ඇතුළත් කරන්න">
                        <label for="message">පණිවිඩය :</label>
                        <textarea name="message" id="message" class="form-control border-dark mb-2" placeholder="ඔබගේ පණිවිඩය ඇතුළත් කරන්න" style="height: 150px;"></textarea>
                        <div class="row mb-2">
                            <div class="col-8">
                                <p>ඔබට අවශ්‍ය නම්, ඔබේ පණිවිඩයට හඬ පටිගත කිරීමක් අමුණන්න.</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-danger me-2" id="startRecording">පටිගත කරන්න</button>
                                <button type="button" class="btn btn-danger d-none" id="stopRecording">පටිගත කිරීම නවත්තන්න</button>
                            </div>
                        </div>
                        <audio id="audioPlayback" class="mb-2 w-100 d-none" controls></audio>
                        <input type="file" id="voice" name="voice" class="d-none" accept="audio/*">
                        <button type="submit" class="btn btn-success d-block mx-auto">
                            <span id="sbmsg">පණිවිඩය ඉදිරිපත් කරන්න</span>
                            <div class="spinner-border text-light d-none" id="loader" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                        <div id="responseMessage" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>

        <script>
          function toggleChat() {
            $('#chatBox').toggleClass('d-none');
        }

        document.addEventListener('DOMContentLoaded', function() {
            let mediaRecorder;
            let audioChunks = [];
            const startRecordingBtn = document.getElementById('startRecording');
            const stopRecordingBtn = document.getElementById('stopRecording');
            const audioPlayback = document.getElementById('audioPlayback');
            const contactForm = document.getElementById('contactForm');
            
            function toggleChat() {
                document.getElementById('chatBox').classList.toggle('d-none');
            }

            // Recording functionality
            startRecordingBtn.addEventListener('click', async function() {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                    mediaRecorder = new MediaRecorder(stream);
                    audioChunks = [];

                    mediaRecorder.addEventListener('dataavailable', event => {
                        audioChunks.push(event.data);
                    });

                    mediaRecorder.addEventListener('stop', () => {
                        const audioBlob = new Blob(audioChunks, { type: 'audio/webm' });
                        const audioUrl = URL.createObjectURL(audioBlob);
                        audioPlayback.src = audioUrl;
                        audioPlayback.classList.remove('d-none');

                        // Create file for form submission
                        const userName = document.getElementById('name').value || 'Unnamed';
                        const fileName = `${userName}-voiceRecord.webm`;
                        const file = new File([audioBlob], fileName, { type: 'audio/webm' });
                        
                        // Add file to file input
                        const dataTransfer = new DataTransfer();
                        dataTransfer.items.add(file);
                        document.getElementById('voice').files = dataTransfer.files;

                        // Stop all tracks to release microphone
                        stream.getTracks().forEach(track => track.stop());
                    });

                    mediaRecorder.start();
                    startRecordingBtn.classList.add('d-none');
                    stopRecordingBtn.classList.remove('d-none');
                } catch (err) {
                    console.error('Error accessing microphone:', err);
                    alert('Microphone access is required to record audio. Please ensure you have granted permission.');
                }
            });

            stopRecordingBtn.addEventListener('click', function() {
                if (mediaRecorder && mediaRecorder.state === 'recording') {
                    mediaRecorder.stop();
                    stopRecordingBtn.classList.add('d-none');
                    startRecordingBtn.classList.remove('d-none');
                    startRecordingBtn.textContent = 'නැවත්ත පටිගත කරන්න';
                }
            });

            // Form submission
            contactForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);
                const loader = document.getElementById('loader');
                const submitMsg = document.getElementById('sbmsg');
                const responseMessage = document.getElementById('responseMessage');

                loader.classList.remove('d-none');
                submitMsg.style.display = 'none';
                responseMessage.innerHTML = '';

                fetch('../pages/sin_contact_process', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    loader.classList.add('d-none');
                    submitMsg.style.display = '';
                    responseMessage.innerHTML = data;
                    
                    // Reset form and recording elements if submission was successful
                    if (!data.includes('error')) {
                        contactForm.reset();
                        audioPlayback.classList.add('d-none');
                        audioPlayback.src = '';
                        startRecordingBtn.textContent = 'පටිගත කරන්න';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    loader.classList.add('d-none');
                    submitMsg.style.display = '';
                    responseMessage.innerHTML = 'An error occurred. Please try again.';
                });
            });
        });
        </script>
        <script src="../assets/js/jquery.min.js"></script>




    <!-- Vendor JS Files -->
    <script src="./../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./../assets/vendor/php-email-form/validate.js"></script>
    <script src="./../assets/vendor/aos/aos.js"></script>
    <script src="./../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="./../assets/js/main.js"></script>

</body>
<script>
    function animateCounters() {
        const counters = document.querySelectorAll('.number');

        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function startCounterAnimation(counter) {
            const target = +counter.getAttribute('data-count');
            const duration = 1500;
            const increment = target / (duration / 16);

            let currentCount = 0;
            const updateCounter = () => {
                if (currentCount < target) {
                    currentCount += increment;
                    counter.textContent = Math.round(currentCount);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };

            updateCounter();
        }

        function checkAndAnimateCounters() {
            counters.forEach(counter => {
                if (isElementInViewport(counter) && !counter.classList.contains('animated')) {
                    startCounterAnimation(counter);
                    counter.classList.add('animated');
                }
            });
        }

        // Check on scroll and initial load
        window.addEventListener('scroll', checkAndAnimateCounters);
        window.addEventListener('load', checkAndAnimateCounters);
    }

    animateCounters();
</script>

</html>