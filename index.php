<?php
define('IN_HP', true);
define('SCRIPT','index');
require dirname(__FILE__).'/includes/common.inc.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>设计师的个人主页</title>
    <?php
      require ROOT_PATH.'/includes/title.inc.php';
    ?>
</head>
<body>
   <?php
    require ROOT_PATH.'/includes/header.inc.php';
   ?>
    <div id="carousel">
      <div class="container">
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators" style="list-style-type:none">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item">
              <a href="chinesestyle.php"><img src="http://7xnfx1.com1.z0.glb.clouddn.com/carousel-1.jpg" alt="中国风天鹅湖"></a>
              <div class="carousel-caption"><p class="carousel-caption-desc">"中国风"风格的室内装潢风格设计--天鹅湖</p></div>
            </div>
            <div class="item">
              <a href="jane.php"><img src="http://7xnfx1.com1.z0.glb.clouddn.com/carousel-2.jpg" alt="简欧设计"></a>
              <div class="carousel-caption"><p class="carousel-caption-desc">简式欧洲风格的室内装潢设计</p></div>
            </div>
            <div class="item">
              <a href="postmorden.php"><img src="http://7xnfx1.com1.z0.glb.clouddn.com/carousel-3.jpg" alt="后现代设计"></a>
              <div class="carousel-caption"><p class="carousel-caption-desc">融合后现代元素的室内装潢设计</p></div>
            </div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
      </div>
    </div>
    <div id="list-image">
      <div class="container">
        <h2>作品展示</h2>
        <div class="row">
          <div class="span3">
            <a href="jane.php"><img src="http://7xnfx1.com1.z0.glb.clouddn.com/list-1.jpg" class="img-polaroid" alt="孙冠男作品1"></a>
          </div>
          <div class="span3">
            <a href="huistyle.php"><img src="http://7xnfx1.com1.z0.glb.clouddn.com/list-2.jpg"  alt="孙冠男作品2"></a>
          </div>
          <div class="span3">
            <a href="simple.php"><img src="http://7xnfx1.com1.z0.glb.clouddn.com/list-3.jpg" class="img-polaroid" alt="孙冠男作品3"></a>
          </div>
          <div class="span3">
            <a href="postmorden.php"><img src="http://7xnfx1.com1.z0.glb.clouddn.com/list-4.jpg" alt="孙冠男作品4"></a>
          </div>
        </div>
      </div>
    </div>
    <?php
      require ROOT_PATH.'/includes/footer.inc.php';
    ?>
</body>
</html>