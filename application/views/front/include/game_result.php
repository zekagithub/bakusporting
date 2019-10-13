<?php $lat=latest_game();

?>

<section class="tg-main-section tg-haslayout">
    <div class="container">
        <div class="tg-section-name">
            <h2><?php echo $this->lang->line('gameresult'); ?></h2>
        </div>
        <div class="col-sm-11 col-xs-11 pull-right">
            <div class="row">
                <div class="tg-latestresult">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="tab-content tg-tabscontent">
                                <div role="tabpanel" class="tab-pane active" id="1">
                                    <div class="tg-matchresult">
                                        <div class="tg-box">
                                            <div class="tg-score"><h3><?php echo $lat[0]->score?></h3></div>
                                            <div class="tg-teamscore">
                                                <strong class="tg-team-logo">
                                                    <a href="#">
                                                        <img src="<?php echo base_url();echo $lat[0]->club_home_image?>" style="width: 97px;height: 160px;" alt="<?php echo $lat[0]->club_title_home  ?>">
                                                    </a>
                                                </strong>
                                                <div class="tg-team-nameplusstatus">
                                                    <h4><a href="#"><?php echo $lat[0]->club_title_home?></a></h4>
                                                </div>

                                            </div>
                                            <div class="tg-teamscore">
                                                <strong class="tg-team-logo">
                                                    <a href="#">
                                                        <img src="<?php echo base_url();echo $lat[0]->club_guest_image;?>" style="width: 97px;height: 160px;" alt="<?php echo $lat[0]->club_title_guest  ?>">
                                                    </a>
                                                </strong>
                                                <div class="tg-team-nameplusstatus">
                                                    <h4><a href="#"><?php echo $lat[0]->club_title_guest;?></a></h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="2">
                                    <div class="tg-matchresult">
                                        <div class="tg-box">
                                            <div class="tg-score"><h3><?php echo $lat[1]->score?></h3></div>
                                            <div class="tg-teamscore">
                                                <strong class="tg-team-logo">
                                                    <a href="#">
                                                        <img src="<?php echo base_url();echo $lat[1]->club_home_image?>" style="width: 97px;height: 160px;" alt="<?php echo $lat[1]->club_title_home  ?>">
                                                    </a>
                                                </strong>
                                                <div class="tg-team-nameplusstatus">
                                                    <h4><a href="#"><?php echo $lat[1]->club_title_home?></a></h4>
                                                </div>

                                            </div>
                                            <div class="tg-teamscore">
                                                <strong class="tg-team-logo">
                                                    <a href="#">
                                                        <img src="<?php echo base_url();echo $lat[1]->club_guest_image;?>" style="width: 97px;height: 160px;" alt="<?php echo $lat[1]->club_title_guest  ?>">
                                                    </a>
                                                </strong>
                                                <div class="tg-team-nameplusstatus">
                                                    <h4><a href="#"><?php echo $lat[1]->club_title_guest;?></a></h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="3">
                                    <div class="tg-matchresult">
                                        <div class="tg-box">
                                            <div class="tg-score"><h3><?php echo $lat[2]->score?></h3></div>
                                            <div class="tg-teamscore">
                                                <strong class="tg-team-logo">
                                                    <a href="#">
                                                        <img src="<?php echo base_url();echo $lat[2]->club_home_image?>" style="width: 97px;height: 160px;" alt="<?php echo $lat[2]->club_title_home  ?>">
                                                    </a>
                                                </strong>
                                                <div class="tg-team-nameplusstatus">
                                                    <h4><a href="#"><?php echo $lat[2]->club_title_home?></a></h4>
                                                </div>

                                            </div>
                                            <div class="tg-teamscore">
                                                <strong class="tg-team-logo">
                                                    <a href="#">
                                                        <img src="<?php echo base_url();echo $lat[2]->club_guest_image;?>" style="width: 97px;height: 160px;" alt="<?php echo $lat[2]->club_title_guest  ?>">
                                                    </a>
                                                </strong>
                                                <div class="tg-team-nameplusstatus">
                                                    <h4><a href="#"><?php echo $lat[2]->club_title_guest;?></a></h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>


                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div id="tg-matchscrollbar" class="tg-matchscrollbar tg-allmatchstatus">
                                <ul class="tg-matchtabnav" role="tablist">
<?php  $say=1; $latest=latest_game(); foreach ($latest as $latest): ?>

                                    <li role="presentation" <?php if ($say==1){echo "class=active";} ?>  >
                                        <a href="#<?php echo $say++; ?>" aria-controls="one" role="tab" data-toggle="tab">
                                            <div class="tg-match">
                                                <div class="tg-box">
                                                    <strong class="tg-teamlogo">
                                                        <img src="<?php echo base_url();echo $latest->club_home_image;?>" style="width: 34px;height: 40px;" alt="<?php echo $latest->club_title_home;  ?>">
                                                    </strong>

                                                </div>
                                                <div class="tg-box">
                                                    <h3><?php echo $latest->score;  ?></h3>
                                                </div>
                                                <div class="tg-box">
                                                    <strong class="tg-teamlogo">
                                                        <img src="<?php echo base_url();echo $latest->club_guest_image;?>" style="width: 34px;height: 40px;" alt="<?php echo $latest->club_title_guest;  ?>">
                                                    </strong>

                                                </div>
                                            </div>
                                        </a>
                                    </li>

<?php  endforeach;  ?>

                                    <div class="tg-btnbox">
                                        <a class="tg-btn" href="<?php echo  base_url('games');?>"><span><?php echo $this->lang->line('etraf');  ?></span></a>
                                    </div>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
		