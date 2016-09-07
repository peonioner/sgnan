<?php
/**
 * 拒绝非法访问
 */
if (!defined('IN_HP')) {
	exit('Access denied!');
}

?>
<header>
   <div class="container">
       <div class="row">
           <div class="span6">
              <a href="index.php" title="回到首页">
                   <img id="logo" src="http://7xnfx1.com1.z0.glb.clouddn.com/logo.png" alt="个人主页">
               </a>
           </div>
           <div class="span6">
               <h2 id="msg" class="pull-right"><small><i>只做有品味的设计师</i></small></h2>
           </div>
       </div>
   </div>
</header>
<nav id="navgation">
   <div class="container">
      <div class="navbar">   
        <ul class="nav">
          <li class="active" id="index-nav"><a href="index.php">首页</a></li>
          <li id="mydesign-nav"><a href="mydesign.php">我的设计</a></li>
          <li id="aboutme-nav"><a href="aboutme.php">关于</a></li>
        </ul>
      </div>
    </div>
</nav>
