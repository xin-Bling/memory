<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Memory官方旗舰店</title>
	<link rel="icon" href="./images/花logo.jpg" type="image/x-icon"/>
	<script type="text/javascript" src="./lib/vue.js"></script>
	<script type="text/javascript" src="./lib/vue-router-3.0.2.js"></script>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="./lib/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./lib/animate.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<style type="text/css">
		.item{
         height: 430px;
         width: 100%;
       }
       .item img{
         height: 430px;
         width: 100%;
       }
	</style>
</head>
<body>
	<div id="app">
		<div class="index-all">
			<?php  
				include("./header.php");
			?>
			<div class="in-c">
				<div id="myCarousel" class="carousel slide">
       			 <!-- 轮播（Carousel）指标 -->
		            <ol class="carousel-indicators">
		                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		                <li data-target="#myCarousel" data-slide-to="1"></li>
		                <li data-target="#myCarousel" data-slide-to="2"></li>
		            </ol>   
		        <!-- 轮播（Carousel）项目 -->
		            <div class="carousel-inner">
		                <div class="item active">
		                    <img height="430px" src="./images/lun1.jpg" alt="First slide">
		                </div>
		                <div class="item">
		                    <img src="./images/lun.jpg" alt="Second slide">
		                </div>
		                <div class="item">
		                    <img src="./images/lun2.jpg" alt="Third slide">
		                </div>
		            </div>
		        <!-- 轮播（Carousel）导航 -->
		            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		                <span class="sr-only">Previous</span>
		            </a>
		            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		                <span class="sr-only">Next</span>
		            </a>
        		</div>
        		<div class="inc-zi">
					让记忆充满花香
				</div>
				<div class="inc-zi1">
					<a href=""> 更多详情></a>
				</div>
			</div>
			<div class="in-d">
				<div class="ind-left">
					<div class="indl-zi">
						在线订花
					</div>
					<div class="indl-zi1">
						shopping online
					</div>
					<div class="indzi2-all">
						<div class="indl-zi2">
							鲜花买一送一啊不是保暖三按时缴纳四六级菲尼萨不拿手机菲尼萨监理费阿里健康发的发鲜花买一送一啊不是保暖三按时缴纳四六级菲尼萨不拿手机菲尼萨监理费阿里健康发的发
						</div>
						<div class="indl-zi2">
							鲜花买一送一啊不是保暖三按时缴纳四六级菲尼萨不拿手机菲尼萨监理费阿里健康发的发鲜花买一送一
						</div>
					</div>
					<input type="button" class="indl-but" value="立即订花>" name="">
				</div>
				<div class="ind-right">
					<img src="./images/3.jpg">
				</div>
			</div>
			<div class="in-e">
				<div class="ine-top">
					<div class="inet-zi">
						Flower Favorites
					</div>
					<div class="inet-zi1">
						热售鲜花
					</div>
				</div>
				<div class="ine-buton">
					<div class="ineb-left">
						<a href="detail.php"><img src="./images/2.jpg"></a> 
						<div class="inebl-k">
							<div class="inebl-zi1">
								鲜花买一送一啊不是保暖三按时缴纳四六
							</div>
							<div class="inebl-zi">
								热售鲜花
							</div>
						</div>
					</div>
					<div class="ineb-right">
						<div class="bodyCon08"><!--学员-->
		                    <div class="students">
		                        
		                          <div id="four_flash">
		                            <div class="flashBg">
		                                <ul class="mobile">
		                                    <li>
		                                        <img src="./images/senke_xy02.jpg" />
		                                        <dd>丁同学</dd>
		                                        <p>现就职某会计师师事务所<br/>2012年CPA学员，3年通过6门课程</p>
		                                        <a href=""></a>
		                                    </li>
		                                    <li>
		                                        <img src="./images/senke_xy03.jpg" />
		                                        <dd>宋同学</dd>
		                                        <p>2013年会计证、CPA长线周末班学员，2014年通过4门课程；</p>
		                                        <a href=""></a>
		                                    </li>
		                                    <li>
		                                        <img class="inebrz-img1" src="./images/3.jpg">
		                                        <dd>鲜花买一送一</dd>
		                                        <p>鲜花买一送一啊不是保暖三按时缴纳四六级菲尼萨不拿手机菲尼萨监理费阿里</p>
		                                        <p style="font-size: 18px;color: #1abc9e;font-weight: 550;">￥199</p>
		                                    </li>

		                                </ul>
		                            </div>
		                            <div class="but_left"><img src="./images/zuo.png" /></div>
		                            <div class="but_right"><img src="./images/you.png" /></div>
		                          </div>
		                          
		                    </div>
		                </div>
					</div>
				</div>
			</div>
			<div class="in-f">
				<div class="ine-top">
					<div class="inet-zi1">
						鲜花展示
					</div>
					<div class="inet-zi">
						Flower Show
					</div>
				</div>
				<div class="inf-buton">
					<div class="infb-1">
						<img src="./images/3.jpg">
						<div class="infb-zi">
							鲜花展示
						</div>
						<div class="infb-zi1">
							鲜花买一送一鲜花买一送一鲜
						</div>
						<hr class="infb-hr">
						<div class="infb-zi2">
							鲜花买一送一啊不是保暖三按时缴纳四六级菲尼萨不拿手机菲尼萨监理费阿里鲜花买一送一啊不是保暖三按时缴纳四六级菲尼萨不拿手机菲尼萨监理费阿里
						</div>
						<input type="button" class="infb-but" value="更多选择>" name="">
					</div>
					<div class="infb-1">
						<img src="./images/3.jpg">
						<div class="infb-zi">
							鲜花展示
						</div>
						<div class="infb-zi1">
							鲜花买一送一鲜花买一送一鲜
						</div>
						<hr class="infb-hr">
						<div class="infb-zi2">
							鲜花买一送一啊不是保暖三按时缴纳四六级菲尼萨不拿手机菲尼萨监理费阿里鲜花买一送一啊不是保暖三按时缴纳四六级菲尼萨不拿手机菲尼萨监理费阿里
						</div>
						<input type="button" class="infb-but" value="更多选择>" name="">
					</div>
					<div class="infb-1">
						<img src="./images/3.jpg">
						<div class="infb-zi">
							鲜花展示
						</div>
						<div class="infb-zi1">
							鲜花买一送一鲜花买一送一鲜
						</div>
						<hr class="infb-hr">
						<div class="infb-zi2">
							鲜花买一送一啊不是保暖三按时缴纳四六级菲尼萨不拿手机菲尼萨监理费阿里鲜花买一送一啊不是保暖三按时缴纳四六级菲尼萨不拿手机菲尼萨监理费阿里
						</div>
						<input type="button" class="infb-but" value="更多选择>" name="">
					</div>
				</div>
			</div>
			<?php  
				include("./bottom.php");
			?>
		</div>
	</div>
	
	<script>
	    $(function(){
	            $('#myCarousel').carousel({
	                interval: 2000
	            })
	            $("#myCarousel").carousel('cycle');
	    });
	</script>
	
	<script type="text/javascript">
	
	var xin = new Vue({
		el:"#app",
		data:{ 
		},
		methods:{ 
		}
	})

	</script>


	<script type="text/javascript">
    //学员
    var _index5=0;
    $("#four_flash .but_right img").click(function(){
        _index5++;
        var len=$(".flashBg ul.mobile li").length;
        if(_index5+5>len){
            $("#four_flash .flashBg ul.mobile").stop().append($("ul.mobile").html());
        }
        $("#four_flash .flashBg ul.mobile").stop().animate({left:-_index5*356},1000);
        });

        
    $("#four_flash .but_left img").click(function(){
        if(_index5==0){
            $("ul.mobile").prepend($("ul.mobile").html());
            $("ul.mobile").css("left","-1380px");
            _index5=6
        }
        _index5--;
        $("#four_flash .flashBg ul.mobile").stop().animate({left:-_index5*356},1000);
        });
    </script> 
</body>
</html>