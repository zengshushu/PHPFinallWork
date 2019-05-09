 <?php 
  
  $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
        mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
        mysqli_set_charset($con,"UTF8");
  //接收uid参数，接收userList页传来的uid参数
  $uid=$_GET["uid"];

  //sql
  $sql="delete from users where uid=$uid";
  $sql1="select pic from users where uid=$uid";
  $result=mysqli_query($con,$sql1);
  $picname=mysqli_fetch_assoc($result);
  $result=mysqli_query($con,$sql);//$result是整型
  if ($result==1) {
    echo "删除成功，三秒后返回用户列表页";
    header("refresh:3;url='coustomer.php'");
      }else{
        echo "删除失败";
      }
      
   ?> 
