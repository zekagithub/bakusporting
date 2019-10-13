<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>
<?php echo $this->session->flashdata('success');  ?>

<div class="box box-info">
    <div class="yeni">
        <?php $sekilid=sekil_id_cek(); ?>
        <button class="btn-primary"><a href="<?php echo base_url('back/imageupload/'.$sekilid->id);  ?>" style="color: white">2 ci addim: Galereyaya sekiller elave et</a></button>

    </div>
    <div class="box-header with-border">
        <h3 style="padding-left: 40px" class="box-title">Galereya elave et</h3>
    </div>
    <!-- /.box-header -->
    <style>
        div label{
            color: black;
            font-size:17px;

        }
        div.a{
            padding-left: 40px;
        }
       div.yeni{
           border: 1px solid grey;

           float: right;
           margin-top: 35px;
           margin-right: 50px;
       }


    </style>
    <div style="padding-left: 40px;" class="box-body">


<form action="<?php echo base_url('back/galleryadded');?>" enctype="multipart/form-data" method="post">
    <label>Basliq az</label>
    <input type="text" name="title_az" size="45"><br>
    <label>Basliq en</label>
    <input type="text" name="title_en" size="45">
    <br>
    <label>Basliq ru</label>
    <input type="text" name="title_ru" size="45">
    <br>
    <div class="form-group">
        <label style="color: red"><b>Galereyaya esas sekil elave et</b></label>
        <input type="file" name="gallery_image"  class="form-control">

    </div>

    <button class="btn-primary" >Gonder</button>


</form>


    </div>

</div>

</form>

</div>
</div>



<?php $this->load->view('back/include/footer');?>

