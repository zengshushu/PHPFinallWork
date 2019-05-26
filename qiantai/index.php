<!doctype html>
<html>

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>AMovie</title>
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
                        <div class="auth__show">
                            <span class="auth__image">
                                <img alt="" src="images/client-photo/auth.png">
                            </span>
                        </div>
                        <a href="#" class="btn btn--sign btn--singin">
                            BlackMoon
                        </a>
                        <ul class="auth__function">
                            <li><a href="#" class="auth__function-item">个人信息</a></li>
                            <li><a href="#" class="auth__function-item">设置</a></li>
                        </ul>

                    </div>
                    <a href="#" class="btn btn-md btn--warning btn--book btn-control--home login-window">预定列表</a>
                </div>

            </div>
        </header>

        <div class="container">
            <div class="col-sm-12">
                <div class="mega-select-present mega-select-top mega-select--full">
                    <div class="mega-select-marker">
                        <div class="marker-indecator location">
                            <p class="select-marker"><span>By Dr.Dre</span> <br>A-Movie</p>
                        </div>


                    </div>

                    <div class="mega-select pull-right">
                        <span class="mega-select__point">搜索关于</span>
                        <ul class="mega-select__sort">
                            <li class="filter-wrap"><a href="#" class="mega-select__filter filter--active"
                                    data-filter='location'>本地</a></li>
                            <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='cinema'>科幻</a>
                            </li>
                            <li class="filter-wrap"><a href="#" class="mega-select__filter"
                                    data-filter='film-category'>剧情</a></li>
                            <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='actors'>喜剧</a>
                            </li>
                            <li class="filter-wrap"><a href="#" class="mega-select__filter"
                                    data-filter='director'>灾难</a></li>
                            <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='country'>动画</a>
                            </li>
                        </ul>

                        <input name="search-input" type='text' class="select__field">

                        <div class="select__btn">
                            <a href="#" class="btn btn-md btn--danger location">在此 <span
                                    class="hidden-exrtasm">搜索</span></a>

                        </div>



                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 id='target' class="page-heading heading--outcontainer">电影</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <!-- Movie variant with time -->
                        <?php
                        define('PhotoPath','../videoimg/');
                        $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
                        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
                        mysqli_set_charset($con,"UTF8");     
                        $sql = "SELECT * FROM videos WHERE tid='1' ";
                                //执行SQL语句

                        $result=mysqli_query($con,$sql);
                    
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '<div class="movie movie--test movie--test--dark movie--test--left">';
                            echo '<div class="movie__images">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie-beta__link">';
                            echo ' <img src="'.PhotoPath.$row["pic"].'">';
                            echo ' </a></div>';
                            echo '<div class="movie__info">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie__title">'.$row["videoname"].'</a>';
                            echo '<p class="movie__time">91 min</p>';
                            echo '<p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a
                            href="#">Drama</a></p>  
                            <div class="movie__rate">
                            <div class="score"></div>
                            <span class="movie__rating">4.1</span>
                        </div>                            </div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="clearfix"></div>

            <h2 id='target' class="page-heading heading--outcontainer">电视剧</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <!-- Movie variant with time -->
                        <?php
                        $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
                        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
                        mysqli_set_charset($con,"UTF8");     
                        $sql = "SELECT * FROM videos WHERE tid='2' ";
                                //执行SQL语句

                        $result=mysqli_query($con,$sql);
                    
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '<div class="movie movie--test movie--test--dark movie--test--left">';
                            echo '<div class="movie__images">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie-beta__link">';
                            echo ' <img src="'.PhotoPath.$row["pic"].'">';
                            echo ' </a></div>';
                            echo '<div class="movie__info">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie__title">'.$row["videoname"].'</a>';
                            echo '<p class="movie__time">91 min</p>';
                            echo '<p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a
                            href="#">Drama</a></p>  
                            <div class="movie__rate">
                            <div class="score"></div>
                            <span class="movie__rating">4.1</span>
                        </div>                            </div>
                        </div>';
                        }
                        mysqli_close($con);  
                        ?>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 id='target' class="page-heading heading--outcontainer">动画片</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                                               <!-- Movie variant with time -->
                                               <?php
                        $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
                        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
                        mysqli_set_charset($con,"UTF8");     
                        $sql = "SELECT * FROM videos WHERE tid='3' ";
                                //执行SQL语句

                        $result=mysqli_query($con,$sql);
                    
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '<div class="movie movie--test movie--test--dark movie--test--left">';
                            echo '<div class="movie__images">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie-beta__link">';
                            echo ' <img src="'.PhotoPath.$row["pic"].'">';
                            echo ' </a></div>';
                            echo '<div class="movie__info">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie__title">'.$row["videoname"].'</a>';
                            echo '<p class="movie__time">91 min</p>';
                            echo '<p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a
                            href="#">Drama</a></p>  
                            <div class="movie__rate">
                            <div class="score"></div>
                            <span class="movie__rating">4.1</span>
                        </div>                            </div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 id='target' class="page-heading heading--outcontainer">科技</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <!-- Movie variant with time -->
                                               <!-- Movie variant with time -->
                                               <?php
                        $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
                        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
                        mysqli_set_charset($con,"UTF8");     
                        $sql = "SELECT * FROM videos WHERE tid='4' ";
                                //执行SQL语句

                        $result=mysqli_query($con,$sql);
                    
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '<div class="movie movie--test movie--test--dark movie--test--left">';
                            echo '<div class="movie__images">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie-beta__link">';
                            echo ' <img src="'.PhotoPath.$row["pic"].'">';
                            echo ' </a></div>';
                            echo '<div class="movie__info">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie__title">'.$row["videoname"].'</a>';
                            echo '<p class="movie__time">91 min</p>';
                            echo '<p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a
                            href="#">Drama</a></p>  
                            <div class="movie__rate">
                            <div class="score"></div>
                            <span class="movie__rating">4.1</span>
                        </div>                            </div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <h2 id='target' class="page-heading heading--outcontainer">教育</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <!-- Movie variant with time -->
                                               <!-- Movie variant with time -->
                        <?php
                        $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
                        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
                        mysqli_set_charset($con,"UTF8");     
                        $sql = "SELECT * FROM videos WHERE tid='6' ";
                                //执行SQL语句

                        $result=mysqli_query($con,$sql);
                    
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '<div class="movie movie--test movie--test--dark movie--test--left">';
                            echo '<div class="movie__images">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie-beta__link">';
                            echo ' <img src="'.PhotoPath.$row["pic"].'">';
                            echo ' </a></div>';
                            echo '<div class="movie__info">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie__title">'.$row["videoname"].'</a>';
                            echo '<p class="movie__time">91 min</p>';
                            echo '<p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a
                            href="#">Drama</a></p>  
                            <div class="movie__rate">
                            <div class="score"></div>
                            <span class="movie__rating">4.1</span>
                        </div>                            </div>
                        </div>';
                        }
                          
                        ?>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <h2 id='target' class="page-heading heading--outcontainer">原创</h2>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <!-- Movie variant with time -->
                                                <!-- Movie variant with time -->
                                                <?php
                        $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
                        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
                        mysqli_set_charset($con,"UTF8");     
                        $sql = "SELECT * FROM videos WHERE tid='9' ";
                                //执行SQL语句

                        $result=mysqli_query($con,$sql);
                    
                        while ($row = mysqli_fetch_assoc($result)){
                            echo '<div class="movie movie--test movie--test--dark movie--test--left">';
                            echo '<div class="movie__images">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie-beta__link">';
                            echo ' <img src="'.PhotoPath.$row["pic"].'">';
                            echo ' </a></div>';
                            echo '<div class="movie__info">';
                            echo '<a href="movie-page-left.php?vid='.$row["vid"].'" class="movie__title">'.$row["videoname"].'</a>';
                            echo '<p class="movie__time">91 min</p>';
                            echo '<p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a
                            href="#">Drama</a></p>  
                            <div class="movie__rate">
                            <div class="score"></div>
                            <span class="movie__rating">4.1</span>
                        </div>                            </div>
                        </div>';
                        }
                        mysqli_close($con);  
                        ?>
                    </div>
                </div>
            </div>

            </section>

            <div class="clearfix">
            </div>
        </div>
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