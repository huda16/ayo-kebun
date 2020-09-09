<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="container">
        <div class="wrap-form bg-white rounded pb-2 shadow">
            <h2 class="bg-warning text-white p-3 rounded-top">Formulir Unggah Galeri</h2>
            <div class="container content-form">
                <form>
                    <div class="form-group">
                        <label for="inputLokasi">Lokasi</label>
                        <input type="text" class="form-control" id="inputLokasi" placeholder="Lokasi" required>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="deskripsiUnggahFoto">Deskripsi</label>
                            <textarea class="form-control" id="deskripsiUnggahFoto" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="unggahFoto">Unggah Foto</label>
                        <input type="file" class="form-control-file" id="unggahFoto" accept="image/jpeg,image/png" required>
                    </div>
                    <div class="form-group button-form">
                        <!-- Accent-colored raised button with ripple -->
                        <button class="btn btn-warning shadow" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->