<form id="form_cs_edit_data_kredit" id="form_update" action="<?= BASEURL; ?>/cs/update" method="POST">
    <main class="content">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 3"><strong>Edit Permohonan Kredit</strong> </h1>
                    <!-- <h1 class="h3 d-inline align-middle"><?= $data['judul'] ?></h1> -->
                </div>
            </div>


            <!-- <input class="testInput" type="text" id="tes" />
            <input class="testInput" type="text" value="7" />
            <input class="testInput" type="text" value="8" /> -->

            <p>tess</p>

        </div>
        <button id="btn_form_cs_edit_data_kredit" type="submit" class="btn btn-primary me-2">Update</button>
        <a onclick="btn_batal_update_kredit(event); return false" href="<?= BASEURL; ?>/cs/data_kredit" class="btn btn-secondary me-2">Batal</a>
    </main>

</form>