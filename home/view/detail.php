<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Memory详情页</title>
	<link rel="icon" href="./images/花logo.jpg" type="image/x-icon"/>
	<script type="text/javascript" src="./lib/vue.js"></script>
	<script type="text/javascript" src="./lib/vue-router-3.0.2.js"></script>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="./lib/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./lib/animate.min.css">
	<link rel="stylesheet" type="text/css" href="./css/detail.css">
	<style type="text/css">

	</style>
</head>
<body>
	<div id="app">
		<?php  
			include("./header.php");
		?>
		<div class="det-a">
			<a href="">首页</a> >
			<a href="">节日鲜花</a> >
			<a href="">母亲节</a> >
			<a href="">康乃馨</a> >
			<span style="color: #000;">紫红色康乃馨长长九九</span>
		</div>
		<div class="det-b">
			<div class="detb-left">
				<img src="./images/9.jpg">
				<div class="detbl-img">
					<div class="detbli-box">
						<img src="./images/9.jpg">
					</div>
					<div class="detbli-box">
						<img src="./images/6.jpg">
					</div>
					<div class="detbli-box">
						<img src="./images/7.jpg">
					</div>
					<div class="detbli-box">
						<img src="./images/8.jpg">
					</div>
				</div>
			</div>
			<div class="detb-right">
				<div class="detbr-a">
					紫红色康乃馨长长九九
				</div>
				<div class="detbr-b">
					<div class="detbrb-a">
						<span> 花材 : </span><span>紫红色康乃馨9枝，粉色多头康乃馨10枝</span>
					</div>
					<div class="detbrb-b">
						<span>包装 : </span><div  class="db">白色雪梨纸，香芋紫人造纸，粉色opp雾面纸，白蓝罗纹带花结</div>
					</div>
					<div class="detbrb-c">
						<span>花语 : </span><div  class="db">没你疼爱我怎么生活，没你抚养我怎能长大，你给了我青春的年华，自己却满头白发，不负青春年华，是对你最好的报答！</div>
					</div>
					<div class="detbrb-a">
						<span>说明 : </span><span>请提前1天订购</span>
					</div>
				</div>
				<div class="det-c">
					<div class="detbra-zi">
						<div class="detbr-c">
							市场价：￥328
						</div>
						<div class="detbr-d">
							现场价：<span style="color: #f00;">￥128</span> 
						</div>
						<div class="detbr-e">
							书写评论
						</div>
					</div>
					<div class="detbra-img">
						<img src="./images/like-b.png">
					</div>
				</div>
				
				<div class="detbr-cc">
					<input type="buttom" value="-" name="" class="decc-box">
					<input type="text" class="decc-text" name="" placeholder="1">
					<input type="buttom" value="+" name="" class="decc-box">
					<input type="buttom" value="立即购买" class="decc-buy" name="">
				</div>
				
			</div>
		</div>
		<div class="det-d">
			<div class="detd-head">
				产品详情
				<hr class="detd-hr">
				<div class="detd-kuai"></div>
			</div>
			<div class="detd-img">
				<img src="./images/11.jpg">
				<img src="./images/12.jpg">
			</div>
		</div>
		<div class="det-e">
			<div class="detd-head">
				用户评论
				<hr class="detd-hr">
				<div class="detd-kuai"></div>
			</div>
			<div class="dete-look">
				<div class="detel-left">
					<img src="./images/9.jpg">
					<div class="detell-zi">
						# 紫红色康乃馨长长九九
					</div>
				</div>
				<div class="detel-right">
					<div class="detelr-zi">
						阅读5条评论
					</div>
					<div class="detelr-add">
						<input type="buttom" value="添加你的评论" class="detelr-but" name="">
					</div>
				</div>
			</div>
			<div class="dete-user">
				<div class="deteu-left">
					<div class="deteul-a">13537151142</div>
					<div class="deteul-a">2018-12-30</div>
					<div class="deteul-a">00:00:00</div>
					<div class="deteul-a">线上官网购买</div>
				</div>
				<div class="deteu-right">
					<div class="deteur-ul">
						<ul>
							<li>包装好</li>
							<li>新鲜</li>
						</ul>
					</div>
					<div class="deteur-pl">
						妈妈很喜欢
					</div>
				</div>
			</div>
			<div class="dete-user">
				<div class="deteu-left">
					<div class="deteul-a">13537151142</div>
					<div class="deteul-a">2018-12-30</div>
					<div class="deteul-a">00:00:00</div>
					<div class="deteul-a">线上官网购买</div>
				</div>
				<div class="deteu-right">
					<div class="deteur-ul">
						<ul>
							<li>包装好</li>
							<li>新鲜</li>
							<li>物流速度</li>
						</ul>
					</div>
					<div class="deteur-pl">
						很合适
					</div>
				</div>
			</div>
		</div>
		<div class="det-f">
			<div class="detd-head">
				你可能还喜欢
				<hr class="detd-hr">
				<div class="detd-kuai"></div>
			</div>
			<div class="detaf-cp">
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
		<?php  
			include("./bottom.php");
		?>
	</div>
		<!-- <iframe src="bottom.html" width="100%" height="480px" scrolling="no" frameborder="no" border="0"></iframe> -->
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