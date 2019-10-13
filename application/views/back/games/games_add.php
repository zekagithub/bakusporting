<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 style="padding-left: 40px" class="box-title">Yeni Oyun elave et</h3>
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
                <label>Ev Komandasinin adi</label>
                <input type="text" name="home_title" required  class="form-control">

            </div>
            <div class="form-group">
                <label>Qonaq komandanin adi</label>
                <input type="text" name="guest_title" required  class="form-control">

            </div>

    </div>

</div>

<div style="padding-left: 40px;" class="form-group">
    <label>Ev komandanin bayraqi</label>
    <input type="file" name="home_image" required  class="form-control">

</div>
<div style="padding-left: 40px;" class="form-group">
    <label>Qonaq komandanin bayraqi</label>
    <input type="file" name="guest_image" required  class="form-control">

</div>
<div style="padding-left: 40px;" class="form-group">
    <label>Hesab</label>
    <input type="text" name="score" required  class="form-control">

</div>
<div style="padding-left: 40px;" class="form-group">
    <label>Stadion</label>
    <input type="text" name="stadium" required  class="form-control">

</div>
<div  style="padding-left: 40px;" class="form-group">
    <label>Oyun haqqinda_az</label>
    <textarea rows="10" name="desc_az" required class="form-control"></textarea>

</div>
<div style="padding-left: 40px;" class="form-group">
    <label>Oyun haqqinda_en</label>
    <textarea rows="10" name="desc_en" required  class="form-control"></textarea>

</div>
<div style="padding-left: 40px;" class="form-group">
    <label>Oyun haqqinda_ru</label>
    <textarea rows="10" name="desc_ru" required class="form-control"></textarea>

</div>
<div style="padding-left: 40px;" class="form-group">
    <label>Oyun Tarixi</label>
    <input  type="datetime-local"  name="date"   class="form-control">

</div>

<div style="padding-left: 40px;" class="form-group">
    <a type="submit" href="<?=base_url('back/games');?>" class="btn btn-warning" >Geri qayit
    </a>
    <button type="submit" class=" btn-flat btn-success btn btn-right"  >Elave et</button>

</div>



</form>

</div>
</div>

<script>
    $(document).ready(function () {

        $('#mesajform').on('submit',function (e) {
            e.preventDefault();
            $.ajax({
                url:'<?php echo base_url(); ?>back/gameadded',
                method:'POST',
                data:new FormData(this),
                dataType:'json',
                contentType: false,
                cache:false,
                processData: false,
                success:function (result) {
                    if(result=="yes"){
                        swal({
                            title: "Oyun elave edildi",
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

