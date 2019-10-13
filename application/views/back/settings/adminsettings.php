<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Admin sehifesi</h3>
        </div>
        <!-- /.box-header -->


        <form class="form-horizontal" id="mesajform" onsubmit="return false;"  method="post"  >
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">kohne Giris Adi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title"  value="<?php echo $melumat->email; ?>" disabled >
                        <input type="hidden" class="form-control"  name="id" value="<?php echo $melumat->id;?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Yeni Giris Adi</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">Kohne Sifre</label>
                    <div class="col-sm-10">
                        <input type="password" name="adress" class="form-control" value="<?php echo $melumat->password; ?>"  disabled >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" id="editor1" class="col-sm-2 control-label">Yeni Sifre</label>
                    <div class="col-sm-10">
                        <input type="text" name="password" class="form-control">
                    </div>
                </div>



                <div class="form-group">
                    <a type="submit" href="<?=base_url('back/settings');?>" style="margin-left: 17px;" class="btn btn-warning lg-6 " >Vazgec
                    </a>
                    <button type="submit" class=" btn-flat btn-success btn btn-right lg-6" onclick="mesajgonder();">Guncelle</button>

                </div>

        </form>
    </div>

    <script>
        function mesajgonder() {

            var deyer=$('#mesajform').serialize();
            $.ajax({
                type:"POST",
                url:'<?php echo base_url("back/adminsettingsupdate"); ?>',
                data:deyer,
                dataType:'json',
                success:function (result) {
                    if(result=="yes"){
                        swal({
                            title: "Deyisdirildi!",
                            text: "tebrikler!",
                            icon: "success",
                            timer:2000,

                        });
                        setTimeout(function () {
                            window.location.href = '<?php echo base_url("back/adminsettings")?>';
                        }, 1700);

                    }

                }
            });


        }



    </script>



<?php $this->load->view('back/include/footer');?>