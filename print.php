<!doctype html>
<html lang="en">

<head>
  <title>注册反馈</title>
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
      <a class="navbar-brand" href="#">注册反馈</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">已在九霄天擎完成注册</h1>
      <p class="lead">点击跳转到<a href="./coustomer.php">商户管理界面.</a></p>
    </div>
  </div>

  <div class="container">
    <div class="var">
      <h2>注册信息</h2>
      </h2>
      <div class="var">
        <?php

        $username = trim($_POST['username']);
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $brithyear = $_POST['year'];
        $brithmonth = $_POST['month'];
        $brithday = $_POST['date'];
        $hobby = $_POST['hobby'];
        $degree = $_POST['degree'];
        $intro = $_POST['intro'];
        $brithdate = $brithyear . "-" . $brithmonth . "-" . $brithday;
        $filename = $_FILES["file"]["name"];
        $con = mysqli_connect("localhost", "root", "") or die("canot connect server");
        mysqli_select_db($con, "neuvideo") or die("cannot select DB");
        mysqli_set_charset($con, "UTF8");
        $sql = "INSERT INTO users (uname,password,gender,brithdate,hobby,degree,intro,pic)
                VALUES ('$username','$password','$gender','$brithdate','$hobby','$degree','$intro','$filename')";
        //执行SQL语句
        mysqli_query($con, $sql) or die("插入失败");
        //关闭数据库
        mysqli_close($con);

        echo "注册成功，您的信息如下" . "<br>";
        echo "户主名：" . $username . "<br>";
        echo "密码：" . $password . "<br>";
        echo "执照期限：" . $brithyear . "年" . $brithmonth . "月" . $brithday . "日" . "<br>";
        echo "商户类型：" . $hobby . "<br>";
        echo "经营类型：" . $intro . "<br>";
        echo "商店名称：" . $degree . "<br>";


        if ($gender == 1)
          echo "性别：男";
        else
          echo "性别：女";




        ?>
        <?php
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        // 判断错误
        if ($_FILES["file"]["error"] > 0) {
          switch ($_FILES["file"]["error"]) {
            case 1:
              echo "文件过大";
              break;
            case 3:
              echo "部分上传";
              break;
            case 4:
              echo "没有上传";
              break;
            default:
              echo "未知错误";
          }
          exit;
        }

        // 限制格式
        $allowtype = array("jpg", "png", "gif", "bmp", "flv",);
        $arr = explode(".", $_FILES["file"]["name"]);
        $suffix = $arr[count($arr) - 1];
        if (!in_array($suffix, $allowtype)) {
          echo "文件类型错误！";
          exit;
        }

        // 拷贝文件
        $filepath = "./images/";

        // 存放路径
        move_uploaded_file($_FILES["file"]["tmp_name"], "./img/" . $_FILES["file"]["name"]);
        ?>
      </div>
    </div>


    <div class="var">
      <footer class="footer">
        <div class="container">
          <p class="text-muted">2020年4月4日.</p>
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