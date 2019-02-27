$(document).ready(function(){
        var flag=false;
        $("#hua").hover(function(){
            $("#shu").css("display","block");
        },function(){
            aaa();
            if (flag==false) {
              $("#shu").css("display","none");   
            }

        });
});
function aaa(){
        
        $("#shu").hover(function(){
            $("#shu").css("display","block");
        },function(){
            $("#shu").css("display","none");
        });
        
}

$(document).ready(function(){
        var flag=false;
        $("#cai").hover(function(){
            $("#cai1").css("display","block");
        },function(){
            bbb();
            if (flag==false) {
              $("#cai1").css("display","none");   
            }

        });
});
function bbb(){
        
        $("#cai1").hover(function(){
            $("#cai1").css("display","block");
        },function(){
            $("#cai1").css("display","none");
        });
        
}

$(document).ready(function(){
        var flag=false;
        $("#lei").hover(function(){
            $("#lei1").css("display","block");
        },function(){
            ccc();
            if (flag==false) {
              $("#lei1").css("display","none");   
            }

        });
});
function ccc(){
        
        $("#lei1").hover(function(){
            $("#lei1").css("display","block");
        },function(){
            $("#lei1").css("display","none");
        });
        
}
$(document).ready(function(){
        var flag=false;
        $("#yong").hover(function(){
            $("#yong1").css("display","block");
        },function(){
            ddd();
            if (flag==false) {
              $("#yong1").css("display","none");   
            }

        });
});
function ddd(){
        
        $("#yong1").hover(function(){
            $("#yong1").css("display","block");
        },function(){
            $("#yong1").css("display","none");
        });
        
}