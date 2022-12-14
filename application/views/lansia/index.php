<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Data Lansia</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDataLansiaModal">Tambah Data Lansia</button>
                    <div class="clearfix"></div>
                </div>
                <div class="flash-datab" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
                <?php if ($this->session->flashdata('msg')) : ?>

                <?php endif; ?>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tempat dan Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($lansia as $b) : ?>
                                            <tr>
                                                <th scope="row">
                                                    <center><?= $i; ?></center>
                                                </th>
                                                <td><?= $b['nama']; ?></td>
                                                <td><?= $b['tempat_lahir']; ?>, <?= date("d-M-Y", strtotime($b['tgl_lahir'])); ?> </td>
                                                <td><?= $b['alamat']; ?></td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#editDataLansiaModal<?= $b['id_lansia']; ?>" href="<?= base_url(); ?>lansia/updateDatalansia/<?= $b['id_lansia']; ?>" class="btn btn-warning btn-circle btn-sm" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" data-placement="bottom" href="<?= base_url(''); ?>lansia/deleteDatalansia/<?= $b['id_lansia']; ?>" class="btn btn-danger btn-circle btn-sm tbl-hapus" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
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
    <!-- Large modal -->
    <div class="modal fade bs-example-modal-lg" id="addDataLansiaModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Form Data Lansia</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">??</span>
                    </button>
                </div>
                <form id="demo-form2" action="<?php echo base_url('lansia/createDatalansia') ?>" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama</label>
                                    <div class="col-md-9">
                                        <input type="text" id="nama" name="nama" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="tempat_lahir">Tempat Lahir</label>
                                    <div class="col-md-9">
                                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="tgl_lahir">Tanggal Lahir</label>
                                    <div class="col-md-9">
                                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="alamat">Alamat</label>
                                    <div class="col-md-9">
                                        <input type="text" id="alamat" name="alamat" class="form-control">
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

    <!-- modals -->
    <!-- Large modal -->
    <?php
    $a = 0;
    foreach ($lansia as $row) {
        $a++;
    ?>
        <div class="modal fade bs-example-modal-lg" id="editDataLansiaModal<?= $row['id_lansia']; ?>"" tabindex=" -1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Form Data Lansia</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <form id="demo-form2" action="<?php echo base_url('lansia/updateDataLansia/') . $row['id_lansia']; ?>" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 form-group">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nama" name="nama" required="required" value="<?= $row['nama'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tempat_lahir">Tempat Lahir</label>
                                        <div class="col-md-9">
                                            <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?= $row['tempat_lahir'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tgl_lahir">Tanggal Lahir</label>
                                        <div class="col-md-9">
                                            <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="alamat">Alamat</label>
                                        <div class="col-md-9">
                                            <input type="text" id="alamat" name="alamat" value="<?= $row['alamat'] ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</div>

<?php if($this->session->flashdata('msg')): ?>
		<script>
            Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: '<?= $this->session->flashdata('msg') ?>'
                });  
		</script>
<?php endif ?>