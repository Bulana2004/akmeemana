<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AboutUs</title>
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

  <style>
    html {
      scroll-padding-top: 300px;
      scroll-behavior: smooth;
    }
  </style>

  <!-- =======================================================

      ======================================================== -->
</head>

<?php
include './../config/config.php';
$current_page = basename($_SERVER['REQUEST_URI']);
?>

<body class="about-page">

  <div class="logo_section container d-flex">
    <a href="" class="d-flex align-items-center">
      <img src="./images/akmeemanalogo-removebg-preview.png" alt="">
      <h2 class="ms-3" class="logo_name"><b>அக்மீமன</b>மாகாண சபை</h2>
    </a>
    <div class="language_btn d-flex justify-content-end align-items-center w-100">
      <a href="../sinhala/about.php"><button class="btn">සිංහල</button></a>
      <a href="../about.php"><button class="btn">English</button></a>
    </div>
  </div>
  <header id="header" class="header shadow d-flex align-items-center sticky-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo logoAndNameFormobile d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img class="d-flex align-items-center" src="./images/akmeemanalogo-removebg-preview.png" alt="">
        <h3 class="sitename"><b>அக்மீமன</b>மாகாண சபை</h3>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <?php
          $sql = $bdd->prepare('SELECT * FROM navbar');
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

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">எங்களை பற்றி</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">முகப்பு பக்கம்</a></li>
            <li class="current">எங்களை பற்றி</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Page Title -->

    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">நாம் யார்</p>
            <h3>வலிவிட்டிய திவித்துர பிரதேச சபை</h3>
            <p class="">
              வெலிவிய திவிதுர பிரதேச சபை இலங்கையின் அகலியா பிரதேசத்தில் உள்ளூராட்சி நிர்வாகத்தின் அடிக்கல்லாக விளங்குகிறது.
              அதன் குடியிருப்பாளர்களின் வாழ்க்கைத் தரத்தை மேம்படுத்துவதற்காக அர்ப்பணிக்கப்பட்ட சபை, சமூக மேம்பாட்டுத் திட்டங்களை மேற்பார்வை செய்கிறது,
              வெளிப்படைத்தன்மை மற்றும் செயல்திறனில் கவனம் செலுத்தும் பொது உள்கட்டமைப்பு பராமரிப்பு மற்றும் நிர்வாக சேவைகள்.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>
                <span class="fs-5 fw-medium">எங்கள் பணி</span>
                <p class="ms-2">"முன்னேற்றத்திற்காக உழைக்க வேண்டும்
                  மூலம் நம் மக்கள்
                  சுகாதார வசதிகளை வழங்குதல்,
                  அபிவிருத்தி மற்றும் பராமரித்தல்
                  சாலை அமைப்பு, குடிநீர் வழங்குதல்
                  தண்ணீர் வசதிகள், மின்னல் சாலைகள்,
                  கட்டுப்படுத்துதல் மற்றும் பராமரித்தல்
                  சந்தைகள், பராமரித்தல் மற்றும்
                  நூலகங்களை மேம்படுத்துதல், அபிவிருத்தி செய்தல்
                  விளையாட்டு மைதானம், வசதிகளை ஏற்படுத்தி தருகிறது
                  ஒரு பள்ளி கல்விக்காக
                  மற்றும் பாதுகாப்பு
                  உடன் சூழல்
                  எங்கள் உள்ளூர் அதிகாரத்தில்."</p>
              </li>
              <li><i class="bi bi-check-circle"></i>
                <span class="fs-5 fw-medium">எங்கள் பார்வை</span>
                <p class="ms-2">"சிறப்பாக செய்ய
                  நமது எதிர்காலம்
                  மூலம் மக்கள்
                  உள்ளூர் அரசாங்கம்
                  நடைமுறையுடன்
                  நல்லது
                  ஆட்சி"</p>
              </li>
            </ul>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-6">
                <div class="about_image_1" style="background-image: url(./../images/whous1.jpg);"></div>
              </div>
              <div class="col-6">
                <div class="row gy-4">
                  <div class="col-12">
                    <div class="about_image_2" style="background-image: url(./../images/whous2.jpg);"></div>
                  </div>
                  <div class="col-12">
                    <div class="about_image_2" style="background-image: url(./../images/whous3.jpg);"></div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <section id="team" class="team section">

      <!- - Section Title - ->
        <div class="container section-title" data-aos="fade-up">
          <div class="section-title-container d-flex align-items-center justify-content-between">
            <h2>பணியாளர்கள்</h2>
            <a href="https://cs.sp.gov.lk/Hmaster/user_index.php" target="_blank"><button class="btn btn-danger">மேலும்</button></a>
          </div>
        </div><!- - End Section Title - ->

          <div class="container">

            <div class="row gy-4 d-flex justify-content-center">

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                  <div class="pic"><img src="./../images/secretarysir.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>திரு அகில சமீர பெர்னாண்டோ </h4>
                    <span>செயலாளர்,
                      வெலிவிடிய திவித்துறை பிராந்திய சபை
                    </span>
                    <p>M.A.(UOR) <br> B.A.(OUSL)</p>
                    <!-- <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div> -->
                  </div>
                </div>
              </div><!- - End Team Member - ->

            </div>

          </div>

    </section>


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
        Now you can direct your complaints to us directly through the website.
      </div>
      <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
  <script>
    // Show Toast on Page Load
    document.addEventListener('DOMContentLoaded', function() {
      const myToast = document.getElementById('myToast');
      const toast = new bootstrap.Toast(myToast, {
        delay: 7000
      });
      toast.show();
    });
  </script>

  <!-- ChatBox -->
  <div class="container">
    <!-- Chat Button -->
    <button class="btn chat-toggle" onclick="toggleChat()"><i class="bi bi-chat-dots-fill" style="font-size: 2rem;"></i></button>

    <!-- Chat Box -->
    <div class="card chat-box d-none" id="chatBox">
      <div class="card-header text-bg-primary">
        Chat
        <button type="button" class="btn-close btn-close-white float-end" onclick="toggleChat()"></button>
      </div>
      <div class="card-body">
        <form id="contactForm" enctype="multipart/form-data">
          <label for="name">Name :</label>
          <input type="text" id="name" name="name" class="form-control border-dark mb-2" placeholder="Enter Your Name">
          <label for="phonenumber">Phone Number :</label>
          <input type="number" id="phonenumber" name="phonenumber" class="form-control border-dark mb-2" placeholder="Enter Your Phone Number">
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" class="form-control border-dark mb-2" placeholder="Enter Your Email">
          <label for="message">Message :</label>
          <textarea name="message" id="message" class="form-control border-dark mb-2" placeholder="Enter Your Message" style="height: 90px;"></textarea>
          <div class="row mb-2">
            <div class="col-8">
              <p>If you want, you can attach a voice recording to your message.</p>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-end">
              <button type="button" class="btn btn-primary me-2" id="startRecording">Record</button>
              <button type="button" class="btn btn-primary d-none" id="stopRecording">Stop</button>
            </div>
          </div>
          <audio id="audioPlayback" class="mb-2 w-100 d-none" controls></audio>
          <input type="file" id="voice" name="voice" class="d-none" accept="audio/*">
          <button type="submit" class="btn btn-success d-block mx-auto">
            <span id="sbmsg">Submit Message</span>
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
          const stream = await navigator.mediaDevices.getUserMedia({
            audio: true
          });
          mediaRecorder = new MediaRecorder(stream);
          audioChunks = [];

          mediaRecorder.addEventListener('dataavailable', event => {
            audioChunks.push(event.data);
          });

          mediaRecorder.addEventListener('stop', () => {
            const audioBlob = new Blob(audioChunks, {
              type: 'audio/webm'
            });
            const audioUrl = URL.createObjectURL(audioBlob);
            audioPlayback.src = audioUrl;
            audioPlayback.classList.remove('d-none');

            // Create file for form submission
            const userName = document.getElementById('name').value || 'Unnamed';
            const fileName = `${userName}-voiceRecord.webm`;
            const file = new File([audioBlob], fileName, {
              type: 'audio/webm'
            });

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
          startRecordingBtn.textContent = 'Record Again';
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

        fetch('./pages/contact_process', {
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
              startRecordingBtn.textContent = 'Record';
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




  <!-- Vendor JS Files -->
  <script src="./../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./../assets/vendor/php-email-form/validate.js"></script>
  <script src="./../assets/vendor/aos/aos.js"></script>
  <script src="./../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="./../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>

</body>

</html>