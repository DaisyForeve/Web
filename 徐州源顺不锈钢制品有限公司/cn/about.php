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
                <a href="index.php">网站首页</a>
                <span>≡</span>
                <a href="about.php">公司简介</a>
            </p>
        </div>
    </div>
    <!--标题-->
    <div class="about-title">
        <div class="about-title-left fl"></div>
        <strong>关于我们</strong>
        <div class="about-title-right fr"></div>
        <p>ABOUT US</p>
    </div>
    <!--内容主题内容-->
    <div class="about-body-box">
        <div class="warp">
            <? signerpost("cn","公司简介"); ?>
        </div>
    </div>

    <!--footer-->
    <? include_once("./footer.php")?>
</body>
</html>
<? include_once("../bottom.php")?>