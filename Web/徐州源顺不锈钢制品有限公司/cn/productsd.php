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
    <script src="js/magnifyingGlass.js"></script>
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
            <?
                    if (isset($_REQUEST['pid']) && $_REQUEST['pid']>0)
                    {
                      $pid = $_REQUEST['pid'];
                      $proDetailRs = $maindb->Execute("SELECT * FROM t_products WHERE IsShow=1 AND id=?",array($pid));
                      if ($proDetailRs->RecordCount() >0)
                      {
                        $proObj = $proDetailRs->FetchObject();
                        ?>
                        <!-- <div style=" clear:both;">
                          <?=$proObj->CONTENT?>
                        </div> -->
                      <?
                      }
                      else
                      {
                        @header("HTTP/1.1 404 Not Found");
                        @header("Status: 404 Not Found");
                        exit();
                      }
                    }
                    else
                    {
                      @header("HTTP/1.1 404 Not Found");
                      @header("Status: 404 Not Found");
                      exit();
                    }
                  ?>
                <p>
                    <a href="index.php">网站首页</a>
                    <span>≡</span>
                    <a href="products.php">产品展示</a>
                    <span>≡</span>
                    <a href="#"><?=$proObj->PRONAME?></a>
                </p>
                <div class="product-right-bg"></div>
                <div class="product-right-body">
                    <div class="product-right-pic box fl" id="box">
                        <img src="/web/Public/Uploads/Product/<?=$proObj->SMALLPIC?>" class="img" alt="">
                        <div class="inner"></div>
                    </div>
                    <div class="big" id="big">
                        <img src="/web/Public/Uploads/Product/<?=$proObj->SMALLPIC?>" alt="">
                    </div>
                    <div class="product-right-text fl">
                        <p class="product-name"><?=$proObj->PRONAME?></p>
                        <p class="product-market-price">市场价: <span> 720.00</span></p>
                        <p class="product-now-price">价格: <span>600.00</span></p>
                    </div>
                </div>
                <div class="clear"> </div>
                <div class="ny-pager">
                    <span>
                                          <a  id="preLink" href="productsd.php?pid=<? $rd = $maindb->Execute("SELECT * FROM t_products WHERE IsShow=1 AND TypeID='".$proObj->TYPEID."' AND OrderBy<".$proObj->ORDERBY." ORDER BY OrderBy DESC limit 0,1");if ($rd->RecordCount() == 1){ echo $rd->fields['id'] ;} else {echo $proObj->ID;}?>&tid=<?=$proObj->TYPEID?>" style="margin:0px 8px;">上一个</a>
                                    </span>
                                    <span>
                                          <a  id="nextLink" href="productsd.php?pid=<? $rd = $maindb->Execute("SELECT * FROM t_products WHERE IsShow=1 AND TypeID='".$proObj->TYPEID."'  AND OrderBy>".$proObj->ORDERBY." ORDER BY OrderBy limit 0,1");if ($rd->RecordCount() == 1){ echo $rd->fields['id'] ;} else {echo $proObj->ID;}?>&tid=<?=$proObj->TYPEID?>"  style="margin:0px 8px;">下一个</a>
                                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--footer-->
    <? include_once("./footer.php")?>
    </body>
    </html>
    <? include_once("../bottom.php")?>