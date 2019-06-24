
<?php 
//连接数据库
$con=mysqli_connect("localhost", "root", "")or die("canot connect server");
mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
mysqli_set_charset($con,"UTF8");   


//取登录页表单数据
$adminname=trim($_POST["admin"]);
$password=$_POST["pass"];
echo $adminname;
$sql="select * from admins where adminname='$adminname' and password='$password' ";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if ($num>0) {
	session_start();//启动session
	$_SESSION["adminname"]=$adminname; //将管理员用户名写入session
	echo "登录成功！2秒后将跳转到用户列表页<br/>";
	header("refresh:2.1;url='coustomer.php'");
}else
{   echo "登录失败 用户名密码错误！2秒后将返回登录页重新登录<br/>";
	header("refresh:2;url='login.php'");
}
	 ?>