<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
        </div>
        <?php echo $this->session->flashdata('success');  ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Qollar</th>
                        <th>Oyuncular</th>
                        <th>Komanda </th>
                        <th>Nealiyyetler </th>

                        <th>Emeliyyat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $say=1;
                    foreach ($melumat as $melumat):  ?>
                        <tr>
                            <td><?php echo $say++; ?></td>
                            <td><?php  echo  $melumat->goal;?></td>
                            <td><?php  echo  $melumat->player;?></td>
                            <td><?php  echo  $melumat->club;?></td>
                            <td><?php  echo  $melumat->winner;?></td>


                            <td>
                                <a href="<?php echo base_url('back/activeedit/'.$melumat->id); ?>"> <button class="btn btn-warning ">Deyisdir</button></a>


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