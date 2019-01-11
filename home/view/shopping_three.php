<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>立即支付Memory</title>
	<link rel="icon" href="./images/花logo.jpg" type="image/x-icon"/>
	<script type="text/javascript" src="./lib/vue.js"></script>
	<script type="text/javascript" src="./lib/vue-router-3.0.2.js"></script>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./lib/animate.min.css">
	<style type="text/css">
		.shop-all{
			height: 100%;
			width: 100%;
		}
		.shop-a{
			background: #06332b;
			width: 100%;
			height: 50px;
		}
		.shop-b{
			height: 150px;
			width: 100%;
			text-align: center;
			border-bottom: 3px solid #626262;
		}
		.shop-b img{
			width: 350px;
			height: 155px;
		}
		.shop-c{
			height: 180px;
			width: 80%;
			margin-left: 13.2%;
			margin-top: 7%;
			background: #06332b;
			color: #fff;
			font-weight: 550;
			font-size: 1.5em;
			padding-top: 3%;
			padding-left: 3%;
		}
		.sc-zi{
			font-weight: 500;
			font-size: 0.8em;

		}
		.shop-d{
			height: 60px;
			width: 60%;
			margin-left: 10.7%;
		}
		.shop-d img{
			height: 30px;
			width: 80px;
			border: 1px solid #a5a5a5;
			margin-top: 2%;
			margin-left: 4%;
			float: left;
		}
		.sd-zi a{
			text-decoration: underline;
			float: left;
			margin-top: 3.2%;
			margin-left: 1%;
			font-size: 1.1em;
		}
		.sc-gou img{
			height: 45px;
			width: 45px;
		}
		.shop-e{
			height: 120px;
			width: 60%;
   			margin-left: 10.5%;
		}
		.se-zi{
			font-size: 1.3em;
			margin-left: 4%;
			margin-top: 1%;
		}
		.scf-but{
			margin-left: 4%;
			margin-top: 1%;
			background: #06332b;
			border: 1px solid #06332b;
			height: 50px;
			width: 120px;
			text-align: center;
			font-size: 1.1em;
			color: #fff;
		}
		.shop-bai{
			height: 120px;
			width: 100%;
			background: #fff;
		}
		.shop-lr{
			width: 100%;
			height: 450px;
		}
		.shop-left{
			width: 70%;
			height: 100%;
			float: left;
			height: 450px;
		}
		.shop-right{
			width: 30%;
			height: 450px;
			float: left;
		}
		.shop-he{
			background: #06332b;
			width: 50%;
			height: 81%;
			margin-top: 15.5%;
			color: #fff;
		    text-align: center;
		    margin-left: 20%;
		}
		.sr-top{
			font-size: 2em;
			color: #fff;
		    padding-top: 10%;
		    text-align: center;
		}
		.sr-zi{
			font-size: 1em;
		    padding-top: 2%;

		}
		.sr-zi a{
			color: #fff;
			text-decoration: underline;
		}
		.sr-zi a:hover{
			color: #fff;
			text-decoration: underline;
		}
		.sr-zi1{
			font-size: 1.4em;
		    padding-top: 13%;
		}
		.sr-zi2{
			width: 90%;
			margin: 0 auto;
			text-align: left;
			margin-top: 4%;
		}
	</style>
</head>
<body>
	<div id="app">
		<div class="shop-all">
			<div class="shop-a"></div>
			<div class="shop-b">
				<a href="./index.php"><img src="./images/logo-b.png"></a> 
			</div>
			<div class="shop-lr">
				<div class="shop-left">
					<div class="shop-c">
						<div class="sc-gou">
							<img src="./images/dui.png">  订单已成功提交，请尽快完成付款！
						</div>
						<div class="sc-zi">
							感谢您购买MEMOYRY的鲜花，订单号：201812141628001203
						</div>
						<div class="sc-zi">
							为了及时处理您的订单，请于下单的24个小时内完成付款，否则订单将会被取消
						</div>
					</div>
					<div class="shop-d">
						<img src="./images/2.jpg">
						<div class="sd-zi">
							<a href="">更多支付方式></a> 
						</div>
					</div>
					<div class="shop-e">
						<div class="se-zi">
							订单金额：<span style="color: #eb6100;font-size: 1.2em; font-weight: 550;">￥108</span>
						</div>
						<input class="scf-but" type="button" value="立即支付" name="">
					</div>
				</div>
				<div class="shop-right">
					<div class="shop-he">
						<div class="sr-top">
							跟踪订单
						</div>
						<div class="sr-zi">
							<a href="">我的账号</a>  > <a href="">我的订单</a> 
						</div>
						<div class="sr-zi">
							<a href="">会员中心 ></a>
						</div>
						<div class="sr-zi1">
							联系我们
						</div>
						<div class="sr-zi2">
							任何问题，扫描微信二维码，联系在线客服。 工作时间：周一至周五9:00-21:00；周六、周日 10:00-18:00，法定节假日休息
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