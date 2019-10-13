<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Xeber elave etme  sehifesi</h3>
        </div>
        <style>
  div label{
      color: #000000;
      font-size:17px;

               }
           div.a{
                padding-left: 40px;
            }
        </style>
        <div style="padding-left: 40px;" class="box-body">
         <form method="post" action="<?php echo base_url('back/blogadded')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Xeber basliq az</label>
                    <input type="text" name="title_az"  class="form-control">

                </div>
                <div class="form-group">
                    <label>Xeber basliq_En</label>
                    <input type="text" name="title_en"  class="form-control">

                </div>
             <div class="form-group">
                    <label>Xeber basliq_Ru</label>
                    <input type="text" name="title_ru"  class="form-control">

                </div>
                <div class="form-group">
                    <label>Xeber text_az</label>
                    <textarea rows="3" name="description_az" class="ckeditor" class="form-control"></textarea>

                </div>
                <div class="form-group">
                    <label>Xeber text_En</label>
                    <textarea rows="3" name="description_en" class="ckeditor" class="form-control"></textarea>
                </div>
             <div class="form-group">
                    <label>Xeber text_Ru</label>
                    <textarea rows="3" name="description_ru" class="ckeditor" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Xeber keywords_az</label>
                    <input type="text" name="keywords_az"  class="form-control">

                </div>
        </div>

    </div>
<div class="a">
    <div class="form-group">
        <label>Xeber keywords_en</label>
        <input type="text" name="keywords_en"  class="form-control">

    </div>
    <div class="form-group">
        <label>Xeber keywords_ru</label>
        <input type="text" name="keywords_ru"  class="form-control">

    </div>
    <div class="form-group">
        <label>Xeber tags_az<span><small style="color: blue">Taglari vergulle ayirin</small></span></label>
        <input type="text" name="tag_az"  class="form-control">

    </div>
    <div class="form-group">
        <label>Xeber tags_En<span><small style="color: blue">Taglari vergulle ayirin</small></span></label>
        <input type="text" name="tag_en"  class="form-control">

    </div>
    <div class="form-group">
        <label>Xeber tags_Ru<span><small style="color: blue">Taglari vergulle ayirin</small></span></label>
        <input type="text" name="tag_ru"  class="form-control">

    </div>

    <div class="form-group">
        <label>Xeber esas foto <span style="color: blue;">sekilin olcusu <span style="color:red ">1140x390</span></span></label>
        <input type="file" name="image"  class="form-control">

    </div>
    <div class="form-group">
        <label>Xeber kicik foto <span style="color: blue;">sekilin olcusu <span style="color:red ">370x210</span></span></label>
        <input type="file" name="image2"  class="form-control">

    </div>
    <div class="form-group">
        <label>Xeber video linki(<span style="color: blue;">Vardirsa</span>)</label>
        <input type="text" name="video"  class="form-control">

    </div>
    <div class="form-group">
        <label>Xeber video ucun sekil(<span style="color: blue;">Vardirsa</span>)</label>
        <input type="file" name="image_video"  class="form-control">

    </div>
    <div class="form-group">
        <a type="submit" href="<?=base_url('back/blog');?>" class="btn btn-warning" >Imtina
        </a>
        <button type="submit" class=" btn-flat btn-success btn btn-right">Elave</button>

    </div>



        </form>

    </div>
</div>



<?php $this->load->view('back/include/footer');?>