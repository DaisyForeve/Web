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
    <div class="about-banner"></div>
    <!--内容主体标题-->
    <div class="about-body">
        <div class="warp">
            <p>
                您当前的位置：
                <a href="index.html">网站首页</a>
                <span>≡</span>
                <a href="news.html">新闻中心</a>
            </p>
        </div>
    </div>
    <!--标题-->
    <div class="about-title">
        <div class="about-title-left fl"></div>
        <strong>新闻中心</strong>
        <div class="about-title-right fr"></div>
        <p>NEWS CENTER</p>
        <p>了解公司最新资讯</p>
    </div>
    <div class="news-body">
        <div class="warp">
            <ul>
                <?
                    $newsObj=newslist("新闻资讯","cn","1","9");
                    $newsArr=$newsObj['newsArr'];
                    foreach($newsArr as $newsList){
                ?>
                <li>

                    <p class="fl">
                        <span><?echo date("d",strtotime($newsList->NOTETIME));?></span>
                        <br>
                        <span><?echo date("Y-m",strtotime($newsList->NOTETIME));?></span>
                    </p>
                    <div class="fr">
                        <a href="newsd.php?gid=<?=$typeID?>&nid=<?=$newsList->ID?>"><?=$newsList->TITLE?></a>
                        <p><?=$newsList->INTRO ?></p>
                    </div>
                </li>
                <? } ?>
            </ul>
            <div class="clear"></div>
            <div class="pager">
                <?
                    $newsPagerShow=$newsObj['pagerShow'];
                    $newsPagerShow->lanAll = "共有";
                    $newsPagerShow->lanItems = "条";
                    echo $newsPagerShow->render();
                 ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--footer-->
    <? include_once("./footer.php")?>
</body>
</html>
<? include_once("../bottom.php")?>