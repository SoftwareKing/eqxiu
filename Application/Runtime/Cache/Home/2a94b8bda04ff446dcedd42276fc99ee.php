<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en" ng-app="app" ng-controller="AppCtrl">
<head>
<meta property="qc:admins" content="25322764376510156375" />
<meta name="baidu-site-verification" content="2MKKT6mbuL" />
<meta charset="utf-8" />
<meta name="description" content="一秀移动场景应用自营销管家,免费为中小微企业或团队提供业务场景应用展示、潜在客户在线报名收集、管理和二次营销" />
<meta name="keywords" content="易企秀,免费,免费移动场景应用自营销管家,移动场景自营销管家,移动场景自营销工具,活动自营销管家,场景展示,免费的报名页,收集潜在客户,二次营销,轻CRM,提高移动场景营销效果" />
<meta name="viewport"content="width=device-width, initial-scale=1.0" />
<meta property="qc:admins" content="25322764376510156375" />
<meta property="wb:webmaster" content="354b970d8cd61602" />
<title>一秀|免费移动场景应用自营销管家</title>
<script> 
 
 var PREFIX_URL = "http://"+window.location.host+"/json/"; //"http://service.eqxiu.com/";
   var JSON_URL = "http://"+window.location.host+"/index.php";
  var PREFIX_S1_URL = "http://"+window.location.host+"/";
  var PREFIX_S2_URL = "http://"+window.location.host+"/";
  var PREFIX_HOST = "http://"+window.location.host+"/";
  var PREFIX_FILE_HOST = "http://"+window.location.host+'/Uploads/'; 
   var SYS_FILE_HOST = "http://"+window.location.host+"/Uploads/";
  var CLIENT_CDN = "http://"+window.location.host+"/";
  var INTERVAL_OBJ = {}; // 用于图集使用的定时器对象
 var mobilecheck = function() {
     var check = false;
    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
     return check;
 };
  //if(mobilecheck()) {
  //  window.location.href = PREFIX_HOST + '/mobile/index.html';
 // }
  function gt_custom_ajax(result, selector) {
    selectorA = selector;
    if (result) {
      //当验证成功时,延迟2秒自动刷新验证码
      /*setTimeout(function() {
        selector(".gt_refresh_button").click();
      }, 2000);*/
      challenge = selector(".geetest_challenge").value;
      validate = selector(".geetest_validate").value;
      seccode = selector(".geetest_seccode").value;
      submit = true;
    }
  }
  function getCookie(c_name){
　　　　if (document.cookie.length>0){
　　　　　　c_start=document.cookie.indexOf(c_name + "=");　　
　　　　　　if (c_start!=-1){ 
　　　　　　　　c_start=c_start + c_name.length+1;
　　　　　　　　c_end=document.cookie.indexOf(";",c_start)　;
　　　　　　　　if (c_end==-1) c_end=document.cookie.length　;　
　　　　　　　　return unescape(document.cookie.substring(c_start,c_end));
　　　　　　} 
　　　　}
　　　　return ""
　　}　
</script>
<!-- <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=8D1kIOGsmbbeG9k4U3klKl77"></script> -->
    <!-- 前台 -->
	<link rel="stylesheet" type="text/css" href="/static/css/index.css">
	<link rel="stylesheet" type="text/css" href="/static/css/login.css">
	<style type="text/css">*{font-family:微软雅黑;}</style>
	<script type="text/javascript" src="/static/js/jquery1.8.js?1"></script>
	<script type="text/javascript" src="/static/js/jquery-ui.js"></script>
	<script type="text/javascript" src="/static/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="/static/js/mycorebar.js"></script>
	<script type="text/javascript" src="/static/js/index.js"></script>
	<style type="text/css">.shipinjiaocheng{position:absolute;top:60px;right:15px;width:350px;height:233px;border:5px solid #B44A4A;border-radius:6px;background-color:#B44A4A;}.ukuif{border-radius:4px;}</style>
	<script type="text/javascript">$(document).ready(function(){$( "#shipinjiaocheng").draggable({containment:"parent",handle:"#shipinjiaochengb"});});</script>
		<!-- 前台结束 -->
	<link rel="shortcut icon" href="http://as.eqxiu.com/common/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="//cdn.bootcss.com/jqueryui/1.10.4/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="//cdn.bootcss.com/jquery-jcrop/0.9.12/css/jquery.Jcrop.min.css"/>
    <link rel="stylesheet" href="//cdn.bootcss.com/angular-ui-select/0.8.3/select.min.css"/>
    <!-- compiled CSS -->
    
    <link rel="stylesheet" href="/Public/css/eqShow-common-2.7.1.css"/>
    <link rel="stylesheet" href="/Public/css/ui-grid.min.css"/>
    <link rel="stylesheet" href="/Public/css/hint.min.css"/>
    <link rel="stylesheet" href="/Public/css/bootstrap.vertical-tabs.min.css"/>
    <link rel="stylesheet" href="/Public/css/eqShow-2.7.1.css"/>

    <script src="//cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="//cdn.bootcss.com/jquery-jcrop/0.9.12/js/jquery.Jcrop.min.js"></script>
    <script src="//cdn.bootcss.com/angular.js/1.2.23/angular.min.js"></script>
    <script src="//cdn.bootcss.com/angular.js/1.2.23/angular-route.min.js"></script>
    <script src="//cdn.bootcss.com/angular.js/1.2.23/angular-animate.min.js"></script>
    <script src="//cdn.bootcss.com/angular.js/1.2.23/angular-sanitize.min.js"></script>
    <script src="//cdn.bootcss.com/angular-ui-bootstrap/0.11.0/ui-bootstrap-tpls.min.js"></script>
    <script src="//cdn.bootcss.com/angular-ui-select/0.8.3/select.min.js"></script>
    <script src="//cdn.bootcss.com/angular-ui-sortable/0.13.0/sortable.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/Chart.js/1.0.1-beta.4/Chart.min.js"></script>
    <script src="//cdn.bootcss.com/zeroclipboard/1.1.7/ZeroClipboard.min.js"></script>
    <!-- compiled JavaScript -->
    
    <script src="/Public/eq/2.7/ui-grid.min.js"></script>
    <script src="/Public/eq/2.7/bootstrap-wysiwyg.min.js"></script>
    <script src="/Public/eq/2.7/jquery.hotkeys.min.js"></script>
    <script src="/Public/eq/2.7/angular-file-upload.min.js"></script>
    <script src="/Public/eq/2.7/angular-file-upload-directives.min.js"></script>
    <script src="/Public/eq/2.7/angular-locale_zh-cn.min.js"></script>
    <script src="/Public/eq/2.7/hammer.min.js"></script>
    <script src="Public/eq/2.7/eqShow-2.7.1.js"></script>
<style>
.myGrid {
	width: 998px;
	height: 550px;
}
.myGrid1 {
  width: 650px;
  height: 550px;
}
.choose_template .main .content .mask ul li .roll :hover .cc{
  display: block;
}
</style>

</head>
 
<body>

  <div style="z-index:2000;" id="notify" ng-include="'notifications.tpl.html'" ng-if="notifications.getCurrent().length"></div>
	<div id="eq_main" ng-view></div>


<script>
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F93cd06ebda2db598041456a9d18c7299' type='text/javascript'%3E%3C/script%3E"));


  var redirect_uri = encodeURIComponent('http://eqxiu.com');
  // var redirect_uri = encodeURIComponent('http://eqxiu.com');
  var submit = false;
  var challenge, validate, seccode, selectorA;

  /*var patt_code = new RegExp("code");
  //get authorization_url params
  var params_code = window.location.search;

  var authorization_code;
  if(patt_code.test(params_code)) {
    authorization_code = params_code.split('=')[1];

  }*/
</script>
</body>
</html>