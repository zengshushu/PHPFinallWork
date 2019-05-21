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
    <h1 class="display-4">增加成功！</h1>
    <p class="lead">恭喜呀.</p>
  </div>
</div>
      <div class="container">
    <div class="var">
    <h2>增加信息</h2></h2>
    <div class="var">
        <?php
        
            $username=trim($_POST['username']);
            $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
            mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
            mysqli_set_charset($con,"UTF8");     
            $sql = "INSERT INTO videotype (typename) VALUES ('$username')";
                  //执行SQL语句
            mysqli_query($con,$sql)or die("插入失败");
            //关闭数据库
            mysqli_close($con);  

            echo"增加成功，您的信息如下"."<br>";
            echo"新增：".$username."<br>";
            
            ?>
    </div>
    </div>

    
  <div class="var">
    <footer class="footer">
      <div class="container">
        
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