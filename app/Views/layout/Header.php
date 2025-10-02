<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      /* Hover effect sederhana */
      .nav-link {
        position: relative;
        font-weight: 500;
        padding: 8px 16px;
        transition: color 0.3s ease;
      }
      .nav-link::after {
        content: '';
        position: absolute;
        width: 0%;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #fff;
        transition: width 0.3s ease;
      }
      .nav-link:hover::after {
        width: 100%;
      }
      .navbar {
        box-shadow: 0 2px 6px rgba(0,0,0,0.15);
      }

      .nav-link.active {
        border-bottom: 3px solid #fff;
        background-color: white;
        border-radius: 5px;
        color: blue !important;
        font-weight: 600;
        margin: 2px;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container d-flex align-items-center">
      <!-- Brand di kiri -->
      <a class="navbar-brand fw-bold" href="#">SIAKAD admin</a>

      <!-- Navbar toggler untuk mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu tengah dan Logout kanan -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Menu di tengah -->
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home/about">Course</a>
          </li>
        </ul>

        <script>
          const currentPath = window.location.pathname;
          document.querySelectorAll('.nav-link').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
              link.classList.add('active');
            }
          });
        </script>
        <!-- Logout di kanan -->
        <a class="btn btn-danger ms-auto" href="/logout" role="button">Logout</a>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
