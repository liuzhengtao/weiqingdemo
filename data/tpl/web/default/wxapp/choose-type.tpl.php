<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div id="js-wxapp-create" class="account-list-add">
	<?php  if($_W['iscontroller']) { ?>
	<ol class="breadcrumb we7-breadcrumb">
		<a href="<?php  echo url ('account/manage')?>"><i class="wi wi-back-circle"></i></a>
		<li><a href="<?php  echo url ('account/manage')?>">平台列表</a></li>
		<li>新建小程序</li>
	</ol>
	<?php  } ?>
	<div class="panel we7-panel">
		<div class="panel-body we7-padding">
			<div class="col-lg-4 list-item">
				<span class="img img-pen"></span>
				<div class="info">
					<div class="title">
						<a href="javascript:;">手动添加小程序</a>
					</div>
					<div class="con">
						通过<a href="https://mp.weixin.qq.com/" target="_blank" class="color-default">微信公众平台</a> 开发设置获取AppID和AppSecret，添加成功后，将 <span class="color-default"><?php  echo parse_url($_W['siteroot'], PHP_URL_HOST);?></span> 添加到微信公众平台合法域名
					</div>
					<div class="action">
						
						
						<!--<a href="<?php  echo url('wxapp/post/post', array('design_method' => WXAPP_MODULE, 'uniacid' => $uniacid))?>" class="btn btn-primary">手动添加小程序</a>-->
						<a href="<?php  echo url('account/create', array('sign' => 'wxapp'))?>" class="btn btn-primary">手动添加小程序</a>
						
					</div>
				</div>
			</div>
			<div class="col-lg-4 list-item">
				<span class="img img-tel"></span>
				<div class="info">
					<div class="title">
						授权添加小程序
					</div>
					<div class="con">
						<?php  if($_W['isadmin']) { ?>
						使用授权添加需认证微信开放平台和全网发布，并在<a href="<?php  echo url('system/platform')?>" target="_blank" class="color-default">微信开放平台设置</a>中启用
						<?php  } else { ?>
						使用公众平台绑定的管理员个人微信扫码即可快速添加
						<?php  } ?>
					</div>
					<div class="action">
						<a href="<?php  echo $authurl;?>" class="btn btn-primary">授权添加小程序</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 list-item">
				<span class="img img-address"></span>
				<div class="info">
					<div class="title">
						线下门店小程序绿色通道
					</div>
					<div class="con">
						适合：拥有线下门店，小程序用于线下服务的用户，且暂不需要使用微信支付，微信客服功能的用户
						<br />特点：<span class="color-default">无需提交300元即可进行认证</span>
					</div>
					<div class="action">
						<a href="<?php  echo url('wxapp/register')?>" class="btn btn-primary">注册</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>