      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Tenders</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Favicons -->
        <link href="./../images/Favico.ico" rel="icon">
        <link href="./../images/Favico.ico" rel="apple-touch-icon">

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

        <style>
          html {
            scroll-padding-top: 110px;
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

      <body class="index-page">

        <div class="logo_section container d-flex">
          <a href="" class="d-flex align-items-center">
            <img src="./images/akmeemanalogo-removebg-preview.png" alt="">
            <h2 class="ms-3" class="logo_name"><b>அக்மீமன</b>மாகாண சபை</h2>
          </a>
          <div class="language_btn d-flex justify-content-end align-items-center w-100">
            <a href="../sinhala/tenders.php"><button class="btn">සිංහල</button></a>
            <a href="../tenders.php"><button class="btn ms-3">English</button></a>
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
          <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
              <h1 class="mb-2 mb-lg-0">Tender Notices</h1>
              <nav class="breadcrumbs">
                <ol>
                  <li><a href="./index.php">முகப்பு பக்கம்</a></li>
                  <li class="current">Tender Notices</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="container mb-5 mt-5">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <?php
              $sql = $bdd->prepare('SELECT * FROM tam_tenders ORDER BY id DESC');
              $sql->execute();

              while ($data = $sql->fetch()) {
              ?>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <span style="font-size: 15px;"><?= $data[3] ?></span>
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $data[0] ?>" aria-expanded="false" aria-controls="<?= $data[0] ?>">
                      <?= $data[2] ?>
                    </button>
                  </h2>
                  <div id="<?= $data[0] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <embed src="./../controllers/assets/files/tenders/<?= $data[1] ?>" type="application/pdf" width="100%" height="600px">
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>


        </main>

        <footer id="footer" class="footer dark-background">

          <div class="container footer-top">
            <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="./index.php" class="logo d-flex align-items-center">
                  <span class="sitename">அக்மீமன <br> மாகாண சபை</span>
                </a>
                <div class="footer-contact pt-3">
                <p>அக்மீமன</p>
                  <p>பிரதேச சபை, பின்னாதுவை</p>
                  <p class="mt-3"><strong>தொலைபேசி எண்:</strong> <span>0912222375</span></p>
                  <p><strong>மின்னஞ்சல் முகவரி:</strong> <span>akmeemanaps@gmail.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                  <a href="https://www.facebook.com/profile.php?id=61552307069235&mibextid=ZbWKwL" target="_blank" class="text-primary" style="border-color: #0d6efd;"><i class="bi bi-facebook"></i></a>
                  <!-- <a href="https://play.google.com/store/apps/details?id=io.akva.esabha&pcampaignid=web_share" target="_blank" style="color: #0074b1;border-color:#0074b1;"><i class="bi bi-bank"></i></a> <span class="mt-2"  style="color: #0074b1;border-color:#0074b1;">eSabha App</span> -->
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