<?php 
  
  $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
        mysqli_set_charset($con,"UTF8");
  //接收uid参数，接收userList页传来的uid参数
  $cid=$_GET["cid"];
  //sql
  $sql="delete from comments where cid=$cid";
  $result=mysqli_query($con,$sql);//$result是整型
  if ($result==1) {
    echo "删除成功，2秒后返回评论列表页";
    header("refresh:2;url='pinglun.php'");
      }else{
        echo "删除失败";
      }
      
   ?> 