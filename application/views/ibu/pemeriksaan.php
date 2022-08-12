<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Pemeriksaan</h3>
        </div>
    </div>
    <div class="flash-dataq" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
    <?php if ($this->session->flashdata('msg')) : ?>

    <?php endif; ?>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
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
                                            <th>Nama Ibu</th>
                                            <th>Tempat/Tgl Lahir</th>
                                            <th>Gol Dar</th>
                                            <th>Nama Suami</th>
                                            <th>Tensi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($ibu as $b) : ?>
                                            <tr>
                                                <th scope="row">
                                                    <center><?= $i; ?></center>
                                                </th>
                                                <td><?= $b['nama_ibu']; ?></td>
                                                <td><?= $b['tempat_lahir'] . ',' . $b['tgl_lahir']; ?></td>
                                                <td><?= $b['gol_dar']; ?></td>
                                                <td><?= $b['nama_suami']; ?></td>
                                                <td>
                                                    <?php if(!$b['tensi']) : ?>
                                                        0
                                                        <?php else : ?>                                                            
                                                        <?= $b['tensi'] ?>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <!-- <a data-toggle="modal" data-target="#viewDataIbuModal<?= $b['id_ibu']; ?>" href="<?= base_url(); ?>ibu/viewDataIbu/<?= $b['id_ibu']; ?>" class="btn btn-info btn-circle btn-sm" title="Details">
                                                        <i class="fa fa-sticky-note"></i>
                                                    </a> -->
                                                    <?php if(!$b['tensi']) : ?>
                                                        <a data-toggle="modal" data-target="#tambah<?= $b['id_ibu'] ?>" class="btn btn-primary btn-circle btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </a>    
                                                    <?php else : ?>    
                                                            <a data-toggle="modal" data-target="#edit<?= $b['id_ibu']; ?>" href="<?= base_url(); ?>ibu/updateDataIbu/<?= $b['id_ibu']; ?>" class="btn btn-warning btn-circle btn-sm" title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>    
                                                    <?php endif; ?>                                                        
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modals -->
    <?php foreach ($ibu as $b) { ?>
        <div class="modal fade bs-example-modal-lg" id="tambah<?= $b['id_ibu'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
    
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Form Data Ibu</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form id="demo-form2" action="<?php echo base_url('ibu/addtensi') ?>" class="form-horizontal form-label-left" method="POST">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 form-group">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="no-tlp">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" readonly class="form-control" value="<?= $b['nama_ibu'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 form-group">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tensi">tensi</label>
                                        <div class="col-md-9">
                                            <input type="text" name="ibu_id" hidden value="<?= $b['id_ibu'] ?>">
                                            <input type="text" id="tensi" name="tensi" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- Large modal -->

    <!-- modals -->
    <!-- Large modal -->
    <?php foreach ($ibu as $b) { ?>
        <div class="modal fade bs-example-modal-lg" id="edit<?= $b['id_ibu'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
    
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form id="demo-form2" action="<?php echo base_url('ibu/editTensi') ?>" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 form-group">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="no-tlp">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" readonly class="form-control" value="<?= $b['nama_ibu'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 form-group">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="no-tlp">tensi</label>
                                        <div class="col-md-9">
                                            <input type="text" name="id_tensi_ibu" hidden value="<?= $b['id_tensi_ibu'] ?>">
                                            <input type="text" id="tensi" name="tensi" value="<?= $b['tensi'] ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>

</div>