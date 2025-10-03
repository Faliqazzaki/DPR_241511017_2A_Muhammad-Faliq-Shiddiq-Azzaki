<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      /* Navbar gradient dan shadow */
      .navbar {
        background: linear-gradient(90deg, #4b6cb7, #182848);
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
      }

      /* Efek sticky + shrink saat scroll */
      .navbar.shrink {
        padding: 0.5rem 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
      }

      .navbar-brand {
        font-size: 1.8rem;
        font-weight: bold;
        color: #fff !important;
        transition: color 0.3s ease, transform 0.3s ease;
      }

      .navbar-brand:hover {
        color: #ffd700;
        transform: scale(1.05);
      }

      /* Menu link hover */
      .nav-link {
        position: relative;
        color: #fff !important;
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
        background-color: #ffd700;
        transition: width 0.3s ease;
      }

      .nav-link:hover::after {
        width: 100%;
      }

      .nav-link.active {
        border-bottom: 3px solid #ffd700;
        color: #ffd700 !important;
        font-weight: 600;
      }

      /* Tombol logout */
      .btn-logout {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .btn-logout:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3">
    <div class="container d-flex align-items-center">
      <!-- Brand -->
      <a class="navbar-brand" href="#">MyDPR admin</a>

      <!-- Navbar toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu tengah dan Logout -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home/about">Tunjangan</a>
          </li>
        <a class="btn btn-danger btn-logout ms-auto" href="/logout" role="button" >Logout</a>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Menandai menu aktif
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-link').forEach(link => {
      if (link.getAttribute('href') === currentPath) {
        link.classList.add('active');
      }
    });

    // Shrink navbar saat scroll
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
      if(window.scrollY > 50){
        navbar.classList.add('shrink');
      } else {
        navbar.classList.remove('shrink');
      }
    });
  </script>
  </body>
</html>
