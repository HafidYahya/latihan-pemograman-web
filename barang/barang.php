<?php
include "../db.php";
switch ($_GET['action']) 
{
    case 'save':

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];

        $cek = mysqli_query($conn, "SELECT * FROM tbarang WHERE id='$id'");
        if ($cek->num_rows > 0) {
            $data = 1;
        } else {
            $query = mysqli_query($conn, "INSERT INTO tbarang(id, nama, deskripsi) VALUES('$id', '$nama', '$deskripsi')");
            $data = 0;
        }
        echo $data;
    break;
    case 'edit':
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $query = mysqli_query($conn, "UPDATE tbarang SET nama = '$nama', deskripsi = '$deskripsi' WHERE id='$id'");
        if($query){
            echo "Edit Data Berhasil";
        }else{
            echo "Edit Data Gagal";
        }
    break;
    case 'delete':
        $id = $_POST['id'];
        $query = mysqli_query($conn, "DELETE FROM tbarang WHERE id='$id'");
        if($query){
            echo "Hapus Data Berhasil";
        }else{
            echo "Hapus Data Gagal";
        }
    break;
}
?>