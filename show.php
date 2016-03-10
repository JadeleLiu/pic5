<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxdf8fbb58c3fe2c51", "43de3344fa98b2ce4f71dadc8eada782");
$signPackage = $jssdk -> GetSignPackage();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>微糖</title>
		<style type="text/css">
			*{padding: 0px; margin: 0px;}
			.img1{
				position: absolute;
				width: 100%;
			}
			.img2{
				position: absolute;
				width: 48%;
				right: 3px;
				top: 78%;
			}
			.img3{
				position: absolute;
				width: 48%;
				left: 3px;
				top: 78%;
			}
		</style>
	</head>
	<body>
		<div class="">
			<img class="img1" src="img/bg.jpg"/>
			<a href="http://www.v-town.cc/andriod.html"><img class="img2" src="img/download2.png"/></a>
			<a href="http://www.v-town.cc/ios.html"><img class="img3" src="img/download1.png"/></a>
		</div>
	</body><script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script>wx.config({
//			debug: true,
appId: '<?php echo $signPackage["appId"]; ?>',
timestamp:<?php echo $signPackage["timestamp"]; ?>,
nonceStr: '<?php echo $signPackage["nonceStr"]; ?>',
signature: '<?php echo $signPackage["signature"]; ?>',
jsApiList: [
"onMenuShareTimeline",
"onMenuShareAppMessage",
"onMenuShareQQ",
"onMenuShareWeibo",
"onMenuShareQZone",
// 所有要调用的 API 都要加到这个列表中
]
});
wx.ready(function() {
	wx.onMenuShareTimeline({
		title: '微糖携手美妆大咖，一波狂欢即将来袭', // 分享标题
		link: 'http://www.v-town.cc/share/show.php', // 分享链接
		imgUrl: 'http://www.v-town.cc/share/img/img_logo.jpg', // 分享图标
		success: function() {
			alert("成功");
			// 用户确认分享后执行的回调函数
		},
		cancel: function() {
			// 用户取消分享后执行的回调函数
		}
	});
	wx.onMenuShareAppMessage({
		title: '狂欢来袭', // 分享标题
		desc: '微糖携手美妆大咖，一波狂欢即将来袭', // 分享描述
		link: 'http://www.v-town.cc/share/show.php', // 分享链接
		imgUrl: 'http://www.v-town.cc/share/img/img_logo.jpg', // 分享图标
		type: '', // 分享类型,music、video或link，不填默认为link
		dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		success: function() {
			 // 用户确认分享后执行的回调函数
		},
		cancel: function() {
			// 用户取消分享后执行的回调函数
		}
	});
	wx.onMenuShareQQ({
		title: '狂欢来袭', // 分享标题
		desc: '微糖携手美妆大咖，一波狂欢即将来袭', // 分享描述
		link: 'http://www.v-town.cc/share/show.php', // 分享链接
		imgUrl: 'http://www.v-town.cc/share/img/img_logo.jpg', // 分享图标
		success: function() {
			alert("分享成功");// 用户确认分享后执行的回调函数
		},
		cancel: function() {
			// 用户取消分享后执行的回调函数
		}
	});
	wx.onMenuShareWeibo({
		title: '狂欢来袭', // 分享标题
		desc: '微糖携手美妆大咖，一波狂欢即将来袭', // 分享描述
		link: 'http://www.v-town.cc/share/show.php', // 分享链接
		imgUrl: 'http://www.v-town.cc/share/img/img_logo.jpg', // 分享图标
		success: function() {
			alert("分享成功");// 用户确认分享后执行的回调函数
		},
		cancel: function() {
			// 用户取消分享后执行的回调函数
		}
	});
	wx.onMenuShareQZone({
		title: '狂欢来袭', // 分享标题
		desc: '微糖携手美妆大咖，一波狂欢即将来袭', // 分享描述
		link: 'http://www.v-town.cc/share/show.php', // 分享链接
		imgUrl: 'http://www.v-town.cc/share/img/img_logo.jpg', // 分享图标
		success: function() {
			alert("分享成功");// 用户确认分享后执行的回调函数
		},
		cancel: function() {
			// 用户取消分享后执行的回调函数
		}
	});
	// 在这里调用 API
});</script>
</html>
