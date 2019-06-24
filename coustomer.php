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
                        <a href="#" class="logo"><i class="md md-terrain"></i> <span>video </span></a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="搜索
                                     " class="form-control">
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
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> 设置</a></li>
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
                                <a href="coustomer.html"><i class="md md-home"></i> <span>用户管理 </span> </a>
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
                        <h4 class="page-title">用户列表</h4>
                    </div>
                </div>

                <div class="panel">
                
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <button id="addToTable" class="btn btn-primary waves-effect waves-light">添加 <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped" id="datatable-editable">
                            <thead>
                                <tr>
                                    <th>姓名</th>
                                    <th>密码</th>
                                    <th>性别</th>
                                    <th>生日</th>
                                    <th>爱好</th>
                                    <th>学历</th>
                                    <th>自我介绍</th>
                                    <th>头像</th>
                                    <th>编辑</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    define('UserPhotoPath','./img/');
                                    echo '<tr class="gradeX">';
                                    $con=mysqli_connect("localhost", "root", "")or die("canot connect server");

                                    mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
                                  
                                    
                                    mysqli_set_charset($con,"UTF8");     
                                    $sql = "SELECT * FROM users ";
                                          //执行SQL语句

                                    $result=mysqli_query($con,$sql);
                                
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo '<tr>';
                                        echo'<td class="actions">';
                                        echo'<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>';
                                        echo'<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>';
                                        echo'<a href="change.php?uid='.$row["uid"].'" onclick="return confirm('.'sure'.')"class="on-default edit-row"><i class="fa fa-pencil"></i></a>';
                                        echo'<a href="doUserDelete.php?uid='.$row["uid"].'" onclick="return confirm('.'sure'.')" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>';
                                        echo'</td>';
                                        echo '<td>'.$row["uname"].'</td>';
                                        echo '<td>'.$row["password"].'</td>';
                                        if($row["gender"]==1){
                                            echo '<td>男</td>';
                                        }else{
                                            echo '<td>女</td>';
                                        }
                                        echo '<td>'.$row["brithdate"].'</td>';
                                        echo '<td>'.$row["hobby"].'</td>';
                                        echo '<td>'.$row["degree"].'</td>';
                                        echo '<td>'.$row["intro"].'</td>';
                                        
                                        echo '<td><img src="'.UserPhotoPath.$row["pic"].'" width = 60 height = 60 ></td>';
                                        

                                        
                                        echo '</tr>';
                                    }
                                    
                                    
                                    //关闭数据库
                                    mysqli_close($con);  

                                    ?>
                                    
                               
                            </tbody>
                        </table>
                    </div>
                    <!-- end: page -->

                </div> <!-- end Panel -->



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

    </body>
</html>