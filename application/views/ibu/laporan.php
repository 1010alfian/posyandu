<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Laporan Ibu Hamil</h3>
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
                                            <th>Nama</th>
                                            <th>Usia Kandungan</th>
                                            <th>Berat Badan</th>
                                            <th>Lingkar Perut</th>
                                            <th>Tensi</th>
                                            <th>Tanggal Pemeriksaan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($ibu as $d) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?php echo $d->nama_ibu; ?></td>
                                                <td><?php echo $d->usia_kandungan; ?></td>
                                                <td><?php echo $d->bb; ?> kg</td>
                                                <td><?php echo $d->lingkar_perut; ?>cm</td>
                                                <td><?php echo $d->tensi; ?></td>
                                                <td><?php echo date_format(date_create($d->tgl_pemeriksaan), "j F Y"); ?></td>
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