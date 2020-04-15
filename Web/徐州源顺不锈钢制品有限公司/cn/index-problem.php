<div class="index-problem fr">
                <div class="index-news-title">
                    <p class="fl wow bounceInRight index-news-title-text" data-wow-duration="1s">
                        <strong>常见问题解答</strong>
                        <span>PROBLEM</span>
                    </p>
                    <p class="fr">
                        <a href="#">更多+</a>
                    </p>
                </div>
                <script>
                    var wow4 = new WOW({
                        boxClass:'index-news-title-text',
                    })
                    wow4.init();
                </script>
                <div class="index-problem-title-bg"></div>
                <div class="index-problem-body">
                    <ul>
                        <?
                            $newsObj=newslist("常见问题解答","cn","1","15");
                            $newsArr=$newsObj['newsArr'];
                            foreach($newsArr as $newsList){
                        ?>
                        <li>
                            <a href="newsd.php?gid=<?=$typeID?>&nid=<?=$newsList->ID?>">
                                <strong><?=$newsList->TITLE?></strong>
                            </a>
                            <p><?=$newsList->INTRO ?></p>
                        </li>
                        <?}?>
                    </ul>
                </div>
            </div>