<?php //pr($userData) ?>
<div class="container">
    <!-- row -->
    <div class="row">
    <!-- =========================================
                   SIDEBAR 
    ==========================================-->
        <!-- Start Sidebar -->
        <?php echo $this->element('sidebar', array('user' => $userData['User'])); ?>
        <!-- End Sidebar -->
        <!-- =========================================
           Work experiences
        ==========================================-->
        <section class="col s12 m12 l8 section">
            <div class="row">
            <?php if(!empty($userData['Experience'])) { 
                $delay = 0.1 ;
                ?>
                <div class="section-wrapper z-depth-1">
                    <div class="section-icon col s12 m12 l2">
                        <i class="fa fa-suitcase"></i>
                    </div>
                    <div class="custom-content col s12 m12 l10 wow fadeIn a1" data-wow-delay="0.1s">
                        <h2>Work Experience</h2>
                        <?php foreach($userData['Experience'] as $experience) { 
                            $delay = $delay + 0.1;
                        ?>
                        <div class="custom-content-wrapper wow fadeIn a2" data-wow-delay="<?php echo $delay.'s'; ?>">
                            <h3><?php echo $experience['title'] ?> <span>@<?php echo $experience['company_name'] ?></span></h3>
                            <span><?php echo $experience['start_date'].' - '.$experience['end_date']; ?> </span>
                            <p><?php echo $experience['description']; ?></p>
                        </div>
                        <?php } ?>
                    </div>                            
                </div>
                <?php } ?>
                <!-- ========================================
                 Education 
                ==========================================-->
                <?php if(!empty($userData['Education'])) { 
                    $delay = 0.1;
                ?>
                <div class="section-wrapper z-depth-1">
                    <div class="section-icon col s12 m12 l2">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="custom-content col s12 m12 l10 wow fadeIn a1" data-wow-delay="0.1s" >
                        <h2>Education </h2>
                        <?php foreach($userData['Education'] as $education) {
                            $delay = $delay + 0.1;
                        ?>
                        <div class="custom-content-wrapper wow fadeIn a2" data-wow-delay="<?php echo $delay.'s' ?>" >
                            <h3><?php echo $education['course']; ?> <span>@<?php echo $education['university']; ?></span></h3>
                            <span><?php echo $education['start_date'].' - '.$education['end_date']; ?> </span>
                            <p><?php echo $education['description'] ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>

                <!-- ========================================
                      Intertests 
                ==========================================-->

                <div class="section-wrapper z-depth-1">                           
                    <div class="section-icon col s12 m12 l2">
                        <i class="fa fa-plane"></i>
                    </div>
                    <div class="interests col s12 m12 l10 wow fadeIn" data-wow-delay="0.1s"> 
                        <h2>Interestes </h2>
                        <ul> <!-- interetsr icon start -->
                            <li><i class="fa fa-camera-retro tooltipped" data-position="top" data-delay="50" data-tooltip="Photography"></i></li>
                            <li><i class="fa fa-glass tooltipped" data-position="top" data-delay="50" data-tooltip="Drinking"></i></li>
                            <li><i class="fa fa-headphones tooltipped" data-position="top" data-delay="50" data-tooltip="Music"></i></li>
                            <li><i class="fa fa-comments tooltipped" data-position="top" data-delay="50" data-tooltip="Chatting"></i></li>
                            <li><i class="fa fa-coffee tooltipped" data-position="top" data-delay="50" data-tooltip="Coffee"></i></li>
                        </ul> <!-- interetsr icon end -->
                    </div> 
                </div>
                <!-- =======================================
                  portfolio Website
                ==========================================-->

                <div class="section-wrapper z-depth-1 wow fadeIn" data-wow-delay="0.1s">
                    <div class="col s12 m12 l10 website right" >
                        <div class="row">
                            <div class="col s12 m12 l6">
                               <span><a href="<?php echo 'http://'.$userData['User']['url'] ?>"><?php echo $userData['User']['url'] ?></a></span>
                            </div>
                            <!-- <div class="col col s12 m12 l6">
                                <span><a href="">www.dribble.com/rtralrayhan</a></span>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </section><!-- end section -->
    </div> <!-- end row -->
</div> 