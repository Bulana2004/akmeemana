<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="icon" href="./images/Favico.ico">

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
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Updated: Aug 08 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php include './config/config.php';
$current_page = basename($_SERVER['REQUEST_URI']) . ".php";
?>

<body class="contact-page">


  <div class="logo_section container d-flex">
    <a href="" class="d-flex align-items-center">
      <img src="./images/akmeemanalogo-removebg-preview.png" alt="">
      <h2 class="ms-3" class="logo_name"><b>Akmeemana</b> Pradeshiya Sabha</h2>
    </a>
    <div class="language_btn d-flex justify-content-end align-items-center w-100">
      <a href="./sinhala/contact.php"><button class="btn">සිංහල</button></a>
      <a href="./Tamil/contact.php"><button class="btn ms-3">தமிழ்</button></a>
    </div>
  </div>
  <header id="header" class="header shadow d-flex align-items-center sticky-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo logoAndNameFormobile d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img class="d-flex align-items-center" src="./images/akmeemanalogo-removebg-preview.png" alt="">
        <h3 class="sitename"><b>Akmeemana</b> Pradeshiya Sabha</h3>
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
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="./index.php">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1039.5063114058596!2d80.17973951308593!3d6.220023344603567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1795a73f59e8d%3A0x719deae97b8e192c!2sWelivitiya%20-%20Divithura%20Pradeshiya%20Sabha!5e1!3m2!1sen!2slk!4v1734875715586!5m2!1sen!2slk" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="row">

              <div class="col-lg-4 d-flex justify-content-center">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h3>Address</h3>
                    <p>Welivitiya Divithura Pradeshiya Sabha, Agaliya</p>
                  </div>
                </div>
              </div><!-- End Info Item -->

              <div class="col-lg-4 d-flex justify-content-center">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-telephone flex-shrink-0"></i>
                  <div>
                    <h3>Call Us</h3>
                    <p>0912260554</p>
                  </div>
                </div>
              </div><!-- End Info Item -->

              <div class="col-lg-4 d-flex justify-content-center">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email Us</h3>
                    <p>wdps2006@gmail.com</p>
                  </div>
                </div>
              </div>

              <!-- End Info Item -->
            </div>
          </div>

          <!--<div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div>-->

          <!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="./index.php" class="logo d-flex align-items-center">
            <span class="sitename">Welivitya Divithura <br> Pradeshiya Sabha</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Welivitiya Divithura</p>
            <p>Pradeshiya Sabha, Agaliya</p>
            <p class="mt-3"><strong>Phone:</strong> <span>0912260554</span></p>
            <p><strong>Email:</strong> <span>wdps2006@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="" target="_blank" class="text-primary" style="border-color: #0d6efd;"><i class="bi bi-facebook"></i></a>
            <a href="" target="_blank" style="color: #0074b1;border-color:#0074b1;"><i class="bi bi-bank"></i></a>
          </div>
        </div>

        <div class="col-lg-2"></div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./booking.php">Booking</a></li>
            <li><a href="./service.php">Services</a></li>
            <li><a href="./tenders.php">Tenders</a></li>
            <li><a href="./application.php">Application</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Institutions & Accounts Division</a></li>
            <li><a href="#">Revenue Division</a></li>
            <li><a href="#">Development Division</a></li>
            <li><a href="#">Accounts Division</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Welivitya Divithura Pradeshiya Sabha</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="#" class="ms-2 me-3" style="text-decoration: underline;">N Code UX Private Limited</a><img src="./images/company logo.png" alt="" width="40px">
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="./assets/js/jquery.min.js"></script>

</body>

</html>