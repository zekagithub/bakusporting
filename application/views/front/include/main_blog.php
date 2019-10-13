<section class="tg-main-section tg-haslayout">
    <div class="container">
        <div class="tg-section-name">
            <h2><?php  echo $this->lang->line('sonxeber'); ?></h2>
        </div>
        <div class="col-sm-11 col-xs-11 pull-right">
            <div class="row">
                <div class="tg-prohistory tg-border-top tg-haslayout">
                    <div class="row">
                       <?php $blogcek=blogcek();  foreach ($blogcek as $blog):  ?>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <article class="tg-post">
                                <figure class="tg-postimg">
                                    <img src="<?php echo base_url(); echo $blog->blog_image_esas;?>" style="width: 238px;height: 238px;" alt="<?php echo $blog->blog_title_az?>">
                                    <figcaption>
                                        <ul class="tg-postmetadata">
                                            <li><a><?php echo $blog->blog_date?></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                                <div class="tg-posttitle">
                                    <h3><a href="<?php

                                            echo base_url('blog/');echo $blog->blog_sef_az;

                                        ?>">
                                            <?php
                                           if( $this->session->userdata('lang')=='az'){
                                               echo $blog->blog_title_az;
                                           }elseif( $this->session->userdata('lang')=='en'){
                                               echo $blog->blog_title_en;
                                           }
                                           else{
                                               echo $blog->blog_title_ru;
                                           }
                                            ?>
                                        </a></h3>
                                </div>
                                <div class="tg-description">
                                    <p>
                                        <?php
                                        if( $this->session->userdata('lang')=='az'){
                                            echo substr($blog->blog_desc_az,0,200);
                                        }elseif( $this->session->userdata('lang')=='en'){
                                            echo substr($blog->blog_desc_en,0,200);
                                        }
                                        else{
                                            echo substr($blog->blog_desc_ru,0,200);
                                        }
                                        ?>
                                    </p>
                                </div>
                            </article>
                        </div>

                        <?php  endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
$a=blogrand();




    ?>
    <a href="<?php echo base_url('blog/');echo $a[0]->blog_sef_az  ?>">  <button type="button" style="margin-left: 250px;" class="btn btn-primary">DİGƏR  XƏBƏRLƏR</button></a>
</section>
