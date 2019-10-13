<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Mesaj sehifesi</h3>
        </div>

        <form class="form-horizontal" id="mesajform" onsubmit="return false;" method="post" >
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sayt Adi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title"  value="<?php echo $melumat->site_title; ?>" >
                        <input type="hidden" class="form-control"  name="id" value="<?php echo $melumat->id;?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sayt Url</label>
                    <div class="col-sm-10">
                        <input type="text" name="url" class="form-control" value="<?php echo $melumat->site_url; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">Unvan</label>
                    <div class="col-sm-10">
                        <input type="text" name="adress" class="form-control" value="<?php echo $melumat->site_adress; ?>"  >
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sayt map</label>
                    <div class="col-sm-10">
                        <input type="text" name="map" class="form-control" value="<?php echo $melumat->site_map; ?>" >
                    </div>
                </div>  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sayt mail</label>
                    <div class="col-sm-10">
                        <input type="text" name="mail" class="form-control" value="<?php echo $melumat->site_mail; ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sayt telefon1</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone1" class="form-control" value="<?php echo $melumat->site_telefon1; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sayt telefon2</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone2" class="form-control" value="<?php echo $melumat->site_telefon2; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sayt description</label>
                    <div class="col-sm-10">
                        <input type="text" name="desc" class="form-control" value="<?php echo $melumat->site_description; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Sayt keywords</label>
                    <div class="col-sm-10">
                        <input type="text" name="keywords" class="form-control" value="<?php echo $melumat->site_keywords; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>
                    <div class="col-sm-10">
                        <input type="text" name="facebook" class="form-control" value="<?php echo $melumat->site_facebook; ?>"  >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Instagram</label>
                    <div class="col-sm-10">
                        <input type="text" name="instagram" class="form-control" value="<?php echo $melumat->site_instagram; ?>"  >
                    </div>
                </div>


            <div class="form-group">
                <a type="submit" href="<?=base_url('back/settings');?>" class="btn btn-warning lg-6 " >Legv et
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
                url:'<?php echo base_url("back/settingsupdate"); ?>',
                data:deyer,
                dataType:'json',
                success:function (result) {
                     if(result=="yes"){
                        swal({
                            title: "Deyisdirildi!",
                            text: "tebrikler!",
                            icon: "success",
                            timer:5000

                        });
                         setTimeout(function () {
                             window.location.href = '<?php echo base_url("back/settings")?>';
                         }, 1700);
                    }

                }
            });


        }



    </script>





<?php $this->load->view('back/include/footer');?>