<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="__CSS__/jquery.mobile-1.4.5.min.css">
<script src="__JS__/jquery.min.js"></script>
<script src="__JS__/jquery.mobile-1.4.5.min.js"></script>
<style type="text/css">
*{padding:0; margin:0}
p{font-family: "宋体"; font-weight: 900; font-size: 20px;}
.ui-content{background-image:url(__IMAGES__/bg2.jpg); background-size: 100%;  width:100%;}
#photo{width:136px; height:180px; margin-right: 5px; background-color:#ccc; display:block;  }
.tel1{width:400px; height:20px; font-family:Arial, Helvetica, sans-serif; font-weight:bold; float: left;}
.tel2{width:400px; height:20px; font-family:Arial, Helvetica, sans-serif; float: left;}
.ewm{width:100px; height:100px; background-color:#FFFFFF; float: right;}
.ewm img
{
  width: 100px;
  height: 100px;
}
.top{font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:20px; color:#0066FF}
</style>
</head>
<body>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div data-role="page">


  <div data-role="main" class="ui-content">
  <center>
    <div class="top">
    <center>兵团科技局(知识产权局)、科协</center>
  </div>
   <div id="photo">
     <img src="__UPLOADS__/thumb2_<?php echo ($vo["img"]); ?>">
   </div>	
   </center>
   <p style="padding-right:15px; text-align:center" >
   <?php echo ($vo["name"]); ?><br>
   <?php echo ($vo["job"]); ?>
   </p>
   
   <div style="width:100%; float:left;line-height:30px; height:70px; margin-top:30px;"> 
   办公室电话:&nbsp;&nbsp;<?php echo ($vo["tel"]); ?><br>
   秘书电话:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["tel2"]); ?>
   </div>
  <div style="width:100%; float:left;  height:100px;">
   <div class="ewm" style="margin-right:20px;">
     <img src="http://qr.liantu.com/api.php?text=http://www.shzlife.com/dzmp/index.php/Main/index/id/<?php echo ($vo["id"]); ?>"/>
   </div>
   </div>
  </div>
  <hr style="color:#fff">
  <div data-role="footer" style=""> 
  <center>
	<a href="tel:<?php echo ($vo["tel"]); ?>" data-role="button" class="botton" data-icon="grid" >拨号</a>
	<a href="tel:1234567" data-role="button" class="botton" data-icon="home">官网</a>
  </center>  
</div> 

</div><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>