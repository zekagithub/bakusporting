<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Baku Sporting |  <?php echo $head; ?></title>
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

    <link href="<?php echo base_url('assets/front/');?>http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">


    <script src="<?php echo base_url('assets/front/');?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/front/');?>images/favicon.png">
    <style>
        html {
            font-family: "roboto", helvetica;
            position: relative;
            height: 100%;
            font-size: 100%;
            line-height: 1.5;
            color: #444;
        }

        h2 {
            margin: 1.75em 0 0;
            font-size: 5vw;
        }

        h3 { font-size: 1.3em; }

        .v-center {
            height: 100vh;
            width: 100%;
            display: table;
            position: relative;
            text-align: center;
        }

        .v-center > div {
            display: table-cell;
            vertical-align: middle;
            position: relative;
            top: -10%;
        }

        .btn {
            font-size: 3vmin;
            padding: 0.75em 1.5em;
            background-color: #fff;
            border: 1px solid #bbb;
            color: #333;
            text-decoration: none;
            display: inline;
            border-radius: 4px;
            -webkit-transition: background-color 1s ease;
            -moz-transition: background-color 1s ease;
            transition: background-color 1s ease;
        }

        .btn:hover {
            background-color: #ddd;
            -webkit-transition: background-color 1s ease;
            -moz-transition: background-color 1s ease;
            transition: background-color 1s ease;
        }

        .btn-small {
            padding: .75em 1em;
            font-size: 0.8em;
        }

        .modal-box {
            display: none;
            position: absolute;
            z-index: 1000;
            width: 60%;
            background: white;
            border-bottom: 1px solid #aaa;
            border-radius: 4px;
            box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(0, 0, 0, 0.1);
            background-clip: padding-box;
        }
        @media (min-width: 32em) {

            .modal-box { width: 60%; }
        }

        .modal-box header,
        .modal-box .modal-header {
            padding: 1.25em 1.5em;
            border-bottom: 0px solid #ddd;
        }

        .modal-box header h3,
        .modal-box header h4,
        .modal-box .modal-header h3,
        .modal-box .modal-header h4 { margin: 0; }

        .modal-box .modal-body { padding: 0em 1.5em; }

        .modal-box footer,
        .modal-box .modal-footer {
            padding: 1em;
            border-top: 0px solid #ddd;
            background: rgba(0, 0, 0, 0.02);
            text-align: right;
        }

        .modal-overlay {
            opacity: 0;
            filter: alpha(opacity=0);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 900;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3) !important;
        }

        a.close {
            line-height: 1;
            font-size: 1.5em;
            position: absolute;
            top: 5%;
            right: 2%;
            text-decoration: none;
            color: #bbb;
        }

        a.close:hover {
            color: #222;
            -webkit-transition: color 1s ease;
            -moz-transition: color 1s ease;
            transition: color 1s ease;
        }
    </style>
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
                    <a href="#"><?php  echo $this->lang->line('hak') ?></a>
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

                                    <li>
                                        <a href="<?php echo base_url('home');?>"><?php echo $this->lang->line('ana');  ?></a>

                                    </li>
                                    <li <?php if ($this->uri->segment(1)=='players'){ echo 'class=active';} ?>><a href="#"><?php echo $this->lang->line('hak');  ?></a>
                                        <ul class="tg-dropdown-menu">
                                            <li><a href="<?php echo base_url('about');?>"><?php echo $this->lang->line('hak');  ?>
                                                </a></li>
                                            <li><a href="<?php echo base_url('managment');?>"><?php echo $this->lang->line('menec');  ?></a></li>
                                            <li><a href="<?php echo base_url('marketing');?>"><?php echo $this->lang->line('market');  ?>
                                                </a></li>
                                            <li><a href="<?php echo base_url('infrastructure');?>"><?php echo $this->lang->line('infr');  ?>
                                                </a></li>
                                        </ul></li>
                                    <li <?php if ($this->uri->segment(1)=='players'){ echo 'class=active';} ?>><a href="#"><?php echo $this->lang->line('club');  ?></a>
                                        <ul class="tg-dropdown-menu">
                                            <li><a href="<?php echo base_url('trainers');?>"><?php echo $this->lang->line('mesq');  ?>
                                                </a></li>
                                            <li ><a href="<?php echo base_url('players');?>"><?php echo $this->lang->line('players');  ?></a></li>
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
                        <h1><?php echo $this->lang->line('players'); ?></h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="<?php echo base_url('assets/front/');?>index.html"><?php echo $this->lang->line('ana'); ?></a></li>
                        <li class="active"><?php echo $this->lang->line('club'); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">

            <div class="tg-section-heading">

                <h2><?php echo $this->lang->line('hucum'); ?></h2>
            </div>
            <div class="row">
                <div class="th-products">
                    <div class="row">
                        <!-- Start  Hücümçu -->
                        <!-- hucum  stratttt-->

                        <?php $player=play(1);

                        $say=1;

                        foreach ($player as $player):
                            ?>


                        <div id="mtext-m-<?php echo $say++; ?>" style="display: none;">

                            <div class="col-md-3 col-xs-6">
                                <a class="tg-theme-tag" href="<?php echo base_url('assets/front/');?>#"><?php echo $this->lang->line('hucum');?></a>
                                <div class="tg-producttitle"><h2><a href="<?php echo base_url('assets/front/');?>#"><?php echo $player->player_name_az ?></a></h2></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('boy');?>: <?php echo $player->player_height ?> sm</h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('ceki');?>: <?php echo $player->player_weight ?> kq</h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('yasq');?>: <?php echo $player->age ?> </h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('say');?>: <?php echo $player->goal_number ?></h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('asist');?>: <?php echo $player->asiste ?></h3></div>

                            </div>
                            <figure>

                                <img src="<?php echo base_url();echo $player->player_image;?>" alt="">

                            </figure>

                        </div>
                        <?php  endforeach;  ?>



                        <!-- End Hücümçu -->
                        <!-- Start MÜDAFİYƏÇİ -->

                        <?php $player=play(3);

                        $say=100;
                        foreach ($player as $player):
                            ?>

                        <div id="mtext-m-<?php echo $say++; ?>" style="display: none;">

                            <div class="col-md-3 col-xs-6">
                                <a class="tg-theme-tag" href="<?php echo base_url('assets/front/');?>#"><?php echo $this->lang->line('mf');?></a>
                                <div class="tg-producttitle"><h2><a href="<?php echo base_url('assets/front/');?>#"><?php echo $player->player_name_az ?></a></h2></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('boy');?>: <?php echo $player->player_height ?> sm</h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('ceki');?>: <?php echo $player->player_weight ?> kq</h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('yasq');?>: <?php echo $player->age ?> </h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('say');?>: <?php echo $player->goal_number ?></h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('asist');?>: <?php echo $player->asiste ?></h3></div>

                            </div>
                            <figure>

                                <img src="<?php echo base_url();echo $player->player_image;?>" alt="<?php echo $player->player_name_az ?>">

                            </figure>

                        </div>

                        <?php  endforeach;  ?>


                        <!-- End MÜDAFİYƏÇİ -->

                        <!-- Start Yarım MÜDAFİYƏÇİ -->
                        <?php $player=play(2);

                        $say=300;

                        foreach ($player as $player):
                        ?>

                        <div id="mtext-m-<?php echo $say++; ?>" style="display: none;">

                            <div class="col-md-3 col-xs-6">
                                <a class="tg-theme-tag" href="<?php echo base_url('assets/front/');?>#"><?php echo $this->lang->line('ym');?></a>
                                <div class="tg-producttitle"><h2><a href="<?php echo base_url('assets/front/');?>#"><?php echo $player->player_name_az ?></a></h2></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('boy');?>: <?php echo $player->player_height ?> sm</h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('ceki');?>: <?php echo $player->player_weight ?> kq</h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('yasq');?>: <?php echo $player->age ?> </h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('say');?>: <?php echo $player->goal_number ?></h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('asist');?>: <?php echo $player->asiste ?></h3></div>

                            </div>
                            <figure>

                                <img src="<?php echo base_url();echo $player->player_image;?>" alt="<?php echo $player->player_name_az ?>">

                            </figure>

                        </div>

