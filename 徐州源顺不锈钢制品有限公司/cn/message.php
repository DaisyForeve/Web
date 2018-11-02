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
    <!--内容主体标题-->
    <div class="about-body">
        <div class="warp">
            <p>
                您当前的位置：
                <a href="index.html">网站首页</a>
                <span>≡</span>
                <a href="message.html">在线留言</a>
            </p>
        </div>
    </div>
    <!--标题-->
    <div class="about-title">
        <div class="about-title-left fl"></div>
        <strong>在线留言</strong>
        <div class="about-title-right fr"></div>
        <p>ONLINE MESSAGE</p>
    </div>
    <!--主体-->
    <div class="message">
        <div class="warp">
            <table border="0" align="left" cellpadding="2" cellspacing="1">

                <script language="JavaScript" type="text/JavaScript">
                    function check(){
                        var obj = document.form;

                        if (obj.姓名.value == "")
                        {
                            alert("请填写姓名！");
                            return false;
                        }
                        if (obj.性别.value == "")
                        {
                            alert("请填写性别！");
                            return false;
                        }
                        if (obj.城市.value == "")
                        {
                            alert("请填写城市！");
                            return false;
                        }
                        if (obj.详细地.value == "")
                        {
                            alert("请填写详细地址！");
                            return false;
                        }
                        if (obj.电话.value == "")
                        {
                            alert("请填写电话！");
                            return false;
                        }
                    }
                </script>

                <form action="message.php" method="post" name="form" onsubmit="return check();">
                    <tr>
                        <td width="97" align="center" valign="middle">姓 名：</td>
                        <td width="503" align="left" valign="middle"><label>
                            <input type="text" name="姓名" />
                        </label>
                            <span class="STYLE1">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=" font-weight:bold;">( 加<span class="STYLE1"> *</span> 处为必填内容 )</span></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle">性 别：</td>
                        <td align="left" valign="middle"><label>
                            <select name="性别">
                                <option value="男" selected="selected">男</option>
                                <option value="女">女</option>
                            </select>
                        </label> <span class="STYLE1">*</span></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle">城 市：</td>
                        <td align="left" valign="middle"><label>
                            <input type="text" name="城市" />
                        </label>
                            <span class="STYLE1">*</span></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle">详细地址：</td>
                        <td align="left" valign="middle"><label>
                            <input type="text" name="详细地" />
                        </label>
                            <span class="STYLE1">*</span></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle">电 话：</td>
                        <td align="left" valign="middle"><label>
                            <input type="text" name="电话" />
                        </label>
                            <span class="STYLE1">*</span></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle">传 真：</td>
                        <td align="left" valign="middle"><label>
                            <input type="text" name="传真" />
                        </label>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle">E -mail：</td>
                        <td align="left" valign="middle"><label>
                            <input type="text" name="E-mail" />
                        </label></td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle">备 注：</td>
                        <td align="left" valign="middle"><label>
                            <textarea name="备注" cols="50" rows="7"></textarea>
                        </label></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="left" valign="middle"><table width="300" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" valign="middle"><label>
                                    <input type="submit" name="submit" value="提交" />
                                </label></td>
                                <td align="center" valign="middle"><label>
                                    <input type="reset" name="reset" value="重填" />
                                </label></td>
                            </tr>
                        </table></td>
                    </tr>
                </form>
            </table>

        </div>
    </div>
    <div class="clear"></div>
    <!--footer-->
    <? include_once("./footer.php")?>
</body>
</html>
<? include_once("../bottom.php")?>