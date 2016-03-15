<aside class="col l4 m12 s12 sidebar z-depth-1" id="sidebar">
    <!--  Sidebar row -->
    <div class="row">                      
        <!--  top section   -->
        <div class="heading">                            
            <!-- ====================
                      IMAGE   
            ==========================-->
            <div class="feature-img">
                <?php
                echo $this->Html->link(
                    $this->Html->image( $user['id'].'-img.jpg', array('alt'=>'','class' => 'responsive-img')), 
                    array('controller' => 'views', 'action' => 'index'),
                    array('class' => 'logo', 'escape' => false)
                    );
                ?> 
            </div>                            
            <!-- =========================================
                       NAVIGATION   
            ==========================================-->
            <div class=" nav-icon">
                <nav>
                    <div class="nav-wrapper">
                      <ul id="nav-mobile" class="side-nav"> 
                        <li>
                        <?php echo $this->Html->link('Resume', array('controller' => 'views', 'action' => 'index')); ?>
                        </li>
                        <li>
                        <?php echo $this->html->link('Project', array('controller' => 'views', 'action' => 'project', $user['id'])); ?>
                        </li>
                        <li><a href="cover-latter.html">Cover Latter</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                      </ul>
                      <a href="#" data-activates="nav-mobile" class="button-collapse  "><i class="mdi-navigation-menu"></i></a>
                    </div>
                </nav>
            </div>                            
            <!-- ========================================
                       NAME AND TAGLINE
            ==========================================-->
            <div class="title col s12 m12 l9 right  wow fadeIn" data-wow-delay="0.1s">   
                <h2><?php echo $user['name']; ?></h2> <!-- title name -->
                <span><?php echo $user['designation'] ?></span>  <!-- tagline -->
            </div>                         
        </div>
         <!-- sidebar info -->
        <div class="col l12 m12 s12 sort-info sidebar-item">
            <div class="row">                               
                <div class="col m12 s12 l3 icon"> <!-- icon -->
                   <i class="fa fa-user"></i>
                </div>
                <div class="col m12 s12 l9 info wow fadeIn a1" data-wow-delay="0.1s" > <!-- text -->
                    <div class="section-item-details">
                        <p><?php echo $user['introduction']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE NUMBER -->
        <div class="col l12 m12 s12  mobile sidebar-item">
            <div class="row">
                <div class="col m12 s12 l3 icon">
                    <i class="fa fa-phone"></i> <!-- icon -->
                </div>
                <div class="col m12 s12 l9 info wow fadeIn a2" data-wow-delay="0.2s" >
                    <div class="section-item-details">
                        <div class="personal">
                            <h4><a href="tel:555-555-5555"><?php echo $user['mobile']; ?></a></h4> <!-- Number -->
                            <span>mobile</span>
                        </div>
                        <div class="work">
                            <h4><a href="tel:555-555-5555"><?php echo $user['work']; ?></a></h4> <!-- Number -->
                            <span>work</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  EMAIL -->
        <div class="col l12 m12 s12  email sidebar-item ">
            <div class="row">
                <div class="col m12 s12 l3 icon">
                    <i class="fa fa-envelope"></i> <!-- icon -->
                </div>
                <div class="col m12 s12 l9 info wow fadeIn a3" data-wow-delay="0.3s">
                    <div class="section-item-details">
                        <div class="personal">
                            <h4><a href="mailto:rprabhat1729@gmail.com"><?php echo $user['personal_email'] ?></a></h4> <!-- Email -->
                            <span>personal</span>
                        </div>
                        <div class="work">
                            <h4><a href="mailto:prabhat@atlogys.com"><?php echo $user['work_email'] ?></a></h4> <!-- Email -->
                            <span>work</span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ADDRESS  -->
        <div class="col l12 m12 s12  address sidebar-item ">
            <div class="row">
                <div class="col l3 m12  s12 icon">
                    <i class="fa fa-home"></i> <!-- icon -->
                </div>
                <div class="col m12 s12 l9 info wow fadeIn a4" data-wow-delay="0.4s">
                    <div class="section-item-details">
                        <div class="address-details"> <!-- address  -->
                            <h4><?php echo $user['address']; ?><br>
                            <span><?php echo $user['pincode']; ?></span></h4> 
                        </div>                         
                    </div>
                </div>
            </div>            
        </div>
        <!-- SKILLS -->
        <div class="col l12 m12 s12  skills sidebar-item" >
            <div class="row">
                <div class="col m12 l3 s12 icon">
                    <i class="fa fa-calendar-o"></i> <!-- icon -->
                </div>
                 <!-- Skills -->
                <div class="col m12 l9 s12 skill-line a5 wow fadeIn" data-wow-delay="0.5s">
                    <h3>Professional Skills </h3>
                    
                    <span>Adobe Photoshop</span>                                    
                    <div class="progress">
                        <div class="determinate"> 70% </div>
                    </div>
                    <span>HTML</span>
                    <div class="progress">
                        <div class="determinate"> 95%</div>
                    </div>
                    <span>CSS</span>
                    <div class="progress">
                        <div class="determinate">90%</div>
                    </div>

                    <span>Javascript</span>
                    <div class="progress">
                        <div class="determinate">85%</div>
                    </div>

                    <span>PHP</span>
                    <div class="progress">
                        <div class="determinate">70%</div>
                    </div>

                    <span>JAVA</span>
                    <div class="progress">
                        <div class="determinate">55%</div>
                    </div>

                    <span>SQL</span>
                    <div class="progress">
                        <div class="determinate">40%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>   <!-- end row -->
</aside><!-- end sidebar -->