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
    <!--banner-->
    <div class="product-banner">
        <strong>ISG立式管道泵</strong>
        <p>运动平衡  保持平稳运得</p>
    </div>
    <!--主体内容-->
    <div class="products">
        <div class="warp">
            <div class="product-left fl">
                <div class="product-left-title">
                    <strong>产品分类</strong>
                    <p>PRODUCT CATEGORY</p>
                </div>
                <? include_once("./product-left.php")?>
            </div>
            <div class="product-right fr">
                <p>
                    <a href="index.html">网站首页</a>
                    <span>≡</span>
                    <a href="products.html">产品展示</a>
                </p>
                <div class="product-right-bg"></div>
                <ul>
                <?
                       $proObj=productlist("产品展示","","cn","1","16");
                       $proArr=$proObj['proArr'];
                       foreach($proArr as $proList){
                ?>
                    <li>
                        <a href="productsd.php?gid=<?=$typeID?>&pid=<?=$proList->ID?>">
                            <img src="/web/Public/Uploads/Product/<?=$proList->SMALLPIC?>" alt="">
                        </a>
                        <br>
                        <a href="productsd.php?gid=<?=$typeID?>&pid=<?=$proList->ID?>">
                            <?=$proList->PRONAME?>
                        </a>
                        <p>价格：<b>450.00</b></p>
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
    </div>
    <script>
        $(function(){
            $(".product-right li").each(function(i){
                if(i%4==0){
                    $(".product-right li").eq(i).css({"margin-left":"0px"});
                }
                if(i<4){
                    $(".product-right li").eq(i).css({"margin-top":"0px"});
                }
            })
        })
    </script>


    <div class="clear"></div>
    <!--footer-->
        <? include_once("./footer.php")?>
</body>
</html>
<? include_once("../bottom.php")?>