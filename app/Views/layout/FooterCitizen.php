<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sticky Footer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
      main {
        flex: 1;
      }
      footer {
        background: linear-gradient(90deg, #0d1b2a, #1b263b); /* dark navy to blue */
        color: #fff;
        padding: 20px 0;
      }
      .footer-link {
        color: #ddd;
        margin: 0 8px;
        text-decoration: none;
        font-size: 1.2rem;
      }
      .footer-link:hover {
        color: #00d1b2; /* turquoise highlight */
      }
      .footer-container {
        max-width: 1200px;
        margin: auto;
      }
    </style>
  </head>
  <body>

    <main>
      <!-- Konten halaman bisa ditaruh di sini -->
    </main>

    <!-- Footer -->
    <footer class="mt-auto">
      <div class="container footer-container d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
        <div class="mb-2 mb-md-0">
          <strong>MyDPR</strong> &copy; 2025 All Rights Reserved.
        </div>
        <div>
          <a href="#" class="footer-link"><i class="bi bi-facebook"></i></a>
          <a href="#" class="footer-link"><i class="bi bi-twitter"></i></a>
          <a href="#" class="footer-link"><i class="bi bi-instagram"></i></a>
          <a href="#" class="footer-link"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
