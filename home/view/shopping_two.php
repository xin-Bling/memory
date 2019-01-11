<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>下订单Memory</title>
	<link rel="icon" href="./images/花logo.jpg" type="image/x-icon"/>
	<script type="text/javascript" src="./lib/vue.js"></script>
	<script type="text/javascript" src="./lib/vue-router-3.0.2.js"></script>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./lib/animate.min.css">
	<link rel="stylesheet" type="text/css" href="./css/shopping_two.css">
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
				<div class="sc-one"></div>
				<div class="sc-two">
					<div class="sct-a">
						<div class="sct-zi">
							填写订单信息
						</div>
					</div>
					<div class="sct-b">
						收货人信息
						<span class="sctb-zi"><a href="">+增添新收货人</a></span>
					</div>
					<div class="sct-c">
						<div class="sctc-a">
							 <div class="sctc-zi0">收货人</div>
							 <div class="sctc-zi">收货地址</div>
							 <div class="sctc-zi1">电话</div>
							 <div class="sctc-zi2">操作</div>
						</div>
						<div class="sctc-b">
							<div class="sctc-zi3">
								<input type="radio" id="add" value="add" name="add" checked="checked">
								<label for="add"> </label>
							</div>
							<div class="sctc-zi4">健b仔</div>
							 <div class="sctc-zi">
							 	广东省肇庆市封开镇  江口信和傻逼601
							 </div>
							 <div class="sctc-zi1">
							 	13537151142
							 </div>
							 <div class="sctc-zi2">
								<a href="">修改 ></a>
								<a href="">删除 ></a>
							 </div>
						</div>
						<div class="sctc-b">
							<div class="sctc-zi3">
								<input type="radio" id="add1" value="add1" name="add" >
								<label for="add1"> </label>
							</div>
							<div class="sctc-zi4">玲仔</div>
							 <div class="sctc-zi">
							 	广东省东莞市企石镇  霞郎村宝石路248
							 </div>
							 <div class="sctc-zi1">
							 	13538364468
							 </div>
							 <div class="sctc-zi2">
								<a href="">修改 ></a>
								<a href="">删除 ></a>
							 </div>
						</div>
					</div>
					<div class="sct-ok">
						期待送达时间
					</div>
					<div class="sct-d">
						<div class="sctd-a">
							2019-01-
						</div>
						<div class="sctd-b">
							<input type="checkbox" id="sent" checked="checked" value="sent" name="sent" >
							<label for="sent">尽快发货  寄出</label>
						</div>
						<div class="sctd-c">
							<span style="color: #eb6100;font-weight: 550;">发货提醒</span>：您订购的商品由<span style="color: #eb6100;">顺丰快递</span>承运，不能承诺具体送达日期，您所选日期仅供发货参考，我们<br>
							<span style="padding-left: 8%;">将尽量让送达日期吻合或提前。</span>
							
						</div>
					</div>
					<div class="sct-ok">
						贺卡留言+署名
					</div>
					<div class="sct-e">
						<textarea class="scte-a"></textarea>
						<div class="scte-zi">
							最多输入200字，您还可以输入<span style="color: #eb6100;">200</span>字。(仅支持输入英文或中文)
						</div>
					</div>
				</div>
				<div class="sc-three">
					<div class="sct-a">
						<div class="sct-zi">
							购物清单
						</div>
					</div>
					<div class="sch-b">
						<div class="sch-img">
							<img src="./images/5.jpg">
							<div class="sch-zi">
								康乃馨长长久久<br>
								x1<br>
								<span style="color: #eb6100;">￥108</span>
							</div>
						</div>
					</div>
				</div>
				<div class="sc-four">
					<div class="scf-b">
						<input type="checkbox" id="invoice" checked="checked" value="invoice" name="invoice" >
						<label for="invoice">我要发票</label>
					</div>
					<div class="scf-zi">
						 1件商品，总商品金额：￥108
					</div>
					<div class="scf-zi">
						 配送费：￥0
					</div>
					<div class="scf-zi">
						实付：<span style="color: #eb6100;font-weight: 550;">￥108</span>
					</div>
					<div class="scf-zi1">
						<input class="scf-but" type="button" value="提交订单" name="">
					</div>
				</div>
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