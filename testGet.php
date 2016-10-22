<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$html = "http://www.vvic.com/shop/13245";
$html = file_get_contents($html);
$html=preg_replace("/[\t\n\r]+/","",$html);  

$patten = '/<span>(.*)<\/span><\/h2><div class="shop-icon"><i class="top1000 j-v-tip" data-tip="top" data-top="1000"><\/i><\/div><div class="clear"><\/div><a href="javascript:;" class="icon-btn care btn-shop-care" data-sid="13245" vda="action|shopinfo|gz"><i class="vvicicon">&#xe613;<\/i><span>关注<\/span><\/a><ul class="mt10"><li><div class="attr" style="line-height: 28px;">地址：<\/div><div class="text"><span>(.*)&nbsp;<\/span><span>(.*)楼&nbsp;<\/span><span>(.*)<\/span><a href="http:\/\/www1\.vvic\.com\/map\.html" target="_blank"><em class="guide vvicon">&#xe62c;<\/em><\/a><\/div><\/li><li style="display: none;"><div class="attr">商品：<\/div><div class="text">171&nbsp;件<\/div><\/li><li><div class="attr">产地：<\/div><div class="text">广东省 广州市<\/div><\/li><li class="tel-list"><div class="attr">电话：<\/div><div class="text"><p>(.*)<\/p><\/div><\/li>/';

	preg_match($patten,$html,$arr);
	
	print_r ($arr);
	echo $arr[0],$arr[1],$arr[2],$arr[3];
	//var_dump ($arr);

?>
</body>
</html>