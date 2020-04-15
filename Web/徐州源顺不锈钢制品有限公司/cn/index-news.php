<div class="index-news fl">
    <div class="index-news-title">
        <p class="fl wow bounceInLeft index-News-title-textNew" data-wow-duration="1s">
            <strong>新闻资讯</strong>
            <span>NEWS CENTER</span>
        </p>
        <p class="fr">
            <a href="newsd.php">更多+</a>
        </p>
    </div>
    <div class="index-news-title-bg"></div>
    <script>
        var wow5 = new WOW({
            boxClass:'index-News-title-textNew',
        })
        wow5.init();
    </script>
    <div class="index-news-body">
        <ul>
            <?
                $newsObj=newslist("新闻资讯","cn","1","6");
                $newsArr=$newsObj['newsArr'];
                foreach($newsArr as $newsList){
            ?>
            <li>
                <p class="fl">
                    <strong><?echo date("d",strtotime($newsList->NOTETIME));?></strong>
                    <span><?echo date("Y-m",strtotime($newsList->NOTETIME));?></span>
                </p>
                <div class="fr">
                    <a href="newsd.php?gid=<?=$typeID?>&nid=<?=$newsList->ID?>"><?=$newsList->TITLE?></a>
                    <p>
                        <?=$newsList->INTRO ?>
                    </p>
                </div>
            </li>
            <? } ?>
        </ul>
    </div>
</div>