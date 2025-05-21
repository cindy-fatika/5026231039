<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpero Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid vh-100 d-flex">
        <div class="row w-100">
            <!-- Bagian Kiri -->
            <div class="col-md-6 login-left d-flex flex-column justify-content-center align-items-center">
                <img src="Group 8465.png" alt="Helpero Logo" style="max-width: 200px; height: auto;">
                
            </div>
            <!-- Bagian Kanan -->
            <div class="col-md-6 login-right d-flex flex-column justify-content-center align-items-center">
                <div class="w-75">
                    <h2 class="text-center mb-4">Masuk Ke Akun</h2>
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" placeholder="masukkan password anda">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </form>
                    <p class="mt-3 text-center">
                        Belum punya akun? <a href="#" class="text-info">daftar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
