<?php
include_once 'puzzle_page/header.php';
?>

<?php

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $number = 1;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :


    ?>

      <tr>
        <th><?= $number ?></th>
        <th><?= $row['nama'] ?></th>
        <td>
          <!-- menghubungkan setiap link agar terhubung dengan file php yang dituju dengan di tambah id -->
          <a href="view.php?id=<?= $row['id']     ?>" class="btn btn-warning">VIEW</a>
          <a href="addKategori.php?id=<?= $row['id']     ?>" class="btn btn-info">EDIT</a>
          <a href="delete.php?id=<?= $row['id']    ?>" class="btn btn-danger">DELETE</a>
        </td>
      </tr>

    <?php
      $number++;
    endwhile;
    ?>

  </tbody>
</table>

<?php
include_once 'puzzle_page/footer.php';
?>