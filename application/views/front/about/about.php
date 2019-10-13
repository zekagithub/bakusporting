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
                                    <li <?php if ($this->uri->segment(1)=='about'){ echo 'class=active';} ?>><a href="#"><?php echo $this->lang->line('hak');  ?></a>
                                        <ul class="tg-dropdown-menu">
                                            <li  ><a href="<?php echo base_url('about');?>"><?php echo $this->lang->line('hak');  ?>
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
                        <h1><?php echo $this->lang->line('hak');?></h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="<?php echo base_url('assets/front/');?>index.html"><?php echo $this->lang->line('ana');?></a></li>
                        <li class="active"><?php echo $this->lang->line('hak');?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Banner End
    *************************************-->

    <section class="tg-main-section tg-haslayout">
        <div class="container">

            <div class="col-sm-11 col-xs-11 pull-right">
                <div class="row">
                    <div class="tg-latestresult tg-oursponsers">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tg-contentbox">
                                    <div class="tg-section-heading"><h2><?php echo $this->lang->line('a');?></h2></div>
                                    <div class="tg-description">
                                        <p><?php echo $this->lang->line('b');?> <br>
                                            <?php echo $this->lang->line('c');?><br>
                                            <?php echo $this->lang->line('d');?><br>

                                            <?php echo $this->lang->line('e');?><br>
                                            <?php echo $this->lang->line('f');?><br>
                                            <?php echo $this->lang->line('g');?><br>
                                            <?php echo $this->lang->line('h');?><br>
                                            <?php echo $this->lang->line('i');?><br>
                                            <?php echo $this->lang->line('j');?><br>
                                            <?php echo $this->lang->line('k');?><br>
                                            <?php echo $this->lang->line('l');?>
                                        </p>
                                    </div>
                                    <div class="tg-btnbox">
                                        <audio controls>
                                            <source src="<?php echo base_url('assets/front/');?>audio/himn.ogg" type="audio/ogg">
                                            <source src="<?php echo base_url('assets/front/');?>audio/himn.mp3" type="audio/mpeg">

                                        </audio>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div  >
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div >
                                                <div >
                                                    <h3><?php echo $this->lang->line('aa');?> </h3>


                                                    <div >

                                                        <strong><?php echo $this->lang->line('bb');?> </strong> <br>

                                                        <?php echo $this->lang->line('cc');?> <br>
                                                        <?php echo $this->lang->line('dd');?> <br>
                                                        <?php echo $this->lang->line('ee');?> <br>
                                                        <?php echo $this->lang->line('ff');?> <br>
                                                        <strong><?php echo $this->lang->line('gg');?> </strong><br>
                                                        <?php echo $this->lang->line('hh');?><br>
                                                        <?php echo $this->lang->line('ii');?> <br>
                                                        <?php echo $this->lang->line('jj');?> <br>
                                                        <?php echo $this->lang->line('kk');?> <br>

                                                        <strong><?php echo $this->lang->line('ll');?></strong><br>
                                                        <?php echo $this->lang->line('mm');?> <br>
                                                        <?php echo $this->lang->line('nn');?> <br>
                                                        <?php echo $this->lang->line('pp');?> <br>
                                                        <?php echo $this->lang->line('qq');?><br>


                                                        <strong><?php echo $this->lang->line('rr');?></strong><br>
                                                        <?php echo $this->lang->line('ss');?> <br>
                                                        <?php echo $this->lang->line('tt');?> <br>
                                                        <?php echo $this->lang->line('uu');?> <br>
                                                        <?php echo $this->lang->line('vv');?><br>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                About Us Start
        *************************************-->
        <section class="tg-main-section tg-haslayout">
            <div class="container">
                <div class="tg-section-name">
                    <h2>    <?php echo $this->lang->line('mis');?></h2>
                </div>

                <div class="col-sm-11 col-xs-11 pull-right">



                    <div class="tg-aboutussection">

                        <div class="row">
                            <div class="tg-description">
                                <p><?php echo $this->lang->line('yeni');?></p>
                               <p> <?php echo $this->lang->line('meq');?></p>
                                <p><strong>“Baku Sportinq”</strong>in <?php echo $this->lang->line('es');?></p>

                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">

                                <figure>
                                    <img src="<?php echo base_url('assets/front/');?>images/about.png" alt="image description">
                                </figure>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="tg-contentbox">

                                    <div class="tg-section-heading"><h2><?php echo $this->lang->line('cr');?></h2></div>
                                    <div class="tg-description">
                                        <p><?php echo $this->lang->line('ter');?> </p><p><?php echo $this->lang->line('et');?>  </p>

                                    </div>

                                </div>
                            </div>
                        </div><p> <?php echo $this->lang->line('qi');?>  </p>


                        <div class="tg-aboutussection">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <figure>
                                        <img src="<?php echo base_url('assets/front/');?>images/about2.png" alt="image description">
                                    </figure>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="tg-contentbox">
                                        <div class="tg-section-heading"><h2><?php echo $this->lang->line('ilk');?> </h2></div>
                                        <div class="tg-description">
                                            <p><?php echo $this->lang->line('bu');?> </p><?php echo $this->lang->line('lay');?><p> </p>
                                            <p><?php echo $this->lang->line('mehz');?> </p><?php echo $this->lang->line('ve');?>
                                        </div>

                                    </div>
                                </div>
                            </div><p> <?php echo $this->lang->line('hedef');?> </p>


                            <div class="tg-aboutussection">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <figure>
                                            <img src="<?php echo base_url('assets/front/');?>images/about3.png" alt="image description">
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="tg-contentbox">
                                            <div class="tg-section-heading"><h2> <?php echo $this->lang->line('qel');?> </h2></div>
                                            <div class="tg-description">
                                                <p> <?php echo $this->lang->line('su');?>  </p><p><?php echo $this->lang->line('uz');?>   </p>
                                                <?php echo $this->lang->line('ar');?>



                                            </div>

                                        </div>
                                    </div>
                                </div><p> <?php echo $this->lang->line('uzre');?> </p>

                                <div class="tg-aboutussection">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <figure>
                                                <img src="<?php echo base_url('assets/front/');?>images/about4.png" alt="image description">
                                            </figure>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="tg-contentbox">
                                                <div class="tg-section-heading"><h2><?php echo $this->lang->line('qad');?> </h2></div>
                                                <div class="tg-description">
                                                    <p><?php echo $this->lang->line('oz');?> <p><?php echo $this->lang->line('but');?></p>



                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tg-aboutussection">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <figure>
                                                    <img src="<?php echo base_url('assets/front/');?>images/about5.png" alt="image description">
                                                </figure>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="tg-contentbox">
                                                    <div class="tg-section-heading"><h2><?php echo $this->lang->line('yas');?>
                                                        </h2></div>
                                                    <div class="tg-description">
                                                        <p><?php echo $this->lang->line('on');?> <p><?php echo $this->lang->line('qeyd');?></p><?php echo $this->lang->line('her');?><p>
                                                        </p>



                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div></div></div></div></div>
                </div>
            </div>
        </section>

    </main>

<?php  $this->load->view('front/include/footer'); ?>