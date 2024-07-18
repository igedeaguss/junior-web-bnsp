<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Beasiswa</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding-bottom: 60px;
    }
    .form-group {
      margin-bottom: 1rem;
    }
    .form-group label {
      font-weight: bold;
    }
    .form-container {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
    }
  </style>
</head>
<body>
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Pilihan Beasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar.html">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hasil.php">Hasil</a>
        </li>
      </ul>
    </div>
  </nav>

  
  <?php
    include("koneksi.php");
  ?>
<div class="container mt-4">
    <div class="row">
      <!-- Konten Pemilihan Beasiswa -->
      <div class="col-lg-12" id="pemilihan-beasiswa">
        <h2>Data Pengajuan Beasiswa</h2>
        <hr>
</div>

<div class="container-fluid mx-auto custom-container">
  <div class="col-lg-12 form-container">
    <?php
        $query = mysqli_query($con, "SELECT * FROM beasiswa ORDER BY id DESC LIMIT 1");
        $no = 0;
        while ($data = mysqli_fetch_array($query)){
            $no++;
            if ($data) {
              ?>
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                      <p class="form-control-plaintext"><?php echo $data['nama']; ?></p>
                  </div>
              </div>
              
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                      <p class="form-control-plaintext"><?php echo $data['alamat']; ?></p>
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                      <p class="form-control-plaintext"><?php echo $data['email']; ?></p>
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nomor HP</label>
                  <div class="col-sm-10">
                      <p class="form-control-plaintext"><?php echo $data['hp']; ?></p>
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Semester Saat Ini</label>
                  <div class="col-sm-10">
                      <p class="form-control-plaintext"><?php echo $data['semester']; ?></p>
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">IPK Terakhir</label>
                  <div class="col-sm-10">
                      <p class="form-control-plaintext"><?php echo $data['ipk']; ?></p>
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jenis Beasiswa</label>
                  <div class="col-sm-10">
                      <p class="form-control-plaintext"><?php echo $data['jenis_beasiswa']; ?></p>
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Berkas Syarat</label>
                  <div class="col-sm-10">
                      <p class="form-control-plaintext"><?php echo $data['syarat']; ?></p>
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Status Pengajuan</label>
                  <div class="col-sm-10">
                      <p class="form-control-plaintext"><span class="badge badge-warning">Belum diverifikasi</span></p>
                  </div>
              </div>
              <?php
          } else {
              echo "<p>Belum ada data pengajuan beasiswa.</p>";
          }
        }
      ?>
    </div>
  </div>
</div> 
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 
</body>
</html>