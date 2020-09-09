<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="container">
        <div class="wrap-form bg-white shadow rounded pb-2">
            <h2 class="bg-warning text-white p-3 rounded-top">Formulir Ajukan Bantuan</h2>
            <div class="container content-form">
                <form>
                    <div class="form-group">
                        <label for="jenisBibit">Jenis bibit komoditi</label>
                        <select class="form-control content-form" id="jenisBibit">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sertifikatPrakerja">Unggah Sertifikat Prakerja</label>
                        <input type="file" class="form-control-file" id="sertifikatPrakerja" accept="application/pdf" required>
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