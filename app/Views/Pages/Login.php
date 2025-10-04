<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyDPR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Background gradient biru dongker */
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0d1b2a, #1b263b);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Card Login */
        .login-card {
            background-color: #1b2a47; /* biru dongker gelap */
            border-radius: 1rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
            color: #fff;
        }

        .login-card h3 {
            color: #00d1b2; /* biru terang untuk judul */
            font-weight: bold;
        }

        .form-control {
            border-radius: 0.5rem;
        }

        .form-control:focus {
            border-color: #00d1b2;
            box-shadow: 0 0 0 0.2rem rgba(0,209,178,0.25);
        }

        .btn-primary {
            background-color: #00d1b2;
            border: none;
            font-weight: 600;
            border-radius: 0.5rem;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #00b39f;
        }

        .alert {
            border-radius: 0.5rem;
        }

        hr {
            border-color: rgba(255,255,255,0.2);
        }

        .text-muted {
            color: rgba(255,255,255,0.7) !important;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card login-card shadow-lg border-0">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4">Login</h3>

                    <!-- Alert Error -->
                    <?php if(session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Form -->
                    <form action="/login/auth" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" 
                                   name="Username" placeholder="Enter your username" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" 
                                   name="Password" placeholder="Enter your password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">
                                Login
                            </button>
                        </div>
                    </form>

                    <hr class="my-4">

                    <p class="text-center text-muted mb-0">
                        © <?= date("Y") ?> MyDPR
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
