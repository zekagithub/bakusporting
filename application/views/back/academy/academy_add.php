<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 style="padding-left: 40px" class="box-title">Akademiyaya Oyuncu elave et</h3>
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
                <label>Oyuncu adi_az</label>
                <input type="text" name="name_az" required  class="form-control">

            </div>
            <div class="form-group">
                <label>Oyuncu adi_en</label>
                <input type="text" name="name_en" required  class="form-control">

            </div>
            <div class="form-group">
                <label>Oyuncu adi_ru</label>
                <input type="text" name="name_ru" required  class="form-control">

            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Oyuncu Vezifesi</label>
                <div class="col-sm-10">
                    <select name="player_task">
                        <?php $player=player_task(); foreach ($player as $player):  ?>
                            <option value="<?= $player->id;  ?>"><?=  $player->player_task_name_az ?></option>
                        <?php  endforeach;   ?>

                    </select>
                </div>
            </div>


    </div>

</div>

<div style="padding-left: 40px;" class="form-group">
    <label>Oyuncu Foto</label>
    <input type="file" name="image" required  class="form-control">

</div>


<div style="padding-left: 40px;" class="form-group">
    <a type="submit" href="<?=base_url('back/academy');?>" class="btn btn-warning" >Geri qayit
    </a>
    <button type="submit" class=" btn-flat btn-success btn btn-right" >Elave et</button>

</div>



</form>

</div>
</div>

<script>
    $(document).ready(function () {

        $('#mesajform').on('submit',function (e) {
            e.preventDefault();
            $.ajax({
                url:'<?php echo base_url(); ?>back/academyadded',
                method:'POST',
                data:new FormData(this),
                dataType:'json',
                contentType: false,
                cache:false,
                processData: false,
                success:function (result) {
                    if(result=="yes"){
                        swal({
                            title: "Akademiyaya Oyuncu elave edildi",
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

