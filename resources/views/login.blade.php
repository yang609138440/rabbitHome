<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <script src="../js/mui.min.js"></script>
    <link href="../css/mui.min.css" rel="stylesheet"/>
    <script src="../../public/js/mui.min.js"></script> 
    <link href="../../public/css/mui.min.css" rel="stylesheet"/>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
    <script type="text/javascript" charset="utf-8">
        mui.init();
    </script>
    <style>
    	.myLogBody{
    		/*background: url('http://img07.tooopen.com/images/20170316/tooopen_sy_201956178977.jpg');*/
    		text-align: center;
    	}
    	.myLogFormDiv{
    		opacity: 1;
    	}
    	.myImg{
    		width: 100%;
    	}
      #logBtnDiv {
        margin-top: 10px;
        margin-bottom: 10px;
      }
      #regBtnDiv {
        margin-top: 10px;
        margin-bottom: 10px;
      }
    </style>
</head>
<body class="myLogBody">
    <!--<header class="mui-bar mui-bar-nav">-->
        <!--<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>-->
        <!--<h1 class="mui-title">登录</h1>-->
    <!--</header>-->
    <div class="mui-content myLogFormDiv">
    	<img class="myImg" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1516288786569&di=f366ec06cc211f2fcd45041ddbc216bd&imgtype=0&src=http%3A%2F%2Fww2.sinaimg.cn%2Fbmiddle%2F9fe921begw1fb03ofrj77j20go0go3zb.jpg"/>
      <form class="mui-input-group">
        <div class="mui-input-row">
            <label>账号</label>
            <input type="text" class="mui-input-clear" placeholder="请输入账号" name="account">
        </div>
        <div class="mui-input-row">
            <label>密码</label>
            <input type="password" class="mui-input-clear" placeholder="请输入密码" name="pwd">
        </div>
      </form>
      <div style="text-align: center;" id="logBtnDiv">
        <button type="button" class="mui-btn" style="width: 200px;" id="login">登录</button>
      </div>
      <div style="text-align: center;" id="regBtnDiv">
        <button type="button" class="mui-btn" style="width: 200px;" id="register">注册</button>
      </div>
    </div>
</body>
<script>
    $.noConflict();
    mui('body').on('tap','#login',function(){
    	document.activeElement = jQuery("#login")[0];
    	var account = jQuery("input[name='account']")[0].value;
    	var pwd = jQuery("input[name='pwd']")[0].value;
    	if(account==''){
    		mui.toast('请输入正确的账号');
    		return;
    	}
    	if(pwd==''){
    		mui.toast('请输入正确的密码');
    		return;
    	}
    	window.location.href = '/log/check?name='+account+'&pwd='+pwd;
  	});
    mui('body').on('tap','#register',function(){
      mui.alert('暂不支持','提示','好吧',function (e) {
        
      },'div');
    });
</script>
</html>