      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Home</title>
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
            <img src="../images/akmeemanalogo-removebg-preview.png" alt="">
            <h2 class="ms-3" class="logo_name"><b>அக்மீமன</b> மாகாண சபை</h2>
          </a>
          <div class="language_btn d-flex justify-content-end align-items-center w-100">
            <a href="../sinhala/index.php"><button class="btn">සිංහල</button></a>
            <a href="../index.php"><button class="btn ms-3">English</button></a>
          </div>
        </div>
        <header id="header" class="header shadow d-flex align-items-center sticky-top">
          <div class="container d-flex align-items-center">

            <a href="index.html" class="logo logoAndNameFormobile d-flex align-items-center me-auto me-xl-0">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <img class="d-flex align-items-center" src="./../images/akmeemanalogo-removebg-preview.png" alt="">
              <h3 class="sitename"><b>அக்மீமன</b><br>மாகாண சபை</h3>
            </a>

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

          <!-- Slider Section -->
          <section id="slider" class="slider section dark-background">

            <div class="" data-aos="fade-up" data-aos-delay="100">

              <div class="swiper init-swiper">

                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "centeredSlides": true,
                    "spaceBetween": 0,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "navigation": {
                      "nextEl": ".swiper-button-next",
                      "prevEl": ".swiper-button-prev"
                    }
                  }
                </script>

                <div class="swiper-wrapper">
                  <?php
                  $sql = $bdd->prepare('select * from slider');
                  $sql->execute();
                  ?>
                  <?php while ($data = $sql->fetch()) { ?>
                    <div class="swiper-slide" style="background-image: url('./../controllers/assets/img/slider/<?= $data[1] ?>');">
                      <div class="content">
                        <h1 class="slider-h1"><a href="./about.php">அக்மீமன பிரதேச சபை</a></h1>
                        <button class="btn slider-button" style="background-color: #00659d; color: white;">மேலும் படிக்கவும்</button>
                      </div>
                    </div>
                  <?php } ?>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>
              </div>

            </div>

          </section><!-- /Slider Section -->

          <section class="container mt-5 mb-5">
            <div class="row">
              <div class="col-lg-3 d-flex g-5" data-aos="fade-up" data-aos-delay="100">
                <div class="home-card border p-5 h-100 w-100 text-center shadow">
                  <i class="bi bi-mortarboard-fill" style="font-size: 3.5rem;"></i>
                  <h4>வளர்ச்சி பிரிவு</h4>
                </div>
              </div>
              <div class="col-lg-3 d-flex g-5" data-aos="fade-up" data-aos-delay="200">
                <div class="home-card border p-5 h-100 w-100 text-center shadow">
                  <i class="bi bi-globe" style="font-size: 3.5rem;"></i>
                  <h4>வருவாய் பிரிவு</h4>
                </div>
              </div>
              <div class="col-lg-3 d-flex g-5" data-aos="fade-up" data-aos-delay="300">
                <div class="home-card border p-5 h-100 w-100 text-center shadow">
                  <i class="bi bi-house-fill" style="font-size: 3.5rem;"></i>
                  <h4>சமூகம் மற்றும் சுற்றுச்சூழல் பிரிவு</h4>
                </div>
              </div>
              <div class="col-lg-3 d-flex g-5" data-aos="fade-up" data-aos-delay="400">
                <div class="home-card border p-5 h-100 w-100 text-center shadow">
                  <i class="bi bi-bank2" style="font-size: 3.5rem;"></i>
                  <h4>கணக்கு பிரிவு</h4>
                </div>
              </div>
            </div>
          </section>


          <section id="lifestyle-category" class="lifestyle-category section">
            <div class="row newsAndtender">
              <!-- First row in news section -->
              <div class="col-lg-8">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                  <div class="section-title-container d-flex align-items-center justify-content-between">
                    <h3 style="letter-spacing: 2px;">செய்தி</h3>
                    <p><a href="./news.php">அனைத்து செய்திகளையும் பார்க்கவும்</a></p>
                  </div>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                  <div class="row g-5">
                    <div class="col-lg-6">

                      <?php
                      $sql = $bdd->prepare("SELECT * FROM tam_news ORDER BY date DESC LIMIT 1");
                      $sql->execute();
                      while ($data = $sql->fetch()) {
                        $img = explode(',', $data[1]);
                        $Id = $data[0];
                      ?>
                        <div class="post-list lg">
                          <a href="./news.php#<?= $Id ?>"><img class="d-block mx-auto w-100" src="./../controllers/assets/img/news/<?= $img[0] ?>" alt="" class="img-fluid"></a>
                          <div class="post-meta"><span class="mx-1">•</span> <span><?= $data[4] ?></span></div>
                          <h3><a href="./news.php#<?= $Id ?>" class="home_link"><?= $data[2] ?></a></h3>
                          <p class="mb-4 d-block"><?= $data[3] ?></p>
                        </div>
                      <?php } ?>

                      <?php
                      $sql = $bdd->prepare("SELECT * FROM tam_news ORDER BY date DESC LIMIT 1, 2");
                      $sql->execute();

                      while ($data = $sql->fetch()) {
                        $Id = $data[0];
                      ?>
                        <div class="post-list border-bottom">
                          <div class="post-meta"><span class="mx-1">•</span> <span><?= $data[4] ?></span></div>
                          <h2 class="mb-2"><a href="./news.php#<?= $Id ?>"><?= $data[2] ?></a></h2>
                          <!-- <span class="author mb-3 d-block">Jenny Wilson</span> -->
                        </div>
                      <?php } ?>

                    </div>

                    <div class="col-lg-6">
                      <div class="row g-5">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10 border-start custom-border">
                          <?php
                          $sql = $bdd->prepare("SELECT * FROM tam_news ORDER BY date DESC LIMIT 3, 3");
                          $sql->execute();
                          while ($data = $sql->fetch()) {
                            $img = explode(",", $data[1]);
                            $Id = $data[0];
                          ?>
                            <div class="post-list">
                              <a href="./news.php#<?= $Id ?>"><img class="d-block mx-auto w-100" src="./../controllers/assets/img/news/<?= $img[0] ?>" alt="" class="img-fluid"></a>
                              <div class="post-meta"><span class="mx-1">•</span> <span><?= $data[4] ?></span></div>
                              <h2><a href="./news.php#<?= $Id ?>"><?= $data[2] ?></a></h2>
                            </div>
                          <?php } ?>
                        </div>
                        <div class="col-lg-1"></div>

                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <!-- Second row news section -->
              <div class="col-lg-4">
                <div class="container section-title" data-aos="fade-up">
                  <div class="section-title-container d-flex align-items-center justify-content-between">
                    <h3 style="letter-spacing: 2px;">டெண்டர்</h3>
                    <p><a href="./tenders.php">அனைத்து டெண்டரையும் பார்க்கவும்</a></p>
                  </div>
                </div>

                <?php
                $sql = $bdd->prepare("SELECT * FROM tam_tenders ORDER BY date DESC LIMIT 5");
                $sql->execute();

                while ($data = $sql->fetch()) {
                  $Id = $data[0];
                ?>
                  <div class="container post-list border-bottom" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-meta"><span class="mx-1">•</span><?= $data[3] ?></span></div>
                    <h2 class="mb-2"><a href="./tenders.php#<?= $Id ?>"><?= $data[2] ?></a></h2>
                    <div class="text-end">
                      <button class="btn mb-2 rounded-5" style="background-color: #00506f; color: white;">
                        <a href="./../controllers/assets/files/tenders/<?= $data[1] ?>" target="_blank" style="color: white;">பதிவிறக்கவும்</a>
                      </button>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </section>

          <section class="logoes mt-5">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 logos-items">
                  <img src="./../images/Flag_of_Sri_Lanka.svg.png"
                    alt="Flag of sri lanka" width="180px" class="d-block mx-auto" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-4 logos-items">
                  <img src="./../images/Emblem_of_Sri_Lanka.svg.webp"
                    alt="Emblem_of_Sri_Lanka" width="80px" class="d-block mx-auto" data-aos="fade-up" data-aos-delay="200">
                </div>
                <div class="col-lg-4 logos-items">
                  <img src="./../images/Flag_of_the_Southern_Province_(Sri_Lanka).PNG"
                    alt="Flag_of_the_Southern_Province_(Sri_Lanka)" width="180px" class="d-block mx-auto" data-aos="fade-up" data-aos-delay="400">
                </div>
              </div>
            </div>
          </section>

          <section id="stats" class="stats">

            <div class="container position-relative">

              <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                  <div class="stats-item text-center w-100 h-100" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-people-fill" style="font-size: 2rem;"></i>
                    <span class="number" data-count="83288+">0</span>
                    <p>ஜனாபா</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="stats-item text-center w-100 h-100" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-globe" style="font-size: 2rem;"></i>
                    <span class="number" data-count="65+">0</span>
                    <p>பரப்பு (km<sup>2</sup>)</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="stats-item text-center w-100 h-100" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-person-badge-fill" style="font-size: 2rem;"></i>
                    <span class="number" data-count="102+">0</span>
                    <p>லதி</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6">
                  <div class="stats-item text-center w-100 h-100" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-geo-alt-fill" style="font-size: 2rem;"></i>
                    <span class="number" data-count="63">0</span>
                    <p>கிராம சேவகர் பிரிவுகள்</p>
                  </div>
                </div>

              </div>

            </div>

          </section>


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
                  <a href="https://www.facebook.com/akmeemanaps" target="_blank" class="text-primary" style="border-color: #0d6efd;"><i class="bi bi-facebook"></i></a>
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
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Akmeemana Pradeshiya Sabha</strong> <span>All Rights Reserved</span></p>
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
            <div class="card-header text-bg-primary">
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
                            <button type="button" class="btn btn-primary me-2" id="startRecording">அதை பதிவு செய்யுங்கள்</button>
                            <button type="button" class="btn btn-primary d-none" id="stopRecording">பதிவு செய்வதை நிறுத்து</button>
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

              fetch('../pages/tam_contact_process.php', {
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
            const targetValue = counter.getAttribute('data-count');
            const isPlus = targetValue.includes('+');
            const target = parseInt(targetValue, 10);
            const duration = 1500; // Total animation duration in milliseconds
            const increment = target / (duration / 16); // Increment per frame (assuming ~60 FPS)

            let currentCount = 0;
            const updateCounter = () => {
              if (currentCount < target) {
                currentCount += increment;
                counter.textContent = Math.round(currentCount);
                requestAnimationFrame(updateCounter);
              } else {
                // Ensure final value matches target and add "+" if needed
                counter.textContent = target + (isPlus ? '+' : '');
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

        // Initialize the counter animation
        animateCounters();
      </script>

      </html>