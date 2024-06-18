<?php
include "koneksi.php";
include "tampilkan_data.php";
include "edit_data.php";

// Mengambil data untuk edit
$data_edit = [];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '$id'");
    $data_edit = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Input Prodi Mahasiswa</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <style>
    .center-form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-container {
        width: 50%;
        min-width: 300px;
        background: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    </style>
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="center-form">
            <div class="form-container">
                <form
                    action="<?php echo isset($data_edit['id']) ? "edit_data.php?id={$data_edit['id']}&proses=1" : "proses.php"; ?>"
                    method="POST">
                    <fieldset>
                        <legend>Input Prodi Mahasiswa</legend>
                        <div class="control-group">
                            <label class="control-label" for="nama_mahasiswa">Nama Mahasiswa:</label>
                            <div class="controls">
                                <input type="hidden" class="input-xlarge focused" id="id_mahasiswa" name="id_mahasiswa"
                                    value="<?php echo isset($data_edit['id']) ? $data_edit['id'] : ''; ?>">
                                <input type="text" class="input-xlarge focused" id="nama_mahasiswa"
                                    name="nama_mahasiswa"
                                    value="<?php echo isset($data_edit['nama_mahasiswa']) ? $data_edit['nama_mahasiswa'] : ''; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="prodi">Prodi Mahasiswa:</label>
                            <div class="controls">
                                <select class="input-xlarge focused" id="prodi" name="prodi">
                                    <option value="">Pilih Prodi</option>
                                    <option value="Informatika"
                                        <?php if(isset($data_edit['prodi']) && $data_edit['prodi'] == "Informatika") echo "selected"; ?>>
                                        Informatika</option>
                                    <option value="Sistem Informasi"
                                        <?php if(isset($data_edit['prodi']) && $data_edit['prodi'] == "Sistem Informasi") echo "selected"; ?>>
                                        Sistem Informasi</option>
                                    <option value="Kedokteran"
                                        <?php if(isset($data_edit['prodi']) && $data_edit['prodi'] == "Kedokteran") echo "selected"; ?>>
                                        Kedokteran</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="npm">NPM:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge focused" id="npm" name="npm"
                                    value="<?php echo isset($data_edit['npm']) ? $data_edit['npm'] : ''; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="ulangi">Ulangi:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge focused" id="ulangi" name="ulangi" value="">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Proses</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>

        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Data Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Prodi Mahasiswa</th>
                                    <th>NPM</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($data = mysqli_fetch_assoc($proses)) {
                                ?>
                                <tr>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['nama_mahasiswa']; ?></td>
                                    <td><?php echo $data['prodi']; ?></td>
                                    <td><?php echo $data['npm']; ?></td>
                                    <td>
                                        <a href="form.php?id=<?php echo $data['id']; ?>">Edit</a> |
                                        <a href="hapus_data.php?id=<?php echo $data['id']; ?>">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>