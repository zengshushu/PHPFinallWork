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
            $filename=$_FILES["file"]["name"];
            $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
            mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
            mysqli_set_charset($con,"UTF8");     
            $sql = "update users set uname='$username', password='$password',gender='$gender',brithdate='$brithdate',hobby='$hobby',degree='$degree',intro='$intro',pic='$filename' where uid='$uid'";
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
            <?php
            echo"<pre>";
            print_r($_FILES);
            echo"</pre>";
            // 判断错误
            if($_FILES["file"]["error"]>0){
                switch($_FILES["file"]["error"]){
                    case 1:echo "文件过大";break;
                    case 3:echo "部分上传";break;
                    case 4:echo "没有上传";break;
                    default:echo "未知错误";
                }
                exit;
            }

            // 限制格式
            $allowtype=array("jpg","png","gif","bmp","flv",);
            $arr=explode(".",$_FILES["file"]["name"]);
            $suffix=$arr[count($arr)-1];
            if(! in_array($suffix, $allowtype)){
                echo "文件类型错误！";
                exit;
            }

            // 拷贝文件
        $filepath="./images/";
	      
            // 存放路径
            move_uploaded_file($_FILES["file"]["tmp_name"],"./img/".$_FILES["file"]["name"]);
            ?>