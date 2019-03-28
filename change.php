<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Video</title>

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

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="#" class="logo"><i class="md md-terrain"></i> <span>Video </span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="搜索..." class="form-control">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>

                                       <!-- list item-->
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> 个人信息</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> 设置</a></li>
                                    
                                    <li><a href="javascript:void(0)"><i class="md md-settings-power"></i>登出</a></li>
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
                                <a href="coustomer.html"><i class="md md-home"></i> <span> 修改资料 </span> </a>
                            </li>
                            <li class="has-submenu">
                                    <a href="#"><i class="md md-palette "></i><span> 管理 </span> </a>
                                    <ul class="submenu">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                      
                                    </ul>
                                </li>
    
                                <li class="has-submenu">
                                    <a href="#"><i class="md md-invert-colors-on"></i> <span> 概况 </span> </a>
                                    <ul class="submenu">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>

                                    </ul>
                                </li>
    
                                <li class="has-submenu active">
                                    <a href="#"><i class="md md-redeem"></i> <span> 数据 </span> </a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Icons</a>
                                            <ul class="submenu">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
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
                    <div class="col-sm-12">
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">设置 <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="divider"></li>
                                <li><a href="#">other</a></li>
                            </ul>
                        </div>
                        <h4 class="page-title">修改您的资料</h4>
                    </div>
                </div>

                <!-- Form-validation -->
                <div class="row">

                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">请填写</h3></div>
                            <div class="panel-body">
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="signupForm" method="get" action="#" novalidate="novalidate">
                                        <div class="form-group">
                                            <label for="firstname" class="control-label col-lg-2">姓名</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="firstname" name="firstname" placeholder="
                                                <?php 
                                                $name="曾立新";
                                                echo "$name";
                                                ?>
                                                " type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="agree" class="control-label col-lg-2 col-sm-3">性别</label>
                                            <div class="col-lg-10 col-sm-9" style="display:inline">
                                                <label for="agree" class="control-label col-lg-2 col-sm-3">男</label>
                                                    <div class="">
                                                <input type="radio" style="width: 16px" class="checkbox form-control" id="agree" name="agree" checked="
                                                <?php
                                                    $sex=1;
                                                    if($sex=1) echo "checked";
                                                ?>
                                                ">
                                                <label for="agree" class="control-label col-lg-2 col-sm-3">女</label>
                                                    <div class="">
                                                <input type="radio" style="width: 16px" class="checkbox form-control" id="agree" name="agree">
                                                    </div>
                                                 </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname" class="control-label col-lg-2">密码</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="lastname" name="lastname" type="password" placeholder="
                                                <?php 
                                                $pass="12345";
                                                echo "$pass";
                                                ?>
                                                ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="control-label col-lg-2">学历</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="username" name="username" type="text" placeholder="
                                                <?php 
                                                $school="本科";
                                                echo "$school";
                                                ?>
                                                ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="control-label col-lg-2">生日</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="password" name="password" type="text" 
                                                placeholder="
                                                <?php 
                                                $date="1998/04/21";
                                                echo "$date";
                                                ?>
                                                ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="agree" class="control-label col-lg-2 col-sm-3">爱好</label>
                                        <div class="col-lg-10 col-sm-9">
                                            <label for="agree" class="control-label col-lg-2 col-sm-3">守望先锋</label>
                                             <div class="">
                                            <input type="checkbox" style="width: 16px" class="checkbox form-control" id="agree" name="agree">

                                            <label for="agree" class="control-label col-lg-2 col-sm-3">音乐</label>
                                                 <div class="">
                                            <input type="checkbox" style="width: 16px" class="checkbox form-control" id="agree" name="agree">

                                            <label for="agree" class="control-label col-lg-2 col-sm-3">Bilibili</label>
                                        <div class="">
                                            <input type="checkbox" style="width: 16px" class="checkbox form-control" id="agree" name="agree">
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success waves-effect waves-light" type="submit">保存</button>
                                                <button class="btn btn-default waves-effect" type="button">取消</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- .form -->

                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->

                </div> <!-- End row -->


                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                2019 © Zss     
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
        <!-- end wrapper -->



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

        <!--form validation-->
        <script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

        <!--form validation init-->
        <script src="assets/pages/form-validation-init.js"></script>

    </body>
</html>