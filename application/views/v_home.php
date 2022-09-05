<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url() ?>assets/slider/slider1.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() ?>assets/slider/slider2.jpg" alt="Second slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?= base_url() ?>assets/slider/slider1.png" alt=" First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() ?>assets/slider/slider2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url() ?>assets/slider/slider3.png" " alt=" Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
<br>
</section>
<div class="container">
    <div class="row">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">
                    <?php foreach ($barang as $key => $value) { ?>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <!-- <div class="card-header text-muted border-bottom-0">
                                    <p style="font-family: 'Advent Pro', Montserrat;color: var(--dark);"> <?= $value->nama_kategori ?></>
                                    </p>
                                    <p style="font-family: 'Advent Pro', Montserrat;color: var(--dark);"> <?= $value->nama_kategori_pg ?></>
                                    </p>
                                </div> -->
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b><?= $value->nama_barang ?></b></h2>
                                            <!-- <p class="text-muted text-sm"><b>Alamat: </b><?= $value->alamat ?> </p> -->
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="nav-icon fas fa-th"></i></span>
                                                    <!-- <p class=""><?= $value->alamat ?></p> -->
                                                    <p> <?= $value->nama_kategori ?></p>
                                                    <p> <?= $value->nama_kategori_pg ?></p>
                                                    <p> <?= $value->nama_kategori_vg ?></p>

                                                </li>
                                                <!-- <li class="small"><span class="fa-li"></span> Kategori : <?= $value->nama_kategori_pg ?></li>
                                                <li class="small"><span class="fa-li"></span>  <?= $value->nama_kategori_vg ?></li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-microphone "></i></span>  <?= $value->nama_kategori ?></li> -->
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                             <a href="<?= base_url('home/detail_talent/' . $value->id_barang) ?>"> <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="" class="img-circle img-fluid" width="500px" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <div class="text-center">
                                            <p class="btn btn-sm btn-warning" style="color:#1f3b5d">Rp.
                                                <?= $value->harga ?>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="text-left">
                                        <p class=""><i class="fas fa-map-marker-alt mr-1"></i><?= $value->alamat ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .card-title {
        background-color: #1f3b5d;
        font-size: 18px;
        font-family: monserrat;
        color: #D7D721;
    }
</style>


<!-- /.row -->
<!-- END CUSTOM TABS -->
<!-- SweetAlert2 -->
<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>

<style type="text/css">
    .card-footer {
        background-color: #1f3b5d;
        font-size: 18px;
        font-family: monserrat;
        color: #D7D721;
    }
</style>

<style>
    .yakin-teks {
        background-color: black;
    }
</style>




<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                icon: 'success',
                title: 'Produk Berhasil Ditambahkan ke keranjang'
            })
        });
    });
</script>