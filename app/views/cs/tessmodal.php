<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <?php Flasher::flash(); ?>
            <h2 class="pageheader-title"><?= $data['judul'] ?></h2>
            <p class="pageheader-text">by: FATURUNGI MUHARRAM</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">

                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#exampleModal" class="breadcrumb-link btn btn-primary text-white float-right">PERIKSA</a></li> -->
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>

                        <li class="breadcrumb-item " aria-current="page">Data Tables</li>
                    </ol>
                </nav>
            </div>
            <div class="btn btn-orange float-sm-right display-1" data-toggle="modal" data-target="#btn_tambah_pegawai"> <small>TAMBAH PEGAWAI</small> </div><br>

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->



<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Tabel Daftar Kantor </h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first display nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Kantor</th>
                                <th>Nama Pegawai</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Keterangan</th>
                                <th class="text-center">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['getAllPegawai'] as $row) : ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['nama_kantor'] ?></td>
                                    <td><?= $row['nama_pegawai'] ?></td>
                                    <td><?= $row['username'] ?></td>
                                    <td><?= $row['password'] ?></td>
                                    <td><?= $row['level'] ?></td>
                                    <td><?= $row['keterangan'] ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#btn_edit_pegawai" data-id="<?= $row['id'] ?>" data-kode_kantor="<?= $row['kode_kantor'] ?>" data-nama_pegawai="<?= $row['nama_pegawai'] ?>" data-username="<?= $row['username'] ?> ">
                                            <span class="fas fa-edit" aria-hidden="true"></span> Edit
                                        </button>
                                        <button class="btn btn-danger btn-xs">
                                            <span class="fas fa-trash" aria-hidden="true"></span> Hapus
                                        </button>
                                    </td>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nama Kantor</th>
                                <th>Nama Pegawai</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Keterangan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>



<!-- Modal -->
<div class="modal fade" id="btn_tambah_pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TAMBAH DAFTAR PEGAWAI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/pegawai/tambah" method="post">



                    <div class="form-group">
                        <label for="select">Kantor</label>
                        <select name='kode_kantor' class="form-control" id="select" required>
                            <option value="" disabled selected>Pilih Kantor ...</option>
                            <?php foreach ($data['getAllKantor'] as $i) : ?>
                                <option value="<?= $i['id'] ?>"><?= $i['nama_kantor'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select">Level</label>
                        <select name='level' class="form-control" id="select" required>
                            <option value="" disabled selected>Pilih Level ...</option>
                            <?php foreach ($data['getAllLevel'] as $i) : ?>
                                <option value="<?= $i['level'] ?>"><?= $i['keterangan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama_kantor">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">
                    </div>

                    <div class="form-group">
                        <label for="nama_kantor">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">TAMBAH</button>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Modal edit pegawai -->
<div class="modal fade" id="btn_edit_pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/pegawai/edit_pegawai_posisi" method="post">

                    <div class="form-group">
                        <label for="nama_kantor">id</label>
                        <input type="text" class="form-control" id="id" name="id">
                    </div>

                    <div class="form-group">
                        <label for="select">Kantor</label>
                        <select name='kode_kantor' class="form-control" id="kode_kantor" required>
                            <option value="" disabled selected>Pilih Kantor ...</option>
                           
                            <?php foreach ($data['getAllKantor'] as $i) : ?>
                                <option value="<?= $i['id'] ?>"><?= $i['nama_kantor'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select">Level</label>
                        <select name='level' class="form-control" id="select" required>
                            <option value="" disabled selected>Pilih Level ...</option>
                            <?php foreach ($data['getAllLevel'] as $i) : ?>
                                <option value="<?= $i['level'] ?>"><?= $i['keterangan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama_kantor">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">
                    </div>

                    <div class="form-group">
                        <label for="nama_kantor">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>

        </div>
    </div>
</div>