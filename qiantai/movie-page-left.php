<!doctype html>
<html>
<head>
	<!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>AMovie - 详情</title>
        <meta name="description" content="A Template by Gozha.net">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Gozha.net">
    
    <!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->
        <!-- jQuery UI --> 
        <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet">

        <!-- Mobile menu -->
        <link href="css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="css/external/jquery.selectbox.css" rel="stylesheet" />
        <!-- Swiper slider -->
        <link href="css/external/idangerous.swiper.css" rel="stylesheet" />
        <!-- Magnific-popup -->
        <link href="css/external/magnific-popup.css" rel="stylesheet" />

    
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
    <div class="wrapper">
        <!-- Banner -->
        <!-- Header section -->
        <header class="header-wrapper">
            <div class="container">
                <!-- Logo link-->
                <a href='index.html' class="logo">
                    <img alt='logo' src="images/logo.png">
                </a>
                
                <!-- Main website navigation-->
                <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                              <span class="lines"></span>
                            </span>
                        </span>
                    </a>
                </nav>
                
                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <a href="#" class="btn btn--sign login-window">登陆/login</a>
                   
                </div>

            </div>
        </header>
        
      
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-8 col-md-9">
                <div class="movie">
                    <?php
                         define('Photo','../videoimg/');
                        $vid=$_GET["vid"];
                        $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
                        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
                        mysqli_set_charset($con,"UTF8");     
                        $sql = "SELECT * FROM videos WHERE vid='$vid' ";
                                //执行SQL语句
                        
                        $result=mysqli_query($con,$sql);
                        $row = mysqli_fetch_assoc($result);
                        $hit=$row["hittimes"]+1;
                        $sql2="update videos set hittimes=$hit where vid=$vid";
                        mysqli_query($con,$sql2);
                        echo '<h2 class="page-heading">'.$row["videoname"].'</h2>';
                         
                    ?>
                    
                    
                    <div class="movie__info">
                        <div class="col-sm-6 col-md-4 movie-mobile">
                            <div class="movie__images">
                                <span class="movie__rating">4.0</span>
                                <?php
                                    echo '<img src="'.Photo.$row["pic"].'">';
                                ?>
                                
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-8">
                            <p class="movie__time">169 min</p>

                            <p class="movie__option"><strong>上映日期: </strong><a href="#"><?php echo $row["uploaddate"];?></a></p>
                            <p class="movie__option"><strong>上传人: </strong><a href="#"><?php echo $row["uploadadmin"];?></a></p>
                            <p class="movie__option"><strong>点击量: </strong><?php echo $row["hittimes"];?></p>
                            <p class="movie__option"><strong>下载量: </strong><a href="#"><?php echo $row["downtimes"];?></a></p>
                            <p class="movie__option"><strong>地址: </strong><a href="download.php?vid=<?php
                            echo $row["vid"];?>"><?php echo $row["address"];?></a></p>

                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <h2 class="page-heading">简介</h2>

                    <p class="movie__describe"><?php echo $row["intro"];?></p>

                </div>

                
                    </div>
                    
                    <!-- hiden maps with multiple locator-->
                  
                    <div class="comment-wrapper">
                        <form id="comment-form" <?php echo 'action="addcomment.php?vid='.$row["vid"].'"';?> class="comment-form" method='post'>
                            <textarea class="comment-form__text" placeholder='Add you comment here' name='comment'></textarea>
                            <label class="comment-form__info">250 字</label>
                            <button type='submit' class="btn btn-md btn--danger comment-form__btn">添加评论</button>
                        </form>

                        <div class="comment-sets">

                        <div class="comment">
                            <?php

                            $sql1 = "SELECT * FROM comments WHERE vid='$vid' ";
                            //执行SQL语句
                            
                            $result1=mysqli_query($con,$sql1);
                            
                            while ($row1 = mysqli_fetch_assoc($result1)){
                                if($row1["uid"]==8){
                                    $pe="曾立新";
                                }
                                echo'<a class="comment__author">'.$pe.'</a>';
                                
                                echo'<p class="comment__date">'.$row1["cdate"].'</p>';
                                echo'<p class="comment__message">'.$row1["content"].'</p>';
                            }
                            mysqli_close($con);
                            ?>
                        </div>
                    </div>
                </div>
            </div>



        </section>
        
        <div class="clearfix"></div>

        <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">A.Movie<br><span class="title-edition">in the social
                                media</span></p>

                        <div class="clearfix"></div>
                        <p class="copy">&copy; A.Movie, 2019. All rights reserved. Done by BlackMoon</p>
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
        <!-- jQuery UI -->
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Stars rate -->
        <script src="js/external/jquery.raty.js"></script>
        <!-- Swiper slider -->
        <script src="js/external/idangerous.swiper.min.js"></script>
        <!-- Magnific-popup -->
        <script src="js/external/jquery.magnific-popup.min.js"></script>  


      

        <!-- Form element -->
        <script src="js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="js/form.js"></script>
		

</body>
</html>
