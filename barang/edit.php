<div class="container-fluid">
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                include "../db.php";
                $id = $_GET['id'];
                $barang = mysqli_query ($conn, "SELECT * FROM tbarang WHERE id='$id'");
                $result = $barang->fetch_array();
                ?>

                <form method="POST" id="formEditBarang">
                    <div class="form-group">
                        <label class="font-weight-bold">Id Barang: <?= $result['id']?></label>
                        <input type="text" class="form-control" name="id" value="<?= $result['id']?>" hidden>
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama" value="<?= $result['nama']?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" value="<?= $result['deskripsi']?>">
                    </div>

                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Page level plugins -->
<script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script scr="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../assets/js/demo/datatables-demo.js"></script>