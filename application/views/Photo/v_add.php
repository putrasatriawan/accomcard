<div class="col-md-12">
    <!-- general form elements disabled -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Tambah Talent PhotoGrapher</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <?php
            //notif pesan error gagal form

            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-info"></i> ', '</h5> </div>');
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-info"></i> ' . $error_upload . '</h5> </div>';
            }
            echo form_open_multipart('photo/add')  ?>

            <div class="form-group">
                <label>Nama Talent</label>
                <input name="nama_photo" type="text" class="form-control" placeholder="Nama Talent" value="<?= set_value('nama_photo') ?>">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Harga / Rate</label>
                        <input name="harga" type="text" class="form-control" placeholder="Harga photo" value="<?= set_value('harga') ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Harga Asal</label>
                            <input name="hargaasal" type="text" class="form-control" placeholder="Harga Talent Asal" value="<?= set_value('hargaasal') ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kategori Pg</label>
                            <select name="id_kategori_pg" class="form-control">
                                <option value=" ">--Pilih Kategori--</option>
                                <?php foreach ($kategori_pg as $key => $value) { ?>
                                    <option value="<?= $value->id_kategori_pg ?> "><?= $value->nama_kategori_pg ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" cols="30" rows="5" placeholder="Deskripsi Talent"><?= set_value('deskripsi') ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" cols="30" rows="5" placeholder="Alamat"><?= set_value('alamat') ?></textarea>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control" id="preview_gambar" required></input>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <img src="<?= base_url('assets/img/galerikecil.png') ?>" id="gambar_load" width="400px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="<?= base_url('photo') ?>" class="btn btn-danger btn-sm">Kembali</a>
                    </div>
                </div>

                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#preview_gambar").change(function() {
        bacaGambar(this);
    });
</script>