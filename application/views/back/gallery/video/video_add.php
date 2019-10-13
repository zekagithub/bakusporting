<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 style="padding-left: 40px" class="box-title">Video elave et</h3>
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
    </style>
    <div style="padding-left: 40px;" class="box-body">




        <form onsubmit="return false;" method="post" enctype="multipart/form-data"  id="mesajform" >
            <div class="form-group">
                <label>Basliq_az</label>
                <input type="text" name="title_az" required class="form-control">

            </div>
            <div class="form-group">
                <label>Basliq_en</label>
                <input type="text" name="title_en" required  class="form-control">

            </div>
            <div class="form-group">
                <label>Basliq_ru</label>
                <input type="text" name="title_ru" required  class="form-control">

            </div>
            <div class="form-group">
                <label>Video ucun sekil</label>
                <input type="file" name="video_image" required  class="form-control">

            </div>    <div class="form-group">
                <label>Video link</label>
                <input type="text" name="link" required  class="form-control">

            </div>


    </div>

</div>

<div style="padding-left: 40px;" class="form-group">
    <a type="submit" href="<?=base_url('back/video');?>"  class="btn btn-warning" >Geri qayit
    </a>
    <button type="submit" class=" btn-flat btn-success btn btn-right" onclick="mesajgonder()">Elave et</button>

</div>

</form>

</div>
</div>

<script>
    $(document).ready(function () {

        $('#mesajform').on('submit',function (e) {
            e.preventDefault();
            $.ajax({
                url:'<?php echo base_url(); ?>back/video_added',
                method:'POST',
                data:new FormData(this),
                dataType:'json',
                contentType: false,
                cache:false,
                processData: false,
                success:function (result) {
                    if(result=="yes"){
                        swal({
                            title: "Video elave edildi",
                            text: "Tebrikler!",
                            icon: "success",
                            timer:2000
                        });
                        setTimeout(function () {
                            window.location.href = '<?php echo base_url("back/video")?>';
                        }, 1700);
                    }
                }
            });

        })

    })
</script>


<?php $this->load->view('back/include/footer');?>

