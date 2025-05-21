<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Helpero Login</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="css/styles.css" rel="stylesheet" />

  </head>
  <body>
    <div class="container login-container mt-5">
      <div class="row no-gutters">
        <div class="col-md-6 login-left">
          <img
            alt="House with a shield and plant"
            class="img-fluid mb-4"
            src="Group 8465.png"
          />
        </div>
        <div class="col-md-6 login-right d-flex align-items-center">
          <div class="mx-container w-100">
            <div class="center">
              <h2 class="font-weight-bold mb-4 text-center">Masuk Ke Akun</h2>
            </div>
            <form>
              <div class="form-group mb-4">
                <label for="email"> Email </label>
                <input
                  class="form-control"
                  id="email"
                  placeholder="example@gmail.com"
                  type="email"
                />
              </div>
              <div class="form-group">
                <label for="password"> Password </label>
                <input
                  class="form-control"
                  id="password"
                  placeholder="masukkan password anda"
                  type="password"
                />
              </div>
              <button class="btn btn-primary btn-block" type="submit">
                Masuk
              </button>
            </form>
            <p class="text-center mt-4">
              Belum Punya akun?
              <a class="text-white" href="#daftar"> daftar </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

