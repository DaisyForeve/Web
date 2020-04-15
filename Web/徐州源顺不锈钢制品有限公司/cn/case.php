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
    <!--当前位置-->
    <div class="about-body">
        <div class="warp">
            <p>
                您当前的位置：
                <a href="index.php">网站首页</a>
                <span>≡</span>
                <a href="case.php">成功案例</a>
            </p>
        </div>
    </div>
    <!--标题-->
    <div class="about-title">
        <div class="about-title-left fl"></div>
        <strong>成功案例</strong>
        <div class="about-title-right fr"></div>
        <p>SUCCESS CASE</p>
    </div>
    <!--内容主体-->
    <div class="case">
        <div class="warp">
            <ul>
                <?
                    $linkurl = $_SERVER["PHP_SELF"]."?";
                    $proObj=productlist("成功案例","","cn","0","12");
                    $proArr=$proObj['proArr'];
                    foreach($proArr as $proList){
                 ?>
                <li>
                    <a href="casesd.php?gid=<?=$typeID?>&pid=<?=$proList->ID?>">
                        <img src="/web/Public/Uploads/Product/<?=$proList->SMALLPIC?>" alt="">
                        <p>
                            <?=$proList->PRONAME?>
                        </p>
                    </a>
                </li>
                <? } ?>
            </ul>
            <div class="clear"></div>
            <div class="pager">
                <?
                     $proPagerShow=$proObj['pagerShow'];
                     $proPagerShow->style="2";
                     $proPagerShow->selectedCss="paging_active paging_a";
                      echo $proPagerShow->render();
                ?>
            </div>
        </div>
    </div>
    <script>
        $(".case li").each(function(i){
            if(i<4){
                $(".case li").eq(i).css({"margin-top":"0px"});
            }
            if(i%4==0){
                $(".case li").eq(i).css({"margin-left":"0px"});
            }
        })
    </script>
    <div class="clear"></div>
    <!--footer-->
            <? include_once("./footer.php")?>
    </body>
    </html>
    <? include_once("../bottom.php")?>