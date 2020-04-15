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
    <script src="layer/layer.js"></script>
    <script src="js/share.js"></script>
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
                <a href="news.php">新闻资讯</a>
            </p>
        </div>
    </div>
    <?
        if (isset($_REQUEST['nid']) && $_REQUEST['nid']>0)
        {
            $nid = $_REQUEST['nid'];
            $newsRs = $maindb->Execute("SELECT * FROM t_news WHERE IsShow=1 AND id=?",array($nid));
            if ($newsRs->RecordCount() >0)
            {
                $maindb->Execute("UPDATE t_news SET Hits=Hits+1 WHERE id=?",array($nid));
                $newsObj = $newsRs->FetchObject();
            }
        }
     ?>
    <!--新闻标题-->
    <div class="news-title">
        <div class="warp">
            <strong><?=$newsObj->TITLE?></strong>
            <div class="clear"></div>
            <div class="timeShare">
                <p class="fl">
                    来源: <span class="form">中国</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    发布时间：<span class="time"><?echo date("Y.m.d",strtotime($newsList->NOTETIME));?></span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </p>
                <div class="bdsharebuttonbox fl">
                    <span>分享到:</span>
                    <a href="#" class="bds_sqq" data-cmd="sqq" title="分享给QQ好友"></a>
                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--新闻主体-->
    <div class="news-body">
        <div class="warp">
            <?=$newsObj->CONTENT?>
        </div>
        <div class="clear"></div>
        <div class="ny-pager">
            <div>
                <a  id="preLink" href="newsd.php?nid=<? $rd = $maindb->Execute("SELECT * FROM t_news WHERE IsShow=1 AND NewType='".$newsObj->NEWTYPE."' AND OrderBy<".$newsObj->ORDERBY." ORDER BY OrderBy DESC limit 0,1");
                    if ($rd->RecordCount() == 1)
                    { echo $rd->fields['id'] ;} else {echo $newsObj->ID;}?>&gid=<?=$_REQUEST['gid']?>"   style="margin:0px 8px; color:#666;">上一篇:<? $rd = $maindb->Execute("SELECT * FROM t_news WHERE IsShow=1 AND NewType='".$newsObj->NEWTYPE."' AND OrderBy<".$newsObj->ORDERBY." ORDER BY OrderBy DESC limit 0,1");
                    if ($rd->RecordCount() == 1)
                    { echo $rd->fields['Title'] ;} else {echo $newsObj->TITLE;}?></a>
             </div>
             <div>
                 <a  id="nextLink" href="newsd.php?nid=<? $rd = $maindb->Execute("SELECT * FROM t_news WHERE IsShow=1 AND NewType='".$newsObj->NEWTYPE."'  AND OrderBy>".$newsObj->ORDERBY." ORDER BY OrderBy limit 0,1");
                        if ($rd->RecordCount() == 1)
                        { echo $rd->fields['id'] ;} else {echo $newsObj->ID;}?>&gid=<?=$_REQUEST['gid']?>"  style="margin:0px 8px; color:#666;">下一篇:<? $rd = $maindb->Execute("SELECT * FROM t_news WHERE IsShow=1 AND NewType='".$newsObj->NEWTYPE."'  AND OrderBy>".$newsObj->ORDERBY." ORDER BY OrderBy limit 0,1");
                        if ($rd->RecordCount() == 1)
                        { echo $rd->fields['Title'] ;} else {echo $newsObj->TITLE;}?></a>
             </div>
        </div>
    </div>





    <!--footer-->
        <? include_once("./footer.php")?>
    </body>
    </html>
    <? include_once("../bottom.php")?>