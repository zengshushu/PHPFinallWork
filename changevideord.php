<!doctype html>
<html lang="en">
  <head>
    <title>修改ViaroLab数据</title>
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
        <a class="navbar-brand" href="#">在此修改信息</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       
        </div>
</div>
        </nav>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">修改信息 </h1>
    <p class="lead">可以在此修改产品所有信息.</p>
    <p class="lead">ViaroLab</p>
  </div>
</div>
      <div class="container">
    <div class="var">
    <h2>确认您的修改</h2>
    <div class="var">
    <?php
    $id=$_GET["vid"]; 
    $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
    mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
    mysqli_set_charset($con,"UTF8");   
    $sql = "SELECT* From videos where vid=$id";
     $result=mysqli_query($con,$sql);
     $row = mysqli_fetch_assoc($result);                              
    echo '<form action="changevideo.php?vid='.$row["vid"].'" method="post" enctype="multipart/form-data">';
    ?>
  <div class="form-row">
        <div class="form-group col-md-6">
                <label for="inputAddress">商品名称</label>
                <input type="text" class="form-control" id="inputName4"  value="<?php echo $row["videoname"];?>" name="username" required>
              </div>
    
  </div>
  <div class="form-row">
  <div class="form-group col-md-12">
        <label for="input">库存</label>
        <input type="text" class="form-control" id="text"  value="<?php echo $row["downtimes"];?>" name="downtimes" required>
    </div>
</div>
<div class="form-row">
        <div class="form-group col-md-12">
              <label for="input">条码</label>
              <input type="text" class="form-control"  value="<?php echo $row["intro"];?>" name="intro" required>
          </div>
      </div>
      <div class="form-group">
        <label for="inputAddress2">价格</label>
        <input type="text" class="form-control"  value="<?php echo $row["price"];?>" name="price" required>
          <label for="inputAddress2">种类</label>
          <select id="inputState" class="form-control" name="type" required>
              <option selected> <?php echo $row["tid"];?></option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>
      </div>

  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputState">修改日期</label>
      <select id="inputState" class="form-control" name="year" required>
        <option selected>2020</option>
        <option>2021</option>
        <option>2022</option>
        <option>2023</option>
        <option>2024</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">月份</label>
      <select id="inputState" class="form-control" name="month" required>
        <option selected>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">日</label>
      <input type="text" value="1" class="form-control" id="inputZip" name="date" required>
    </div>
  </div>
  <div class="form-group">
    <div class="custom-file form-inline">
        <input type="file"  name="file" class="custom-file-input" >
        <label class="custom-file-label" for="customFile" style="padding:12px">选择商品图</label>
      </div>
  </div>
  <button type="submit" class="btn btn-primary">修改</button>
</form>
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