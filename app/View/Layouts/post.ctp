<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- TITLE OF SITE-->
        <title> Prabhat Ranjan </title>
        <!-- META TAG -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CV, Portfolio, Resume">
        <meta name="author" content="Md. Siful Islam, Desiver Web">

        <!-- FAVICON -->
        <link rel="icon" href="./images/favicon.ico">
        <link rel="apple-touch-icon" sizes="72x72" href="./images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./images/apple-icon-114x114.png">

        <!-- ========================================
                Stylesheets
        ==========================================--> 
        
        <!-- MATERIALIZE CORE CSS -->
        <?php echo $this->Html->css('materialize.min'); ?>

        <!-- ADDITIONAL CSS -->
        <!-- <link rel="stylesheet" href="./css/animate.css"> -->
        <?php echo $this->Html->css('animate.css'); ?>
        <?php echo $this->Html->css('animate'); ?>
        

        <!-- FONTS -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,700,400italic,700italic' rel='stylesheet' type='text/css'>
        

        <!--FONTAWESOME CSS-->  

        <!-- CUSTOM STYLE -->
        <?php echo $this->Html->css('style'); ?>
        <?php echo $this->Html->css('nav'); ?>
        <?php echo $this->Html->css('icons/font-awesome-4.1.0/css/font-awesome.min'); ?>
        <?php echo $this->Html->css('responsive'); ?>
        <?php echo $this->Html->css('colors/red'); ?>
        <?php echo $this->Html->css('colors/purple'); ?>
        <?php echo $this->Html->css('colors/orange'); ?>
        <?php echo $this->Html->css('colors/green'); ?>
        <?php echo $this->Html->css('colors/lime'); ?>
        <?php echo $this->Html->css('demo'); ?>
        <!--  <link rel="stylesheet" href="./css/demo.css"> 
        <link rel="alternate stylesheet" href="./css/colors/red.css" title="red">
        <link rel="alternate stylesheet" href="./css/colors/purple.css" title="purple">
        <link rel="alternate stylesheet" href="./css/colors/orange.css" title="orange">
        <link rel="alternate stylesheet" href="./css/colors/green.css" title="green">
        <link rel="stylesheet" href="./css/colors/lime.css" title="lime"> -->
        <?php echo $this->fetch('css'); ?>       
        <!-- <link href="./icons/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
        <!-- RESPONSIVE CSS-->
        <!-- <link href="../css/responsive.css" rel="stylesheet"> -->
        <!-- COLORS --> 
        <link rel="alternate stylesheet" href="./css/colors/red.css" title="red">
        <link rel="alternate stylesheet" href="./css/colors/purple.css" title="purple">
        <link rel="alternate stylesheet" href="./css/colors/orange.css" title="orange">
        <link rel="alternate stylesheet" href="./css/colors/green.css" title="green">
        <link rel="stylesheet" href="./css/colors/lime.css" title="lime">
        
        <!-- STYLE SWITCH STYLESHEET ONLY FOR DEMO -->
        <!-- <link rel="stylesheet" href="./css/demo.css"> -->

        
        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif] -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    </head>
    <body>
        <!-- Start Container-->
        <?php echo $this->fetch('content'); ?>
        <!-- end container -->
 <!--=====================
                JavaScript
        ===================== -->
        <!-- Jquery core js-->
        <?php echo $this->Html->script('jquery.min'); ?>
        <!-- materialize js-->
        <?php echo $this->Html->script('materialize.min'); ?>
        
        <!-- wow js-->
        <?php echo $this->Html->script('wow.min'); ?>
        
        <!-- Map api -->
        <script src="//maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <!-- Masonry js-->
        <?php echo $this->Html->script('masonry.pkgd'); ?>
        <?php echo $this->Html->script('validator.min'); ?>
        <?php echo $this->Html->script('jquery.mixitup.min'); ?>
        <!-- Customized js -->
        <?php echo $this->Html->script('init'); ?>
        <!-- =========================================================
            STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
        ===========================================================-->
        <!-- Style switter js -->
        <?php echo $this->Html->script('styleswitcher'); ?>
        <div class="cv-style-switch" id="switch-style">
            <a id="toggle-switcher" class="switch-button icon_tools"> <i class="fa fa-cogs"></i></a>
            <div class="switched-options">
                <div class="config-title">
                    Colors :
                </div>
                <ul class="styles">
                    <li><a href="index.html#" onclick="setActiveStyleSheet('red'); return false;" title="Red">
                    <div class="red"></div>
                    </a></li>
                    <li><a href="index.html#" onclick="setActiveStyleSheet('purple'); return false;" title="purple">
                    <div class="purple"></div>
                    </a></li>

                    <li><a href="index.html#" onclick="setActiveStyleSheet('orange'); return false;" title="orange">
                    <div class="orange"></div>
                    </a></li>
                    
                    <li><a href="index.html#" onclick="setActiveStyleSheet('green'); return false;" title="green">
                    <div class="green"></div>
                    </a></li>
                    <li><a href="index.html#" onclick="setActiveStyleSheet('lime'); return false;" title="lime">
                    <div class="lime"></div>
                    </a></li>

                    <li class="p">
                    </li>
                </ul>
            </div>
        </div>

    </body>
</html>