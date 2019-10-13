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
                                    <li <?php if ($this->uri->segment(1)=='games'){ echo 'class=active';} ?>><a href="#"><?php echo $this->lang->line('yaris');  ?></a>

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
                        <h1><?php echo $this->lang->line('game'); ?></h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="<?php echo base_url('home');?>"><?php echo $this->lang->line('ana'); ?></a></li>
                        <li class="active"><?php echo $this->lang->line('yaris'); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="tg-section-name">
                <h2><?php echo $this->lang->line('game'); ?></h2>
            </div>
            <div class="col-sm-11 col-xs-11 pull-right">
                <div class="row">
                    <div class="tg-latestresult">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tg-contentbox">
                                    <div class="tg-section-heading"><h2>Baku Sporting</h2></div>
                                    <div class="tg-description">
                                        <p><?php echo $this->lang->line('meq'); ?></p>
                                    </div>
                                    <div class="tg-btnbox">
                                        <a class="tg-btn" href="<?php echo base_url('');?>"><span><?php echo $this->lang->line('yaris'); ?></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div id="tg-upcomingmatch-slider" class="tg-upcomingmatch-slider tg-upcomingmatch">
                                    <div class="swiper-wrapper">
                                        <?php  foreach ($game as $game ):  ?>
                                        <div class="swiper-slide">
                                            <div class="tg-match">
                                                <div class="tg-matchdetail">
                                                    <div class="tg-box">
                                                        <strong class="tg-teamlogo">
                                                            <img src="<?php echo base_url('assets/front/');?>images/team-logo/logo-l-02.png" alt="image description">
                                                        </strong>
                                                        <h3><?php echo $game->club_title_home ?></h3>
                                                    </div>
                                                    <div class="tg-box">
                                                        <h3><?php echo $game->score ?></h3>
                                                    </div>
                                                    <div class="tg-box">
                                                        <strong class="tg-teamlogo">
                                                            <img src="<?php echo base_url('assets/front/');?>images/team-logo/logo-l-02.png" alt="image description">
                                                        </strong>
                                                        <h3><?php echo $game->club_title_guest ?></h3>
                                                    </div>
                                                </div>
                                                <div class="tg-matchhover">
                                                    <address> <?php echo $game->date."  ".$game->stadium; ?>
                                                    </address>
                                                    <div class="tg-btnbox">
                                                        <a class="tg-btn" href="<?php echo base_url('tables'); ?>"><span><?php echo $this->lang->line('yaris'); ?></span></a>
                                                        <a class="tg-btn" href="#"><span>book my ticket</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php endforeach;  ?>
                                    </div>
                                    <div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
                                    <div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('front/include/footer');?>