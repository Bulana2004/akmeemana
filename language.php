<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicons -->
  <link href="./images/Favico.ico" rel="icon">
  <link href="./images/Favico.ico" rel="apple-touch-icon">

  <title>Welcome</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <style>
    a {
      text-decoration: none;
    }

    body {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f8f9fa;
      background-image: url(./images/background.png);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.45);
      z-index: 0;
    }

    .content-container {
      position: relative;
      z-index: 1;
      text-align: center;
      padding: 0 15px;
    }

    .flag {
      margin-bottom: 20px;
    }

    .flag img {
      width: 100px;
      height: auto;
      opacity: 0.9;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }

    .card {
      background-color: rgba(73, 13, 15, 0.88);
      color: #fff;
      padding: 20px;
      text-align: center;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      font-size: 1rem;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .card p {
      font-size: 17px;
    }

    .card span {
      font-size: 10px;
    }

    .card:hover {
      background-color: rgb(96, 18, 20);
    }

    @media screen and (min-width: 768px) {
      .card-container {
        margin-left: 15%;
        margin-right: 15%;
      }
    }

    @media (max-width: 768px) {
      .card-container {
        grid-template-columns: repeat(3, 1fr);
      }

      .flag img {
        width: 80px;
      }
    }

    @media (max-width: 576px) {
      .card-container {
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
      }

      .flag img {
        width: 60px;
      }

      .card {
        font-size: 0.9rem;
        padding: 15px;
      }

      .card p {
        font-size: 10px;
      }

      .card span {
        font-size: 8px;
      }
    }
  </style>
</head>

<body>
  <div class="content-container">
    <div class="flag">
      <img src="./images/Emblem_of_Sri_Lanka.svg.webp" alt="Flag">
    </div>

    <div class="card-container">
      <a href="./sinhala/index.php" class="card">
        <p>වැලිවිටිය දිවිතුර ප්‍රාදේශීය සභාව</p>
      </a>
      <a href="./Tamil/index.php" class="card">
        <p>வெலிவிட்டிய திவித்துறை பிராந்திய சபை</p>
      </a>
      <a href="./index.php" class="card">
        <p>Welivitiya Divithura Pradeshiya Sabha</p>
      </a>
      <a href="./sinhala/index.php" class="card">
        <p>ආයුබෝවන් <br> <span>සිංහලෙන් බලන්න</span></p>
      </a>
      <a href="./Tamil/index.php" class="card">
        <p>வணக்கம் <br> <span>தமிழில் பார்க்கவும்</span></p>
      </a>
      <a href="./index.php" class="card">
        <p>Welcome <br> <span>Watch in English</span></p>
      </a>
    </div>
  </div>
</body>

</html>