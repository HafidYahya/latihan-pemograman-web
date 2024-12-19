<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Document</title>
    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
        <p class="mb-4">
            DataTables is a third-party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net" target="_blank">official DataTables documentation</a>.
        </p>

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body">
                <button class="btn btn-info btn-user" id="addBarang" style="margin-bottom: 30px;">Tambah</button>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Barang</th>
                                <th>Nama Barang</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>ID Barang</th>
                                <th>Nama Barang</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                        include "../db.php";
                        $data = mysqli_query($conn, "SELECT * FROM tbarang");
                        $no=1;
                        while ($result = $data->fetch_array()):
                        ?>
                            <tr>
                                <td><?php echo $no++; ?>
                                </td>
                                <td>
                                    <?php echo $result['id']; ?>
                                </td>
                                <td>
                                    <?php echo $result['nama']; ?>
                                </td>
                                <td>
                                    <?php echo $result['deskripsi']; ?>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-success btn-user m-2" id="editBarang"
                                            value="<?php echo $result['id']; ?>">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-danger btn-user m-2" id="deleteBarang"
                                            value="<?php echo $result['id']; ?>">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>


                            </tr>
                            <?php 
                        endwhile;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>

    <script src="../assets/js/jquery.min.js"></script>


    <script>
    $(document).ready(function() {
        $("#addBarang").click(function() {
            $.ajax({
                url: 'barang/add.php',
                type: 'get',
                success: function(data) {
                    $('#content').html(data);
                }
            });


        });


    });
    </script>
</body>

</html>


File list.php harusnya gini