<!doctype html>
<html lang="en">
  <head>
    <title>修改</title>
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
        <a class="navbar-brand" href="#">修改</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       
        </div>
</div>
        </nav>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">修改信息 </h1>
    <p class="lead">修改界面.</p>
    <p class="lead">16180600404曾立新</p>
  </div>
</div>
      <div class="container">
    <div class="var">
    <h2>在此修改</h2>
    <div class="var">
    <?php
    $id=$_GET["uid"]; 
    $con=mysqli_connect("localhost", "root", "")or die("canot connect server");
    mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
    mysqli_set_charset($con,"UTF8");   
    $sql = "SELECT* From users where uid=$id";
     $result=mysqli_query($con,$sql);
     $row = mysqli_fetch_assoc($result);                              
    echo '<form action="doUserChange.php?uid='.$row["uid"].'" method="post" enctype="multipart/form-data">';
    ?>
  <div class="form-row">
        <div class="form-group col-md-6">
                <label for="inputAddress">姓名</label>
                <input type="text" class="form-control" id="inputName4" placeholder="userame" name="username" required>
              </div>
    
    <div class="form-group col-md-6">
      <label for="inputPassword4">密码</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="password" name="password" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-12">
        <label for="input">爱好</label>
        <input type="text" class="form-control" id="text" placeholder="介绍" name="hobby" required>
    </div>
</div>
<div class="form-row">
        <div class="form-group col-md-12">
              <label for="input">介绍</label>
              <input type="text" class="form-control" placeholder="介绍" name="intro" required>
          </div>
      </div>
  <div class="form-group">
    <label for="inputAddress2">学历</label>
    <select id="inputState" class="form-control" name="degree" required>
        <option selected>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputState">出生年份</label>
      <select id="inputState" class="form-control" name="year" required>
        <option selected>1996</option>
        <option>1997</option>
        <option>1998</option>
        <option>1999</option>
        <option>2000</option>
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
      <input type="text" class="form-control" id="inputZip" name="date" required>
    </div>
  </div>
  <div class="form-group">
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
  <label class="form-check-label" for="inlineRadio1" checked>男</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
  <label class="form-check-label" for="inlineRadio2">女</label>
</div>

    <div class="custom-file form-inline">
        <input type="file"  name="file" class="custom-file-input" >
        <label class="custom-file-label" for="customFile" style="padding:12px">选择照片</label>
      </div>
  </div>
  <button type="submit" class="btn btn-primary">修改</button>
</form>
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