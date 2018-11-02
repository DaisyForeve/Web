        <?
        function EchoSubType($db,$pid,$lan,$order)
        {
            global $SysConfig;
            $pid_array = array();
            if (isset($_GET['tid']) && $_GET['tid']>0)
            {
                $rd = $db ->Execute("SELECT * FROM t_protype WHERE id=?",array($_GET['tid']));
                if ($rd->RecordCount() == 1)
                {
                    if ($rd->fields['ParentPath']!="")
                    {
                        $pid_array = explode("-",$rd->fields['ParentPath']);
                    }
                    $pid_array[] = $_GET['tid'];
                }
            }
            $subType = GetProductSubType($db,$pid,$lan,$order);
            if (count($subType) > 0)
            {
        //  echo '<li style="line-height:0px;">';
        //  echo '<ul style="display:inline;" id="producttype'.$pid.'">';
                foreach($subType as $type)
                {
                    $style = "";
                    if (in_array($type['object']->PID, $pid_array))
                    {
                        $style=" style='display:block'";
                    }

        if($type['ID']==$_REQUEST['tid'])
        {
        echo '<li class="producttype'.$type['TypeLevel'].'sel"'.$style.'><a title="'.$type['Called'].'" href="'.BuildUrl("products.php",(isset($type['object']->PAGE_NAME) && $type['object']->PAGE_NAME!="")?$type['object']->PAGE_NAME:$type['Called'],array("tid"=>$type['ID']),$SysConfig['UseRewrite']).'">';
        echo $type['Called'];
        echo '</a> </li>';
        }

        else{

          echo '<li class="producttype'.$type['TypeLevel'].'"'.$style.'><a title="'.$type['Called'].'" href="'.BuildUrl("products.php",(isset($type['object']->PAGE_NAME) && $type['object']->PAGE_NAME!="")?$type['object']->PAGE_NAME:$type['Called'],array("tid"=>$type['ID']),$SysConfig['UseRewrite']).'">';
             echo $type['Called'];
             echo '</a> </li>';

                }

                    EchoSubType($db,$type['ID'],$lan,$order);
                    ?>
        <?
                }
        //echo '</ul>';
        //echo '</li>';
            }
        }
        ?>
        <?
        $parent = "产品展示";
        $parentId = 0;
        $rs = $maindb->Execute("SELECT * FROM t_protype WHERE Called=? AND Language='cn'",array($parent));
        if ($rs->RecordCount() == 1)
        {
            $parentId = $rs->fields['id'];
        }
        $typeOrder = "";
        if (isset($config['producttypeorder']) && $config['producttypeorder']['value']=="false")
        {
            $typeOrder = "desc";
        }
        ?>
        <div class="left_ul fl">
          <?
        EchoSubType($maindb,$parentId,"cn",$typeOrder);
        ?>
        </div>