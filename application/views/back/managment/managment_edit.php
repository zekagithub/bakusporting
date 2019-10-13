<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Rehberlik deyisdirme  sehifesi</h3>
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




            <form method="post" id="mesajform"  enctype="multipart/form-data">
                <div class="form-group">
                    <label>Basliq_az</label>
                    <input type="text" name="title_az" required  class="form-control" value="<?php echo $melumat->managment_title_az ?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>Basliq_en</label>
                    <input type="text" name="title_en" required  class="form-control" value="<?php echo $melumat->managment_title_en?>">

                </div>
                <div class="form-group">
                    <label>Basliq_ru</label>
                    <input type="text" name="title_ru" required  class="form-control" value="<?php echo $melumat->managment_title_ru?>">

                </div>
                <div class="form-group">
                    <label>haqqinda_az</label>
                    <textarea rows="10" name="desc_az" required  class="form-control"><?php echo $melumat->managment_desc_az ?>
</textarea>
                </div>
                <div class="form-group">
                    <label>haqqinda_en</label>
                    <textarea rows="10" name="desc_en"  required class="form-control"><?php echo $melumat->managment_desc_en ?></textarea>

                </div>
                <div class="form-group">
                    <label>haqqinda_ru</label>
                    <textarea rows="10" name="desc_ru"  class="form-control"><?php echo $melumat->managment_desc_ru ?></textarea>

                </div>

        </div>

    </div>
    <div class="a">

        <div class="form-group">
            <label>Texnik foto</label>
            <input type="file" name="image"  class="form-control">

        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"> Rehberlik foto</label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->managment_image); ?>" style="width: 70px;height:70px; ">
                    <p class="text-blue">Deyisdirmeseniz foto secmeyin</p>
                </div>
            </div>
        </div>
        <div class="form-group">
            <a type="submit" href="<?=base_url('back/techstaff');?>" class="btn btn-warning" >Geri qayit
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right" onclick="mesajgonder()">Deyisdir</button>

        </div>
        </form>

    </div>
    </div>


    <script>
        $(document).ready(function () {

            $('#mesajform').on('submit',function (e) {
                e.preventDefault();
                $.ajax({
                    url:'<?php echo base_url(); ?>back/managmentupdate',
                    method:'POST',
                    data:new FormData(this),
                    dataType:'json',
                    contentType: false,
                    cache:false,
                    processData: false,
                    success:function (result) {
                        if(result=="yes"){
                            swal({
                                title: "Rehberlik deyisidirildi",
                                text: "Tebrikler!",
                                icon: "success",
                                timer:2000

                            });
                            setTimeout(function () {
                                window.location.href = '<?php echo base_url("back/managment")?>';
                            }, 1700);
                        }

                    }

                });

            })

        })
    </script>
<?php $this->load->view('back/include/footer');?>