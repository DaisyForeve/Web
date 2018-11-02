$(function(){
    // 导航栏始终在页面顶部
    var topHeight = $(".nav").offset().top;
    $(window).scroll(function(){
        if($(document).scrollTop()>topHeight){
            $(".nav").addClass("nav_scroll");
        }else{
            $(".nav").removeClass("nav_scroll");
        }
    })
    

    // 轮播图
    var bannerSwiper = new Swiper('.swiper1', {
        loop:true,
        autoplay:5000, 
        speed:1000,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        pagination:'.swiper-pagination',
        effect:'fade',
    });

    // 产品布局轮播图
    var dealerSwiper = new Swiper('.dealer-swiper', {
        slidesPerView: 3,
        spaceBetween:0,
        loop:true,
        autoplay:5000,
        speed:1000,
        prevButton: '.swiper-button-prev',
        nextButton:'.swiper-button-next',
        });
            
    // 经销商
    var marquee1 = new Marquee("pic_s")
    marquee1.Direction = "left";
    marquee1.Step = 2;
    marquee1.Width =1200;
    marquee1.Height = 200;
    marquee1.Timer = 50;
    marquee1.DelayTime =0;
    marquee1.WaitTime = 0;
    marquee1.ScrollStep = 52;
    marquee1.Start();

    // wow特效
    var wowLogo = new WOW({
        boxClass:'logo',
    })
    wowLogo.init();

    var wowAboutText = new WOW({
        boxClass:'index-about-text',
    })
    wowAboutText.init();
    var wowAboutPic = new WOW({
        boxClass:'index-about-pic',
    })
    wowAboutPic.init();
    var wowProLeft = new WOW({
        boxClass:'index-pro-left',
    })
    wowProLeft.init();
    var wowProCenter = new WOW({
        boxClass:'index-pro-center',
    })
    wowProCenter.init();
    var wowProRight = new WOW({
        boxClass:'index-pro-right',
    })
    wowProRight.init();
    var wowService = new WOW({
        boxClass:"index-service-pic",
    })
    wowService.init();

    // 首页产品展示遮罩
    $(".index-pro-left-pic1").hover(
        function(){
            $(".mask1").animate({ top: "0" }, 500); 
        },
        function(){
            $(".mask1").animate({top:'-235'},500)
        })
    
    $(".index-pro-left-pic2").hover(
        function(){
            $(".mask2").animate({top: "0" }, 500); 
        },
        function(){
            $(".mask2").animate({top:'235'},500)
        })

    $(".index-pro-right-pic1").hover(
        function(){
            $(".mask3").animate({top: "0" }, 500); 
        },
        function(){
            $(".mask3").animate({top:'-235'},500)
        })

    $(".index-pro-right-pic2").hover(
        function(){
            $(".mask4").animate({top: "0" }, 500); 
        },
        function(){
            $(".mask4").animate({top:'235'},500)
        })

    $(".index-pro-center").hover(
        function(){
            $(".mask5").animate({opacity: "0.8" }, 500); 
        },
        function(){
            $(".mask5").animate({opacity:'0'},500)
        })


    // 新闻遮罩
    $(".index-news-body-pic").hover(
        function(){
            $(this).children().children(".news-mask").animate({opacity:"0.8"},500);
        },
        function(){
            $(this).children().children(".news-mask").animate({opacity:"0"},500);
        }
    )

    // 服务支持遮罩
    $(".index-service-pic").hover(
        function(){
            $(this).children().children(".service-mask").animate({opacity:"0.5"},500);
        },
        function(){
            $(this).children().children(".service-mask").animate({opacity:"0"},500);
        }
    )

    // 留言板
    function check(){
        var obj = document.form;

        if (obj.姓名.value == "")
        {
            alert("请填写姓名！");
            return false;
        }
        if (obj.性别.value == "")
        {
            alert("请填写性别！");
            return false;
        }
        if (obj.城市.value == "")
        {
            alert("请填写城市！");
            return false;
        }
        if (obj.详细地.value == "")
        {
            alert("请填写详细地址！");
            return false;
        }
        if (obj.电话.value == "")
        {
            alert("请填写电话！");
            return false;
        }
    }
    
    // 产品页
    $(".products-body>ul>li").each(function(i){
        if(i<3){
            $(".products-body>ul>li").eq(i).css({"margin-top":'0px'});
        }
        if(i%3==0){
            $(".products-body>ul>li").eq(i).css({"margin-left":'0px'});
        }
    })

    $(".products-body a").hover(
        function(){
            $(this).children(".promask").animate({"opacity":'0.6'},300);
        },
        function(){
            $(this).children(".promask").animate({"opacity":'0'},300);
        }
    )
    // 公司一角
    $(".company-body>ul>li").each(function(i){
        if(i<3){
            $(".company-body>ul>li").eq(i).css({"margin-top":'0px'});
        }
        if(i%3==0){
            $(".company-body>ul>li").eq(i).css({"margin-left":'0px'});
        }
    })
    $(".company-body a").hover(
        function(){
            $(this).children(".promask").animate({"opacity":'0.6'},300);
        },
        function(){
            $(this).children(".promask").animate({"opacity":'0'},300);
        }
    )
})