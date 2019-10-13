<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>
<style>
    div label{
        color: black;
        font-size:17px;

    }
    div.a{
        padding-left: 40px;
    }



</style>
<div class="box box-info">
    <?php $sekilid=sekil_id_cek(); ?>
    <div class="box-header with-border">
        <h3 style="padding-left: 40px" class="box-title"><span style="color: red;"><?php echo $sekilid->gallery_title_az ?></span>--sekiller elave et</h3>
    </div>



    <form class="dropzone" action="<?php echo base_url('back/imageuploaded/'.$sekilid->id.''); ?>" method="post" enctype="multipart/form-data"></form>


</div>

<button class="btn-warning"><a href="<?=  base_url('back/gallery'); ?>" style="color: white">Geri qayit</a></button>





<?php $this->load->view('back/include/footer');?>

