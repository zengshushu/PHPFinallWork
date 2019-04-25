<!doctype html>
<html lang="en">
  <head>
    <title>练习</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./style.css" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class=container>
        <a class="navbar-brand" href="#">PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
</div>
        </nav>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">注册成功！</h1>
    <p class="lead">恭喜呀.</p>
  </div>
</div>
      <div class="container">
    <div class="var">
    <h2>注册信息</h2></h2>
    <div class="var">
        <?php
        
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
            $sql = "INSERT INTO users (uname,password,gender,brithdate,hobby,degree,intro)
                VALUES ('$username','$password','$gender','$brithdate','$hobby','$degree','$intro');";
                  //执行SQL语句
            mysqli_query($con,$sql)or die("插入失败");
            //关闭数据库
            mysqli_close($con);  

            echo"注册成功，您的信息如下"."<br>";
            echo"姓名：".$username."<br>";
            echo"密码：".$password."<br>";
            echo"生日：".$brithyear."年".$brithmonth."月".$brithday."日"."<br>";
            echo"爱好：".$hobby."<br>";
            echo"介绍：".$intro."<br>";
            if($degree==1){
              echo"学历："."本科"."<br>";
            }
            if($degree==5){
              echo"学历："."小学"."<br>";
            };
            if($degree==2){
              echo"学历："."初中"."<br>";
            };
            if($degree==3){
              echo"学历："."高中"."<br>";
            };
            if($degree==4){
              echo"学历："."研究生"."<br>";
            };
            
            if($gender==1)
            echo"性别：男";
            else
            echo"性别：女";

        //     echo"<pre>";
        //     print_r($_FILES);
        //     echo"</pre>";
        //     // 判断错误
        //     if($_FILES["file"]["error"]>0){
        //         switch($_FILES["file"]["error"]){
        //             case 1:echo "文件过大";break;
        //             case 3:echo "部分上传";break;
        //             case 4:echo "没有上传";break;
        //             default:echo "未知错误";
        //         }
        //         exit;
        //     }else{

        //     // 限制格式
        //     $allowtype=array("doc","docx","pdf","jpg","png",);
        //     $arr=explode(".",$_FILES["file"]["name"]);
        //     $arr1=explode(".",$_FILES["photo"]["name"]);
        //     $suffix=$arr[count($arr)-1];
        //     if(! in_array($suffix, $allowtype)){
        //         echo "文件类型错误！";
        //         exit;
        //     }
        //     $suffix1=$arr1[count($arr1)-1];
        //     if(! in_array($suffix1, $allowtype)){
        //         echo "文件类型错误！";
        //         exit;
        //     }

        //     // 拷贝文件
        // $filepath1="./photo/";
	      // $randname1=date("YmdHis").rand(100,999).".".$suffix1;
	      // move_uploaded_file($_FILES["photo"]["tmp_name"],$filepath1.$randname1);
        // $filepath="./resume/";
	      // $randname=date("YmdHis").rand(100,999).".".$suffix;
        // move_uploaded_file($_FILES["file"]["tmp_name"],$filepath.$randname);
        // move_uploaded_file($_FILES["file"]["tmp_name"],"./resume/".$_FILES["file"]["name"]);
        
        //     // 存放路径
        //     echo "照片已上传";
        //     echo '<br>';
        //     echo "简历已上传";
        //   }       
           
            
        ?>
    
    </div>
    </div>

    
  <div class="var">
    <footer class="footer">
      <div class="container">
        <p class="text-muted">2019年4月26日.</p>
      </div>
    </footer>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>