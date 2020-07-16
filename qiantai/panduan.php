
<?php 
//连接数据库
$con=mysqli_connect("localhost", "root", "")or die("canot connect server");
mysqli_select_db($con,"neuvideo")or die("cannot select DB");   
mysqli_set_charset($con,"UTF8");   


//取登录页表单数据
$uname=trim($_POST["uname"]);
$password=$_POST["pass"];
echo $uname;
$sql="select * from users where uname='$uname' and password='$password' ";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);

if ($num>0) {
	session_start();//启动session
	$_SESSION["uname"]=$uname; //将管理员用户名写入session
	?>
<body> 
	<style>
body {
  margin: 0;background-color: #fff;
}

#particles-js {
  position: absolute;
  height: 100%;
  width: 100%;
}

.text {
  color:#333;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  width: 300px;
  top: calc(50% - 100px);
  left: calc(50% - 150px);font-size:4em; font-weight: 400;
}

.img {
  display: inline-block;
  height: 100px;
  z-index: 100;
}
</style>


<body>

<script src="js/particles.min.js"></script>

<div class="text">
	
 

<script language="javaScript"> 
                                        now = new Date(),hour = now.getHours() 
                                        if(hour < 6){document.write("小心猝死哦！正在登录")} 
                                        else if (hour < 9){document.write("早上好！正在登录")} 
                                        else if (hour < 12){document.write("上午好！正在登录")} 
                                        else if (hour < 14){document.write("中午好！正在登录")} 
                                        else if (hour < 17){document.write("下午好！正在登录")} 
                                        else if (hour < 19){document.write("傍晚好！正在登录")} 
                                        else if (hour < 22){document.write("晚上好！正在登录")} 
                                        else {document.write("夜里好！正在登录")} 
                          </script> 
</div>
<div id="particles-js"></div>

<script>
/* ---- particles.js config ---- */

particlesJS("particles-js", {
  particles: {
    number: {
      value: 80,
      density: {
        enable: true,
        value_area: 800
      }
    },
    color: {
      value: ["#2EB67D", "#ECB22E", "#E01E5B", "#36C5F0"]
    },
    shape: {
      type: ["circle"],
      stroke: {
        width: 0,
        color: "#fff"
      },
      polygon: {
        nb_sides: 5
      } 
    },
    opacity: {
      value: 1,
      random: false,
      anim: {
        enable: false,
        speed: 1,
        opacity_min: 0.1,
        sync: false
      }
    },
    size: {
      value: 8,
      random: true,
      anim: {
        enable: false,
        speed: 10,
        size_min: 10,
        sync: false
      }
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#808080",
      opacity: 0.4,
      width: 1
    },
    move: {
      enable: true,
      speed: 5,
      direction: "none",
      random: false,
      straight: false,
      out_mode: "out",
      bounce: false,
      attract: {
        enable: false,
        rotateX: 600,
        rotateY: 1200
      }
    }
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: {
        enable: true,
        mode: "grab"
      },
      onclick: {
        enable: true,
        mode: "push"
      },
      resize: true
    },
    modes: {
      grab: {
        distance: 140,
        line_linked: {
          opacity: 1
        }
      },
      bubble: {
        distance: 400,
        size: 40,
        duration: 2,
        opacity: 8,
        speed: 3
      },
      repulse: {
        distance: 200,
        duration: 0.4
      },
      push: {
        particles_nb: 4
      },
      remove: {
        particles_nb: 2
      }
    }
  },
  retina_detect: true
});
</script>

             </body> 
	<?php
	
	header("refresh:2.1;url='index.php'");
}else
{   echo "登录失败 用户名密码错误！2秒后将返回登录页重新登录<br/>";
	header("refresh:2;url='login.php'");
}
	 ?>