<!doctype html>
<html lang="en">
  <head>
    <title>库存已修改</title>
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
        <a class="navbar-brand" href="#">信息更新</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
</div>
        </nav>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">信息已更新</h1>
    
  </div>
</div>
      <div class="container">
    <div class="var">
    <?php
    $id=$_GET["vid"]; 
    $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
    mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
    mysqli_set_charset($con,"UTF8");   
    $sql = "SELECT* From videos where vid=$id";
     $result=mysqli_query($con,$sql);
     $row = mysqli_fetch_assoc($result);                              

            $jia=$_POST['jia'];
            $jian=$_POST['jian'];
            $kucun=$row["downtimes"]+$jia-$jian;
           
            $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
            mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
            mysqli_set_charset($con,"UTF8");     
            $sql = "update videos set downtimes='$kucun'where vid='$id'";
                  //执行SQL语句
            mysqli_query($con,$sql)or die("修改失败");
            //关闭数据库
            mysqli_close($con);  
            header("refresh:0.5.1;url='qiantai/index.php'");
     ?>

    
    </div>
    </div>

    
  <div class="var">
    <footer class="footer">
      <div class="container">
        <p class="text-muted">2020 ViaroLab.</p>
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