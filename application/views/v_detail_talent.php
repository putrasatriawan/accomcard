<!-- Default box -->
<style type="text/css">
    .card-body {
        font-family: Montserrat;
    }
</style>
<div class="card card-solid">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6">
                <!-- <h3 class="d-inline-block d-sm-none"><?= $barang->nama_barang ?></h3> -->
                <div class="col-12">
                    <img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" class="product-image" alt="Product Image">

                </div>
                <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb active"><img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" alt="Product Image"></div>
                    <?php foreach ($gambar as $key => $value) { ?>
                        <div class="product-image-thumb"><img src=" <?= base_url('assets/gambarbarang/' . $value->gambar) ?>" alt="Product Image"></div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <table class="table">
                    <tr>
                        <td>Nama </td>
                        <td><strong><?php echo $barang->nama_barang  ?></strong></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><strong><?php echo  nl2br(htmlspecialchars($barang->deskripsi)); ?></strong></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><strong><?php echo nl2br(htmlspecialchars($barang->alamat)); ?></strong></td>
                    </tr>
                    <tr>
                        <td>Kategori Mc</td>
                        <td><strong><?php echo $barang->nama_kategori   ?></strong></td>
                    </tr>
                    <tr>
                        <td>Kategori Pg</td>
                        <td><strong><?php echo $barang->nama_kategori_pg   ?></strong></td>
                    </tr>
                    <tr>
                        <td>Harga/Rate</td>
                        <td>
                            <strong>
                                <div class="btn btn-sm btn-success"><strike>Rp.<?php echo number_format($barang->hargaasal, 0, ',', '.')  ?><strike></div>
                            </strong>
                            <div class="btn btn-sm btn-danger"><small>Rp.<?php echo number_format($barang->harga, 0, ',', '.')  ?></small>
                            </div>
                        </td>
                    </tr>
                </table>

                <HR>
                <?php
                echo form_open('belanja/add');
                echo form_hidden('id', $barang->id_barang);
                echo form_hidden('price', $barang->harga);
                echo form_hidden('name', $barang->nama_barang);
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                <?php echo form_close() ?>

                <div class="social-auth-links text-center mb-3">
                    <!-- <p>Promo klik Tombol Dibawah</p> -->
                    <a href="https://api.whatsapp.com/send?phone=6281224669308&text=Halo%20Admin%20Saya%20mau%20sewa%20Talent%20<?php echo $barang->nama_barang  ?>*%20Dengan%20Kategori%20<?php echo $barang->nama_kategori   ?>" class=" btn btn-block btn-success">
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