<?php  endforeach;  ?>
                        <!-- End Yarım MÜDAFİYƏÇİ -->
                        <!-- Start Qapıçı -->
                        <?php $player=play(4);

                        $say=500;

                        foreach ($player as $player):
                            ?>

                        <div id="mtext-q-<?php echo $say++;  ?>" style="display: none;">

                            <div class="col-md-3 col-xs-6">
                                <a class="tg-theme-tag" href="<?php echo base_url('assets/front/');?>#"><?php echo $this->lang->line('qc');?></a>
                                <div class="tg-producttitle"><h2><a href="<?php echo base_url('assets/front/');?>#"><?php echo $player->player_name_az ?></a></h2></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('boy');?>: <?php echo $player->player_height ?> sm</h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('ceki');?>: <?php echo $player->player_weight ?> kq</h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('yasq');?>: <?php echo $player->age ?> </h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('say');?>: <?php echo $player->goal_number ?></h3></div>
                                <div class="tg-productprice"><h3><?php echo $this->lang->line('asist');?>: <?php echo $player->asiste ?></h3></div>

                            </div>
                            <figure>

                                <img src="<?php echo base_url();echo $player->player_image;?>" alt="<?php echo $player->player_name_az ?>">

                            </figure>

                        </div>
                        <?php  endforeach;  ?>

                        <!-- End Yarım MÜDAFİYƏÇİ -->

                        <!-- hucum  stratttt-->

                        <?php $player=play(1);

     $say=1;

                        foreach ($player as $player):  ?>

                        <div class="col-md-2 col-sm-6 col-xs-12">

                            <div class="tg-product">



                                <figure class="tg-productimg">



                                    <a class="but_transp mtext" data-id="m-<?php echo $say++;  ?>" data-title="Baku Sporting Club"
                                       data-toggle="modal" data-target="#myModal" href="<?php echo base_url('assets/front/');?>index.html#">

                                        <img src="<?php echo base_url();echo $player->player_image; ?>" alt="<?php echo  $player->player_name_az; ?>">

                                        <figcaption>


                                            <i class="fa fa-image fa-3x"></i>

                                        </figcaption></a>
                                </figure>

                                <div class="tg-productinfo">
                                    <a class="tg-theme-tag" href="<?php echo base_url('assets/front/');?>#"><?php echo $this->lang->line('hucum');?></a>
                                    <div class="tg-producttitle"><h2><a href="<?php echo base_url('assets/front/');?>#"><?php echo  $player->player_name_az; ?></a></h2></div>
                                    <div class="tg-productprice"><h3>BAKU SPORTİNG KLUBU</h3></div>

                                </div>
                            </div>
                        </div>
                        <?php endforeach;  ?>
                        <!-- hucum  bitisi-->



                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="tg-section-heading">

                <h2><?php echo $this->lang->line('mf');?></h2>
            </div>
            <div class="row">
                <div class="th-products">
                    <div class="row">


                        <!-- mudafie  stratttt-->

                        <?php $player=play(3);

