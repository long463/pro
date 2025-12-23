
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
<div class="container" >
    <div class="row mt-4">
        <div class="col-md-12 text-end">
            <a href="../client/index.php" class="btn btn-success">Back to Shop</a>
        </div>
    </div>
</div>
<!-- LOGIN FORM -->
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Login</h3>
                    <form method="POST" action="function.php">
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required >
                        </div>
                        
                        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                    </form>
                    
                    <p class="text-center mt-3">
                        Don't have account? <a href="register.php">Register here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>