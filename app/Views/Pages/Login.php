<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
<div class="container position-relative">
    <div class="row justify-content-center">
        <div class="col-md-5">
     <!-- Card Login -->
                <div class="card login-card shadow-lg border-0">
                    <div class="card-body p-4">
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
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" 
                                       name="Password" placeholder="Enter your password" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </form>

                        <hr class="my-4">

                        <p class="text-center text-muted mb-0">
                            © <?= date("Y") ?> Your Company
                        </p>
                    </div>
                </div>
        </div>
    </div>
</div>

    <!-- <div class="container">
        <div class="row">
            <div class="col">
                <h1>Login Page</h1>
                <form action="/login/auth" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Username" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="Password" required>
                    </div>
                <button type="submit" class="btn btn-primary" name="submit">login</button>
        </form>
            </div>
        </div>
        
    </div> -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>