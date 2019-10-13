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
                                    <li <?php if ($this->uri->segment(1)=='academy'){ echo 'class=active';} ?>>
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

    </header>    <div class="tg-banner tg-haslayout">
        <div class="tg-imglayer">
            <img src="<?php echo base_url('assets/front/');?>images/bg-pattran.png" alt="image desctription">
        </div>
        <div class="container">
            <div class="row">
                <div class="tg-banner-content tg-haslayout">
                    <div class="tg-pagetitle">
                        <h1><?php echo $this->lang->line('academy'); ?></h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="<?php echo base_url('assets/front/');?>index.html"><?php echo $this->lang->line('ana'); ?></a></li>
                        <li class="active"><?php echo $this->lang->line('academy'); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">

            <div class="tg-section-heading">

                <h2>U-10 və U-12</h2>
            </div>
            <div class="row">
                <div class="th-products">
                    <div class="row">
                        <?php
                        $academy=academy_player_task_id();
                    foreach ($academy as $academy):
                        ?>

                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="tg-product">
                                <figure class="tg-productimg">
                                    <img src="<?php echo base_url();echo $academy->academy_player_image;?>" style="width: 136px;height: 210px;" alt="image description">
                                    <figcaption>

                                    </figcaption>
                                </figure>
                                <div class="tg-productinfo">
                                    <a class="tg-theme-tag" href="<?php echo base_url('assets/front/');?>#">
                                        <?php
                                        if( $this->session->userdata('lang')=='az'){
                                            echo $academy->player_task_name_az;
                                        }elseif( $this->session->userdata('lang')=='en'){
                                            echo $academy->player_task_name_en;
                                        }
                                        else{
                                            echo $academy->player_task_name_ru;                                        }
                                        ?>

                                    </a>
                                    <div class="tg-producttitle"><h2><a href="<?php echo base_url('assets/front/');?>#">
                                                <?php
                                                if( $this->session->userdata('lang')=='az'){
                                                    echo $academy->academy_player_name_az;
                                                }elseif( $this->session->userdata('lang')=='en'){
                                                    echo $academy->academy_player_name_en;


                                                }
                                                else{
                                                    echo $academy->academy_player_name_ru;

                                                }
                                                ?>

                                            </a></h2></div>
                                    <div class="tg-productprice"><h3>BAKU SPORTİNG KLUBU</h3></div>

                                </div>
                            </div>
                        </div>

<?php  endforeach;  ?>

                    </div>

                </div>

            </div>

        </div>

    </main>

<?php $this->load->view('front/include/footer');  ?>