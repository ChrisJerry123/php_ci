<div class="container">

    <div class="row mt-3">

        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Mahasiswa
                </div>
                <div class="card-body">



                    <!-- VALIDASI MENGGUNAKAN CI, JADI TYPE NYA TEXT SEMUA -->
                    <!-- AMBILNYA DARI FORM VALIDATION -->
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Input Nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?php echo form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" placeholder="Input NIP" name="nip" value="<?= $mahasiswa['nip']; ?>">
                            <small class="form-text text-danger"><?php echo form_error('nip') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Input Email" name="email" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger"><?php echo form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <!-- SEBAIKNYA MENGGUNAKAN TABLE JURUSAN -->
                            <label for="jurusan">Example select</label>
                            <select class="form-control" id="jurusan" name="jurusan" name="jurusan">
                                <!-- PERIKSA JURUSAN BERDASARKAN MAHASISWA -->
                                <?php foreach ($jurusan as $row) : ?>
                                    <?php if ($row == $mahasiswa['jurusan']) : ?>
                                        <option value="<?php echo $row ?>" selected><?php echo $row; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $row ?>"><?php echo $row; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <!-- END PERIKSA JURUSAN BERDASARKAN MAHASISWA -->
                            </select>
                            <small class="form-text text-danger"><?php echo form_error('jurusan') ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>

                </div>
            </div>

        </div>

    </div>

</div>