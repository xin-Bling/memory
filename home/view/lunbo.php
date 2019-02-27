<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="./lib/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <style type="text/css">
        .item{
         height: 430px;
         width: 100%;
       }
       .item img{
         height: 100%;
         width: 100%;
       }
    </style>
    <style>
        
    </style>
</head>
<body>
<div>
    <div class="in-b">
        <div class="inb-zi">
            <ul class="nav">
                <li class="drop-down"><a href="#">节日鲜花</a>
                    <ul class="drop-down-content">
                        <li><a href="#">情人节</a></li>
                        <li><a href="#">母亲节</a></li>
                        <li><a href="#">父亲节</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="#">鲜花花材</a>
                    <ul class="drop-down-content">
                        <li><a href="#">玫瑰</a></li>
                        <li><a href="#">康乃馨</a></li>
                        <li><a href="#">郁金香</a></li>
                    </ul>
                </li>
                <li><a href="#">永生花</a></li>
                <li><a href="#">花语大全</a></li>
                <li><a href="#">限时推荐</a></li>
                <li><a href="#">礼品</a></li>
                <div class="kuai"></div>
            </ul>
        </div>
    </div>
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
                            <img src="./images/1.png" alt="First slide">
                        </div>
                        <div class="item">
                            <img src="./images/3.jpg" alt="Second slide">
                        </div>
                        <div class="item">
                            <img src="./images/logo-b.png" alt="Third slide">
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
</div>  

<script>
        $(function(){
                $('#myCarousel').carousel({
                    interval: 2000
                })
                $("#myCarousel").carousel('cycle');
        });
    </script>
</body>
</html>