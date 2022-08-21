<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Laporan Balita</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <a class="btn btn-danger" href="<?= base_url('laporan_anak/cetak_laporan') ?>"><i class="fa fa-print"></i></a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Balita</th>
                                            <th>Tanggal Periksa</th>
                                            <th>Usia</th>
                                            <th>Berat Badan</th>
                                            <th>Tinggi Badan</th>
                                            <th>Deteksi</th>
                                            <th>Imunisasi</th>
                                            <th>Vit. A</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($laporan as $d) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?php echo $d->nama_anak; ?></td>
                                                <td><?php echo date_format(date_create($d->tgl_skrng), "j F Y"); ?></td>
                                                <td><?php echo $d->usia; ?> bulan</td>
                                                <td><?php echo $d->bb; ?> kg</td>
                                                <td><?php echo $d->tb; ?> cm</td>
                                                <td><?php echo $d->deteksi; ?></td>
                                                <td><?php echo $d->imunisasi; ?></td>
                                                <td><?php echo $d->vit_a; ?></td>
                                                <td><?php echo $d->ket; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>