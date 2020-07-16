<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>评论管理</title>

        <link href="assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>
<script>
  
 
 
 

 
  

</script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>


    <body>
    <?php
        session_start();
        if(!isset($_SESSION["adminname"])){
            header("location:/PHPFinallWork/login.php?msg=您没有权限，请登录后访问！");
            
        }
        ?>
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">
                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="#" class="logo"><i class="md md-terrain"></i> <span>Exceisior </span></a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="在此搜索" class="form-control">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <li class="dropdown user-box">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                <?php
                                    
                                    echo '您好： '.$_SESSION["adminname"];
                                    ?>
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i>个人信息</a></li>
                                    <li><a href="adminregister.html"><i class="md md-settings"></i> 管理员注册</a></li>
                                    <li><a href="login.html"><i class="md md-settings-power"></i> 登出</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu" style="font-size:19px">
                            <li>
                                <a href="coustomer.php"><i class="md md-home"></i> <span>用户管理 </span> </a>
                            </li>
                            <li class="has-submenu">
                                    <a href="allvideo.php"><i class="md md-palette "></i><span> 库存管理 </span> </a>
                                    
                                </li>
    
                                <li class="has-submenu ">
                                    <a href="movie.php"><i class="md md-invert-colors-on "></i> <span> 分类管理 </span> </a>
                                    
                                </li>
    
                                <li class="has-submenu  active">
                                    <a href="#"><i class="md md-redeem"></i> <span> 传送门 </span> </a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">页面</a>
                                            <ul class="submenu">
                                                <li><a href="./qiantai/index.php">商品页面</a></li>
                                                <li><a href="./intro/index.html">介绍页面</a></li>
                                                <li><a href="pinglun.php">评论管理</a></li>
                                            </ul>
                                        </li>
    
                        </ul> 
                        
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                   
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> 评论 </h3>
                        <div class="btn-group pull-right">
                        
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>商品</th>
                                    <th style="width:50%">所有评论</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
                                    mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
                                    mysqli_set_charset($con,"UTF8");     
                                    $sql = "SELECT * FROM comments left join videos on comments.vid=videos.vid";
                                    
                                          //执行SQL语句

                                    $result=mysqli_query($con,$sql);
                                
                                
                                    while ($row = mysqli_fetch_assoc($result)){
                                        
                                        echo '<tr>';
                                        echo '<td class="middle-align">'.$row["videoname"].'</td>';
                                        echo '<td class="middle-align">'.$row["content"].'</td>';
                                        echo '<td>';
                                        echo '<a href="changepinglun.php?cid='.$row["cid"].'"><button class="btn btn-info waves-effect waves-light btn-sm" id="sa-basic" style="margin-right:20px;">修改</button></a>';
                                        echo '<a href="dopldelect.php?cid='.$row["cid"].'"><button class="btn btn-danger waves-effect waves-light btn-sm" id="sa-basic">删除</button></a>';
                                        echo '</td>';
                                        echo '</tr>';
                                        }
                                    
                                    
                                    
                                    //关闭数据库
                                    mysqli_close($con);  

                                    ?>

                              
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                2019 © zss.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">关于</a>
                                    </li>
                                    <li>
                                        <a href="#">帮助</a>
                                    </li>
                                    <li>
                                        <a href="#">联系</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
            <!-- end container -->


        </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.app.js"></script>

        <!-- Sweet-Alert  -->
        <script src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>

    </body>
</html>