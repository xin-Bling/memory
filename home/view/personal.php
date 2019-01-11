<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心Memory</title>
	<link rel="icon" href="./images/花logo.jpg" type="image/x-icon"/>
	<script type="text/javascript" src="./lib/vue.js"></script>
	<script type="text/javascript" src="./lib/vue-router-3.0.2.js"></script>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./lib/animate.min.css">
	<link rel="stylesheet" type="text/css" href="./css/personal.css">
	<style type="text/css">

	</style>
</head>
<body>
	<div id="app">
		<?php  
			include("./header.php");
		?>
		<div class="per-all">
			<div class="fen-a">
				<div class="fena-top">
					个人信息
				</div>
				<div class="fena-bot">
					<div class="fena-1">
						<a href="">
							<img src="./images/hua_pink.png">
							<div class="fena1-zi">个人信息</div>
						</a>
					</div>
					<div class="fena-1">
						<a href="">
							<img src="./images/hua_grey.png">
							<div class="fena1-zi">收货地址</div>
						</a>
					</div>
					<div class="fena-1">
						<a href="">
							<img src="./images/hua_grey.png">
							<div class="fena1-zi">我的订单</div>
						</a>
					</div>
					<div class="fena-1">
						<a href="">
							<img src="./images/hua_grey.png">
							<div class="fena1-zi">我的收藏</div>
						</a>
					</div>
					<div class="fena-1">
						<a href="">
							<img src="./images/hua_grey.png">
							<div class="fena1-zi">我的评论</div>
						</a>
					</div>
				</div>
			</div>
			<div class="fen-b">
				<div class="fenb-top">
					首页>会员中心>个人信息
				</div>
			</div>
	</div>
	
	
	<script type="text/javascript">
	
	var xin = new Vue({
		el:"#app",
		data:{ 
		},
		methods:{ 
		}
	})

	</script>
</body>
</html>