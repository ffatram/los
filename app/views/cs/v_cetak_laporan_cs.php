<main class="content">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 3"><strong><?= $data['judul'] ?></strong> </h1>
                
            </div>
        </div>

        <form action="<?= BASEURL; ?>/cs/hasil_cari_ktp" method="POST">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    <div class="col-sm-6">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Dari Tanggal</label>
                                    <input type="date" class="form-control" name="dari_tanggal">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Sampai Tanggal</label>
                                    <input type="date" class="form-control" name="sampai_tanggal">
                                </div>
                            </div>

                            <div class="d-flex flex-column">
                                <button type="submit" class="btn btn-primary">CETAK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>

    </div>
</main>