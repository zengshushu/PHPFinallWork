<!doctype html>
<html>

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Exceisior</title>
    <meta name="description" content="A Template by Gozha.net">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <!-- Fonts -->
    <!-- Font awesome - icon font -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
    <!-- Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>
    <!-- Stylesheets -->
    <!-- Mobile menu -->
    <link href="css/gozha-nav.css" rel="stylesheet" />
    <!-- Select -->
    <link href="css/external/jquery.selectbox.css" rel="stylesheet" />
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <!-- Custom -->
    <link href="css/style.css?v=1" rel="stylesheet" />
    <!-- Modernizr -->

    <script src="js/external/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> 
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script> 
		<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>		
    <![endif]-->
</head>

<body>
<?php
        session_start();
        if(!isset($_SESSION["uname"])){
            header("location:/ViarolabScan/qiantai/login.php?msg=您没有权限，请登录后访问！");
            
        }
        ?>
    <div class="wrapper">
        <!-- Banner -->

        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='index.html' class="logo">
                    <img alt='logo' src="images/logo.png">
                </a>

                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <div class="auth auth--home">
                        <a href="#" class="btn btn--sign btn--singin">
                        <?php           
                            echo '您好： '.$_SESSION["uname"];
                            
                         ?>
                        </a>
                        <ul class="auth__function">
                            <li><a href="#" class="auth__function-item">个人信息</a></li>
                            <li><a href="../adminregister.html" class="auth__function-item">管理员注册</a></li>
                        </ul>


            </div>
        </header>

        <div class="container" style="width:1000px;height:40vh; margin-top:30vh; margin-left:100px; position:center">
            <div class="col-sm-12">
                <div class="mega-select-present mega-select-top mega-select--full" style="padding: 0;">
                    <div class="mega-select-marker">
                        


                    </div>
                
                    <div class="mega-select pull-right" style="margin-top: 0;" >
                    <div align="center">
                    <img  src="./images/Vogo.png" style="width:300px; margin-right:80px";   >
                        </div>
                        <span class="mega-select__point" style="width:500px; text-size:100px">扫码枪搜索 Viarolab</span>
                       
                        <form method="get" action="search.php">
                        <input name="k" type='search' size="20"  class="select__field" value = "<?php error_reporting(0); $_GET['k'];?>" autofocus/> 
                            
                        <div class="select__btn">
                            <button type= "submit" value="Search" class="btn btn-md btn--danger location">在此 <span
                                    class="hidden-exrtasm">搜索</span></button>

                        </div>



                    </div>
                </div>
            </div>

            <div class="clearfix">
            </div>
        </div>
        <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">Exceisior<br><span class="title-edition">Power By BlackMoon</span></p>

                        <div class="clearfix"></div>
                        <p class="copy">&copy; Exceisior, 2020. All rights reserved. Done by BlackMoon Belong to ViaroLab</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>

    <!-- JavaScript-->
    <!-- jQuery 1.9.1-->

    <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>

    <!-- Migrate -->

    <script src="js/external/jquery-migrate-1.2.1.min.js"></script>

    <!-- Bootstrap 3-->

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    <!-- jQuery REVOLUTION Slider -->

    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>

    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Mobile menu -->

    <script src="js/jquery.mobile.menu.js"></script>

    <!-- Select -->

    <script src="js/external/jquery.selectbox-0.2.min.js"></script>

    <!-- Stars rate -->

    <script src="js/external/jquery.raty.js"></script>

    <!-- Form element -->

    <script src="js/external/form-element.js"></script>

    <!-- Form validation -->

    <script src="js/form.js"></script>

    <!-- Twitter feed -->


    <!-- Custom -->

    <script src="js/custom.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            init_Home();
        });
    </script>
    
</body>

</html>