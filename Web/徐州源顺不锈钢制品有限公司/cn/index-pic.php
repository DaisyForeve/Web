<div id="pic_s">
    <table>
        <tr>
            <?
                $proObj=productlist("企业相册", "", "cn", "1", "5");
                $proArr=$proObj['proArr'];
                foreach($proArr as $proList){
            ?>
            <td >
                <a href="javascript:void(0)">
                    <img src="/web/Public/Uploads/Product/<?=$proList->SMALLPIC?>"/>
                </a>
            </td>
            <? } ?>
        </tr>
    </table>
</div>