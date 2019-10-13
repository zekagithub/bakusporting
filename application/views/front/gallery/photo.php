
<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Baku Sporting | Qalereya | Foto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/transitions.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/prettyPhoto.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/customScrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/color.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>/css/responsive.css">
    <script src="<?php echo base_url('assets/front/'); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/front/'); ?>/images/favicon.png">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/'); ?>/photos/css/cobox.css">
    <script type="text/javascript" src="<?php echo base_url('assets/front/'); ?>/photos/js/cobox.js"></script>

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

                                                <a id="tg-btn-search" href="javascript:void(0)"><i class="fa fa-envelope"></i> info@bakusporting.com</a>
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

                                <a href="index.html"><img src="<?php echo base_url('assets/front/');?>/svg/logo-01.svg" alt="image description"></a>
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
                        <h1><?php echo $this->lang->line('foto'); ?></h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="<?php echo base_url('home');?>"><?php  echo $this->lang->line('ana'); ?></a></li>
                        <li class="active"><?php  echo $this->lang->line('gallery'); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <main id="tg-main" class="tg-main tg-haslayout">

        <section class="tg-main-section tg-soccermedia tg-haslayout">
            <div class="container">
                <div class="tg-section-heading">

                    <h2><a href="<?php echo base_url('photos');?>"><?php echo $this->lang->line('foto'); ?> <i class="fa fa-arrow-left"></i> </a></h2>
                </div>
                <div class="col-sm-12 col-xs-12 pull-right">
                    <div class="row">

                        <div id="filter-masonry" class="tg-soccermedia-content tg-soccermedia-content1 tg-haslayout">

                            <?php  foreach ($foto as $foto): ?>

                            <div class="masonry-grid championship" style="margin: 3px; width: 360px;">
                                <div class="tg-project">

                                    <figure class="tg-postimg">

                                        <a href="<?php echo base_url();echo $foto->image_path?>" ><img src="<?php echo base_url();echo $foto->image_path;?>" style="height: 217px;" alt="example-1" class="img-rounded"></a>

                                    </figure>
                                </div>
                            </div>

                      <?php endforeach; ?>



                        </div>
                    </div>
                </div>
            </div>
        </section>


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
                                <a class="tg-tag" href="#">futbol</a>
                                <a class="tg-tag" href="#">nəticə</a>
                                <a class="tg-tag" href="#">klub</a>
                                <a class="tg-tag" href="#">komanda</a>
                                <a class="tg-tag" href="#">oyun</a>
                                <a class="tg-tag" href="#">sport</a>
                                <a class="tg-tag" href="#">heyət</a>

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
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v4.0&appId=545610878883979&autoLogAppEvents=1"></script>
                                <div class="fb-page" data-href="https://www.facebook.com/Baku-Sporting-Futbol-Klubu-199823980895790/" data-tabs="timeline" data-width="300" data-height="340" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Baku-Sporting-Futbol-Klubu-199823980895790/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Baku-Sporting-Futbol-Klubu-199823980895790/">Baku Sporting Futbol Klubu</a></blockquote></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="tg-footercol">
                            <div class="tg-haslayout">
                                <strong class="tg-logo">
                                    <a href="#">
                                        <img src="<?php echo base_url('assets/front/');?>/svg/logo-01.svg" alt="image description">
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
                                    <a href="matilto:info@bakusporting.com">info@bakusporting.com</a>
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
                Created by<a  href="https://vhproduction.com/" target="_blank"><img src="<?php echo base_url('assets/front'); ?>svg/vhlogo.svg"  width="147" height="41" /></a>

            </nav>
        </div>
    </div>
</footer>
<!--************************************
        Footer End
*************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/front/');?>/photos/js/cobox.js"></script>

<script src="<?php echo base_url('assets/front/');?>/js/vendor/jquery-library.js"></script>
<script src="<?php echo base_url('assets/front/');?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/front/');?>/js/customScrollbar.min.js"></script>
<script src="<?php echo base_url('assets/front/');?>/js/owl.carousel.js"></script>
<script src="<?php echo base_url('assets/front/');?>/js/isotope.pkgd.js"></script>
<script src="<?php echo base_url('assets/front/');?>/js/prettyPhoto.js"></script>
<script src="<?php echo base_url('assets/front/');?>/js/swiper.min.js"></script>
<script src="<?php echo base_url('assets/front/');?>/js/jquery-ui.js"></script>
<script src="<?php echo base_url('assets/front/');?>/js/countTo.js"></script>
<script src="<?php echo base_url('assets/front/');?>/js/appear.js"></script>
<script src="<?php echo base_url('assets/front/');?>/js/main.js"></script>
</body>

</html>