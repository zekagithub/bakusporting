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
                                <h3><?php echo $this->lang->line('abune'); ?></h3>
                            </div>
                            <div class="tg-description">
                                <p><?php echo $this->lang->line('izle'); ?> </p>
                            </div>
                            <form class="tg-form-newsletter">
                                <fieldset>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <button class="tg-btn" type="submit"><?php echo $this->lang->line('join'); ?></button>
                                </fieldset>
                            </form>
                            <div class="tg-posttitle">
                                <h3>popular tags</h3>
                            </div>
                            <div class="tg-tags">
                                <?php $tags=blog_tag();foreach ($tags as $tag) {
                                    $a=explode(',',$tag->blog_tag_az);

                                    foreach ($a as $b){

                                    ?>
                                <a class="tg-tag" href="<?php echo base_url('blog/');echo $tag->blog_sef_az?>">

                         <?php     echo $b;?>



                                </a>

                             <?php }};  ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="tg-footercol">
                            <div class="tg-posttitle">
                                <h3><?php echo $this->lang->line('biziz'); ?></h3>
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
                                    <a href="<?php echo base_url('home') ?>">
                                        <img src="<?php echo base_url('assets/front/');?>svg/logo-01.svg" alt="image description">
                                    </a>
                                </strong>
                            </div>
                            <div class="tg-description">
                                <p><?php echo $this->lang->line('create'); ?></p>
                            </div>
                            <ul class="tg-contactinfo">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <address><?php echo $melumat->site_adress; ?></address>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="matilto:info@bakusporting.com"><?php echo $melumat->site_mail; ?></a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span><?php echo $melumat->site_telefon1; ?></span><br>
                                    <i class="fa fa-phone"></i> <span><?php echo $melumat->site_telefon2; ?></span>
                                </li>
                            </ul>
                            <div class="tg-haslayout">
                                <a class="tg-btn" href="<?php echo base_url('about')?>"><?php echo $this->lang->line('etraf'); ?></a>
                            </div>
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
                Created by<a  href="https://vhproduction.com/" target="_blank"><img src="<?php echo base_url('assets/front/');?>svg/vhlogo.svg"  width="147" height="41" /></a>

            </nav>
        </div>
    </div>
</footer>


</div>




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
</body>

</html>