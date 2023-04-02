<?php
require_once 'dbkoneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Pelanggan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background: #330066;
      margin: auto;
      padding: auto;
    }

    .card-header {
      background: #512DA8;
    }

    .card-footer {
      background: #512DA8;
    }

    .form-group {
      margin-top: 2px;
      margin-left: 2px;
    }

    .form-control {
      margin-top: 2px;
    }

    .btn {
      border-color: aliceblue;
    }
  </style>
</head>

<body>
  <!-- Form Horizontal class boostrap -->
  <form method="POST" action="proses.php">
    <!--  -->
    <div class="container">
      <div class="card mt-2">
        <div class="card-header">
          <h2 class="btn-outline-warning">FORM TAMBAH PELANGGAN</h2>
        </div>
        <div class="form-group row">
          <label for="kode" class="col-sm-2 col-form-label">Kode</label>
          <div class="col-sm10">
            <input id="kode" name="kode" type="text" class="form-control" value="" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Pelanggan</label>
          <div class="col-sm10">
            <input id="nama" name="nama" type="text" class="form-control" value="" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="jenis" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="custom-control custom-radio custom-control-inline">
            <input id="jk" name="jk" value="L" type="radio" class="custom-control-input">
            <label class="custom-control-label">Laki - Laki</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input id="jk" name="jk" value="P" type="radio" class="custom-control-input">
            <label class="custom-control-label">Perempuan</label>
          </div>
        </div>

        <div class="form-group row">
          <label for="tempat" class="col-sm-2 col-form-label">Tempat Lahir</label>
          <div class="col-sm10">
            <input id="tmp_lahir" name="tmp_lahir" value="" required type="text" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="min_stok" class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm10">
            <input id="tgl_lahir" name="tgl_lahir" value="" required type="date" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm10">
            <input id="email" name="email" value="" required type="email" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="kartu" class="col-sm-2 col-form-label">Kartu</label>


          <div class="col-sm10">

            <?php
            $sqljenis = "SELECT * FROM kartu";
            $rsjenis = $conn->query($sqljenis);
            ?>
            <select id="kartu_id" name="kartu_id" class="custom-select">
              <?php
              foreach ($rsjenis as $rowjenis) {
              ?>
                <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
              <?php
              }
              ?>
            </select>

          </div>
        </div>
        <div class="card-footer">
          <input type="submit" name="proses" type="submit" class="btn btn-warning" value="Simpan" />
          <a href="index.php" class="btn btn-danger float-right">Batal</a>
        </div>
      </div>
    </div>
  </form>

</body>

</html>