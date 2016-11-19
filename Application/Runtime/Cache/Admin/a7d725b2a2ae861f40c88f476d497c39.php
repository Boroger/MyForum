<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Roger_www/LGM1116/Public/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>角色管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 角色管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a class="btn btn-primary radius" href="<?php echo U('roleAdd');?>"> <i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong><?php echo ($totals); ?></strong> 条</span> </div>
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="6">角色管理</th>
			</tr>
			<tr class="text-c">
				<th width="40">ID</th>
				<th width="150">角色名称</th>
				<th >说明</th>
				<th width="50">所属用户</th>
				<th width="50">所有权限</th>
				<th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr class="text-c">
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["role"]); ?></td>
				<td><?php echo ($v["description"]); ?></td>
				<td class="f-14">
					<!-- <a title="查看用户" onclick="admin_role_del(this,'<?php echo ($v["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe62b;</i></a> -->
					<a title="查看用户" href="javascript:;" onclick="checkAdmin('查看用户','<?php echo U('checkAdmin',array('id'=>$v['id']));?>','','400','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe62b;</i></a>
				</td>
				<td class="f-14">
					<a title="查看权限" href="javascript:;" onclick="checkAdmin('查看权限','<?php echo U('checkPerm',array('id'=>$v['id']));?>','','400','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6bf;</i></a>
				</td>
				<td class="f-14">
					<a title="编辑" href="<?php echo U('roleEdit',array('id'=>$v['id']));?>" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
					<a title="删除" href="javascript:;" onclick="admin_role_del(this,<?php echo ($v["id"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
</div>
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Roger_www/LGM1116/Public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">

function checkAdmin(title,url,id,w,h){
	layer_show(title,url,w,h);
}
function checkPerm(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-角色-删除*/
function admin_role_del(obj,id){
	layer.confirm('权限删除须谨慎，确认要删除吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.ajax({
			url: "<?php echo U('Admin/Admin/roleDel');?>" ,
			data:{'id':id},
			success:function(data){
				if (data == false) {
					layer.msg('存在关联管理员，不可删除!',{icon:2,time:1000});
					exit;
				}
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			datatype:"json",
		});
	});
}
</script>
</body>
</html>