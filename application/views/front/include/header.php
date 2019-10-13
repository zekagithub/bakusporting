<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Baku Sporting | <?php echo $head; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/transitions.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/customScrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/main.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/color.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/');?>css/responsive.css">
    <script src="<?php echo base_url('assets/front/');  ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/front/');?>images/favicon.png">
</head>
<body>

<!--************************************
        Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <!--************************************
            Mobile Menu Start
    *************************************-->
    <div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
        <span id="tg-close" class="tg-close fa fa-close"></span>
        <div class="tg-colhalf">

            <ul>
                <li class="active ">
                    <a href="<?php echo base_url('home')?>"><?php  echo $this->lang->line('ana') ?></a>

                </li>
                <li class="menu-item-has-children">
                    <a href=""><?php  echo $this->lang->line('hak') ?></a>
                    <ul class="tg-dropdown-menu">
                        <li><a href="<?php echo base_url('about')?>"><?php  echo $this->lang->line('hak') ?>
                            </a></li>
                        <li><a href="<?php echo base_url('managment')?>"><?php  echo $this->lang->line('menec') ?></a></li>
                        <li><a href="<?php echo base_url('marketing')?>"><?php  echo $this->lang->line('market') ?>
                            </a></li>
                        <li><a href="<?php echo base_url('infrastructure')?>"><?php  echo $this->lang->line('infr') ?>
                            </a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#"><?php  echo $this->lang->line('club') ?></a>
                    <ul class="tg-dropdown-menu">
                        <li><a href="<?php echo base_url('trainers')?>"><?php  echo $this->lang->line('mesq') ?>
                            </a></li>
                        <li><a href="<?php echo base_url('players')?>"><?php  echo $this->lang->line('players') ?></a></li>
                        <li><a href="<?php echo base_url('technical')?>"><?php  echo $this->lang->line('tech') ?>
                            </a></li>

                    </ul>
                </li>

            </ul>
        </div>
        <div class="tg-colhalf">
            <ul>
                <li class="menu-item-has-children">
                    <a href="#"><?php  echo $this->lang->line('yaris') ?></a>
                    <ul class="tg-dropdown-menu">
                        <li><a href="<?php echo base_url('tables')?>"><?php  echo $this->lang->line('table') ?>
                            </a></li>
                        <li><a href="<?php echo base_url('games')?>"><?php  echo $this->lang->line('game') ?></a></li>


                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('academy')?>"><?php  echo $this->lang->line('academy') ?></a>

                </li>
                <li class="menu-item-has-children">
                    <a href="#"><?php  echo $this->lang->line('gallery') ?></a>
                    <ul class="tg-dropdown-menu">
                        <li><a href="<?php echo base_url('photos')?>"><?php  echo $this->lang->line('foto') ?>
                            </a></li>
                        <li><a href="<?php echo base_url('video')?>"><?php  echo $this->lang->line('video') ?></a></li>


                    </ul>

                </li>
                <li><a href="<?php echo base_url('contact')?>"><?php  echo $this->lang->line('contact') ?></a></li>

            </ul>
        </div>
    </div>


    <!--************************************
            Mobile Menu End
    *************************************-->
    <!--************************************
            Header Start
    *************************************-->
    <header id="tg-header" class="tg-header tg-haslayout">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="tg-topbar tg-haslayout">

                        <nav id="tg-topaddnav" class="tg-topaddnav">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-addnavigationm-mobile">
                                    <i class="fa fa-arrow-right"></i>

                                </button>
                            </div>
                            <div id="tg-addnavigationm-mobile" class="tg-addnavigationm-mobile collapse navbar-collapse">

                                <div class="tg-colhalf pull-right">

                                    <nav class="tg-addnav">

                                        <ul>


                                            <li>

                                                <a id="tg-btn-search" href="<?php echo base_url('assets/front/');?>javascript:void(0)"><i class="fa fa-envelope"></i><?= $melumat->site_mail;?></a>
                                            </li>

                                        </ul>

                                    </nav>

                                </div>

                                <div class="tg-colhalf">

                                    <ul class="tg-socialicons">


                                        <?php if($this->session->userdata('lang')=='en'): ?>


                                            <li>
                                                <a href="<?php echo base_url('front/dildeyisdir/az');?>">

                                                    <i class="fa fa-dribbble"></i> AZ
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('front/dildeyisdir/ru');?>">

                                                    <i class="fa fa-dribbble"></i> RU
                                                </a>
                                            </li>




                                        <?php endif; ?>
                                        <?php if($this->session->userdata('lang')=='az'): ?>

                                            <li>

                                                <a href="<?php echo base_url('front/dildeyisdir/en');?>">
                                                    <i class="fa fa-dribbble"></i> ENG
                                                </a>

                                            </li>
                                            <li>

                                                <a href="<?php echo base_url('front/dildeyisdir/ru');?>">
                                                    <i class="fa fa-dribbble"></i> RU
                                                </a>

                                            </li>
                                        <?php endif; ?>
                                        <?php if($this->session->userdata('lang')=='ru'): ?>

                                            <li>

                                                <a href="<?php echo base_url('front/dildeyisdir/en');?>">
                                                    <i class="fa fa-dribbble"></i> ENG
                                                </a>

                                            </li>
                                            <li>

                                                <a href="<?php echo base_url('front/dildeyisdir/az');?>">
                                                    <i class="fa fa-dribbble"></i> AZ
                                                </a>

                                            </li>
                                        <?php endif; ?>


                                        <li>
                                            <a href="<?= $melumat->site_facebook;?>" target="_blank">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= $melumat->site_instagram;?>" target="_blank">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>



                                    </ul>
                                </div>

                            </div>
                        </nav>

                    </div>

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

                                    <li <?php if ($this->uri->segment(1)=='home') echo "class=active"; ?> >
                                        <a href="<?php echo base_url('home');?>"><?php echo $this->lang->line('ana');  ?></a>

                                    </li>
                                    <li ><a href="#"><?php echo $this->lang->line('hak');  ?></a>
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