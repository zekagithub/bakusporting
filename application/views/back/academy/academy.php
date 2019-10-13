<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>

    <div class="card mb-3">
        <div class="card-header">
            <div style="float: right;margin-right: 150px;" class="pull-right">
                <a href="<?php echo base_url('back/academyadd');?>" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Akademiya oyuncusu Elave et</a>

            </div>
        </div>

        <?php echo $this->session->flashdata('success');  ?>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Oyuncu  Adi</th>
                        <th>Oyuncu Vezifesi</th>
                        <th>Oyuncu Foto</th>
                        <th>Emeliyyat</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $say=1;
                    $player=academy_player_task_id();
                    foreach ($player as $player):  ?>
                        <tr>
                            <td><?php echo $say++; ?></td>
                            <td><?php  echo  $player->academy_player_name_az;?></td>
                            <td><?= $player->player_task_name_az ?></td>
                            <td><img  src="<?php echo base_url();echo $player->academy_player_image;?> "style="width: 80px; height: 60px;"></td>

                            <td>
                                <a href="<?php echo base_url('back/academyedit/'.$player->id); ?>"> <button class="btn btn-warning ">Deyisdir</button></a>
                                <a href="<?php echo base_url('back/academydelete/'.$player->id.'/id/academy'); ?>" <button class="btn btn-danger">Sil</button>


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