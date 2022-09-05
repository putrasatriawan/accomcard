<!-- Default box -->

<div class="card card-solid">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6">
                <!-- <h3 class="d-inline-block d-sm-none"><?= $barang->nama_barang ?></h3> -->
                <div class="col-12">
                    <img src="<?= base_url('assets/gambar/' . $photo->gambar) ?>" class="product-image" alt="Product Image">

                </div>
                <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb active"><img src="<?= base_url('assets/gambar/' . $photo->gambar) ?>" alt="Product Image"></div>
                    <?php foreach ($gambar as $key => $value) { ?>
                        <div class="product-image-thumb"><img src=" <?= base_url('assets/gambarbarang/' . $value->gambar) ?>" alt="Product Image"></div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <table class="table">
                    <tr>
                        <td>Nama </td>
                        <td><strong><?php echo $photo->nama_photo  ?></strong></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><strong><?php echo $photo->deskripsi ?></strong></td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td><strong><?php echo $photo->nama_kategori_pg   ?></strong></td>
                    </tr>
                    <tr>
                        <td>Harga/Rate</td>
                        <td>
                            <div class="btn btn-sm btn-secondary"><strike><small>Rp.<?php echo number_format($photo->harga, 0, ',', '.')  ?></small></strike></div>
                            <strong>
                                <div class="btn btn-sm btn-success">Rp.<?php echo number_format($photo->hargaasal, 0, ',', '.')  ?></div>
                            </strong>
                        </td>
                    </tr>
                </table>

                <HR>
                <?php
                echo form_open('belanja/add');
                echo form_hidden('id', $photo->id_barang);
                echo form_hidden('price', $photo->harga);
                echo form_hidden('name', $photo->nama_barang);
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                <?php echo form_close() ?>

                <div class="social-auth-links text-center mb-3">
                    <!-- <p>Promo klik Tombol Dibawah</p> -->
                    <a href="#" class="btn btn-block btn-success">
                        <i class="fab fa-whatsapp mr-2"></i> Hubungi Kami Di WhatsApp
                    </a>
                </div>

            </div>
        </div>


    </div>
</div>


<!-- /.card -->
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= base_url() ?>template/dist/js/demo.js"></script>