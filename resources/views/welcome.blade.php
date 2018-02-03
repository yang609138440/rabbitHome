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
        .myMenuDiv {
           margin-top: 100px;
           margin-left: 10px;
           margin-right: 10px;
        }
		.myMenuItem {
			height: 100px;
		}
        .myMenuItemDiv {
            text-align: center;
        }
        .myMenuItemDiv div {
            line-height: 60px;
        }
        .myMenuItemDiv span {
            line-height: 40px;
        }
    </style>
</head>
<body class="myLogBody">
    <div class="mui-content myMenuDiv">
		<div class="mui-row">
    		<div class="mui-col-sm-4 mui-col-xs-4 myMenuItem" style="border: 1px solid red;">
                <div class="myMenuItemDiv" id="userCenter">
                    <div class="mui-icon mui-icon-contact"></div><br>
                    <span>个人中心</span>
                </div>
    		</div>
    		<div class="mui-col-sm-4 mui-col-xs-4 myMenuItem">
        		<div class="myMenuItemDiv">
                    <div class="mui-icon mui-icon-download"></div><br>
                    <span>消费录入</span>
                </div>
    		</div>
    		<div class="mui-col-sm-4 mui-col-xs-4 myMenuItem">
        		<div class="myMenuItemDiv">
                    <div class="mui-icon mui-icon-search"></div><br>
                    <span>记录查询</span>
                </div>
    		</div>
		</div>
        <div class="mui-row">
            <div class="mui-col-sm-4 mui-col-xs-4 myMenuItem"">
                <div class="myMenuItemDiv">
                    <div class="mui-icon mui-icon-plus"></div><br>
                    <span>待开发</span>
                </div>
            </div>
            <div class="mui-col-sm-4 mui-col-xs-4 myMenuItem"">
                <div class="myMenuItemDiv">
                    <div class="mui-icon mui-icon-plus"></div><br>
                    <span>待开发</span>
                </div>
            </div>
            <div class="mui-col-sm-4 mui-col-xs-4 myMenuItem"">
                <div class="myMenuItemDiv">
                    <div class="mui-icon mui-icon-plus"></div><br>
                    <span>待开发</span>
                </div>
            </div>
        </div>
        <div class="mui-row">
            <div class="mui-col-sm-4 mui-col-xs-4 myMenuItem"">
                <div class="myMenuItemDiv">
                    <div class="mui-icon mui-icon-plus"></div><br>
                    <span>待开发</span>
                </div>
            </div>
            <div class="mui-col-sm-4 mui-col-xs-4 myMenuItem"">
                <div class="myMenuItemDiv">
                    <div class="mui-icon mui-icon-plus"></div><br>
                    <span>待开发</span>
                </div>
            </div>
            <div class="mui-col-sm-4 mui-col-xs-4 myMenuItem"">
                <div class="myMenuItemDiv">
                    <div class="mui-icon mui-icon-plus"></div><br>
                    <span>待开发</span>
                </div>
            </div>
        </div>
	</div>
</body>
<script>
	//与jquery不冲突
    $.noConflict();
    //个人中心
    jQuery('#userCenter').click(function(){
        window.location.href = "/userCenter/index";
    });


</script>
</html>