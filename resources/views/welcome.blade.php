<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum Simalungun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h1, p {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
        }
        .btn-custom {
            border-radius: 50px; 
        }
        .bg-overlay {
            background: rgba(0, 0, 0, 0.5);
        }
        .btn-custom {
        border-radius: 50px; 
        background-color: transparent;
        color: white; 
        border: 2px solid white; 
         }

        .btn-custom:hover {
            background-color: white; 
            color: black; 
        }
    </style>
</head>
<body>
    <div class="position-relative vh-100" style="background-image: url('{{ asset('assets/img/bgmuseum.png') }}'); background-size: cover; background-position: center;">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-overlay"></div>

        <div class="container h-100 d-flex flex-column justify-content-center align-items-start text-white px-4 position-relative z-1">
            <h1 class="display-4 fw-bold mb-4">MUSEUM SIMALUNGUN</h1>
            <p class="fs-5 mb-4">
                "Selamat datang di Museum Simalungun, tempat menghidupkan kembali 
                warisan budaya dan sejarah Simalungun yang kaya dan penuh makna."
            </p>

            <div class="d-flex gap-3">
                <a href="/login" class="btn btn-primary btn-lg btn-custom">Login</a>
                <a href="/register" class="btn btn-success btn-lg btn-custom">Register</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
