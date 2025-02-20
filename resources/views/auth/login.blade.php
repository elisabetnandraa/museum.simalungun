<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/login/style.css') }}">
  </head>
  <body>
    <div class="container-fluid" style="background-image: url('assets/img/bgmuseum.png'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: center; align-items: center;">
      <div class="card p-5 rounded-right shadow login-card">
        <!-- Logo inside card above the login title -->
        <h1 class="text-center mb-4" style="font-size: 24px;">Hai, Selamat Datang</h1>
        <div class="text-center mb-4">
            <img src="assets/img/logomuseum.png" alt="Logo" style="max-width: 190px; margin-bottom: 20px;">
        </div>
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="form-group mb-4">
            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email" required />
          </div>
          <div class="form-group mb-4">
            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required />
          </div>
          <div class="form-group show-password-container mb-4">
            <input type="checkbox" id="show-password" class="form-check-input">
            <label for="show-password">Show Password</label>
          </div>
          <button type="submit" class="btn btn-Danger w-100">Masuk</button>
        </form>
        <!-- Link to registration page if user doesn't have an account -->
        <div class="text-center mt-3">
          <p>Belum punya akun? <a href="{{ route('register') }}" class="text-Light">Daftar Sekarang</a></p>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript untuk fitur Show Password
        document.getElementById("show-password").addEventListener("change", function () {
          const passwordField = document.getElementById("password");
          if (this.checked) {
            passwordField.type = "text";
          } else {
            passwordField.type = "password";
          }
        });
    </script>
  </body>
</html>
