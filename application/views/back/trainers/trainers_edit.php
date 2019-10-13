<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Mesqci deyisdirme  sayfasi</h3>
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
                    <label>Mesqci adi_az</label>
                    <input type="text" name="name_az" required class="form-control" value="<?php echo $melumat->trainer_name_az ?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>mesqci adi_En</label>
                    <input type="text" name="name_en" required class="form-control" value="<?php echo $melumat->trainer_name_en?>">

                </div>
                <div class="form-group">
                    <label>mesqci adi_ru</label>
                    <input type="text" name="name_ru" required class="form-control" value="<?php echo $melumat->trainer_name_ru?>">

                </div>
                <div class="form-group">
                    <label>Mesqci haqqinda_az</label>
                    <textarea rows="3" name="desc_az" required class="form-control"><?php echo $melumat->trainer_desc_az ?></textarea>
                </div>
                <div class="form-group">
                    <label>Mesqci haqqinda_En</label>
                    <textarea rows="3" name="desc_en" required class="form-control"><?php echo $melumat->trainer_desc_en ?></textarea>

                </div>
                <div class="form-group">
                    <label>Mesqci haqqinda_ru</label>
                    <textarea rows="8" name="desc_ru" required class="form-control"><?php echo $melumat->trainer_desc_ru ?></textarea>

                </div>



        </div>

    </div>
    <div class="a">

        <div class="form-group">
            <label>Mesqci foto</label>
            <input type="file" name="image"  class="form-control">

        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"> Movcud foto</label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->trainer_image); ?>" style="width: 70px;height:70px; ">
                    <p class="text-blue">Deyisdirmeseniz foto secmeyin</p>
                </div>
            </div>
        </div>


        <div class="form-group">
            <a type="submit" href="<?=base_url('back/trainers');?>" class="btn btn-warning" >Geri qayit
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
                    url:'<?php echo base_url(); ?>back/trainersupdate',
                    method:'POST',
                    data:new FormData(this),
                    dataType:'json',
                    contentType: false,
                    cache:false,
                    processData: false,
                    success:function (result) {
                        if(result=="yes"){
                            swal({
                                title: "Mesqci deyisidirildi",
                                text: "Tebrikler!",
                                icon: "success",
                                timer:2000

                            });
                            setTimeout(function () {
                                window.location.href = '<?php echo base_url("back/trainers")?>';
                            }, 1700);
                        }

                    }





                });

            })

        })


    </script>


<?php $this->load->view('back/include/footer');?>