<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>购物车Memory</title>
	<link rel="icon" href="./images/花logo.jpg" type="image/x-icon"/>
	<script type="text/javascript" src="./lib/vue.js"></script>
	<script type="text/javascript" src="./lib/vue-router-3.0.2.js"></script>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./lib/animate.min.css">
	<link rel="stylesheet" type="text/css" href="./css/shopping_one.css">
	<style type="text/css">

	</style>
</head>
<body>
	<div id="app">
		<div class="shop-all">
			<div class="shop-a"></div>
			<div class="shop-b">
				<a href="./index.php"><img src="./images/logo-b.png"></a> 
			</div>
			<div class="shop-c">
				<div class="sc-one">
					购物车(<span>1</span>)
					<div class="sco-zi"><a href="">继续购物></a></div>
				</div>
				<div class="sc-two">
					<div class="sct-a">
						<div class="sct-box">
							<input type="checkbox" id="sall" value="sall" name="sall" >
							<label for="sall"> </label>
						</div>
						<div class="sct-zi">
							全选
						</div>
						<div class="sct-zi">
							商品
						</div>
						<div class="sct-zi1">
							单价
						</div>
						<div class="sct-zi1">
							数量
						</div>
						<div class="sct-zi2">
							总计
						</div>
					</div>
					<div class="sct-b">
						<div class="sct-box1">
							<input type="checkbox" v-mode="" id="flow" value="flow" name="flow" >
							<label for="flow"> </label>
						</div>
						<div class="sctb-img">
							<img src="./images/5.jpg">
						</div>
						<div class="sct-tail">
							<div class="sct-ti">
								母爱-康乃馨长长久久
							</div>
							<span class="sct-del">删除</span>
						</div>
						<div class="sct-single">
							 ￥108
						</div>
						<div class="sct-num">
							<input type="button" class="sctn-jian" value="-" name="">
							<input type="text" class="sctn-test" value="1" name="">
							<input type="button" class="sctn-jia" value="+" name="">
						</div>
						<div class="sct-single1">
							 ￥108
						</div>
					</div>
					<div class="sct-b">
						<div class="sct-box1">
							<input type="checkbox" v-mode="" id="flow1" value="flow1" name="flow1" >
							<label for="flow1"> </label>
						</div>
						<div class="sctb-img">
							<img src="./images/5.jpg">
						</div>
						<div class="sct-tail">
							<div class="sct-ti">
								母爱-康乃馨长长久久
							</div>
							<span class="sct-del">删除</span>
						</div>
						<div class="sct-single">
							 ￥108
						</div>
						<div class="sct-num">
							<input type="button" class="sctn-jian" value="-" name="">
							<input type="text" class="sctn-test" value="1" name="">
							<input type="button" class="sctn-jia" value="+" name="">
						</div>
						<div class="sct-single1">
							 ￥108
						</div>
					</div>
				</div>
			</div>
			<div class="shop-d">
				 注意：【本店仅发顺风快递】<br>
					 <span class="sd-zi">*确保鲜花的新鲜与保存</span> <br>
					 <span class="sd-zi">*从广东东莞发出 注意验收</span> 
			</div>
			<div class="shop-e">
				<div class="se-right">
					<div class="ser-a"> 
						<a href=""><继续购物</a> 
					</div> 
					应付金额: <span class="ser-zi">￥108</span>
					<input type="button" class="ser-buy" value="去结算" name="">
				</div>
				
			</div>
			<div class="shop-bai">
				
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