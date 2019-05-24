<!doctype html>
<html lang="en">
  <head>
    <title>修改一个</title>
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
    <h1 class="display-4">修改成功！已经写入数据库</h1>
    <p class="lead">.</p>
    
  </div>
</div>
      <div class="container">
    <div class="var">
    <h2>您的修改信息如下</h2>
    <div class="var">
        <?php
        $vid=$_GET["vid"];
            $videoname=trim($_POST['username']);
            $tid=$_POST['type'];
            $intro=$_POST['intro'];
            $type=$_POST['type'];
            $people=$_POST['degree'];
            $brithyear=$_POST['year'];
            $brithmonth=$_POST['month'];
            $brithday=$_POST['date'];
            $address=$_POST['address'];
            $brithdate=$brithyear."-".$brithmonth."-".$brithday;
            $filename=$_FILES["file"]["name"];
            $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
            mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
            mysqli_set_charset($con,"UTF8");     
            $sql = "update videos set videoname='$videoname', tid='$type',address='$address',uploaddate='$brithdate',uploadadmin='$people',intro='$intro',pic='$filename' where vid='$vid'";
                  //执行SQL语句
            mysqli_query($con,$sql)or die("修改失败");
            //关闭数据库
            mysqli_close($con);  


            echo"增加成功，信息如下"."<br>";
            echo"名称：".$videoname."<br>";
            echo"种类：".$type."<br>";
            echo"介绍：".$intro."<br>";
            echo"日期：".$brithyear."年".$brithmonth.$brithdate."日"."<br>";
            echo"地址：".$address."<br>";

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
        $filepath="./videoimg/";
	      
            // 存放路径
            move_uploaded_file($_FILES["file"]["tmp_name"],"./videoimg/".$_FILES["file"]["name"]);
            ?>
    
    </div>
    </div>

    
  <div class="var">
    <footer class="footer">
      <div class="container">
        <p class="text-muted">2019年4月9日.</p>
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