<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册Memory</title>
	<link rel="icon" href="./images/花logo.jpg" type="image/x-icon"/>
	<script type="text/javascript" src="./lib/vue.js"></script>
	<script type="text/javascript" src="./lib/vue-router-3.0.2.js"></script>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./lib/animate.min.css">
	<link rel="stylesheet" type="text/css" href="./css/reg.css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<div id="app">
		<div class="reg-a">
			<div class="reg-b">
				<div class="regb-div">注册成为会员</div>
				<hr class="regb-hr">
				<hr class="regb-hr1">
				<div class="regb-span">我已是会员/手机短信登录，前往<span class="regbs-s"><a href="login.php">登录</a></span>></div>
				<div class="regb-box">
					<form>
						<input type="radio" id="man" value="man" name="sex" checked> 
						<label for="man">男士</label>
						<input type="radio"  id="women" value="women" name="sex" >
						<label for="women">女士</label>
					</form>
				</div>
				<div class="regb-input">
					<input type="text" class="regbi-in1" name="" placeholder="您的手机号*">
					<input type="text" class="regbi-in1" name="" placeholder="密码*">
					<input type="text" class="regbi-in1" name="" placeholder="重新密码*">
					<div class="regb-lett"> 
						<input type="text" class="regbi-in" name="" placeholder="验证码">
						<img class="regbi-in2" src="./images/3.png">
						<div class="regbi-img">看不清？<br>换一张</div>
					</div>
					<div class="regbi-yes">
						<div class="yes-l">
							<input type="checkbox" id="yes" value="yes" name="yes" >
						</div>
						<div class="yes-r">
							<label for="yes">
								我同意依照本使用条款和隐私政策对我的个人
								<br>信息进行收集和使用；我已阅读并确认被给予
								<br>充分机会理解该使用条款和隐私政策的内容
							</label>
						</div>
					</div>
				</div>
				<div >
					<input type="button"  class="regb-fin" value="立即注册" name="">
				</div>
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