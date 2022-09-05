<div class="col-md-12">
    <!-- general form elements disabled -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Edit Talent</h3>
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
            echo form_open_multipart('barang/edit/' . $barang->id_barang)  ?>

            <div class="form-group">
                <label>Nama Talent</label>
                <input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang" value="<?= $barang->nama_barang ?>">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Harga / Rate</label>
                        <input name="harga" type="text" class="form-control" placeholder="Harga Barang" value="<?= $barang->harga ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Harga Asal</label>
                        <input name="hargaasal" type="text" class="form-control" placeholder="Harga Barang Asal" value="<?= $barang->hargaasal ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="id_kategori" class="form-control">
                            <option value=" <?= $barang->id_kategori ?>"> <?= $barang->nama_kategori ?></option>
                            <?php foreach ($kategori as $key => $value) { ?>
                                <option value="<?= $value->id_kategori ?> "><?= $value->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" cols="30" rows="5" placeholder="Deskripsi Talent"><?= $barang->deskripsi ?></textarea>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" cols="30" rows="5" placeholder="alamat"><?= $barang->alamat ?></textarea>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="preview_gambar"></input>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <img src="<?= base_url('assets/gambarbarang/' . $barang->gambar) ?>" id="gambar_load" width="400px" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <a href="<?= base_url('barang') ?>" class="btn btn-danger btn-sm">Kembali</a>
            </div>
        </div>

        <?php echo form_close() ?>
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