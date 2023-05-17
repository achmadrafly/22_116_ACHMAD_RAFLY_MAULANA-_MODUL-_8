<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style1.css" >
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Document</title>
  </head>
  <body>
    <nav class="navbar navbar fixed-top" style="background-color: rgb(0, 136, 255);">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: white;"><span>PBW</span> Selamat Datang, Achmad Rafly Maulana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
              Praktikum PBW A
            </h5>
            <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="modul5.php" style="color: rgb(0, 0, 0);">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="modul5.php" style="color: rgb(0, 0, 0)">Daftar Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#" style="color: rgb(0, 0, 0);">Informasi Tugas</a>
              </li>
            </ul>
            <div>
              <button class="btn btn-danger" type="submit">
                <a href="utslogin.php"><i data-feather="log-out"></i> Logout</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container mt-3">
    <div class="row">
      <h1 style="color: rgb(0, 0, 0)">DATA MAHASISWA</h1>
      <h1 style="color: rgb(0, 0, 0)">
        PRAKTIKUM PEMROGRAMAN BERBASIS WEB
      </h1>
      <div class="col">
        <div class="card ">
            <div class="p">
            <button type="button" class="btn btn-success btn-sm" style="width: 200px;height: 40px;margin-top: 10px;margin-bottom: 10px;"><a style="text-decoration: none; color:white;" href="tambah.php">Tambah Data</a></button>
                <button type="button" class="btn btn-danger btn-sm"style="width: 200px;height: 40px;margin-top: 10px;margin-bottom: 10px;">Cetak Laporan  <i data-feather="file-text"></i></button>
            <form class="d-flex" role="search" style="float: right;margin-top: 10px;margin-bottom: 10px;">
                <input class="form-control me-2" type="search" placeholder="Cari Berdasarkan NIM" aria-label="Search" style="background-color: rgb(246, 238, 238);">
                <button class="btn btn-outline-success" type="submit"><a href=""><i data-feather="search"></i></a></button>
              </form>
            </div>
            <table class="table table-striped table-hover" border="1">
                <tr style="background-color: rgb(103, 105, 249);" align="center">
                  <th scope="col">NO</th>
                  <th scope="col">NIM</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Dosen</th>
                  <th scope="col">Status</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Aksi</th>
                </tr>
                <?php 
                include 'conect.php';
                $no = 1;
                $data = mysqli_query($conect,"SELECT * FROM add_mhs");
                while($d = mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                            <td><?php echo $d['nama_mhs']; ?></td>
                            <td><?php echo $d['nama_dosen']; ?></td>
                            <td><?php echo $d['sta']; ?></td>
                    <td><?php echo $d['ket']; ?></td>
                    <td>
                    <button type="button" class="btn btn-primary btn-sm " style="width: 80px;height: 30px;border-radius: 10px;"><a style="text-decoration: none; color:white;" href="mengubah.php?id=<?php echo $d['id_mhs']; ?>">EDIT</a></button>
                    <button type="button" class="btn btn-danger btn-sm "style="width: 80px;height: 30px;border-radius: 10px;"> <a style="text-decoration: none; color:white;"href="deleted.php?id=<?php echo $d['id_mhs']; ?>">HAPUS</a></button>
                    </td>
                  </tr>
                  <?php 
                }
                ?>
              </table>
            </div>
          </div>
        </div>
    </div>
    </div>
</div>
    <script>
      feather.replace();
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
