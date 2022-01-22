<?php 


/**
 * PHP CRUD DASAR
 * Author   : Irawan Kilmer
 * Email    : irawankillmer@gmail.com
 * WhatsApp : 082318009200
 */

// ubah nama database, sesuaikan dengan nama database yang sudah dibuat
$conn = mysqli_connect('localhost', 'root', '', 'crud');

/**
 * selectData
 * Ambil semua data siswa
 * @return void
 */
function selectData()
{
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM siswa");
    $data = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }

    return $data;
}


/**
 * check
 * Periksa Nisn atau Nis
 * @param  mixed $type
 * @param  mixed $data
 * @return void
 */
function check(String $type, int $data)
{
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM siswa WHERE $type = '$data'");
    $data  = mysqli_num_rows($query);

    return $data;
}

/**
 * insertData
 * Masukan data dari formulir ke dalam tabel siswa
 * @param  mixed $data
 * @return void
 */
function insertData(Array $data)
{
    global $conn;

    $nisn   = htmlspecialchars($data['nisn']);
    $nis    = htmlspecialchars($data['nis']);
    $nama   = htmlspecialchars($data['nama']);

    mysqli_query($conn, "INSERT INTO siswa(`nisn`, `nis`, `nama`) VALUES('$nisn', '$nis', '$nama')");

    if (mysqli_affected_rows($conn) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan'),
                window.location.href='index.php'
            </script>
        ";
    }
}

/**
 * deleteData
 * Delete data siswa berdasarkan idSiswa
 * @param  mixed $id
 * @return void
 */
function deleteData(int $id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM siswa WHERE idSiswa = '$id'");

    if (mysqli_affected_rows($conn) > 0) {
        echo "
            <script>
                alert('Data berhasil dihapus'),
                window.location.href='index.php'
            </script>
        ";
    }

}

/**
 * selectWhere
 * Ambil data berdasarkan idSiswa
 * @param  mixed $id
 * @return void
 */
function selectWhere(int $id)
{
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM siswa WHERE idSiswa='$id'");
    $data = mysqli_fetch_assoc($query);

    return $data;
}

function updateData(Array $data)
{
    global $conn;

    $id     = $data['id'];
    $nisn   = $data['nisn'];
    $nis    = $data['nis'];
    $nama   = $data['nama'];

    mysqli_query($conn, "UPDATE siswa SET nisn = '$nisn', nis = '$nis', nama = '$nama' WHERE idSiswa = '$id' ");

    if (mysqli_affected_rows($conn) > 0) {
        echo "
            <script>
                alert('Data berhasil di update')
                window.location.href='index.php'
            </script>
        ";
    }
}