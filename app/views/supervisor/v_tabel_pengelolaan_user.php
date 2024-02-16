<style>
    tr td {
        padding: 3px !important;
        margin: 0 !important;

    }
</style>


<table id="example1" class="table table-bordered table-striped first display nowrap">
    <thead>
        <?php $header = array('#', 'Username', 'Nama Lengkap', 'Level', 'Kode Cabang', 'Nama Cabang', 'Aksi');  ?>
        <tr>
            <?php
            for ($a = 0; $a < count($header); $a++) {
            ?>
                <th><?= $header[$a] ?></th>

            <?php  } ?>

        </tr>
    </thead>
    <tbody>
        <?php
        $a = 1;
        foreach ($data as $row) {
        ?>
            <tr>
                <td><?= $a++ ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['nama_lengkap'] ?></td>
                <td><?= $row['level'] ?></td>
                <td><?= $row['kode_cabang'] ?></td>
                <td><?= $row['nama_cabang'] ?></td>
                <td>
                    <div class=" d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm mr-2 edit" data-target="#modalEdit" data-toggle="modal" data-id='<?= $row['id_user'] ?>' data-username='<?= $row['username'] ?>' data-nama_lengkap='<?= $row['nama_lengkap'] ?>' data-level='<?= $row['level'] ?>' data-kode_cabang='<?= $row['kode_cabang'] ?>' data-tipe_komite='<?= $row['tipe_komite'] ?>' data-tipe_kredit='<?= $row['tipe_kredit'] ?>' data-limit_direksi_awal='<?= $row['limit_direksi_awal'] ?>' data-limit_direksi_akhir='<?= $row['limit_direksi_akhir'] ?>'>Edit</button>
                        <button class="btn btn-secondary btn-sm mr-2 btn_reset_password" username="<?= $row['username'] ?>" id='<?= $row['id_user'] ?>'>Reset Password</button>
                        <button class="btn btn-danger btn-sm btn_hapus" id='<?= $row['id_user'] ?>'>Hapus</button>
                    </div>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>


<script>
    $("#example1").DataTable({})
</script>



<!-- jika btn_reset_password di klik -->
<script>
    var btn_reset_password = $('.btn_reset_password');
    $(document).on('click', '.btn_reset_password', function() {
        var id_user = $(this).attr('id');
        var username = $(this).attr('username');
        Swal.fire({
            title: "Yakin hapus data?",
            // icon: 'success',
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            confirmButtonColor: "#3EC59D",
            cancelButtonColor: "#BB2D3B",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/supervisor/reset_password' ?>',
                    data: {
                        id_user: id_user,
                        username: username
                    },
                    success: function(res) {
                        console.log(res);

                        if (res.trim() == 'berhasil') {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Password berhasil direset',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            // .then((ok) => {
                            //     location.href = "<?= BASEURL ?>/slik/daftar_sudah_slik";
                            // })
                        }
                    }
                })

            }

        })







    })
</script>



<!-- jika button edit di tekan -->
<script>
    $(document).ready(function() {
        $('#modalEdit').on('show.bs.modal', function(e) {
            var get = $(e.relatedTarget)
            var id = get.data('id')
            var username = get.data('username')
            var nama_lengkap = get.data('nama_lengkap')
            var level = get.data('level')
            var kode_cabang = get.data('kode_cabang')
            var tipe_komite = get.data('tipe_komite')
            var tipe_kredit = get.data('tipe_kredit')
            var limit_direksi_awal = get.data('limit_direksi_awal')
            var limit_direksi_akhir = get.data('limit_direksi_akhir')


            var modal = $('#modalEdit');

            modal.find('#id_user').val(id)
            modal.find('#username').val(username)
            modal.find('#nama_lengkap').val(nama_lengkap)
            modal.find('#levelEdit').val(level)
            modal.find('#kode_cabang').val(kode_cabang)
            // modal.find('#tipe_komite').val(tipe_komite)
            // modal.find('#tipe_kredit_edit').val(tipe_kredit)
            // modal.find('#limit_direksi_awal').val(limit_direksi_awal)
            // modal.find('#limit_direksi_akhir').val(limit_direksi_akhir)



        })
    })
</script>



<script>
    $level = $('#levelEdit');
    var tipe_komite = $('.tipe_komite')
    var tipe_kredit = $('.tipe_kredit')
    var limit_awal = $('.limit_awal')
    var limit_akhir = $('.limit_akhir')

    $(document).ready(function() {

        $level.change(function(e) {
            var pilihan = $('#levelEdit  option:selected').text()
            if (pilihan != 'KOMITE') {
                tipe_komite.prop('disabled', true)
                tipe_komite.prop('required', false)
                tipe_kredit.prop('disabled', true)
                tipe_kredit.prop('required', false)
                limit_awal.prop('disabled', true)
                limit_awal.prop('required', false)
                limit_akhir.prop('disabled', true)
                limit_akhir.prop('required', false)

            } else {
                tipe_komite.prop('disabled', false)
                tipe_komite.prop('required', true)
                tipe_kredit.prop('disabled', false)
                tipe_kredit.prop('required', true)
                limit_awal.prop('disabled', false)
                limit_awal.prop('required', true)
                limit_akhir.prop('disabled', false)
                limit_akhir.prop('required', true)
            }
        });
    })
</script>


<!-- hapus -->

<script>
    var btn_hapus = $('.btn_hapus');



    $(document).on('click', '.btn_hapus', function() {

        var id_user = $(this).attr('id');




        Swal.fire({
            title: "Yakin hapus data?",
            // icon: 'success',
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            confirmButtonColor: "#3EC59D",
            cancelButtonColor: "#BB2D3B",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {

                var data_form = $('#form_tambah_user').serialize();
                $.ajax({
                    type: 'post',
                    url: '<?= BASEURL . '/supervisor/hapus_user' ?>',
                    data: {
                        id_user: id_user
                    },
                    success: function(res) {
                        console.log(res);
                        if (res == 'sukses') {
                            toastr.success('Berhasi hapus')
                            load_halaman();
                        } else if (res == 'gagal') {
                            toastr.danger('Gagal simpan')
                        }
                    }
                })

            } else {

            }
        })





    })
</script>