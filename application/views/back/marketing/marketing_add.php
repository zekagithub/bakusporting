<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 style="padding-left: 40px" class="box-title">Marketinq elave et</h3>
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




        <form method="post" id="mesajform" enctype="multipart/form-data">
            <div class="form-group">
                <label>Adi_az</label>
                <input type="text" name="name_az" required class="form-control">

            </div>
            <div class="form-group">
                <label>Adi_en</label>
                <input type="text" name="name_en" required  class="form-control">

            </div>
            <div class="form-group">
                <label>Adi_ru</label>
                <input type="text" name="name_ru" required  class="form-control">

            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"> haqqinda_az</label>
                <div class="col-sm-10">
                    <textarea rows="10" name="desc_az"  required class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"> haqqinda_en</label>
                <div class="col-sm-10">
                    <textarea rows="10" name="desc_en"  required class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"> haqqinda_ru</label>
                <div class="col-sm-10">
                    <textarea rows="10" name="desc_ru"  required class="form-control"></textarea>
                </div>
            </div>

    </div>

</div>

<div style="padding-left: 40px;" class="form-group">
    <label> Foto</label>
    <input type="file" name="image"  required class="form-control">

</div>


<div style="padding-left: 40px;" class="form-group">
    <a type="submit" href="<?=base_url('back/managment');?>"  class="btn btn-warning" >Geri qayit
    </a>
    <button type="submit" class=" btn-flat btn-success btn btn-right" id="upload">Elave et</button>

</div>

</form>

</div>
</div>

<script>
    $(document).ready(function () {

        $('#mesajform').on('submit',function (e) {
            e.preventDefault();
            $.ajax({
                url:'<?php echo base_url(); ?>back/marketing_added',
                method:'POST',
                data:new FormData(this),
                dataType:'json',
                contentType: false,
                cache:false,
                processData: false,
                success:function (result) {
                    if(result=="yes"){
                        swal({
                            title: "Marketing elave edildi",
                            text: "Tebrikler!",
                            icon: "success",
                            timer:2000

                        });
                        setTimeout(function () {
                            window.location.href = '<?php echo base_url("back/marketing")?>';
                        }, 1700);
                    }

                }

            });

        })

    })
</script>

<?php $this->load->view('back/include/footer');?>

