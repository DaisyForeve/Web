$(function(){
    var Myswiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        loop:true,
        slidesPerView: 1,
        spaceBetween:0,
        mousewheelControl: true,
        pagination:'.swiper-pagination',
        paginationClickable:true,
        onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
            swiperAnimateCache(swiper); //隐藏动画元素 
            swiperAnimate(swiper); //初始化完成开始动画
          }, 
          onSlideChangeEnd: function(swiper){ 
            swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
          } 
    });
    // 产品页
    $(".products-body li").each(function(i){
        if(i%4==0){
            $(".products-body li").eq(i).css({"margin-left":'0px'});
        }
        if(i<4){
            $(".products-body li").eq(i).css({"margin-top":'0px'});
        }
    })
    
    // 放大镜
    $(".jqzoom").imagezoom();

	$("#thumblist li a").click(function(){
		$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
		$(".jqzoom").attr('src',$(this).find("img").attr("mid"));
		$(".jqzoom").attr('rel',$(this).find("img").attr("big"));
    });
    
    // 企业资质
    $(".enterprise-body li").each(function(i){
        if(i%4==0){
            $(".enterprise-body li").eq(i).css({"margin-left":'0px'});
        }
        if(i<4){
            $(".enterprise-body li").eq(i).css({"margin-top":'0px'});
        }
    })

    
    // 表格
    function check(){
        var obj = document.form;

        if (obj.姓名.value == "")
        {
            alert("请填写姓名！");
            return false;
        }
        if (obj.电话.value == "")
        {
            alert("请填写电话！");
            return false;
        }
        if (obj.城市.value == "")
        {
            alert("请填写城市！");
            return false;
        }
        if (obj.邮箱.value == "")
        {
            alert("请填写邮箱！");
            return false;
        }
    }

    //返回顶部
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