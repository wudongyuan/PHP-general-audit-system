<?php
require_once'../houtai/include.php';
$sql="select * from biaodan";
$totalRows=getResultNum($sql);
//echo $totalRows;
$pageSize=13;
//得到总页码数
$totalPage=ceil($totalRows/$pageSize);//ceil 向上取整
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1; //page表示当前页
if($page<1||$page==null||!is_numeric($page)){
    $page=1;
}
if($page>=$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select * from biaodan limit {$offset},{$pageSize}";
//echo $sql;
$rows=fetchAll($sql);
//print_r($rows);


?>
<html>  
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
<meta name="keyword" content="TENCENT"></meta>
<meta name="description" content="TENCENT"></meta>
<meta name="author" content="严涵"></meta>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/tab.css" >
<link rel="stylesheet" href="css/divide.css" >
<link rel="stylesheet" type="text/css" href="css/index.css">
<script src="js/tab.js"></script>
<title>PHP通用审核系统</title>
<script>
// var _offset = 0;
//  function _$id(_obj) {
//   return document.getElementById(_obj);
//  }
//  function _$Pages(_i) {
//   _$id("Content").scrollTop = (_$id("Content").clientHeight*_i);
//   for (var i=0;i<(_$id("Content").scrollHeight/_offset);i++)
//   {
//    if (i==_i)
//     _$id("soojs_"+(_i+1)).style.backgroundColor="#ff9900";
//    else
//     _$id("soojs_"+(i+1)).style.backgroundColor="";
//   }
//  }
//  function _$init_zzjs_net() {
//   var _s='';
//   _offset = _$id("Content").clientHeight;
//   var _top = _$id("Content").scrollTop;
//   for (var i=0;i<(_$id("Content").scrollHeight/_offset);i++) {
//    _s+=('<a href="javascript:void(0);" onclick="javascript:_$Pages('+i+');" onfocus="this.blur()" title="Page&nbsp;'+(i+1)+'" id="soojs_'+(i+1)+'">'+"&nbsp;"+(i+1)+"&nbsp;"+'</a>&nbsp;&nbsp;&nbsp;&nbsp;');
//   }
//   _$id("page").innerHTML=_s;
// _$id("soojs_"+1).style.backgroundColor="#ff9900";
//  }
</script>

</head>
<body onload="_$init_zzjs_net()">
<div style="background-color:#CCCCCC" id="head">
<div class="o1">
    <ul class="ul1">
        <li><a href="../houtai/admin/login.php">Hi,请登录</a></li>
        <li><a href="zhuce.php">我要注册</a></li>
        <li><a href="">找回密码</a></li>
    </ul>
    <ul class="ul2">
        <li><a href="">关注本站</a></li>
        <li><a href="">关于</a></li>
        <li><a href="">友情链接</a></li>
        
    </ul>       
</div>
<div class="p1">
    <br/>
    <h1 id="text1">TWDW企业通用审核系统</h1>
    <p id="text2"><font size=5>最好用的system!</font></p>
</div>
<div class="p2">
    <ul class="ul2">
        <li><a href=""><img src="images/3.png"><font size=5>首页</font></a></li>
        <li><a href="liuyan.php"><img src="images/2.png"><font size=5>留言</font></a></li>
        <li><a href="ziye2.php"><img src="images/1.png"><font size=5>历史</font></a></li>
        <li>
            <form action="search.php" method="get">
                <input name="key" type="text" class="find" />
                <input name="" type="submit" value="查询" style="color:black"/>
        </form>
        </li>
    </ul>
</div>
</div>

<div class="p3">
<dl>
<dt><h1><font color="red">【今日观点】</font></h1></dt>
<dd style="text-indent:2em"><a href="">black hot drink......</a></dd>
</dl>
</div>




<div id="tab" style="margin-right:0;margin-top:-150px; overflow:hidden;background-color:#CCCCCC">
        <h3 class="up" id="two1" onmouseover="setContentTab('two',1,4)">网站公告<a href="#">[更多]</a></h3>
        <div class="block" id="con_two_1">
            <ul >
                <li><a class="tab_title" href="wangzhangonggao.php">网站公告1</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="wangzhangonggao.php">网站公告2</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="wangzhangonggao.php">网站公告3</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="wangzhangonggao.php">网站公告4</a><span><font color="black">2015-11-8</font></span></li>

            </ul>
           
        </div>
        <h3 id="two2" onmouseover="setContentTab('two',2,4)">会员中心<a href="#">[更多]</a></h3>
        <div id="con_two_2">
            <ul >
                <li><font color="black"><a class="tab_title" href="#">会员中心1</a><span><font color="black">2015-11-8</font></span></font></li>
                <li><a class="tab_title" href="#">会员中心2</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="#">会员中心3</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="#">会员中心4</a><span><font color="black">2015-11-8</font></span></li>
                
            </ul>
        </div>
        <h3 id="two3" onmouseover="setContentTab('two',3,4)">事务审核<a href="#">[更多]</a></h3>
        <div id="con_two_3">
            <ul >
                <li><a class="tab_title" href="application.php">出差申请</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="application.php">资金申请</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="application.php">项目发布</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="application.php">职务信息</a><span><font color="black">2015-11-8</font></span></li>
            </ul>
        </div>
        <h3 id="two4" onmouseover="setContentTab('two',4,4)">联系我们<a href="#">[更多]</a></h3>
        <div id="con_two_4">
            <ul >
                <li><a class="tab_title" href="lianxi.php">联系我们1</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="lianxi.php">联系我们2</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="lianxi.php">联系我们3</a><span><font color="black">2015-11-8</font></span></li>
                <li><a class="tab_title" href="lianxi.php">联系我们4</a><span><font color="black">2015-11-8</font></span></li>
            </ul>
        </div>
    </div>
  
  <div style="margin-left:70%;margin-top:1%; overflow:hidden;background-color:#CCCCCC;width:30%;height:340px;">
    <h1>标签</h1>
    <p>出差申请 企业事务安排</p>
  </div>
  <div id="net"  class="page" style="margin-top:-400px;">
   <div id="Content" style="font-size:16px;">
<?php  $i = 1;foreach($rows as $row):?>
    <tr style="width:600px">
        <!--这里的id和for里面的c1 需要循环出来-->
        <td>序号：<?php echo $i;?></td>
        <td>姓名：<?php echo $row['name'];?></td>
        <td>申请内容：<?php echo $row['application'];?></td>
        <td>申请原因：<?php echo $row['applicationReasons'];?></td>
        <td ><a href="show.php?id=<?php echo $row['id']?>">查看详细&nbsp;&raquo;</a></td>><br/>
    </tr>
    <?php $i++;endforeach;?>
    <?php if($totalRows>$pageSize):?>
    <tr>
        <td colspan="4" align="center"><?php echo showPage($page, $totalPage);?></td>
    </tr>
    <?php endif;?>
   </div>
 
  </div>

  <div id="foot">
        <p>2015  TWDW  <a href="##">网站地图</a></p>
  </div>

<script type="text/javascript">
 function setContentTab(name, curr, n) {
    for (i = 1; i <= n; i++) {
        var menu = document.getElementById(name + i);
        var cont = document.getElementById("con_" + name + "_" + i);
        menu.className = i == curr ? "up" : "";
        if (i == curr) {
            cont.style.display = "block";
        } else {
            cont.style.display = "none";
        }
    }
}
</script>



</body>
</html>
