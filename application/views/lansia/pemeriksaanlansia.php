<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Imunisasi Anak</h3>
        </div>
    </div>
    <div class="flash-datar" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
    <?php if ($this->session->flashdata('msg')) : ?>

    <?php endif; ?>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_content">
                    <br />
                    <form id="imunisasi-form" name="imunisasi-form" class="form-horizontal form-label-left" action="<?php echo base_url('lansia/update'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="username">Nama
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="hidden" name="id_lansia" id="id_lansia" class="form-control" >
                                    <input type="text" name="nama" id="nama" class="form-control" readonly>
                                    <span class="input-group-btn">
                                        <button id="pilihData" name="pilihData" type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#DataLansiaModal">Pilih</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Usia</label>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="usia" id="usia" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Berat Badan
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="bb" id="bb" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Tensi
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="tensi" id="tensi" class="form-control" >
                                </div>
                            </div>
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
                                                <th>Usia</th>
                                                <th>Berat Badan</th>
                                                <th>Tensi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($lansia as $d) : ?>
                                                <tr>
                                                    <td><?= $d['nama']; ?></td>
                                                    <td><?= $d['usia']; ?></td>
                                                    <td><?= $d['bb']; ?></td>
                                                    <td><?= $d['tensi']; ?></td>
                                                    <td>
                                                        <button id="pilihLansia" type="button" data-id="<?= $d['id_lansia']; ?>" data-nama="<?= $d['nama']; ?>" data-usia="<?= $d['usia']; ?>" data-bb="<?= $d['bb']; ?>" data-tensi="<?= $d['tensi']; ?>" class="btnSelectLansia btn btn-primary btn-sm">Pilih</button>
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