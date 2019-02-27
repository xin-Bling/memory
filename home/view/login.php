<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录Memory</title>
	<link rel="icon" href="./images/花logo.jpg" type="image/x-icon"/>
	<script type="text/javascript" src="./lib/vue.js"></script>
	<script type="text/javascript" src="./lib/vue-router-3.0.2.js"></script>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./lib/animate.min.css">
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<style type="text/css">
	</style>
</head>
<body>
	<div id="app">
		<div class="log-a">
			<div class="log-w">
				<a href="index.php"><img src="./images/logo-w.png" width="270px" height="130px"></a>
			</div>
			<div class="log-b">
				<div class="logb-left">
					<span>
						<router-link to='/login_num' tag='span'>账号登录</router-link>
					</span>
				</div>
				<div class="logb-right">
					<span>
						<router-link to='/login_mess' tag='span'>短信登录</router-link>
					</span>
				</div>
				
			</div>
			<router-view></router-view>
			<div class="log-d">
				<input type="button" class="logd-yes" value="登录">
			</div>
		</div>
	</div>
	<!-- 验证码登录 -->
	<template id="temp1">
		<div class="log-c">
			<hr width="170px" class="log-hr1">
			<hr width="165px" class="log-hr">
			<input class="logc-input1"  type="text" name="" placeholder="手机号">
			<br><br>
			<input class="logc-input2"  type="text" name="" placeholder="验证码">
			<input class="btn btn-default logc-input3" type="button" value="获取验证码">
			<br><br>
			<span class="logc-span"><a href="res.php">立即注册></a></span>
			<span class="logc-span1">忘记密码？</span>
		</div>
	</template>
	<!-- 账号登录 -->
	<template id="temp">
		<div class="log-c">
			<hr width="170px" class="log-hr">
			<hr width="165px" class="log-hr1" >
			<input class="logc-input1"  type="text" name="" placeholder="手机号">
			<br><br>
			<input class="logc-input4"  type="text" name="" placeholder="密码">
			<br><br>
			<span class="logc-span"><a href="res.php">立即注册></a></span>
			<span class="logc-span1">忘记密码？</span>
		</div>
	</template>
	
	<script type="text/javascript">
	var login_num ={
	 	template:'#temp'
	 }
	 var login_mess ={
	 	template:'#temp1'
	 }
	  var routerObj = new VueRouter ({
	 	routes :[
	 		{path:'/',redirect:'login_num'},
	 		{path:'/login_num',component:login_num},
	 		{path:'/login_mess',component:login_mess}
	 	],
	 	linkExactActiveClass:'myactive' 
	 })
	var xin = new Vue({
		el:"#app",
		data:{ 
		},
		methods:{ 
		},
		router:routerObj
	})

	</script>
</body>
</html>