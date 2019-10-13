<?php  $this->load->view('front/include/header');  ?>
<?php $this->load->view('front/include/slider');   ?>
    <main id="tg-main" class="tg-main tg-haslayout">

<?php  $this->load->view('front/include/main_mission');  ?>

<?php  $this->load->view('front/include/main_gool'); ?>

<?php $this->load->view('front/include/game_result'); ?>
        <section class="tg-testimonial tg-haslayout tg-bgdark" style="background-image: url(assets/front/images/bg-commingsoon.jpg);background-size: auto auto;background-repeat: no-repeat;background-position: right 5% center;background-attachment: fixed;">

        </section>

        <?php $this->load->view('front/include/main_blog');   ?>


    </main>

<?php  $this->load->view('front/include/footer'); ?>