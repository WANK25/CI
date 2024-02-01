<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">


    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css?v=3.2.0') ?>">




    <style>
    .container {
        max-width: 1000px;
        margin-left: 20px;
    }

    .btn-logout {
        position: fixed;
        top: 20px;
        right: 10px;
    }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Site wrapper -->

        <nav class="main-header navbar navbar-expand navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>




            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['username']?></a>

                    </div>

                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo site_url('keluarga/logout') ?>" class="nav-link">
                                <i class="nav-icon far fa-paper-plane"></i>
                                <p>
                                    Log Out
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col">

                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- CONTAINER -->
                <div class="container">
                    <!-- CARD -->
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            Data Warga
                        </div>
                        <div class="card-body">
                            <!-- LOKASI TEXT PENCARIAN -->

                            <!-- MODAL -->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                + Tambah Data Warga
                            </button>


                            <p></p>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Warga</h5>
                                            <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>


                                        <div class="modal-body">
                                            <!-- KALAU ERROR -->
                                            <div class="alert alert-danger error" role="alert" style="display: none;">
                                            </div>
                                            <!-- KALAU SUKSES -->
                                            <div class="alert alert-primary sukses" role="alert" style="display: none;">
                                            </div>
                                            <!-- FORM INPUT DATA -->
                                            <input type="hidden" id="inputId">
                                            <div class="mb-3 row">
                                                <label for="inputNO_KK" class="col-sm-2 col-form-label">NO_KK</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputNO_KK">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="inputNIK_kepala_keluarga"
                                                    class="col-sm-2 col-form-label">NIK</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        id="inputNIK_kepala_keluarga">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="inputnama_kepala_keluarga"
                                                    class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                        id="inputnama_kepala_keluarga">
                                                </div>
                                            </div>


                                            <div class="mb-3 row">
                                                <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputalamat">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary tombol-tutup"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="button" class="btn btn-primary"
                                                id="tombolSimpan">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">

                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NO_KK</th>
                                        <th>NIK</th>
                                        <th>NAMA</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        foreach ($dataKeluarga as $k => $v) {
                            $nomor = $nomor + 1;
                        ?>
                                    <tr>
                                        <td><?= $nomor ?></td>
                                        <td><?= $v['NO_KK'] ?></td>
                                        <td><?= $v['NIK_kepala_keluarga'] ?></td>
                                        <td><?= $v['nama_kepala_keluarga'] ?></td>
                                        <td><?= $v['alamat'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"
                                                onclick="edit(<?= $v['id'] ?>)">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="hapus(<?= $v['id'] ?>)">Delete</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </section>


        </div>
        <!-- SCRIPT JAVASCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
        </script>

        <script>
        function hapus($id) {
            var result = confirm('Yakin mau melakukan proses delete');
            if (result) {
                window.location = "<?php echo site_url("keluarga/hapus") ?>/" + $id;
            }
        }

        function edit($id) {
            $.ajax({
                url: "<?php echo site_url("keluarga/edit") ?>/" + $id,
                type: "get",
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.id != '') {
                        $('#inputId').val($obj.id);
                        $('#inputNO_KK').val($obj.NO_KK);
                        $('#inputNIK_kepala_keluarga').val($obj.NIK_kepala_keluarga);
                        $('#inputnama_kepala_keluarga').val($obj.nama_kepala_keluarga);
                        $('#inputalamat').val($obj.alamat);
                    }
                }

            });
        }

        function bersihkan() {
            $('#inputId').val('');
            $('#inputNO_KK').val('');
            $('#inputNIK_kepala_keluarga').val('');
            $('#inputnama_kepala_keluarga').val('');
            $('#inputalamat').val('');
        }
        $('.tombol-tutup').on('click', function() {
            if ($('.sukses').is(":visible")) {
                window.location.href =
                    "<?php echo current_url() . "?" . $_SERVER['QUERY_STRING'] ?>";
            }
            $('.alert').hide();
            bersihkan();
        });

        $('#tombolSimpan').on('click', function() {
            var id = $('#inputId').val();
            var NO_KK = $('#inputNO_KK').val();
            var NIK_kepala_keluarga = $('#inputNIK_kepala_keluarga').val();
            var nama_kepala_keluarga = $('#inputnama_kepala_keluarga').val();
            var alamat = $('#inputalamat').val();
            $.ajax({
                url: "<?php echo site_url('keluarga/simpan') ?>",
                type: "POST",
                data: {
                    id: id,
                    NO_KK: NO_KK,
                    NIK_kepala_keluarga: NIK_kepala_keluarga,
                    nama_kepala_keluarga: nama_kepala_keluarga,
                    alamat: alamat
                },
                success: function(hasil) {
                    try {
                        var obj = $.parseJSON(hasil);
                        if (obj.sukses == false) {
                            $('.sukses').hide();
                            $('.error').show();
                            $('.error').html(obj.error);
                        } else {
                            $('.error').hide();
                            $('.sukses').show();
                            $('.sukses').html(obj.pesan);
                        }
                    } catch (e) {
                        console.error("Error parsing JSON:", e);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX request failed:", status, error);
                }
            });
            bersihkan();
        });
        </script>



        <script src="
https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js
"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js
"></script>
        <script>
        $(document).ready(function() {
            $('#example').DataTable();

        });
        </script>

        <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/dist/js/adminlte.min.js?v=3.2.0') ?>"></script>






</body>

</html>