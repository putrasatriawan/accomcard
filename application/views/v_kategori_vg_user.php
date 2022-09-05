<div class="container">
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row d-flex align-items-stretch">
                <?php foreach ($barang as $key => $value) { ?>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                <p class=""> <?= $value->nama_kategori_vg ?></>
                                </p>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b><?= $value->nama_barang ?></b></h2>
                                        <!-- <p class="text-muted text-sm"><b>About: </b><?= $value->deskripsi ?> </p> -->
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-map-marker-alt mr-1"></i></span>
                                                <p class=""><?= $value->alamat ?></p>
                                            </li>
                                            <!-- <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li> -->
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <a href="<?= base_url('home/detail_talent/' . $value->id_barang) ?>"> <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="" class="img-circle img-fluid" width="500px" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm btn-warning" style="color:#1f3b5d">
                                            <i class="fas fa-user"></i> View Profile
                                        </a>
                                    </div>
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

<style type="text/css">
    .card-footer {
        background-color: #1f3b5d;
        font-size: 18px;
        font-family: monserrat;
        color: #D7D721;
    }
</style>