<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>


    <div class="box box-info">
        <div class="box-header with-border">
            <h3 style="padding-left: 40px" class="box-title">Xeber deyisdirme  sayfasi</h3>
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




            <form method="post" action="<?php echo base_url('back/blogupdate')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Xeber Basliq az</label>
                    <input type="text" name="title_az"  required class="form-control" value="<?php echo $melumat->blog_title_az ?>" >
  <input type="hidden"name="id" value="<?php echo $melumat->id; ?>" >
                </div>
                <div class="form-group">
                    <label>Xeber basliq_en</label>
                    <input type="text" name="title_en" required  class="form-control" value="<?php echo $melumat->blog_title_en ?>">

                </div>
                <div class="form-group">
                    <label>Xeber basliq_ru</label>
                    <input type="text" name="title_ru" required class="form-control" value="<?php echo $melumat->blog_title_ru ?>">

                </div>

                <div class="form-group">
                    <label>Xeber text_az</label>
                    <textarea rows="3" name="description_az" required class="ckeditor" class="form-control"><?php echo $melumat->blog_desc_az ?></textarea>

                </div>
                <div class="form-group">
                    <label>Xeber text_en</label>
                    <textarea rows="3" name="description_en" required class="ckeditor" class="form-control"><?php echo $melumat->blog_desc_en ?></textarea>

                </div>
                <div class="form-group">
                    <label>Xeber text_ru</label>
                    <textarea rows="3" name="description_ru" required class="ckeditor" class="form-control"><?php echo $melumat->blog_desc_ru?></textarea>

                </div>


                <div class="form-group">
                    <label>Xeber keywords_az</label>
                    <input type="text" name="keywords_az" required class="form-control" value="<?php echo $melumat->blog_keywords_az ?>">

                </div>
        </div>

    </div>
    <div class="a">
        <div class="form-group">
            <label>Xeber keywords_en</label>
            <input type="text" name="keywords_en" required  class="form-control" value="<?php echo $melumat->blog_keywords_en ?>">

        </div>
        <div class="form-group">
            <label>Xeber keywords_ru</label>
            <input type="text" name="keywords_ru" required class="form-control" value="<?php echo $melumat->blog_keywords_ru ?>">

        </div>
        <div class="form-group">
            <label>Xeber tags_az</label>
            <input type="text" name="tag_az" required  class="form-control" value="<?php echo $melumat->blog_tag_az ?>">

        </div>
        <div class="form-group">
            <label>Xeber tags_En</label>
            <input type="text" name="tag_en" required  class="form-control" value=" <?php echo $melumat->blog_tag_en ?>">

        </div>
        <div class="form-group">
            <label>Xeber tags_ru</label>
            <input type="text" name="tag_ru" required  class="form-control" value=" <?php echo $melumat->blog_tag_ru ?>">

        </div>

        <div class="form-group">
            <label>Xeber boyuk foto<span style="color: blue;"> sekilin olcusu <span style="color:red "> 1140x390</span></span></label>
            <input type="file" name="image" required  class="form-control">

        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"><span style="color: blue"> Movcud Sekil</span></label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->blog_image_esas); ?>" style="width: 70px;height:70px; ">

                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Xeber kicik foto<span style="color: blue;"> sekilin olcusu <span style="color:red "> 370x210</span></span></label>
            <input type="file" name="image2" required  class="form-control">

        </div>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"><span style="color: #0f6674">Movcud Sekil</span></label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->blog_image_kicik); ?>" style="width: 70px;height:70px; ">

                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Xeber video linki(<span style="color: blue">Vardirsa</span>)</label>
        <textarea rows="2" cols="70" name="video" class="form-control"><?php  echo $melumat->blog_video?></textarea>
        </div>
        <hr>
        <div class="form-group">
            <label>Xeber video ucun sekil(<span style="color: blue">Vardirsa</span>)</label>
            <input type="file" name="image_video"  class="form-control">

        </div>
        <?php if ($melumat->blog_video_image){ ?>
        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label"><span style="color: blue">Videonun Movcud Sekili</span></label>
                <div class="col-sm-7">
                    <img src="<?php echo base_url($melumat->blog_video_image); ?>" style="width: 70px;height:70px; ">

                </div>
            </div>
        </div>
        <?php } ?>
        <div class="form-group">
            <a type="submit" href="<?=base_url('back/blog');?>" class="btn btn-warning" >Imtina
            </a>
            <button type="submit" class=" btn-flat btn-success btn btn-right">Elave</button>

        </div>



        </form>

    </div>
    </div>

<?php $this->load->view('back/include/footer');?>