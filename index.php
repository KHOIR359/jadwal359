<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#aabbff">
<link rel="manifest" href="manifest.webmanifest">
<link rel="icon" type="image/x-icon" href="assets/img/android/android-launchericon-96-96.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/main.css">

<style>
body {
  background-image: url('assets/img/pattern.jpeg');
  background-size: 250px;
}
</style>
<title>Jadwal</title>
</head>
<body>

<div class="text-center py-2 pt-3 bg-white card shadow-sm" style="border-radius: 0 0 1.4em 1.4em;padding-top:0 !important">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand text-bebas-neue fw-bold" href="#">Jadwal</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
      </div>
    </div>
  </div>
</nav>
  <div class="time text-bebas-neue p-0">
    <span id="hour"></span>:<span id="minute"></span>:<span id="second"></span>
  </div>
  <div id="date">
    
  </div>
</div>

<div class="container pt-3">
  <div class="row text-center">
    <div class="col-6 mb-3">
      <div class="p-3 card">
        <div class="card-day fw-bold text-bebas-neue fs-2">Monday</div>
        <div>
          <ul>
            <li>Matematika</li>
            <li>Biologi</li>
            <li>Agama</li>
            <li>Kimia</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-6 mb-3">
      <div class="p-3 card">
        <div class="card-day fw-bold text-bebas-neue fs-2">Tuesday</div>
        <div>
          <ul>
            <li>Matematika</li>
            <li>Biologi</li>
            <li>Agama</li>
            <li>Kimia</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-6 mb-3">
      <div class="p-3 card">
        <div class="card-day fw-bold text-bebas-neue fs-2">Wednesday</div>
        <div>
          <ul>
            <li>Matematika</li>
            <li>Biologi</li>
            <li>Agama</li>
            <li>Kimia</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-6 mb-3">
      <div class="p-3 card">
        <div class="card-day fw-bold text-bebas-neue fs-2">Thursday</div>
        <div>
          <ul>
            <li>Matematika</li>
            <li>Biologi</li>
            <li>Agama</li>
            <li>Kimia</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-6 mb-3">
      <div class="p-3 card">
        <div class="card-day fw-bold text-bebas-neue fs-2">Friday</div>
        <div>
          <ul>
            <li>Matematika</li>
            <li>Biologi</li>
            <li>Agama</li>
            <li>Kimia</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-6 mb-3">
      <div class="p-3 pb-1 card">
        <div class="title fs-2 text-bebas-neue fw-bold">Action</div>
        <div>
          <div class="btn btn-sm btn-success d-block mb-2">Edit Mode</div>
          <div class="btn btn-sm btn-primary d-block">Share Link</div>
        </div>
        <div>
          <p class="text-muted fs-3 text-bebas-neue mb-0 mt-3">Created By Khoir</p>
        </div>
      </div>
    </div>
  </div>





</div>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="index.js"></script>

</body>
</html>