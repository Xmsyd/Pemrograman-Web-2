<?php 
    include_once 'puzzle_page/header.php';
?>
<?php 


?>

<form method="POST" action="proses.php">
  <div class="form-group row">
    <label for="kategori" class="col-4 col-form-label">Nama Kategori</label> 
    <div class="col-8">
      <input id="kategori" name="kategori" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php 
      if(isset($_GET)){ 
        ?>
      <button name="proses" type="submit" class="btn btn-primary" value="edit">edit</button>
      
      <?php 
      }else {
        ?>
        <button name="proses" type="submit" class="btn btn-primary" value="simpan">simpan</button>
       
       <?php 
      }
       ?> 
      
      
    </div>
  </div>
</form>

<?php 
    include_once 'puzzle_page/footer.php';
?>