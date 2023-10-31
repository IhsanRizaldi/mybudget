<?php
session_start();
if (!isset($_SESSION['nama'])) :
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - MyBudget</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center text-primary">Login</h3>
                </div>
                <div class="card-body p-5">
                    <form action="proses_login.php" method="POST">
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password"  class="form-control" name="password">
                        </div>
                        <div class="mb-3 d-flex">
                            <button type="submit" class="btn btn-primary ms-auto">Login</button>
                        </div>
                    </form>
                    <p>Belum Punya Akun? <a href="register.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php else : ?>
    <?php header('Location:template.php?halaman=index'); ?>
<?php endif; ?>