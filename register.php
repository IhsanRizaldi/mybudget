<?php
session_start();
if (!isset($_SESSION['nama'])) :
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - MyBudget</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center text-primary">Register</h3>
                </div>
                <div class="card-body p-5">
                    <form action="proses_register.php" method="POST">
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password"  class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="">No HP</label>
                            <input type="Text" class="form-control" name="no_hp">
                        </div>
                        <div class="mb-3">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex">
                            <button type="submit" class="btn btn-primary ms-auto">Register</button>
                        </div>
                    </form>
                    <p>Sudah Punya Akun ?<a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php else : ?>
    <?php header('Location:template.php?halaman=index'); ?>
<?php endif; ?>
