<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Service</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="./../images/Favico.ico" rel="icon">
    <link href="./../images/Favico.ico" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

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


<?php include './../config/config.php';
$current_page = basename($_SERVER['REQUEST_URI']);
?>

<body class="about-page">

    <div class="d-flex justify-content-end p-1">
        <button class="btn rounded-5 me-2 shadow tran_btn"><a href="../sinhala/service.php" style="color: white;">සිංහල</a></button>
        <button class="btn rounded-5 me-2 shadow tran_btn"><a href="../service.php" style="color: white;">English</a></button>
        <!-- <button class="btn rounded-5 shadow tran_btn"><a href="./index.php" style="color: white;">தமிழ்</a></button> -->
    </div>

    <header id="header" class="header d-flex align-items-center sticky-top shadow">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="./index.php" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="./../images/logo.png" alt="">
                <h3 class="sitename">வலிவிட்டிய திவித்துர பிரதேச சபை</h3>
            </a>

            <!--===============================================================Navigation Bar Start============================================================-->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <?php
                    $sql = $bdd->prepare('SELECT * FROM tamnavbar');
                    $sql->execute();

                    while ($data = $sql->fetch()) {
                    ?>
                        <?php
                        if ($data[3]) {
                            $name = explode(",", $data[1]);
                            $link = explode(",", $data[2]);
                        $is_activeDropdowns = in_array($current_page, $link) ? 'active' : '' ;
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
                <h1 class="mb-2 mb-lg-0">சேவைகள்</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.php">முகப்பு பக்கம்</a></li>
                        <li class="current">சேவை</li>
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
                            <img class="img-fluid position-absolute w-100 h-100" src="./../images/sev1.jpg" alt="Responsive Image" style="object-fit: cover;">
                        </div>
                    </div>

                    <div class="col-lg-6 order-2 order-lg-2" data-aos="fade-up" data-aos-delay="0.3s">
                        <h1 class=" bg-white text-start pe-3">நிறுவனங்கள் மற்றும் கணக்குப் பிரிவு</h1>
                        <br>
                        <ul>
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0 ">
                                        சபைக் கூட்டங்கள், விசேட சபைக் கூட்டங்கள், குழுக் கூட்டங்கள் என்பவற்றை நடாத்துதல் மற்றும் அத்தகைய தீர்மானங்களை நடைமுறைப்படுத்தல்.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                        பணிப்பாளர் சபையை நெறிப்படுத்தலும் கட்டுப்படுத்துதலும். கொடுப்பது.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                        வீட்டின் உள்ளகக் கணக்காய்வை நடாத்துதல்.
                                    </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                        பேரவைக்கு அறவிடப்பட வேண்டிய அனைத்து வருமானங்களையும் சேகரித்தல்
                                    </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                        ஒப்பந்தப்புள்ளிகளை வரவழைத்தல் மற்றும் அனைத்து கொள்முதல்களையும் செய்தல்
                                    </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                        அனைத்து கட்டணத் திட்டங்கள்
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                        வியாபாரங்களுக்கான வரிகளைத் தயாரித்தல், தயாரித்தல், வருடாந்த கணக்குகளைத் தயாரித்தல், வருடாந்த வரவு செலவுத் திட்டத்தைத் தயாரித்தல்.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                        வாகனங்கள் மற்றும் இயந்திரங்களின் பராமரிப்பு</p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                        வாகனங்கள் மற்றும் இயந்திரங்களின் பராமரிப்பு
                                    </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                        திட்டமிடலாளர்களைப் பதிவு செய்தல்
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">
                                        செய்தித்தாள் விளம்பரங்கள் மற்றும் விளம்பரங்களை வர்த்தமானியில் வெளியிடுதல்.
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
                        <h1 class=" bg-white text-start pe-3">வருவாய் பிரிவு</h1>
                        <br>
                        <ul class="custemer-bullet">
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">மதிப்பீடு மற்றும் நிலப்பரப்பு மற்றும் சபைக்கு செலுத்த வேண்டிய பிற வரிகளை வசூலித்தல்.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">கடை வாடகை மற்றும் வீட்டு வாடகை வசூல்.</p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">நியாயமான வரி விதிப்பு.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">சொத்து வரி வசூல்.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">சொத்து வரி வசூல்.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">தெரு விளக்குகளை நிறுவுதல் மற்றும் பராமரித்தல்.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">ஆடிட்டோரியம் ஒதுக்கீடு மற்றும் தொடர்புடைய கட்டணம் வசூலிக்கப்படுகிறது.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">வர்த்தக வர்த்தகம் மற்றும் வர்த்தக உரிமக் கட்டணம்.</p>
                                    </li>
                                </div>
                            </div>
                        </ul>

                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="./../images/sev2.jpg" alt="Responsive Image" style="object-fit: cover;">
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
                            <img class="img-fluid position-absolute w-100 h-100" src="./../images/sev3.jpg" alt="Responsive Image" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0.3s">
                        <h1 class=" bg-white text-start pe-3">வளர்ச்சி பிரிவு</h1>
                        <br>
                        <ul>
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">ஒப்பந்ததாரர்கள் மற்றும் ஒப்பந்த சங்கங்களுடன் உடன்படிக்கைகளை மேற்கொள்வது. சாலைகள், கட்டிடங்கள், கட்டப்பட்ட நீர் மற்றும் சிறப்பு திட்டங்கள்.</p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">இயந்திரங்கள் மற்றும் வாகனங்களை வாடகை அடிப்படையில் வழங்குதல்.
                                        </p>
                                    </li>
                                </div>
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">பொதுமக்கள் புகார்கள்.</p>
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
                        <h1 class=" bg-white text-start pe-3">கணக்கு பிரிவு</h1>
                        <br>
                        <ul>
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-12">
                                    <li>
                                        <p class="mb-0">சபையின் அனைத்து கணக்கு கட்டுப்பாட்டு நடவடிக்கைகளும் மேற்கொள்ளப்படுகின்றன.</p>
                                    </li>
                                </div>
                            </div>
                        </ul>

                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="./../images/sev4.jpg" alt="Responsive Image" style="object-fit: cover;">
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
        <span class="sitename">வெலிவிடிய திவித்துறை <br> உள்ளூர் சபை.</span>
      </a>
      <div class="footer-contact pt-3">
        <p>வெலிவிடிய திவித்துறை</p>
        <p>உள்ளூர் சபை, அகழி</p>
        <p class="mt-3"><strong>தொலைபேசி எண்:</strong> <span>0912260554</span></p>
        <p><strong>மின்னஞ்சல் முகவரி:</strong> <span>wdps2006@gmail.com</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href="" target="_blank" class="text-primary" style="border-color: #0d6efd;"><i class="bi bi-facebook"></i></a>
        <a href="" target="_blank" style="color: #0074b1;border-color:#0074b1;"><i class="bi bi-bank"></i></a>
      </div>
    </div>

    <div class="col-lg-2"></div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>பயனுள்ள இணைப்புகள்</h4>
      <ul>
        <li><a href="./index.php">முகப்பு பக்கம்</a></li>
        <li><a href="./booking.php">இட ஒதுக்கீடு</a></li>
        <li><a href="./service.php">சேவைகள்</a></li>
        <li><a href="./tenders.php">டெண்டர்</a></li>
        <li><a href="./application.php">விண்ணப்பம்</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>எங்கள் சேவைகள்</h4>
      <ul>
        <li><a href="#">நிறுவனங்கள் மற்றும் கணக்கு பிரிவு</a></li>
        <li><a href="#">வருவாய் பிரிவு</a></li>
        <li><a href="#">வளர்ச்சி பிரிவு</a></li>
        <li><a href="#">கணக்கு பிரிவு</a></li>
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

        <!-- Toast Element -->
        <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true" id="myToast">
          <div class="d-flex">
            <div class="toast-body">
              இப்போது நீங்கள் உங்கள் புகார்களை இணையதளம் மூலம் நேரடியாக எங்களிடம் தெரிவிக்கலாம்.
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
                    அரட்டையடிக்கவும்
                    <button type="button" class="btn-close btn-close-white float-end" onclick="toggleChat()"></button>
                </div>
                <div class="card-body">
                    <form id="contactForm" enctype="multipart/form-data">
                        <label for="name">பெயர் :</label>
                        <input type="text" id="name" name="name" class="form-control border-dark mb-2" placeholder="உங்கள் பெயரை உள்ளிடவும்">
                        <label for="phonenumber">தொலைபேசி எண் :</label>
                        <input type="number" id="phonenumber" name="phonenumber" class="form-control border-dark mb-2" placeholder="உங்கள் தொலைபேசி எண்ணை உள்ளிடவும்">
                        <label for="email">மின்னஞ்சல் :</label>
                        <input type="email" id="email" name="email" class="form-control border-dark mb-2" placeholder="உங்கள் மின்னஞ்சலை உள்ளிடவும்">
                        <label for="message">செய்தி :</label>
                        <textarea name="message" id="message" class="form-control border-dark mb-2" placeholder="உங்கள் செய்தியை உள்ளிடவும்" style="height: 150px;"></textarea>
                        <div class="row mb-2">
                            <div class="col-8">
                                <p>நீங்கள் விரும்பினால், உங்கள் செய்தியில் ஒரு குரல் பதிவை இணைக்கவும்.</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-danger me-2" id="startRecording">அதை பதிவு செய்யுங்கள்</button>
                                <button type="button" class="btn btn-danger d-none" id="stopRecording">பதிவு செய்வதை நிறுத்து</button>
                            </div>
                        </div>
                        <audio id="audioPlayback" class="mb-2 w-100 d-none" controls></audio>
                        <input type="file" id="voice" name="voice" class="d-none" accept="audio/*">
                        <button type="submit" class="btn btn-success d-block mx-auto">
                            <span id="sbmsg">செய்தியை சமர்ப்பிக்கவும்</span>
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
                    startRecordingBtn.textContent = 'பதிவு நிறுத்தங்கள்';
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

                fetch('../pages/tam_contact_process', {
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
                        startRecordingBtn.textContent = 'அதை பதிவு செய்யுங்கள்';
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

</html>