$say=100;

                        foreach ($player as $player):  ?>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="tg-product">
                                <figure class="tg-productimg">
                                    <a class="but_transp mtext" data-id="m-<?php echo $say++; ?>" data-title="Baku Sporting Club"
                                       data-toggle="modal" data-target="#myModal" href="<?php echo base_url('assets/front/');?>index.html#">
                                        <img src="<?php echo base_url();echo $player->player_image; ?>" alt="<?php echo  $player->player_name_az; ?>">
                                        <figcaption>
                                            <i class="fa fa-image fa-3x"></i>
                                        </figcaption></a>
                                </figure>
                                <div class="tg-productinfo">
                                    <a class="tg-theme-tag" href="<?php echo base_url('assets/front/');?>#"><?php echo $this->lang->line('mf');?></a>
                                    <div class="tg-producttitle"><h2><a href="<?php echo base_url('assets/front/');?>#"><?php echo  $player->player_name_az; ?></a></h2></div>
                                    <div class="tg-productprice"><h3>BAKU SPORTİNG KLUBU</h3></div>

                                </div>
                            </div>
                        </div>
                        <?php endforeach;  ?>

                        <!-- mudafie  bitisi-->

                    </div>

                </div>

                <div class="container">

                    <div class="tg-section-heading">

                        <h2><?php echo $this->lang->line('ym');?></h2>
                    </div>


                    <div class="row">
                        <div class="th-products">
                            <div class="row">

                                <!-- yarim mudafie  stratttt-->

                                <?php $player=play(2);

  $say=300;

                                foreach ($player as $player):  ?>

                                <div class="col-md-2 col-sm-6 col-xs-12">
                                    <div class="tg-product">
                                        <figure class="tg-productimg">
                                            <a class="but_transp mtext" data-id="m-<?php echo $say++; ?>" data-title="Baku Sporting Club"
                                               data-toggle="modal" data-target="#myModal" href="<?php echo base_url('assets/front/');?>index.html#">
                                                <img src="<?php echo base_url();echo $player->player_image; ?>" alt="<?php echo  $player->player_name_az; ?>">
                                                <figcaption>
                                                    <i class="fa fa-image fa-3x"></i>
                                                </figcaption></a>
                                        </figure>
                                        <div class="tg-productinfo">
                                            <a class="tg-theme-tag" href="<?php echo base_url('assets/front/');?>#"><?php echo $this->lang->line('ym');?></a>
                                            <div class="tg-producttitle"><h2><a href="<?php echo base_url('assets/front/');?>#"><?php echo  $player->player_name_az; ?></a></h2></div>
                                            <div class="tg-productprice"><h3>BAKU SPORTİNG KLUBU</h3></div>

                                        </div>
                                    </div>
                                </div>

                                <?php endforeach;  ?>

                                <!--yarim mudafie  bitisi-->


                            </div>

                        </div>


                        <div class="container">

                            <div class="tg-section-heading">

                                <h2><?php echo $this->lang->line('qc');?></h2>
                            </div>
                            <div class="row">
                                <div class="th-products">
                                    <div class="row">
                                        <!-- qapici stratttt-->

                                        <?php $player=play(4);

                                   $say=500;

                                        foreach ($player as $player):  ?>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <div class="tg-product">
                                                <figure class="tg-productimg">
                                                    <a class="but_transp mtext" data-id="q-<?php echo $say++;  ?>" data-title="Baku Sporting Club"
                                                       data-toggle="modal" data-target="#myModal" href="<?php echo base_url('assets/front/');?>index.html#">
                                                        <img src="<?php echo base_url();echo $player->player_image; ?>" alt="<?php echo  $player->player_name_az; ?>">
                                                        <figcaption>
                                                            <i class="fa fa-image fa-3x"></i>
                                                        </figcaption></a>
                                                </figure>
                                                <div class="tg-productinfo">
                                                    <a class="tg-theme-tag" href="<?php echo base_url('assets/front/');?>#"><?php echo $this->lang->line('qc');?></a>
                                                    <div class="tg-producttitle"><h2><a href="<?php echo base_url('assets/front/');?>#"><?php echo  $player->player_name_az; ?></a></h2></div>
                                                    <div class="tg-productprice"><h3>BAKU SPORTİNG KLUBU</h3></div>

                                                </div>
                                            </div>
                                        </div>

                                        <?php endforeach;  ?>

                                        <!--qapici  bitisi-->



                                    </div>




    </main>

    <footer id="tg-footer" class="tg-footer tg-haslayout">
        <div class="tg-haslayout tg-footerinfobox">
            <div class="tg-bgboxone"></div>
            <div class="tg-bgboxtwo"></div>
            <div class="tg-footerinfo">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="tg-footercol">
                                <div class="tg-posttitle">
                                    <h3>abunə olun</h3>
                                </div>
                                <div class="tg-description">
                                    <p>Baku Sporting klubunun daim maraqlı futbol yeniliklərini izləyin </p>
                                </div>
                                <form class="tg-form-newsletter">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <button class="tg-btn" type="submit">bİzə qoşul</button>
                                    </fieldset>
                                </form>
                                <div class="tg-posttitle">
                                    <h3>popular tags</h3>
                                </div>
                                <div class="tg-tags">
                                    <a class="tg-tag" href="<?php echo base_url('assets/front/');?>#">futbol</a>
                                    <a class="tg-tag" href="<?php echo base_url('assets/front/');?>#">nəticə</a>
                                    <a class="tg-tag" href="<?php echo base_url('assets/front/');?>#">klub</a>
                                    <a class="tg-tag" href="<?php echo base_url('assets/front/');?>#">komanda</a>
                                    <a class="tg-tag" href="<?php echo base_url('assets/front/');?>#">oyun</a>
                                    <a class="tg-tag" href="<?php echo base_url('assets/front/');?>#">sport</a>
                                    <a class="tg-tag" href="<?php echo base_url('assets/front/');?>#">heyət</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="tg-footercol">
                                <div class="tg-posttitle">
                                    <h3>Bİz sosİal şəbəkədə</h3>
                                </div>
                                <div class="tg-toprated">
                                    <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous" src="<?php echo base_url('assets/front/');?>https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v4.0&appId=545610878883979&autoLogAppEvents=1"></script>
                                    <div class="fb-page" data-href="<?php echo base_url('assets/front/');?>https://www.facebook.com/Baku-Sporting-Futbol-Klubu-199823980895790/" data-tabs="timeline" data-width="300" data-height="340" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Baku-Sporting-Futbol-Klubu-199823980895790/" class="fb-xfbml-parse-ignore"><a href="<?php echo base_url('assets/front/');?>https://www.facebook.com/Baku-Sporting-Futbol-Klubu-199823980895790/">Baku Sporting Futbol Klubu</a></blockquote></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="tg-footercol">
                                <div class="tg-haslayout">
                                    <strong class="tg-logo">
                                        <a href="<?php echo base_url('assets/front/');?>#">
                                            <img src="<?php echo base_url('assets/front/');?>svg/logo-01.svg" alt="image description">
                                        </a>
                                    </strong>
                                </div>
                                <div class="tg-description">
                                    <p>Yarandığı gündən etibarən klubumuzda aşağı yaş qrupları üzrə komandaların təsis edilməsi üçün müxtəlif tədbirlər həyata keçirilib. </p>
                                </div>
                                <ul class="tg-contactinfo">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <address>Bakı ş.,İdman Akademiyası (Gənclik metrosunun yaxınlığı)</address>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="<?php echo base_url('assets/front/');?>matilto:info@bakusporting.com">info@bakusporting.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <span>+99412 564 15 92 </span><br>
                                        <i class="fa fa-phone"></i> <span>+99455 796 42 82 </span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-footerbar">
            <div class="container">
                <span class="tg-copyright">&copy; 2019 BAKU SPORTİNG |  All Rights Reserved</span>
                <nav class="tg-footernav">
                    Created by<a  href="<?php echo base_url('assets/front/');?>https://vhproduction.com/" target="_blank"><img src="<?php echo base_url('assets/front/');?>svg/vhlogo.svg"  width="147" height="41" /></a>

                </nav>
            </div>
        </div>
    </footer>
    <!--************************************
            Footer End
    *************************************-->

    <!--************************************
            Wrapper End
    *************************************-->


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <button type="button" class="close close-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title" id="myModalLabel"></h4>

                </div>

                <div class="modal-body"></div>

            </div>

        </div>

    </div>
    <script src="<?php echo base_url('assets/front/');?>js/jquery.min.js"></script>

    <script src="<?php echo base_url('assets/front/');?>min/all.min-v1.js"></script>

    <script src="<?php echo base_url('assets/front/');?>js/vendor/jquery-library.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/customScrollbar.min.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/owl.carousel.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/isotope.pkgd.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/prettyPhoto.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/swiper.min.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/jquery-ui.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/countTo.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/appear.js"></script>
    <script src="<?php echo base_url('assets/front/');?>js/main.js"></script>
</div></div></div></div></div></div></div></div></main></div>
</body>

</html>
