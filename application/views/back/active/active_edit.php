<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Komanda siyahisi</h3>
        </div>

        <form class="form-horizontal" id="mesajform" onsubmit="return false;" method="post" >
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Qol sayi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="goal"  value="<?php echo $melumat->goal; ?>" >
                        <input type="hidden" class="form-control"  name="id" value="<?php echo $melumat->id;?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Oyuncu sayi</label>
                    <div class="col-sm-10">
                        <input type="text" name="players" class="form-control" value="<?php echo $melumat->player; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">Komanda</label>
                    <div class="col-sm-10">
                        <input type="text" name="club" class="form-control" value="<?php echo $melumat->club; ?>"  >
                    </div>
                </div>    <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">Nealiyyet sayisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="winner" class="form-control" value="<?php echo $melumat->winner; ?>"  >
                    </div>
                </div>




            <div class="form-group">
                <a type="submit" href="<?=base_url('back/active');?>" class="btn btn-warning lg-6 " >Legv et
                </a>
                <button type="submit" class=" btn-flat btn-success btn btn-right lg-6" onclick="mesajgonder();"   >Deyisdir</button>

            </div>

        </form>
    </div>



    <script>
        function mesajgonder() {

            var deyer=$('#mesajform').serialize();
            $.ajax({
                type:"POST",
                url:'<?php echo base_url("back/activeupdate"); ?>',
                data:deyer,
                dataType:'json',
                success:function (result) {
                    if(result=="yes"){
                        swal({
                            title: "Deyisdirildi!",
                            text: "tebrikler!",
                            icon: "success",
                            timer:2000

                        });
                        setTimeout(function () {
                            window.location.href = '<?php echo base_url("back/active")?>';
                        }, 1700);
                    }

                }
            });


        }



    </script>





<?php $this->load->view('back/include/footer');?>