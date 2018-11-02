<div class="index-pro">
        <div class="warp">
            <div class="index-pro-box">
                <div class="index-pro-left fl">

                    <div class="index-pro-left-title">
                        <p>产品分类</p>
                        <p>PRODUCT CATEGORY</p>
                    </div>
                    <? include_once("./index-pro-left.php")?>
                </div>
                <div class="index-pro-right fl">
                    <ul>
                         <?
                               $proObj=productlist("产品展示","","cn","1","8");
                               $proArr=$proObj['proArr'];
                               foreach($proArr as $proList){
                         ?>
                        <li class="fl">
                            <a href="productsd.php?gid=<?=$typeID?>&pid=<?=$proList->ID?>">
                                <img src="/web/Public/Uploads/Product/<?=$proList->SMALLPIC?>" alt="">
                                <p><?=$proList->PRONAME?></p>
                            </a>
                            <p>价格：<span>450.00</span></p>
                        </li>
                       <? } ?>
                    </ul>
                </div>
                <script>
                    $(function(){
                        $(".index-pro-right>ul>li").each(function(i){
                            if(i%4==0){
                                $(".index-pro-right>ul>li").eq(i).css({"margin-left":"0px"});
                            }
                            if(i<=3){
                                $(".index-pro-right>ul>li").eq(i).css({"margin-top":"0px"});
                            }
                        })
                    })
                </script>
            </div>
        </div>
    </div>