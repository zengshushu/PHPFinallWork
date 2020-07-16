<!doctype html>
<html lang="en">

<head>
  <title> </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="height: 120vh;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class=container>
      <a class="navbar-brand" href="#">ViaroLab搜索结果</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="lead">点击跳转到<a href="./index.php">商品界面.</a></p>
    </div>
  </div>

  <div class="container" style="width: 1000px;">
    <div class="var" style="float:left;
    height:90px;
    margin:5px;">

      <div class="var" >
        <?php

        $k= $_GET['k'];
        $con = mysqli_connect("localhost", "root", "") or die("canot connect server");
        mysqli_select_db($con, "neuvideo") or die("cannot select DB");
        mysqli_set_charset($con, "UTF8");
        $sql = "SELECT * FROM videos WHERE intro LIKE '%$k%' LIMIT 10";
        //执行SQL语句
        $result=mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        //关闭数据库
        mysqli_close($con);
        if($row>=15){
        echo ' <img src="../videoimg/'.$row["pic"].'" style="width:200px; height:200px;">'."<br>";
        
        echo "商品名称：".$row["videoname"]."<br>";
        echo "条码：".$row["intro"]."<br>";
        echo "库存：".$row["downtimes"]."<br>";
        echo "价格：".$row["price"]."<br>";
        }else{
            echo"未找到搜索结果";
        }

        ?>
   
      </div>
    </div>
    <?php                            
    echo '<form action="../dogoodChange.php?vid='.$row["vid"].'" method="post" enctype="multipart/form-data">';
    ?>
    <div class="testfloat" style="float:right; margin-right:300px; margin-top:2vh">
    <div class="form-row" style="width:200px">
  <div class="form-group col-md-12">
        <label for="input">卖出</label>
        <input type="text" class="form-control" id="text"  name="jian" required>
    </div>
    <div class="form-group col-md-12">
        <label for="input">新增</label>
        <input type="text" class="form-control" id="text"  name="jia" required>
    </div>
</div>
<button type="submit" class="btn btn-primary">修改</button>
      </form>
    </div>


    </div>
  



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 
</body>

</html>