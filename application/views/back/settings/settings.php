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
                        <th>Sayt Adi</th>
                        <th>Sayt Url</th>
                        <th>Unvan </th>
                        <th>Sayt map</th>
                        <th>Sayt mail</th>
                        <th>Sayt telefon1</th>
                        <th>Sayt telefon2</th>
                        <th>Sayt description</th>
                        <th>Sayt keywords</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Emeliyyat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $say=1;
                    foreach ($melumat as $melumat):  ?>
                        <tr>
                            <td><?php echo $say++; ?></td>
                            <td><?php  echo  $melumat->site_title;?></td>
                            <td><?php  echo  $melumat->site_url;?></td>
                            <td><?php  echo  $melumat->site_adress;?></td>
                            <td><?php  echo  $melumat->site_map;?></td>
                            <td><?php  echo  $melumat->site_mail;?></td>
                            <td><?php  echo  $melumat->site_telefon1?></td>
                            <td><?php  echo  $melumat->site_telefon2?></td>
                            <td><?php  echo  $melumat->site_description?></td>
                            <td><?php  echo  $melumat->site_keywords?></td>
                            <td><?php  echo  $melumat->site_facebook?></td>
                            <td><?php  echo  $melumat->site_instagram?></td>

                            <td>
                                <a href="<?php echo base_url('back/settingsedit/'.$melumat->id); ?>"> <button class="btn btn-warning ">Deyisdir</button></a>


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