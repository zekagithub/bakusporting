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
                                    <li>
                                        <a href="#"><?php echo $this->lang->line('gallery');  ?></a>
                                        <ul class="tg-dropdown-menu">
                                            <li><a href="<?php echo base_url('photos');?>"><?php echo  $this->lang->line('foto');  ?>
                                                </a></li>
                                            <li><a href="<?php echo base_url('video');?>"><?php echo $this->lang->line('video');  ?></a></li>


                                        </ul>

                                    </li>
                                    <li <?php if ($this->uri->segment(1)=='contact'){ echo 'class=active';} ?>><a href="<?php echo base_url('contact');?>"><?php echo $this->lang->line('contact');  ?></a></li>
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
                        <h1><?php echo $this->lang->line('contact'); ?></h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="<?php echo base_url('home');?>"><?php echo $this->lang->line('ana'); ?></a></li>
                        <li class="active"><?php echo $this->lang->line('contact'); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <main id="tg-main" class="tg-main tg-paddingbottom-zero tg-haslayout">
        <section class="tg-main-section tg-paddingbottom-zero tg-haslayout">
            <div class="container">
                <div class="tg-section-name">
                    <h2><?php echo $this->lang->line('contact'); ?></h2>
                </div>
                <div class="col-sm-11 col-xs-11 pull-right">
                    <div class="row">
                        <div class="tg-contactus tg-haslayout">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="tg-contactinfobox">
                                        <div class="tg-section-heading"><h2><?php echo $this->lang->line('contactus'); ?></h2></div>
                                        <div class="tg-description">
                                            <p><?php echo $this->lang->line('yaran'); ?></p>
                                        </div>
                                        <ul class="tg-contactinfo">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <address><?php echo $melumat->site_adress  ?></address>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                                <span>+<?php echo $melumat->site_telefon1  ?>
</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                                <span>+<?php echo $melumat->site_telefon2  ?>
</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o"></i>
                                                <a href="<?php echo base_url('assets/front/');?>mailto:info@bakusporting.com"><?php echo $melumat->site_mail  ?></a>
                                            </li>

                                            <li>
                                                <i class="fa fa-facebook-f"></i>
                                                <a href="<?php echo $melumat->site_facebook  ?>" target="_blank">www.facebook.com/Baku-Sporting-Futbol-Klubu</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-instagram"></i>
                                                <a href="<?php echo $melumat->site_instagram  ?>" target="_blank">www.instagram.com/baku_sportinq_football_club/</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <?php echo $this->session->userdata('xeta');  ?>

                                    <form action="<?php echo base_url('message')?>"  method="post" class="tg-commentform help-form">
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="text" required="" placeholder="Adınız*" class="form-control" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" required="" placeholder="Email*" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="" placeholder="Telefon*" class="form-control" name="phone">
                                            </div>

                                            <div class="form-group">
                                                <textarea required placeholder="İsmarıcınız*" name="message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Göndər</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tg-mapcontent" class="tg-mapcontent owl-carousel">
                <div class="item">
                    <iframe src="<?php echo $melumat->site_map  ?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>



            </div>
        </section>
    </main>




<?php $this->load->view('front/include/footer');  ?>