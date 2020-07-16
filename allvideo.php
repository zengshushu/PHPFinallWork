<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>allgoods</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

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
            header("location:/ViarolabScan/login.php?msg=您没有权限，请登录后访问！");
            
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
                                    <li><a href="login.php"><i class="md md-settings-power"></i> 登出</a></li>
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
                        <h4 class="page-title">库存列表</h4>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="m-b-30">                      
                                <a href="addvideo.html"><button id="addToTable" class="btn btn-primary waves-effect waves-light">添加 <i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped" id="datatable-editable">
                            <thead>
                                <tr>
                                    <th>封面</th>                                   
                                    <th>名称</th>  
                                    <th>种类</th>
                                    <th>条码号</th>
                                    <th>单价</th>
                                    <th>库存</th>
                                    <th>编辑</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    define('VideoPhotoPath','./videoimg/');
                                    echo '<tr class="gradeX">';
                                    $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
                                    mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
                                    mysqli_set_charset($con,"UTF8");     
                                    $sql = "SELECT * FROM videos";
                                          //执行SQL语句

                                    $result=mysqli_query($con,$sql);
                                
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo '<tr>';
                                        echo '<td><img src="'.VideoPhotoPath.$row["pic"].'" width = 60 height = 60 ></td>';
                                        echo '<td>'.$row["videoname"].'</td>';
                                        
                                        if($row["tid"]==1){
                                            echo '<td>水晶</td>';
                                        }
                                        elseif($row["tid"]==2){
                                            echo '<td>护肤</td>';
                                        }
                                        elseif($row["tid"]==3){
                                            echo '<td>厨房</td>';
                                        }
                                        elseif($row["tid"]==4){
                                            echo '<td>生活用品</td>';
                                        }
                                        elseif($row["tid"]==6){
                                            echo '<td>香烟</td>';
                                        }
                                        else{
                                            echo '<td>其他</td>';
                                        }
                                        
                                        echo '<td>'.$row["intro"].'</td>';
                                        echo '<td>'.$row["price"].'</td>';
                                        echo '<td>'.$row["downtimes"].'</td>';
                                        echo'<td class="actions">';
                                        echo'<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>';
                                        echo'<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>';
                                        echo'<a href="changevideord.php?vid='.$row["vid"].'" onclick="return confirm('.'sure'.')" class="on-default edit-row"><i class="fa fa-pencil"></i></a>';
                                        echo'<a href="delectvideo.php?vid='.$row["vid"].'" onclick="return confirm('.'sure'.')" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>';
                                        echo'</td>';
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
                                2020 © Power By BlackMoon Serve For Viarolab.
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