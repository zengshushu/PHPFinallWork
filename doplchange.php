<?php 
             $cid=$_GET["cid"];
             $pinglun=trim($_POST['pinglun']);
            $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
            mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
            mysqli_set_charset($con,"UTF8"); 
            $sql = "update comments set content='$pinglun' where cid='$cid'";
                  //执行SQL语句
            mysqli_query($con,$sql)or die("修改失败");
            $result=mysqli_query($con,$sql);
            //关闭数据库
            mysqli_close($con);  

            //$result是整型
            if ($result==1) {
                echo "修改成功，2秒后返回评论列表页";
                header("refresh:2;url='pinglun.php'");
                }else{
                    echo "修改失败";
                }
                
            ?> 
          