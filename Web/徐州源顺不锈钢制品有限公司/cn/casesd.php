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
    <div class="casesd">
        <div class="warp">
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
            <div class="casesd-left fl">
                <img src="/web/Public/Uploads/Product/<?=$proObj->SMALLPIC?>" class="img" alt="">
            </div>
            <div class="casesd-right fr">
                <p><?=$proObj->PRONAME?></p>
                <div class="casesd-right-bg"></div>
                <p>内容说明</p>
                <div class="casesd-right-box">
                    <?=$proObj->CONTENT?>
                </div>
            </div>
            <div class="ny-parge">
                <span>
                    <a  id="preLink" href="casesd.php?pid=<? $rd = $maindb->Execute("SELECT * FROM t_products WHERE IsShow=1 AND TypeID='".$proObj->TYPEID."' AND OrderBy<".$proObj->ORDERBY." ORDER BY OrderBy DESC limit 0,1"); if ($rd->RecordCount() == 1) { echo $rd->fields['id'] ;} else {echo $proObj->ID;}?>&tid=<?=$proObj->TYPEID?>"   style="margin:0px 8px;">上一个</a>
                </span>
                 <span>
                    <a  id="nextLink" href="casesd.php?pid=<? $rd = $maindb->Execute("SELECT * FROM t_products WHERE IsShow=1 AND TypeID='".$proObj->TYPEID."'  AND OrderBy>".$proObj->ORDERBY." ORDER BY OrderBy limit 0,1");if ($rd->RecordCount() == 1) { echo $rd->fields['id'] ;} else {echo $proObj->ID;}?>&tid=<?=$proObj->TYPEID?>"  style="margin:0px 8px;">下一个</a>
                 </span>
            </div>
        </div>
    </div>



    <!--footer-->
                <? include_once("./footer.php")?>
        </body>
        </html>
        <? include_once("../bottom.php")?>