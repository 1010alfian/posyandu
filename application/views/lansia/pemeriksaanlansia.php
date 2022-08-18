<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Layanan Lansia</h3>
        </div>
    </div>
    <div class="flash-dataa" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
    <?php if ($this->session->flashdata('msg')) : ?>

    <?php endif; ?>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_content">
                    <br />
                    <form id="imunisasi-form" name="imunisasi-form" class="form-horizontal form-label-left" action="<?php echo base_url('lansia/addlayanan'); ?>" method="POST" enctype="multipart/form-data">
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat dan Tanggal Lahir</label>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control">
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tgl_pemeriksaan">Tanggal Pemeriksaan
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input type=date step=any id="tgl_pemeriksaan" name="tgl_pemeriksaan" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gol_darah">Golongan Darah
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <select name="gol_darah" class="form-control" id="">
                                    <option value="" selected>Pilih Gol. Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                    <option value="Tidak Tahu">Tidak Tahu</option>
                                </select>
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="bingkisan">Bingkisan
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <select name="bingkisan" class="form-control" id="">
                                    <option selected>Pilih Bingkisan</option>
                                    <option value="1">Vitamin</option>
                                    <option value="2">Paket Makanan Sehat</option>
                                </select>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Daftar Data Lansia</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tempat dan Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($lansia as $d) : ?>
                                                <tr>
                                                    <td><?= $d['nama']; ?></td>
                                                    <td><?= $d['tempat_lahir']; ?>, <?= $d['tgl_lahir']; ?></td>
                                                    <td><?= $d['alamat']; ?></td>
                                                    <td>
                                                        <button id="pilihLansia" type="button" data-id="<?= $d['id_lansia']; ?>" data-nama="<?= $d['nama']; ?>" data-tgl_lahir="<?= $d['tempat_lahir']; ?>, <?= $d['tgl_lahir']; ?>" data-alamat="<?= $d['alamat']; ?>" class="btnSelectLansia btn btn-primary btn-sm">Pilih</button>
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