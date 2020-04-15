$(function(){
    // banner图下的搜索栏
    $(".reportTit").eq(0).css({"margin-left":"0px"})

    //banner图下的轮播新闻
    var marquee1 = new Marquee("pic_s")
        marquee1.Direction = "left";
        marquee1.Step = 2;
        marquee1.Width =415;
        marquee1.Height = 35;
        marquee1.Timer = 60;
        marquee1.DelayTime =0;
        marquee1.WaitTime = 0;
        marquee1.ScrollStep = 52;
        marquee1.Start();


    // 客户案例
    var marquee1case = new Marquee("BannerCase")
    marquee1case.Direction = "left";
    marquee1case.Step = 2;
    marquee1case.Width =1100;
    marquee1case.Height = 150;
    marquee1case.Timer = 50;
    marquee1case.DelayTime =0;
    marquee1case.WaitTime = 0;
    marquee1case.ScrollStep = 52;
    marquee1case.Start();

    // 各种动画
    var wowLogo = new WOW({
        boxClass:'logo',
    });
    var wowBanner = new WOW({
        boxClass:'banner-slogan',
    });
    var wowNew = new WOW({
        boxClass:'search-new',
    })
    wowLogo.init();
    wowBanner.init();
    wowNew.init();

    // 产品页的
    $('.product-body-right li').each(function(i){
        if(i<4){
            $('.product-body-right li').eq(i).css({"margin-top":'0px'});
        }
    })


    // 放大镜
    $(document).ready(function(){       
        $(".jqzoom").imagezoom();                           
        $("#thumblist li a").click(function(){       
            $(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");        
            $(".jqzoom").attr('src',$(this).find("img").attr("mid"));        
            $(".jqzoom").attr('rel',$(this).find("img").attr("big"));        
        });       
    }); 

    // 返回页面顶部
    $(".returnTop").click(function(){
        $('html,body').animate({
            scrollTop: 0
        }, 300);
    });
    $(window).on('scroll', function () {/*当滚动条的垂直位置大于浏览器所能看到的页面的那部分的高度时，回到顶部按钮就显示 */
        if ($(window).scrollTop() > 200)/*当顶部的距离大于200px的时候显示*/
        $(".returnTop").fadeIn();
        else
        $(".returnTop").fadeOut();
    });
    $(window).trigger('scroll');/*触发滚动事件，避免刷新的时候显示回到顶部按钮*/
    console.log($(window).height());
})