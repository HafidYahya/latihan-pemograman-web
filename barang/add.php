<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" id="formBarang">
                    <div class="form-group">
                        <label for="exampleInputEmail">Id Barang</label>
                        <input type="text" class="form-control" name="id">
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi">
                    </div>

                    <button type="submit" class="btn btn-primary" id="simpanMhs">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Page level plugins -->
<script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../assets/js/demo/datatables-demo.js"></script>
<script src="../assets/js/jquery.min.js"></script>