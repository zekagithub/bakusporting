<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Akademiyada Oyuncu deyisdirme  sehifesi</h3>
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

            <form method="post" id="mesajform"  enctype="multipart/form-data">
                <div class="form-group">
                    <label>Oyuncu adi_az</label>
                    <input type="text" name="name_az"  class="form-control" value="<?php echo $melumat->academy_player_name_az ?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>Oyuncu adi_En</label>
                    <input type="text" name="name_en"  class="form-control" value="<?php echo $melumat->academy_player_name_en?>">

                </div>
                <div class="form-group">
                    <label>Oyuncu adi_Ru</label>
                    <input type="text" name="name_ru"  class="form-control" value="<?php echo $melumat->academy_player_name_ru?>">

                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Oyuncu Vezifesi</label>
                    <div class="col-sm-10">
                        <select name="player_task">
                            <?php $player=player_task(); foreach ($player as $player):  ?>
                                <option value="<?= $player->id; ?>"
                                    <?php if ($melumat->academy_player_task_id==$player->id) echo "selected"; ?>

                                ><?=  $player->player_task_name_az ?></option>
                            <?php  endforeach;   ?>

                        </select>
                    </div>
                </div>



        </div>

    </div>
    <div class="a">


        <div class="form-group">
            <label>Oyuncu foto</label>
            <input type="file" name="image"  class="form-control">

        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"> Oyuncu foto</label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->academy_player_image); ?>" style="width: 70px;height:70px; ">
                    <p class="text-blue">Deyisdirmeseniz foto secmeyin</p>
                </div>
            </div>
        </div>


        <div class="form-group">
            <a type="submit" href="<?=base_url('back/academy');?>" class="btn btn-warning" >Geri qayit
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right" onclick="mesajgonder()">Deyisdir</button>

        </div>



        </form>

    </div>



    <script>
        $(document).ready(function () {

            $('#mesajform').on('submit',function (e) {
                e.preventDefault();
                $.ajax({
                    url:'<?php echo base_url(); ?>back/academyupdate',
                    method:'POST',
                    data:new FormData(this),
                    dataType:'json',
                    contentType: false,
                    cache:false,
                    processData: false,
                    success:function (result) {
                        if(result=="yes"){
                            swal({
                                title: "Akademiya Oyuncusu deyisidirildi",
                                text: "Tebrikler!",
                                icon: "success",
                                timer:2000

                            });
                            setTimeout(function () {
                                window.location.href = '<?php echo base_url("back/academy")?>';
                            }, 1700);
                        }

                    }





                });

            })

        })


    </script>


<?php $this->load->view('back/include/footer');?>