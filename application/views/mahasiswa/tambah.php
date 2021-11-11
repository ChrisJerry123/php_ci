<div class="container">

    <div class="row mt-3">

        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Mahasiswa
                </div>
                <div class="card-body">



                    <!-- VALIDASI MENGGUNAKAN CI, JADI TYPE NYA TEXT SEMUA -->
                    <!-- AMBILNYA DARI FORM VALIDATION -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Input Nama" name="nama" autocomplete="off">
                            <small class="form-text text-danger"><?php echo form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" placeholder="Input NIP" name="nip" autocomplete="off">
                            <small class="form-text text-danger"><?php echo form_error('nip') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Input Email" name="email" autocomplete="off">
                            <small class="form-text text-danger"><?php echo form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <!-- SEBAIKNYA MENGGUNAKAN TABLE JURUSAN -->
                            <label for="jurusan">Example select</label>
                            <select class="form-control" id="jurusan" name="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Pangan">Teknik Pangan</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Planalogi">Teknik Planalogi</option>
                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            </select>
                            <small class="form-text text-danger"><?php echo form_error('jurusan') ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>

                </div>
            </div>

        </div>

    </div>

</div>