<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Pemeriksaan Ibu Hamil</h3>
        </div>
    </div>
    <div class="flash-dataibu" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
    <?php if ($this->session->flashdata('msg')) : ?>

    <?php endif; ?>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_content">
                    <br />
                    <form id="imunisasi-form" name="imunisasi-form" class="form-horizontal form-label-left" action="<?php echo base_url('ibu/addlayanan'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="username">Nama
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="hidden" name="id" id="id" class="form-control" >
                                    <input type="text" name="nama" id="nama" class="form-control" readonly>
                                    <span class="input-group-btn">
                                        <button id="pilihData" name="pilihData" type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#DataLansiaModal">Pilih</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat & Tanggal Lahir</label>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nama Suami
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="suami" id="suami" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Alamat
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="alamat" id="alamat" class="form-control" >
                                </div>
                            </div>
                        </div>
                        

                        <div class="divider-dashed"></div>
                        <h2>Pemeriksaan</h2>
                        <div class="divider-dashed"></div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Usia Kandungan
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="hpht" id="hpht" class="form-control" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tgl_pemeriksaan">Tanggal Pemeriksaan
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input type=date step=any id="tgl_pemeriksaan" name="tgl_pemeriksaan" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="bb">Berat Badan
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input type=number step=any id="bb" name="bb" class="form-control">
                            </div>
                            <label for="">Kg</label>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tensi">Tensi
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input type=number step=any id="tensi" name="tensi" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="lingkar_perut">Lingkar Perut
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input type=number step=any id="lingkar_perut" name="lingkar_perut" class="form-control">
                            </div>
                            <label for="">cm</label>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group row">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" id="proses" name="proses" class="btn btn-success">Proses</button>
                            </div>
                        </div>
                    </form>

                    <!-- Modal Data Anak -->
                    <div class="modal fade bs-example-modal-lg" id="DataLansiaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Daftar Data Anak</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tempat & Tanggal Lahir</th>
                                                <th>Nama Suami</th>
                                                <th>Alamat</th>
                                                <th>HPHT</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($ibu as $d) : ?>
                                                <tr>
                                                    <td><?= $d['nama_ibu']; ?></td>
                                                    <td><?= $d['tempat_lahir']; ?>, <?= $d['tgl_lahir']; ?></td>
                                                    <td><?= $d['nama_suami']; ?></td>
                                                    <td><?= $d['alamat']; ?></td>
                                                    <td><?= $d['hpht']; ?></td>
                                                    <?php
                                                    $hpht =  date("Y-m-d", strtotime($d['hpht']));
                                                    $date = new DateTime($hpht);
                                                    $now = new DateTime();

                                                    $interval = $date->diff($now)->format("%d hari, %m bulan");;
                                                    ?>

                                                    
                                                    <td>
                                                        <button id="pilihIbuHamil" type="button" data-id="<?= $d['id_ibu']; ?>" data-nama="<?= $d['nama_ibu']; ?>" data-tgl_lahir="<?= $d['tempat_lahir']; ?>, <?= $d['tgl_lahir']; ?>" data-hpht="<?= $interval; ?>" data-suami="<?= $d['nama_suami']; ?>" data-alamat="<?= $d['alamat']; ?>" class="btnSelectIbuHamil btn btn-primary btn-sm">Pilih</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>