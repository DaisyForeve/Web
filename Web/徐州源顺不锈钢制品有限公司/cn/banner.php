<div class="pics_wrap">
        <div id="html5zoo-1">
            <ul class="html5zoo-slides" style="display: none;height: 600px;">
                  <?
                      $newsObj=newslist("轮播图", "cn", "1","5","0");
                      $newsArr=$newsObj['newsArr'];
                      foreach($newsArr as $newsList){
                  ?>
                <li>
                    <img src="/web/Public/Uploads/Content/<?=$newsList->SMALLPIC?>"  class="img"/>
                </li>
                <? }?>
            </ul>
        </div>
        <div class="banner-text">
            <div class="banner-text1 wow slideInLeft">
                <h1>智控生活 泵誉天下</h1>
            </div>
            <div class="banner-text2">
                <p class="wow slideInRight banner-text2P">机电行业值得信赖的优质商家</p>
                <p class="wow zoomIn banner-text2PS">MECHANICAL AND ELECTRICAL INDUSTRY TRUSTWORTHY HIGH-QUALITY BUSINESSES</p>
            </div>
        </div>
    </div>
    <script>
        var wowBanner1 = new WOW({
            boxClass:'banner-text1',
        });
        var wowBanner2 = new WOW({
            boxClass:'banner-text2P',
        });
        var wowBanner3 = new WOW({
            boxClass:'banner-text2PS',
        })

        wowBanner1.init();
        wowBanner2.init();
        wowBanner3.init();
    </script>