<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <title>Login</title>
  </head>
  <body style="background-color: rgb(243, 243, 243);">
    <section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-5 col-sm-5 col-md-5 m-auto">
            <div class="card border-0 shadow-lg mb-7" style="border-radius: 15px;">
              <div class="card-body" style="text-align: center;">
                <h1 style="color:rgb(52, 58, 231); font-weight: bold ;">LOGIN</h1>
                <p style="font-size: 15px; color: rgba(0, 0, 0, 0.655)">Masukkan NIM dan Password</p>
                <form action="konfig_log.php" method="POST">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <form action="modul5.php">
                  <input type="text" name="usename" id="" class="form-control my-4 py-2" style="border-radius: 10px; padding-left: 20px;" placeholder="Username" />
                  <input type="text" name="pass" id="" class="form-control my-4 py-2" style="border-radius: 10px; padding-left: 20px;" placeholder="Password" />
                  <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary" style="border-radius: 15px; padding-left: 170px; padding-right: 170px; font-weight: bolder; background-color: rgb(52, 58, 231);">Masuk</button>
                    <a href="#" class="nav-link" style="color: rgba(0, 0, 0, 0.655); font-size: 13px;">Lupa Password? <span style="font-weight: bold; color: rgba(0, 0, 0, 0.559);">Klik disini!</span></a>
                   </form>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>