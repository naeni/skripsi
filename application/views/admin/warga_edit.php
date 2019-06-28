<form class="form-horizontal" action="<?php echo base_url('admin/add_warga')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Nama</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Tempat Lahir</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="tempat_lhr" name="tempat_lhr">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Tanggal Lahir</label>
                        <div class="col-lg-8">
                            <input type="date" class="form-control" id="tanggal_lhr" name="tanggal_lhr">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Alamat</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">No Handphone</label>
                        <div class="col-lg-8">
                            <input type="number" class="form-control" id="no_tlpon" name="no_tlpon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Usia Anak</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="attribut[]" require>
                                <option value="">- Pilih Usia Anak -</option>
                                <?php foreach ($usia_anak as $row){?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->keterangan;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Pendidikan</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="attribut[]" require>
                                <option value="">- Pilih Pendidikan -</option>
                                <?php foreach ($pendidikan as $row){?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->keterangan;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Tanggungan</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="attribut[]" require>
                                <option value="">- Pilih tanggungan -</option>
                                <?php foreach ($tanggungan as $row){?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->keterangan;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Penghasilan</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="attribut[]" require>
                                <option value="">- Penghasilan -</option>
                                <?php foreach ($penghasilan as $row){?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->keterangan;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Luas sawah</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="attribut[]" require>
                                <option value="">- Pilih Luas Sawah -</option>
                                <?php foreach ($luas_sawah as $row){?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->keterangan;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Tempat Tinggal</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="attribut[]" require>
                                <option value="">- Pilih Tempat tinggal -</option>
                                <?php foreach ($tempat_tinggal as $row){?>
                                    <option value="<?php echo $row->id;?>"><?php echo $row->keterangan;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                   
                   
                </div>
                <div class="modal-footer">
                   
                    <input type="submit" name="submit" class="btn btn-info" value="Tambah">
                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                </div>