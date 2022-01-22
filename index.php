<?php

/**
 * PHP CRUD DASAR
 * Author   : Irawan Kilmer
 * Email    : irawankillmer@gmail.com
 * WhatsApp : 082318009200
 */
require_once 'header.php'; $no = 1; ?>
<h1>Data Siswa</h1>
<hr>

<a class="btn btn-sm btn-primary" href="tambah.php">Tambah</a>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nisn</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(selectData() as $d): ?>
        <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $d['nisn']; ?></td>
            <td><?= $d['nis']; ?></td>
            <td><?= $d['nama']; ?></td>
            <td>
                <a class="btn btn-sm btn-info" href="edit.php?id=<?= $d['idSiswa']; ?>">Edit</a> 
                <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')" href="hapus.php?id=<?= $d['idSiswa']; ?>">Hapus</a> 
            </td>
        </tr>
    <?php $no++; ?>
    <?php endforeach ?>
  </tbody>
</table>
<?php require_once 'footer.php'; ?>