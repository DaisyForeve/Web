window.onload = function(){
	// 初始化轮播
	(function(){
		var swiper = new Swiper('#banner .swiper-container', {
			slidesPerView: 1,
			spaceBetween:0,
			loop: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			autoplay: {
				delay: 4500,
				disableOnInteraction: false
			}
		});
	})();
	//首页订购流程
	$(".homeprocess-ul li").find(".homeprocess-img").hover(function(){
		$(this).children().eq(1).css({"transform":"scale(1)"})
	},function(){
		$(this).children().eq(1).css({"transform":"scale(0)"})
	});
	/*产品分类*/
	$(".prolist-ul").find('li').hover(function(){
		$(this).addClass("prolist-active").siblings().removeClass("prolist-active");
	});
	//关于我们无缝滚动
	$(".about-scroll").imgscroll({
        speed: 40, //图片滚动速度
        amount: 0, //图片滚动过渡时间
        width: 1, //图片滚动步数
        dir: "left" // "left" 或 "up" 向左或向上滚动
    });
    //留言轮播
	(function(){
		var swiper = new Swiper('.feedback-left .swiper-container', {
			slidesPerView: 1,
			spaceBetween:0,
			loop: true,
			pagination: {
	        	el: '.swiper-pagination',
	        	clickable: true,
		        renderBullet: function (index, className) {
		          return '<span class="' + className + '">' + (index + 1) + '</span>';
		        },
	      	},
	      	navigation: {
		        nextEl: '.swiper-button-next',
		        prevEl: '.swiper-button-prev',
		    }
		});
	})();
	//留言订购
	$(".feedback-dl").find("dd").click(function() {
		$(this).addClass("feedback-active").siblings().removeClass("feedback-active");
	});
}
//设为首页
function SetHome(obj,vrl){ 
			try{ obj.style.behavior='url(#default#homepage)';
			obj.setHomePage(vrl); } catch(e){ if(window.netscape) { 
				try { netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect"); 
			} catch (e) { 
				alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。"); 
			} 
			var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch); 
			prefs.setCharPref('browser.startup.homepage',vrl); 
		}else{ 
			alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入："+vrl+"点击确定。"); 
		} 
	} 
}
// 加入收藏 兼容360和IE6 
function shoucang(sTitle,sURL) { 
	try { window.external.addFavorite(sURL, sTitle); 
	} catch (e) { 
		try { 
			window.sidebar.addPanel(sTitle, sURL, ""); 
		} catch (e) { 
			alert("加入收藏失败，请使用Ctrl+D进行添加"); 
		} 
	} 
} 