<?php 

/**
 * PHP CRUD DASAR
 * Author   : Irawan Kilmer
 * Email    : irawankillmer@gmail.com
 * WhatsApp : 082318009200
 */
require_once 'header.php'; 

$data = selectWhere($_GET['id']);

if (isset($_POST['edit'])) {
    // Jalankan Query
    updateData($_POST);
}

?>
<h1>Edit Data Siswa</h1>
<hr>
<a class="btn btn-sm btn-danger" href="index.php">Batal</a>
<br>
<br>
<form action="" method="POST">

<input type="hidden" name="id" value="<?= $data['idSiswa']; ?>">

<div class="mb-3">
    <label for="nisn" class="form-label">nisn</label>
    <input type="text" class="form-control" id="nisn" required name="nisn" value="<?= $data['nisn']; ?>">
  </div>

  <div class="mb-3">
    <label for="nis" class="form-label">nis</label>
    <input type="text" class="form-control" id="nis" required name="nis" value="<?= $data['nis']; ?>">
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control" id="nama" required name="nama" value="<?= $data['nama']; ?>">
  </div>
  
  
  <button type="submit" class="btn btn-sm btn-primary" name="edit">Edit</button>
</form>

<?php require_once 'footer.php'; ?>