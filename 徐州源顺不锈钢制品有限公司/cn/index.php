<? include_once("../config.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=GetGlobalTitle("cn");?></title>
    <meta name="keywords" content="<?=GetGlobalKeywords("cn");?>" />
    <meta name="description" content="<?=GetGlobalDescription("cn");?>" />
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/html5zoo.js"></script>
    <script src="js/lovelygallery.js"></script>
    <script src="js/wow.js"></script>
</head>
<body>
    <!--头部 -->
    <? include_once("./header.php")?>
    <!--banner图-->
    <? include_once("./banner.php")?>
    <!--搜索-->
    <div class="clear"></div>
    <div class="search">
        <div class="warp">
            <div class="search-pic fl" >
                <img src="images/search.png" class="img" alt="">
            </div>
            <div class="search-text fl">
                <p>
                    <span>热门关键词搜索：</span>
                    <span>自吸泵    齿轮油泵    不锈钢排污泵    管道离心泵    消防泵   深井泵    潜水泵</span>
                </p>
            </div>
            <form action="products.php" mes  class="fr">
                <input type="text" placeholder="请输入关键词">
                <input type="submit" value="搜索">
            </form>
        </div>
    </div>
    <!--关于我们+企业相册-->
    <div class="index-about-pic">
        <div class="warp">
            <div class="index-about-pic-left wow slideInLeft" >
                <img src="images/timg.png" class="img" alt="">
            </div>
            <script>
                var wow1 = new WOW({
                    boxClass:'index-about-pic-left',
                })
                wow1.init();
            </script>
        </div>

        <div class="index-about-pic-right">
            <div class="index-about">
                <div class="warp">
                    <p>—— <span>关于我们</span> ABOUT US ——</p>
                    <? include_once("./index-about.php")?>
                </div>
            </div>
            <script>
                var wow6 = new WOW({
                    boxClass:'index-about-text',
                })
                wow6.init();
            </script>
            <!--企业相册-->
            <div class="warp">
                <div class="index-pic">
                    <p>
                        <span>企业相册  </span>
                        <span class="fr">
                            ———————————————————————————————————————————————————
                        </span>
                    </p>
                    <? include_once("./index-pic.php")?>
                </div>
            </div>
        </div>
    <!--企业相册自动轮播-->
        <script src="js/MSClass.js"></script>
        <script>
            var marquee1 = new Marquee("pic_s")
            marquee1.Direction = "left";
            marquee1.Step = 2;
            marquee1.Width =900;
            marquee1.Height = 150;
            marquee1.Timer = 50;
            marquee1.DelayTime =0;
            marquee1.WaitTime = 0;
            marquee1.ScrollStep = 52;
            marquee1.Start();
        </script>
    </div>
    <!--中间设计图标-->
    <div class="center-set">
        <div class="warp">
            <div class="pen  fl">
                <img src="images/pen.png"  alt="" class="pen-img wow bounceIn"  data-wow-iteration="1">
                <p class="text1">OEM加工</p>
                <p class="text2">支持按需定制</p>
            </div>

            <div class="handrail fl"></div>
            <div class="cup fl" >
                <img src="images/cup.png" alt="" class="pen-img wow bounceIn"  data-wow-iteration="1">
                <p class="text1">各类齐全</p>
                <p class="text2">优越性价比 经济实用</p>
            </div>
            <div class="handrail fl"></div>
            <div class="set fl">
                <img src="images/set.png" alt="" class="pen-img wow bounceIn"  data-wow-iteration="1">
                <p class="text1">质量保证</p>
                <p class="text2">放心购物 售后无忧</p>
            </div>
            <div class="handrail fl"></div>
            <div class="people fl">
                <img src="images/people.png" alt="" class="pen-img wow bounceIn"  data-wow-iteration="1">
                <p class="text1">实力雄厚</p>
                <p class="text2">从事行业20年 经验丰富</p>
            </div>
            <div class="handrail fl"></div>
            <div class="heart fl">
                <img src="images/heart.png" alt="" class="pen-img wow bounceIn"  data-wow-iteration="1">
                <p class="text1">实力雄厚</p>
                <p class="text2">从事行业20年 经验丰富</p>
            </div>
        </div>
        <script>
            var wow2 = new WOW({
                boxClass:"pen-img",
            })
            wow2.init();
        </script>
    </div>
    <!--首页产品-->
    <? include_once("./index-pro.php")?>
    <!--为什么选择-->
	<script>
        var wow = new WOW({
                boxClass:'index-why-content1-right',
               })
          wow.init();
     </script>
	 <script>
      var wow3 = new WOW({
           boxClass:'index-why-content2-left',
            })
			 wow3.init();
     </script>
    <div class="index-why">
        <div class="warp">
            <div class="index-why-title">
                <h1>为什么选择XXX泵业  解密5大优势</h1>
            </div>
            <div class="index-why-content">
				 <?
                    $newsObj=newslist("首页解密5大优势","cn","1","5");
                    $newsArr=$newsObj['newsArr'];
                    foreach($newsArr as $k=>$newsList){
						if($k %2 ==0){
                ?>
                <div class="index-why-content1">
                    <div class="index-why-content1-left fl">
                        <div class="index-why-content1-title">
                            <p class="fl"><?echo '0'.($k+1);?></p>
                            <div class="text3">
                                <strong><?=$newsList->TITLE?></strong>
                                <p><?=$newsList->INTRO ?></p>
                            </div>
                        </div>
                        <div class="index-why-content-part">
                            <div class="index-why-content-part"></div>
                        </div>
                        <div class="index-why-content1-body">
                            <p>
                               <?=$newsList->CONTENT ?>
                            </p>
                        </div>
                    </div>
                    <div class="index-why-content<?echo $k+1 ;?>-X"></div>
                    <div class="index-why-content1-right wow slideInRight fl" data-wow-duration="2s"  data-wow-delay="0s" data-wow-iteration="1">
                        <img src="/web/Public/Uploads/Content/<?=$newsList->SMALLPIC ?>">
                    </div>
                </div>
						<? }else{?>
                <div class="index-why-content2">
                    <div class="index-why-content2-left wow slideInLeft fl" data-wow-duration="2s" data-wow-iteration="1">
                        <img src="/web/Public/Uploads/Content/<?=$newsList->SMALLPIC ?>" alt="">
                    </div>
                    <div class="index-why-content<?echo $k+1 ;?>-X"></div>
                    <div class="index-why-content2-right fl">
                        <div class="index-why-content2-title">
                            <p class="fl"><?echo '0'.($k+1);?></p>
                            <div class="text3">
                                <strong><?=$newsList->TITLE?></strong>
                                <p><?=$newsList->INTRO ?></p>
                            </div>
                        </div>
                        <div class="index-why-content-part">
                            <div class="index-why-content-part"></div>
                        </div>
                        <div class="index-why-content2-body">
                            <p>
                                <?=$newsList->CONTENT ?>
                            </p>
                        </div>
                    </div>
                </div>
              
					<? }} ?>
			  
             
            </div>
        </div>
    </div>
    <!--应用领域展示-->
    <div class="index-successful">
        <div class="warp">
            <div class="index-successful-title">
                <strong style="display:block" class="wow slideInLeft wowLeft">应用领域展示</strong>
                <p  class="wow zoomInLeft ">SUCCESSFUL CASE SHOW</p>
                <div class="index-successful-bg">
                </div>
            </div>
            <p><span>水泵质量经得市场的考验  我们与市政单位或工项目都有长期的合作，例如上海中铁局  万达集团  万科集团星级酒店等等 </span></p>
            <div class="index-successful-pic">
                <ul>
                    <?
                           $proObj=productlist("应用领域展示","","cn","1","6");
                           $proArr=$proObj['proArr'];
                           foreach($proArr as $proList){
                     ?>
                    <li class="fl">
                        <a href="casesd.php?gid=<?=$typeID?>&pid=<?=$proList->ID?>">
                            <img src="/web/Public/Uploads/Product/<?=$proList->SMALLPIC?>" alt="">
                            <p><?=$proList->PRONAME?></p>
                        </a>
                    </li>
                    <? } ?>
                </ul>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $('.index-successful-pic li').each(function(i){
                if(i%3==0){
                    $('.index-successful-pic li').eq(i).css({"margin-left":"0px"});
                }
                if(i<3){
                    $('.index-successful-pic li').eq(i).css({"margin-top":"0px"});
                }
            })
            var wow7 = new WOW({
                boxClass:'wowLeft'
            })
            var wow8 = new WOW({
                boxClass:'zoomInLeft'
            })
            wow7.init();
            wow8.init();
        })
    </script>
    <!--消费者使用感言-->
    <? include_once("./index-consumer.php")?>


    <!--新闻资讯/常见问题解答-->
    <div class="index-news-problem">
        <div class="warp">
        <!--新闻资讯-->
            <? include_once("./index-news.php")?>
            <!--常见问题解答-->
            <? include_once("./index-problem.php")?>

        </div>
    </div>
    <!--footer-->
    <? include_once("./footer.php")?>
</body>
</html>
<? include_once("../bottom.php")?>