<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>

    <div class="card mb-3">
        <div class="card-header">
            <div style="float: right;margin-right: 150px;" class="pull-right">
                <a href="<?php echo base_url('back/techstaff_add');?>" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Texnik Elave et</a>

            </div>
        </div>

        <?php echo $this->session->flashdata('success');  ?>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Texnik  Adi</th>
                        <th>Texnik Haqqinda</th>
                        <th>Texnik Foto</th>
                        <th>Emeliyyat</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $say=1;
                    foreach ($melumat as $melumat):  ?>
                        <tr>
                            <td><?php echo $say++; ?></td>
                            <td><?php  echo  $melumat->tech_name_az;?></td>
                            <td><?php  echo  $melumat->tech_desc_az;?></td>
                            <td><img  src="<?php echo base_url();echo $melumat->tech_image;?> "style="width: 80px; height: 60px;"></td>

                            <td>
                                <a href="<?php echo base_url('back/techstaff_edit/'.$melumat->id); ?>"> <button class="btn btn-warning ">Deyisdir</button></a>
                                <a href="<?php echo base_url('back/techstaff_delete/'.$melumat->id.'/id/techstaff'); ?>" <button class="btn btn-danger">Sil</button>


                            </td>
                        </tr>
                    <?php endforeach;  ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>


<?php $this->load->view('back/include/footer');?>