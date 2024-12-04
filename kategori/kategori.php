<?php
include '../koneksi/connect.php';

//ambil data dari kategori
$query = "SELECT * FROM kategori";
$result = mysqli_query($koneksi, $query);

require '../templates/head.php';
require '../templates/navbar.php';
require '../templates/header.php';

?>

<div class="container my-5">
        <h1 class="text-center mb-4">Daftar Kategori</h1>
        <div class="mb-3">
        <a class="btn btn-success" href="tambah_kategori.php" role="button">Tambah Kategori</a>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th width="5%">No</th>
                    <th>Kategori</th>
                    <th width="15%">Dibuat</th>
                    <th width="15%">Diperbarui</th>
                    <th width="10%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $row['created_at'] = date('d-m-Y', strtotime($row['created_at']));
                    $updated_at = isset($row['updated_at']) ? $row['updated_at'] : '-';
                    echo "<tr class='text-center'>";
                    echo "<td>{$no}</td>";
                    echo "<td>{$row['kategori']}</td>";
                    echo "<td>{$row['created_at']}</td>";
                    echo "<td>{$updated_at}</td>";
                    echo "<td>
                        <a href='edit_kategori.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='delete_kategori.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Hapus kategori ini?\")'>Hapus</a>
                    </td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

<?php require '../templates/footer.php';?>