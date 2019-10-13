<section class=" tg-haslayout tg-bgstyleone" style="background-image: url(assets/front/images/banner3.jpg);background-size: auto auto;background-repeat: no-repeat;background-position: right 5% center;background-attachment: fixed;">

    <div class="tg-bgpattrant">
        <div class="container">
            <div class="row">
                <div class="tg-upcomingmatch-counter" >
                    <div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
                        <figure>
                            <img src="<?php echo base_url('assets/front/');?>images/img-02.png" alt="image description">
                        </figure>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="tg-contentbox" >
                            <div class="tg-statistics">
                                <div class="tg-statistic tg-goals">
                                    <span class="tg-icon icon-Icon1"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="<?php echo $goal->goal;?>" data-speed="2000" data-refresh-interval="50"><?php echo $goal->goal;?></span></h2>
                                    <h3><?php echo $this->lang->line('goal');?></h3>
                                </div>
                                <div class="tg-statistic tg-activeplayers">
                                    <span class="tg-icon icon-Icon2"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to=" <?php echo $goal->player;?>" data-speed="4000" data-refresh-interval="50">10</span></h2>
                                    <h3><?php echo $this->lang->line('player');?></h3>
                                </div>
                                <div class="tg-statistic tg-activeteams">
                                    <span class="tg-icon icon-Icon3"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="<?php echo $goal->club;?>" data-speed="10000" data-refresh-interval="50">0</span></h2>
                                    <h3><?php echo $this->lang->line('club');?></h3>
                                </div>
                                <div class="tg-statistic tg-earnedawards">
                                    <span class="tg-icon icon-Icon4"></span>
                                    <h2><span class="tg-statistic-count" data-from="0" data-to="<?php echo $goal->winner;?>" data-speed="7000" data-refresh-interval="50">0</span></h2>
                                    <h3><?php echo $this->lang->line('win');?></h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
