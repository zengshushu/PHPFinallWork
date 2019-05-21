<?php 
             $tid=$_GET["tid"];
             $typename=trim($_POST['typename']);
            $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
            mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
            mysqli_set_charset($con,"UTF8"); 
            $sql = "update videotype set typename='$typename' where tid='$tid'";
                  //执行SQL语句
            mysqli_query($con,$sql)or die("修改失败");
            $result=mysqli_query($con,$sql);
            //关闭数据库
            mysqli_close($con);  

            //$result是整型
            if ($result==1) {
                echo "修改成功，2秒后返回用户列表页";
                header("refresh:2;url='movie.php'");
                }else{
                    echo "修改失败";
                }
                
            ?> 
          