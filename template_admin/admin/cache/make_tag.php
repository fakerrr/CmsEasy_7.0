<style type="text/css">
.main .main-right-box {
position: absolute;
top:130px;
right:30px;
left:30px;
bottom:30px;
}
</style>
<div class="main-right-box">
<h5>生成标签HTML</h5>
<div class="blank20"></div>
<div class="box">
<ul class="nav nav-tabs" role="tablist">
<li><a href="{$base_url}/index.php?case=cache&act=make_show&admin_dir={get('admin_dir')}&site=default">内容</a></li>
<li><a href="{$base_url}/index.php?case=cache&act=make_list&admin_dir={get('admin_dir')}&site=default">栏目</a></li>
<li><a href="{$base_url}/index.php?case=cache&act=make_type&admin_dir={get('admin_dir')}&site=default">分类</a></li>
<li><a href="{$base_url}/index.php?case=cache&act=make_special&admin_dir={get('admin_dir')}&site=default">专题</a></li>
<li class="active"><a href="{$base_url}/index.php?case=cache&act=make_tag&admin_dir={get('admin_dir')}&site=default">标签</a></li>
<li><a href="{$base_url}/index.php?case=cache&act=make_sitemap_google&admin_dir={get('admin_dir')}&site=default">Google地图</a></li>
<li><a href="{$base_url}/index.php?case=cache&act=make_sitemap_baidu&admin_dir={get('admin_dir')}&site=default">百度地图</a></li>
<li><a href="{$base_url}/index.php?case=cache&act=ctsitemap">网站地图</a></li>
<li><a href="{$base_url}/index.php?case=cache&act=make_index&admin_dir={get('admin_dir')}&site=default">首页</a></li>
</ul>
<div class="blank30"></div>
<style type="text/css">
	@media(max-width:468px) {
	.cache-btn {margin-top:10px;}
	}
</style>

<form name="typeform" method="post" action="<?php echo front::$uri;?>">
<div class="row">
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right">标签</div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-6 col-lg-6">
<?php
	echo form::select('tag',get('tag'),$hottags);
	?>
</div>
<div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 text-left">
	<?php echo form::submit('更新');
	?>
</div>
</div>
</div>
</form>
</div>
<div class="blank30"></div>
</div>
</div>
