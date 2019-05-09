<?php 
             $uid=$_GET["uid"];
             $username=trim($_POST['username']);
            $password=$_POST['password'];
            $gender=$_POST['gender'];
            $brithyear=$_POST['year'];
            $brithmonth=$_POST['month'];
            $brithday=$_POST['date'];
            $hobby=$_POST['hobby'];
            $degree=$_POST['degree'];
            $intro=$_POST['intro'];
            $brithdate=$brithyear."-".$brithmonth."-".$brithday;
            $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
            mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
            mysqli_set_charset($con,"UTF8");     
            $sql = "update users set uname='$username', password='$password',gender='$gender',brithdate='$brithdate',hobby='$hobby',degree='$degree',intro='$intro' where uid='$uid'";
                  //执行SQL语句
            mysqli_query($con,$sql)or die("修改失败");
            $result=mysqli_query($con,$sql);
            //关闭数据库
            mysqli_close($con);  

            //$result是整型
            if ($result==1) {
                echo "修改成功，三秒后返回用户列表页";
                header("refresh:3;url='coustomer.php'");
                }else{
                    echo "修改失败";
                }
                
            ?> 
