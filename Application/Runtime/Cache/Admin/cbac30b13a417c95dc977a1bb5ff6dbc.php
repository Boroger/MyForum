<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/LGM1116/Public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>添加用户 - H-ui.admin v2.3</title>
<meta name="keywords" content="H-ui.admin v2.3,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v2.3，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="<?php echo U('Member/doadd');?>" enctype="multipart/form-data" method="post" class="form form-horizontal" id="form-member-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>昵称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="username" name="username">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="phone" name="phone">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" value="" placeholder="" id="password" name="password">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="sex" type="radio" id="sex-1" checked value="1">
					男
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="sex" value="0">
					女
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-3" name="sex" value="2">
					保密
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="@" name="email" id="email">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>家乡：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="" name="place" id="place">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">头像：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile" id="uploadfile" readonly nullmsg="请添加附件！" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file" multiple name="file-2" class="input-file">
				</span> </div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="descr" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" onKeyUp="textarealength(this,100)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/LGM1116/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<!--/_footer /作为公共模版分离出去--> 

<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-member-add").validate({
		rules:{
			username:{
				required:true,
				minlength:2,
				maxlength:8,
				checkName:true,
				remote: {
                url: "<?php echo U('addajax');?>",
                type: "get",
                dataType: "json",
                data: {
                    username: function () {
                        return $("#username").val();　　　　//这个是要验证的用户名
                    }
                },
                dataFilter: function (data) {　　　　//判断控制器返回的内容
                    if (data == "true") {
                        return true;
                    }
                    else {
                        return false;
                    }
                  }
                },     //remote 
			},
			sex:{
				required:true,
			},
			phone:{
				required:true,
				isMobile:true,
			},
			email:{
				required:true,
				email:true,
			},
			
		},
		messages: { 
    // 注册用户名 
            username: { 
             	remote:"该昵称已存在"
            }, 
        },
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		// submitHandler:function(form){
		// 	form.submit();
		// 	var index = parent.layer.getFrameIndex(window.name);
		// 	parent.$('.btn-refresh').click();
		// 	parent.layer.close(index);
		// }
	});
	$.validator.addMethod("checkName",function(value,element,params){  
            var checkName = /^[\u4E00-\u9FA5]+$/;  
            return this.optional(element)||(checkName.test(value));  
        },"*仅限中文"); 
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>