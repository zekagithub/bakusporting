<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title"> Oyun deyisdirme  sehifesi</h3>
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

            <form method="post" id="mesajform" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Ev Komandasinin adi</label>
                    <input type="text"  class="form-control" name="home_title" value="<?php echo $melumat->club_title_home;?>" >
                    <input type="hidden" name="id" value="<?= $melumat->id ?>">
                </div>
                <div class="form-group">
                    <label>Qonaq komandanin adi</label>
                    <input type="text" name="guest_title"  class="form-control" value="<?php echo  $melumat->club_title_guest;?>">

                </div>
        </div>

    </div>
    <div class="a">

        <div class="form-group">
            <label>Ev komandanin bayraqi</label>
            <input type="file" name="home_image"  required  class="form-control">

        </div>

        <div class="form-group">
            <label>Qonaq komandanin bayraqi</label>
            <input type="file" name="guest_image" required   class="form-control">

        </div>

        <div  class="form-group">
            <label>Hesab</label>
            <input type="text" name="score" required value="<?php echo $melumat->score;  ?>" class="form-control">

        </div>
        <div  class="form-group">
            <label>Stadion</label>
            <input type="text" name="stadium" required value="<?php echo $melumat->stadium;  ?>" class="form-control">

        </div>
        <div   class="form-group">
            <label>Oyun haqqinda_az</label>
            <textarea rows="3" name="desc_az" required class="form-control"><?php echo $melumat->game_desc_az;  ?></textarea>

        </div>
        <div  class="form-group">
            <label>Oyun haqqinda_en</label>
            <textarea rows="3" name="desc_en" required  class="form-control"><?php echo $melumat->game_desc_en;  ?></textarea>

        </div>
        <div  class="form-group">
            <label>Oyun haqqinda_ru</label>
            <textarea rows="3" name="desc_ru"  required class="form-control"><?php echo $melumat->game_desc_ru;  ?></textarea>

        </div>
        <div  class="form-group">
            <label>Oyun Tarixi</label>
            <input type="date" name="date" required class="form-control">

        </div>

        <div class="form-group">
            <a type="submit" href="<?=base_url('back/games');?>" class="btn btn-warning" >Geri qayit
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right">Deyisdir</button>

        </div>

        </form>

    </div>

    <script>
        $(document).ready(function () {

            $('#mesajform').on('submit',function (e) {
                e.preventDefault();
                $.ajax({
                    url:'<?php echo base_url(); ?>back/gameupdate',
                    method:'POST',
                    data:new FormData(this),
                    dataType:'json',
                    contentType: false,
                    cache:false,
                    processData: false,
                    success:function (result) {
                        if(result=="yes"){
                            swal({
                                title: "oyun deyisidirildi",
                                text: "Tebrikler!",
                                icon: "success",
                                timer:2000

                            });
                            setTimeout(function () {
                                window.location.href = '<?php echo base_url("back/games")?>';
                            }, 1700);
                        }

                    }





                });

            })

        })


    </script>

<?php $this->load->view('back/include/footer');?>