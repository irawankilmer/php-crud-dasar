<?php 

/**
 * PHP CRUD DASAR
 * Author   : Irawan Kilmer
 * Email    : irawankillmer@gmail.com
 * WhatsApp : 082318009200
 */
require_once 'header.php'; 

if (isset($_POST['tambah'])) {
    // Check apakah nisn sudah terdaftar
    if (check('nisn', $_POST['nisn']) > 0) {
        echo "
            <script>
                alert('Mohon maaf Nisn sudah terdaftar!')
            </script>
        ";
    } else {

        // Check apakah Nis sudah terdaftar
        if (check('nis', $_POST['nis']) > 0) {
            echo "
                <script>
                    alert('Mohon maaf Nis sudah terdaftar!')
                </script>
            ";
        } else {

            // Jalankan Query
            insertData($_POST);
        }
    }
}

?>
<h1>Tambah Data Siswa</h1>
<hr>
<a class="btn btn-sm btn-danger" href="index.php">Batal</a>
<br>
<br>
<form action="" method="POST">

<div class="mb-3">
    <label for="nisn" class="form-label">nisn</label>
    <input type="text" class="form-control" id="nisn" required name="nisn">
  </div>

  <div class="mb-3">
    <label for="nis" class="form-label">nis</label>
    <input type="text" class="form-control" id="nis" required name="nis">
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control" id="nama" required name="nama">
  </div>
  
  
  <button type="submit" class="btn btn-sm btn-primary" name="tambah">Tambah</button>
</form>

<?php require_once 'footer.php'; ?>