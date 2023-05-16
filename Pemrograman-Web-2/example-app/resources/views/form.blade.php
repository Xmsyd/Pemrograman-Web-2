<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 8</title>
    <!-- CSS BOOSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8" style="margin-top:30px;">
                <form>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-user-o"></i>
                                    </div>
                                </div>
                                <input id="nama" name="nama" placeholder="Masukan nama anda" type="text" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl" class="col-4 col-form-label">Tanggal Pemeriksaan</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar-times-o"></i>
                                    </div>
                                </div>
                                <input id="tgl" name="tgl" placeholder="Masukan tanggal pemeriksaan anda" type="text" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="usia" class="col-4 col-form-label">Tanggal Lahir/Usia</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar-times-o"></i>
                                    </div>
                                </div>
                                <input id="usia" name="usia" placeholder="Masukan tanggal lahir dan usia anda" type="text" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" required="required">
                                <label for="jk_0" class="custom-control-label">Laki - laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" required="required">
                                <label for="jk_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <!-- Form Berakhir Disini -->
            </div>
            <div class="col-lg-2">
            </div>
        </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <!-- Table -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Jenis Tes</th>
                                <th scope="col">Hasil Pemeriksaan</th>
                                <th scope="col">Normal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tekanan Darah</td>
                                <td></td>
                                <td>120/80mmhg</td>
                            </tr>
                            <tr>
                                <td>Asam Urat</td>
                                <td></td>
                                <td>pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
                            </tr>
                            <tr>
                                <td>Kolesterol Total</td>
                                <td></td>
                                <td> < 200 mg/dl</td>
                            </tr>
                            </tr>
                            <tr>
                                <td>Gula Darah</td>
                                <td></td>
                                <td>
                                     Puasa: 70-110 mg/dl</br>
                                     2 jam setelah makan: 100-150 mg/dl</br>
                                     2 jam setelah makan: 100-150 mg/dl</br>
                                     Sewaktu/acak : 70-125 mg/dl </br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Table Berakhir disini -->
                </div>
                <div class="col-lg-4"></div>
            </div>
</div>

</body>

</html>