<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Qalereya deyisdirme sehifesi</h3>
            <?php   echo $this->session->flashdata('success');  ?>
        </div>
        <style>
            div label{
                color: black;
                font-size:17px;

            }
            div.a{
                padding-left: 40px;
            }
        </style>
        <div style="padding-left: 40px;" class="box-body">

            <form method="post" action="<?php echo base_url('back/galleryupdate'); ?>"  enctype="multipart/form-data">
                <div class="form-group">
                    <label> Basliq_az</label>
                    <input type="text" name="title_az"  class="form-control" value="<?php echo $melumat->gallery_title_az ?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>Basliq_En</label>
                    <input type="text" name="title_en"  class="form-control" value="<?php echo $melumat->gallery_title_en?>">

                </div>
       <div class="form-group">
                    <label>Basliq_ru</label>
                    <input type="text" name="title_ru"  class="form-control" value="<?php echo $melumat->gallery_title_ru?>">

                </div>

                <br>
                <div class="form-group">
                    <label>Gallery esas foto</label>
                    <input type="file" name="gallery_image"  class="form-control">

                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label"> Movcud Sekil</label>
                    <div class="col-sm-7">
                        <img src="<?php echo base_url($melumat->gallery_image); ?>" style="width: 70px;height:70px; ">
                        <p style="color: blue;">deyisdirmeseniz sekili secmeyin</p>
                    </div>
                </div>



                <div class="form-group">
                    <button type="submit" name="product" value="1" class="btn btn-block btn-flat btn-success">Deyisdir</button>

                </div>
            </form>

        </div>

    </div>
    <div class="col-md-6">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
<?php

$sekil=sekil_cek($melumat->id);


?>
                    <?php  foreach ($sekil as $sekil) : ?>
                        <div class="col-sm-4">
                            <img src="<?php echo base_url();echo $sekil->image_path;  ?>" style="width: 80px;height: 60px" class="img-responsive img-lg">
                            <a href="<?php  echo base_url('back/imagedelete/'.$sekil->id.'/id/image'); ?>" class="btn btn-danger"><i class="fa fa-remove"> sekil sil</i></a>


                        </div>
<?php endforeach;  ?>

                </div>

                <hr>

            </div>

            <form class="dropzone" action="<?php echo base_url('back/imageuploaded/'.$melumat->id);?>" method="post" enctype="multipart/form-data">

            </form>
            <button class="btn-danger"><a href="<?php  echo base_url('back/gallery');  ?>" style="color: white;width:50px;" >Başa dön</a>

            </button>


        </div>

    </div>



<?php $this->load->view('back/include/footer');?>