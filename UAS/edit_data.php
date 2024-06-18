<?php
include "koneksi.php";

if (isset($_GET['proses']) && $_GET['proses'] == 1) {
    $id = $_POST['id_mahasiswa'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $prodi = $_POST['prodi'];
    $npm = $_POST['npm'];

    $query = "UPDATE mahasiswa SET nama_mahasiswa = '$nama_mahasiswa', prodi = '$prodi', npm = '$npm' WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: form.php");
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
}
?>