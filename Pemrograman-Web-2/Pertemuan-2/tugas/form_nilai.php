<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="col-12">
<h2 class="mt-10">Form Nilai Siswa</h2>


<!-- form -->

    <form method="POST" action="nilai_siswa.php">

        <div class="form-group row">

            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
            <select id="matkul" name="matkul" class="custom-select">
                <option value="ddp">DDP</option>
                <option value="basdat">Basis Data</option>
                <option value="pw">PemWeb</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="uts" name="uts" type="number" class="form-control nilai">
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="uas" name="uas" type="number" class="form-control nilai">
            </div>
        </div>
        <div class="form-group row">
            <label for="texttugas" class="col-4 col-form-label">Nilai Tugas</label> 
            <div class="col-8">
            <input id="tugas" name="tugas" type="number" class="form-control nilai">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

</div>

<script>
    var input = document.querySelectorAll(".nilai");

    input.forEach(element => {
        element.oninput = function() {
            if(element.value > 100){
                element.value = 100;
            }
            else if(element.value <0){
                element.value = 0;
            }
        }
    });

</script>

</body>
</html>
