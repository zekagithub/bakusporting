<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/home')?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Ana sehife</span>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cogs"></i>
                <span> Ayarlar</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url('back/settings/')?>"> <i class="fas fa-cogs"></i>
                    Sayt Ayarlari</a>
                <a class="dropdown-item" href="<?php  echo base_url('back/adminsettings');?>"><i class="fas fa-sign-in-alt"></i> Admin Giris</a>

            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-futbol"></i>
                <span>Komanda</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url('back/trainers/')?>"><i class="fas fa-male"></i> Mesqciler</a>
                <a class="dropdown-item" href="<?php  echo base_url('back/players');?>"> <i class="fas fa-futbol"></i>
                     Oyuncular</a>
                <a class="dropdown-item" href="<?php  echo base_url('back/techstaff');?>"><i class="fas fa-drafting-compass"></i> Texniki heyet</a>

            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-home"></i>
                <span>Klub</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url('back/managment/')?>"> <i class="fas fa-tasks"></i> Rehberlik</a>
                <a class="dropdown-item" href="<?php  echo base_url('back/marketing');?>"><i class="fas fa-search-location"></i> Pr-Marketing</a>
                <a class="dropdown-item" href="<?php  echo base_url('back/infrastruktur');?>"><i class="fas fa-warehouse"></i> Infrastruktur</a>

            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/academy')?>">
                <i class="fas fa-university"></i>
                <span>Akademiya</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/games')?>">
                <i class="fas fa-tv"></i>
                <span>Oyunlar</span>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-camera"></i>
                <span>Qalereya</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="<?php echo base_url('back/gallery/')?>"><i class="fas fa-camera"></i> Foto</a>
                <a class="dropdown-item" href="<?php  echo base_url('back/video');?>"><i class="fas fa-video"></i> Video</a>

            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/blog')?>">
                <i class="fas fa-newspaper"></i>
                <span>Blog</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/messages/')?>">
                <i class="fa fa-envelope"></i>

                <span>Mesajlar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/active/')?>">
                <i class="fas fa-futbol"></i>

                <span>Aktiv</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('back/cixis/')?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Çıxış</span>
            </a>
        </li>



    </ul>


    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url('back/home')?>" style="color: black;"><b>Baku Sporting Fk Admin</b></a>
                </li>
            </ol>



            <hr>


        </div>