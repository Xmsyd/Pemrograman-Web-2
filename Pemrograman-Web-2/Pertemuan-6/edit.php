<?php
require_once 'dbkoneksi.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];


  $sql = "SELECT * FROM pelanggan WHERE id = :id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Edit Pelanggan</title>
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

  <form method="post" action="proses.php">
    <div class="container">
      <div class="card mt-2">
        <div class="card-header">
          <h2 class="btn-outline-warning">FORM EDIT PELANGGAN</h2>
        </div>

        <div class="form-group">
          <input type="hidden" name="id" value="<?= $row['id']     ?>" class="form-control">
        </div>

        <div class="form-group row">
          <label for="kode" class="col-sm-2 col-form-label">KODE</label>
          <div class="col-sm10">
            <input type="text" name="kode" value="<?= $row['kode']   ?>" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm10">
            <input type="text" name="nama" value="<?= $row['nama']   ?> " class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="jenis" class="col-sm-2 col-form-label">Jenis Kelamin</label>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="jk" value="L" class="custom-control-input" checked>
            <label for="laki-laki" class="custom-control-label">Laki-laki</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="jk" value="P" class="custom-control-input">
            <label for="perempuan" class="custom-control-label">Perempuan</label>
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
          <div class="col-sm10">
            <input type="text" name="tmp_lahir" value="<?= $row['tmp_lahir']   ?>" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
          <div class="col-sm10">
            <input type="date" name="tgl_lahir" value="<?= $row['tgl_lahir']   ?>" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm10">
            <input type="email" name="email" value="<?= $row['email']   ?>" class="form-control">
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Kartu ID</label>
          <div class="col-sm10">
            <input type="select" name="kartu_id" value="<?= $row['kartu_id']   ?>" class="form-control">
          </div>
        </div>

        <div class="card-footer">
          <button type="submit" name="proses" value="Update" class="btn btn-warning">Update</button>
          <a href="index.php" class="btn btn-danger float-right">Cancel</a>
        </div>
      </div>
    </div>
  </form>
</body>

</html>