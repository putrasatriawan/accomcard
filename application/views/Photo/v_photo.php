<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data Talent</h3>

            <div class="card-tools">
                <a href="<?= base_url('photo/add') ?>" type="button" class="btn btn-sm btn-success"><i class="fas fa-user-plus fa-sm"></i> Tambah Talent</a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }
            ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Talent</th>
                            <th>Kategori</th>
                            <th>Harga / Rate</th>
                            <th>Harga Asal </th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no = 1;
                        foreach ($photo as $key => $value) { ?>
                            <tr>
                                <th scope="row"><?= $no++   ?></th>
                                <th scope="row"><?= $value->nama_photo  ?></th>
                                <th scope="row"><?= $value->nama_kategori_pg   ?></th>
                                <th scope="row">Rp.<?= number_format($value->harga, 0, ',', '.')   ?></th>
                                <th scope="row">Rp.<?= number_format($value->hargaasal, 0, ',', '.')   ?></th>
                                <th scope="row"><?= $value->alamat  ?></th>
                                <th scope="row"> <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" width="150px"> </th>
                                <td class="text-center">
                                    <a href="#" data-toggle="modal" class="badge badge-info mr-1">
                                        <i class="fas fa-book-reader fa-sm"></i> Detail
                                    </a>

                                    <a href="<?= base_url('photo/edit/' . $value->id_photo) ?>" class="badge badge-warning mr-1">
                                        <i class="fas fa-edit fa-sm"></i> edit
                                    </a>

                                    <a href="#delete<?= $value->id_photo ?>" data-toggle="modal" class="badge badge-danger">
                                        <i class="far fa-trash-alt fa-sm"></i> delete
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<!-- modal delete -->
<?php foreach ($photo as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_photo ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus <?= $value->nama_photo ?> ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h5>Apakah anda ingin menghapus data ini?</h5>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <a href="<?= base_url('photo/delete/' . $value->id_photo) ?>?" class="btn btn-primary">Hapus</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
<?php } ?>