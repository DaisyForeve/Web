<div class="consumer">
        <div class="warp">
            <div class="consumer-title">
                <strong style="display:block" class="wow slideInLeft wowLeft">消费者使用感言</strong>
                <p class="wow zoomInLeft ">CONSUMER TESTIMONIALS</p>
                <div class="consumer-title-bg"></div>
            </div>
            <div class="consumer-box">
                <?
                    $newsObj=newslist("消费者使用感言","cn","1","4");
                    $newsArr=$newsObj['newsArr'];
                    foreach($newsArr as $newsList){
                ?>
                <div class="consumer-box1 fl">
                    <div class="consumer-box1-pic">
                        <img src="/web/Public/Uploads/Content/<?=$newsList->SMALLPIC ?>" alt="" class="img">
                    </div>
                    <div class="consumer-box1-text">
                        <div>
                            <strong><?=$newsList->TITLE?></strong>
                        </div>
                        <p>
                            <span><?=$newsList->CONTENT ?></span>
                        </p>
                    </div>
                </div>
                <?}?>

            </div>
        </div>
        <div class="consumer-text-bg">

        </div>
    </div>
    <script>
        $(function(){
            $('.consumer-box1').eq(0).css({'margin-left':'0px'})
        })
    </script>
