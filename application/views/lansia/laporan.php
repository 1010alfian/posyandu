<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Laporan Lansia</h3>
        </div>
    </div>
    <div class="flash-dataw" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
    <?php if ($this->session->flashdata('msg')) : ?>

    <?php endif; ?>
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
                                            <th>Tanggal Periksa</th>
                                            <th>Gol. Darah</th>
                                            <th>Berat Badan</th>
                                            <th>Tensi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($lansia as $d) { ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $d->nama ?></td>
                                                <td><?php echo date_format(date_create($d->tgl_pemeriksaan), "j F Y"); ?></td>
                                                <td><?php echo $d->gol_darah; ?> bulan</td>
                                                <td><?php echo $d->bb; ?> kg</td>
                                                <td><?php echo $d->tensi; ?></td>
                                            </tr>
                                        <?php $i++ ?>    
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