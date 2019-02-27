<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类Memory</title>
	<link rel="icon" href="./images/花logo.jpg" type="image/x-icon"/>
	<script type="text/javascript" src="./lib/vue.js"></script>
	<script type="text/javascript" src="./lib/vue-router-3.0.2.js"></script>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="./lib/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./lib/animate.min.css">
	<link rel="stylesheet" type="text/css" href="./css/fenlei.css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<div id="app">
		<div class="fen-all">
			<?php  
				include("./header.php");
			?>
			<div class="fen-ok">
				<div class="fen-a">
					<div class="fena-top">
						情义鲜花
					</div>
					<div class="fena-bot">
						<div class="fena-1">
							<a href="">
								<img src="./images/hua_pink.png">
								<div class="fena1-zi">送长辈</div>
							</a>
						</div>
						<div class="fena-1">
							<a href="">
								<img src="./images/hua_grey.png">
								<div class="fena1-zi">送长辈</div>
							</a>
						</div>
						<div class="fena-1">
							<a href="">
								<img src="./images/hua_grey.png">
								<div class="fena1-zi">送长辈</div>
							</a>
						</div>
						<div class="fena-1">
							<a href="">
								<img src="./images/hua_grey.png">
								<div class="fena1-zi">送长辈</div>
							</a>
						</div>
						<div class="fena-1">
							<a href="">
								<img src="./images/hua_grey.png">
								<div class="fena1-zi">送长辈</div>
							</a>
						</div>
					</div>
				</div>
				<div class="fen-b">
					<div class="fenb-top">
						首页>情义鲜花>送长辈
						<select class="fenbt-sel">
							<option selected="selected">排序按照</option>
							<option>热度</option>
							<option>价格由高到底</option>
							<option>价格由底到高</option>
						</select>
					</div>
					<div class="fenb-bot">
						<div class="det-cp1">
							<div class="detafca-a">
								人气
							</div>
							<div class="detafc-a">
								<img src="./images/3.jpg">
								<div class="detafca">
									火烈玫瑰 送长辈 满满生机 你值得拥有
								</div>
								<div class="detafca">
									The Red Rose
								</div>
								<div class="detafcb">
									￥299
								</div>
							</div>
						</div>
						<!-- <a href="">
							<div class="cp-none"></div>
						</a> -->
						<div class="det-cp1">
							<div class="detafca-a">
								人气
							</div>
							<div class="detafc-a">
								<img src="./images/3.jpg">
								<div class="detafca">
									火烈玫瑰 送长辈 满满生机 你值得拥有
								</div>
								<div class="detafca">
									The Red Rose
								</div>
								<div class="detafcb">
									￥299
								</div>
							</div>
						</div>
						<div class="det-cp2">
							<div class="detafca-a">
								人气
							</div>
							<div class="detafc-a">
								<img src="./images/3.jpg">
								<div class="detafca">
									火烈玫瑰 送长辈 满满生机 你值得拥有
								</div>
								<div class="detafca">
									The Red Rose
								</div>
								<div class="detafcb">
									￥299
								</div>
							</div>
						</div>
						<div class="det-cp1">
							<div class="detafca-a">
								人气
							</div>
							<div class="detafc-a">
								<img src="./images/3.jpg">
								<div class="detafca">
									火烈玫瑰 送长辈 满满生机 你值得拥有
								</div>
								<div class="detafca">
									The Red Rose
								</div>
								<div class="detafcb">
									￥299
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php  
				include("./bottom.php");
			?>
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