<div class="warp">
        <div class="header">
            <div class="header-left">
                <img src="images/logo.png" class="img" alt="">
            </div>
            <div class="clear"></div>
            <div class="header-left-text">
                <div class="header-left-text-bg">
                    <strong>
                        <span><a>某某泵业</a>制造有限公司</span>
                    </strong>
                </div>
                <div class="header-left-text-sm">
                   <span>
                       BENG YUE MANUFACTURING Co.,Ltd
                   </span>
                </div>
            </div>
            <div class="header-center">
                <p>10年泵业专业生产机构</p>
                <p>前沿科技 卓越品质 你身边的供水专家</p>
            </div>
            <div class="header-right">
                <img src="images/phone.png" alt="">
                <span>订购热线电话:</span>
                <p>400-123456789</p>
            </div>
        </div>
    </div>
<!--导航栏-->
    <nav>
        <div class="warp">
            <ul id="nav">
                <li class="active"><a href="index.php">首页</a></li>
                <li><a href="about.php">公司简介</a></li>
                <li><a href="products.php">产品展示</a></li>
                <li><a href="case.php">成功案例</a></li>
                <li><a href="news.php">新闻中心</a></li>
                <li><a href="message.php">在线留言</a></li>
                <li><a href="contact.php">联系我们</a></li>
            </ul>
        </div>
    </nav>

    <script>
    //获取nav
        //获取所有li
        var liLists = $("#nav").children("li");
        //获取URL
        var thisLink = document.location.href;
        //获取a标签
        for(var i=0;i<liLists.length;i++){
            var links = liLists[i].getElementsByTagName("a");
            for(var j=0;j<links.length;j++){
                //获取a标签内的href
                var linkss = links[j].getAttribute("href");
                //清空所有a标签上的class
                links[j].className = "";
                //如果href在URL中给a标签添加class
                if(thisLink.indexOf(linkss) !== -1){
                    links[j].className = "active";
                }
            }
        }
        //解决方案下的二级链接 一级导航添加class问题
                var thisTwo = ["productsd.php","casesd.php","newsd.php"];
                if(thisLink.indexOf(thisTwo[0]) !== -1){
                    var thisA = liLists[3].getElementsByTagName("a")[0];
                    thisA.className = "active";
                }else if(thisLink.indexOf(thisTwo[1]) !== -1){
                    var thisA = liLists[4].getElementsByTagName("a")[0];
                    thisA.className = "active";
                }else if(thisLink.indexOf(thisTwo[2]) !== -1){
                     var thisA = liLists[5].getElementsByTagName("a")[0];
                     thisA.className = "active";
                 }
    </script>