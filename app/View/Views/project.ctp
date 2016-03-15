<div class="container">
<!-- row -->
<div class="row">
<!-- =========================================
               SIDEBAR   
==========================================-->
    <!-- Start Sidebar -->
     <?php echo $this->element('sidebar', array('user' => $projectData[0]['User'])); ?>
<!-- -->
    <!-- =========================================
       Work experiences
    ==========================================-->

    <section class="col s12 m12 l8 section">
        <div class="row">
            <div class="full-portfolio">
                <div class="wow fadeIn a1" data-wow-delay="0.1s">
                    <div class="portfolio-nav section-wrapper z-depth-1">
                        <ul>
                            <li class="filter" data-filter="all">Show All</li>
                            <li class="filter" data-filter=".category-1">Art</li>
                            <li class="filter" data-filter=".category-2">Icons</li>
                            <li class="filter" data-filter=".category-4">Materials</li>
                        </ul>
                    </div>
                    <div id="loader">
                        <div class="loader-icon"></div>
                    </div>
                    
                    <div class="screenshots" id="portfolio-item" >
                        <div class="row">
                            <ul class="grid">
                                <!-- Portfolio one-->
                                <?php foreach($projectData as $project) { ?>
                                <li class="col m6 s1 2 mix category-1">
                                    <a href="portfolio-full.html" class="sa-view-project-detail" data-action="#project-one">
                                        <figure class="more">
                                        <!-- <img src="assets/images/p.jpg" alt="Screenshot 01" class=""> -->
                                        <?php echo $this->Html->image( 'p.jpg', array('alt'=>'Screenshot 01','class' => '')) ?>
                                            <figcaption>
                                                <div class="caption-content">
                                                    <div class="single_image">
                                                        <h2><?php echo $project['Project']['title'] ?></h2>
                                                        <p><?php echo $project['Project']['short_description']; ?></p>
                                                    </div>							
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                    			</li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- PROJECT DETAILS WILL BE LOADED HERE -->
                    <div class="sa-project-gallery-view" id="project-gallery-view"></div>
                    <div class="back-btn col s12">  
                        <a id="back-button" class="btn btn-info waves-effect" href="#" ><i class="fa fa-long-arrow-left"></i> Go Back </a>
                    </div>
                </div>                            
            </div>


            <!-- =======================================
              portfolio Website
            ==========================================-->
            <div class="clear"></div>
            <div class="section-wrapper z-depth-1 wow fadeIn" data-wow-delay="0.1s">                            
                <div class="col s12 m12 l10 website right" >
                    <div class="row">
                        <div class="col s12 m12 l6">
                           <span><a href="">www.alrayhan.com</a></span>
                        </div>
                        <div class="col col s12 m12 l6">
                            <span><a href="">www.dribble.com/rtralrayhan</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </section><!-- end section -->
</div> <!-- end row -->
</div>  <!-- end container -->