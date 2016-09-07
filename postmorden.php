<?php
define('IN_HP',true);
define('SCRIPT','show');
require dirname(__FILE__).'/includes/common.inc.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>后现代化作品展示</title>
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
			<div class="row">
				<div class="span9">
					<h3>后现代化作品展示</h3>
					<section>
						<h4>客厅展示</h4>
						<img src="http://7xnfx1.com1.z0.glb.clouddn.com/postmorden-1.jpg" alt="孙冠男-后现代化1">
					</section>
					<section>
						<h4>卫生间展示</h4>
						<img src="http://7xnfx1.com1.z0.glb.clouddn.com/postmorden-2.jpg" alt="孙冠男-后现代化2">
					</section>
				</div>
				<div class="span3">
					<h3>作品介绍</h3>
					<section>
						<blockquote class="pull-left">
							<p>融入后现代化的家装设计</p>
							<p>体味工业革命后的静谧</p>
							<small class="designer">孙冠男</small>
						</blockquote>
					</section>
				</div>
			</div>
		</div>
	</div>
	<?php
		require ROOT_PATH.'/includes/footer.inc.php';
	?>
</body>
</html>