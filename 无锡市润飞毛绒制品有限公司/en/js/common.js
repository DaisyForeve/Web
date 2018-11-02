$(function () {

	showNav();
	imgBigShow();


	function showNav() {
		var myNav = $("#nav li a"),
			i;
		for (i = 0; i < myNav.length; i++) {
			var links = myNav.eq(i).attr("href").split(".")[0],
				myURL = document.URL;
			if (myURL.indexOf(links) != -1) {
				myNav.eq(i).addClass('over');
			}
		}
	}

	function imgBigShow() {
		var myImg = $("ul.technology li a");
		myImg.each(function () {
			$(this).hover(function (event) {
				$(this).find("img").eq(0).stop().animate({
					"top": "-10",
					"left": "-15",
					"width": "414",
					"height": "310"
				});
			}, function (event) {
				$(this).find("img").eq(0).stop().animate({
					"top": "0",
					"left": "0",
					"width": "384",
					"height": "290"
				});
			});
		});
	}

	// 设置为主页 
	function SetHome(obj, vrl) {
		try {
			obj.style.behavior = 'url(#default#homepage)';
			obj.setHomePage(vrl);
		} catch (e) {
			if (window.netscape) {
				try {
					netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
				} catch (e) {
					alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
				}
				var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
				prefs.setCharPref('browser.startup.homepage', vrl);
			} else {
				alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入：" + vrl + "点击确定。");
			}
		}
	}
	// 加入收藏 兼容360和IE6 
	function shoucang(sTitle, sURL) {
		try {
			window.external.addFavorite(sURL, sTitle);
		} catch (e) {
			try {
				window.sidebar.addPanel(sTitle, sURL, "");
			} catch (e) {
				alert("加入收藏失败，请使用Ctrl+D进行添加");
			}
		}
	}
})