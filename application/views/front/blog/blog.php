<?php  $this->load->view('front/include/header1'); ?>


    <nav id="tg-nav" class="tg-nav brand-center">
                        <div class="navbar-header">




                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationm-mobile">
                                <i class="fa fa-bars"></i>
                            </button>

                            <strong class="tg-logo">

                                <a href="<?php echo base_url('home');?>"><img src="<?php echo base_url('assets/front/');  ?>svg/logo-01.svg" alt="image description"></a>
                            </strong>

                        </div>
                        <div id="tg-navigation" class="tg-navigation">
                            <div class="tg-colhalf">
                                <ul>

                                    <li class="active">
                                        <a href="<?php echo base_url('home');?>"><?php echo $this->lang->line('ana');  ?></a>

                                    </li>
                                    <li><a href="#"><?php echo $this->lang->line('hak');  ?></a>
                                        <ul class="tg-dropdown-menu">
                                            <li><a href="<?php echo base_url('about');?>"><?php echo $this->lang->line('hak');  ?>
                                                </a></li>
                                            <li><a href="<?php echo base_url('managment');?>"><?php echo $this->lang->line('menec');  ?></a></li>
                                            <li><a href="<?php echo base_url('marketing');?>"><?php echo $this->lang->line('market');  ?>
                                                </a></li>
                                            <li><a href="<?php echo base_url('infrastructure');?>"><?php echo $this->lang->line('infr');  ?>
                                                </a></li>
                                        </ul></li>
                                    <li><a href="#"><?php echo $this->lang->line('club');  ?></a>
                                        <ul class="tg-dropdown-menu">
                                            <li><a href="<?php echo base_url('trainers');?>"><?php echo $this->lang->line('mesq');  ?>
                                                </a></li>
                                            <li><a href="<?php echo base_url('players');?>"><?php echo $this->lang->line('players');  ?></a></li>
                                            <li><a href="<?php echo base_url('technical');?>"><?php echo $this->lang->line('tech');  ?>
                                                </a></li>

                                        </ul>


                                    </li>


                                </ul>
                            </div>
                            <div class="tg-colhalf">
                                <ul>
                                    <li><a href="#"><?php echo $this->lang->line('yaris');  ?></a>

                                        <ul class="tg-dropdown-menu">
                                            <li><a href="<?php echo base_url('tables');?>"><?php echo $this->lang->line('table');  ?>
                                                </a></li>
                                            <li><a href="<?php echo base_url('games');?>"><?php echo $this->lang->line('game');  ?></a></li>


                                        </ul>

                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('academy');?>"><?php echo $this->lang->line('academy');  ?></a>

                                    </li>
                                    <li>
                                        <a href="#"><?php echo $this->lang->line('gallery');  ?></a>
                                        <ul class="tg-dropdown-menu">
                                            <li><a href="<?php echo base_url('photos');?>"><?php echo  $this->lang->line('foto');  ?>
                                                </a></li>
                                            <li><a href="<?php echo base_url('video');?>"><?php echo $this->lang->line('video');  ?></a></li>


                                        </ul>

                                    </li>
                                    <li><a href="<?php echo base_url('contact');?>"><?php echo $this->lang->line('contact');  ?></a></li>
                                    <iframe src="https://freesecure.timeanddate.com/clock/i6wvnin1/n369/tlaz57/fs13/fcfff/tct/pct/tt0/tw0" frameborder="0" width="161" height="17" allowTransparency="true"></iframe>
                                </ul>
                            </div>
                        </div>

                    </nav>

                </div>
            </div>
        </div>

    </header>

    <div class="tg-banner tg-haslayout">
        <div class="tg-imglayer">
            <img src="<?php echo base_url('assets/front/');?>images/bg-pattran.png" alt="image desctription">
        </div>
        <div class="container">
            <div class="row">
                <div class="tg-banner-content tg-haslayout">
                    <div class="tg-pagetitle">
                        <h1>Blog / <?php echo $this->lang->line('news'); ?></h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="<?php echo base_url('home');?>"> <?php echo $this->lang->line('news'); ?></a></li>
                        <li class="active">Blog / <?php echo $this->lang->line('news'); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="tg-main-section tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns tg-haslayout">
                        <div class="col-sm-12 col-xs-12">
                            <figure class="tg-postimg tg-postimgdetail">
                                <img src="<?php echo base_url();echo $blog->blog_image_esas;?>"  style="width: 1140px;height: 390px"  alt="<?php echo $blog->blog_title_az; ?>">
                                <figcaption>
                                    <ul class="tg-postmetadata">
                                        <li><a><?php echo $blog->blog_date  ?></a></li>

                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-9 col-sm-8 col-xs-12 pull-left">
                            <div class="tg-postdetail">
                                <div class="tg-mathtextbox">
                                    <div class="tg-section-heading">
                                        <h2>
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

                                        </h2>
                                    </div>

                                    <div id="tg-matchdetailslider" class="tg-matchdetailslider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <figure><img src="<?php echo base_url();echo $blog->blog_image_kicik;?>" style="width: 370px;height: 208px" alt="<?php echo $blog->blog_title_az; ?>"></figure>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tg-section-heading">
                                        <h2>
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
                                        </h2>
                                    </div>
                                   <p>
                                       <?php
                                       if( $this->session->userdata('lang')=='az'){
                                           echo $blog->blog_desc_az;
                                       }elseif( $this->session->userdata('lang')=='en'){
                                           echo $blog->blog_desc_en;


                                       }
                                       else{
                                           echo $blog->blog_tdesc_ru;

                                       }
                                       ?>
                                   </p>

                                </div>

                                <div id="tg-playerslider" class="tg-playerslider tg-haslayout">
                                    <div class="swiper-wrapper">
                                        <?php  if($blog->blog_video): ?>
                                        <div class="swiper-slide">
                                            <div class="tg-videobox">
                                                <figure>
                                                    <img src="<?php echo base_url($blog->blog_video_image);?>"  style="width: 847px;height: 340px;" alt="image description">
                                                    <figcaption>
                                                        <a class="tg-playbtn" href="<?php  echo $blog->blog_video  ?>" data-rel="prettyPhoto[iframe]"></a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </div>
                                        <?php endif; ?>




                                    </div>
                                    <div class="tg-themebtnprev"><span class="fa fa-angle-left"></span></div>
                                    <div class="tg-themebtnnext"><span class="fa fa-angle-right"></span></div>
                                </div>



                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <aside id="tg-sidebar" class="tg-sidebar">
                                <div class="tg-widget tg-search">
                                    <form class="form-search">
                                        <fieldset>
                                            <input type="search" placeholder="Search Here" class="form-control">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="tg-widget tg-catagories-widget">
                                    <h3><?php echo $this->lang->line('sonxeber'); ?></h3>
                                    <ul>
                                        <?php $blogcek=blogcek(); foreach  ($blogcek as $b): ?>
                                        <li><a href="<?php echo base_url('blog/');echo $b->blog_sef_az?>"><em>
                                                    <?php
                                                    if( $this->session->userdata('lang')=='az'){
                                                        echo $b->blog_title_az;
                                                    }elseif( $this->session->userdata('lang')=='en'){
                                                        echo $b->blog_title_en;


                                                    }
                                                    else{
                                                        echo $b->blog_title_ru;

                                                    }
                                                    ?>

                                                </em><i></i></a></li>
                      <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="tg-widget">
                                    <h3>Son fotolar</h3>
                                    <div class="tg-slideshow-widget tg-haslayout">
                                        <div id="tg-slideshow-slider" class="tg-slideshow-slider tg-haslayout">
                                            <div class="swiper-wrapper">

                                                <?php $slide=slide(); foreach ($slide as $slide):?>
                                                <div class="swiper-slide">
                                                    <figure class="tg-postimg">
                                                        <img src="<?php echo base_url();echo $slide->blog_image_kicik;?>" alt="image description">
                                                    </figure>
                                                </div>
                                         <?php endforeach; ?>


                                            </div>
                                            <div class="swiper-pagination tg-pagination-slider"></div>
                                            <div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
                                            <div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-widget tg-tags-widget">
                                    <h3>popular tags</h3>
                                    <ul>
                                             <?php $tags=blog_tag();foreach ($tags as $tag) {
                                    $a=explode(',',$tag->blog_tag_az);

                                    foreach ($a as $b){

                                    ?>
                                        <li><a class="tg-btn" href="<?php echo base_url('blog/');echo $tag->blog_sef_az?>">
                                                <?php    echo $b;?>


                                            </a></li>








                                    <?php }};  ?>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
            Footer Start
    *************************************-->
<?php $this->load->view('front/include/footer'); ?>