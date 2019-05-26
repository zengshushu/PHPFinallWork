<?php 
  $comment=$_POST['comment'];
    $date=date("Y-m-d H:i:s");
  $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
        mysqli_set_charset($con,"UTF8");
  //接收uid参数，接收userList页传来的uid参数
  $vid=$_GET["vid"];

  //sql
  $sql="INSERT INTO comments (content,cdate,uid,vid) VALUES ('$comment','$date','8','$vid')";
  $result=mysqli_query($con,$sql);//$result是整型
  if ($result==1) {
    echo "评论成功，三秒后返回主页";
    header("refresh:2;url='index.php");
      }else{
        echo "评论失败";
      }
      
   ?> 
