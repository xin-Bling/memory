<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="./lib/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="./lib/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" href="./css/style.css" type="text/css" />

    <style>
        
    </style>
</head>
<body>
     <marquee scrollamount="1" scrolldelay="100" direction= "right" width="200" height="200">
       <img src="./images/1.png" width="100" height="100" />
       <img src="./images/2.png" width="100" height="100" />

      <img src="./images/3.png" width="100" height="100" />

      <img src="./images/4.png" width="100" height="100" />

    </marquee>
    
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