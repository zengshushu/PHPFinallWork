<?php 
  
  $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
        mysqli_set_charset($con,"UTF8");
  //接收uid参数，接收userList页传来的uid参数
  $tid=$_GET["tid"];
  //sql
  $sql="delete from videotype where tid=$tid";
  $result=mysqli_query($con,$sql);//$result是整型
  if ($result==1) {
    echo "删除成功，2秒后返回列表页";
    header("refresh:2;url='movie.php'");
      }else{
        echo "删除失败";
      }
      
   ?> 
