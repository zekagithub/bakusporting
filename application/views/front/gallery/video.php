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

                                    <li>
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
                                    <li <?php if ($this->uri->segment(1)=='video'){ echo 'class=active';} ?>>
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
                        <h1><?php echo $this->lang->line('video'); ?></h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="<?php echo base_url('home');?>"><?php echo $this->lang->line('ana'); ?></a></li>
                        <li class="active"><?php echo $this->lang->line('gallery'); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <main id="tg-main" class="tg-main tg-haslayout">

        <section class="tg-main-section tg-soccermedia tg-haslayout">
            <div class="container">
                <div class="tg-section-heading">

                    <h2><?php echo $this->lang->line('video'); ?></h2>
                </div>
                <div class="col-sm-12 col-xs-12 pull-right">
                    <div class="row">

                        <div id="filter-masonry" class="tg-soccermedia-content tg-soccermedia-content tg-haslayout">

<?php foreach ($video as $video):  ?>

                            <div class="masonry-grid championship">
                                <div class="tg-project">
                                    <figure class="tg-postimg">
                                        <a data-rel="prettyPhoto[iframe]" href="<?php echo $video->video_link  ?>" class="tg-playbtn" rel="prettyPhoto[iframe]"></a>
                                        <img src="<?php echo base_url();echo $video->video_image?>" style="width: 326px;height: 217px;"  alt="image description" class="mCS_img_loaded">
                                        <figcaption>
                                            <h3>
                                                <?php
                                                if( $this->session->userdata('lang')=='az'){
                                                    echo $video->video_title_az;
                                                }elseif( $this->session->userdata('lang')=='en'){
                                                    echo $video->video_title_en;


                                                }
                                                else{
                                                    echo $video->video_title_ru;

                                                }
                                                ?>
                                            </h3>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

<?php   endforeach; ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>




    </main>
<?php $this->load->view('front/include/footer');  ?>