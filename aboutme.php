<?php
define('IN_HP',true);
define('SCRIPT','aboutme');
require dirname(__FILE__).'/includes/common.inc.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>关于我</title>
	<?php
		require ROOT_PATH.'/includes/title.inc.php';
	?>
</head>
<body>
	<?php
		require ROOT_PATH.'/includes/header.inc.php';
	?>
	<div id="main-content">
		<div class="container">
			<div class="span8">
				<h1 class="article-title">个人简介</h1>
				<footer class="content-meta">
					<span><i class="icon-tags"></i> 室内高级设计师</span>
					<span><i class="icon-calendar"></i> 2010年-2015年</span>
					<span><i class="icon-heart"></i>热心指数100%</span>
				</footer>
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="span3">
								<img src="http://7xnfx1.com1.z0.glb.clouddn.com/sgn-body.jpg" alt="孙冠男设计师个人照">
							</div>
							<div class="span5">
								<p>姓名：<strong>孙冠男</strong></p>
								<p><strong>安徽大学　艺术设计系</strong></p>
								<p>资格等级：<strong>室内高级设计师</strong></p>
								<p>主要业务：CAD家装图、3DMAX家居图、室内装潢设计、室内装潢估价等业务</p>
								<p>联系方式：</p>
								<ul>
									<li>手机号：18352530928</li>
									<li>邮箱：1217046098@qq.com</li>
									<li>QQ号：1217046098</li>
									<li>微信号：sun275199</li>
								</ul>
							</div>
						</div>
					</div>
					<h4>设计师心得</h4>
					<blockquote>
						　没有最好的设计，只有最合适的设计，去设计最合适客户的居室，从而让客户得到
						舒适便捷的生活体验。满足客户的舒适生活是我最大的最求。
					</blockquote>
				</div>
			</div>
			<div class="spane4">
				<aside id="sidebar-right">
					<h3>获得的荣誉</h3>
					<section>
						<p><strong>《2010年青年设计师二等奖》</strong></p>
						<p><strong>《2012年江苏设计筑巢奖》</strong></p>
						<p><strong>《受邀请2013年CCTV交换空间访谈》</strong></p>
					</section>
					<h3>手稿图</h3>
					<section>
						<img src="http://7xnfx1.com1.z0.glb.clouddn.com/art-2.jpg" class="img-polaroid" alt="孙冠男画稿1">
					</section>
					
				</aside>
			</div>
		</div>
	</div>
	<?php
		require ROOT_PATH.'/includes/footer.inc.php';
	?>
</body>
</html>